<?php

	/**
	* 
	*/
	class gallery extends Controller
	{
		
		function __construct()
		{
		
		require 'views/index/head.php';
		require 'views/index/nav.php';
		/* require 'views/index/search.php'; */

		require 'views/index/top_content_default.php';
		require 'views/gallery/gallery.php';
				require 'views/#footer/footer.php';	
		
		}
	}

?>