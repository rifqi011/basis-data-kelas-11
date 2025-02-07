<?php

include '../koneksi.php';

$id = $_GET['id'];

$query = "UPDATE buku_rifqi SET active = 0 WHERE id = '$id'";
$run = mysqli_query($connect, $query);

if ($run) {
    header("Location: ../index.php");
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($connect);
}
