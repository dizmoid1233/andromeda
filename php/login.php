<?php
    session_start();
    ini_set('display_errors',1);
    error_reporting(E_ALL|E_STRICT);
    echo 'yo man';
    print_r($_POST['uname']);
    print_r($_POST['pword']);
    $username = $_POST['uname'];
    $password = $_POST['pword'];
    $mysqli_db_hostname = "localhost";
    $mysqli_db_user = "andromeda";
    $mysqli_db_password = "Forsaken2019!";
    $mysqli_db_database = "andromeda";
    $con = mysqli_connect($mysqli_db_hostname, $mysqli_db_user, $mysqli_db_password, $mysqli_db_database)
    or die("Could not connect database");
    mysqli_select_db($con, $mysqli_db_database)or die("Could not select database");

    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    print_r($query);
    $result = mysqli_query($con, $query)or die(mysqli_error($con));
    $num_row = mysqli_num_rows($result);
    $row=mysqli_fetch_array($result);
    if( $num_row >=1 ) { 
    echo 'true';
    $_SESSION['user_name']=$row['uname'];
    header('Location: ../sub/test.html');
        }
    else{
    echo 'false';
    }
?>