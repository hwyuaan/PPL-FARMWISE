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
            
            <form class="flex flex-col pl-28 pr-28  pt-16 pb-16 w-items-center gap-y-2">
                <div class="text-4xl font-bold text-center text-green-400 mb-10">Edit Data</div>
                <div>
                    <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-black dark:focus:border-black" placeholder="Name" required />
                </div> 
                <div>
                    <input type="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-black dark:focus:border-black" placeholder="Tanggal Lahir" required />
                </div> 
                <div>
                    <input type="password" id="confirm_password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-black dark:focus:border-black" placeholder="No Handphone" required />
                </div> 
                <div>
                    <input type="password" id="confirm_password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-black dark:focus:border-black" placeholder="Username" required />
                </div> 
                <div>
                    <input type="password" id="confirm_password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-black dark:focus:border-black" placeholder="Email" required />
                </div> 
                <div>
                    <input type="password" id="confirm_password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-black dark:focus:border-black" placeholder="Kata Sandi" required />
                </div> 
                <div>
                    <input type="password" id="confirm_password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-black dark:focus:border-black" placeholder="Konfirmasi Kata Sandi" required />
                </div> 
                <button type="submit" class="mt-10 text-white bg-green-400 hover:bg-green-900 focus:ring-4 focus:outline-none focus:ring-green-900 font-bold  rounded-lg text-2xl w-full[-25px] sm:w-auto px-5 py-2.5 text-center dark:bg-green-400 dark:hover:bg-green-500 dark:focus:bg-green-600">Simpan</button>
            </form>

        </div>
    </div>

</body>