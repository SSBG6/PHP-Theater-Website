<?php
    include("php\connectdb.php");
    $email = $_POST['mail'];
    $message = $_POST['message'];

    if(!empty($email) && !empty($message))
    {
        //save to database
        $query = "insert into messages values ('$email','$message')";

        mysqli_query($con, $query);

        header("Location: Home.html");
        echo "Message received";
        die;
        }else
        {
        echo "Please enter some valid information!";
        }
?>