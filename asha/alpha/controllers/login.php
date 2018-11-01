<?php


class login extends Controller{

	function __construct()
	{

		parent::__construct(); 
		require 'views/index/top_content_default.php';
		require 'views/login/login_bar.php';
		require 'models/login/login_model.php';
		
		$model = new login_model();

		$register = @$_POST['register'];

		if(isset($register))
		{

			echo "success";
			$email = "";
			$password = "";
			$password2 = "";

			$email = strip_tags(@$_POST['first_name']);
			$password = strip_tags(@$_POST['last_name']);



			if(isset($_POST['email']) && isset($_POST['password'])){
				$user_login= $_POST['email'];
				$pass = $_POST['password'];

				$sql="SELECT id FROM users WHERE email = '$user_login' AND password='$pass'";

				$result=mysqli_query($con,$sql);

				$row = "";

				if($result)
				{
				    $row = mysqli_fetch_assoc($result);
				    $_SESSION["user_login"] = $row["id"];
				    header("location: index.php");
				}
			}
 	

		}
		else
	    {
   			 echo "Error";
 		}
	}
}




?>