@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Technicians in {{ $city->name }}</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>ccity</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($technicians as $technician)
                    <tr>
                        <td>{{ $technician->name }}</td>
                        <td>{{ $technician->email }}</td>
                        <td>{{ $technician->phone_number }}</td>
                        <td>{{ $technician->city->name }}</td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection