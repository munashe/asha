<?php

	/**
	* 
	*/
	class archive extends Controller
	{
		
		function __construct()
		{
		
		require 'views/index/head.php';
		require 'views/index/nav.php';
		/* require 'views/index/search.php'; */

		require 'views/index/top_content_default.php';
		require 'views/archive/archive.php';
				require 'views/#footer/footer.php';	
		
		}
	}

?>