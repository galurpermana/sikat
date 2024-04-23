@extends('layout.main')

@section('kp')
    <div class="p-4 md:ml-64 mt-32">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
            <div class=" bg-white">
                <div class="p-4 h-screen rounded bg-white dark:bg-gray-800">
                    <form action="">
                        <h3 class="text-hmsi text-xl sm:text-2xl font-medium my-4"> > Data Mahasiswa</h3>
                        <label class="block mb-2 text-sm font-medium " for="">Nama</label>
                        <input type="text" id=""
                            class="block w-full p-2 bg-gray-200 border-none rounded-lg text-xs mb-2">
                        <label class="block mb-2 text-sm font-medium " for="">NIM</label>
                        <input type="number" id=""
                            class="block w-full p-2 bg-gray-200 border-none rounded-lg text-xs mb-2">
                        <label class="block mb-2 text-sm font-medium " for="">Email</label>
                        <input type="email" id=""
                            class="block w-full p-2 bg-gray-200 border-none rounded-lg text-xs mb-2">
                        <label class="block mb-2 text-sm font-medium " for="">No. Whatsapp</label>
                        <input type="number" id=""
                            class="block w-full p-2 bg-gray-200 border-none rounded-lg text-xs mb-2">

                        <h3 class="text-hmsi text-xl sm:text-2xl font-medium mb-4 mt-6"> > Jenis KP yang Dijalani</h3>
                        <label class="block mb-2 text-sm font-medium " for="nama">Jenis KP</label>
                        <select name="" id=""
                            class="block w-full text-sm bg-gray-200 border-none rounded-lg ">
                            <option selected>Pilih Jenis KP yang diikuti</option>
                            <option value="">KP</option>
                            <option value="">KP</option>
                            <option value="">KP</option>
                        </select>

                        <h3 class="text-hmsi text-xl sm:text-2xl font-medium mb-4 mt-6"> > Data Perusahaan</h3>
                        <label class="block mb-2 text-sm font-medium " for="">Nama Perushaan</label>
                        <input type="text" id=""
                            class="block w-full p-2 bg-gray-200 border-none rounded-lg text-xs mb-2">
                        <label class="block mb-2 text-sm font-medium " for="">Alamat Perusahaan</label>
                        <input type="text" id=""
                            class="block w-full p-2 bg-gray-200 border-none rounded-lg text-xs mb-2">
                        <div class="flex justify-center">
                            <button type="button" class="text-white bg-hmsi hover:scale-105 transition font-medium rounded-lg text-sm px-5 py-2.5 me-2 mt-4 mb-2">Submit</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
