@extends('layout.main')

@section('kp')
<div class="p-4 md:ml-64 mt-32">
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
        <div class=" bg-white" style="padding-bottom: 70px;">
            <div class="p-4 h-screen rounded bg-white dark:bg-gray-800">
                <form action="">
               
                <h3 class="text-hmsi text-xl sm:text-2xl font-medium my-4"> > Data </h3>
                    <label class="block mb-2 text-sm font-medium " >Nama</label>
                    <input type="text" id=""
                        class="block w-full p-2 bg-gray-200 border-none rounded-lg text-xs mb-2" disabled value="{{ Auth::user()->name }}">
                    <label class="block mb-2 text-sm font-medium " >NIM/NIPH</label>
                    <input type="number" id=""
                        class="block w-full p-2 bg-gray-200 border-none rounded-lg text-xs mb-2" disabled value="{{ Auth::user()->nim }}">
                    <label class="block mb-2 text-sm font-medium " >Program Studi</label>
                    <input type="text" id=""
                        class="block w-full p-2 bg-gray-200 border-none rounded-lg text-xs mb-2 " disabled value="Sistem Informasi">
                    <label class="block mb-2 text-sm font-medium ">Jurusan</label>
                    <input type="text" id=""
                        class="block w-full p-2 bg-gray-200 border-none rounded-lg text-xs mb-2" disabled value="Jurusan Matematika dan Teknologi Informasi Informasi">
                    
                    {{-- <input type="file" id="gambar" name="gambar" class="hidden">
                    <label for="gambar" class="text-white bg-hmsi hover:scale-305 transition font-medium rounded-lg text-sm px-5 py-2.5 me-2 mt-4 mb-2">Pilih Gambar</label>
                    --}}
                </form>
                <form action="" method="post" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="p-1 rounded ring-2 ring-gray-300 dark:ring-gray-500">
                        <p class="block mb-2 text-sm font-medium">Tanda Tangan</p>
                        <div class="flex items-center justify-center w-full mb-4">
                            <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                                <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                    <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                                    </svg>
                                    <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                                    <p class="text-xs text-gray-500 dark:text-gray-400">PNG (MAX. 800x400px)</p>
                                </div>
                                
                                <input id="dropzone-file" type="file" class="hidden" name="ttd" accept=".png"/>
                            </label>
                            
                        </div>
                    
                        <div class="flex items-center justify-center w-full">
                            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
