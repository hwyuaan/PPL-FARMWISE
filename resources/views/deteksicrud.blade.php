
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        @vite('resources/css/app.css')
        <title> Sistem Farmwise</title>
</head>
<body class="">
 <!-- navbar-->

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
        <div class="flex  justify-center">
                <label for="image" class="flex justify-center border-2  border-gray-500 border-dashed rounded-lg cursor-pointer bg-white dark:hover:bg-white dark:bg-white hover:bg-white dark:border-gray-900 dark:hover:border-gray-500" style=" width:950px; height:500px;">
                    <div class="flex flex-col items-center justify-center pt-5 pb-6">
                        <div class="flex flex-col  gap-y-20">
                            <div class="w-72 h-60 flex justify-center items-center relative">
                                <img src="{{asset( $imageUrl) }}" style="width: 200px heigh:100px" class="img-preview">
                            </div>
                            <div class="flex flex-row w-auto h-auto bg-white space-x-2 gap-x-2 p-2">
                                <button type="button" class="w-40 h-10 bg-white outline outline-green-400 outline-1 rounded-lg flex items-center justify-center hover:bg-slate-200 active:bg-slate-300 focus:outline-none focus:ring focus:ring-green-400">Batal</button>
                                
                                <form action="{{ route('process-hasil-deteksi', ['id' => $id]) }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="url" value="{{ $imageUrl }}">
                                    <button type="submit" class="w-40 h-10 bg-green-400 rounded-lg outline-green-700 outline-1 flex items-center justify-center hover:bg-green-600 active:bg-green-700 focus:outline-none focus:ring focus:ring-green-800">Deteksi</button>
                                </form>

                            </div>
                        </div>
                    </div>
            
                </label> 
        </div>
    </div> 

</body>
</html>