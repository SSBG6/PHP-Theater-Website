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
            
            $sql_bb = "CREATE TABLE blog
                (uname VARCHAR(20) not null,
                 title VARCHAR(200),
                    message VARCHAR(400))";
            if ($conn->query($sql_bb)===TRUE)
            {
                echo "blog table successfully created";
            }
            else
            {
                echo "Error creating table: blog". $conn->error;
            }
            
           
            
            
?>