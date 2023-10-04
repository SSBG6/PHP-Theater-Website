<!DOCTYPE html>
<html>
    <head>
        <title>login</title>
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
        <div class="log">
            <form action="login_funct.php" method="POST">
                <h3>Enter Log in details.</h3>
                <a>Username :</a> <input type="text" name="uname" id="uname" required/><br />
                <a>Password :</a> <input type="password" name="passd" id="passd" required/><br />
                <input type="submit" value="Log In" class="submits"/>
            </form>
            <div class="ye" style="float:right">
                <a href="signup.php" class="sign up">Sign Up</a>
            </div>
    </body>
</html>
