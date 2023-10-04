<!DOCTYPE html>

<html>
    <head>
        <title>Annoucements</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/nav.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Slab&family=Roboto+Slab&display=swap" rel="stylesheet"> 
        <title></title>
    </head>
    <body>
        <div class="logo">
            <img src="img/tlt_logo.png" href="Home.html" alt="logos" style="width:auto;height:150px;">
        </div>
        <h3>
            Messages
        </h3>
        <ul class="navbar-nav">
                    <li class="nav-item" style="float:right">
                        <a href="Home.html" class="Home">Home</a>
                        <a href="announce.php" class="annouce">Annoucements</a>
                        <a href="Contact.html" class="contact">Contact us</a>
                        <a href="login.php" class="login">Log In</a>
                    </li>
        </ul>
        <div class="log3">
        <?php
        include("php\connectdb.php");
        $query = "select * from messages;";
        $queryResult = $con->query($query);
        echo "<table>";
        while ($queryRow = $queryResult->fetch_row()) {
            echo "<tr>";
            for($i = 0; $i < $queryResult->field_count; $i++){
                echo "<td>$queryRow[$i]</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
        $con->close();
        ?>
        </div>
        </form>
    </body>
</html>
