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
      <aside id="default-sidebar" class="flex top-0 left-0 w-80 transition-transform h-screen " aria-label="Sidebar">
         <div class="px-3 py-28 overflow-y-auto bg-gray-50 dark:bg-green-400 h-screen w-60 fixed">
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
                     <span class="flex-1 ms-3 whitespace-nowrap text-neutral-950">Data Admin</span>
                 </a>
               </li>
              <li>
                 <a href="#" class="flex items-center p-2 text-neutral-950 rounded-lg dark:text-neutral-950 hover:bg-gray-100 dark:hover:bg-green-300 group">
                     <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
                     </svg>                   
                     <span class="flex-1 ms-3 whitespace-nowrap text-neutral-950">Data Pegawai</span>
                  </a>
              </li>
              <li>
                 <a href="#" class="flex items-center p-2 text-neutral-950 rounded-lg dark:text-neutral-950 hover:bg-gray-100 dark:hover:bg-green-300 group">
                     <svg class="w-6 h-6 text-gray-800 dark:text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
						<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H8m12 0-4 4m4-4-4-4M9 4H7a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h2"/>
					</svg>
                 
                     <span class="flex-1 ms-3 whitespace-nowrap text-neutral-950">Deteksi Penyakit</span>
                  </a>
              </li>
           </ul>
        </div>
     </aside>
     
     
      <div class="flex flex-col mt-24 w-full pr-10">
         <div class="flex flex-row items-center text-center py-4 justify-between w-full">
            <div class="flex flex-row">
               <h1 class="text-neutral-900 font-normal text-2xl pr-10 ">Daftar Admin</h1>
               <a href="" class="button bg-green-400 w-40 h-10 text-white font-semibold text-xl rounded-lg flex justify-center items-center"> 
               <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 26 26">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7 7V5"/>
               </svg>
   
                 Add Admin</a> 
            </div>
            <div>
               <form class="max-w-md mx-auto">   
                  <label for="default-search" class="text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                  <div class="relative">
                     <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-black dark:text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                           <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                        </svg>
                     </div>
                     <input type="search" id="default-search" class="block w-full p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-white focus:border-white dark:bg-gray-200  dark:placeholder-gray-400 dark:text-black dark:focus:ring-white dark:focus:border-white" placeholder="Search ..." required />
                  </div>
               </form>
            </div>            
         </div>
   

	<div class="col-span-12">
		<div class="overflow-auto lg:overflow-visible ">
			<table class="table text-black border-separate space-y-6 text-sm w-full font-semibold">
				<thead class="bg-green-200 text-gray-500">
					<tr>
						<th class="p-3 text-left">No</th>
						<th class="p-3 text-left">Name</th>
						<th class="p-3 text-left">Email</th>
						<th class="p-3 text-left">Username</th>
						<th class="p-3 text-left">Action</th>
					</tr>
				</thead>
				<tbody>
					<tr class="bg-gray-200">
						<td class="p-3">
							<div class="flex align-items-center">
								<div>1</div>
							</div>
						</td>
						<td class="p-3 ">
							Yoanitaaa TrieHastutiek
						</td>
						<td class="p-3">
							yonnyonnn@gmail.com
						</td>
						<td class="p-3">
							Yonnn
						</td>
						<td class="p-3 ">
							<div class="flex flex-row">
                        <a href="" class="button bg-green-400 w-12 h-5 text-white font-semibold text-l rounded flex justify-center items-center m-1">Edit</a> 
                        <a href="" class="button bg-red-600 w-12 h-5 text-white font-semibold text-l rounded flex justify-center items-center m-1">Hapus</a> 
                     </div>
						</td>
					</tr>
					<tr class="bg-gray-200">
						<td class="p-3">
						   <div>1</div>			
						</td>
						<td class="p-3">
							Jujudiienn Nafieezz
						</td>
						<td class="p-3 font-bold">
							juju@gmail.com
						</td>
						<td class="p-3">
							Jujuu
						</td>
						<td class="p-3 ">
							<div class="flex flex-row">
                        <a href="" class="button bg-green-400 w-12 h-5 text-white font-semibold text-l rounded flex justify-center items-center m-1">Edit</a> 
                        <a href="" class="button bg-red-600 w-12 h-5 text-white font-semibold text-l rounded flex justify-center items-center m-1">Hapus</a> 
                     </div>
						</td>
					</tr>
					
					
				</tbody>
			</table>
		</div>
	</div>


<style>
	.table {
		border-spacing: 0 15px;
	}

	i {
		font-size: 1rem !important;
	}

	.table tr {
		border-radius: 20px;
	}

	tr td:nth-child(n+5),
	tr th:nth-child(n+5) {
		border-radius: 0 .625rem .625rem 0;
	}

	tr td:nth-child(1),
	tr th:nth-child(1) {
		border-radius: .625rem 0 0 .625rem;
	}
</style>


       </div>
   </div> 
</body>