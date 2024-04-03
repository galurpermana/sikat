@extends('layout.main')

@section('kp')
    <div class="p-4 md:ml-64 mt-32">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
            <div class=" bg-white">
                <div class="p-4 h-full lg:h-layar rounded bg-white dark:bg-gray-800">
                    <form action="">
                        <p class="text-xs lg:text-base mb-4 p-1 rounded-sm text-justify bg-blue-200">Jika anda telah memiliki
                            pembimbing
                            lapangan di lokasi KP, silahkan mengisi data pembimbing lapangan dibawah ini. <span
                                class="font-bold">Form ini wajib di isi</span></p>
                        <label class="block mb-2 text-sm font-medium " for="">Nama</label>
                        <input type="text" id=""
                            class="block w-full p-2 bg-gray-200 border-none rounded-lg text-xs mb-2">
                        <label class="block mb-2 text-sm font-medium " for="">Email</label>
                        <input type="email" id=""
                            class="block w-full p-2 bg-gray-200 border-none rounded-lg text-xs mb-2">
                        <label class="block mb-2 text-sm font-medium " for="">No. Whatsapp</label>
                        <input type="number" id=""
                            class="block w-full p-2 bg-gray-200 border-none rounded-lg text-xs mb-2">
                        <label class="block mb-2 text-sm font-medium " for="">Jabatan</label>
                        <input type="text" id=""
                            class="block w-full p-2 bg-gray-200 border-none rounded-lg text-xs mb-4">
                        <div class="flex justify-center py-4">
                            <button type="button"
                                class="text-white bg-hmsi lg:w-full transition font-medium rounded-lg text-sm px-5 py-2.5 me-2">Submit</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
