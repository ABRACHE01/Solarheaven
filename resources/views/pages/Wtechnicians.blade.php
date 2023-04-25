
@extends('layouts.sec')

@section('content')

<header>
  @include('components.navbar')
</header>
<body>
  <section>
  <a href="#" class="group relative block">
      <div class="relative h-[350px] sm:h-[450px]">
        <img
          src="{{asset('img/tech2.jpg')}}"
          alt=""
          class="absolute inset-0 h-full w-full object-cover opacity-100 group-hover:opacity-0"
        />
    
        <img
          src="{{asset('img/solar5.jp')}}g"
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

   <section class="relative pt-28 pb-36 bg-blueGray-100 overflow-hidden">
      
  <div class="max-w-6xl  mx-auto px-4 sm:px-6 lg:px-4 py-12">
      <div class="text-center pb-12">
        <h1 class="font-bold text-3xl md:text-4xl lg:text-5xl font-heading text-gray-900">
          Check our awesome Technicians
      </h1>
          <form>
            <div class="flex m-5">
                <label for="search-dropdown" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Your Email</label>
                <button id="dropdown-button" data-dropdown-toggle="dropdown" class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-900 bg-gray-100 border border-gray-300 rounded-l-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700 dark:text-white dark:border-gray-600" type="button">All categories <svg aria-hidden="true" class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></button>
                <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdown-button">
                    <li>
                        <button type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Mockups</button>
                    </li>
                    </ul>
                </div>
                <div class="relative w-full">
                    <input type="search" id="search-dropdown" class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-r-lg border-l-gray-50 border-l-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-l-gray-700  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500" placeholder="Search Mockups, Logos, Design Templates..." required>
                    <button type="submit" class="absolute top-0 right-0 p-2.5 text-sm font-medium text-white bg-green-700 rounded-r-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <svg aria-hidden="true" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                        <span class="sr-only">Search</span>
                    </button>
                </div>
            </div>
        </form>
        <h2 class="text-base font-bold text-green-600">
          We have the best equipment in the market
      </h2>
         
      </div>
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-6">
          
        <div class="bg-white font-semibold text-center rounded-3xl border shadow-lg p-10 max-w-xs">
          <img class="mb-3 w-32 h-32 rounded-full shadow-lg mx-auto" src="{{asset('img/team-1.jpg')}}" alt="product designer">
          <h1 class="text-lg text-gray-700"> John Doe </h1>
          <h3 class="text-sm text-gray-400 "> Creative Director </h3>
          <p class="text-xs text-gray-400 mt-4"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
          <button class="bg-green-600 px-8 py-2 mt-8 rounded-3xl text-gray-100 font-semibold uppercase tracking-wide">Hire Me</button>
        </div>
        <div class="bg-white font-semibold text-center rounded-3xl border shadow-lg p-10 max-w-xs">
          <img class="mb-3 w-32 h-32 rounded-full shadow-lg mx-auto" src="{{asset('img/team-2.jpg')}}" alt="product designer">
          <h1 class="text-lg text-gray-700"> John Doe </h1>
          <h3 class="text-sm text-gray-400 "> Creative Director </h3>
          <p class="text-xs text-gray-400 mt-4"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
          <button class="bg-green-600 px-8 py-2 mt-8 rounded-3xl text-gray-100 font-semibold uppercase tracking-wide">Hire Me</button>
        </div>

        <div class="bg-white font-semibold text-center rounded-3xl border shadow-lg p-10 max-w-xs">
          <img class="mb-3 w-32 h-32 rounded-full shadow-lg mx-auto" src="{{asset('img/team-3.jpg')}}"alt="product designer">
          <h1 class="text-lg text-gray-700"> John Doe </h1>
          <h3 class="text-sm text-gray-400 "> Creative Director </h3>
          <p class="text-xs text-gray-400 mt-4"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
          <button class="bg-green-600 px-8 py-2 mt-8 rounded-3xl text-gray-100 font-semibold uppercase tracking-wide">Hire Me</button>
        </div> 
       
        <div class="bg-white font-semibold text-center rounded-3xl border shadow-lg p-10 max-w-xs">
          <img class="mb-3 w-32 h-32 rounded-full shadow-lg mx-auto" src="{{asset('img/team-1.jpg')}}" alt="product designer">
          <h1 class="text-lg text-gray-700"> John Doe </h1>
          <h3 class="text-sm text-gray-400 "> Creative Director </h3>
          <p class="text-xs text-gray-400 mt-4"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
          <button class="bg-green-600 px-8 py-2 mt-8 rounded-3xl text-gray-100 font-semibold uppercase tracking-wide">Hire Me</button>
        </div>
        <div class="bg-white font-semibold text-center rounded-3xl border shadow-lg p-10 max-w-xs">
          <img class="mb-3 w-32 h-32 rounded-full shadow-lg mx-auto" src="{{asset('img/team-2.jpg')}}" alt="product designer">
          <h1 class="text-lg text-gray-700"> John Doe </h1>
          <h3 class="text-sm text-gray-400 "> Creative Director </h3>
          <p class="text-xs text-gray-400 mt-4"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
          <button class="bg-green-600 px-8 py-2 mt-8 rounded-3xl text-gray-100 font-semibold uppercase tracking-wide">Hire Me</button>
        </div>

        <div class="bg-white font-semibold text-center rounded-3xl border shadow-lg p-10 max-w-xs">
          <img class="mb-3 w-32 h-32 rounded-full shadow-lg mx-auto" src="{{asset('img/team-3.jpg')}}"alt="product designer">
          <h1 class="text-lg text-gray-700"> John Doe </h1>
          <h3 class="text-sm text-gray-400 "> Creative Director </h3>
          <p class="text-xs text-gray-400 mt-4"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
          <button class="bg-green-600 px-8 py-2 mt-8 rounded-3xl text-gray-100 font-semibold uppercase tracking-wide">Hire Me</button>
        </div> 

        <div class="bg-white font-semibold text-center rounded-3xl border shadow-lg p-10 max-w-xs">
          <img class="mb-3 w-32 h-32 rounded-full shadow-lg mx-auto" src="{{asset('img/team-1.jpg')}}" alt="product designer">
          <h1 class="text-lg text-gray-700"> John Doe </h1>
          <h3 class="text-sm text-gray-400 "> Creative Director </h3>
          <p class="text-xs text-gray-400 mt-4"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
          <button class="bg-green-600 px-8 py-2 mt-8 rounded-3xl text-gray-100 font-semibold uppercase tracking-wide">Hire Me</button>
        </div>
        <div class="bg-white font-semibold text-center rounded-3xl border shadow-lg p-10 max-w-xs">
          <img class="mb-3 w-32 h-32 rounded-full shadow-lg mx-auto" src="{{asset('img/team-2.jpg')}}" alt="product designer">
          <h1 class="text-lg text-gray-700"> John Doe </h1>
          <h3 class="text-sm text-gray-400 "> Creative Director </h3>
          <p class="text-xs text-gray-400 mt-4"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
          <button class="bg-green-600 px-8 py-2 mt-8 rounded-3xl text-gray-100 font-semibold uppercase tracking-wide">Hire Me</button>
        </div>

        <div class="bg-white font-semibold text-center rounded-3xl border shadow-lg p-10 max-w-xs">
          <img class="mb-3 w-32 h-32 rounded-full shadow-lg mx-auto" src="{{asset('img/team-3.jpg')}}"alt="product designer">
          <h1 class="text-lg text-gray-700"> John Doe </h1>
          <h3 class="text-sm text-gray-400 "> Creative Director </h3>
          <p class="text-xs text-gray-400 mt-4"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
          <button class="bg-green-600 px-8 py-2 mt-8 rounded-3xl text-gray-100 font-semibold uppercase tracking-wide">Hire Me</button>
        </div> 

        <div class="bg-white font-semibold text-center rounded-3xl border shadow-lg p-10 max-w-xs">
          <img class="mb-3 w-32 h-32 rounded-full shadow-lg mx-auto" src="{{asset('img/team-1.jpg')}}" alt="product designer">
          <h1 class="text-lg text-gray-700"> John Doe </h1>
          <h3 class="text-sm text-gray-400 "> Creative Director </h3>
          <p class="text-xs text-gray-400 mt-4"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
          <button class="bg-green-600 px-8 py-2 mt-8 rounded-3xl text-gray-100 font-semibold uppercase tracking-wide">Hire Me</button>
        </div>
        <div class="bg-white font-semibold text-center rounded-3xl border shadow-lg p-10 max-w-xs">
          <img class="mb-3 w-32 h-32 rounded-full shadow-lg mx-auto" src="{{asset('img/team-2.jpg')}}" alt="product designer">
          <h1 class="text-lg text-gray-700"> John Doe </h1>
          <h3 class="text-sm text-gray-400 "> Creative Director </h3>
          <p class="text-xs text-gray-400 mt-4"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
          <button class="bg-green-600 px-8 py-2 mt-8 rounded-3xl text-gray-100 font-semibold uppercase tracking-wide">Hire Me</button>
        </div>

        <div class="bg-white font-semibold text-center rounded-3xl border shadow-lg p-10 max-w-xs">
          <img class="mb-3 w-32 h-32 rounded-full shadow-lg mx-auto" src="{{asset('img/team-3.jpg')}}"alt="product designer">
          <h1 class="text-lg text-gray-700"> John Doe </h1>
          <h3 class="text-sm text-gray-400 "> Creative Director </h3>
          <p class="text-xs text-gray-400 mt-4"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
          <button class="bg-green-600 px-8 py-2 mt-8 rounded-3xl text-gray-100 font-semibold uppercase tracking-wide">Hire Me</button>
        </div> 

      </div>
    </div>

</section> 
    
  
</body>
<footer class="bg-white rounded-lg shadow dark:bg-gray-900 m-4">
  <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
      <div class="sm:flex sm:items-center sm:justify-between">
        <div class="font-extrabold tracking-widest text-xl"><a href="#" class="transition duration-500 text-green-500">SOLARHAVEN</a></div>
          <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">
              <li>
                  <a href="#" class="mr-4 hover:underline md:mr-6 ">Login</a>
              </li>
              <li>
                  <a href="#" class="mr-4 hover:underline md:mr-6">register</a>
              </li>
              <li>
                  <a href="#" class="mr-4 hover:underline md:mr-6 ">Technicians</a>
              </li>
              <li>
                  <a href="#" class="hover:underline">admins</a>
              </li>
          </ul>
      </div>
      <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
      <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="#" class="transition duration-500 text-green-500">SOLARHAVEN</a>. All Rights Reserved.</span>
  </div>
</footer>


@endsection


