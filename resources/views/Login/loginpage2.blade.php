<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @vite('resources/css/app.css')
  <title> Sistem Farmwise</title>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
  <div class="flex flex-col items-center justify-center px-6 py-14  min-h-screen lg:px-8">
    <div class=" flex sm:mx-auto sm:w-full sm:max-w-sm">
      <img class=" w-32 h-24" src="asset/LOGO.png" alt="Your Company">
      <h2 class="mt-10 text-center text-5xl font-familiy:Poppins font-regular leading-9 tracking-tight text-gray-500">Farmwise</h2>
    </div>
  
    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
        <form class="space-y-6" id="login-form">
            @csrf
            {{ csrf_field() }}
            <div>
              <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email</label>
              <div class="mt-2">
                <input id="username" name="email" type="email" autocomplete="email" required placeholder="example@gmail.com" class="p-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
              </div>
            </div>
      
            <div>
              <div class="flex items-center justify-between">
                <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                <div class="text-sm">
                  <a href="#" class="font-semibold text-gray-600 hover:text-green-500">Lupa Password?</a>
                </div>
              </div>
              <div class="mt-2">
                <input id="password" name="password" type="password" autocomplete="current-password" required placeholder="•••••••••" class="p-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-green-600 sm:text-sm sm:leading-6">
              </div>
            </div>
      
            <div>
              <button type="submit" class="flex w-full mt-5 justify-center rounded-md bg-green-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-green-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-600">Masuk</button>
            </div>
        </form>
        <p id="message"></p>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#login-form").submit(function(e){
                e.preventDefault();
                $.ajax({
                    type: "POST",
                    url: "{{ route('login.submit') }}",
                    data: $("#login-form").serialize(),
                    dataType: 'json',
                    success: function(response){
                        $('#message').text(response.message);
                        if (response) {
                            $('#message');
                        }
                    },
                    error: function(xhr, status, error){
                        $('#message').text("An error occurred. Please try again.");
                        $('#message').addClass('text-danger');
                    }
                });
            });
        });
    </script>
</body>
</html>
