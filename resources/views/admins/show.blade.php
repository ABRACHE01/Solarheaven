
@extends('layouts.sec')
@section('content')

@include('components.authnavbar')

 
<div class="m-10 sm:w-[40%]  mx-auto">

  <div class="rounded-lg border bg-white px-4 pt-8 pb-10 shadow-lg">
    <div class="relative mx-auto w-36 rounded-full">
      <span class="absolute right-0 m-3 h-3 w-3 rounded-full bg-green-500 ring-2 ring-green-300 ring-offset-2"></span>

      <img class="w-10 h-10 m-auto rounded-full object-cover lg:w-28 lg:h-28" src="{{ asset('images/usersImages/' . $admin->user->image ) }}" alt="" style="width: 80%; " />

    </div>
    <h1 class="my-1 text-center text-xl font-bold leading-8 text-gray-900">{{ $admin->user->name}}</h1>
    <h3 class="font-lg text-semibold text-center leading-6 text-gray-600">Admin</h3>
    <p class="text-center text-sm leading-6 text-gray-500 hover:text-gray-600">{{ $admin->user->phone_number }}</p>
    <ul class="mt-3 divide-y rounded bg-gray-100 py-2 px-3 text-gray-600 shadow-sm hover:text-gray-700 hover:shadow">
      <li class="flex items-center py-3 text-sm">
        <span>City</span>
        <span class="ml-auto"><span class="rounded-full bg-green-200 py-1 px-2 text-xs font-medium text-green-700">{{ $admin->user->city->name }}</span>
      </li>
     
      <li class="flex items-center py-3 text-sm">
        <span>Email address</span>
        
        <span class="ml-auto">{{ $admin->user->email }}</span>
      </li>
      <li class="flex items-center py-3 text-sm">
        <span>Bio</span>
        <span class="ml-auto">{{ $admin->bio ?? 'No bio yet' }}</span>
      </li>

      <li class="flex items-center py-3 text-sm">
        <span>Joined On</span>
        <span class="ml-auto">{{ $admin->created_at->format('d/m/Y') }}</span>
      </li>
     
    </ul>
  </div>
</div>

@include('components.footer')

 
@endsection