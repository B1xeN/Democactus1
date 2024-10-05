<?php
    $host = "localhost";
    $user = "root";
    $passwd = "12345678";
    $dbname = "cactus";
    $dbconn =  new mysqli($host, $user, $passwd, $dbname) or trigger_error(mysql_error(),E_USER_ERROR);
    if ($dbconn->connect_error) {
      die("Connection failed: " . $dbconn->connect_error);
    }
    mysqli_query($dbconn, "SET NAMES UTF8");
?>