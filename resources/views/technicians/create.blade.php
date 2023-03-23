@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Add technisian</h1>

                @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="{{ route('tech.store') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
                    </div>

                    <div class="form-group">
                        <label for="email">email:</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
                    </div>

                    <div class="form-group">
                        <label for="name">password:</label>
                        <input type="password" class="form-control" id="password" name="password" value="{{ old('password') }}" required>
                    </div>

                    <div class="form-group">
                        <label for="name">password_confirmation:</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" value="{{ old('password_confirmation') }}" required>
                    </div>

                    <div class="form-group">
                        <label for="qualification">qualification:</label>
                        <input type="text" class="form-control" id="qualification" name="qualification" value="{{ old('qualification') }}" required>
                    </div>

                    <div class="form-group">
                        <label for="phone_number">phone_number:</label>
                        <input  class="form-control" id="phone_number" name="phone_number" value="{{ old('phone_number') }}" required>
                    </div>

                    <div class="form-group">
                        <label for="address">city:</label>
                    <select name="city_id" class="form-control mb-3">
                        @foreach ($cities as $city)
                            <option value="{{ $city->id }}">{{ $city->name }}</option>
                        @endforeach
                    </select>
                    </div>
                   
                    <div class="form-group">
                        <label for="years_of_experience">years_of_experience:</label>
                        <input type="number" class="form-control" id="years_of_experience" name="years_of_experience" value="{{ old('years_of_experience') }}" required>                                                                  
                    </div>
                    
                    <div class="form-group">
                        <label for="image">Image:</label>
                        <input type="file" class="form-control" id="image" name="image" multiple >
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection