<?php
    $username = $_COOKIE['usrinfo'];
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
                $query = "SELECT device_owner FROM devices WHERE username='$username'";
                $result = mysqli_query($con, $query)or die(mysqli_error($con));
                $row = $result->fetch_assoc();
                echo $row['device_owner'];
            ?>
            <p class="title">yote</p>
            <?php echo $row['device_owner'];?>
            <div class="button">
                <p class="button"><a class="header">Log out</a></p>
            </div>
        </div>
        <link href="../css/main.css" type="text/css" rel="stylesheet">
    </head>
    <body>
        <?php
            $query = "SELECT * FROM devices WHERE username='$username'";
            $result = mysqli_query($con, $query)or die(mysqli_error($con));
            $row = $result->fetch_assoc();
            echo $result;
        ?>
        <div class="card">
            <?php echo $row['device_name'];
                  echo $row['device_model']; ?>
        </div>
    </body>
</html>