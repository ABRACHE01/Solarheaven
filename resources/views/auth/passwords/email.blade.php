@extends('layouts.sec')

@section('content')

<body id="content" role="main" class=" bg-gray-100 w-full max-w-md mx-auto p-6">
    <div class="mt-7 bg-white  rounded-xl shadow-lg dark:bg-gray-800 dark:border-gray-700">
      <div class="p-4 sm:p-7">
        <div class="font-extrabold tracking-widest p-4 text-xl"><a href="{{route('welcome')}}" class="transition duration-500 text-green-500">SOLARHAVEN</a></div>

        <div class="text-center">
          <h1 class="block text-2xl font-bold text-gray-800 dark:text-white">Forgot password?</h1>
          <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">
            Remember your password?
            <a class="text-blue-600 decoration-2 hover:underline font-medium" href="{{route('login') }}">
              Login here
            </a>
          </p>
        </div>

        <div class="mt-5">
            @if (session('status'))
                    <div class="text-green-500 mb-4">
                        {{ session('status') }}
                    </div>
                @endif
            <form method="POST" action="{{ route('password.email') }}">
                @csrf
            <div class="grid gap-y-4">
              <div>
                <label for="email" class="block text-sm font-bold ml-1 mb-2 dark:text-white">Email address</label>
                <div class="relative">
                  <input type="email" id="email" name="email" class="py-3 px-4 block w-full border-2 border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 shadow-sm" required aria-describedby="email-error">
                  @error('email')
                  <span class="text-red-500 mt-2 text-sm" role="alert">
                      {{ $message }}
                  </span>
              @enderror
                </div>
                <p class="hidden text-xs text-red-600 mt-2" id="email-error">Please include a valid email address so we can get back to you</p>
              </div>
              <button type="submit" class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-green-500 text-white hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">Reset password</button>
            </div>
          </form>
        </div>
      </div>
    </div>
</body>
@endsection
