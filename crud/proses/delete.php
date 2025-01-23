<?php
include "../koneksi.php";

$nis = $_GET['nis'];

$delete = "DELETE FROM siswa WHERE nis = '$nis'";
$run = mysqli_query($connect, $delete);

header("Location: ../");