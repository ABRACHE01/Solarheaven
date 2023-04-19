





@extends('layouts.sec')

@section('content')

@include('components.authnavbar')

@if(($appointment->status == 'confirmed'|| $appointment->status == 'requested'  ) && Auth:: user()->hasRole('client'))
<div class="flex flex-col items-center justify-center h-[60vh]"
<div class="text-center">
    <h1 class="text-4xl  font-bold font-heading tracking-px-n text-[#07074D]">This appointement is {{ $appointment->status }} </h1>
    {{-- button --}}
<a href="{{ route('appointments.index') }}" class="mt-5 inline-block py-3 px-8 rounded-md bg-[#6A64F1] text-base font-semibold text-white">Back to Appointements</a>
</div>
</div>
@endif

@if((Auth:: user()->hasRole('client') || $appointment->status == 'completed' || $appointment->status == 'cancelled' )== false )


<h4 class="md:text-8xl xl:text-1  text-center font-bold font-heading tracking-px-n pt-14 pb-14  leading-none "> Settings </h4>
<div class="flex items-center justify-center ">
    <!-- Author: FormBold Team -->
    <div class="mx-auto w-full max-w-[550px]  ">

        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

    <form action="{{ route('appointments.update', $appointment->id) }}" method="POST">
            @csrf
            @method('PUT')
         
            @if(Auth:: user()->hasRole('admin'))

            @include('components.admin.appSettings')

            @endif

            @if(Auth:: user()->hasRole('technician'))

            @include('components.technician.appSettings')

        @endif

        @if(Auth:: user()->hasRole('client'))

        {{-- CANCLED STATUS FOR THE CLIENT  --}}

    <div class="mb-5">
        <label for="name" class="mb-3 block text-base font-medium text-[#07074D]">
            Status
        </label>
        <select name="status" id="status" placeholder="Full Name"
            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" required>
            <option value="cancelled" {{ $appointment->status == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
        </select>
    </div>

         @endif
         
            <div>
                <button
                type="submit"
                    class="hover:shadow-form w-full rounded-md bg-[#6A64F1] py-3 px-8 text-center text-base font-semibold text-white outline-none">
                    Save
                </button>
            </div>
 
        </form>
        
    </div>
</div>

@else

@if( Auth::user()->hasRole('admin') || Auth:: user()->hasRole('technician') || (Auth:: user()->hasRole('client') && $appointment->status == 'completed' && $appointment->reviews->first() != null))

    <div class="flex flex-col items-center justify-center h-[60vh]"
        <div class="text-center">
            <h1 class="text-4xl  font-bold font-heading tracking-px-n text-[#07074D]">This appointement is {{ $appointment->status }} </h1>
            {{-- button --}}
        <a href="{{ route('appointments.index') }}" class="mt-5 inline-block py-3 px-8 rounded-md bg-[#6A64F1] text-base font-semibold text-white">Back to Appointements</a>
        </div>
    </div>

@elseif($appointment->status == 'completed' && $appointment->reviews->first() == null && Auth:: user()->hasRole('client'))  

    <div class="flex flex-col items-center justify-center h-[60vh]"
        <div class="text-center">
            <h1 class="text-4xl  font-bold font-heading tracking-px-n text-[#07074D]">make a reviw about your appointement with <span class=" text-green-500 " >"{{ $appointment->technician->user->name }}"</span></h1>
            {{-- button --}}
        <a href="{{ route('take.review', $appointment->id) }}"
        class="mt-5 inline-block py-3 px-8 rounded-md bg-[#6A64F1] text-base font-semibold text-white"> make a reviw </a>
    </div>

</div>
@endif


@endif


@include('components.footer')
@endsection


