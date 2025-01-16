<?php
include "../koneksi.php";

$nis = $_POST["nis"];
$nama = $_POST["nama"];
$kelas = $_POST["kelas"];
$jeniskelamin = $_POST["jeniskelamin"];

echo "$nis, $nama, $kelas, $jeniskelamin";

$input = "INSERT INTO siswa (nis, nama, kelas, jeniskelamin) VALUES ('$nis', '$nama', '$kelas', '$jeniskelamin')";
$run = mysqli_query($connect, $input);

header("Location: ../");