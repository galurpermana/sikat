@extends('layout.main')

@section('kp')
    <div>
        <div class="p-4 md:ml-64 mt-32">
            <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
                <div class=" bg-white">
                    <div class="p-4 h-layar rounded bg-white dark:bg-gray-800">
                        <div class="mt-4 px-2 relative overflow-x-auto">
                            <table class="w-full text-sm text-center">
                                <thead class="text-xs bg-gray-50">
                                    <tr class="">
                                        <th scope="col" class="p-4 border border-gray-400 ">
                                            No
                                        </th>
                                        <th scope="col" class="p-4 border border-gray-400 ">
                                            Nama
                                        </th>
                                        <th scope="col" class="p-4 border border-gray-400 ">
                                            NIM
                                        </th>
                                        <th scope="col" class="p-4 border border-gray-400 ">
                                            Lembar Pengesahan
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row" colspan="4" class="p-2 border font-light border-gray-400">
                                            Lembar Pengesahan anda belum terbit
                                        </th>
                                    </tr>
                                    <tr class="bg-white border-b">
                                        <th scope="row" class="p-2 border font-light border-gray-400">
                                            1
                                        </th>
                                        <th scope="row" class="p-2 border font-light border-gray-400">
                                            Priyo Galur
                                        </th>
                                        <th scope="row" class="p-2 border font-light border-gray-400 ">
                                            1022090
                                        </th>
                                        <th scope="row" class="p-2 pt-3 border font-light border-gray-400 lg:w-72">
                                            <a href=""
                                                class="text-white px-4 py-1 rounded-sm bg-hmsi">
                                                <button class= "min-w-16"><i data-feather="download"
                                                        class="inline size-4 mb-1.5"></i>
                                                    Unduh</button>
                                            </a>
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
