@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th>Client Name</th>
                                <th>Technician Name</th>
                                <th>Service</th>
                                <th>Location</th>
                                <th>Start Time</th>
                                <th>End Time</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($appointments as $appointment)
                                <tr>
                                    <td>{{ $appointment->client->user->name }}</td>
                                    <td>{{ $appointment->technician->user->name }}</td>
                                    <td>{{ $appointment->service->name }}</td>
                                    <td>{{ $appointment->localisation }}, {{ $appointment->city->name }}</td>
                                    <td>{{ $appointment->start_time }}</td>
                                    <td>{{ $appointment->end_time }}</td>
                                    <td>{{ $appointment->status }}</td>
                                    <td>
                                        <a href="{{ route('appointments.show', $appointment->id) }}" class="btn btn-sm btn-primary">View</a>
                                        <a href="{{ route('appointments.edit', $appointment->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                        <form action="{{ route('appointments.destroy', $appointment->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
         
        </div>
    </div>
</div>


@endsection