@extends('layouts.app')
@section('content')

  <div class="card mx-auto m-5 " style="width: 50%;" >

  <a href="{{ route('tech.index') }}" class="btn btn-info text-white">back</a>
  <h2 class="card-header text-center">Technician Card</h2>
  <div class="card-body">

        <div class="card-body row ">
          <div class="col-5">
            <img src="{{ asset('images/usersImages/' . $technician->user->image ) }}" alt="" style="width: 80%; " class="rounded-circle" />

          </div>
            <div class="col-7 ">
              <p class="fw-bold mb-1 h3">{{ $technician->user->name }}</p>
              <p class="text-muted mb-4 h5">{{ $technician->user->email }}</p>
              <p class="fw-bold mb-2 h5">Phone number : <span class="text-muted">{{ $technician->user->phone_number}}</span></p>
              <p class="fw-bold mb-2 h5">Qualification :<span class="text-muted"> {{ $technician->qualification }}</span> </p>
              <p class="fw-bold mb-2 h5">City :<span class="text-muted"> {{ $technician->user->city->name }}</span> </p>
              <p class="fw-bold mb-2 h5">Years of experience :<span class="text-muted">{{ $technician->years_of_experience }}</span></p>
              <p class="fw-bold mb-2 h5">Bio :<span class="text-muted">{{ $technician->bio }}</span></p>
            </div>
           
        </div>
  </div>
</div>


 
@endsection