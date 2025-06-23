<?php
include('koneksi.php');

// Periksa apakah ID valid
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];

    // Hapus data admin dari database
    $query = "DELETE FROM tbl_admin WHERE id_admin = $id";

    if (mysqli_query($koneksi, $query)) {
        // if 1
        echo "<script>window.location.href = '../../admin/dashboard.php'</script>";
        exit();
    } else {
        echo "Error deleting record: " . mysqli_error($koneksi);
    }
} else {// if 0
    echo "ID admin tidak valid.";
}

mysqli_close($koneksi);
?>
