<!--Nav-->
<nav aria-label="menu nav" class="bg-gray-800 pt-2 md:pt-1 pb-1 px-1 mt-0 h-auto fixed w-full z-20 top-0">

<div class="flex flex-wrap items-center justify-between">
    <!-- logo -->
    <div class="flex flex-shrink md:w-1/3 items-center justify-center md:justify-start text-white p-2">
        <a href="#" aria-label="Home" class="flex items-center">
            <img src="../src/logo.webp" class="h-12 w-auto max-w-xs rounded-lg md:block hidden" alt="Xpro hotel">
            <span class="text-xl pl-3">Xpro hotel</span>
        </a>
    </div>
    <!-- end logo -->

    <div class="flex flex-shrink md:w-1/3 items-center justify-center md:w-1/3 md:justify-end ">
        <ul class="list-reset flex justify-between flex-1 md:flex-none items-center">
            <!-- <li class="flex-1 md:flex-none md:mr-3">
                <a class="inline-block py-2 px-4 text-white no-underline" href="#"></a>
            </li> -->
            <!-- <li class="flex-1 md:flex-none md:mr-3">
                <a class="inline-block text-gray-400 no-underline hover:text-gray-200 hover:text-underline py-2 px-4"
                    href="#">link</a>
            </li> -->
            <li class="flex-1 md:flex-none md:mr-3">
                <div class="relative inline-block">
                    <button onclick="toggleDD('myDropdown')" class="drop-button text-white py-2 px-2"> <span
                            class="pr-2"><i class="fa-solid fa-id-card"></i></span> Hi,
                        <?php echo $_SESSION['username']; ?> <svg class="h-3 fill-current inline"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path
                                d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                        </svg>
                    </button>
                    <!-- dropdown profile -->
                    <div id="myDropdown"
                        class="dropdownlist absolute bg-gray-800 text-white right-0 mt-3 p-3 overflow-auto z-30 invisible">
                        <a href="#"
                            class="flex items-center p-2 hover:bg-gray-800 text-white text-sm no-underline hover:no-underline block">
                            <i class="fa fa-user fa-fw mr-2"></i> Profile
                        </a>
                        <a href="../admin/proses/logout.php"
                            class="flex items-center p-2 hover:bg-gray-800 text-white text-sm no-underline hover:no-underline block">
                            <i class="fas fa-sign-out-alt fa-fw mr-2"></i> Log Out
                        </a>
                    </div>

                </div>
            </li>
        </ul>
    </div>
</div>
</nav>
<!-- end nav -->