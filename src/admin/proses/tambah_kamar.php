<?php
include('koneksi.php');

// Periksa apakah form telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $jenis_kamar = $_POST['jenis_kamar'];
    $harga = $_POST['harga'];
    $keterangan = $_POST['keterangan'];
    $gambar = $_POST['gambar'];

    // Query untuk memasukkan data baru ke tabel
    $query = "INSERT INTO tbl_jenis_kamar (jenis_kamar, harga, keterangan, gambar) VALUES ('$jenis_kamar', $harga, '$keterangan', '$gambar')";
    
    if (mysqli_query($koneksi, $query)) {
        header("Location: ../kamar.php");
        exit();
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }
}

mysqli_close($koneksi);
?>
