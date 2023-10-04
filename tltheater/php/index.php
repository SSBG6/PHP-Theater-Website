<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $servername = "localhost";
            $username = "root";
            $password = "";

        // Create connection
            $conn = new mysqli($servername, $username, $password);

            // Check connection
            if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
                }
            echo "<h1>Connected.</h2>";
        ?>
    </body>
</html>
