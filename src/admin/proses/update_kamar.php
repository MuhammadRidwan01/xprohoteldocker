<?php

include('koneksi.php');

// Periksa apakah data formulir dikirim
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_kamar = $_POST['id_kamar'];
    $jenis_kamar = $_POST['jenis_kamar'];
    $harga = $_POST['harga'];
    $keterangan = $_POST['keterangan'];
    $gambar = $_POST['gambar'];

    // query update
    $query = "UPDATE `tbl_jenis_kamar` SET `jenis_kamar` = '$jenis_kamar', `keterangan` = '$keterangan', `gambar` = '$gambar' WHERE id_kamar = $id_kamar;";

    // Menjalankan query
    $hasil = mysqli_query($koneksi, $query);

    if ($hasil) { // if 1
        header("Location: ../kamar.php");
        exit();
    } else {// if 0
        echo "Gagal memfalidasi: " . mysqli_error($koneksi);echo $query;
    }
}

mysqli_close($koneksi);

?>
