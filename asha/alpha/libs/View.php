<?php


class View{

	function __construct()
	{

		

		/* does work for index page is different from site pages [28/06/2018]
		require 'views/index/nav.php';
		/* require 'views/index/search.php'; */


		
	}

	public function render($name)
	{
		require 'views/index/' . $name . '.php';

		
	}



}

?>