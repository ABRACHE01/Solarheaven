@extends('layouts.sec')

@section('content')


<main class="bg-gray-100 dark:bg-gray-800 rounded-2xl  h-screen overflow-hidden relative">
  @include('components.authnavbar')

@include('components.admin.dashboard')
  </main>
@endsection
