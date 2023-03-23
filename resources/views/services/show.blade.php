@extends('layouts.app')
@section('content')

  <div class="card mx-auto m-5 " style="width: 50%;" >

  <a href="{{ route('services.index') }}" class="btn btn-info">back</a>
  <h2 class="card-header text-center">service PAGE</h2>
  <div class="card-body">

        <div class="card-body">
        <h5 class="card-title">Name : {{ $service->name }}</h5>
        @foreach($service->images as $image)
        <img src="{{ asset('images/serviceImages/' . $image->url) }}" alt="" width="100">
        @endforeach
        <p class="card-text">price : {{ $service->price }}</p>
        <p class="card-text">coption : {{ $service->description }}</p>

  </div>
  </div>
 </div>
@endsection