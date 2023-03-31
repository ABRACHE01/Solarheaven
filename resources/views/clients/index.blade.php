
@extends('layouts.app')

<style>
  @import url("https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap");
  body {
    background: #f9f9f9;
    font-family: "Roboto", sans-serif;
  }

  .main-content {
    padding-top: 100px;
    padding-bottom: 100px;
  }

  .table {
    border-spacing: 0 15px;
    border-collapse: separate;
  }
  .table thead tr th,
  .table thead tr td,
  .table tbody tr th,
  .table tbody tr td {
    vertical-align: middle;
    border: none;
  }
  .table thead tr th:nth-last-child(1),
  .table thead tr td:nth-last-child(1),
  .table tbody tr th:nth-last-child(1),
  .table tbody tr td:nth-last-child(1) {
    text-align: center;
  }
  .table tbody tr {
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    border-radius: 5px;
  }
  .table tbody tr td {
    background: #fff;
  }
  .table tbody tr td:nth-child(1) {
    border-radius: 5px 0 0 5px;
  }
  .table tbody tr td:nth-last-child(1) {
    border-radius: 0 5px 5px 0;
  }

  .user-info {
    display: flex;
    align-items: center;
  }
  .user-info__img img {
    margin-right: 15px;
    height: 55px;
    width: 55px;
    border-radius: 45px;
    border: 3px solid #fff;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  }

  .active-circle {
    height: 10px;
    width: 10px;
    border-radius: 10px;
    margin-right: 5px;
    display: inline-block;
  }
</style>

@section('content')


                <section class="main-content">
                  <div class="container">
                    <h1>SolarHaven Clients</h1>
                    <br>
                    <br>
              
                    <table class="table">
                      @php
                      $i=0;
                  @endphp
                      <thead>
                        <tr>
                      <th>#</th>
                      <th>Client</th>
                      <th>Status</th>
                      <th>Phone</th>
                      <th>City</th>
                      <th>sence</th>
                      <th>view</th>
                      <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($users as $user)
                        <tr>
                          <td class=" text-muted fw-bold m-2">{{ $i++ }}</td>
                          <td>
                            <div class="user-info">
                              <div class="user-info__img">
                                <img src="{{ $user->image ? asset('images/usersImages/'.$user->image): asset('images/staticpictures/client.png') }}"   style="width: 45px; height: 45px"
                                class="rounded-circle" alt="User Img">
                              </div>
                              <div class="user-info__basic">
                                <p class="fw-bold mb-1">{{ $user->name }}</p>
                                <p class="text-muted mb-0">{{ $user->email }}</p>
                              </div>
                            </div>
                          </td>
                          <td>
                            <span class="active-circle bg-danger"></span> {{ $user->is_active ? 'Active' : 'Not Active' }}
                          </td>
                         
                          <td>{{ $user->phone_number}}</td>
                          @if ($user && $user->city)
                          <td><span class="badge badge-success rounded-pill d-inline">{{ $user->city->name }}</span></td>
                          @else
                          <td><span class="badge badge-danger rounded-pill d-inline">No city found</span></td>
                          @endif
                          <td class="">{{ $user->created_at->diffForhumans() }}</td>
                          
                          {{-- @if ($user &&  $user->client)
                          <td >{{ $user->client->address }}</td>
                          @else
                          <td><span class="badge badge-danger rounded-pill d-inline">Not found</span></td>
                          @endif --}}

                          <td>
                            <button class="btn btn-primary btn-sm btn-rounded"><a href="{{ route('clients.show', $user->id) }}" class="text-decoration-none text-white"><i class="fa fa-eye "></i></a></button>
                          </td>
                          <td>
                            <div class="dropdown open">
                              <a href="#!" class="px-2" id="triggerId1" data-toggle="dropdown" aria-haspopup="true"
                                  aria-expanded="false">
                                    <i class="fa fa-ellipsis-v"></i>
                              </a>
                              <div class="dropdown-menu" aria-labelledby="triggerId1">
                                <form action="{{ route('clients.destroy', $user->id) }}" method="POST" >
                                  {{ csrf_field() }}
                                  {{ method_field('DELETE') }}
                                  <button type="submit" class=" dropdown-item  text-danger"><i class="fa fa-trash mr-1"></i> Delete</button>                     
                              </form>
                              </div>
                            </div>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                      <h3 class=" card-footer p-2"> Clients:{{$i}}</h3>
                    </table>
                  </div>
                </section>

                
                
                
@endsection