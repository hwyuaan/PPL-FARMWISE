<!DOCTYPE html>
<html lang="en" class="smooth">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmwise</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter&family=Open+Sans&family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    
</head>
<body >
    <div class="navbar">
        <nav class="bg-slate-50 drop-shadow-md z-0">
          <div class=" px-9 lg:x-8">
            <div class="flex h-16 items-center justify-between">
              <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                <div class="flex flex-shrink-1 items-center">
                  <img class="h-14 w-13" src="asset/LOGO.png" alt="farmwise">
                  <p class="judul text-2xl text-gray-500 font-normal" >Farmwise</p>
                </div>
              </div>
              <div class="flex justify-end sm:block">
                <div class="flex space-y-0 space-x-3.5 items-center">
                  <button type="button" onclick="window.location.href='{{ route('login') }}'" class="bg-[#2ECC71] text-white hover:text-gray-900 rounded-md px-3 py-2 text-base font-semibold">Login</button>
                </div>
              </div>
          </div>
        </nav>
    </div>
    <div class=" bg-cover py-48"  style="background-image: url('asset/bgland.jpg'); width: full; height:631px; background-size:cover; background-position:center; bg-transparent; font-size:46px;">
      <div class="ml-16 ">
        <h1 class="mb-4  font-bold text-gray-900 dark:text-white md:text-5xl lg:text-6xl">Selamatkan Sapi Anda </h1>
        <div class="inline-block bg-green-400 w-">
          <h1 class="mb-4 font-bold text-gray-900 dark:text-gray-900 lg:text-6xl"> Dari Sekarang!</h1>
        </div>
      </div>
      <p class=" ml-16 text-xl font-normal text-white lg:text-xl">Menjaga kesehatan sapi sangatlah penting. <br> Terjangkitnya penyakit menyebabkan kwalitas hidup sapi menurun!</p>
      <button><a href="/deteksi" class=" drop-shadow-md ml-24 text-white bg-[#2ECC71] hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 ">Deteksi Penyakit </a></button>
    </div>
</body>
</html>