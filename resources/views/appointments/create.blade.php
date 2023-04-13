@extends('layouts.sec')

@section('content')

@include('components.authnavbar')


<h4
class="md:text-8xl xl:text-1 text-center font-bold font-heading tracking-px-n pt-14 leading-none">
Book a Service now </h4>

<div class="flex items-center justify-center p-12">
    <!-- Author: FormBold Team -->


    {{-- success --}}
    

<div class="mx-auto w-full max-w-[550px] bg-white">
            {{-- errore --}}
@if ($errors->any())
    <div class="alert alert-danger">
    </div>
    <div class="relative items-center w-full px-5 py-12 mx-auto md:px-12 lg:px-24 max-w-7xl">
        <div class="p-6 border-l-4 border-red-500 -6 rounded-r-xl bg-red-50">
          <div class="flex">
            <div class="flex-shrink-0">
              <svg class="w-5 h-5 text-red-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
              </svg>
            </div>
            <div class="ml-3">
              <div class="text-sm text-red-600">
                <p>
                    @foreach ($errors->all() as $error)
                    {{ $error }}
                    @endforeach
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
@endif

@if (session('error'))

    <div class="alert alert-danger">
    </div>
    <div class="relative items-center w-full px-5 py-12 mx-auto md:px-12 lg:px-24 max-w-7xl">
        <div class="p-6 border-l-4 border-red-500 -6 rounded-r-xl bg-red-50">
          <div class="flex">
            <div class="flex-shrink-0">
              <svg class="w-5 h-5 text-red-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
              </svg>
            </div>
            <div class="ml-3">
              <div class="text-sm text-red-600">
                <p>
                  {{ session('error') }}
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
@endif
        <form method="POST" action="{{ route('appointments.store') }}">

            @csrf
   
            <div class="mb-5">
                <input  name="client_id" id="client_id"  value="{{ Auth::user()->client->id}}" placeholder="{{ Auth::user()->client->user->name}}" type="hidden"
                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />

            </div>
            
        @if(Route::currentRouteName() == 'appointments.service')
        <div class="mb-5">
            <label for="service_id" class="mb-3 block text-base font-medium text-[#07074D]">
                Service
            </label>
            <select name="service_id" id="service_id"  class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                <option value="{{ $service->id }}">{{ $service->name }}</option>
        </select>
        </div>

        <div class="mb-5">
            <label for="service_id" class="mb-3 block text-base font-medium text-[#07074D]">
                Technician
            </label>
            <select name="technician_id" id="technician_id" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
            @if ($technicians->count() == 0)
            <option value="">No technicians available</option>
        @endif
        @foreach ($technicians as $technician)
            <option value="{{ $technician->id }}">{{ $technician->user->name }}</option>
        @endforeach
        </select>
        </div>

        @endif

        @if(Route::currentRouteName() == 'appointments.technician')

        <div class="mb-5">
            <label for="service_id" class="mb-3 block text-base font-medium text-[#07074D]">
                Service
            </label>
            <select name="service_id" id="service_id"  class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
            @foreach ($services as $service)
                <option value="{{ $service->id }}">{{ $service->name }}</option>
            @endforeach
        </select>
        </div>

        <div class="mb-5">
            <label for="service_id" class="mb-3 block text-base font-medium text-[#07074D]">
                Technician
            </label>
            <select name="technician_id" id="technician_id" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
            @if ($technician->count() == 0)
            <option value="">No technicians available</option>
        @endif
            <option value="{{ $technician->id }}">{{ $technician->user->name }}</option>
        </select>
        </div>

        @endif  

            <div class="-mx-3 flex flex-wrap">
                <div class="w-full px-3 sm:w-1/2">
                    <div class="mb-5">
                        <label for="date" class="mb-3 block text-base font-medium text-[#07074D]">
                           Start Date
                        </label>
                        {{-- day only --}}
                        <input  name="start_time" id="start_time" type="date"
                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                </div>
           
            </div>

            <div class="mb-5 pt-3">
                <div class="-mx-3 flex flex-wrap">
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label for="date" class="mb-3 block text-base font-medium text-[#07074D]">
                                City
                             </label>
                            <select name="city_id" id="city_id" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                @foreach ($cities as $city)
                                    <option value="{{ $city->id }}">{{ $city->name }}</option>
                                @endforeach
                            </select>
    
                        </div>
                    </div>

                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label for="address" class="mb-3 block text-base font-medium text-[#07074D]">
                                Address
                             </label>
                            <input type="text" name="address" id="area" placeholder="Enter address"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </div>
            </div>

            <div>
                <button
                    type="submit"
                    class="hover:shadow-form w-full rounded-md bg-[#6A64F1] py-3 px-8 text-center text-base font-semibold text-white outline-none">
                    Book Appointment
                </button>
            </div>
        </form>
    </div>
</div>
@endsection




