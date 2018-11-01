<?php
/* updated link color and uploaded masaisai v4
	moved the site fro alpha to beta and now orking on cleaning up the desig page by page
	[26.06.2018]
*/
	
class index extends Controller{

	function __construct()
	{
		parent::__construct();


		require 'views/index/head_index.php';

		// I just don't believe this first line of code below [28/06/2018]
		//require 'views/#header/header.php';


		require 'views/index/nav_index.php';

		require 'views/index/top_content.php';

		require 'views/#intro/intro.php';
		require 'views/blog/blog_bar.php';

		require 'views/#footer/footer.php';		
		
	}

}

?>