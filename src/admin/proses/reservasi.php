<?php
include('koneksi.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari formulir
    $nama = $_POST['nama'];
    $no_identitas = $_POST['no_identitas'];
    $no_hp = $_POST['no_identitas'];
    $jenis_kamar = $_POST['jenis_kamar'];
    $cekin = $_POST['cekin'];
    $cekout = $_POST['cekout'];
    $jumlah_kamar = $_POST['jumlah_kamar'];

    // Validasi tanggal (sama seperti sebelumnya)
    $cekinDate = new DateTime($cekin);
    $cekoutDate = new DateTime($cekout);

    if ($cekoutDate <= $cekinDate) {
        echo "Tanggal check-out harus setelah tanggal check-in.";
        exit();
    }

    // Hitung selisih hari (lama menginap)
    $lama_menginap = $cekoutDate->diff($cekinDate)->days;

    // Ambil harga kamar dari database (tanpa prepared statement)
    $query_harga = "SELECT harga FROM tbl_jenis_kamar WHERE id_kamar = $jenis_kamar";
    $result = mysqli_query($koneksi, $query_harga);
    $row = mysqli_fetch_assoc($result);
    $harga = $row['harga'];

    // Hitung total harga
    $total = $harga * $lama_menginap * $jumlah_kamar;

    // Simpan data ke database (tanpa prepared statement, TIDAK AMAN)
    $query_penyewa = "INSERT INTO tbl_penyewa (nama, no_identitas, no_hp, id_kamar, cekin, cekout, jumlah_kamar, total) 
                      VALUES ('$nama', '$no_identitas', '$no_hp', $jenis_kamar, '$cekin', '$cekout', $jumlah_kamar, $total)";
    $reservasi = mysqli_query($koneksi, $query_penyewa);

    if ($reservasi) { //true
        header("Location: ../daftar_penyewa.php");
        exit();
    } else {
        echo "Gagal melakukan reservasi: " . mysqli_error($koneksi);
    }
}

mysqli_close($koneksi);
?>
