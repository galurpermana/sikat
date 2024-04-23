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
                                            Tanggal
                                        </th>
                                        <th scope="col" class="p-4 border border-gray-400 ">
                                            Waktu
                                        </th>
                                        <th scope="col" class="p-4 border border-gray-400 ">
                                            Ruang
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row" colspan="4" class="p-2 border font-light border-gray-400">
                                            Anda belum dijadwalkan untuk ujian seminar
                                        </th>
                                    </tr>
                                    <tr class="bg-white border-b">
                                        <th scope="row" class="p-2 border font-light border-gray-400">
                                            1
                                        </th>
                                        <th scope="row" class="p-2 border font-light border-gray-400">
                                            22 Maret 2024
                                        </th>
                                        <th scope="row" class="p-2 border font-light border-gray-400 ">
                                            08.00 - 12.00
                                        </th>
                                        <th scope="row" class="p-2 pt-3 border font-light border-gray-400 lg:w-72">
                                            G305
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
