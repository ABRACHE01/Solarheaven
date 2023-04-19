
@extends('layouts.sec')

@section('content')


<style>
   

    .hide-scroll-bar {
        -ms-overflow-style: none;
        scrollbar-width: none;
      }
      .hide-scroll-bar::-webkit-scrollbar {
        display: none;
      }
     


    header {
      background:url('img/solar1.jpg');}
  </style>
</head>

  @include('components.navbar')


  <!-- Opened Nav in Mobile, you can use javascript/jQuery -->
  
  {{-- <button id="nav-open" class="fixed top-0 right-0 z-10 p-2 m-2 text-white bg-green-700 rounded-full shadow-lg focus:outline-none focus:ring-2 focus:ring-green-600 focus:ring-opacity-50"
      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
      </svg>
  </button> --}}
  <div id="nav-opened" class="fixed left-0 right-0 hidden bg-white mx-2 mt-16 rounded-br rounded-bl shadow z-10">
      <div class="p-2 divide-y divide-gray-600 flex flex-col">
          <a href="#about" class="p-2 font-semibold hover:text-green-700">About</a>
          <a href="#whyus" class="p-2 font-semibold hover:text-green-700">Why Us ?</a>
          <a href="#showcase" class="p-2 font-semibold hover:text-green-700">Our Products</a>
      </div>
  </div>

  <header id="up" class=" bg-fixed bg-no-repeat bg-center bg-cover h-screen relative">
      <!-- Overlay Background + Center Control -->
      <div class="h-screen bg-opacity-50 bg-black flex items-center justify-center" style="background:rgba(0,0,0,0.5);">
          <div class="mx-2 text-center">
              <h1 class="text-gray-100 font-extrabold text-4xl xs:text-5xl md:text-6xl">
                  <span class="text-white">RIGHT</span> PLACE TO
         </h1>
         <h2 class="text-gray-200 font-extrabold text-3xl xs:text-4xl md:text-5xl leading-tight">
          GET <span class="text-white">BETTER</span> and <span class="text-white">PROFISSIONAL</span> SOLAR SYSTEMS
         </h2>
         <div class="inline-flex">
            
         </div>
      </div>
  </div>
</header>

<section>
    <div class="py-16 bg-white">  
        <div class="container m-auto px-6 text-gray-600 md:px-12 xl:px-6">
            <div class="space-y-6 md:space-y-0 md:flex md:gap-6 lg:items-center lg:gap-12">
              <div class="md:5/12 lg:w-5/12 ">
                <img src="img/solar2.jpg" class="rounded-lg" alt="image"  loading="lazy" width="" height="">
              </div>
              <div class="md:7/12 lg:w-6/12">
                <h2 class="mb-5 text-6xl md:text-8xl xl:text-10xl text-center font-bold font-heading tracking-px-n leading-none">About Us</h2>
                <p class="mt-6 text-gray-600">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eum omnis voluptatem accusantium nemo perspiciatis delectus atque autem! Voluptatum tenetur beatae unde aperiam, repellat expedita consequatur! Officiis id consequatur atque doloremque!</p>
                <p class="mt-4 text-gray-600"> Nobis minus voluptatibus pariatur dignissimos libero quaerat iure expedita at? Asperiores nemo possimus nesciunt dicta veniam aspernatur quam mollitia.</p>
              </div>
            </div>
        </div>
        <div class="container m-auto px-6 text-gray-600 md:px-12 pt-24 xl:px-6">
          <div class="space-y-6 md:space-y-0 md:flex md:gap-6 lg:items-center lg:gap-12">
            <div class="md:7/12 lg:w-6/12">
              <h2 class="mb-5 text-6xl md:text-8xl xl:text-10xl text-center font-bold font-heading tracking-px-n leading-none">About Us</h2>
              <p class="mt-6 text-gray-600">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eum omnis voluptatem accusantium nemo perspiciatis delectus atque autem! Voluptatum tenetur beatae unde aperiam, repellat expedita consequatur! Officiis id consequatur atque doloremque!</p>
              <p class="mt-4 text-gray-600"> Nobis minus voluptatibus pariatur dignissimos libero quaerat iure expedita at? Asperiores nemo possimus nesciunt dicta veniam aspernatur quam mollitia.</p>
            </div>
            <div class="md:5/12 lg:w-5/12 ">
              <img src="img/solar3.jpg" alt="image" class="rounded-lg"  loading="lazy" width="" height="">
            </div>
          </div>
      </div>
      </div>
    </section>
    
    <section><!-- This is an example component -->
      <div class="w-full h-screen bg-center bg-no-repeat bg-cover" style="background-image: url('img/tech2.jpg');">
        <div class="w-full h-screen bg-opacity-50 bg-black flex justify-center items-center">
            <div class="mx-4 text-center text-white">
                <h1 class="font-bold text-6xl mb-5"> Book Your Appointement with Us </h1>
                <div>
                  <a href="#" class="inline-block rounded-md border border-transparent bg-green-400 px-8 py-3 text-center font-medium text-white hover:bg-green-700">Shop Collection</a>
    
                </div>
            </div>
        </div>
      </div>
</section> 
   
<section class=" pt-24 pb-36  overflow-hidden">
    <img class="absolute bottom-0 left-1/2 transform -translate-x-1/2"  src="flaro-images/contact/gradient.svg" alt="">
    <div class=" z-10 container px-4 mx-auto">
      <h2 class="mb-5 text-6xl md:text-8xl xl:text-10xl text-center font-bold font-heading tracking-px-n leading-none">Our services</h2>
      <p class="mb-20 text-lg text-gray-600 text-center font-medium leading-normal md:max-w-lg mx-auto">Lorem ipsum dolor sit amet, to the con adipiscing. Volutpat tempor to the condimentum vitae vel purus.</p>
      <div class="flex flex-wrap -m-3 ">
       
          <div class="container my-8 overflow-hidden">

            <div class="flex justify-between items-center mb-4 hide-scroll-bar">
              <h2 class="text-3xl">
                Another Service
                <a href="{{route('services.index')}}" class=""
                  ><span
                    class="text-salmon font-medium text-lg ml-2 hover:underline"
                    >See all
                  </span></a
                >
              </h2>
              
            </div>

            
            <div
              id="scrollContainer"
              class="flex flex-no-wrap overflow-x-scroll scrolling-touch items-start mb-8 hide-scroll-bar"
            >
            @foreach ($latestServices as $service)
              <div
                class="flex-none w-2/3 md:w-1/3 mr-8 md:pb-4 border rounded-lg"
              >
                <a href="{{ route('services.show', $service->id) }}" class="space-y-4">
                  <div class="aspect-w-16 aspect-h-9">
                    <img
                    class="h-64 w-full object-cover transition duration-500 group-hover:scale-105 sm:h-72"
                      @foreach($service->images as $image)
                      src="{{ asset('images/serviceImages/' . $image->url) }}"
                      @endforeach
                      alt=""
                    />
                  </div>
                  <div class="px-4 py-2">
                    <div class="text-lg leading-6 font-medium space-y-1">
                      <h3 class="font-bold text-gray-800 text-3xl mb-2">
                        {{$service->name}}
                      </h3>
                    </div>
                    <div class="text-lg">
                      <p class="">
                        {{$service->description}}
                      </p>
                      <p class="font-medium text-sm text-green-600 mt-2">
                        Read more<span class="text-green-600">&hellip;</span>
                      </p>
                    </div>
                  </div>
                </a>
              </div>
              @endforeach
              @if(count($latestServices) == 0)
              <div
              class="flex-none w-2/3 md:w-1/3 mr-8 md:pb-4 border rounded-lg"
            >
              <a href="#" class="space-y-4">
                <div class="aspect-w-16 aspect-h-9">
                  <img
                    class="object-cover shadow-md hover:shadow-xl rounded-lg"
                    width="100%"
                    src="img/gallery-2.jpg"
                    alt=""
                  />
                </div>
                <div class="px-4 py-2">
                  <div class="text-lg leading-6 font-medium space-y-1">
                    <h3 class="font-bold text-gray-800 text-3xl mb-2">
                      Some title goes here
                    </h3>
                  </div>
                  <div class="text-lg">
                    <p class="">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Ad recusandae, consequatur corrupti vel quisquam id itaque
                      nam
                    </p>
                    <p class="font-medium text-sm text-green-600 mt-2">
                      Read more<span class="text-green-600">&hellip;</span>
                    </p>
                  </div>
                </div>
              </a>
            </div>
              <div
                class="flex-none w-2/3 md:w-1/3 mr-8 md:pb-4 border rounded-lg"
              >
                <a href="#" class="space-y-4">
                  <div class="aspect-w-16 aspect-h-9">
                    <img
                      class="object-cover shadow-md hover:shadow-xl rounded-lg"
                      width="100%"
                      src="img/gallery-3.jpg"
                      alt=""
                    />
                  </div>
                  <div class="px-4 py-2">
                    <div class="text-lg leading-6 font-medium space-y-1">
                      <h3 class="font-bold text-gray-800 text-3xl mb-2">
                        Some title goes here
                      </h3>
                    </div>
                    <div class="text-lg">
                      <p class="">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Ad recusandae, consequatur corrupti vel quisquam id itaque
                        nam
                      </p>
                      <p class="font-medium text-sm text-green-600 mt-2">
                        Read more<span class="text-green-600">&hellip;</span>
                      </p>
                    </div>
                  </div>
                </a>
              </div>
              <div
                class="flex-none w-2/3 md:w-1/3 mr-8 md:pb-4 border rounded-lg"
              >
                <a href="#" class="space-y-4">
                  <div class="aspect-w-16 aspect-h-9">
                    <img
                      class="object-cover shadow-md hover:shadow-xl rounded-lg"
                      width="100%"
                      src="img/gallery-4.jpg"
                      alt=""
                    />
                  </div>
                  <div class="px-4 py-2">
                    <div class="text-lg leading-6 font-medium space-y-1">
                      <h3 class="font-bold text-gray-800 text-3xl mb-2">
                        Some title goes here
                      </h3>
                    </div>
                    <div class="text-lg">
                      <p class="">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Ad recusandae, consequatur corrupti vel quisquam id itaque
                        nam
                      </p>
                      <p class="font-medium text-sm text-green-600 mt-2">
                        Read more<span class="text-green-600">&hellip;</span>
                      </p>
                    </div>
                  </div>
                </a>
              </div>
              @endif
            </div>
          </div>
        </div>
      </div>

      </div>
    </div>
  </section>
 
   <section class="relative pt-28 pb-36 bg-blueGray-100 overflow-hidden">
    <div class="max-w-6xl  mx-auto px-4 sm:px-6 lg:px-4 py-12">
        <div class="text-center pb-12">
            <h2 class="text-base font-bold text-green-600">
                We have the best equipment in the market
            </h2>
            <h1 class="font-bold text-3xl md:text-4xl lg:text-5xl font-heading text-gray-900">
                Check our awesome Technicians
            </h1>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-6">
         
          @foreach ($latestTechnicians as $technician)
          <span class=" relative bg-white font-semibold text-center rounded-3xl border shadow-lg p-10 max-w-xs">
            <img class="mb-3 w-32 h-32 rounded-full shadow-lg mx-auto"   src="{{ asset('images/usersImages/' . $technician->user->image ) }}" alt="product designer">
            <h1 class="text-lg text-gray-700">{{ $technician->user->name }}  </h1>
            <h3 class="text-sm text-gray-400 "> {{ $technician->user->email}} </h3>
            <h3 class="text-sm text-gray-400 "> {{ $technician->qualification}} </h3>
            <p class="text-xs text-gray-400 mt-4"> {{ $technician->years_of_experience }} years of experience </p>
            <button class="bg-green-600 px-8 py-2 mt-8 rounded-3xl text-gray-100 font-semibold uppercase tracking-wide"> 
              <a href="{{ route('appointments.technician', $technician->id) }}">Hire Me</a>
            </button>
          </span>
          @endforeach

          @if(count($latestTechnicians) == 0)
          <div class="bg-white font-semibold text-center rounded-3xl border shadow-lg p-10 max-w-xs">
            <img class="mb-3 w-32 h-32 rounded-full shadow-lg mx-auto" src="img/team-1.jpg" alt="product designer">
            <h1 class="text-lg text-gray-700"> John Doe </h1>
            <h3 class="text-sm text-gray-400 "> Creative Director </h3>
            <p class="text-xs text-gray-400 mt-4"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
            <button class="bg-green-600 px-8 py-2 mt-8 rounded-3xl text-gray-100 font-semibold uppercase tracking-wide">Hire Me</button>
          </div>
          <div class="bg-white font-semibold text-center rounded-3xl border shadow-lg p-10 max-w-xs">
            <img class="mb-3 w-32 h-32 rounded-full shadow-lg mx-auto" src="img/team-2.jpg" alt="product designer">
            <h1 class="text-lg text-gray-700"> John Doe </h1>
            <h3 class="text-sm text-gray-400 "> Creative Director </h3>
            <p class="text-xs text-gray-400 mt-4"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
            <button class="bg-green-600 px-8 py-2 mt-8 rounded-3xl text-gray-100 font-semibold uppercase tracking-wide">Hire Me</button>
          </div>

          <div class="bg-white font-semibold text-center rounded-3xl border shadow-lg p-10 max-w-xs">
            <img class="mb-3 w-32 h-32 rounded-full shadow-lg mx-auto" src="img/team-3.jpg"alt="product designer">
            <h1 class="text-lg text-gray-700"> John Doe </h1>
            <h3 class="text-sm text-gray-400 "> Creative Director </h3>
            <p class="text-xs text-gray-400 mt-4"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
            <button class="bg-green-600 px-8 py-2 mt-8 rounded-3xl text-gray-100 font-semibold uppercase tracking-wide">Hire Me</button>
          </div>  
          @endif
             
        </div>
      </div>
  
</section> 

<section class="max-w-6xl  mx-auto px-4  sm:px-6 lg:px-4 py-12">
  <div class="mb-16 text-center">
    <h2 class="mb-4 text-center text-2xl text-gray-900 font-bold md:text-4xl">Tailus blocks leadership</h2>
    <p class="text-gray-600 lg:w-8/12 lg:mx-auto">Tailus prides itself not only on award-winning technology, but also on the talent of its people of some of the brightest minds and most experienced executives in business.</p>
    </div>
  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-6">
      <div class="w-full bg-white rounded-lg sahdow-lg overflow-hidden flex flex-col justify-center items-center">
          <div>
              <img class="object-center object-cover h-auto w-full" src="img/staff.jpg" alt="photo">
          </div>
          <div class="text-center py-8 sm:py-6">
              <p class="text-xl text-gray-700 font-bold mb-2">Dany Bailey</p>
              <p class="text-base text-gray-400 font-normal">Software Engineer</p>
          </div>
      </div>
      <div class="w-full bg-white rounded-lg sahdow-lg overflow-hidden flex flex-col justify-center items-center">
          <div>
              <img class="object-center object-cover h-auto w-full" src="img/staff4.jpg" alt="photo">
          </div>
          <div class="text-center py-8 sm:py-6">
              <p class="text-xl text-gray-700 font-bold mb-2">Lucy Carter</p>
              <p class="text-base text-gray-400 font-normal">Graphic Designer</p>
          </div>
      </div>
      <div class="w-full bg-white rounded-lg sahdow-lg overflow-hidden flex flex-col justify-center items-center">
          <div>
              <img class="object-center object-cover h-auto w-full" src="img/staff3.jpg" alt="photo">
          </div>
          <div class="text-center py-8 sm:py-6">
              <p class="text-xl text-gray-700 font-bold mb-2">Jade Bradley</p>
              <p class="text-base text-gray-400 font-normal">Dev Ops</p>
          </div>
      </div>
      
  </div>
</section>

<section><!-- This is an example component -->
  <div class="w-full h-screen bg-center bg-no-repeat bg-cover" style="background-image: url('img/solar6.jpg');">
    <div class="w-full h-screen bg-opacity-50 bg-black flex justify-center items-center">
        <div class="mx-4 text-center text-white">
            <h1 class="font-bold text-6xl mb-5"> Book Your Appointement with Us </h1>
            <div>
              <a href="#" class="inline-block rounded-md border border-transparent bg-green-400 px-8 py-3 text-center font-medium text-white hover:bg-green-700">Shop Collection</a>

            </div>
        </div>
    </div>
  </div>
  </section> 
           
<section class="max-w-6xl  mx-auto px-4 sm:px-6 lg:px-4 py-12">
  <div class="text-center pb-12">
      <h2 class="text-base font-bold text-green-600">
          We have the best reviews in the market
      </h2>
      <h1 class="font-bold text-3xl md:text-4xl lg:text-5xl font-heading text-gray-900">
          Check our awesome team reviews
      </h1>
  </div>
  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-6"> 

      {{-- static review  --}}
    @if($latestReviews->count()===0)
    <div class="max-w-md py-4 px-8 bg-white shadow-lg rounded-lg my-20">
      <div class="flex justify-center md:justify-end -mt-16">
        <img class="w-20 h-20 object-cover rounded-full border-2 border-green-500" src="https://images.unsplash.com/photo-1499714608240-22fc6ad53fb2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80">
      </div>
      <div>
        <h2 class="text-gray-800 text-3xl font-semibold">Design Tools</h2>
        <p class="mt-2 text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae dolores deserunt ea doloremque natus error, rerum quas odio quaerat nam ex commodi hic, suscipit in a veritatis pariatur minus consequuntur!</p>
      </div>
      <div class="flex justify-end mt-4">
        <a href="#" class="text-xl font-medium text-green-500">John Doe</a>
      </div>
      <div class="flex items-center mt-2.5 mb-5">
        <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>First star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
        <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Second star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
        <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Third star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
        <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Fourth star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
        <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Fifth star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
        <span class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ml-3">5.0</span>
    </div>
    </div>
  
    <div class="max-w-md py-4 px-8 bg-white shadow-lg rounded-lg my-20">
      <div class="flex justify-center md:justify-end -mt-16">
        <img class="w-20 h-20 object-cover rounded-full border-2 border-green-500" src="https://images.unsplash.com/photo-1499714608240-22fc6ad53fb2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80">
      </div>
      <div>
        <h2 class="text-gray-800 text-3xl font-semibold">Design Tools</h2>
        <p class="mt-2 text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae dolores deserunt ea doloremque natus error, rerum quas odio quaerat nam ex commodi hic, suscipit in a veritatis pariatur minus consequuntur!</p>
      </div>
      <div class="flex justify-end mt-4">
        <a href="#" class="text-xl font-medium text-green-500">John Doe</a>
      </div>
      <div class="flex items-center mt-2.5 mb-5">
        <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>First star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
        <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Second star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
        <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Third star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
        <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Fourth star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
        <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Fifth star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
        <span class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ml-3">5.0</span>
    </div>
    </div>
  
    <div class="max-w-md py-4 px-8 bg-white shadow-lg rounded-lg my-20">
      <div class="flex justify-center md:justify-end -mt-16">
        <img class="w-20 h-20 object-cover rounded-full border-2 border-green-500" src="https://images.unsplash.com/photo-1499714608240-22fc6ad53fb2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80">
      </div>
      <div>
        <h2 class="text-gray-800 text-3xl font-semibold">Design Tools</h2>
        <p class="mt-2 text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae dolores deserunt ea doloremque natus error, rerum quas odio quaerat nam ex commodi hic, suscipit in a veritatis pariatur minus consequuntur!</p>
      </div>
      <div class="flex justify-end mt-4">
        <a href="#" class="text-xl font-medium text-green-500">John Doe</a>
      </div>
      <div class="flex items-center mt-2.5 mb-5">
        <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>First star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
        <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Second star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
        <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Third star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
        <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Fourth star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
        <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Fifth star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
        <span class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ml-3">5.0</span>
    </div>
    </div>
    @endif

    {{-- dynamic reviews --}}
    @foreach ($latestReviews as $review)

    <div class="max-w-md py-4 px-8 bg-white shadow-lg rounded-lg my-20">

      <!-- Dropdown toggle button -->
      <button id="dropdownDelayButton-{{ $review->id }}" data-dropdown-toggle="dropdownDelay-{{ $review->id }}"  class="absolute z-10 block float-right text-gray-700 bg-white border border-transparent rounded-md dark:text-white focus:border-green-500 focus:ring-opacity-40 dark:focus:ring-opacity-40 focus:ring-blue-300 dark:focus:ring-blue-400 focus:ring dark:bg-gray-800 focus:outline-none">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
            <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
        </svg>
    </button>
    <!-- Dropdown menu -->
    <div class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700" id="dropdownDelay-{{ $review->id }}">
      <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDelayButton-{{ $review->id }}">
        <li>
          <a href="{{ route('reviews.show', $review->id) }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">show</a>
        </li>
        <li>
          <a href="{{ route('reviews.edit', $review->id) }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">edite</a>
        </li>
        <li>
          <form action="{{ route('reviews.destroy', $review->id) }}" method="POST" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" >
              {{ csrf_field() }}
              {{ method_field('DELETE') }}
              <button type="submit" class="btn btn-danger">Delete</button>
          </form>
          </li>    
    </div>

              <div class="flex justify-center items-center md:justify-end -mt-16">
                <a href="{{route('clients.show', $review->appointment->client->id ) }}" class="w-20 h-20 object-cover rounded-full border-2 -m-3  border-green-500 transform hover:scale-125 "><img  class=" object-cover rounded-full  " src="{{ asset('images/usersImages/' . $review->appointment->client->user->image ) }}"></a>
                <a href="{{route('tech.show', $review->appointment->technician->id ) }}" class="w-20 h-20 object-cover rounded-full border-2 -m-3  border-green-500 transform hover:scale-125 "> <img  class=" object-cover rounded-full  "  src="{{ asset('images/usersImages/' . $review->appointment->technician->user->image )}}"></a>
              </div>
              <div>
                <h2 class="text-gray-800 text-3xl font-semibold m-5 ">service : {{ $review->appointment->service->name }} </h2>
                <p class="mt-2 text-gray-600">{{ $review->comment }}</p>
              </div>
              <div class="flex justify-end mt-4">   
                <a href="#" class="text-xl font-medium text-green-500">{{ $review->appointment->client->user->name}}</a>
              </div>
              <div class="flex justify-end mt-4">
                <a href="#" class="text-xl font-medium text-green-500">{{ $review->appointment->technician->user->name}}</a>
              </div>
              
              <div class="flex items-center mt-2.5 mb-5">
                <svg aria-hidden="true" class="w-5 h-5 {{ $review->rating >= 1 ? 'text-yellow-300' : 'text-gray-400' }}"  fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>First star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                <svg aria-hidden="true" class="w-5 h-5 {{ $review->rating >= 2 ? 'text-yellow-300' : 'text-gray-400' }}" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Second star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                <svg aria-hidden="true" class="w-5 h-5 {{ $review->rating >= 3 ? 'text-yellow-300' : 'text-gray-400' }}" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Third star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                <svg aria-hidden="true" class="w-5 h-5 {{ $review->rating >= 4 ? 'text-yellow-300' : 'text-gray-400' }}" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Fourth star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                <svg aria-hidden="true" class="w-5 h-5 {{ $review->rating >= 5 ? 'text-yellow-300' : 'text-gray-400' }}" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Fifth star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                <span class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ml-3">{{ $review->rating }}.0</span>
            </div>
            </div>

    @endforeach



      
  </div>
</section>
 

<section class=" pt-24 pb-36  bg-blueGray-100 overflow-hidden">
  <img class="absolute bottom-0 left-1/2 transform -translate-x-1/2" src="flaro-images/contact/gradient.svg" alt="">
  <div class=" z-10 container px-4 mx-auto">
    <h2 class="mb-5 text-6xl md:text-8xl xl:text-10xl text-center font-bold font-heading tracking-px-n leading-none">Get connected</h2>
    <p class="mb-20 text-lg  text-green-600 text-center font-medium leading-normal md:max-w-lg mx-auto">Lorem ipsum dolor sit amet, to the con adipiscing. Volutpat tempor to the condimentum vitae vel purus.</p>
    <div class="flex flex-wrap -m-3">
      <div class="w-full md:w-1/3 p-3">
        <div class="p-11 h-full text-center bg-white bg-opacity-90 border border-blueGray-100 rounded-xl shadow-11xl">
          <div class="mb-6 relative mx-auto w-16 h-16 bg-green-600 rounded-full">
            <div class="absolute left-1/2 top-1/2 transform -translate-y-1/2 -translate-x-1/2">
              <svg width="32" height="33" viewbox="0 0 32 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4 11.1666L14.5208 18.1805C15.4165 18.7776 16.5835 18.7776 17.4792 18.1805L28 11.1666M6.66667 25.8333H25.3333C26.8061 25.8333 28 24.6394 28 23.1666V9.83329C28 8.36053 26.8061 7.16663 25.3333 7.16663H6.66667C5.19391 7.16663 4 8.36053 4 9.83329V23.1666C4 24.6394 5.19391 25.8333 6.66667 25.8333Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
              </svg>
            </div>
          </div>
          <h3 class="mb-3 text-xl font-bold font-heading leading-snug">Send Email</h3>
          <p class="font-medium leading-relaxed">info@mail.com</p>
          <p class="font-medium leading-relaxed">support@mail.com</p>
        </div>
      </div>
      <div class="w-full md:w-1/3 p-3">
        <div class="p-11 h-full text-center bg-white bg-opacity-90 border border-blueGray-100 rounded-xl shadow-11xl">
          <div class="mb-6 relative mx-auto w-16 h-16 bg-white border border-blueGray-200 rounded-full">
            <div class="absolute left-1/2 top-1/2 transform -translate-y-1/2 -translate-x-1/2">
              <svg width="32" height="33" viewbox="0 0 32 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4 7.16667C4 5.69391 5.19391 4.5 6.66667 4.5H11.039C11.6129 4.5 12.1224 4.86724 12.3039 5.4117L14.301 11.4029C14.5108 12.0324 14.2258 12.7204 13.6324 13.0172L10.6227 14.522C12.0923 17.7816 14.7184 20.4077 17.978 21.8773L19.4828 18.8676C19.7796 18.2742 20.4676 17.9892 21.0971 18.199L27.0883 20.1961C27.6328 20.3776 28 20.8871 28 21.461V25.8333C28 27.3061 26.8061 28.5 25.3333 28.5H24C12.9543 28.5 4 19.5457 4 8.5V7.16667Z" stroke="#4F46E5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
              </svg>
            </div>
          </div>
          <h3 class="mb-3 text-xl font-bold font-heading leading-snug">Call Us</h3>
          <p class="font-medium leading-relaxed">+1 8408 412 569</p>
          <p class="font-medium leading-relaxed">+1 8408 412 569</p>
        </div>
      </div>
      <div class="w-full md:w-1/3 p-3">
        <div class="p-11 h-full text-center bg-white bg-opacity-90 border border-blueGray-100 rounded-xl shadow-11xl">
          <div class="mb-6 relative mx-auto w-16 h-16 bg-white border border-blueGray-200 rounded-full">
            <div class="absolute left-1/2 top-1/2 transform  -translate-y-1/2 -translate-x-1/2">
              <svg width="32" height="33" viewbox="0 0 32 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M23.5431 22.7091C22.1797 24.0725 19.192 27.0602 17.4133 28.8389C16.6323 29.62 15.3693 29.6203 14.5883 28.8392C12.8393 27.0903 9.91373 24.1647 8.45818 22.7091C4.29259 18.5435 4.29259 11.7898 8.45818 7.62419C12.6238 3.4586 19.3775 3.4586 23.5431 7.62419C27.7087 11.7898 27.7087 18.5435 23.5431 22.7091Z" stroke="#4F46E5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M20.0007 15.1667C20.0007 17.3758 18.2098 19.1667 16.0007 19.1667C13.7915 19.1667 12.0007 17.3758 12.0007 15.1667C12.0007 12.9575 13.7915 11.1667 16.0007 11.1667C18.2098 11.1667 20.0007 12.9575 20.0007 15.1667Z" stroke="#4F46E5" stroke-width="2" stroke-linecap="round"  stroke-linejoin="round"></path>
              </svg>
            </div>
          </div>
          <h3 class="mb-3 text-xl font-bold font-heading leading-snug">Address</h3>
          <p class="font-medium max-w-xs mx-auto leading-relaxed">380 St Kilda Road, Melbourne VIC 3004, Australia</p>
        </div>
      </div>
    </div>
  </div>
</section>

  <section class="relative pt-28 pb-36  overflow-hidden">

    <div class="text-center pb-12">
      <h2 class="text-base font-bold text-green-600">
          We have the best reviews in the market
      </h2>
      <h1 class="font-bold text-3xl md:text-4xl lg:text-5xl font-heading text-gray-900">
         Our awesome colabolators
      </h1>
  </div>

    <div class="flex flex-col  m-auto p-auto">
          
            <div class="flex overflow-x-scroll pb-10 hide-scroll-bar">
              
              <div class="flex flex-nowrap lg:ml-40 md:ml-20 ml-10">

              <div class="inline-block px-3">
                <div class="w-64 h-64 max-w-xs overflow-hidden rounded-lg shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
                  <img src="img/Bosch_lbgex.jpg"  alt="Logo" style="object-fit: cover; width: 100%; height: 100%;">
                </div>
              </div>

              <div class="inline-block px-3">
                <div class="w-64 h-64 max-w-xs overflow-hidden rounded-lg shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
                  <img src="img/mikita.png"  alt="Logo" style="object-fit: cover; width: 100%; height: 100%;">
                </div>
              </div>
            </div>

            <div class="inline-block px-3">
              <div class="w-64 h-64 max-w-xs overflow-hidden rounded-lg shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
                <img src="img/junkers.png"  alt="Logo" style="object-fit: cover; width: 100%; height: 100%;">
              </div>
            </div>

            <div class="inline-block px-3">
              <div class="w-64 h-64 max-w-xs overflow-hidden rounded-lg shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
                <img src="img/DeWALT.png"  alt="Logo" style="object-fit: cover; width: 100%; height: 100%;">
              </div>
            </div>

            <div class="inline-block px-3">
              <div class="w-64 h-64 max-w-xs overflow-hidden rounded-lg shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
                <img src="img/simon.png"  alt="Logo" style="object-fit: cover; width: 100%; height: 100%;">
              </div>
            </div>

            <div class="inline-block px-3">
              <div class="w-64 h-64 max-w-xs overflow-hidden rounded-lg shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
                <img src="img/Nexans.png"  alt="Logo" style="object-fit: cover; width: 100%; height: 100%;">
              </div>
            </div>
      </div>
  </section>

<section class="text-gray-600 body-font relative">
  <div class="absolute inset-0 bg-gray-300">
    <iframe width="100%" height="100%" frameborder="0" marginheight="0" marginwidth="0" title="map" scrolling="no" src="https://maps.google.com/maps?width=100%&height=600&hl=en&q=%C4%B0agadir+(My%20Business%20Name)&ie=UTF8&t=&z=14&iwloc=B&output=embed" style=""></iframe>
  </div>
  <div class="container px-5 py-24 mx-auto flex">
    <div class="lg:w-1/3 md:w-1/2 bg-white rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0 relative z-10 shadow-md">
      <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">Latest cities we covered</h2>

      <div class="col-6">
     @foreach ($latestCities as $citiy)
        <div class="flex items-center mb-2">
          <div class="w-2 h-2 mr-3 rounded-full bg-green-500 inline-flex"></div>
          <p class="text-gray-600">{{ $citiy->name }}</p>
        </div>
      @endforeach
      </div>
      </div>
    </div>
  </div>
</section>



@include('components.footer')


  


@endsection