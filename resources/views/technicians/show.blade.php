@extends('layouts.app')
@section('content')

  <div class="card mx-auto m-5 " style="width: 50%;" >

  <a href="{{ route('tech.index') }}" class="btn btn-info">back</a>
  <h2 class="card-header text-center">service PAGE</h2>
  <div class="card-body">

        <div class="card-body">
            <p>{{ $technician->user->name }}</p>
            <p>{{ $technician->user->email }}</p>
            <p>{{ $technician->user->phone_number}}</p>
            <p>{{ $technician->qualification }}</p>
            <p>{{ $technician->years_of_experience }}</p>
            <p>{{ $technician->bio }}</p>
  </div>
  </div>
 </div>
@endsection