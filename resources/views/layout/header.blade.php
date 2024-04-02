<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
<header>
    <div class="fixed z-50 top-0 left-0 right-0">
        <div class="flex justify-between bg-white p-2 xl:mx-2">
        <div>
            <span class="font-bold text-xl md:text-2xl">Sistem Informasi KP dan TA</span>
        </div>
            <div class="">
                <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
                    class=" text-black focus:ring-4 focus:outline-none focus:ring-slate-200 font-medium rounded-lg text-md md:text-xl px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                    type="button"><img src="https://media.istockphoto.com/id/1300845620/vector/user-icon-flat-isolated-on-white-background-user-symbol-vector-illustration.jpg?s=612x612&w=0&k=20&c=yBeyba0hUkh14_jgv1OKqIH0CCSWU_4ckRkAoy2p73o=" class="size-8 xl:size-8 mr-2" alt="">10221090<svg
                        class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg>
                </button>

                <!-- Dropdown menu -->
                <div id="dropdown"
                    class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                    <ul class="py-2 text-sm xl:text-md text-gray-700 dark:text-gray-200"
                        aria-labelledby="dropdownDefaultButton">
                        <li>
                            <a href="#"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Ganti
                                Password</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Ganti
                                Email</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white border-t-2 border-slate-400">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- <div class="flex p-4 bg-hmsi">
            <a href="#">
                <img src="img/home.svg" class="size-6" alt="">
            </a>
            <img src="img/chevron-right.svg" class="mx-2" alt="">
            <p class="text-white font-bold">Kerja Praktik</p>
        </div> -->
    </div>
</header>
</body>
</html>