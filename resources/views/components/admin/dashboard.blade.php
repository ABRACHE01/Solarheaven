<div class="flex items-start justify-between">
    <div class="h-screen hidden lg:block my-4 ml-4 shadow-lg sticky w-80">
        <div class="bg-white h-full rounded-2xl dark:bg-gray-700">
            <div class="flex items-center justify-center pt-6">
                <div class="mt-8 text-center">
                <img src="{{ asset('images/usersImages/'. Auth::user()->image )}}" alt="" class="w-10 h-10 m-auto rounded-full object-cover lg:w-28 lg:h-28">
                <h5 class="hidden mt-4 text-xl font-semibold text-gray-600 lg:block">{{ Auth::user()->name }}</h5>
                <span class="hidden text-gray-400 lg:block">{{ Auth::user()->getRoleNames()[0] }}</span>
            </div>
            </div>
            <nav class="h-full">
                <div>
                    <a class="w-full font-thin uppercase hover:text-green-500 flex items-center p-4 my-2 transition-colors duration-200 justify-start bg-gradient-to-r from-white hover:to-green-100 hover:border-r-4 hover:border-green-500  text-gray-500 " href="{{ route('home') }}">
                        <span class="text-left">
                         <i class="fas fa-home"></i>
                        </span>
                        <span class="mx-4 text-sm font-normal">
                           Services
                        </span>
                    </a>
                    <a class="w-full font-thin uppercase hover:text-green-500 flex items-center p-4 my-2 transition-colors duration-200 justify-start bg-gradient-to-r from-white hover:to-green-100 hover:border-r-4 hover:border-green-500  text-gray-500 " href="{{ route('appointments.index') }}">
                        <span class="text-left">
                            <i class="fas fa-calendar-alt"></i>
                        </span>
                        <span class="mx-4 text-sm font-normal">
                           Appointements
                        </span>
                    </a>
                    <a class="w-full font-thin uppercase hover:text-green-500 flex items-center p-4 my-2 transition-colors duration-200 justify-start bg-gradient-to-r from-white hover:to-green-100 hover:border-r-4 hover:border-green-500  text-gray-500 href="{{ route('clients.index')}}">
                        <span class="text-left">
                           <i class="fas fa-user"></i>
                        </span>
                        <span class="mx-4 text-sm font-normal">
                            Clients
                        </span>
                    </a>
                    <a class="ww-full font-thin uppercase hover:text-green-500 flex items-center p-4 my-2 transition-colors duration-200 justify-start bg-gradient-to-r from-white hover:to-green-100 hover:border-r-4 hover:border-green-500  text-gray-500 " href="{{ route('tech.index')}}">
                        <span class="text-left">
                            <i class="fas fa-user-tie"></i>
                        </span>
                        <span class="mx-4 text-sm font-normal">
                            Technicians
                        </span>
                    </a>
                    <a class="w-full font-thin uppercase hover:text-green-500 flex items-center p-4 my-2 transition-colors duration-200 justify-start bg-gradient-to-r from-white hover:to-green-100 hover:border-r-4 hover:border-green-500  text-gray-500 " href="{{ route('admins.index')}}">
                        <span class="text-left">
                            <i class="fas fa-user-shield"></i>
                        </span>
                        <span class="mx-4 text-sm font-normal">
                            Admins
                        </span>
                    </a>

                    <a class="w-full font-thin uppercase hover:text-green-500 flex items-center p-4 my-2 transition-colors duration-200 justify-start bg-gradient-to-r from-white hover:to-green-100 hover:border-r-4 hover:border-green-500  text-gray-500 " href="{{ route('appointments.canceled')}}">
                        <span class="text-left">
                            <i class="fas fa-calendar-check"></i>
                        </span>
                        <span class="mx-4 text-sm font-normal">
                            cancelled appointement 
                        </span>
                    </a>

                    <a class="  w-full font-thin uppercase hover:text-green-500 flex items-center p-4 my-2 transition-colors duration-200 justify-start bg-gradient-to-r from-white hover:to-green-100 hover:border-r-4 hover:border-green-500  text-gray-500 " href="{{ route('cities.index')}}">
                        <span class="text-left">
                            <i class="fas fa-location"></i>
                        </span>
                        <span class="mx-4 text-sm font-normal">
                            Cities
                        </span>
                    </a>
                </div>
            </nav>
        </div>
    </div>
    <div class="flex flex-col w-full pl-0 md:p-4  md:space-y-4  ">

        <div class="overflow-auto h-screen pb-24 pt-2 pr-2 pl-2 md:pt-0 md:pr-0 md:pl-0">

        <section aria-label="Breadcrumb" class="flex m-5 ">
        <ol
            role="list"
            class="flex overflow-hidden rounded-lg border border-gray-200 text-gray-600"
        >
            <li class="flex items-center">
            <a
                href="#"
                class="flex h-10 items-center bg-gray-100 px-4 transition hover:text-gray-900"
            >
                <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-4 w-4"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
                >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"
                />
                </svg>
        
                <span class="ml-1.5 text-xs font-medium"> Home </span>
            </a>
            </li>
        </ol>

        </section>

 
            <section class="  px-4 sm:px-6 lg:py-4 lg:px-8 pb-10">
                <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">Our statistics</h2>
                
                <div class="grid grid-cols-1 gap-5 sm:grid-cols-4 mt-4">

                    <div class="max-w-md rounded-lg border px-6 pt-6 pb-10  bg-white ">
                        <div class="inline-block rounded-full border-8 border-emerald-50 bg-emerald-200 p-2 text-emerald-500">
                          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                          </svg>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="float-right h-6 w-6 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                        </svg>
                        <p class="text-sm font-medium text-gray-500">Technicians</p>
                        <p class="text-4xl font-medium text-gray-800">{{ $techniciansCount }}</p>
                        <div class="float-right flex -space-x-2">
                            @foreach ($latestTechnicians as $technician)
                            <a href="{{ route('tech.show', $technician->id) }}">
                                <img class="h-7 w-7 rounded-full ring ring-white" src="{{ asset('images/usersImages/'.$technician->user->image) }}" />
                            </a>
                            @endforeach
                            <div class="flex h-7 w-7 items-center justify-center rounded-full bg-gray-300 font-semibold text-white ring ring-white">+</div>
                          </div>
                      </div>

                      <div class="max-w-md rounded-lg border px-6 pt-6 pb-10  bg-white ">
                        <div class="inline-block rounded-full border-8 border-emerald-50 bg-emerald-200 p-2 text-emerald-500">
                          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                          </svg>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="float-right h-6 w-6 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                        </svg>
                        <p class="text-sm font-medium text-gray-500">Admins</p>
                        <p class="text-4xl font-medium text-gray-800">{{ $adminsCount }}</p>
                        <div class="float-right flex -space-x-2">
                            @foreach ($latestAdmins as $admin)
                            <a href="{{ route('admins.show', $admin->id) }}">
                                <img class="h-7 w-7 rounded-full ring ring-white" src="{{ asset('images/usersImages/' . $admin->user->image) }}" />
                           </a>
                            @endforeach
                            <div class="flex h-7 w-7 items-center justify-center rounded-full bg-gray-300 font-semibold text-white ring ring-white">+</div>
                          </div>
                      </div>

                      <div class="max-w-md rounded-lg border px-6 pt-6 pb-10  bg-white ">
                        <div class="inline-block rounded-full border-8 border-emerald-50 bg-emerald-200 p-2 text-emerald-500">
                          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                          </svg>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="float-right h-6 w-6 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                        </svg>
                        <p class="text-sm font-medium text-gray-500">Client</p>
                        <p class="text-4xl font-medium text-gray-800">{{ $clientsCount }}</p>
                        <div class="float-right flex -space-x-2">

                            @foreach ($latestClients as $client)
                            <a href="{{ route('clients.show', $client->id) }}">
                                <img class="h-7 w-7 rounded-full ring ring-white" src="{{ asset('images/usersImages/' . $client->user->image) }}" />
                            </a>
                            @endforeach
                            <div class="flex h-7 w-7 items-center justify-center rounded-full bg-gray-300 font-semibold text-white ring ring-white">+</div>
                          </div>
                      </div>

                      <div class="max-w-md rounded-lg border px-6 pt-6 pb-10  bg-white ">
                        <div class="inline-block rounded-full border-8 border-emerald-50 bg-emerald-200 p-2 text-emerald-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="float-right h-6 w-6 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
                                <path d="M16 2v4M8 2v4M3 10h18"/>
                              </svg>
                              
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="float-right h-6 w-6 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                        </svg>
                        <p class="text-sm font-medium text-gray-500">Appointements</p>
                        <p class="text-4xl font-medium text-gray-800">{{ $appointmentsCount }}</p>
                      </div>

                      <div class="max-w-md rounded-lg border px-6 pt-6 pb-10  bg-white ">
                        <div class="inline-block rounded-full border-8 border-emerald-50 bg-emerald-200 p-2 text-emerald-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="float-right h-6 w-6 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
                                <path d="M12 6h5v5h-5zM12 13h5v5h-5zM6 13h5v5H6z"/>
                              </svg>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="float-right h-6 w-6 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                        </svg>
                        <p class="text-sm font-medium text-gray-500">Services</p>
                        <p class="text-4xl font-medium text-gray-800">{{ $servicesCount }}</p>
                      </div>

                      <div class="max-w-md rounded-lg border px-6 pt-6 pb-10  bg-white ">
                        <div class="inline-block rounded-full border-8 border-emerald-50 bg-emerald-200 p-2 text-emerald-500">
                            <i class="fas fa-star text-green-500"></i>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="float-right h-6 w-6 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                        </svg>
                        <p class="text-sm font-medium text-gray-500">Reviews</p>
                        <p class="text-4xl font-medium text-gray-800">{{ $reviewsCount }}</p>
                      </div>

                      <div class="max-w-md rounded-lg border px-6 pt-6 pb-10  bg-white ">
                        <div class="inline-block rounded-full border-8 border-emerald-50 bg-emerald-200 p-2 text-emerald-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="float-right h-6 w-6 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7z"/>
                                <path d="M12 11a3 3 0 100-6 3 3 0 000 6z"/>
                                <path d="M12 22V12"/>
                              </svg>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="float-right h-6 w-6 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                        </svg>
                        <p class="text-sm font-medium text-gray-500">Cities</p>
                        <p class="text-4xl font-medium text-gray-800">{{ $citiesCount }}</p>
                      </div>

                      <div class="max-w-md rounded-lg border px-6 pt-6 pb-10  bg-white ">
                        <div class="inline-block rounded-full border-8 border-emerald-50 bg-emerald-200 p-2 text-emerald-500">
                            <i class="fas fa-money-bill-wave float-right h-6 w-6 text-green-500"></i>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="float-right h-6 w-6 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                        </svg>
                        <p class="text-sm font-medium text-gray-500">Payments </p>
                        <p class="text-4xl font-medium text-gray-800">{{ $paymentsCount }}</p>
                      </div>


                     
                     
                      

                </div>
            </section>
           
            <section class="flex flex-col lg:flex-row " >
                <div class=" lg:w-1/2 lg:order-1 mb-3 ">
                    <!-- Table -->
                    <div class="w-full max-w-2xl mx-auto bg-white  border border-gray-200 rounded-xl shadow-lg">
                        <header class="px-5 py-4 border-b border-gray-100">
                            <div class="font-semibold text-gray-800">Latest appointements </div>
                        </header>
            
                        <div class="overflow-x-auto round p-3">
                            <table class="table-auto w-full">
                                <thead class="text-xs font-semibold uppercase text-gray-400 bg-gray-50">
                                    <tr>
                                
                                        <th class="p-2">
                                            <div class="font-semibold text-left">ID</div>
                                        </th>
                                        <th class="p-2">
                                            <div class="font-semibold text-left">service</div>
                                        </th>
                                        <th class="p-2">
                                            <div class="font-semibold text-left">technician</div>
                                        </th>
                                        <th class="p-2">
                                            <div class="font-semibold text-center">Client</div>
                                        </th>
                                        <th class="p-2">
                                            <div class="font-semibold text-center">date</div>
                                        </th>
                                        <th class="p-2">
                                            <div class="font-semibold text-center">status</div>
                                        </th>
                                        <th class="p-2">
                                            <div class="font-semibold text-center">created</div>
                                        </th>
                                    </tr>
                                </thead>
            
                                <tbody class="text-sm divide-y divide-gray-100">
                                    <!-- record 1 -->
                                    @foreach ($latestAppointments as $appointment)
                                    <tr>
                                        <td class="p-2">
                                            <div class="font-medium text-gray-800">
                                         #{{$appointment->id}}
                                            </div>
                                        </td>

                                        <td class="p-2">
                                            <div class="font-medium text-gray-800">
                                         {{ $appointment->service->name}}
                                            </div>
                                        </td>
                                        <td class="p-2">
                                            <div class="font-medium text-gray-800">
                                                 <a href="{{ route('tech.show', $appointment->technician->id) }}" class="flex items-center space-x-3">
                                                    <img class="inline-block h-[2.375rem] w-[2.375rem] rounded-full"  src="{{ asset('images/usersImages/' . $appointment->technician->user->image ) }}" alt="Image Description">
                                                    <div class="grow">
                                                      <span class="block text-sm font-semibold text-gray-800 dark:text-gray-200">{{ $appointment->technician->user->name }}</span>
                                                    </div>
                                                  </a>
                                            </div>
                                        </td>
                                        <td class="p-2">
                                            <div class="font-medium text-gray-800">
                                                 <a href="{{ route('clients.show', $appointment->client->id) }}" class="flex items-center space-x-3">
                                                    <img class="inline-block h-[2.375rem] w-[2.375rem] rounded-full"  src="{{ asset('images/usersImages/' . $appointment->client->user->image ) }}" alt="Image Description">
                                                    <div class="grow">
                                                      <span class="block text-sm font-semibold text-gray-800 dark:text-gray-200">{{ $appointment->client->user->name }}</span>
                                                    </div>
                                                  </a>
                                            </div>
                                        </td>

                                        <td class="p-2">
                                            <div class="text-left font-medium text-green-500">
                                                {{ $appointment->start_time }}
                                            </div>
                                        </td>

                                        <td class="p-2">
                                            @if ($appointment->status == 'confirmed')
                                            <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                              <span aria-hidden class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                                                   <span class="relative">{{ $appointment->status }}</span>
                                            </span>  
                                            @elseif($appointment->status == 'canceled')
                                            <span class="relative inline-block px-3 py-1 font-semibold text-red-900 leading-tight">
                                              <span aria-hidden class="absolute inset-0 bg-red-200 opacity-50 rounded-full"></span>
                                                              <span class="relative">{{ $appointment->status }}</span>
                                                              </span>
                                            @else
                                            <span class="relative inline-block px-3 py-1 font-semibold text-blue-900 leading-tight">
                                              <span aria-hidden class="absolute inset-0 bg-blue-200 opacity-50 rounded-full"></span>
                                                              <span class="relative">{{ $appointment->status }}</span>
                                                              </span>

                                            @endif

                                        </td>
                                        <td class="p-2  text-indigo-600">
                                            {{ $appointment->created_at->diffForHumans() }}
                                          </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
            
                        <!-- see all -->
                        <footer class="px-5 py-4 bg-gray-50  border-gray-100 rounded-lg">
                            <div class="flex justify-between">
                                <a class="font-semibold text-green-600" href="{{ route('appointments.index') }}">See all</a>
                            </div>
                        </footer>
                        
            
                      
                    </div>
                </div>

                <div class=" lg:w-1/2 lg:order-2 ">
                    <!-- Table -->
                    <div class="w-full max-w-2xl mx-auto bg-white  border border-gray-200 rounded-xl shadow-lg">
                        <header class="px-5 py-4 border-b border-gray-100">
                            <div class="font-semibold text-gray-800">Latest reviews </div>
                        </header>
            
                        <div class="overflow-x-auto round p-3">
                            <table class="table-auto w-full">
                                <thead class="text-xs font-semibold uppercase text-gray-400 bg-gray-50">
                                    
                                    <tr>
                                        
                                        <th class="p-2">
                                            <div class="font-semibold text-left">ID</div>
                                        </th>
                                        <th class="p-2">
                                            <div class="font-semibold text-left">appointment</div>
                                        </th>
                                        <th class="p-2">
                                            <div class="font-semibold text-left">client</div>
                                        </th>
                                        <th class="p-2">
                                            <div class="font-semibold text-center">cechnician</div>
                                        </th>
                                        <th class="p-2">
                                            <div class="font-semibold text-center">rating</div>
                                        </th>
                                        <th class="p-2">
                                            <div class="font-semibold text-center">created</div>
                                        </th>
                                    </tr>
                                   
                                </thead>
            
                                <tbody class="text-sm divide-y divide-gray-100">
                                    <!-- record 1 -->
                                    @foreach($latestReviews as $review)
                                    <tr>
                                        <td class="p-2">
                                            <div class="font-medium text-gray-800">
                                         #{{ $review->id }}
                                            </div>
                                        </td>
                                     
                                        <td class="p-2">
                                            <div class="font-medium text-gray-800">
                                            {{ $review->appointment->service->name }}
                                            </div>
                                        </td>
                                        <td class="p-2">
                                            <div class="font-medium text-gray-800">
                                                <a href="{{ route('clients.show', $review->appointment->client->id) }}" class="flex items-center space-x-3">
                                                   <img class="inline-block h-[2.375rem] w-[2.375rem] rounded-full"  src="{{ asset('images/usersImages/' . $review->appointment->client->user->image ) }}" alt="Image Description">
                                                   <div class="grow">
                                                     <span class="block text-sm font-semibold text-gray-800 dark:text-gray-200">{{ $review->appointment->client->user->name }}</span>
                                                   </div>
                                                 </a>
                                           </div>
                                        </td>
                                        <td class="p-2">
                                            <div class="font-medium text-gray-800">
                                                <a href="{{ route('tech.show', $appointment->technician->id )}}" class="flex items-center space-x-3">
                                                   <img class="inline-block h-[2.375rem] w-[2.375rem] rounded-full"  src="{{ asset('images/usersImages/' . $appointment->technician->user->image ) }}" alt="Image Description">
                                                   <div class="grow">
                                                     <span class="block text-sm font-semibold text-gray-800 dark:text-gray-200">{{ $appointment->technician->user->name }}</span>
                                                   </div>
                                                 </a>
                                           </div>
                                        </td>
                                        <td class="p-2">
                                            <div class="font-medium text-gray-800">
                                                {{ $review->rating }} of 5
                                            </div>
                                        </td>
                                        <td class="p-2">
                                            {{ $review->created_at->diffForHumans() }}
                                          </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>                       
              <!-- see all -->
              <footer class="px-5 py-4 bg-gray-50  border-gray-100 rounded-lg">
                <div class="flex justify-between">
                    <a class="font-semibold text-green-600" href="{{ route('reviews.index') }}">See all</a>
                </div>
              </footer>

                  
        </div>
            </section>

 <section class="grid grid-cols-1 gap-5 xl:grid-cols-4 mt-4 ">

            <div class="max-w-[100%] rounded-lg border px-6 pt-6 pb-10  bg-white">
                <div class="flex justify-between">
                    <p class="text-lg font-medium">Latest admins</p>
                    <a class="font-semibold text-green-600" href="{{ route('admins.index') }}">See all</a>
                </div>
            @foreach($latestAdmins as $admin)
            <a href="{{ route('admins.show', $admin->id) }}">
                <div class="flex items-center py-2">
                  <img class="h-10 w-10 rounded-full object-cover" src="{{ asset('images/usersImages/' . $admin->user->image ) }}" alt="Simon Lewis" />
                  <p class="ml-4 w-56">
                    <strong class="block font-medium">{{ $admin->user->name }}</strong>
                    <span class="text-xs text-gray-400">{{ $admin->user->email }} </span>
                  </p>
                </div>
            </a>
            @endforeach
            </div>

            <div class="max-w-[100%] rounded-lg border px-6 pt-6 pb-10  bg-white">
              
                <div class="flex justify-between">
                    <p class="text-lg font-medium">Latest Clients </p>
                    <a class="font-semibold text-green-600" href="{{ route('clients.index') }}">See all</a>
                </div>
                @foreach($latestClients as $client)
                <a href="{{ route('clients.show', $client->id )}}">
                <div class="flex items-center py-2">
                  <img class="h-10 w-10 rounded-full object-cover" src="{{ asset('images/usersImages/' . $client->user->image ) }}" alt="Simon Lewis" />
                  <p class="ml-4 w-56">
                    <strong class="block font-medium">{{ $client->user->name }}</strong>
                    <span class="text-xs text-gray-400">{{ $client->user->email }} </span>
                  </p>
                </div>
                </a>
                @endforeach
            </div>

            <div class="max-w-[100%] rounded-lg border px-6 pt-6 pb-10  bg-white">  
                <div class="flex justify-between">
                    <p class="text-lg font-medium">Latest Technicians </p>
                    <a class="font-semibold text-green-600" href="{{ route('tech.index') }}">See all</a>
                </div>
                @foreach($latestTechnicians as $technician)
                <a href="{{ route('tech.show', $technician->id )}}">
                <div class="flex items-center py-2">
                  <img class="h-10 w-10 rounded-full object-cover" src="{{ asset('images/usersImages/' . $technician->user->image ) }}" alt="Simon Lewis" />
                  <p class="ml-4 w-56">
                    <strong class="block font-medium">{{ $technician->user->name }}</strong>
                    <span class="text-xs text-gray-400"> {{ $technician->user->email }} </span>
                  </p>
                </div>
                </a>
                @endforeach

            </div>


            <div class="max-w-[100%] rounded-lg border px-6 pt-6 pb-10  bg-white">

                <div class="flex justify-between">
                    <p class="text-lg font-medium">Latest Payments </p>
                    <a class="font-semibold text-green-600" href="{{ route('payment.index') }}">See all</a>
                </div>
                @if($latestPayments== !null)
                @foreach($latestPayments as $payment)
               <div class="border-b border-t m-3 border-gray-200 pb-2">
                    <a href="{{ route('clients.show', $payment->appointment->client->id )}}">
                        <div class="flex items-center py-2">
                          <img class="h-10 w-10 rounded-full object-cover" src="{{ asset('images/usersImages/' .  $payment->appointment->client->user->image  ) }}" alt="Simon Lewis" />
                          <p class="ml-4 w-56">
                            <strong class="block font-medium">{{  $payment->appointment->client->user->name  }}</strong>
                            <span class="text-xs text-gray-400"> {{ $payment->appointment->client->user->phone_number }} </span>
                          </p>
                        </div>
                       
                       
                      @if ($payment->status == 'paid')
                      <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                        <span aria-hidden class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                             <span class="relative">{{ $payment->status }}</span>
                      </span>  
                      @elseif($payment->status == 'failed')
                      <span class="relative inline-block px-3 py-1 font-semibold text-red-900 leading-tight">
                        <span aria-hidden class="absolute inset-0 bg-red-200 opacity-50 rounded-full"></span>
                                        <span class="relative">{{ $payment->status}}</span>
                                        </span>
                      @elseif($payment->status == 'refunded') 
                      <span class="relative inline-block px-3 py-1 font-semibold text-blue-900 leading-tight">
                        <span aria-hidden class="absolute inset-0 bg-blue-200 opacity-50 rounded-full"></span>
                                        <span class="relative">{{ $payment->status }}</span>
                                        </span>

                      @elseif($payment->status == 'pending')
                      <span class="relative inline-block px-3 py-1 font-semibold text-yellow-900 leading-tight">
                        <span aria-hidden class="absolute inset-0 bg-yellow-200 opacity-50 rounded-full"></span>
                                        <span class="relative">{{ $payment->status }}</span>
                                        </span>
                      @endif
                    </a>
                @endforeach
            </div>
            @else
            <p class="text-center">No payments yet</p>
            @endif
            

      

           
            
 </section>
       
    
    @include('components.footer')

        </div>
           
    </div>
</div>

