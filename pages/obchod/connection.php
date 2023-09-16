<?php
    $name = "localhost";
    $password = "";
    $host = "127.0.0.1";
    $db = "vypletemeraketu";

    $conn = mysqli_connect($name, $password, $host);

    if(!$conn) {
        die("Connection failed: ". mysqli_error($conn));
    } else {
        echo("Connection successfull!");
    }

?>