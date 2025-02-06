<?php

include '../koneksi.php';

if (isset($_POST['submit'])) {
    $judul = $_POST['judul'];
    $penulis = $_POST['penulis'];
    $penerbit = $_POST['penerbit'];
    $tahun = $_POST['tahun'];
    $kategori = $_POST['kategori'];

    $query = "INSERT INTO buku_rifqi (judul, penulis, penerbit, tahun, kategori) VALUES ('$judul', '$penulis', '$penerbit', $tahun, '$kategori')";
    $run = mysqli_query($connect, $query);

    if ($run) {
        header("Location: ../index.php");
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($connect);
    }
}
?>
