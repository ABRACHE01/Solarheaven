@extends('layouts.sec')

@section('content')

@include('components.authnavbar')


<h4
class="md:text-8xl xl:text-1 text-center font-bold font-heading tracking-px-n pt-14 leading-none">
Book a Service now </h4>

<div class="flex items-center justify-center p-12">
    <!-- Author: FormBold Team -->

    {{-- errore --}}
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

    {{-- success --}}
    <div class="mx-auto w-full max-w-[550px] bg-white">
        <form method="POST" action="{{ route('appointments.store') }}">
            @csrf
   
            <div class="mb-5">
                <label for="phone" class="mb-3 block text-base font-medium text-[#07074D]">
                   Client name
                </label>
                <select name="client_id" id="client_id" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    @foreach ($clients as $client)
                        <option value="{{ $client->id }}">{{ $client->user->name }}</option>
                    @endforeach
                </select>
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
                {{-- <div class="w-full px-3 sm:w-1/2">
                    <div class="mb-5">
                        <label for="date" class="mb-3 block text-base font-medium text-[#07074D]">
                           End Date
                        </label>
                        <input type="datetime-local" name="end_time" id="end_time"
                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                </div> --}}
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




