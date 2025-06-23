
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin list</title>
</head>


    <div class="bg-gray-800 pt-3">
        <div class="rounded-tl-3xl bg-gradient-to-r from-yellow-500 to-gray-800 p-4 shadow text-2xl text-white">
            <h1 class="font-bold pl-2">admin list</h1>
        </div>
    </div>
    <div class="relative flex min-h-screen text-abu antialiased flex-col justify-center overflow-hidden bg-primaryWhite py-6 sm:py-12 mx-4">
        <div class="overflow-x-auto">
        <table class="table-auto w-full text-lg min-h-full">
        <thead class="bg-gray-100">
            <tr>
                <th class="px-4 py-2 text-2xl text-left">Nama</th>
                <th class="px-4 py-2 text-2xl text-left">Username</th>
                <th class="px-4 py-2 text-2xl text-left">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include('koneksi.php');

            $query = "SELECT id_admin, nama, username FROM tbl_admin";
            $result = mysqli_query($koneksi, $query);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <tr class="border-b border-gray-200">
                        <td class="px-4 py-2"><?php echo $row["nama"]; ?></td>
                        <td class="px-4 py-2"><?php echo $row["username"]; ?></td>
                        <td class="px-4 py-2"> 
                        <a 
    href="../admin/edit_admin.php?id=<?php echo $row['id_admin']; ?>" 
    class="text-blue-500 hover:underline"
    hx-get="../admin/edit_admin.php?id=<?php echo $row['id_admin']; ?>" 
    hx-trigger="click"
    hx-target="#mainpage"
>
    Edit
</a> 
| 
<a 
    href="" 
    class="text-red-500 hover:underline"
    hx-confirm="Apakah kamu yakin akan menghapus akun [<?php echo $row['username']; ?>]?" 
    hx-get="../admin/proses/delete_admin.php?id=<?php echo $row['id_admin']; ?>"
    hx-trigger="click"
    hx-target="#mainpage"
    hx-swap="outerHTML"
>
    Delete
</a>


                        </td> 
                    </tr>
                    <?php
                }
            } else {
                echo "<tr><td colspan='4' class='px-4 py-2 text-center'>0 hasil/ Data kosong</td></tr>"; 
            }

            mysqli_close($koneksi);
            ?>
        </tbody>
    </table>
        </div>
    </div>
    
