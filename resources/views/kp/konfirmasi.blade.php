@extends('layout.main')

@section('kp')
    <div>
        <div class="p-4 md:ml-64 mt-32">
            <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
                <div class=" bg-white">
                    <div class="p-4 h-screen rounded bg-white dark:bg-gray-800">
                        <div class="flex justify-between py-1">
                            <div>
                                <form class="w-32 md:w-48">
                                    <label for="default-search"
                                        class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                                    <div class="relative">
                                        <div
                                            class="absolute inset-y-0 start-0 flex items-center p-2 pointer-events-auto bg-hmsi border border-gray-300 rounded-lg">
                                            <a href="" class="">
                                                <img src="img/search.svg" class="size-4" alt="">
                                            </a>
                                        </div>
                                        <input type="search" id=""
                                            class="block w-full p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            placeholder="Cari..." required />

                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="mt-4 relative overflow-x-auto">
                            <table class="w-full text-sm text-center">
                                <thead class="text-xs bg-gray-50">
                                    <tr class="">
                                        <th scope="col" class="p-4 border border-gray-400 ">
                                            No
                                        </th>
                                        <th scope="col" class="p-4 border border-gray-400 ">
                                            Nama Perusahaan
                                        </th>
                                        <th scope="col" class="p-4 border border-gray-400 ">
                                            Tanggal Daftar
                                        </th>
                                        <th scope="col" class="p-4 border border-gray-400 ">
                                            Konfirmasi Pendaftaran
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row" colspan="4" class="p-2 border font-light border-gray-400">
                                            Anda belum mendaftar KP
                                        </th>
                                    </tr>
                                    <tr class="bg-white border-b">
                                        <th scope="row" class="p-2 border font-light border-gray-400">
                                            1
                                        </th>
                                        <th scope="row" class="p-2 border font-light border-gray-400">
                                            Mitra Kukar
                                        </th>
                                        <th scope="row" class="p-2 border font-light border-gray-400 ">
                                            8 Maret 2024
                                        </th>
                                        <th scope="row" class="p-2 pt-3 border font-light border-gray-400 lg:w-72">
                                            <a href=""
                                                class="text-white px-4 py-1 rounded-sm bg-green-400 hover:bg-green-500 lg:mr-2">
                                                <button class= "mb-4 lg:mb-0 min-w-20"><i data-feather="check-circle"
                                                        class="inline size-4 mb-1"></i>
                                                    Diterima</button>
                                            </a>
                                            <a href=""
                                                class="text-white px-4 py-1 w-10 rounded-sm bg-red-600 hover:bg-red-700 lg:ml-2 ">
                                                <button class= "min-w-20 ml"><i data-feather="x-circle"
                                                        class="inline size-4 mb-1 mr-1"></i>Ditolak</button>
                                            </a>
                                        </th>
                                    </tr>
                                    <tr class="bg-green-100 border-b">
                                        <th scope="row" class="p-2 border font-light border-gray-400">
                                            1
                                        </th>
                                        <th scope="row" class="p-2 border font-light border-gray-400">
                                            Mitra Kukar
                                        </th>
                                        <th scope="row" class="p-2 border font-light border-gray-400 ">
                                            8 Maret 2024
                                        </th>
                                        <th scope="row" class="p-2 border font-light border-gray-400 ">
                                            Diterima
                                        </th>
                                    </tr>
                                    <tr class="bg-red-100 border-b">
                                        <th scope="row" class="p-2 border font-light border-gray-400">
                                            1
                                        </th>
                                        <th scope="row" class="p-2 border font-light border-gray-400">
                                            Mitra Kukar
                                        </th>
                                        <th scope="row" class="p-2 border font-light border-gray-400 ">
                                            8 Maret 2024
                                        </th>
                                        <th scope="row" class="p-2 border font-light border-gray-400 ">
                                            Ditolak
                                        </th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
