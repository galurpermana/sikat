<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>Document</title>
</head>
<body>
<!-- component -->
<div class="flex h-screen items-center justify-center bg-dark-900 relative">
    <div class="absolute inset-0 bg-cover bg-center" style="background-image:url('https://itk.ac.id/wp-content/uploads/2020/06/1-1-1024x607.jpeg'); opacity: 0.7;"></div>
    <div class="rounded-xl bg-white px-16 py-10 shadow-lg backdrop-blur-md max-sm:px-8">
        <div class="text-black">
          <div class="mb-8 flex flex-col items-center">
            <img src="https://is.itk.ac.id/asset/backend/upload/hasil_penelitian/logo_SI_Inggris1.png" width="450" alt="" srcset="" />
          </div>
          <form action="/login" class="mx-auto max-w-lg" method="POST">
            @csrf
            <div class="mb-4 text-lg">
              <input class="rounded-3xl border-none bg-white-400 bg-opacity-50 px-6 py-2 text-center text-inherit placeholder-black shadow-lg outline-none w-full" type="text" name="email" placeholder="Email" />
            </div>

            <div class="mb-4 text-lg">
              <input class="rounded-3xl border-none bg-white-400 bg-opacity-50 px-6 py-2 text-center text-inherit placeholder-black shadow-lg outline-none w-full" type="Password" name="password" placeholder="Password" />
            </div>
            <div class="mt-5 flex justify-between text-sm text-red-600">
              <a href="#">Forgot password?</a>
              <a href="#">Sign up</a>
            </div>
            <div class="mt-8 flex justify-center text-lg text-black">
              <button type="submit" class="rounded-3xl bg-yellow-400 bg-opacity-50 px-10 py-2 text-white shadow-xl transition-colors duration-300 hover:bg-yellow-600">Login</button>
            </div>
          </form>
        </div>
      </div>

  </div>

</body>
</html>
