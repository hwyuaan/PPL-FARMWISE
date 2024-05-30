
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
 
 <div class="flex justify-center">
   <div class="flex flex-row justify-center mt-36 align-items-center">
       <form action="{{route ('uploadPOST')}}" method="POST"  enctype="multipart/form-data" class="flex flex-col gap-4" >
            @csrf
            <label class="mb-2 text-xl font-medium text-gray-900  for="file_input">Upload Gambar Sapi</label>
            <input name="image" class="form-control w-96 justify-center text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-green-600 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-green-600" id="image" type="file">
            @error('image')
                {{$message}}
            @enderror
            <br>
            <button type="submit"  class="w-full py-2 mt-4 bg-green-500 text-white font-medium rounded-lg hover:bg-green-600">Upload</button> <!-- Tombol untuk mengirimkan form -->
        </form>
    </div>
 </div> 
 <form id="redirectForm" action="{{ route('deteksicrud', ['id' => 1]) }}" method="GET" style="display: none;">
    @csrf
 </form>
 <script>
    document.querySelector('form').addEventListener('submit', function() {
        setTimeout(function() {
            document.getElementById('redirectForm').submit();
        }, 1000); 
    });
 </script>



</body>
</html>