<?php

class describe extends Controller {

	public function __construct() {

		parent::__construct();
	}

	public function index() {

	}

	public function word($page = '', $word = '') {

		$volume = '001';
		$page = $page . ".jpg";
		$djvurl = PHY_PUBLIC_URL . "Volumes/djvu/" . $volume;
		$imgurl = PHY_PUBLIC_URL . "Volumes/jpg/2/". $volume;
		
		$djvulist=scandir($djvurl);
		$cmd='';
		
		for($i=0;$i<count($djvulist);$i++)
		{
			if($djvulist[$i] != '.' && $djvulist[$i] != '..' && preg_match('/(\.djvu)/' , $djvulist[$i]) && !preg_match('/(index\.djvu)/' , $djvulist[$i]))
			{
				$img = preg_split("/\./",$djvulist[$i]);
				$book["imglist"][$i]= $img[0].".jpg";
			}
		}
	
		$book["imglist"]=array_values($book["imglist"]);
		$book["Title"] = "Catalogus Catagorum";
		$book["TotalPages"] = count($book["imglist"]);
		$book["SourceURL"] = "";
		$result = array_keys($book["imglist"], $page);
		$book["pagenum"] = $result[0];
		$book["volume"] = $volume;
		// $book["imgurl"] = $imgurl;	 

		$book["imgurl"] = str_replace(PHY_PUBLIC_URL, PUBLIC_URL, $imgurl);		

		$json = json_encode($book);

		($json) ? $this->view('describe/word', $json) : $this->view('error/noResults');

		// $this->absoluteRedirect(PUBLIC_URL . 'bookReader/templates/book.php?volume=001&page=' . $page );
	}
}

?>
