


@extends('layouts.sec')

@section('content')

<header>
  @include('components.navbar')
</header>
<body>
  <section>
  <div class="group relative block">
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

        <h3 class="text-xl font-medium text-white">Add new technician</h3>
        <p class="mt-1.5 max-w-[40ch] text-xs text-white">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos sequi
          dicta impedit aperiam ipsum!
        </p>

        @if(Auth::user()->hasRole('admin'))

        <a href="{{ route('tech.create') }}" 
          class="inline-block px-5 py-3 mt-3 text-xs font-medium tracking-wide text-white uppercase bg-green-600"
        ><i class="fa fa-plus"></i> 
          Technician
      </a>
      
      @endif

      </div>
      </div>
    </div>
  </section>

   <section class="relative pt-28 pb-36 bg-blueGray-100 overflow-hidden">
      
  <div class="max-w-6xl  mx-auto px-4 sm:px-6 lg:px-4 py-12">
      <div class="text-center pb-12">
        <h1 class="font-bold text-3xl md:text-4xl lg:text-5xl font-heading text-gray-900">
          Check our awesome Technicians
      </h1>
   
           
            <div class="flex m-5 ">
                <label for="search-dropdown" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Your Email</label>
                <button id="dropdown-button" data-dropdown-toggle="dropdown" class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-900 bg-gray-100 border border-gray-300 rounded-l-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700 dark:text-white dark:border-gray-600" type="button"> all cities <svg aria-hidden="true" class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></button>
                <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdown-button">
                      @foreach ($cities as $city) 
                        <li>
                            <a href="{{ route('cities.sort', $city->id) }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600" tabindex="-1" id="dropdown-item-0">{{ $city->name }}</a>
                        </li>
                      
                      @endforeach

                    </ul>
                </div>
                <div class="relative w-full">
                    <input  type="text" id="search-input"  class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-r-lg border-l-gray-50 border-l-2 border border-gray-300 focus:ring-blue-500 focus:border-green-500 dark:bg-gray-700 dark:border-l-gray-700  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-green-500" placeholder="Search Mockups, Logos, Design Templates..." required>
                    <button  class="absolute top-0 right-0 p-2.5 text-sm font-medium text-white bg-green-700 rounded-r-lg border border-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                        <svg aria-hidden="true" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                        <span class="sr-only">Search</span>
                    </button>
                </div>
            </div>

            
    
        <h2 class="text-base font-bold text-green-600">
          We have the best equipment in the market
      </h2>
        
      </div>
      <div id="myTechnicians" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($technicians as $technician)
        <span class=" relative bg-white font-semibold text-center rounded-3xl border shadow-lg p-10 max-w-xs">
            <!-- Dropdown toggle button -->

            @if(Auth::user()->hasRole('admin'))
            <button id="dropdownDelayButton-{{ $technician->id }}" data-dropdown-toggle="dropdownDelay-{{ $technician->id }}"  class="absolute z-10 block float-right text-gray-700 bg-white border border-transparent rounded-md dark:text-white focus:border-green-500 focus:ring-opacity-40 dark:focus:ring-opacity-40 focus:ring-blue-300 dark:focus:ring-blue-400 focus:ring dark:bg-gray-800 focus:outline-none">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                  <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
              </svg>
          </button>
         
        <!-- Dropdown menu -->
        <div class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700" id="dropdownDelay-{{ $technician->id }}">
          <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDelayButton-{{ $technician->id }}">
            <li>
          
              <a href="{{ route('tech.show', $technician->id) }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">show</a>
            </li>
            <li>
              <form action="{{ route('tech.destroy', $technician->id) }}" method="POST" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" >
                  {{ csrf_field() }}
                  {{ method_field('DELETE') }}
                  <button type="submit" class="btn btn-danger">Delete</button>
              </form>
              </li>    
        </div>
         @endif

        
          <img class="mb-3 w-32 h-32 rounded-full shadow-lg mx-auto"   src="{{ asset('images/usersImages/' . $technician->user->image ) }}" alt="product designer">
      
          <h1 class="text-lg text-gray-700">{{ $technician->user->name }}  </h1>
          <h3 class="text-sm text-gray-400 "> {{ $technician->user->email}} </h3>
          <h3 class="text-sm text-gray-400 "> {{ $technician->qualification}} </h3>
          <p class="text-xs text-gray-400 mt-4"> {{ $technician->years_of_experience }} years of experience </p>

          @if(Auth::user()->hasRole('client'))
          <button class="bg-green-600 px-8 py-2 mt-8 rounded-3xl text-gray-100 font-semibold uppercase tracking-wide"> 
            <a href="{{ route('appointments.technician', $technician->id) }}">Hire Me</a>
          </button>
          @elseif(Auth::user()->hasRole('admin')||Auth::user()->hasRole('technician'))
          <button class="bg-green-600 px-8 py-2 mt-8 rounded-3xl text-gray-100 font-semibold uppercase tracking-wide"> 
            <a href="{{ route('tech.show', $technician->id) }}">View Profile</a>
          </button>
          @endif
        </span>
        @endforeach
        
</section> 
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function() {
    $('#search-input').on('keyup', function() {
      var value = $(this).val().toLowerCase();
      $('#myTechnicians span').filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
  });
</script>
@include('components.footer')
</body>

@endsection
