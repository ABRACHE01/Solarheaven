@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    
                    <span class="font-weight-bold">{{Auth::user()->name}} : </span><span class="text-black-50"> {{Auth::user()->email}} </span>
                    <h1 class="Weclome ps-3 p-5 ">Weclome back<span> {{ Auth::user()->name }}</span> !! </h1>
                
                   
                </div>
            </div>
        </div>
    </div>
</div>
   


@endsection
