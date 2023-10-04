<?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database_name ="theaterdb";

        // Create connection
            $conn = new mysqli($servername, $username, $password,$database_name);

            // Check connection
            if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
                }
            $sql_com= "INSERT INTO users (uname,password,role,email)
            VALUES ('admin1', 'admin@123', 'admin','')";

            if ($conn->query($sql_com) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

$conn->close();
            
?>
