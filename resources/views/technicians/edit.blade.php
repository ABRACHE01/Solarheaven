@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>update technisian</h1>

                @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="{{ route('tech.update',$technician->id) }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    @method('PUT')

                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $technician->user->name }}" >
                    </div>

                    <div class="form-group">
                        <label for="email">email:</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ $technician->user->email  }}" >
                    </div>


                    <div class="form-group">
                        <label for="qualification">qualification:</label>
                        <input type="text" class="form-control" id="qualification" name="qualification" value="{{ $technician->qualification }}" >
                    </div>

                    
                
                    
                    <div class="form-group">
                        <label for="image">Image:</label>
                        <input type="file" class="form-control" id="image" name="image" multiple>
                    </div>


                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection