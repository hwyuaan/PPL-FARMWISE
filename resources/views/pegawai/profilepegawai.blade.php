<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title> Sistem Farmwise</title>
</head>
<body >
   @include('navbar')
   <div class="flex flex-row h-screen" >
      <aside id="default-sidebar" class="flex top-0 left-0 w-64 transition-transform " aria-label="Sidebar">
         <div class="px-3 py-28 overflow-y-auto bg-gray-50 dark:bg-green-400">
            <ul class="space-y-5 font-medium py-8">
              <li>
                 <a href="#" class="flex items-center p-2 text-neutral-950 rounded-lg dark:text-neutral-950 hover:bg-gray-100 dark:bg-green-100 group">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                     <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    </svg>                   
                    <span class="ms-3 text-neutral-950">Profil</span>
                  </a>
               </li>
               
              <li>
                 <a href="/deteksi" class="flex items-center p-2 text-neutral-950 rounded-lg dark:text-neutral-950 hover:bg-gray-100 dark:hover:bg-green-300 group">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                     <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                   </svg>                                      
                     <span class="flex-1 ms-3 whitespace-nowrap text-neutral-950 font-normal">Deteksi</span>
                  </a>
              </li>
              <li>
                 <a href="/riwayatdeteksi" class="flex items-center p-2 text-neutral-950 rounded-lg dark:text-neutral-950 hover:bg-gray-100 dark:hover:bg-green-300 group">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M12 8v5h5v-2h-3V8z"></path><path d="M21.292 8.497a8.957 8.957 0 0 0-1.928-2.862 9.004 9.004 0 0 0-4.55-2.452 9.09 9.09 0 0 0-3.626 0 8.965 8.965 0 0 0-4.552 2.453 9.048 9.048 0 0 0-1.928 2.86A8.963 8.963 0 0 0 4 12l.001.025H2L5 16l3-3.975H6.001L6 12a6.957 6.957 0 0 1 1.195-3.913 7.066 7.066 0 0 1 1.891-1.892 7.034 7.034 0 0 1 2.503-1.054 7.003 7.003 0 0 1 8.269 5.445 7.117 7.117 0 0 1 0 2.824 6.936 6.936 0 0 1-1.054 2.503c-.25.371-.537.72-.854 1.036a7.058 7.058 0 0 1-2.225 1.501 6.98 6.98 0 0 1-1.313.408 7.117 7.117 0 0 1-2.823 0 6.957 6.957 0 0 1-2.501-1.053 7.066 7.066 0 0 1-1.037-.855l-1.414 1.414A8.985 8.985 0 0 0 13 21a9.05 9.05 0 0 0 3.503-.707 9.009 9.009 0 0 0 3.959-3.26A8.968 8.968 0 0 0 22 12a8.928 8.928 0 0 0-.708-3.503z"></path></svg>                                     
                  <span class="flex-1 ms-3 whitespace-nowrap text-neutral-950 font-normal">Riwayat Deteksi</span>
                  </a>
              </li>
           </ul>
        </div>
     </aside>
     
     
     <div class="flex flex-col mt-24 w-full pr-10">
      <h1 class="text-neutral-900 font-medium text-2xl underline ">Halooo!! Selamat Bekerja "{{ session('username') }}" </h1>
      <div class="flex flex-row items-center text-center py-4 justify-end">
         <a href="/formubahpegawai/{{ $user->id }}" class="button bg-green-400 w-40 h-10 text-white font-semibold text-xl rounded-lg flex justify-center items-center"> Ubah Data</a> 
      </div>
      <div class="profil flex flex-row rounded-lg bg-green-400 w-full h-auto justify-between p-1">
            <div class=" flex justify-center items-center flex-col px-36 ">
               <img  class="relative rounded-full w-40 h-40   " src="https://i.pinimg.com/564x/b3/e5/db/b3e5db5a3bf1399f74500a6209462794.jpg" alt="" > <br>
               <button class="bg-green-100 font-regular rounded-lg p-2 font-semibold"  > Unggah Gambar</button>
            </div>
            <form class="flex flex-col justify-center pr-40">
               <div class="mt-4 mb-3">
                  <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                  <input type="email" name="email" value="{{$user->name}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-[#d9d9d9] dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="john.doe@company.com" required />
               </div>
               <div class="grid gap-6 mb-1 md:grid-cols-2">
                  <div>
                        <label for="tempatlahir" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tempat Lahir</label>
                        <input type="text" name="first_name"  value="{{$user->tempatlahir}}"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-[#d9d9d9] dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="John" required />
                  </div>
                  <div>
                        <label for="tanggalahir" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Lahir</label>
                        <input type="date" name="tanggalahir" value="{{$user->tanggal}}"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-[#d9d9d9] dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Doe" required />
                  </div>
               </div>
               <div class="mb-3">
                  <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email address</label>
                  <input type="email" name="email" value="{{$user->email}}"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-[#d9d9d9] dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="john.doe@company.com" required />
               </div> 
               <div class="mb-3">
                  <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                  <input type="password" name="password" value="{{$user->password}}"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-[#d9d9d9] dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="•••••••••" required />
               </div> 
               <div class="mb-3">
                  <label for="role" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jabatan</label>
                  <input type="text" name="role" value="{{$user->role}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-[#d9d9d9] dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"  required />
               </div> 
            </form>
      </div>
   </div>


       </div>
   </div> 
</body>