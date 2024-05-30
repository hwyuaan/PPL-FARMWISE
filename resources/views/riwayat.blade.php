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
               <a href="#" class="flex items-center p-2 text-neutral-950 rounded-lg dark:text-neutral-950 hover:bg-gray-100 dark:hover:bg-green-100 group">
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
               <a href="" class="flex items-center p-2 text-neutral-950 rounded-lg dark:text-neutral-950 hover:bg-gray-100 dark:bg-green-100 group">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M12 8v5h5v-2h-3V8z"></path><path d="M21.292 8.497a8.957 8.957 0 0 0-1.928-2.862 9.004 9.004 0 0 0-4.55-2.452 9.09 9.09 0 0 0-3.626 0 8.965 8.965 0 0 0-4.552 2.453 9.048 9.048 0 0 0-1.928 2.86A8.963 8.963 0 0 0 4 12l.001.025H2L5 16l3-3.975H6.001L6 12a6.957 6.957 0 0 1 1.195-3.913 7.066 7.066 0 0 1 1.891-1.892 7.034 7.034 0 0 1 2.503-1.054 7.003 7.003 0 0 1 8.269 5.445 7.117 7.117 0 0 1 0 2.824 6.936 6.936 0 0 1-1.054 2.503c-.25.371-.537.72-.854 1.036a7.058 7.058 0 0 1-2.225 1.501 6.98 6.98 0 0 1-1.313.408 7.117 7.117 0 0 1-2.823 0 6.957 6.957 0 0 1-2.501-1.053 7.066 7.066 0 0 1-1.037-.855l-1.414 1.414A8.985 8.985 0 0 0 13 21a9.05 9.05 0 0 0 3.503-.707 9.009 9.009 0 0 0 3.959-3.26A8.968 8.968 0 0 0 22 12a8.928 8.928 0 0 0-.708-3.503z"></path></svg>                                     
                <span class="flex-1 ms-3 whitespace-nowrap text-neutral-950 font-normal">Riwayat Deteksi</span>
                </a>
            </li>
         </ul>
      </div>
   </aside>
         <div class="col-span-12">
            <div class="overflow-auto lg:overflow-visible ">
               <table class="table text-black border-separate space-y-6 text-sm w-full font-semibold">
                    <thead class="bg-green-200 text-gray-500">
                        <tr>
                            <th class="p-3 text-left">No</th>
                            <th class="p-3 text-left">Photo</th>
                            <th class="p-3 text-left">Prediction</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($getAllPenyakit as $riwayat)
                        <tr class="bg-gray-200">
                            <td class="p-3">
                                <div class="flex align-items-center">{{ $loop->iteration }}</div>
                            </td>
                            <td class="p-3">
                                <img src="{{asset( $riwayat->path) }}" alt="Image" width="100">
                            </td>
                            <td class="p-3">{{ $riwayat->prediction }}</td>
                        </tr>
                        @endforeach
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