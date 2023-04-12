


@extends('layouts.sec')

@section('content')


<header>
        
  @include('components.navbar')

</header>

<body>
    <section>
        
        <a href="{{ route('services.create') }}" class="group relative block">
            <div class="relative h-[350px] sm:h-[450px]">
                <img src=" {{  asset('img/solar5.jpg') }}" alt=""
                    class="absolute inset-0 h-full w-full object-cover opacity-100 group-hover:opacity-0" />

                <img src="{{ asset('img/tech2.jpg') }}" alt=""
                    class="absolute inset-0 h-full w-full object-cover opacity-0 group-hover:opacity-100" />
            </div>

            <div class="absolute inset-0 flex flex-col items-start justify-end p-6">

              <h3 class="text-xl font-medium text-white">Add new service</h3>
              <p class="mt-1.5 max-w-[40ch] text-xs text-white">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos sequi
                dicta impedit aperiam ipsum!
              </p>
              <span
                class="inline-block px-5 py-3 mt-3 text-xs font-medium tracking-wide text-white uppercase bg-green-600"
              ><i class="fa fa-plus"></i> 
                Service
              </span>
            </div>
        </a>
    </section>

    <section class="relative pt-24 pb-36 bg-blueGray-100  overflow-hidden">
        <img class="absolute bottom-0 left-1/2 transform -translate-x-1/2"
            src="flaro-assets/images/contact/gradient.svg" alt="">
        <div class="relative z-10 container px-4 mx-auto">
            <h2
                class="mb-5 text-6xl md:text-8xl xl:text-10xl text-center font-bold font-heading tracking-px-n leading-none">
                Our services</h2>
            <p class="mb-20 text-lg text-gray-600 text-center font-medium leading-normal md:max-w-lg mx-auto">Lorem
                ipsum dolor sit amet, to the con adipiscing. Volutpat tempor to the condimentum vitae vel purus.</p>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-6 ">

                @foreach ($services as $service)
                <div class="container group relative block overflow-hidden">
                  <button id="dropdownDelayButton-{{ $service->id }}" data-dropdown-toggle="dropdownDelay-{{ $service->id }}" data-dropdown-delay="500" data-dropdown-trigger="hover" class="absolute right-4 top-4 z-10 rounded-full bg-white p-1.5 text-gray-900 transition hover:text-gray-900/75">
                    <span class="sr-only">Wishlist</span>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke-width="1.5"
                      stroke="currentColor"
                      class="h-4 w-4"
                    >
                      <path stroke-linecap="round" stroke-linejoin="round" stroke="currentColor" d="M4 6h16M4 10h16M4 14h16M4 18h16" />
                    </svg>
                  </button>
                  <!-- Dropdown menu -->
                  <div class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700" id="dropdownDelay-{{ $service->id }}">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDelayButton-{{ $service->id }}">
                      <li>
                        <a href="{{ route('services.edit', $service->id) }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">edite</a>
                      </li>
                      <li>
                        <form action="{{ route('services.destroy', $service->id) }}" method="POST" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" >
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                      </li>    
                  </div>
                    
                      
                      
                        <img
                        @foreach($service->images as $image)
                          src="{{ asset('images/serviceImages/' . $image->url) }}"
                          @endforeach
                          alt=""
                          class="h-64 w-full object-cover transition duration-500 group-hover:scale-105 sm:h-72"
                        />
                      
                        <div class="relative border border-gray-100 bg-white p-6">
                          <a  href="{{ route('services.show', $service->id) }}"
                            class="whitespace-nowrap bg-green-100 px-3 py-1.5 text-xs font-medium"
                          >
                            Show service details
                        </a>
                      
                          <h3 class="mt-4 text-lg font-medium text-gray">{{ $service->name }}</h3>
                          <p class="mt-2 text-sm text-gray-500">{{ $service->description }}</p>
                          
                          <div class="m-4 flex items-center">
                            
                            <p class="text-sm font-medium text-gray-900">{{ $service->price }}$</p>

                          </div>

                            <button
                              class="block w-full rounded bg-green-100 p-4 text-sm font-medium transition hover:scale-105"
                            >
                            <a href="{{ route('appointments.service', $service->id) }}" >Book service</a>
                            </button>
                        </div>
                </div>
            
               @endforeach
                
            </div>
        </div>
    </section>
    @include('components.footer')
</body>

@endsection
