

@extends('layouts.sec')

@section('content')


<header>
        
  @include('components.navbar')
    </header>

<body>
    <section>
        <a href="#" class="group relative block">
            <div class="relative h-[350px] sm:h-[450px]">
                <img src=" {{  asset('img/solar5.jpg') }}" alt=""
                    class="absolute inset-0 h-full w-full object-cover opacity-100 group-hover:opacity-0" />

                <img src="{{ asset('img/tech2.jpg') }}" alt=""
                    class="absolute inset-0 h-full w-full object-cover opacity-0 group-hover:opacity-100" />
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

                <div class="container overflow-hidden">
                    <a href="#" class="group relative block overflow-hidden">
                        <button
                          class="absolute right-4 top-4 z-10 rounded-full bg-white p-1.5 text-gray-900 transition hover:text-gray-900/75"
                        >
                          <span class="sr-only">Wishlist</span>
                      
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="h-4 w-4"
                          >
                            <path
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"
                            />
                          </svg>
                        </button>
                      
                        <img
                          src="https://images.unsplash.com/photo-1599481238640-4c1288750d7a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2664&q=80"
                          alt=""
                          class="h-64 w-full object-cover transition duration-500 group-hover:scale-105 sm:h-72"
                        />
                      
                        <div class="relative border border-gray-100 bg-white p-6">
                          <span
                            class="whitespace-nowrap bg-green-100 px-3 py-1.5 text-xs font-medium"
                          >
                            New
                          </span>
                      
                          <h3 class="mt-4 text-lg font-medium text-gray">Robot Toy</h3>
                      
                          <p class="mt-1.5 text-sm text-gray-700">$14.99</p>
                      
                          <form class="mt-4">
                            <button
                              class="block w-full rounded bg-green-100 p-4 text-sm font-medium transition hover:scale-105"
                            >
                              Show service
                            </button>
                          </form>
                        </div>
                      </a>

                </div>
                <div class="container overflow-hidden">
                    <a href="#" class="group relative block overflow-hidden">
                        <button
                          class="absolute right-4 top-4 z-10 rounded-full bg-white p-1.5 text-gray-900 transition hover:text-gray-900/75"
                        >
                          <span class="sr-only">Wishlist</span>
                      
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="h-4 w-4"
                          >
                            <path
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"
                            />
                          </svg>
                        </button>
                      
                        <img
                          src="https://images.unsplash.com/photo-1599481238640-4c1288750d7a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2664&q=80"
                          alt=""
                          class="h-64 w-full object-cover transition duration-500 group-hover:scale-105 sm:h-72"
                        />
                      
                        <div class="relative border border-gray-100 bg-white p-6">
                          <span
                            class="whitespace-nowrap bg-green-100 px-3 py-1.5 text-xs font-medium"
                          >
                            New
                          </span>
                      
                          <h3 class="mt-4 text-lg font-medium text-gray">Robot Toy</h3>
                      
                          <p class="mt-1.5 text-sm text-gray-700">$14.99</p>
                      
                          <form class="mt-4">
                            <button
                              class="block w-full rounded bg-green-100 p-4 text-sm font-medium transition hover:scale-105"
                            >
                              Show service
                            </button>
                          </form>
                        </div>
                      </a>

                </div>
                
            </div>
        </div>
    </section>


</body>
<footer class="bg-white rounded-lg shadow dark:bg-gray-900 m-4">
    <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
        <div class="sm:flex sm:items-center sm:justify-between">
            <div class="font-extrabold tracking-widest text-xl"><a href="#"
                    class="transition duration-500 text-green-500">SOLARHAVEN</a></div>
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
        <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="#"
                class="transition duration-500 text-green-500">SOLARHAVEN</a>. All Rights Reserved.</span>
    </div>
</footer>

@endsection


