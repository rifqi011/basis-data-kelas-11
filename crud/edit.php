<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Siswa</title>
</head>

<body>
    <a href="index.php">Kembali</a>

    <?php
    include 'koneksi.php';

    $nis = $_GET['nis'];
    $query = mysqli_query($connect, "SELECT * FROM siswa WHERE nis = '$nis'");
    while ($data = mysqli_fetch_array($query)) {
    ?>
        <form action="proses/edit.php" method="post">
            <input type="hidden" name="nis" value="<?php echo $data['nis'] ?>">
            <input type="text" name="nama" placeholder="Masukan Nama" value="<?php echo $data['nama'] ?>">
            <input type="text" name="kelas" placeholder="Masukan Kelas" value="<?php echo $data['kelas'] ?>">
            <input type="radio" name="jeniskelamin" value="L" <?php if ($data['jeniskelamin'] == 'L') echo "checked" ?>>L
            <input type="radio" name="jeniskelamin" value="P" <?php if ($data['jeniskelamin'] == 'P') echo "checked" ?>>P
            <input type="submit" value="Kirim">
        </form>
    <?php
    }
    ?>

</body>

</html>