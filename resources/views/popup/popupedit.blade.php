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
        
        <div class="auto h-auto rounded-lg bg-white mb-3">
            
            <div class="relative w-full max-w-lg max-h-lg">
                <div class="relative bg-white rounded-lg shadow  outline outline-green-400 outline-1 dark:bg-white">
                    
                    <div class="p-4 md:p-20 text-center">
                        <svg class="mx-auto mb-4  text-gray-400 w-12 h-12 dark:text-yellow-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                        </svg>
                        <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Apakah anda yakin mengubah data?</h3>
                        <button data-modal-hide="popup-modal" type="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-bold rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                            Tidak
                        </button>
                        <button data-modal-hide="popup-modal" type="button" class="py-2.5 px-5 ms-10 text-sm font-bold text-white focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100  dark:bg-green-400 dark:text-white dark:border-green-500 dark:hover:text-white dark:hover:bg-green-500">
                            Ya
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </div>

</body>