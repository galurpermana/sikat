@extends('layout.index')

@section('content')
<div class="absolute inset-0 flex justify-center items-center overflow-hidden space-x-20 bg-cover bg-center" style="background-image: url('https://itk.ac.id/wp-content/uploads/2020/06/1-1-1024x607.jpeg'); opacity: 0.8;">
    <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 flex flex-col items-center hover:shadow-lg hover:bg-blue-400 transition duration-300 ease-in-out transform hover:-translate-y-1">
        <a href="/riwayat">
            <img class="p-8 rounded-t-lg" src="https://cdn.discordapp.com/attachments/1019230608381186049/1222219537303339008/paper.png?ex=66156ba5&is=6602f6a5&hm=9841c6401d7c6271b18f01285d903808fddc5bf678ec05a3237c236aa1081d02&" alt="product image" style="width: 250px;"/>
        </a>
        <div class="px-5 pb-5 text-3xl font-bold text-gray-900 dark:text-white flex justify-center">
            <a href="">
                <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Kerja Praktik</h5>
            </a>
        </div>
    </div>
    <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 flex flex-col items-center hover:shadow-lg hover:bg-blue-400 transition duration-300 ease-in-out transform hover:-translate-y-1">
        <a href="#">
            <img class="p-8 rounded-t-lg" src="https://cdn.discordapp.com/attachments/1019230608381186049/1222219537714384986/team.png?ex=66156ba5&is=6602f6a5&hm=b868672e2bf98fa96f00a927c4339146f9526ec1da3bba3ddbc42549800f611c&" alt="product image" style="width: 250px;"/>
        </a>
        <div class="px-5 pb-5 text-3xl font-bold text-gray-900 dark:text-white flex justify-center">
            <a href="#">
                <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Tugas Akhir</h5>
            </a>
        </div>
    </div>
</div>
@endsection
