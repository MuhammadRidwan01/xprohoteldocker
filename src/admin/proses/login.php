<?php 
include('koneksi.php'); 
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
  
    $query = "SELECT * FROM tbl_admin WHERE username = '$username' AND password = '$password'"; 
    $result = mysqli_query($koneksi, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);
    $_SESSION['username'] = $row['username'];
    header("Location: ../../admin/dashboard.php"); 
    exit();
  } else {
    $_SESSION['eror_msg'] = "Username atau password salah";
    // echo 'salah';
    header("Location: ../../admin/index.php"); 
    exit();
  }
}

mysqli_close($koneksi);
?>
