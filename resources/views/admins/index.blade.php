
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Admins</h1>
                <a href="{{ route('admins.create') }}" class="btn btn-success"> <i class="fa fa-plus"></i> Admin</a>
                @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

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
                      <th>Admin</th>
                      <th>Phone</th>
                      <th>City</th>
                      <th>Bio</th>
                      <th>Created </th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($admins as $admin)
                    <tr>
                      <td class=" text-muted fw-bold m-2">{{ ++$i }}</td>
                      <td>
                        <div class="d-flex align-items-center">
                          <img
                              src="{{ asset('images/usersImages/' . $admin->user->image ) }}"
                              alt=""
                              style="width: 45px; height: 45px"
                              class="rounded-circle"
                              />
                          <div class="ms-3">
                            <p class="fw-bold mb-1">{{ $admin->user->name }}</p>
                            <p class="text-muted mb-0">{{ $admin->user->email }}</p>
                          </div>
                        </div>
                      </td>
                      <td>{{ $admin->user->phone_number}}</td>
    
                      @if ($admin && $admin->user && $admin->user->city)
                                <td><span class="badge badge-success rounded-pill d-inline">{{ $admin->user->city->name }}</span></td>
                                @else
                                <td><span class="badge badge-danger rounded-pill d-inline">No city found</span></td>
                                @endif
                      <td>{{ $admin->bio }}</td>
                      <td class="text-success">{{ $admin->created_at->diffForhumans() }}</td>
                      <td>
                        <div class="d-flex">
                          <button class="btn btn-primary btn-sm btn-rounded"><a href="{{ route('admins.show', $admin->id) }}" class="text-decoration-none text-white"><i class="fa fa-eye "></i></a></button>
                      
                          <form action="{{ route('admins.destroy', $admin->id) }}" method="POST" >
                              {{ csrf_field() }}
                              {{ method_field('DELETE') }}
                              <button type="submit" class="btn btn-danger btn-sm btn-rounded"><i class="fa fa-trash"></i></button>
                          </form>
                        </div>  
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                  <h3 class=" card-footer p-2"> Technisians:{{$i}}</h3>
                </table>
                
                
@endsection
