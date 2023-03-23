
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Technicians</h1>
                <a href="{{ route('tech.create') }}" class="btn btn-success"> <i class="fa fa-plus"></i> Technisian</a>
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
                      <th>Technician</th>
                      <th>Phone</th>
                      <th>Qualification</th>
                      <th>City</th>
                      <th>Bio</th>
                      <th>Created </th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($technicians as $technician)
                    <tr>
                      <td class=" text-muted fw-bold m-2">{{ ++$i }}</td>
                      <td>
                        <div class="d-flex align-items-center">
                          <img
                              src="{{ asset('images/usersImages/' . $technician->user->image ) }}"
                              alt=""
                              style="width: 45px; height: 45px"
                              class="rounded-circle"
                              />
                          <div class="ms-3">
                            <p class="fw-bold mb-1">{{ $technician->user->name }}</p>
                            <p class="text-muted mb-0">{{ $technician->user->email }}</p>
                          </div>
                        </div>
                      </td>
                      <td>{{ $technician->user->phone_number}}</td>
                      <td>
                        <p class="fw-normal mb-1">{{ $technician->qualification}}</p>
                        <p class="text-muted mb-0">{{ $technician->years_of_experience }} years of experience</p>
                      </td>
                      @if ($technician && $technician->user && $technician->user->city)
                                <td><span class="badge badge-success rounded-pill d-inline">{{ $technician->user->city->name }}</span></td>
                                @else
                                <td><span class="badge badge-danger rounded-pill d-inline">No city found</span></td>
                                @endif
                      <td>{{ $technician->bio }}</td>
                      <td class="text-success">{{ $technician->created_at->diffForhumans() }}</td>
                      <td>
                        <div class="d-flex">
                          <button class="btn btn-primary btn-sm btn-rounded"><a href="{{ route('tech.show', $technician->id) }}" class="text-decoration-none text-white"><i class="fa fa-eye "></i></a></button>
                      
                          <form action="{{ route('tech.destroy', $technician->id) }}" method="POST" >
                              {{ csrf_field() }}
                              {{ method_field('DELETE') }}
                              <button type="submit" class="btn btn-danger btn-sm btn-rounded"><i class="fa fa-trash"></i></button>
                          </form>
                        </div>  
                      </td>
                    </tr>
                    @endforeach
                    
                  </tbody>
                  <h3 class=" card-footer p-2"> Technisians:{{$i}}<span> </span></h3>
                </table>
                
@endsection
