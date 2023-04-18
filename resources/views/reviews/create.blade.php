@extends('layouts.sec')

@section('content')
<style>
      .rating {
        float:left;
    }

    /* :not(:checked) is a filter, so that browsers that don’t support :checked don’t 
      follow these rules. Every browser that supports :checked also supports :not(), so
      it doesn’t make the test unnecessarily selective */
    .rating:not(:checked) > input {
        position:absolute;
        top:-9999px;
        clip:rect(0,0,0,0);
    }

    .rating:not(:checked) > label {
        float:right;
        width:1em;
        padding:0 .1em;
        overflow:hidden;
        white-space:nowrap;
        cursor:pointer;
        font-size:200%;
        line-height:1.2;
        color:#ddd;
        text-shadow:1px 1px #bbb, 2px 2px #666, .1em .1em .2em rgba(0,0,0,.5);
    }

    .rating:not(:checked) > label:before {
        content: '★ ';
    }

    .rating > input:checked ~ label {
        color: #f70;
        text-shadow:1px 1px #c60, 2px 2px #940, .1em .1em .2em rgba(0,0,0,.5);
    }

    .rating:not(:checked) > label:hover,
    .rating:not(:checked) > label:hover ~ label {
        color: gold;
        text-shadow:1px 1px goldenrod, 2px 2px #B57340, .1em .1em .2em rgba(0,0,0,.5);
    }

    .rating > input:checked + label:hover,
    .rating > input:checked + label:hover ~ label,
    .rating > input:checked ~ label:hover,
    .rating > input:checked ~ label:hover ~ label,
    .rating > label:hover ~ input:checked ~ label {
        color: #ea0;
        text-shadow:1px 1px goldenrod, 2px 2px #B57340, .1em .1em .2em rgba(0,0,0,.5);
    }

    .rating > label:active {
        position:relative;
        top:2px;
        left:2px;
    }

    /* end of Lea's code */

    /*
    * Clearfix from html5 boilerplate
    */

    .clearfix:before,
    .clearfix:after {
        content: " "; /* 1 */
        display: table; /* 2 */
    }

    .clearfix:after {
        clear: both;
    }

    /*
    * For IE 6/7 only
    * Include this rule to trigger hasLayout and contain floats.
    */

    .clearfix {
        *zoom: 1;
    }

    /* my stuff */
    #status, button {
        margin: 20px 0;
    }
</style>
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
            <span class="text-lg text-gray-800">How was quality of the service with <span class="text-green-500" >{{ $appointments->technician->user->name }}</span>?</span>
           

          <form action="{{ route('reviews.store') }}" method="POST">
              @csrf
              <div class="form-group">
                <input type="hidden" name="appointment_id"  value="{{ $appointments->id }} ">
              </div>
              <div id="status"></div>
              <div id="ratingForm">
                  <fieldset class="rating" name="rating" >
                      <input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="Rocks!">5 stars</label>
                      <input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="Pretty good">4 stars</label>
                      <input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="Meh">3 stars</label>
                      <input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="Kinda bad">2 stars</label>
                      <input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="Sucks big time">1 star</label>
                  </fieldset>
                  <div class="clearfix"></div>
                 
                </div>
          </div>
          <div class="w-3/4 flex flex-col">
            <textarea rows="3" name="comment" class="p-4 text-gray-500 rounded-xl resize-none">{{ old('comment') }}</textarea>
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
  <style>
    $(document).ready(function() {
    $("form#ratingForm").submit(function(e) 
    {
        e.preventDefault(); // prevent the default click action from being performed
        if ($("#ratingForm :radio:checked").length == 0) {
            $('#status').html("nothing checked");
            return false;
        } else {
            $('#status').html( 'You picked ' + $('input:radio[name=rating]:checked').val() );
        }
    }
  </style>
  @include('components.footer')



@endsection
