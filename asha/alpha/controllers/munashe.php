<?php

	/**
	* 
	*/
	class munashe extends Controller
	{
		
		function __construct()
		{
		
		require 'views/index/head.php';
		require 'views/index/nav.php';
		/* require 'views/index/search.php'; */

		require 'views/index/top_content_default.php';
		require 'views/munashe/munashe.php';
		require 'views/#footer/footer.php';	
		
		}
	}

?>