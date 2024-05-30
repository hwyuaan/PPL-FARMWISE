
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Hasil Deteksi Penyakit</title>
</head>
<body class="">
 <div class="navbar fixed">
    <nav class="bg-slate-50 drop-shadow-md w-screen">
      <div class="px-9 lg:x-8 ">
        <div class="relative flex h-16 items-center justify-between">
          <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
            <div class="flex flex-shrink-1 items-center">
              <img class="h-14 w-13" src={{ asset('asset/LOGO.png') }}>
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

 <div class="flex justify-center w-screen h-screen items-center">
   <div class="flex justify-center">
      <label for="dropzone" class="flex justify-center border-2  border-gray-500 rounded-lg bg-red-400 dark:hover:bg-white dark:bg-white hover:bg-white dark:border-green-400 " style="width: 950px; height: 500px;">
        <div class="profil flex flex-row h-full w-full justify-between items-start pt-10 rounded-lg bg-white-500 px-10 relative"> <!-- Menambahkan relative di sini -->
            <div class="flex flex-row gap-12 w-auto h-auto justify-center items-center bg-white rounded-lg p-2">
                <div class="flex flex-col">
                    <h1 class="font-medium text-2xl items-center justify-center ">Hasil Deteksi</h1>
                    <br>
                    <br>
                    <img src="{{asset( $imageUrl) }}" style="width: 300px heigh:200px" class="img-preview">
                </div> 
                <div class="flex flex-col  mt-20 justify-between items-center  ">
                    <ul>
                        
                        <h2 class="font-medium">ID Gambar: {{ $id }}</h2>
                        <br>
                        <h2 class="font-medium">Kategori: {{ $prediction->kategori }}</h2>
                        <br>
                        <h2 class="font-medium">Akurasi:</h2>
                        <li>Akurasi sapi sehat: {{ $prediction->prediction_score[0] }}</li>
                        <li>Akurasi sapi terdiagnosa penyakit: {{ $prediction->prediction_score[1] }}</li>
                    </ul>
                    <div class="flex flex-col h-44 object-bottom ">
                        <a href="/"><button type="button" class="w-52 h-10 bg-green-400 rounded-lg outline-green-700 outline-1 flex items-center justify-center hover:bg-green-600 active:bg-green-700 focus:outline-none focus:ring focus:ring-green-800">Selesai</button> </a>        
                    </div>
                </div>
        </div>
      </label>
   </div>
</div> 



</body>
</html>