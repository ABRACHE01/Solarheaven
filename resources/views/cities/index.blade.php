

@extends('layouts.sec')


@section('content')

@include('components.authnavbar')


<body class="">
  <!-- Container -->
  <div class="container mx-auto  px-4 py-20">
    <div class="flex justify-center px-6 my-12 ">
      <!-- Row -->
      <div class="w-full xl:w-3/4 lg:w-11/12 flex border border-gray-200 rounded-lg shadow-lg">
        <!-- Col -->
        <div
          class="w-full h-auto bg-gray-400 hidden lg:block lg:w-1/2 bg-cover rounded-l-lg"
          style="background-image: url('img/solar6.jpg')"
        ></div>
        <!-- Col -->
        <div class="w-full lg:w-1/2 bg-white p-5 rounded-lg lg:rounded-l-none">
          <div class="px-8 mb-4 text-center">
            <h3 class="pt-4 mb-2 text-2xl font-bold">Cities we cover</h3>
            <p class="mb-4 text-sm text-green-700 font-bold">
              add a city that you wanna add to our list of cities we cover
            </p>
          </div>
          <div class="px-8 pt-6 pb-8 mb-4 bg-white rounded">
            <div class="mb-6">
              <!-- Add City -->
              <form method="POST" action="{{ route('cities.store') }}" class="flex items-center">
                @csrf
        
                <div>
                  <input type="text" name="name" id="city_name"  class="w-full  rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">
                </div>
                <button type="submit" class="py-3 m-3 px-4 inline-flex justify-center items-center gap-2 hover:shadow-form  rounded-md bg-[#6A64F1]  text-center text-base font-semibold text-white outline-none" >
                  add city 
                </button>  
                            
              </form>
            </div>
            <div class="mb-6">
              <!-- Display Cities -->
              <select name="city" class="w-full  rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">
                @foreach ($cities as $city)
                <option value="{{ $city->id }}">{{ $city->name }}</option>
                @endforeach
              </select>
            </div>
    
            <div class="mb-6">
              <!-- Delete City -->
              <form method="POST" action="{{ route('cities.destroy', $city->id) }}">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Are you sure you want to delete this city?')" class="py-3 m-3 px-4 inline-flex justify-center items-center gap-2 hover:shadow-form  rounded-md bg-red-500  text-center text-base font-semibold text-white outline-none" > Delete City</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

@include('components.footer')

@endsection