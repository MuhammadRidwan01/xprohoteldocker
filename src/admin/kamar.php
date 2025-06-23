<?php
// middle ware kw LOL
if (isset($_SESSION['username'])) {
    header("Location: admin/dashboard.php");
    exit(); 
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Daftar Kamar</title>
</head>
<body class="bg-gray-100 p-8">

    <div class="bg-gray-800 pt-3">
        <div class="rounded-tl-3xl bg-gradient-to-r from-blue-500 to-gray-800 p-4 shadow text-2xl text-white flex justify-between items-center"> 
            <h1 class="font-bold pl-2">Daftar Kamar</h1>

            <a href="#" hx-get="tambah_kamar.php" hx-trigger="click" hx-target="#mainpage">
                <button type="button" class="bg-yellow-500 hover:bg-yellow-700 text-white p-2 text-xl rounded-md">
                    <i class="fas fa-plus"></i> Tambah
                </button>
            </a>
        </div>
    </div>
    <div class="container mx-auto px-4 min-h-[100dvh] my-5">

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 my-5 mx-4">
            <?php
            include('proses/koneksi.php');
            $result = mysqli_query($koneksi, "SELECT * FROM tbl_jenis_kamar");

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                        <img src="<?php echo $row['gambar']; ?>" alt="<?php echo $row['jenis_kamar']; ?>" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <h2 class="text-2xl font-bold mb-2"><?php echo $row['jenis_kamar']; ?></h2>
                            <p class="text-gray-600 mb-4">Harga: Rp <?php echo number_format($row['harga'], 0, ',', '.'); ?></p>
                            <p class="text-gray-700"><?php echo nl2br($row['keterangan']); ?></p>

                            <div class="mt-4 flex justify-end">
                            <a
    href="/proses/edit_kamar.php?id=<?php echo $row['id_kamar']; ?>"
    class="text-blue-500 hover:underline mr-2"
    hx-confirm="Anda yakin ingin mengedit kamar [<?php echo $row['jenis_kamar']; ?>] ?"
    hx-get="edit_kamar.php?id=<?php echo $row['id_kamar']; ?>"
    hx-trigger="click"
    hx-target="#mainpage"
>
    Edit
</a>

<a
    href="#"  
    class="text-red-500 hover:underline"
    hx-confirm="Anda yakin ingin menghapus kamar [<?php echo $row['jenis_kamar']; ?>] ?"
    hx-get="../admin/proses/delete_kamar.php?id=<?php echo $row['id_kamar']; ?>"
    hx-trigger="click" 
    hx-target="#mainpage"
>
    Delete
</a>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            } else {
                echo "<p class='col-span-full text-center'>Tidak ada data kamar tersedia.</p>";
            }
            mysqli_close($koneksi);
            ?>
        </div>
</div>

</body>
</html>
