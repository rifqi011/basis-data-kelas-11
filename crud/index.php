<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Data Siswa</title>
</head>

<body>
    <a href="input.php">Input</a>

    <table border="1">
        <tr>
            <td>NIS</td>
            <td>Nama</td>
            <td>Kelas</td>
            <td>Jenis Kelamin</td>
            <td>Aksi</td>
        </tr>
        <?php
        include "koneksi.php";

        $query = mysqli_query($connect, "SELECT * FROM siswa");

        while ($data = mysqli_fetch_array($query)) {
        ?>
            <tr>
                <td><?php echo $data["nis"] ?></td>
                <td><?php echo $data["nama"] ?></td>
                <td><?php echo $data["kelas"] ?></td>
                <td><?php echo $data["jeniskelamin"] ?></td>
                <td>ubah | hapus</td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>