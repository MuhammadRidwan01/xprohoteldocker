<?php

include('koneksi.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Query untuk menambahkan admin baru
    $query = "INSERT INTO `tbl_admin` (`id_admin`, `nama`, `username`, `password`) VALUES (NULL, '$nama', '$username', '$password') ";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        header("Location: ../proses/adminlist.php");
        exit(); 
    } else {
        echo "Gagal menambahkan admin: " . mysqli_error($koneksi);
    }
}

?>
