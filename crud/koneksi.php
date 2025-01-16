<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db   = "latihan_awal_sem";

    $connect = mysqli_connect($host, $user, $pass, $db);

    // Check connection
    if (!$connect) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>