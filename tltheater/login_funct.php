<?php 

session_start();

        include("php\connectdb.php");
		$user_name = $_POST['uname'];
		$password = $_POST['passd'];
                $role = 'admin';

		if(!empty($user_name) && !empty($password))
		{

			//read from database
			$query = "select * from users where uname = '$user_name'";
			$result = mysqli_query($con, $query);

			if($result)
			{   
                            $user_data = mysqli_fetch_assoc($result);
					
					if($password === $user_data['password']){
						if($user_data['role'] === $role)
						{
							header("Location: Bmanage.html");
							die;
						}else{
						header("Location: announce.php");
						die;}
                                        }{
                                    echo "wrong username or password!1";
                                    }
				}else{
                                    echo "wrong username or password!2";
                                    }
		}else{
		echo "wrong username or password!3";
		}
	

?>