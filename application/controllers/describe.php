<?php

class describe extends Controller {

	public function __construct() {

		parent::__construct();
	}

	public function index() {

	}

	public function word($page = '', $word = '') {

		$this->absoluteRedirect(PUBLIC_URL . 'bookReader/templates/book.php?volume=001&page=' . $page );
	}
}

?>
