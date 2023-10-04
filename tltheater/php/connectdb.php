<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database_name ="theaterdb";
 

// Create connection
    if($con = mysqli_connect ($servername, $username, $password,$database_name))
            {
        echo 'the local theater';
            }
            
?>
