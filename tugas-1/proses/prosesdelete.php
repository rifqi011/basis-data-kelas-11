<?php

include '../koneksi.php';

$id = $_GET['id'];

// soft delete
// $query = "UPDATE buku_rifqi SET active = 0 WHERE id = '$id'";

$query = "DELETE FROM buku_rifqi WHERE id = '$id'";
$run = mysqli_query($connect, $query);

if ($run) {
    header("Location: ../index.php");
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($connect);
}
