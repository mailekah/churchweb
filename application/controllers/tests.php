
<?php
class Tests extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this -> load -> library('unit_test');
		// $this -> load -> model('testing_table');
	}

	public function runtests() {

		$test = Testing_Table::create(array('created_date' => date(DATE_W3C), 'text' => 'This is a test'));

		echo $this -> unit -> report();

	}

}
?>