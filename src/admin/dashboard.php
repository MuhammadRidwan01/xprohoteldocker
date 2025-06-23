<?php
session_start();
// middle ware kw LOL

// jika tidak ada username di session
if (isset($_SESSION['username'])) {
// Maka redirect ke :
} else {header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Xpro Hotel</title>
    <meta name="author" content="name">
    <meta name="description" content="description here">
    <meta name="keywords" content="keywords,here">

    <link href="../src/output.css" rel="stylesheet">
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"
        integrity="sha256-xKeoJ50pzbUGkpQxDYHD7o7hxe0LaOGeguUidbq6vis=" crossorigin="anonymous"></script>
    <!-- htmx -->
    <script src="https://unpkg.com/htmx.org@1.9.12"
        integrity="sha384-ujb1lZYygJmzgSwoxRggbCHcjc0rB2XoQrxeTUQyRjrOnlCoYta87iKBWq3EsdM2" crossorigin="anonymous">
        </script>
    <!-- fontowsome -->
    <script src="https://kit.fontawesome.com/dfb31a0ba6.js" crossorigin="anonymous"></script>

    <style>
        .aktif {
            color: rgb(224, 64, 64);
            
            border-color: rgb(236 72 153);
        }
    </style>
</head>

<body class="bg-gray-800 font-sans leading-normal tracking-normal mt-12">

    <header>
        <?php include 'navbar.php'; ?>
    </header>


    <main>

        <div class="flex flex-col md:flex-row">
            <!-- side bar -->
            <?php
            include 'sidebar.php';
            ?>
            <!-- end side bar -->


            <section class="w-full">
                <div id="main" class="main-content flex-1 bg-gray-100 w-full mt-3">

                    <!-- main page: -->
                    <!-- pembungkus untuk ajax -->
                    <div class="mx-auto" id="mainpage">
                        <?php 
                    include '../admin/proses/adminlist.php';
                    ?>
                    </div>

                </div>
            </section>
        </div>
    </main>




    <script>
        /*Toggle dropdown list*/
        function toggleDD(myDropMenu) {
            document.getElementById(myDropMenu).classList.toggle("invisible");
        }
        // Close the dropdown menu if the user clicks outside of it
        window.onclick = function (event) {
            if (!event.target.matches('.drop-button') && !event.target.matches('.drop-search')) {
                var dropdowns = document.getElementsByClassName("dropdownlist");
                for (var i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (!openDropdown.classList.contains('invisible')) {
                        openDropdown.classList.add('invisible');
                    }
                }
            }
        }
    </script>

    <!-- fungsi untuk sidebar -->
    <script>

        function toggleActive(id) {
            // Menghapus class "aktif" dari semua elemen
            const links = document.querySelectorAll('a');
            links.forEach(link => {
                link.classList.remove('aktif');
            });
            // Menambahkan class "aktif" ke elemen yang diklik
            const element = document.getElementById(id);
            element.classList.add('aktif');
        }
    </script>

</body>

</html>