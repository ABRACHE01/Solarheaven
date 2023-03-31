@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create Appointment</h1>

    <a href="{{ route('appointments.index') }}" class="btn btn-primary">Back to Appointments</a>

    <hr>
<form method="POST" action="{{ route('appointments.store') }}">
    @csrf

    <div class="row mb-3">
        <div class="col-md-4">
            <label for="client_id" class="form-label">Client</label>
            <select name="client_id" id="client_id" class="form-select">
                @foreach ($clients as $client)
                    <option value="{{ $client->id }}">{{ $client->user->name }}</option>
                @endforeach
            </select>
        </div>

        
        <div>
            <label for="service_id" class="form-label">Service</label>
            <select name="service_id" id="service_id" class="form-select">
                @foreach ($services as $service)
                    <option value="{{ $service->id }}">{{ $service->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="col-md-4">
            <label for="technician_id" class="form-label">Technician</label>
            <select name="technician_id" id="technician_id" class="form-select">
                @foreach ($technicians as $technician)
                    <option value="{{ $technician->id }}">{{ $technician->name }}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-6">
            <label for="start_time" class="form-label">Start Time</label>
            <input type="datetime-local" name="start_time" id="start_time" class="form-control">
        </div>
        <div class="col-md-6">
            <label for="end_time" class="form-label">End Time</label>
            <input type="datetime-local" name="end_time" id="end_time" class="form-control">
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-4">
            <label for="city_id" class="form-label">City</label>
            <select name="city_id" id="city_id" class="form-select">
                @foreach ($cities as $city)
                    <option value="{{ $city->id }}">{{ $city->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-4">
            <label for="status" class="form-label">Status</label>
            <select name="status" id="status" class="form-select">
                <option value="requested">Requested</option>
                <option value="confirmed">Confirmed</option>
                <option value="completed">Completed</option>
                <option value="cancelled">Cancelled</option>
            </select>
        </div>
        
    </div>


    <button type="submit" class="btn btn-primary">Create Appointment</button>
</form>
@endsection




