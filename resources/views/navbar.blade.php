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
          <div class="flex justify-end sm:block">
            <div class="flex space-y-0 space-x-3.5 items-center">
                <svg class="button h-6"  xmlns="http://www.w3.org/2000/svg" fill="bg-green-700" viewBox="0 0 24 24" stroke-width="1.5" stroke="green" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 5.25h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5" />
                </svg>
            </div>
            <div class="absolute right-0 z-10 mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="1">
                <div class="py-1" role="#">
                  {{-- <Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700"> --}}
                  {{-- <a href="#" class="text-gray-700 bg-black px-4 py-2 text-sm role="menuitem" tabindex="-1" id="menu-item-0">Log In</a></button> --}}
                </div>








                
              </div>
            </div>
          </div>
      </div>
    </nav>
 </div>