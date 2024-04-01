<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Document</title>
</head>

<body class="bg-slate-200">
    @include('partials.header')
    <div>
        @include('partials.sidebar')
        @yield('daftar')
        @yield('riwayat')
    </div>

    <style>
        /* CSS untuk menghilangkan arrow pada input number */
        /* Untuk Chrome, Safari, dan Opera */
        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Untuk Firefox */
        input[type=number] {
            -moz-appearance: textfield;
        }
    </style>

</body>

</html>
