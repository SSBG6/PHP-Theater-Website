<!DOCTYPE html>

<html>
    <head>
        <title>Sign Up</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/nav.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Slab&family=Roboto+Slab&display=swap" rel="stylesheet"> 
    </head>
    <body>
        <div class="logo">
            <img src="img/tlt_logo.png" href="Home.html" alt="logos" style="width:auto;height:150px;">
        </div>
        <ul class="navbar-nav">
                    <li class="nav-item" style="float:right">
                        <a href="Home.html" class="Home">Home</a>
                        <a href="announce.php" class="annouce">Announcements</a>
                        <a href="Contact.html" class="contact">Contact us</a>

                    </li>
        </ul>
	<div class="log">
            <form action="functions.php" method="POST">
                <h3>Enter Log in details.</h3>
                <a>Username :</a> <input id="uname" type="text" name="uname" required/><br />
                <a>Password : </a> <input id="passd" type="text" name="passd" required/><br />
                <a>Email : </a> <input id="mail" type="text" name="mail" required/><br />
                <input type="submit" value="Sign Up" class="submits"/>
            </form>
            <div class="ye" style="float:right">
                <a href="login.php" class="sign up">Log in</a>
            </div>
        </div>
    </body>
</html>
