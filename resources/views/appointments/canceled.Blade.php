
@extends('layouts.sec')


@section('content')

@include('components.authnavbar')

<!-- Table Section -->
<div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto ">
  <!-- Card -->
  <div class="flex flex-col">
    <div class="-m-1.5 overflow-x-auto">
      <div class="p-1.5 min-w-full inline-block align-middle">
        <div class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden dark:bg-slate-900 dark:border-gray-700">
          <!-- Header -->
          <div class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200 dark:border-gray-700">
            
            <div>
              <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200">
                Canceled Appointments
              </h2>
           
            </div>


          </div>
          <!-- End Header -->

          <!-- Table -->
          <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
            <thead class="bg-gray-50 dark:bg-slate-800">
              <tr>
                <th scope="col" class="pl-6 py-3 text-left">
              
                </th>
                <th scope="col" class="pl-6 lg:pl-3 xl:pl-0 pr-6 py-3 text-left">
                  <div class="flex items-center gap-x-2">
                    <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                      Appointemet ID
                    </span>
                  </div>
                </th>
                <th scope="col" class="pl-6 lg:pl-3 xl:pl-0 pr-6 py-3 text-left">
                  <div class="flex items-center gap-x-2">
                    <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                      service name 
                    </span>
                  </div>
                </th>


                <th scope="col" class="px-6 py-3 text-left">
                  <div class="flex items-center gap-x-2">
                    <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                      Technician  
                    </span>
                  </div>
                </th>

                <th scope="col" class="px-6 py-3 text-left">
                  <div class="flex items-center gap-x-2">
                    <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                      Client
                    </span>
                  </div>
                </th>


                <th scope="col" class="px-6 py-3 text-left">
                  <div class="flex items-center gap-x-2">
                    <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                      Date
                    </span>
                  </div>
                </th>



                  <th scope="col" class="px-6 py-3 text-left">
                    <div class="flex items-center gap-x-2">
                      <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                      status
                      </span>
                    </div>
                  </th>
                  <th scope="col" class="px-6 py-3 text-left">
                    <div class="flex items-center gap-x-2">
                      <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                      Cancelled by 
                      </span>
                    </div>
                  </th>

                  <th scope="col" class="pl-6 lg:pl-3 xl:pl-0 pr-6 py-3 text-left">
                    <div class="flex items-center gap-x-2">
                      <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                      Cancelled at
                      </span>
                    </div>
                  </th>
                  <th scope="col" class="pl-6 py-3 text-left">
              
                  </th>

              </tr>
            </thead>

            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
              @php
              $i=0;
             @endphp

             @foreach($canceledAppointments as $appointment)
              @php
              $i++;
              @endphp
             <tr>
              <td class="p-2">
                <div class="font-medium text-gray-800">
                  {{$i}}
                </div>
            </td>
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
            
                  <span class="relative inline-block px-3 py-1 font-semibold text-red-900 leading-tight">
                    <span aria-hidden class="absolute inset-0 bg-red-200 opacity-50 rounded-full"></span>
                                    <span class="relative">{{ $appointment->status }}</span>
                                    </span>

              </td>
              <td class="p-2 ">
                {{ $appointment->admin->user->name }}
            </td>
              <td class="p-2  text-indigo-600">
                  {{ $appointment->created_at->diffForHumans() }}
              </td>

              <td class="h-px w-px whitespace-nowrap py-3 px-6 text-center ">
                <div class="flex item-center justify-center">
                    <div class="w-4 mr-2 transform hover:scale-110">
                      <form action="{{ route('appointments.destroy', $appointment->id) }}" method="POST" class="inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class=" w-4 mr-2 transform hover:text-purple-500 hover:scale-110"><i class=" fa fa-trash text-gray-500"></i></button>
                    </form>
                    </div>
                </div>
            </td>
          </tr>
              @endforeach


            </tbody>
          </table>
          <!-- End Table -->

          <!-- Footer -->
          <div class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-t border-gray-200 dark:border-gray-700">
            <div>
              <p class="text-sm text-gray-600 dark:text-gray-400">
                <span class="font-semibold text-gray-800 dark:text-gray-200">{{ $i }}</span> results
              </p>
            </div>

            <div>
              <div class="inline-flex gap-x-2">
                <button type="button" class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800">
                  <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
                  </svg>
                  Prev
                </button>
                
                <button type="button" class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800">
                  Next
                  <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                  </svg>
                </button>
              </div>
            </div>
          </div>
          <!-- End Footer -->
        </div>
      </div>
    </div>
  </div>
  <!-- End Card -->
</div>
@include('components.footer')
<!-- End Table Section -->


@endsection