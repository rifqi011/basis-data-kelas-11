<?php

include '../koneksi.php';

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $penulis = $_POST['penulis'];
    $penerbit = $_POST['penerbit'];
    $tahun = $_POST['tahun'];
    $kategori = $_POST['kategori'];

    $query = "UPDATE buku_rifqi SET judul = '$judul', penulis = '$penulis', penerbit = '$penerbit', tahun = '$tahun', kategori = '$kategori' WHERE id = '$id'";
    $run = mysqli_query($connect, $query);

    if ($run) {
        header("Location: ../index.php");
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($connect);
    }
}