<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "db_perpustakaan_33";

$connect = mysqli_connect($host, $user, $password, $database);

if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
