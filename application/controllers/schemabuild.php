
<?php
class SchemaBuild extends CI_Controller {

	function __construct() {
		parent::__construct();

	}

	public function build() {
		$this -> load -> database();
		$this -> load -> dbforge();
		
		
		//
		// $tables = $this -> db -> list_tables();
		//
		// foreach ($tables as $table) {
		// echo $table;
		// }

		$query = $this -> db -> query("SELECT * FROM sqlite_master WHERE type='table'");
		
		foreach ($query->result() as $row) {
		}
		$this->dbforge->create_table('table_name');
		$this->dbforge->drop_table('table_name',TRUE);
		$txt = fopen("datamodel.txt", "r");

		if ($txt) {
			$table_name = "";
			$properties = "";
			while (($line = fgets($txt)) !== false) {
				$m = array();
				$line = preg_replace("/^\s+/", "", $line);
				$line = preg_replace("/\s+$/", "", $line);
				if (preg_match("/^#/", $line) || $line == "") {
					continue;
				} else if (preg_match("/^-\*(.*)$/", $line, $m)) {
					//ID, primary key, autoincrement
					echo "<em>$m[1]</em>";
					echo "<br>";
					$properties .= "'$m[1]' INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, ";
				} else if (preg_match("/^[-~](.*)$/", $line, $m)) {
					$properties .= "'$m[1]' TEXT, ";
					echo $m[1];
					echo "<br>";
				} else {
					echo "<h3>$line</h3>";
					if ($table_name != "") {
						$properties = substr($properties, 0, strlen($properties) - 2);
						$sql = "CREATE TABLE '$table_name' ($properties);";
						$properties = "";
						echo $sql . "<br>";
					}
					$table_name = $line;
				}

			}
			if (!feof($txt)) {
				echo "Error: unexpected fgets() fail\n";
			}
			fclose($txt);
		}
	}

}
?>