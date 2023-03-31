@extends('layouts.app')
@yield('styles')
@vite(['resources\views\auth\css\login.css'])
@section('content')

<div  class="d-flex align-items-center min-vh-100 py-3 py-md-0">
  <div class="container ">
 
    <div class="card login-card">
      <div class="row no-gutters">
        <div class="col-md-5">
          <img src="images/staticpictures/register.jpg" alt="login" class="login-card-img">
        </div>
        <div class="col-md-7">
          <div class="card-body">
            <div class="brand-wrapper ">
              <h1> SolarHaven </h1>
            </div>
            <p class="login-card-description"> We are glade to be our client </p>
            <form method="POST" action="{{ route('register') }}">
              @csrf

                      <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="{{ __('Name') }}" autofocus>
                      @error('name')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror

                      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="{{ __('Email Address') }}">

                      @error('email')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                        
                      
                    <div class="input-group mb-3">
                      <label class="input-group-text form-control @error('city_id') is-invalid @enderror value="{{ old('city_id') }}""  for="city_id">City</label>
                      <select class="form-select" name="city_id" id="city_id">
                        @foreach($cities as $city)
                        <option value="{{ $city->id }}">{{ $city->name }}</option>
                      @endforeach
                      </select>
                    </div>

                   
                    @error('city_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                      <input id="phone_number" type="text" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') }}" required autocomplete="phone_number" placeholder="{{ __('phone_number') }}" autofocus>
                      
                      @error('phone_number')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
  
                      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="{{ __('Password') }}">

                      @error('password')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror

            
                      <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="{{ __('Confirm Password') }}">

           
                      <button type="submit" class="btn btn-block login-btn mb-4">
                          {{ __('Register') }}
                      </button>
          </form>
              <p class="login-card-footer-text">Allready have an account? <a href="{{ route('login') }}" class="text-reset">signin here</a></p>  
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection

