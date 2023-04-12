@extends('layouts.sec')

@section('content')

@include('components.authnavbar')
    <div class="flex items-center justify-center p-12">
    <!-- Author: FormBold Team -->
    <div class="mx-auto w-full max-w-[550px] bg-white">
        <form method="POST" action="{{ route('admins.store') }}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="mb-5 pt-3">
                <label class="mb-5 block text-base font-semibold text-[#07074D] sm:text-xl">
                    Admin profile Photo
                </label>
                <div class="flex items-center space-x-6">
                    <div class="shrink-0">
                      <img id='preview_img' class="h-20 w-20 object-cover rounded-full" src="{{asset('images/usersImages/admin.png')}}" alt="Current profile photo" />
                    </div>
                    <label class="block">
                      <span class="sr-only">Choose profile photo</span>
                      <input type="file" onchange="loadFile(event)" name="image" class="block w-full text-sm text-slate-500
                        file:mr-4 file:py-2 file:px-4
                        file:rounded-full file:border-0
                        file:text-sm file:font-semibold
                        file:bg-violet-50 file:text-violet-700
                        hover:file:bg-violet-100
                      "/>
                    </label>
                  </div>
            </div>

            <div class="mb-5">
                <label for="name" class="mb-3 block text-base font-medium text-[#07074D]">
                    Full Name
                </label>
                <input type="text" name="name" id="name" placeholder="Full Name" value="{{ old('name') }}" required
                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
            </div>

            <div class="mb-5">
                <label for="email" class="mb-3 block text-base font-medium text-[#07074D]">
                    Email Address
                </label>
                <input type="email" name="email" id="email" placeholder="Enter your email" value="{{ old('email') }}" required
                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
            </div>

            <div class="mb-5">
                <label for="phone_number" class="mb-3 block text-base font-medium text-[#07074D]">
                    Phone Number
                </label>
                <input type="text" name="phone_number" id="phone_number" placeholder="Enter your phone number" value="{{ old('phone_number') }}" required
                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
            </div>

            <div class="mb-5">
                <label for="email" class="mb-3 block text-base font-medium text-[#07074D]">
                    City Name
                </label>
                <select name="city_id"  class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">
                    @foreach ($cities as $city)
                        <option value="{{ $city->id }}">{{ $city->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="-mx-3 flex flex-wrap">
                <div class="w-full px-3 sm:w-1/2">
                    <div class="mb-5">
                            <label for="password" class="mb-3 block text-base font-medium text-[#07074D]">
                               password
                            </label>
                            <input type="password" name="password" id="password" placeholder="Enter your password" required
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                </div>
                <div class="w-full px-3 sm:w-1/2">
                    <div class="mb-5">
                        <label for="password_confirmation" class="mb-3 block text-base font-medium text-[#07074D]">
                           Password confirmation
                        </label>
                        <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Password confirmation" required
                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                </div>
            </div>

           

            <div>
                <button
                    class="hover:shadow-form w-full rounded-md bg-[#6A64F1] py-3 px-8 text-center text-base font-semibold text-white outline-none">
                    New Admin
                </button>
            </div>
        </form>
    </div>
</div>
<script>
    var loadFile = function(event) {
        
        var input = event.target;
        var file = input.files[0];
        var type = file.type;

       var output = document.getElementById('preview_img');


        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function() {
            URL.revokeObjectURL(output.src) // free memory
        }
    };
</script>
@include('components.footer')

@endsection




