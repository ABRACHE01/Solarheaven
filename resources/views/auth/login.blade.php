@extends('layouts.app')
@yield('styles')
@vite(['resources\views\auth\css\login.css'])
@section('content')


<div  class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container ">
      <div class="card login-card ">
        <div class="row no-gutters">
          <div class="col-md-5">
            <img src="images/staticpictures/login.jpg" alt="login" class="login-card-img">
          </div>
          <div class="col-md-7">
            <div class="card-body">
              <div class="brand-wrapper">
              <h1> SolarHaven </h1>

              </div>
              <p class="login-card-description">Sign into your account</p>
              <form method="POST" action="{{ route('login') }}">
                @csrf
                     <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="{{ __('Email Address') }}">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="{{ __('Password') }}">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                              
                        <button class="btn btn-block login-btn mb-4" type="submit" >
                            {{ __('Login') }}
                        </button>
                        <div class="form-check m-2">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>  

                        @if (Route::has('password.request'))
                            <a class="btn  text-decoration-none " href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif          
            </form>
                <p class="login-card-footer-text">Don't have an account? <a href="{{ route('register') }}" class="text-reset">Register here</a></p>   
            </div>
          </div>
        </div>
      </div>
   
    </div>
</div>
@endsection
