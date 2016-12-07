<?php

class listingModel extends Model {

	public function __construct() {

		parent::__construct();
	}

	public function listWordsOfLetter($letter){
	
		$dbh = $this->db->connect(DB_NAME);
		if(is_null($dbh))return null;

		$bindLetter = $letter . '%';

		$sth = $dbh->prepare('SELECT * FROM ' . BASEDATA_TABLE . ' WHERE word LIKE :letter ORDER BY id');
		$sth->bindParam(':letter', $bindLetter);
		$sth->execute();

		$data = array();

		while($result = $sth->fetch(PDO::FETCH_OBJ)) {

			array_push($data, $result);
		}
		$dbh = null;
		return $data;
	}
}
