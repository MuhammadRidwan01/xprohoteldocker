<?php session_start();
include('../admin/proses/koneksi.php');
// middle ware kw LOL
if (isset($_SESSION['username'])) {
} 
else { // jika tidak di penuhi Maka redirect ke :
    header("Location: index.php");
}

// Periksa apakah ID admin valid
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];

    // Ambil data admin dari database
    $query = "SELECT * FROM tbl_admin WHERE id_admin = $id";
    $result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($result);

    if ($row) {
        // Tampilkan formulir edit dengan data admin
        ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit admin [<?php echo $row['username']; ?>]</title>
</head>

<body>
    <div class="bg-gray-800 pt-3">
        <div class="rounded-tl-3xl bg-gradient-to-r from-kuning to-gray-800 p-4 shadow text-2xl text-white">
            <h1 class="font-bold pl-2">Edit admin [<?php echo $row['nama']; ?>]</h1>
        </div>
    </div>
    <!-- component -->
    <div class="relative flex min-h-screen text-gray-800 antialiased flex-col justify-center overflow-hidden py-6 sm:py-12 bg-biru">
    <div class="relative py-3 sm:w-96 mx-auto text-center">
      
      <div class="mt-4 bg-white shadow-md rounded-lg text-center">
      <span class=" text-abu text-xl font-bold">edit admin [<?php echo $row['nama']; ?>]</span>
        <div class="h-2 bg-kuning rounded-t-md"></div>
        <div class="px-8 py-6 ">
            <form action="../admin/proses/update_admin.php" method="post" class="text-left"
            hx-post="../admin/proses/update_admin.php" 
                hx-trigger="submit" 
                hx-target="#mainpage">
                <!-- id_admin -->
            <input type="hidden" name="id_admin" value="<?php echo $row['id_admin']; ?>">

            <label class="block font-semibold"> Nama </label>
                <input type="text" name="nama" value="<?php echo $row['nama']; ?>" placeholder="nama" class=" border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-indigo-500 focus:ring-1 rounded-md">

                <label class="block font-semibold"> Username </label>
                <input type="text" name="username" value="<?php echo $row['username']; ?>" placeholder="Username" class="border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-indigo-500 focus:ring-1 rounded-md">
                
                <label class="block mt-3 font-semibold"> Password </label>
                <input type="text" name="password" value="<?php echo $row['password']; ?>" placeholder="Password" class="border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-indigo-500 focus:ring-1 rounded-md">
                <div class=" text-center">
        <button type="submit" class="mt-4 bg-kuning text-white py-2 px-6 rounded-md hover:bg-abu">
            Ubah
        </button>
    </div>
            </form>
        </div>
    </div>
  </div>
</body>
</html>
    

</body>

</html>
<?php
    } else {
        echo "Admin tidak ditemukan.";
    }
} else {
    echo "ID admin tidak valid.";
}

mysqli_close($koneksi);
?>