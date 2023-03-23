@extends('layouts.app')

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






@endsection
