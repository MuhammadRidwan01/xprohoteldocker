<?php

include('koneksi.php');

// Periksa apakah data formulir dikirim
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_admin = $_POST['id_admin'];
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    // query update
    $query = "UPDATE `tbl_admin` SET `nama` = '$nama', `username` = '$username', `password` = '$password' WHERE `tbl_admin`.`id_admin` = $id_admin";

    // Menjalankan query
    $hasil = mysqli_query($koneksi, $query);

    if ($hasil) { // if 1
        header("Location: ../proses/adminlist.php");
        exit();
    } else {// if 0
        echo "Gagal memfalidasi: " . mysqli_error($koneksi);
    }
}

mysqli_close($koneksi);

?>
