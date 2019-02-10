<?php
    session_start();
    echo 'yo man';
    $username = $_POST['uname'];
    $password = $_POST['pword'];
    $mysqli_db_hostname = "localhost";
    $mysqli_db_user = "andromeda";
    $mysqli_db_password = "Forsaken2019!";
    $mysqli_db_database = "andromeda";
    $con = mysqli_connect($mysqli_db_hostname, $mysqli_db_user, $mysqli_db_password, $mysqli_db_database)
    or die("Could not connect database");
    mysqli_select_db($con, $mysqli_db_database)or die("Could not select database");

    $query = "SELECT * FROM users WHERE name='$username' AND password='$password'";
    $result = mysqli_query($query)or die(mysqli_error());
    $num_row = mysqli_num_rows($result);
    $row=mysqli_fetch_array($result);
    if( $num_row >=1 ) { 
    echo 'true';
    $_SESSION['user_name']=$row['uname'];
    header('Location: sub/test.html');
        }
    else{
    echo 'false';
    }
?>