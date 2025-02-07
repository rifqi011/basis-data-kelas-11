<?php include 'koneksi.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
</head>

<body>
    <?php
    include 'components/navbar.php';
    include 'components/sidebar.php';
    ?>

    <?php
    $id = $_GET['id'];
    $query = mysqli_query($connect, "SELECT * FROM buku_rifqi WHERE id = '$id'")
    ?>

    <div class="p-4 mt-14 ml-64 flex flex-col gap-4">
        <h1 class="text-3xl font-medium">Edit Data</h1>

        <?php
        while ($data = mysqli_fetch_array($query)) {
        ?>
            <form class="rounded-lg">
                <div class="mb-5">
                    <label for="judul" class="block mb-2 text-sm font-medium text-gray-900">Judul</label>
                    <input type="judul" id="judul" name="judul" value="<?= $data['judul'] ?>" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 outline-none" placeholder="Masukan Judul" readonly />
                </div>

                <div class="mb-5 flex justify-between gap-5">
                    <div class="flex-1">
                        <label for="penulis" class="block mb-2 text-sm font-medium text-gray-900">Penulis</label>
                        <input type="penulis" id="penulis" name="penulis" value="<?= $data['penulis'] ?>" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 outline-none" placeholder="Masukan Penulis" readonly />
                    </div>

                    <div class="flex-1">
                        <label for="penerbit" class="block mb-2 text-sm font-medium text-gray-900">Penerbit</label>
                        <input type="penerbit" id="penerbit" name="penerbit" value="<?= $data['penerbit'] ?>" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 outline-none" placeholder="Masukan Penerbit" readonly />
                    </div>
                </div>

                <div class="mb-5 flex justify-between gap-5">
                    <div class="flex-1">
                        <label for="tahun" class="block mb-2 text-sm font-medium text-gray-900">Tahun</label>
                        <input type="tahun" id="tahun" name="tahun" min="1800" max="2025" value="<?= $data['tahun'] ?>" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 outline-none" placeholder="Masukan Tahun" readonly />
                    </div>

                    <div class="flex-1">
                        <label for="kategori" class="block mb-2 text-sm font-medium text-gray-900">Kategori</label>
                        <input type="kategori" id="kategori" name="kategori" value="<?= $data['kategori'] ?>" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 outline-none" placeholder="Masukan Penerbit" readonly />
                    </div>
                </div>
                <a href="index.php" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Kembali</a>
            </form>

        <?php
        }
        ?>
    </div>
</body>

</html>