<?php

class help extends Controller{

	function __construct()
	{
			echo "Welcome to Help <br>";
	}




	public function other($arg = false)
	{
		echo "welcome to other";

		require 'models/help_model.php';
		$model = new help_model();
	}


	
}

?>