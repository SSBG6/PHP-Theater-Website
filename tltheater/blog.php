<?php 
		include("php\connectdb.php");
		$user_name = $_POST['uname'];
                $header = $_POST['head'];
		$messages = $_POST['mess'];

		if(!empty($user_name) && !empty($messages))
		{

			//save to database
			$query = "insert into blog values ('$user_name','$header','$messages')";

			mysqli_query($con, $query);

			header("Location: Bmanage.html");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
?>