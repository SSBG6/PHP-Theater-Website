<?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database_name ="theaterdb";
         

        // Create connection
            $conn = new mysqli ($servername, $username, $password,$database_name);

            // Check connection
            if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
                }
            echo "<h1>Connected.</h2>";
            
            $sql_m = "CREATE TABLE messages
                (email VARCHAR(255),
                    message VARCHAR(400))";
            if ($conn->query($sql_m)===TRUE)
            {
                echo "messages table successfully created";
            }
            else
            {
                echo "Error creating table: messages". $conn->error;
            }
            
           
            
            
?>