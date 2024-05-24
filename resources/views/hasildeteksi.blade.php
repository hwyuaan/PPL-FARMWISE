
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Deteksi Penyakit</title>
</head>
<body class="">
 <!-- navbar-->
 @include('navbar')
 <!--up-->
 
 <div class="flex justify-center w-screen h-screen items-center">
   <div class="flex justify-center">
      <label for="dropzone" class="flex justify-center border-2  border-gray-500 rounded-lg bg-red-400 dark:hover:bg-white dark:bg-white hover:bg-white dark:border-green-400 " style="width: 950px; height: 500px;">
        <div class="profil flex flex-row h-full w-full justify-between items-start pt-10 rounded-lg bg-white-500 px-10 relative"> <!-- Menambahkan relative di sini -->
            <div class="flex flex-col w-auto h-auto bg-white rounded-lg p-2">
                <div class="flex flex-col">
                    <p>ID PENYAKIT : XXXXXX</p>
                    <p>xx/xx/xxxx xx:xx:xx</p><br><br><br>
                </div>
                <div class="flex flex-col">
                    <p>Catagories Penyakit : {{ $prediction['Prediction'] }}</p>
                </div>
            </div>
            <svg class="w-6 h-6 text-gray-800 dark:text-black absolute top-2 right-2 cursor-pointer" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18 17.94 6M18 18 6.06 6"/>
            </svg>

            <div class="w-100 h-52 bg-slate-300 rounded-lg flex justify-center items-center relative p-2">
                Foto yang sudah diunggah
            </div>               
        </div>
      </label>
   </div>
</div> 



</body>
</html>