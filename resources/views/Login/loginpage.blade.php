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
       @if($errors->any())
          <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
            <ul>
              @foreach($errors->all() as $item)
                <li>{{$item}}</li>
              @endforeach
            </ul>
          </div>
       @endif
      <form class="space-y-6" id="login-form" action="{{ route('cek') }}" method="POST">
          @csrf   
          <div>
              <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email</label>
              <div class="mt-2">
                <input id="email" value="{{old ('email')}}" name="email" type="email" autocomplete="email" required placeholder="example@gmail.com" 
                class="form-control @error('email')is-invalid @enderror   p-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                @error('email')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror

              </div>
            </div>
      
            <div>
              <div class="flex items-center justify-between">
                <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
              </div>
              <div class="max-w-sm">
                <div class="relative">
                  <input id="password" type="password" name="password"   autocomplete="current-password" class="p-2 block w-full rounded-md border-0 py-1.5  text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Enter password" >
                  <span class="absolute inset-y-0 right-0 pr-3 flex items-center cursor-pointer" id="togglePassword">
                    <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0zm4.21 3.39A9.955 9.955 0 0121 12c-2-4-6-7-9-7s-7 3-9 7a9.955 9.955 0 011.79 3.39M4.93 4.93l14.14 14.14"></path>
                    </svg>
                  </span>
                </div>
              </div>
              @error('password')
              <div class="invalid-feedback">
              </div>
              @enderror
            </div>
            <div>
              <button type="submit" class="flex w-full mt-5 justify-center rounded-md bg-green-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-green-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-600">Masuk</button>
            </div>
        </form>
       
            </div>
        </div>
  </div>

  <script>
    document.getElementById('togglePassword').addEventListener('click', function () {
      const passwordInput = document.getElementById('password');
      const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
      passwordInput.setAttribute('type', type);
      
      // Toggle icon (optional)
      this.querySelector('svg').classList.toggle('text-gray-400');
      this.querySelector('svg').classList.toggle('text-green-900');
    });
  </script>


</body>
</html>
