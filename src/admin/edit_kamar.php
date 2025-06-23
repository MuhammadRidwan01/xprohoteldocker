<?php

include('../admin/proses/koneksi.php');

// Periksa apakah data formulir dikirim
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $id_kamar = $_GET['id'];

    $result = mysqli_query($koneksi, "SELECT * FROM `tbl_jenis_kamar` WHERE id_kamar = $id_kamar;");

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) { ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit kamar [<?php echo $row['jenis_kamar'] ?>]</title>
</head>
<div class="bg-gray-800 pt-3">
        <div class="rounded-tl-3xl bg-gradient-to-r from-abu to-gray-800 p-4 shadow text-2xl text-white flex justify-between">
            <h1 class="font-bold pl-2">Edit kamar [<?php echo $row['jenis_kamar'] ?>]</h1>
        </div>
    </div>

    <div class="container mx-auto px-4 min-h-[100dvh] my-5">
    <h1 class="text-3xl font-bold mb-6"><?php echo $row['jenis_kamar'] ?> Id_Kamar: <?php echo $row['id_kamar']; ?></h1>
    <form action="../admin/proses/update_kamar.php" method="post" class="bg-white p-6 rounded-lg shadow-lg"
        hx-post="../admin/proses/update_kamar.php"
        hx-trigger="submit"
        hx-target="#mainpage" >
                <input type="hiden" name="id_kamar" value="<?php echo $row['id_kamar'] ?>">
            <div class="mb-4">
                <label for="jenis_kamar" class="block text-gray-700">Jenis Kamar</label>
                <input type="text" id="jenis_kamar" value="<?php echo $row['jenis_kamar'] ?>" name="jenis_kamar" class="w-full mt-2 p-2 border rounded-md" required>
            </div>
            <div class="mb-4">
                <label for="harga" class="block text-gray-700">Harga</label>
                <input type="number" id="harga" value="<?php echo $row['harga'] ?>" name="harga" class="w-full mt-2 p-2 border rounded-md" required>
            </div>
            <div class="mb-4">
                <label for="keterangan" class="block text-gray-700">Keterangan</label>
                <textarea id="keterangan" name="keterangan" class="w-full mt-2 p-2 border rounded-md" rows="4" required><?php echo $row['keterangan'] ?></textarea>
            </div>
            <div class="mb-4">
                <label for="gambar" class="block text-gray-700">URL Gambar</label>
                <input type="text" id="gambar" value="<?php echo $row['gambar'] ?>" name="gambar" class="w-full mt-2 p-2 border rounded-md" required>
            </div>
            <div class="flex items-center">
                <button type="submit" class="bg-kuning text-white py-2 px-4 rounded-md hover:bg-abu">Rubah</button>
            </div>
        </form>
    </div>

               <?php }
            }
}
else {// if 0
    echo "Gagal memfalidasi: " . mysqli_error($koneksi);
}


mysqli_close($koneksi);

?>
