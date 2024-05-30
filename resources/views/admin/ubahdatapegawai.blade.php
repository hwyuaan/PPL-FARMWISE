<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title> Sistem Farmwise</title>
</head>

<body>
    <div class="flex flex-col justify-center items-center w-screen h-screen bg-slate-300">
        
        <div class="w-3/5 h-auto rounded-lg bg-white mb-3">
            
            <form class="flex flex-col pl-28 pr-28 pt-16 pb-16 w-items-center gap-y-2" id="ubahpegawai" method="POST" action="{{ route('updatePegawai', ['id' => $user->id]) }}">
                @csrf
                @method('PUT') 
                <div class="text-4xl font-bold text-center text-green-400 mb-10">Edit Data</div>
                @if($errors->any())
                    <div class="bg-red-500 text-white p-3 rounded mb-3">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if(session('success'))
                    <div class="bg-green-500 text-white p-3 rounded mb-3">
                        {{ session('success') }}
                    </div>
                @endif
                @if(session('error'))
                    <div class="bg-red-500 text-white p-3 rounded mb-3">
                        {{ session('error') }}
                    </div>
                @endif 
                
                <div>
                    <input type="text" name="name" value="{{$user->name }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-black dark:focus:border-black" placeholder="Name" required />
                </div> 
                <div>
                    <input type="date" name="tanggal" value="{{$user->tanggal}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-black dark:focus:border-black" placeholder="Tanggal Lahir" required />
                </div> 
                <div>
                    <input type="text" name="tempatlahir" value="{{$user->tempatlahir}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-black dark:focus:border-black" placeholder="Tempat Lahir" required />
                </div> 
                <div>
                    <input type="email" name="email" value="{{$user->email}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-black dark:focus:border-black" placeholder="Email" required />
                </div> 
                
                <div>
                    <input type="text" name="role" value="{{$user->role}}"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-black dark:focus:border-black" placeholder="Jabatan" required />
                </div> 
                <button type="submit" class="mt-10 text-white bg-green-400 hover:bg-green-900 focus:ring-4 focus:outline-none focus:ring-green-900 font-bold  rounded-lg text-2xl w-full[-25px] sm:w-auto px-5 py-2.5 text-center dark:bg-green-400 dark:hover:bg-green-500 dark:focus:bg-green-600">Simpan</button>
            </form>
            <script>
                document.getElementById('ubahpegawai').addEventListener('submit', function(event) {
                    var confirmation = confirm("Apakah Anda yakin ingin menyimpan perubahan?");
                    if (!confirmation) {
                        event.preventDefault();
                    }
                });
            </script>

        </div>
    </div>

</body>