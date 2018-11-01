<?php

	/**
	* 
	*/
	class cafe extends Controller
	{
		
		function __construct()
		{
		
		require 'views/index/head.php';
		require 'views/index/nav.php';

		require 'views/index/top_content_default.php';
		require 'views/cafe/cafe.php';
		require 'views/#footer/footer.php';	
		
		}
	}

?>