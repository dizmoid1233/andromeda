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
        <form method="post">
            <div class="bottom">
                <input class="user" type="text" placeholder="Username" name="uname" required>
                <input class="psd" type="text" placeholder="Password" name="pword" size="25" required>
                <button class="login" type="submit">Sign in</button>
            </div>
        </form>
    </body>
    <?php
        $username = $_POST['uname'];
        $password = md5($_POST['pword']);
        $mysql_db_hostname = "localhost";
        $mysql_db_user = "andromeda";
        $mysql_db_password = "Forsaken2019!";
        $mysql_db_database = "andromeda";
        $con = mysql_connect($mysql_db_hostname, $mysql_db_user, $mysql_db_password)
        or die("Could not connect database");
        mysql_select_db($mysql_db_database, $con)or die("Could not select database");

        $query = "SELECT * FROM registered_users WHERE name='$username' AND password='$password'";
        $result = mysql_query($query)or die(mysql_error());
        $num_row = mysql_num_rows($result);
        $row=mysql_fetch_array($result);
        if( $num_row >=1 ) { 
        echo 'true';
        $_SESSION['user_name']=$row['uname'];
        header('Location: sub/test.html');
            }
        else{
        echo 'false';
        }
    ?>
    <footer>
        <p>This website was designed by Benjamin Moss.</p>
    </footer>
</html>