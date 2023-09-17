<?php
    $name = "if0_35047945";
    $password = "koXaFUKF8hEY1";
    $host = "sql111.infinityfree.com";
    $db = "if0_35047945_vypletemeraketu_db";

    $conn = mysqli_connect($name, $password, $host, $db);

    if(!$conn) {
        die("Connection failed: ". mysqli_error($conn));
    } else {
        echo("Connection successfull!");
    }

?>