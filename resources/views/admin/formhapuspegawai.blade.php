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
            
            <form class="flex flex-col pl-28 pr-28 pt-16 pb-16 w-items-center gap-y-2" id="hapus" method="POST" action="{{ route('hapusPegawai', ['id' => $pegawai->id]) }}">
                
            
                <div class="text-4xl font-bold text-center text-green-400 mb-10">Hapus Data</div>
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
                    <input type="text" name="name" value="{{$pegawai->name }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-black dark:focus:border-black" placeholder="Name" required />
                </div> 
                <div>
                    <input type="date" name="tanggal" value="{{$pegawai->tanggal}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-black dark:focus:border-black" placeholder="Tanggal Lahir" required />
                </div> 
                <div>
                    <input type="text" name="tempatlahir" value="{{$pegawai->tempatlahir}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-black dark:focus:border-black" placeholder="Tempat Lahir" required />
                </div> 
                <div>
                    <input type="email" name="email" value="{{$pegawai->email}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-black dark:focus:border-black" placeholder="Email" required />
                </div> 
                <div class="relative">
                    {{-- <input name="password"  value="{{$pegawai->password}}" type="password" name="password"   autocomplete="current-password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-black dark:focus:border-black"  placeholder="Enter password" >
                    <span class="absolute inset-y-0 right-0 pr-3 flex items-center cursor-pointer" name="togglePassword">
                        <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0zm4.21 3.39A9.955 9.955 0 0121 12c-2-4-6-7-9-7s-7 3-9 7a9.955 9.955 0 011.79 3.39M4.93 4.93l14.14 14.14"></path>
                        </svg>
                    </span> --}}
                </div> 
                <div>
                    <input type="text" name="role" value="{{$pegawai->role}}"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-black dark:focus:border-black" placeholder="Jabatan" required />
                </div> 
                <button type="submit" class="mt-10 text-white bg-red-400 hover:bg-red-900 focus:ring-4 focus:outline-none focus:ring-red-900 font-bold rounded-lg text-2xl w-full sm:w-auto px-5 py-2.5 text-center dark:bg-red-400 dark:hover:bg-red-500 dark:focus:bg-red-600">Hapus Data</button>
            </form>
            

        </div>
    </div>

</body>