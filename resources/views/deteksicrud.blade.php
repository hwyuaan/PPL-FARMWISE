
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
   <div class="flex  justify-center">
            <label for="image" class="flex justify-center border-2  border-gray-500 border-dashed rounded-lg cursor-pointer bg-white dark:hover:bg-white dark:bg-white hover:bg-white dark:border-gray-900 dark:hover:border-gray-500" style=" width:950px; height:500px;">
                <div class="flex flex-col items-center justify-center pt-5 pb-6">
                    <div class="flex flex-col w-auto h-auto gap-y-20">
                    <div class="w-100 h-52 bg-slate-300 rounded-lg flex justify-center items-center relative">
                        <svg class="w-6 h-6 text-gray-800 dark:text-red-700 absolute top-2 right-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z"/>
                        </svg>
                        {{-- <img src="{{ Storage::url($uploads->path) }}" alt="Gambar Deteksi"> --}}
                    </div>
                    <div class="flex flex-row w-auto h-auto bg-white space-x-2 gap-x-2 p-2">
                        <button type="submit" class="w-40 h-10 bg-white outline outline-green-400 outline-1 rounded-lg flex items-center justify-center hover:bg-slate-200 active:bg-slate-300 focus:outline-none focus:ring focus:ring-green-400">Batal</button>
                        <button type="submit"  onclick="window.location.href='{{ route('hasil') }}'" class="w-40 h-10 bg-green-400 rounded-lg outline-green-700 outline-1 flex items-center justify-center hover:bg-green-600 active:bg-green-700 focus:outline-none focus:ring focus:ring-green-800">Deteksi</button>
                    </div>
                </div>
        
            </label> 
   </div>
 </div> 
 <script>
    document.getElementById('image').addEventListener('change', function (event) {
        const [file] = event.target.files;
        if (file) {
            document.getElementById('preview').src = URL.createObjectURL(file);
            document.getElementById('preview').style.display = 'block';
        }
    });
</script>


</body>
</html>