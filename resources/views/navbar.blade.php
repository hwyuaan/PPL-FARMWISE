<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Deteksi Penyakit</title>
</head>
<body>
 <!-- navbar-->
 <div class="navbar fixed">
    <nav class="bg-slate-50 drop-shadow-md w-screen">
      <div class="px-9 lg:x-8 ">
        <div class="relative flex h-16 items-center justify-between">
          <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
            <div class="flex flex-shrink-1 items-center">
              <img class="h-14 w-13" src="asset/LOGO.png" alt="farmwise">
              <p class="judul text-2xl text-gray-500 font-normal" >Farmwise</p>
            </div>
          </div>
          <div class="flex space-y-0 space-x-3.5 items-center">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="bg-[#2ECC71] text-white hover:text-gray-900 rounded-md px-3 py-2 text-base font-medium">LogOut</button>
            </form>
        </div>
      </div>
    </nav>
 </div>