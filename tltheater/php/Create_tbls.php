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
            
            $sql_user = "CREATE TABLE users
                (uname VARCHAR(20) NOT NULL,
                    password VARCHAR (20),
                    role VARCHAR(20),
                    email VARCHAR(255),
                    PRIMARY KEY(uname))";
            if ($conn->query($sql_user)===TRUE)
            {
                echo "User's table successfully created";
            }
            else
            {
                echo "Error creating table: users". $conn->error;
            }
            
            $sql_mbt= "CREATE TABLE mblog
                (blogid VARCHAR(20) NOT NULL,
                 uname VARCHAR(20) NOT NULL,
                    imageurl VARCHAR (200),
                    blogtext VARCHAR(400),
                    PRIMARY KEY(blogid),
                    FOREIGN KEY (uname) REFERENCES users(uname))";
            if ($conn->query($sql_mbt)===TRUE)
            {
                echo "Microblog table successfully created";
            }
            else
            {
                echo "Error creating table; microblog". $conn->error;
            }
            
            $sql_comment= "CREATE TABLE mcomments
                (blogid VARCHAR(20) NOT NULL,
                 uname VARCHAR(20) NOT NULL,
                    comment VARCHAR(400),
                    FOREIGN KEY (uname) REFERENCES users(uname),
                    FOREIGN KEY (blogid) REFERENCES mblog(blogid)
                    )";
            if ($conn->query($sql_comment)===TRUE)
            {
                echo "comments table successfully created";
            }
            else
            {
                echo "Error creating table; comments". $conn->error;
            }
            
            $sql_movie= "CREATE TABLE movie
                (movie_id VARCHAR(20) NOT NULL,
                 movie_name VARCHAR(20) NOT NULL,
                 PRIMARY KEY(movie_id))";
            if ($conn->query($sql_movie)===TRUE)
            {
                echo "movie table successfully created";
            }
            else
            {
                echo "Error creating table; movie". $conn->error;
            }
            
            $sql_rmovie= "CREATE TABLE moreview
                (movie_id VARCHAR(20) NOT NULL,
                 score VARCHAR(5) NOT NULL,
                 FOREIGN KEY (movie_id) REFERENCES movie(movie_id))";
            if ($conn->query($sql_rmovie)===TRUE)
            {
                echo "movie table successfully created";
            }
            else
            {
                echo "Error creating table; movie". $conn->error;
            }
            
            
?>