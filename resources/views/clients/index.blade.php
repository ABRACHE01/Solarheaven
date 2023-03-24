
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>SolarHaven Clinets</h1>
            @if(session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif

                <table class="table align-middle mb-0 bg-white">
                  @php
                  $i=0;
              @endphp
                  <thead class="bg-light">
                    <tr>
                      <th>#</th>
                      <th>Client</th>
                      <th>Phone</th>
                      <th>City</th>
                      <th>seence</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($users as $user)
                    <tr>
                      <td class=" text-muted fw-bold m-2">{{ ++$i }}</td>
                      <td>
                        <div class="d-flex align-items-center">
                          <img
                              src="{{ $user->image ? asset('images/usersImages/'.$user->image): asset('images/staticpictures/client.png') }}" 
                              alt="user image"
                              style="width: 45px; height: 45px"
                              class="rounded-circle"
                              />
                          <div class="ms-3">
                            <p class="fw-bold mb-1">{{ $user->name }}</p>
                            <p class="text-muted mb-0">{{ $user->email }}</p>
                          </div>
                        </div>
                      </td>
                      <td>{{ $user->phone_number}}</td>
                      
                      {{-- @if ($user && $user->client && $user->city) --}}
                      @if ($user && $user->city)
                                <td><span class="badge badge-success rounded-pill d-inline">{{ $user->city->name }}</span></td>
                                @else
                                <td><span class="badge badge-danger rounded-pill d-inline">No city found</span></td>
                                @endif
                      <td class="text-success">{{ $user->created_at->diffForhumans() }}</td>
                      <td>
                        <div class="d-flex">
                          <button class="btn btn-primary btn-sm btn-rounded"><a href="{{ route('clients.show', $user->id) }}" class="text-decoration-none text-white"><i class="fa fa-eye "></i></a></button>
                      
                          <form action="{{ route('clients.destroy', $user->id) }}" method="POST" >
                              {{ csrf_field() }}
                              {{ method_field('DELETE') }}
                              <button type="submit" class="btn btn-danger btn-sm btn-rounded"><i class="fa fa-trash"></i></button>
                          </form>
                        </div>  
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                  <h3 class=" card-footer p-2"> Clients:{{$i}}</h3>
                </table>
                
                
@endsection