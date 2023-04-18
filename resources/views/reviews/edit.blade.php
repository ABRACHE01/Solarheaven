


@extends('layouts.sec')

@section('content')

@include('components.authnavbar')
@if ($errors->any())
<div class="alert alert-danger">
  <ul>
    @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif

  <div class="min-h-screen py-6 flex flex-col justify-center sm:py-12">
    <div class="py-3 sm:max-w-xl sm:mx-auto">
      <div class="bg-white min-w-1xl flex flex-col rounded-xl shadow-lg">
        <div class="px-12 py-5">
          <h2 class="text-gray-800 text-3xl font-semibold">Your opinion matters to us!</h2>
        </div>
        <div class="bg-gray-200 w-full flex flex-col items-center">
          <div class="flex flex-col items-center py-6 space-y-3">
            <span class="text-lg text-gray-800">How was quality of the service with <span class="text-green-500" ></span>?</span>
           

          <form action="{{ route('reviews.store') }}" method="POST">
              @csrf
              <div class="form-group">
                <select  class="p-4 text-gray-500 rounded-xl resize-none"  value="{{ $review->rating }}" name="appointment_id" >
                  <option @if($review->rating == 1) selected @endif value="1">1</option>
                  <option @if($review->rating == 2) selected @endif value="2">2</option>
                  <option @if($review->rating == 3) selected @endif value="3">3</option>
                  <option @if($review->rating == 4) selected @endif value="4">4</option>
                  <option @if($review->rating == 5) selected @endif value="5">5</option>
             
                </select>
              </div>
          </div>
          <div class="w-3/4 flex flex-col">
            <textarea rows="3" name="comment" class="p-4 text-gray-500 rounded-xl resize-none" rows="3">{{ $review->comment }}</textarea>
            <button class="py-3 my-8 text-lg bg-gradient-to-r from-purple-500 to-indigo-600 rounded-xl text-white">Rate now</button>
          </div>

      </form>
        </div>
        <div class="h-20 flex items-center justify-center">
          <a href="{{route('home')}}" class="text-gray-600">Maybe later</a>
        </div>
      </div>

    </div>
  </div>

  @include('components.footer')



@endsection
