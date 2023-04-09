@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Appointments</h1>
    <div class="row justify-content-center mt-4">
        @foreach ($appointments as $appointment)
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $appointment->service->name }}</h5>
                    <p class="card-text">
                        <strong>Client:</strong> {{$appointment->client->user->name}} <br>
                        <strong>Technician:</strong> {{ $appointment->technician->user->name }} <br>
                        <strong>Location:</strong> {{ $appointment->localisation }}, {{ $appointment->city->name }} <br>
                        <strong>Start Time:</strong> {{ $appointment->start_time }} <br>
                        <strong>End Time:</strong> {{ $appointment->end_time }} <br>
                        <strong>Status:</strong> {{ $appointment->status }} <br>
                        <strong>Admin:</strong> {{ $appointment->admin ? $appointment->admin->user->name : '-' }} <br>
                        <strong>service price:</strong> {{ $appointment->service->price }} <br>
                    </p>
                    <p class="card-text">
                        {{-- <strong>amount:</strong> {{ $appointment->payments->first()->amount }} <br>
                        <strong>payment method:</strong> {{ $appointment->payments->first()->method}} <br>
                        <strong>payment method:</strong> {{ $appointment->payments->first()->paid_at}} <br> --}}
                        
                    </p>

                    
                    <div class="d-flex justify-content-end">
                        <a href="{{ route('appointments.show', $appointment->id) }}" class="btn btn-sm btn-primary mr-2">View</a>
                        <a href="{{ route('appointments.edit', $appointment->id) }}" class="btn btn-sm btn-warning mr-2">Edit</a>
                        <form action="{{ route('appointments.destroy', $appointment->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection