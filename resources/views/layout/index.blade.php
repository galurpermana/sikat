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
        <div class="flex justify-between p-2 xl:mx-2">
            <div>
                <span class="font-bold text-3xl md:text-4xl">Sistem Informasi KP dan TA</span>
            </div>
            <div class="">
                <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
                    class="text-black focus:ring-4 focus:outline-none focus:ring-slate-200 font-medium rounded-lg text-xl md:text-3xl px-7 py-4 inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <img src="https://cdn.discordapp.com/attachments/1019230608381186049/1224566755792388096/user_profile.png?ex=661df5a9&is=660b80a9&hm=cdfbe6699e0a1cf01d5f2fdb46c58252e02807ea6d19aba2ef17b9cd0b97fe84&" class="size-10 xl:size-10 mr-3" alt="">
                    10221090
                    <svg class="w-4 h-4 md:w-5 md:h-5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                    </svg>
                </button>

                <!-- Dropdown menu -->
                <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-48 dark:bg-gray-700">
                    <ul class="py-2 text-md xl:text-lg text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Ganti Password</a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Ganti Email</a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white border-t-2 border-slate-400">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
@yield('content')
</body>
</html>
