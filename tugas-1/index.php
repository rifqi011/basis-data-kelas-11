<?php include 'koneksi.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
</head>

<body>
    <?php
    include 'components/navbar.php';
    include 'components/sidebar.php';
    ?>

    <!-- Content -->
    <div class="p-4 mt-14 ml-64 flex flex-col gap-4">
        <h1 class="text-3xl font-medium">Dashboard</h1>

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-400">
                <thead class="text-xs uppercase bg-gray-600 text-gray-200">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            No
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Judul
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Penulis
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Kategori
                        </th>
                        <th scope="col" class="px-6 py-3 text-right w-[20%]">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    $query = mysqli_query($connect, "SELECT * FROM buku_rifqi WHERE active = 1");

                    while ($data = mysqli_fetch_array($query)) {
                    ?>
                        <tr class="text-white border-b bg-gray-800 border-gray-700 hover:bg-gray-700">
                            <td class="px-6 py-4">
                                <?= $no++ ?>
                            </td>
                            <td scope="row" class="px-6 py-4 font-medium whitespace-nowrap">
                                <?= $data['judul'] ?>
                            </td>
                            <td class="px-6 py-4">
                                <?= $data['penulis'] ?>
                            </td>
                            <td class="px-6 py-4">
                                <?= $data['kategori'] ?>
                            </td>
                            <td class="px-6 py-4 space-x-3 text-right">
                                <a href="details.php?id=<?= $data['id'] ?>" class="font-medium text-white-600 hover:underline">Details</a>
                                <a href="edit.php?id=<?= $data['id'] ?>" class="font-medium text-blue-600 hover:underline">Edit</a>
                                <a href="#" onclick="confirmDelete(<?= $data['id'] ?>)" class="font-medium text-red-600 pointer hover:underline">Delete</a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function confirmDelete(id) {
            Swal.fire({
                title: "Apakah anda yakin?",
                text: "Data akan dihapus",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Ya, hapus!",
                cancelButtonText: "Tidak",
                allowOutsideClick: false,
                escapeKey: false,
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        title: "Berhasil!",
                        text: "Data berhasil dihapus.",
                        icon: "success"
                    }).then(() => {
                        window.location.href = "proses/prosesdelete.php?id=" + id
                    })
                }
            });
        }
    </script>
</body>

</html>