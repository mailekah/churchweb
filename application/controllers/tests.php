
<?php
class Tests extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this -> load -> library('unit_test');
		// $this -> load -> model('testing_table');
	}

	public function runtests() {

		$test1 = Testing_Table::create(array('created_date' => date(DATE_W3C), 'text' => 'This is a test'));
		
		$test2 = Testing_Table::find($test1->id);
		
		$this->unit->run($test1->id,$test2->id,'check db connectivity');
		
		foreach (Testing_Table::all() as $test){
			$test->delete();
		}
		$this->unit->run(Testing_Table::all(),array(),'emptied table');
		
		echo $this -> unit -> report();

	}

}
?>