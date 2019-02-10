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
        <form action="php/login.php" method="POST">
            <div class="bottom">
                <input name="uname" type="text" id="uname" class="user" placeholder="Username" required>
                <input name="pword" type="password" id="pword" class="psd" placeholder="Password" size="25" required>
                <button class="login" type="submit">Sign in</button>
            </div>
        </form>
    </body>
    <footer>
        <p>This website was designed by Benjamin Moss.</p>
    </footer>
</html>