@extends('layouts.sec')

@section('content')



<main class="bg-gray-100 dark:bg-gray-800 rounded-2xl  h-screen overflow-hidden relative">
  @include('components.authnavbar')




@if (Auth::user()->hasRole('admin'))
@include('components.admin.dashboard')

@elseif(Auth::user()->hasRole('client'))
@include('components.client.dashboard')

@elseif(Auth::user()->hasRole('technician'))
@include('components.technician.dashboard')
@endif


  </main>
@endsection
