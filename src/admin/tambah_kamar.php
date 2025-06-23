<?php

// middle ware kw LOL
if (isset($_SESSION['username'])) {
    header("Location: admin/dashboard.php");
    exit(); 
}
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Jenis Kamar</title>
</head>
<div class="bg-gray-800 pt-3">
        <div class="rounded-tl-3xl bg-gradient-to-r from-abu to-gray-800 p-4 shadow text-2xl text-white flex justify-between">
            <h1 class="font-bold pl-2">Tambah kamar</h1>
        </div>
    </div>

    
    <h1 class="text-3xl font-bold mb-6">Tambah Jenis Kamar</h1>
    <form action="../admin/proses/tambah_kamar.php" method="post" class="bg-white p-6 rounded-lg shadow-lg"
        hx-post="../admin/proses/tambah_kamar.php"
        hx-trigger="submit"
        hx-target="#mainpage" >
            <div class="mb-4">
                <label for="jenis_kamar" class="block text-gray-700">Jenis Kamar</label>
                <input type="text" id="jenis_kamar" name="jenis_kamar" class="w-full mt-2 p-2 border rounded-md" required>
            </div>
            <div class="mb-4">
                <label for="harga" class="block text-gray-700">Harga</label>
                <input type="number" id="harga" name="harga" class="w-full mt-2 p-2 border rounded-md" required>
            </div>
            <div class="mb-4">
                <label for="keterangan" class="block text-gray-700">Keterangan</label>
                <textarea id="keterangan" name="keterangan" class="w-full mt-2 p-2 border rounded-md" rows="4" required></textarea>
            </div>
            <div class="mb-4">
                <label for="gambar" class="block text-gray-700">URL Gambar</label>
                <input type="text" id="gambar" name="gambar" class="w-full mt-2 p-2 border rounded-md" required>
            </div>
            <div class="flex items-center">
                <button type="submit" class="bg-kuning text-white py-2 px-4 rounded-md hover:bg-abu">Tambah</button>
            </div>
        </form>
    </div>
    <script>
    toggleActive('tambah_kamar')
</script>