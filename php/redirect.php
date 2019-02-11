<?php

    $mysqli_db_hostname = "localhost";
    $mysqli_db_user = "andromeda";
    $mysqli_db_password = "Forsaken2019!";
    $mysqli_db_database = "andromeda";
    $username = $_SESSION['username'];
    $con = mysqli_connect($mysqli_db_hostname, $mysqli_db_user, $mysqli_db_password, $mysqli_db_database)
    or die("Could not connect database");
    mysqli_select_db($con, $mysqli_db_database)or die("Could not select database");

    $query = "SELECT admin FROM users WHERE username='$username'";
    $result = mysqli_query($con, $query)or die(mysqli_error($con));
    $num_row = mysqli_num_rows($result);
    $row=mysqli_fetch_array($result);
    print_r($row);
    header('Location: ../sub/client_landing.html');
?>