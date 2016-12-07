<?php

class describe extends Controller {

	public function __construct() {

		parent::__construct();
	}

	public function index() {

	}

	public function word($page = '', $word = '') {

		$this->absoluteRedirect(VOLUMES_URL . '001/index.djvu?djvuopts&page=' . $page . '.djvu&zoom=page');
	}
}

?>
