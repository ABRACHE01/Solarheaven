{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Cities') }}</div>

                <div class="card-body">
                    <!-- Add City -->
                <form method="POST" action="{{ route('cities.store') }}" class="form-inline mb-3">
                    @csrf
                    <div class="form-group mr-2">
                        <label for="city_name" class="mr-2">City Name:</label>
                        <input type="text" name="name" id="city_name" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Add City</button>
                </form>
                <!-- Display Cities -->
                <select name="city" class="form-control mb-3">
                    @foreach ($cities as $city)
                        <option value="{{ $city->id }}">{{ $city->name }}</option>
                    @endforeach
                </select>

                <!-- Delete City -->
                <form method="POST" action="{{ route('cities.destroy', $city->id) }}" class="mb-3">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Are you sure you want to delete this city?')" class="btn btn-danger">Delete City</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}


@extends('layouts.sec')


@section('content')

@include('components.authnavbar')


<body class=" bg-gray-200">
  <!-- Container -->
  <div class="container mx-auto  px-4 py-20">
    <div class="flex justify-center px-6 my-12">
      <!-- Row -->
      <div class="w-full xl:w-3/4 lg:w-11/12 flex">
        <!-- Col -->
        <div
          class="w-full h-auto bg-gray-400 hidden lg:block lg:w-1/2 bg-cover rounded-l-lg"
          style="background-image: url('img/solar6.jpg')"
        ></div>
        <!-- Col -->
        <div class="w-full lg:w-1/2 bg-white p-5 rounded-lg lg:rounded-l-none">
          <div class="px-8 mb-4 text-center">
            <h3 class="pt-4 mb-2 text-2xl">Cities we cover</h3>
            <p class="mb-4 text-sm text-gray-700">
              add a city that you wanna add to our list of cities we cover
            </p>
          </div>
          <div class="px-8 pt-6 pb-8 mb-4 bg-white rounded">
            <div class="mb-6">
              <!-- Add City -->
              <form method="POST" action="{{ route('cities.store') }}" class="flex items-center">
                @csrf
        
                <div>
                  <input type="text" name="name" id="city_name" class="form-input border rounded-md py-2 px-3 w-full focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                </div>
                <button type="submit" class="py-3 m-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
                  add city 
                </button>  
                            
              </form>
            </div>
            <div class="mb-6">
              <!-- Display Cities -->
              <select name="city" class="form-select border rounded-md py-2 px-3 w-full focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
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
                <button type="submit" onclick="return confirm('Are you sure you want to delete this city?')" class="btn btn-danger bg-red-500 hover:bg-red-600 text-white py-2 px-4 rounded-md">Delete City</button>
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