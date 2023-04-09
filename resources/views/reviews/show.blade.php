

@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1>Review Details</h1>
            <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $review->appointment->name }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">Rating: {{ $review->rating }}</h6>
                <p class="card-text">{{ $review->comment }}</p>
            </div>
            </div>
            <a href="{{ route('reviews.edit', ['review' => $review->id]) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('reviews.destroy', ['review' => $review->id]) }}" method="POST" style="display: inline-block;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
            </form>
      </div>
    </div>
  </div>
@endsection