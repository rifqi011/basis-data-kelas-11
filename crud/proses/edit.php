<?php
include "../koneksi.php";

$nis = $_POST["nis"];
$nama = $_POST["nama"];
$kelas = $_POST["kelas"];
$jeniskelamin = $_POST["jeniskelamin"];

if ($nis != null && $nama != null && $kelas != null && $jeniskelamin != null) {
    $edit = "UPDATE siswa SET nama='$nama', kelas='$kelas', jeniskelamin='$jeniskelamin' WHERE nis = '$nis'";
    $run = mysqli_query($connect, $edit);
}

header("Location: ../");
