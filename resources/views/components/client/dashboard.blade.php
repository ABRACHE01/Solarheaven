
  <div class="h-full overflow-hidden ">
    <main id="dashboard-main" class="h-[calc(100vh-10rem)] overflow-auto px-4 py-10">
      <!-- Put your content inside of the <main/> tag -->
  
      
      <section class="">
        <div class="w-auto mx-auto px-4 sm:px-6  md:px-8 relative ">
          <h1 class=" text-2xl font-black text-gray-800">Welcome <span class="text-green-500  ">{{ Auth::User()->name }}</span> !</h1>
          <p class="mb-6 text-gray-600">Here's an overview of your monthly transactions.</p>
            <div class="shadow rounded-xl">
                <div class="grid overflow-hidden text-white shadow-xl md:grid-cols-2 bg-blue-600 rounded-xl">
                    <aside class="p-8 space-y-4 md:p-16">
                        <h2 class="text-2xl font-bold tracking-tight md:text-4xl font-headline">
                            Ready to dive in?
                            Start your appointement today.
                        </h2>
    
                        <p class="font-medium text-blue-100 md:text-2xl">
                            We are here to help you to grow your business and to help our clients to find the best technicians for their needs.
                        </p>

                        {{-- buttons to see ower technicians and services --}}

                        <div class="flex flex-col space-y-4 md:flex-row md:space-x-4 md:space-y-0">
                            <a href="{{ route('tech.index') }}" class="inline-flex items-center justify-center w-full px-5 py-3 text-base font-medium leading-6 text-white transition duration-150 ease-in-out bg-green-500 border border-transparent rounded-md shadow-sm hover:bg-green-600 focus:outline-none focus:shadow-outline md:w-auto">
                                See our technicians
                            </a>
                            <a href="{{ route('services.index') }}" class="inline-flex items-center justify-center w-full px-5 py-3 text-base font-medium leading-6 text-green-500 transition duration-150 ease-in-out bg-white border border-transparent rounded-md shadow-sm hover:text-green-600 focus:outline-none focus:shadow-outline md:w-auto">
                                See our services
                            </a>
                        </div>
                       
    
                      
                    </aside>
    
                    <aside class="relative hidden md:block">
                        <img class="absolute inset-0 object-cover object-left-top w-full h-full  -mr-16 rounded-tl-lg" src="{{  asset('img/solar2.jpg') }}" alt="Booked">
                    </aside>
                </div>
            </div>
        </div>
    </section>

    <section>
    <div class="px-4 py-16 mx-auto  sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
      <div class="grid grid-cols-2 gap-8 md:grid-cols-4">
          <div class="text-center md:border-r">
              <h6 class="text-4xl font-bold lg:text-5xl xl:text-6xl">{{ $servicesCount }}K</h6>
              <p class="text-sm font-medium tracking-widest text-gray-800 uppercase lg:text-base">
                  Services
              </p>
          </div>
          <div class="text-center md:border-r">
              <h6 class="text-4xl font-bold lg:text-5xl xl:text-6xl"> {{ $techniciansCount }}K </h6>
              <p class="text-sm font-medium tracking-widest text-gray-800 uppercase lg:text-base">
                  Technicians
              </p>
          </div>
          <div class="text-center md:border-r">
              <h6 class="text-4xl font-bold lg:text-5xl xl:text-6xl"> {{ $reviewsCount }}K </h6>
              <p class="text-sm font-medium tracking-widest text-gray-800 uppercase lg:text-base">
                Reviews
              </p>
          </div>
          <div class="text-center">
              <h6 class="text-4xl font-bold lg:text-5xl xl:text-6xl">{{ $clientsCount }}K</h6>
              <p class="text-sm font-medium tracking-widest text-gray-800 uppercase lg:text-base">
                Costumers
              </p>
          </div>
      </div>
  </div>
</section>

<section  class="grid grid-cols-1 gap-1 sm:grid-cols-1 mt-4 lg:grid-cols-2 sm:px-6 md:px-8  justify-items-center">

    <div class=" rounded-lg border px-6 pt-6 pb-10  bg-white w-full">
        <div class="w-full max-w-2xl mx-auto bg-white  border border-gray-200 rounded-xl shadow-lg">
            <header class="px-5 py-4 border-b border-gray-100">
                <div class="font-semibold text-gray-800"> My appointements </div>
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
                        @foreach ($clientAppointments as $appointment)
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
        <a class="font-semibold text-green-600" href="">See all</a>
    </div>
  </footer>

      
</div>
</div>

<div class=" rounded-lg border px-6 pt-6 pb-10  bg-white w-full">
    <div class="w-full max-w-2xl mx-auto bg-white  border border-gray-200 rounded-xl shadow-lg">
        <header class="px-5 py-4 border-b border-gray-100">
            <div class="font-semibold text-gray-800"> My reviews </div>
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
                        @if (!is_null($clientReviews))
                        @foreach ($clientReviews as $review)
                        <tr>
                            <td class="p-2">
                                <div class="font-medium text-gray-800">
                             #{{ $review->id}}
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
                        @endif
                    </tbody>
                </table>
            </div>                             
<!-- see all -->
<footer class="px-5 py-4 bg-gray-50  border-gray-100 rounded-lg">
<div class="flex justify-between">
    <a class="font-semibold text-green-600" href="">See all</a>
</div>
</footer>

  
</div>
</div>

</section>

<section  class="grid grid-cols-1 gap-5 sm:grid-cols-1 mt-4 lg:grid-cols-2 sm:px-6 md:px-8  justify-items-center">

            <div class="rounded-lg border px-6 pt-6 pb-10  bg-white w-full">
                <div class="flex justify-between">
                    <p class="text-lg font-medium">Admins </p>
                    <a class="font-semibold text-green-600" href="{{ route('admins.index') }}"></a>
                </div>
            @foreach($latestAdmins as $admin)
            <a href="{{ route('admins.show', $admin->id) }}" >
                <div class="flex items-center py-2">
                  <img class="h-10 w-10 rounded-full object-cover" src="{{ asset('images/usersImages/' . $admin->user->image ) }}" alt="Simon Lewis" />
                  <p class="ml-4 w-56">
                    <strong class="block font-medium">{{ $admin->user->name }}</strong>
                    <span class="text-xs text-gray-400">{{ $admin->user->email }} </span>
                  </p>
                 
                    <p class="ml-4 w-56">
                        <strong class="block font-medium">{{ $admin->user->phone_number }}</strong>
                    </p>
                    <p>
                        <span class="relative inline-block px-3 py-1 font-semibold text-blue-900 leading-tight">
                            <span aria-hidden class="absolute inset-0 bg-blue-200 opacity-50 rounded-full"></span>
                                            <span class="relative">{{ $admin->user->city->name }}</span>
                                            </span>
                   
                     </p>
                </div>
            </a>
            @endforeach
            </div>

            {{-- <div class="max-w-md rounded-lg border px-6 pt-6 pb-10   bg-white  w-full">
              
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
            </div> --}}

            <div class="rounded-lg border px-6 pt-6 pb-10  bg-white w-full">
                <div class="flex justify-between">
                    <p class="text-lg font-medium">Technicians  </p>
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
                  <p class="ml-4 w-56">
                    <strong class="block font-medium">{{ $technician->user->phone_number }}</strong>
                 </p>

                 <p>
                    <span class="relative inline-block px-3 py-1 font-semibold text-blue-900 leading-tight">
                        <span aria-hidden class="absolute inset-0 bg-blue-200 opacity-50 rounded-full"></span>
                                        <span class="relative">{{ $technician->user->city->name }}</span>
                                        </span>
               
                 </p>
                </div>
                </a>
                @endforeach

            </div>

</section>
  
      @include('components.footer')
    </main>

  </div>

  

