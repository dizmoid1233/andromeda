<?php
    $username = $_SESSION['username'];
    $mysqli_db_hostname = "localhost";
    $mysqli_db_user = "andromeda";
    $mysqli_db_password = "Forsaken2019!";
    $mysqli_db_database = "andromeda";
    $con = mysqli_connect($mysqli_db_hostname, $mysqli_db_user, $mysqli_db_password, $mysqli_db_database)
    or die("Could not connect database");
    mysqli_select_db($con, $mysqli_db_database)or die("Could not select database");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Your Device</title>
        <div class="header">
            <?php
                $query = mysqli_query($con, "SELECT device_owner FROM devices WHERE username='$username'");
                $row = $query->fetch_assoc();
            ?>
            <p class="title"><?php echo $row['device_owner'];?></p>
            <div class="button">
                <p class="button"><a class="header">Log out</a></p>
            </div>
        </div>
        <link href="../css/main.css" type="text/css" rel="stylesheet">
    </head>
    <body>
        <div class="card">
            <p>Client landing page</p>
        </div>
    </body>
</html>