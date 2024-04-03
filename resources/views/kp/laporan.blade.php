@extends('layout.main')

@section('kp')
    <div class="p-4 md:ml-64 mt-32">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
            <div class=" bg-white">
                <div class="p-4 h-full xl:h-layar rounded bg-white dark:bg-gray-800">
                    <div class="p-4 grid grid-cols-1 gap-4 lg:grid-cols-2 xl:grid-cols-3">
                        <div class="mx-auto w-60 lg:w-72 h-80 bg-white shadow-lg p-4">
                            <h3 class="text-center text-lg font-semibold py-4">Konsultasi</h3>
                            <i data-feather="message-square" class="mx-auto my-8 size-20 text-hmsi"></i>
                            <p class="text-center my-4 text-xs font-semibold">Total Kegiatan: 0</p>
                            <div class="flex justify-center">
                                <button class="bg-hmsi py-2 px-4 rounded-lg text-white">Input Kegiatan</button>
                            </div>
                        </div>
                        <div class="mx-auto w-60 lg:w-72 h-80 bg-white shadow-lg p-4">
                            <h3 class="text-center text-lg font-semibold py-4">Log Book</h3>
                            <i data-feather="book" class="mx-auto my-8 size-20 text-hmsi"></i>
                            <p class="text-center my-4 text-xs font-semibold">Total Log Book: 0</p>
                            <div class="flex justify-center">
                                <button class="bg-hmsi py-2 px-4 rounded-lg text-white">Input Kegiatan</button>
                            </div>
                        </div>
                        <div class="mx-auto w-60 lg:w-72 h-80 bg-white shadow-lg p-4">
                            <h3 class="text-center text-lg font-semibold py-4">Laporan KP</h3>
                            <i data-feather="file-text" class="mx-auto my-8 size-20 text-hmsi"></i>
                            <p class="text-center my-4 text-xs font-semibold">Total Laporan: 0</p>
                            <div class="flex justify-center">
                                <button class="bg-hmsi py-2 px-4 rounded-lg text-white">Input Kegiatan</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
