<?php

class listing extends Controller {

	public function __construct() {

		parent::__construct();
	}

	public function index() {

		$this->alphabet();
	}

	public function letter($letter = DEFAULT_LETTER) {

		$words = $this->model->listWordsOfLetter($letter);
		($words) ? $this->view('listing/words', $words) : $this->view('error/noResults');
	}
}

?>
