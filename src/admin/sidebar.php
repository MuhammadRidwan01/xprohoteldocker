<nav aria-label="alternative nav">
<div
    class="bg-gray-800 shadow-xl h-20 fixed bottom-0 mt-12 md:relative md:h-screen z-10 w-full md:w-48 content-center">
    <div
        class="md:mt-12 md:w-48 md:fixed md:left-0 md:top-0 content-center md:content-start text-left justify-between">
        <ul
            class="list-reset flex flex-row md:flex-col pt-3 md:py-3 px-1 md:px-2 text-center md:text-left">
            <!-- side bar items -->
            <li class="mr-3 flex-1">
                <a id="adminList" href="#"
                    class="aktif block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-pink-500"
                    href="" 
                    hx-get="proses/adminlist.php" 
                    hx-trigger="click" 
                    hx-target="#mainpage"
                    onclick="toggleActive('adminList')">
                    <i class="fa-regular fa-user pr-0 md:pr-3"></i><span
                        class="pb-1 md:pb-0 text-xs md:text-base text-gray-400 md:text-gray-200 block md:inline-block">admin
                        list</span>
                </a>
            </li>
            <li class="mr-3 flex-1">
                <a href="#" id="tambahadmin" onclick="toggleActive('tambahadmin')"
                hx-get="addadmin.php" 
                hx-trigger="click" 
                hx-target="#mainpage"
                    class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-pink-500">
                    <i class="fa-solid fa-user-plus pr-0 md:pr-3"></i><span
                        class="pb-1 md:pb-0 text-xs md:text-base text-gray-400 md:text-gray-200 block md:inline-block">Tambah Admin</span>
                </a>
            </li>
            <hr class="h-px my-1 border-2 border-kuning ">
            <!-- trassakasi -->
            <li class="mr-3 flex-1">
                <a href="#" id="list_kamar" onclick="toggleActive('list_kamar')"
                hx-get="kamar.php" 
                hx-trigger="click" 
                hx-target="#mainpage"
                    class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-purple-500">
                    <i class="fa-solid fa-house pr-0 md:pr-3"></i><span
                        class="pb-1 md:pb-0 text-xs md:text-base text-gray-400 md:text-gray-200 block md:inline-block">kamar</span>
                </a>
            </li>
            <li class="mr-3 flex-1">
                <a href="#"
                id="tambah_kamar" onclick="toggleActive('tambah_kamar')"
                hx-get="tambah_kamar.php" 
                hx-trigger="click" 
                hx-target="#mainpage"
                    class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-blue-600">
                    <i class="fa-solid fa-plus text-kuning absolute"></i><i class="fa-solid fa-house pr-0 md:pr-3"></i><span
                        class="pb-1 md:pb-0 text-xs md:text-base text-gray-400 md:text-white block md:inline-block">tambah kamar</span>
                </a>
            </li>
            <hr class="h-px my-1 border-abu border-2 ">

            <li class="mr-3 flex-1">
                    <a onclick="toggleDD('ListMenuHotel')" class="drop-button block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-abu"> 
                    <i class="fa-solid fa-bars pr-0 md:pr-3"></i> <span class="pb-1 md:pb-0 text-xs md:text-base text-gray-400 md:text-white block md:inline-block">Menu Hotel</span> <svg class="h-3 fill-current inline"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path
                                d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                        </svg>
                    </a>
                    <!-- dropdown profile -->
                    <div id="ListMenuHotel" onclick="toggleActive('ListMenuHotel')"
                        class="dropdownlist absolute bg-gray-800 text-white right-0 bottom-5 mt-3 p-3 overflow-auto invisible">
                        <a href="#"
                        hx-get="reservasi.php" 
                hx-trigger="click" 
                hx-target="#mainpage"
                            class="flex items-center p-2 hover:bg-gray-800 text-white text-sm no-underline hover:no-underline block">
                            <i class="fa-solid fa-newspaper fa-fw mr-2"></i> <span class="pb-1 md:pb-0 text-xs md:text-base text-white md:text-white block md:inline-block">Reservasi</span> 
                        </a>

                        <a href="#"
                        hx-get="daftar_penyewa.php"  id="daftar_penyewa" onclick="toggleActive('daftar_penyewa')"
                hx-trigger="click" 
                hx-target="#mainpage"
                            class="flex items-center p-2 hover:bg-gray-800 text-white text-sm no-underline hover:no-underline block">
                            <i class="fas fa-list fa-fw mr-2"></i> <span class="pb-1 md:pb-0 text-xs md:text-base text-white md:text-white block md:inline-block">Pelanggan</span>
                        </a>
                    </div>
            </li>
            
            <!-- end side bar items -->
        </ul>
    </div>
</div>
</nav>