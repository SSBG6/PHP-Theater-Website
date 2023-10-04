<?php 
		include("php\connectdb.php");
		$user_name = $_POST['uname'];
                $email = $_POST['mail'];
		$password = $_POST['passd'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$query = "insert into users values ('$user_name','$password ','','$email')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
?>