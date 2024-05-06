@extends('layout.main')

@section('kp')
<div class="p-4 md:ml-64 mt-32">
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
        <div class=" bg-white" style="padding-bottom: 70px;">
            <div class="p-4 h-screen rounded bg-white dark:bg-gray-800">
                <form action="">
               
                <h3 class="text-hmsi text-xl sm:text-2xl font-medium my-4"> > Data Mahasiswa</h3>
                    <label class="block mb-2 text-sm font-medium " for="">Nama</label>
                    <input type="text" id=""
                        class="block w-full p-2 bg-gray-200 border-none rounded-lg text-xs mb-2">
                    <label class="block mb-2 text-sm font-medium " for="">NIM</label>
                    <input type="number" id=""
                        class="block w-full p-2 bg-gray-200 border-none rounded-lg text-xs mb-2">
                    <label class="block mb-2 text-sm font-medium " for="">Program Studi</label>
                    <input type="text" id=""
                        class="block w-full p-2 bg-gray-200 border-none rounded-lg text-xs mb-2">
                    <label class="block mb-2 text-sm font-medium " for="">Jurusan</label>
                    <input type="text" id=""
                        class="block w-full p-2 bg-gray-200 border-none rounded-lg text-xs mb-2">
                    <label for="gambar" class="block mb-2 text-sm font-medium ">Tanda Tangan Mahasiswa</label>
                    <input type="file" id="gambar" name="gambar" class="hidden">
                    <label for="gambar" class="text-white bg-hmsi hover:scale-305 transition font-medium rounded-lg text-sm px-5 py-2.5 me-2 mt-4 mb-2">Pilih Gambar</label>
                   


                    <h3 class="text-hmsi text-xl sm:text-2xl font-medium mb-4 mt-6"> >Data Mitra KP</h3>
                    <label class="block mb-2 text-sm font-medium " for="">Nama Mitra</label>
                    <input type="text" id=""
                        class="block w-full p-2 bg-gray-200 border-none rounded-lg text-xs mb-2">
                    <label class="block mb-2 text-sm font-medium " for="">Alamat Mitra</label>
                    <input type="text" id=""
                        class="block w-full p-2 bg-gray-200 border-none rounded-lg text-xs mb-2">
                    <label class="block mb-2 text-sm font-medium " for="">Jenis/Bidang</label>
                    <input type="text" id=""
                        class="block w-full p-2 bg-gray-200 border-none rounded-lg text-xs mb-2">
                    <div class="flex justify-between">
                        <div class="w-1/2 mr-2">
                            <label class="block mb-2 text-sm font-medium " for="">Periode KP (Dari)</label>
                            <input type="date" id=""
                                class="block w-full p-2 bg-gray-200 border-none rounded-lg text-xs mb-2">
                        </div>
                        <div class="w-1/2 ml-2">
                            <label class="block mb-2 text-sm font-medium " for="">Periode KP (Sampai)</label>
                            <input type="date" id=""
                                class="block w-full p-2 bg-gray-200 border-none rounded-lg text-xs mb-2">
                        </div>
                    </div>

                    <div class="flex justify-center">
                        <button type="button" class="text-white bg-hmsi hover:scale-305 transition font-medium rounded-lg text-sm px-5 py-2.5 me-2 mt-4 mb-2" style="margin-top: 40px;" >Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
