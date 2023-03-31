
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Services</h1>
                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Admin</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <a href="{{ route('services.create') }}" class="btn btn-success">Add Service</a>
                        @foreach($services as $service)
                            <tr>
                                <td>{{ $service->name }}</td>
                                <td>{{ $service->description }}</td>
                                <td>{{ $service->price }}</td>
                                <td>{{ $service->admin->user->name }}</td>
                                <td>
                                    @foreach($service->images as $image)
                                    <img src="{{ asset('images/serviceImages/' . $image->url) }}" alt="" width="100">
                                      
                                    @endforeach
                                </td>
                                <td>
                                    <a href="{{ route('services.show', $service->id) }}" class="btn btn-primary">View</a>
                                    <a href="{{ route('services.edit', $service->id) }}" class="btn btn-warning">Edit</a>
                                    <form action="{{ route('services.destroy', $service->id) }}" method="POST" style="display: inline-block;">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
@endsection
