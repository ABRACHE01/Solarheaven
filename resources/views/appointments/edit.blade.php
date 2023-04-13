





@extends('layouts.sec')

@section('content')

@include('components.authnavbar')


@if((Auth:: user()->hasRole('client') || $appointment->status == 'completed' ||$appointment->status == 'cancelled' )==false )
<h4 class="md:text-8xl xl:text-1  text-center font-bold font-heading tracking-px-n pt-14 pb-14  leading-none "> Settings </h4>
<div class="flex items-center justify-center ">
    <!-- Author: FormBold Team -->
    <div class="mx-auto w-full max-w-[550px] bg-white ">
        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('appointments.update', $appointment->id) }}" method="POST">
            @csrf
            @method('PUT')
         
            @if(Auth:: user()->hasRole('admin'))

            {{--  ADMIN CAN EDIT THE APPOINTMENT  --}}
            <div class="mb-5">
                <label for="name" class="mb-3 block text-base font-medium text-[#07074D]">
                  asign another technician
                </label>
                <select name="technician_id" id="technician_id" placeholder="Full Name"
                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" required>
                    @foreach ($technicians as $technician)
                        <option value="{{ $technician->id }}" {{ $appointment->technician_id == $technician->id ? 'selected' : '' }}>{{ $technician->user->name }}</option>
                    @endforeach
                </select>
            </div>


            <div class="mb-5">
                <label for="name" class="mb-3 block text-base font-medium text-[#07074D]">
                    Status
                </label>
                <select name="status" id="status" placeholder="Full Name"
                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" required>
                    <option disabled selected value> -- select an option -- </option>
                    <option class="" value="requested" {{ $appointment->status == 'requested' ? 'selected' : '' }}>Requested</option>
                    <option value="confirmed" {{ $appointment->status == 'confirmed' ? 'selected' : '' }}>Confirmed</option>
                    <option value="cancelled" {{ $appointment->status == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                </select>
            </div>

            @endif

            
            @if(Auth:: user()->hasRole('technician'))

            {{-- COMPLETED STATUS FOR THE TECHNICIAN  --}}

        <div class="mb-5">
            <label for="name" class="mb-3 block text-base font-medium text-[#07074D]">
               Appointement Status
            </label>    
            <select name="status" id="status" placeholder="Full Name"
                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" required>
                <option value="completed" {{ $appointment->status == 'completed' ? 'selected' : '' }}>Completed</option>
            </select>
        </div>

        <div class="mb-5">
            <label for="name" class="mb-3 block text-base font-medium text-[#07074D]">
             service price 
            </label> 
            <input type="number" name="amount" id="amount" value="{{ $appointment->service->price }}"  disabled
                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" >   
           
        </div>

        <div class="mb-5">
            <label for="name" class="mb-3 block text-base font-medium text-[#07074D]">
             extra_charges
            </label> 
            <input type="number" name="extra_charges" id="amount" placeholder="extra_charges"
                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" >   
        </div>

        <div class="mb-5">
            <label for="name" class="mb-3 block text-base font-medium text-[#07074D]">
                paid_at
            </label> 
            <input type="datetime-local" name="paid_at" id="paid_at" placeholder="paid_at"
                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" >   
        </div>

        

        <div class="mb-5">
            <label for="note" class="mb-3 block text-base font-medium text-[#07074D]">
                note
            </label> 
            <textarea type="description" name="note" id="note" placeholder="appointement description here"
                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" ></textarea>  
        </div>

        <div class="mb-5">
            <label for="note" class="mb-3 block text-base font-medium text-[#07074D]">
                payment methode
            </label> 
            <select type="datetime-local" name="method" id="methode" placeholder="methode"
                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" >   

                <option value="cash" >cash</option>
                <option value="card" >card</option>
            </select>
        </div>

        

        <div class="mb-5">
            <label for="note" class="mb-3 block text-base font-medium text-[#07074D]">
                payment status
            </label> 
            <select type="datetime-local" name="payment_status" id="payment_status" 
                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" >   

                <option value="pending" >pending</option>
                <option value="paid" >paid</option>
                <option value="refunded" >refunded</option>
                <option value="failed" >failed</option>
               

            </select>
        </div>
        

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

<div class="flex flex-col items-center justify-center h-[60vh]"
    <div class="text-center">
        <h1 class="text-4xl  font-bold font-heading tracking-px-n text-[#07074D]">This appointement is {{ $appointment->status }} </h1>
        {{-- button --}}
       <a href="{{ route('appointments.index') }}" class="mt-5 inline-block py-3 px-8 rounded-md bg-[#6A64F1] text-base font-semibold text-white">Back to Appointements</a>
    </div>
</div>
@endif

@include('components.footer')
@endsection


