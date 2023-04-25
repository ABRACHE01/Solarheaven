
@extends('layouts.sec')

@section('content')

<body class=" h-100 bg-gray-100">
  <div class="py-20 ">
    <div class="flex bg-white rounded-lg shadow-lg overflow-hidden mx-auto max-w-sm lg:max-w-4xl">
          <div class="hidden lg:block lg:w-1/2 bg-cover" style="background-image:url('img/solar4.jpg')"></div>
          <div class="w-full p-8 lg:w-1/2">
            <div class="font-extrabold tracking-widest  text-xl"><a href="{{route('welcome')}}" class="transition duration-500 text-green-500">SOLARHAVEN</a></div>
  
              <form method="POST" action="{{ route('register') }}">
                @csrf
              <div class="mt-4">
                  <label class="block text-gray-700 text-sm font-bold mb-2">Full Name</label>
                  <input class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none  @error('name') is-invalid @enderror" id="name" type="text" name="name" value="{{ old('name') }}" required autocomplete="name"  autofocus>
                  @error('name')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                 @enderror
              </div>

              <div class="mt-4">
                  <label class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                  <input class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none  @error('email') is-invalid @enderror" id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email"  autofocus>
                  @error('email')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
              </div>

           
            <div class="mt-4">
              <label class="block text-gray-700 text-sm font-bold mb-2">City</label>
              <select class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none" name="city_id" id="city_id">
                  @foreach ($cities as $city)
                  <option value="{{ $city->id }}">{{ $city->name }}</option>
                  @endforeach
              </select>
          </div>

          <div class="mt-4">
              <label class="block text-gray-700 text-sm font-bold mb-2">Address</label>
              <input class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none  @error('address') is-invalid @enderror" id="address" type="text" name="address" value="{{ old('address') }}" required autocomplete="address"  autofocus>
              @error('address')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
              @enderror
           
            <div class="mt-4">
              <label class="block text-gray-700 text-sm font-bold mb-2">Phone Number</label>
              <input class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none  @error('phone_number') is-invalid @enderror" id="phone_number" type="text" name="phone_number" value="{{ old('phone_number') }}" required autocomplete="phone_number"  autofocus>
              @error('phone_number')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
              @enderror
        </div>

              <div class="mt-4">
                  <div class="flex justify-between">
                      <label class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                  </div>
                  <input class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none @error('password') is-invalid @enderror" type="password" id="password"  name="password" required autocomplete="current-password">
                  @error('password')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
                </div>
              <div class="mt-4">
                  <label class="block text-gray-700 text-sm font-bold mb-2">Confirm Password</label>
                  <input class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none" type="password" id="password-confirm" name="password_confirmation" required autocomplete="new-password">
              </div>


              <div class="mt-8">
                  <button type="submit" class="bg-green-700 text-white font-bold py-2 px-4 w-full rounded hover:bg-green-600">Register</button>
              </div>
              
              </form>
              <div class="mt-4 flex items-center justify-between">
                  <span class="border-b w-1/5 md:w-1/4"></span>
                  <a href="{{ route('login') }}" class="text-xs text-gray-500 uppercase">or login</a>
                  <span class="border-b w-1/5 md:w-1/4"></span>
              </div>
          </div>
      </div>
  </div>
  </body>

@endsection

