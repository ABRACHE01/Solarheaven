





@extends('layouts.sec')

@section('content')

@include('components.authnavbar')

<div class="flex items-center justify-center p-12">
    <!-- Author: FormBold Team -->
    <div class="mx-auto w-full max-w-[550px] bg-white">
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
                    Technician
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
                    <option value="requested" {{ $appointment->status == 'requested' ? 'selected' : '' }}>Requested</option>
                    <option value="confirmed" {{ $appointment->status == 'confirmed' ? 'selected' : '' }}>Confirmed</option>
                    <option value="cancelled" {{ $appointment->status == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                </select>
            </div>

            @endif

            
            @if(Auth:: user()->hasRole('technician'))

            {{-- COMPLETED STATUS FOR THE TECHNICIAN  --}}

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

@include('components.footer')
@endsection


