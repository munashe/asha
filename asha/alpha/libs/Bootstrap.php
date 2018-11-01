<?php

// This is version 3 of the Bootstrap of the MVC architecture powering Masaisai. Major changes include less code,
// style and the handling of only one tring after the slash (/)
// : 23/06/2018 : 16.51 (version 3 message)

class Bootstrap
{
	function __construct()
	{

	}
}

// Suppresed error on getting url from .htaccess not sure cause of error : 23/06/2018 : 16.51 (version 3 message)


@$url= $_GET['u'];	

$file = 'controllers/' . $url . '.php';

if(empty($url))
{
	require 'controllers/index.php';
	$index = new index();
	return false;
}

if(file_exists($file))
{
	
	//print_r($url);

	require $file ;
	$controller = new $url;

	/* 
	version 1 (message)
	Not being used at the time for the website [23/06/2018 : 9.33]

	if(isset($url[1])){

	if($url[1] .''== 'other')
	$controller -> other();

	
}
	*/

}
else{

	//echo 'The file: ' . $file . ' does not exist';

	echo "404 error: The page does not exist";
}



?>