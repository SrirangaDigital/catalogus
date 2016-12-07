<?php

class viewHelper extends View {

	public function __construct() {

	}

	public function processWord($word) {

		$word = str_replace('|', 'or', $word);
		return $word;
	}
}

?>
