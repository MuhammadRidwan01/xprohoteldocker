<?php

if (isset($_SESSION['username'])) {
    header("Location: admin/dashboard.php");
    exit(); 
}
?>
<head>
    <title>Pemesanan Kamar Hotel</title>
</head>

<div class="bg-gray-800 pt-3">
    <div class="rounded-tl-3xl bg-gradient-to-r from-gray-700 to-gray-800 p-4 shadow text-2xl text-white flex justify-between">
        <h1 class="font-bold pl-2">Form Pemesanan</h1>
    </div>
</div>

<div class="container mx-auto px-4 min-h-[100dvh] my-5">
    <h2 class="text-3xl font-bold mb-6">Reservasi Kmaar</h2>
    <form action="proses/reservasi.php" method="post"
        hx-post="proses/reservasi.php"
        hx-trigger="submit"
        hx-target="#mainpage"
        class="bg-white p-6 rounded-lg shadow-lg">

        <div class="grid grid-cols-2 gap-4"> <div class="mb-4">
                <label for="nama" class="block text-gray-700">Nama Lengkap:</label>
                <input type="text" id="nama" name="nama" class="w-full p-2 border rounded-md" required>
            </div>
            <div class="mb-4">
                <label for="no_identitas" class="block text-gray-700">No Identitas:</label>
                <input type="number" id="no_identitas" name="no_identitas" class="w-full p-2 border rounded-md" required>
            </div>
            <div class="mb-4">
                <label for="no_hp" class="block text-gray-700">No Handphone:</label>
                <input type="number" id="no_hp" name="no_hp" class="w-full p-2 border rounded-md" required>
            </div>
            <div class="mb-4">
                <label for="jenis_kamar" class="block text-gray-700">Jenis Kamar:</label>
                <select id="jenis_kamar" name="jenis_kamar" class="w-full p-2 border rounded-md" required>
                    <option value="">Pilih Jenis Kamar</option>
                    <?php
                    include('proses/koneksi.php');
                    $query = "SELECT * FROM `tbl_jenis_kamar`";
                    $result = mysqli_query($koneksi, $query);
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<option value='" . $row['id_kamar'] . "'>" . $row['jenis_kamar'] . " - Harga: Rp " . number_format($row['harga'], 0, ',', '.') . "</option>";
                    }}
                    ?>
                </select>
            </div>
        </div>

        <div class="grid grid-cols-2 gap-4">
            <div class="mb-4">
                <label for="cekin" class="block text-gray-700">Check-in:</label>
                <input type="date" id="cekin" name="cekin" class="w-full p-2 border rounded-md" required>
            </div>
            <div class="mb-4">
                <label for="cekout" class="block text-gray-700">Check-out:</label>
                <input type="date" id="cekout" name="cekout" class="w-full p-2 border rounded-md" required>
            </div>
            <div class="mb-4 col-span-2">
                <label for="jumlah_kamar" class="block text-gray-700 bg-gray-500">Jumlah Kamar:</label>
                <input type="number" id="jumlah_kamar" name="jumlah_kamar" class="w-full p-2 border rounded-md" min="1" value="1" required>
            </div>
        </div>

        <button type="submit" class="bg-kuning text-white py-2 px-4 rounded-md hover:bg-abu">Simpan Transaksi</button>
    </form>
</div>

