@extends('layouts.sec')

@section('content')

<header>
    @include('components.navbar')
  </header>
  <body>
    <section>
    <a href="{{ route('tech.create') }}" class="group relative block">
        <div class="relative h-[350px] sm:h-[450px]">
          <img
            src="{{asset('img/tech2.jpg')}}"
            alt=""
            class="absolute inset-0 h-full w-full object-cover opacity-100 group-hover:opacity-0"
          />
      
          <img
            src="{{asset('img/tech2.jpg')}}"
            alt=""
            class="absolute inset-0 h-full w-full object-cover opacity-0 group-hover:opacity-100"
          />
        </div>
      
        <div class="absolute inset-0 flex flex-col items-start justify-end p-6">
          <h3 class="text-xl font-medium text-white">Skinny Jeans Blue</h3>
      
          <p class="mt-1.5 max-w-[40ch] text-xs text-white">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos sequi
            dicta impedit aperiam ipsum!
          </p>
      
        </div>
      </a>
    </section>
  
     <section class="relative pt-10 pb-36 bg-blueGray-100 overflow-hidden">
        
    <div class="max-w-6xl  mx-auto px-4 sm:px-6 lg:px-4 py-4">
        <div class="text-center pb-12">

        @if ($technicians->count() > 0)
        <h1 class="font-bold text-3xl md:text-4xl lg:text-5xl font-heading text-gray-900">
          Ower Technicians in <span class="text-green-600">"{{ $city->name }}"</span> 
      </h1>
       
        <h2 class="text-base font-bold p-5 text-green-600">
          We have the best equipment in the market
      </h2>
      @else
      <h1 class="font-bold text-3xl md:text-4xl lg:text-5xl font-heading text-gray-900">
          No Technicians yet in <span class="text-green-600">"{{ $city->name }}"</span>
      </h1>
   @endif
          
        </div>
        <div id="myTechnicians" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-6">
          @foreach ($technicians as $technician)
          <span class=" relative bg-white font-semibold text-center rounded-3xl border shadow-lg p-10 max-w-xs">
              <!-- Dropdown toggle button -->
              <button id="dropdownDelayButton-{{ $technician->technician->id }}" data-dropdown-toggle="dropdownDelay-{{ $technician->technician->id }}"  class="absolute z-10 block float-right text-gray-700 bg-white border border-transparent rounded-md dark:text-white focus:border-green-500 focus:ring-opacity-40 dark:focus:ring-opacity-40 focus:ring-blue-300 dark:focus:ring-blue-400 focus:ring dark:bg-gray-800 focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                </svg>
            </button>
          <!-- Dropdown menu -->
          <div class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700" id="dropdownDelay-{{ $technician->technician->id }}">
            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDelayButton-{{ $technician->technician->id }}">
              <li>
                <a href="{{ route('tech.show', $technician->technician->id) }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">show</a>
              </li>
              <li>
                <form action="{{ route('tech.destroy', $technician->technician->id) }}" method="POST" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" >
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                </li>    
          </div>
  
            <img class="mb-3 w-32 h-32 rounded-full shadow-lg mx-auto"   src="{{ asset('images/usersImages/' . $technician->image ) }}" alt="product designer">
            <h1 class="text-lg text-gray-700">{{ $technician->name }}  </h1>
            <h3 class="text-sm text-gray-400 "> {{ $technician->email}} </h3>
            <h3 class="text-sm text-gray-400 "> {{ $technician->technician->qualification}} </h3>
            <p class="text-xs text-gray-400 mt-4"> {{ $technician->technician->years_of_experience }} years of experience </p>
            <button class="bg-green-600 px-8 py-2 mt-8 rounded-3xl text-gray-100 font-semibold uppercase tracking-wide"> 
              <a href="{{ route('appointments.technician', $technician->technician->id) }}">Hire Me</a>
            </button>
          </span>
          @endforeach
  </section> 
      
  @include('components.footer')
  </body>
@endsection


