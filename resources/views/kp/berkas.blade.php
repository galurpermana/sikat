@extends('layout.main')

@section('kp')
    <div class="p-4 md:ml-64 mt-32">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
            <div class=" bg-white">
                <div class="p-4 h-full xl:h-layar rounded bg-white dark:bg-gray-800">
                    <div class="p-4 grid grid-cols-1 gap-4 lg:grid-cols-2 xl:grid-cols-3">
                        <div class="mx-auto w-60 lg:w-72 h-full bg-white shadow-lg p-4">
                            <h3 class="text-center font-semibold py-4">Fotocopy Transkrip Nilai</h3>
                            <p class="text-xs bg-yellow-400 text-center rounded-lg">Hanya dapat di isi jika pendaftaran
                                menunggu diverifikasi
                            </p>
                            <i data-feather="archive" class="mx-auto my-8 size-20 fill-hmsi text-white"></i>
                            <div class="flex justify-center">
                                <form action="" class="py" method="post" enctype="multipart/form-data">
                                    <input type="file" id="fileInput" accept="" name="fileInput"
                                        style="display: none;" onchange="showFileName()">
                                    <button type="button" class="block mx-auto border px-2 border-gray-900 text-black"
                                        onclick="document.getElementById('fileInput').click()">Pilih
                                        File</button>
                                    <span id="fileName"></span>
                                    <br>
                                    <button type="submit" class= "min-w-16 bg-hmsi text-white px-2 py-1 rounded-md"><i
                                            data-feather="upload" class="inline size-4 mb-1.5"></i>
                                        Unggah</button>
                                </form>
                            </div>
                        </div>
                        <div class="mx-auto w-60 lg:w-72 h-full bg-white shadow-lg p-4">
                            <h3 class="text-center font-semibold py-4 text-sm lg:text-base">Bukti Terima Permohonan KP</h3>
                            <p class="text-xs bg-yellow-400 text-center rounded-lg">Hanya dapat di isi jika pendaftaran
                                menunggu diverifikasi
                            </p>
                            <i data-feather="file" class="mx-auto my-8 size-20 fill-hmsi text-white"></i>
                            <div class="flex justify-center">
                                <form action="" class="py" method="post" enctype="multipart/form-data">
                                    <input type="file" id="fileInput" accept="" name="fileInput"
                                        style="display: none;" onchange="showFileName()">
                                    <button type="button" class="block mx-auto border px-2 border-gray-900 text-black"
                                        onclick="document.getElementById('fileInput').click()">Pilih
                                        File</button>
                                    <span id="fileName"></span>
                                    <br>
                                    <button type="submit" class= "min-w-16 bg-hmsi text-white px-2 py-1 rounded-md"><i
                                            data-feather="upload" class="inline size-4 mb-1.5"></i>
                                        Unggah</button>
                                </form>
                            </div>
                        </div>
                        <div class="mx-auto w-60 lg:w-72 h-full bg-white shadow-lg p-4">
                            <h3 class="text-center font-semibold py-4">Surat Pengantar KP</h3>
                            <p class="text-xs bg-yellow-400 text-center rounded-lg">Hanya dapat di isi jika pendaftaran
                                menunggu diverifikasi
                            </p>
                            <i data-feather="file" class="mx-auto my-8 size-20 fill-hmsi text-white"></i>
                            <div class="flex justify-center">
                                <form action="" class="py" method="post" enctype="multipart/form-data">
                                    <input type="file" id="fileInput" accept="" name="fileInput"
                                        style="display: none;" onchange="showFileName()">
                                    <button type="button" class="block mx-auto border px-2 border-gray-900 text-black"
                                        onclick="document.getElementById('fileInput').click()">Pilih
                                        File</button>
                                    <span id="fileName"></span>
                                    <br>
                                    <button type="submit" class= "min-w-16 bg-hmsi text-white px-2 py-1 rounded-md"><i
                                            data-feather="upload" class="inline size-4 mb-1.5"></i>
                                        Unggah</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
