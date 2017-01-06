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

	public function getImageUrl($level,$index,$volume,$mode){
		
		$book = $_POST['book'];
		$imgurl = '../../../public/Volumes/jpg/2/' . $volume;
		$reduce = round($level);
		$img = preg_split("/\./",$book[$index]);

		if($reduce == 1)
		{
			$imgurl = "../../../public/Volumes/jpg/1/" . $volume;
		}
		$array['id'] = "#pagediv".$index;
		$array['mode'] = $mode;
		$array['img'] = $imgurl."/".$img[0].".jpg";
		echo json_encode($array);

		$myfile = fopen(PHY_PUBLIC_URL . "images/BookReader/appcache.manifest", "w") or die("Unable to open file!!!");
		fwrite($myfile,"CACHE MANIFEST\n");
		fwrite($myfile,$imgurl."/".$img[0].".jpg");
		fwrite($myfile,"\n\nNETWORK:\n*\n");
		fwrite($myfile,"FALLBACK:\n");
		fclose($myfile);
	}
}

?>
