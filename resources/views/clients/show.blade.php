@extends('layouts.app')
@section('content')

  <div class="card mx-auto m-5 " style="width: 50%;" >

  <a href="{{ route('clients.index') }}" class="btn btn-info text-white">back</a>
  <h2 class="card-header text-center">Client Card</h2>
  <div class="card-body">

        <div class="card-body row ">
          <div class="col-5">
            <img src="{{ asset('images/usersImages/' . $client->user->image ) }}" alt="" style="width: 80%; " class="rounded-circle" />

          </div>
            <div class="col-7 ">
              <p class="fw-bold mb-1 h3">{{ $client->user->name }}</p>
              <p class="text-muted mb-4 h5">{{ $client->user->email }}</p>
              <p class="fw-bold mb-2 h5">Phone number : <span class="text-muted">{{ $client->user->phone_number}}</span></p>
              <p class="fw-bold mb-2 h5">City :<span class="text-muted"> {{ $client->user->city->name }}</span> </p>   
          
              @if ($client  && $client->address)
              <p class="fw-bold mb-2 h5">Address :<span class="text-muted"> {{ $client->address }}</span> </p>
              @else
              <p><span class="badge badge-danger rounded-pill d-inline">No city found</span></p>
              @endif
          
            </div>
        </div>
  </div>
</div>
@endsection