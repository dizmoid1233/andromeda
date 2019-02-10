<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="css/login.css" type="text/css">
    </head>
    <body>
        <div class="top">
            <p>Sign in to Andromeda</p>
        </div>
        <form method="post" action="php/login.php">
            <div class="bottom">
                <input class="user" type="text" placeholder="Username" name="uname" required>
                <input class="psd" type="password" placeholder="Password" name="pword" size="25" required>
                <button class="login" type="submit">Sign in</button>
            </div>
        </form>
    </body>
    <footer>
        <p>This website was designed by Benjamin Moss.</p>
    </footer>
</html>