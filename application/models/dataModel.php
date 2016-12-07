<?php

class dataModel extends Model {

	public function __construct() {

		parent::__construct();
	}

	public function getData() {
		
		$fileName = XML_SRC_URL . 'source.xml';

		if (!(file_exists(PHY_XML_SRC_URL . 'source.xml'))) {

			return False;
		}
		
		$xml = simplexml_load_file($fileName);

		$data = [];
		$idNum = 1;
		foreach ($xml->entry as $entry) {

			$row['page'] = sprintf("%04d", intval($this->devanagari2Roman((string) $entry['page'])));
			$row['word'] = $entry->__toString();
			$row['id'] = sprintf("%05d", $idNum++);

			array_push($data, $row);
			$row = [];
		}
		return $data;
	}
}

?>
