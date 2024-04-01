@extends('layout.main')

@section('riwayat')
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
                            <div class="">
                                <a href="/daftar">
                                    <button class="inline-flex bg-hmsi h p-2 pr-3 text-white text-sm rounded-md"><img
                                            src="img/plus.svg" class="size-4 my-1 mr-1" alt="">Daftar KP</button>
                                </a>
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
                                            Status
                                        </th>
                                        <th scope="col" class="p-4 border border-gray-400 ">
                                            Aksi
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="bg-white hover:bg-gray-300 border-b">
                                        <th scope="row" class="p-2 border font-light border-gray-400">
                                            1
                                        </th>
                                        <th scope="row" class="p-2 border font-light border-gray-400">
                                            Mitra Kukar
                                        </th>
                                        <th scope="row" class="p-2 border font-light border-gray-400 ">
                                            8 Maret 2024
                                        </th>
                                        <th scope="row" class="p-2 border font-light border-gray-400">
                                            Menunggu Diverifikasi
                                        </th>
                                        <th scope="row"
                                            class="p-2 border font-light border-gray-400 whitespace-nowrap lg:flex lg:justify-around">
                                            <a href=""><img src="img/eye.svg" class="my-2 mx-auto" alt=""></a>
                                            <a href=""><img src="img/edit.svg" class="my-2 mx-auto" alt=""></a>
                                            <a href=""><img src="img/trash-2.svg" class="my-2 mx-auto" alt=""></a>
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
