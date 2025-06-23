<?php
session_start();
// middle ware kw LOL
if (isset($_SESSION['username'])) {
    header("Location: dashboard.php");
    exit(); 
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>

    <link href="../src/output.css" rel="stylesheet">

</head>


<body>
    <!-- compnen login -->
    <div
        class="relative flex min-h-screen text-gray-800 antialiased flex-col justify-center overflow-hidden py-6 sm:py-12 bg-biru">
        <div class="relative py-3 sm:w-96 mx-auto text-center">
            <span class=" text-putih text-xl">login ke akun mu</span>
            <div class="mt-4 bg-white shadow-md rounded-lg text-left">
                <div class="h-2 bg-kuning rounded-t-md"></div>
                <div class="px-8 py-6 ">
                    <form action="../admin/proses/login.php" method="post">
                        <label class="block font-semibold"> Username </label>
                        <input type="text" name="username" placeholder="Username"
                            class="border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-indigo-500 focus:ring-1 rounded-md">

                        <label class="block mt-3 font-semibold"> Password </label>
                        <input type="password" name="password" placeholder="Password"
                            class="border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-indigo-500 focus:ring-1 rounded-md">
                        <div class="flex justify-between items-baseline">
                            <button type="submit"
                                class="mt-4 bg-kuning text-white py-2 px-6 rounded-md hover:bg-abu ">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</body>

</html>