<?php
include('koneksi.php');

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $id_kamar = $_GET['id'];

    // Query untuk menghapus kamar dari tbl_jenis_kamar
    $query = "DELETE FROM tbl_jenis_kamar WHERE `tbl_jenis_kamar`.`id_kamar` = $id_kamar";
    
    if (mysqli_query($koneksi, $query)) {
        header("Location: ../kamar.php");
        exit();
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }
}

mysqli_close($koneksi);
?>