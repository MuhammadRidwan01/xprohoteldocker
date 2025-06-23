<?php
include('../admin/proses/koneksi.php');

$beasiswa_query = "SELECT jenis_kamar FROM `tbl_jenis_kamar` ";
$beasiswa_result = mysqli_query($koneksi, $beasiswa_query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar pelanggan</title>
</head>
<body class="bg-gray-100">
<div class="bg-gray-800 pt-3">
        <div class="rounded-tl-3xl bg-gradient-to-r from-blue-500 to-gray-800 p-4 shadow text-2xl text-white flex justify-between items-center"> 
            <h1 class="font-bold pl-2">Daftar pelanggan</h1>
        </div>
    </div>
    <div class="container mx-auto px-4 min-h-[100dvh] my-5">

<form method="GET" class="mb-4" action="../admin/proses/daftar_penyewa.php"
hx-get="../admin/proses/daftar_penyewa.php" 
                hx-trigger="submit" 
                hx-target="#beasiswa-table">
    <label for="jenis_kamar" class="block text-sm font-medium text-gray-700">Filter by Jenis Kamar</label>
    <select name="jenis_kamar" id="jenis_kamar" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
        <option value="">All</option>
        <?php 
        $jenis_kamar_query = "SELECT DISTINCT jenis_kamar FROM tbl_jenis_kamar";
        $jenis_kamar_result = mysqli_query($koneksi, $jenis_kamar_query);
        while ($row = mysqli_fetch_assoc($jenis_kamar_result)) { ?>
            <option value="<?php echo $row['jenis_kamar']; ?>"> <?php echo $row['jenis_kamar']; ?> </option>
        <?php } ?>
    </select>
    <button type="submit" class="mt-2 px-4 py-2 bg-blue-500 text-white rounded">Filter</button>
</form>

<!-- Table Content -->
<div id="beasiswa-table" class=" text-center">
    <?php include '../admin/proses/daftar_penyewa.php'; ?>
</div>

    </div>
</div>
</body>
</html>
