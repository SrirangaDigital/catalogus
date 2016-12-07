<?php

class data extends Controller {

	public function __construct() {
		
		parent::__construct();
	}

	public function index() {

		$this->insertDetails();
	}

	public function insert(){

		$data = $this->model->getData();

		if($data) {

			$this->model->db->createDB(DB_NAME, DB_SCHEMA);

			$dbh = $this->model->db->connect(DB_NAME);
			$this->model->db->dropTable(BASEDATA_TABLE, $dbh);
			$this->model->db->createTable(BASEDATA_TABLE, $dbh, BASEDATA_TABLE_SCHEMA);

			foreach ($data as $row) {

				$this->model->db->insertData(BASEDATA_TABLE, $dbh, $row);
			}
		}
		else{

			$this->view('error/blah');
		}
	}
}

?>
