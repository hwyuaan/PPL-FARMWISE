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
            <ul class="space-y-2 font-medium">
              <li>
                 <a href="#" class="flex items-center p-2 text-neutral-950 rounded-lg dark:text-neutral-950 hover:bg-gray-100 dark:bg-green-300 group">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                     <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    </svg>                   
                    <span class="ms-3 text-neutral-950">Profil</span>
                  </a>
               </li>
               <li>
                 <a href="#" class="flex items-center p-2 text-neutral-950 rounded-lg dark:text-neutral-950 hover:bg-gray-100 dark:hover:bg-green-300 group">
                     <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6h9.75M10.5 6a1.5 1.5 0 1 1-3 0m3 0a1.5 1.5 0 1 0-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-9.75 0h9.75" />
                     </svg>                   
                     <span class="flex-1 ms-3 whitespace-nowrap text-neutral-950">Deteksi Penyakit</span>
                 </a>
               </li>
             
           </ul>
        </div>
     </aside>
     
     
      <div class="flex flex-col w-full mt-24 pr-10 pb-20">
         <h1 class="text-neutral-900 font-bold text-4xl flex justify-center ">Profile</h1>
         <div class="flex flex-row items-center text-center py-4 justify-end">
            <a href="" class="button bg-green-400 w-40 h-10 flex justify-center items-center text-white rounded-lg font-semibold text-xl" > Ubah Data</a> 
         </div>
         
         <!-- <div class="profil flex flex-row bg-green-500 " style="border-radius:10px; width: 1200px; height:460px; "> -->
         <div class="profil flex flex-row h-full  justify-between items-center rounded-lg bg-green-500 px-10">
            <!-- <div class=" flex flex-row item-start justify-start space-x-20 gap-x-80 bg-slate-200"> -->
               
               <div class=" flex flex-col justify-center items-start ">
                  <div class="text-4xl py-2">Udinnn</div>
                  <div class="text-4xl py-2">Udinnn@gmail.com</div>
               </div>
               
               <div class="">
                  <img  class="relative rounded-full w-40 h-40   " src="https://i.pinimg.com/564x/b3/e5/db/b3e5db5a3bf1399f74500a6209462794.jpg" alt="" > <br>
               </div>
               
            <!-- </div> -->
         </div>


       </div>
   </div> 
</body>