<?php

class errors extends Controller{

	function __construct(){

	echo "welcome to the land of errors";
	parent:: __construct();
	
	$this-> View -> render('error/header');

	}

}
	
?>