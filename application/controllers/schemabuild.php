
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
		echo "<h2>Rebuilding Schema</h2>";
		$dbh = Testing_Table::connection() -> connection;
		$query = $this -> db -> query("SELECT * FROM sqlite_master WHERE type='table'");

		foreach ($query->result() as $row) {
			if ($row -> name != 'sqlite_sequence'){
				$sql = "DROP TABLE $row->name";
				echo "$sql<br>";
				$dbh -> exec($sql);				
			}
		}
		// foreach($dbh->query('SELECT * FROM sqlite_master WHERE type="table"') as $row) {
		//print_r($row);
		// }

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
					// echo "<em>$m[1]</em>";
					// echo "<br>";
					$properties .= "'$m[1]' INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, ";
				} else if (preg_match("/^[-~](.*)$/", $line, $m)) {
					$properties .= "'$m[1]' TEXT, ";
					// echo $m[1];
					// echo "<br>";
				} else {
					//echo "<h3>$line</h3>";
					if ($table_name != "") {
						$properties = substr($properties, 0, strlen($properties) - 2);
						$sql = "CREATE TABLE '$table_name' ($properties);";
						echo "$sql<br>";
						$dbh -> exec($sql);
						$properties = "";
					}
					$table_name = $line;
				}

			}
			if ($table_name != "") {
				$properties = substr($properties, 0, strlen($properties) - 2);
				$sql = "CREATE TABLE '$table_name' ($properties);";
				echo "$sql<br>";
				$dbh -> exec($sql);
				$properties = "";
			}
			if (!feof($txt)) {
				echo "Error: unexpected fgets() fail\n";
			}
			fclose($txt);
		}
	}

}
?>