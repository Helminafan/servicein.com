{{-- <x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ml-4">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout> --}}
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{asset('asset/css/loginstyle.css')}}" />
    <title>Document</title>
  </head>
  <body class="background">
    <section class="login position-absolute top-50 start-50 translate-middle ">
      <div class="card kartu">
        <div class="card-body">
          <h4>Welcome to Servicein.com</h4>
          <p>Please sign-in to your account and start the adventure</p>
          <form method="POST" action="{{ route('login') }}" id="validate">
            @csrf
            <div class="mb-3">
              <label for="email" class="form-label">email</label>
              <input id="email" class="form-control" type="email" name="email" :value="old('email')"  autofocus autocomplete="username"/>
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" name="password"  autocomplete="current-password" id="password" />
            </div>
            <div class="d-flex justify-content-between">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate" />
                <label class="form-check-label" for="flexCheckIndeterminate"> Remember Me </label>
              </div>
            </div>
            <button type="submit" class="btn tombol">Masuk</button>
          </form>
          {{-- <p>forgot password?</p> --}}
          <div class="d-flex justify-content-center mt-4">
            <p>New on our platform?</p>
            <a href="{{route('register')}}">Create an account</a>
          </div>
          <div class="d-flex justify-content-center mt-4">
            
            <a class="btn tombol" href="{{route('view.daftarteknisi')}}">Daftar Sebagai Teknisi</a>
          </div>
        </div>
      </div>
    </section>
    <section class="">
      <img class="foto position-absolute bottom-0 end-0" src="public/authv1tree2png1311-r8y-300h.png" alt="" />
      <img class="foto position-absolute bottom-0 start-0" src="public/authv1treepng1310-z2hr-200w.png" alt="" />
      <img class="position-absolute bottom-0 end-0" src="public/authv1masklightpng139-owua-200h.png" alt="" />
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/jquery.validate.min.js" integrity="sha512-WMEKGZ7L5LWgaPeJtw9MBM4i5w5OSBlSjTjCtSnvFJGSVD26gE5+Td12qN5pvWXhuWaWcVwF++F7aqu9cvqP0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript">
      $("#validate").validate({
        rules: {
          nama: {
            required: true,
            minlength: 4,
          },
          nim: {
            required: true,
            maxlength: 12,
            minlength: 12,
            number: true,
          },
          prodi: {
            required: true,
          },
          email: {
            required: true,
            email:true,
          },
          password: {
            required: true,
           
          },
        },
        messages: {
          nama: {
            required: "Nama tidak boleh kosong",
            minlength: "nama harus lebih dari 4 karakter",
          },
          nim: {
            number: " nim harus berupa angka",
            required: "nim tidak boleh kosong",
            minlength: "nim harus 12 karakter",
            maxlength: "nim tidak boleh lebih dari 12 karakter",
          },
          prodi: {
            required: "prodi tidak boleh kosong",
          },
          password: {
            required: "Paswword  Tidak boleh kosong",
            minlength: "password harus 8 karakter",
          },
        },
      });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
