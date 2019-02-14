<?php
    $servername = "localhost";
    $sql_user = "andromeda";
    $password = "Forsaken2019!";
    
    try {
        $conn = new PDO("mysql:host=$servername;dbname=andromeda", $sql_user, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully";
        }
    catch(PDOException $e)
        {
        echo "Connection failed: " . $e->getMessage();
        }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Your Device</title>
        <div class="header">
            <p class="title">yote</p>
            <div class="button">
                <p class="button"><a class="header">Log out</a></p>
            </div>
        </div>
        <link href="../css/main.css" type="text/css" rel="stylesheet">
    </head>
    <body>
        <?php
            $username = $_COOKIE['usrinfo'];
            $sql = "SELECT * FROM users where username=$username";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                   echo $row['device_owner'];
                }
            } else {
                echo "0 results";
            }
            $conn->close();
        ?>
        <div class="card">
            <p>Does this work?</p>
            <p><?php echo $row['device_owner']?></p>
        </div>
    </body>
</html>