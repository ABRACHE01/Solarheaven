<!-- resources/views/appointment-histories/index.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Appointment Histories for {{ $appointment->id }}</h1>
    <hr>
    <div class="row">
        <div class="col-md-8">
            <table class="table">
                <thead>
                    <tr>
                        <th>Reason</th>
                        <th>Status</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($appointmentHistories as $history)
                    <tr>
                        <td>{{ $history->reason }}</td>
                        <td>{{ $history->status }}</td>
                        <td>{{ $history->created_at->format('d M Y H:i') }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Add Appointment History
                </div>
                <div class="card-body">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form method="POST" action="{{ route('appointment-histories.store', ['appointment' => $appointment->id]) }}">
                        @csrf
                        
                        <div class="form-group">
                            <label for="appointment_id">Appointment ID:</label>
                            <input type="text" class="form-control" id="appointment_id" name="appointment_id" value="{{ $appointment->id }}" readonly>
                        </div>
                     
                        <div class="form-group">
                            <label for="reason">Reason:</label>
                            <textarea class="form-control" id="reason" name="reason" rows="3">{{ old('reason') }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="status">Status:</label>
                            <select class="form-control" id="status" name="status">
                                <option value="rescheduled" {{ old('status') === 'rescheduled' ? 'selected' : '' }}>Rescheduled</option>
                                <option value="cancelled" {{ old('status') === 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Add Appointment History</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
