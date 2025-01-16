<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Siswa</title>
</head>
<body>
    <a href="index.php">Kembali</a>
    <form action="proses/input.php" method="post">
        <input type="text" name="nis" placeholder="Masukan NIS">
        <input type="text" name="nama" placeholder="Masukan Nama">
        <input type="text" name="kelas" placeholder="Masukan Kelas">
        <input type="radio" name="jeniskelamin" value="L">L
        <input type="radio" name="jeniskelamin" value="P">P
        <input type="submit" value="Kirim">
    </form>
</body>
</html>