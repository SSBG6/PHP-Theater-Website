<?php
            $servername = "localhost";
            $username = "root";
            $password = "";
        

        // Create connection
            $conn = new mysqli ($servername, $username, $password);

            // Check connection
            if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
                }
            echo "<h1>Connected.</h2>";
            
            $test = "CREATE DATABASE theaterdb";
            if ($conn->query($test)===TRUE)
            {
                echo "Users database successfully created";
            }
            else
            {
                echo "Error creating database; theaterdb". $conn->error;
            }
            $conn->close();
?>