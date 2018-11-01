<?php

	/**
	* 
	*/
	class about extends Controller
	{
		
		function __construct()
		{
		
		require 'views/index/head.php';
		require 'views/index/nav.php';

		require 'views/index/top_content_default.php';
		require 'views/about/about_bar.php';
		require 'views/#footer/footer.php';	
		
		}
	}

?>