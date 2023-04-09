<?php

namespace App\Http\Controllers;
use App\Models\Review;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Appointment;

class ReviewController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $reviews = Review::with('appointment')->get();
       
        return view('reviews.index', ['reviews' => $reviews]); 
    }

    public function show(Review $review)
    {
        $review = Review::with('appointment')->find($review->id);
        return view('reviews.show', ['review' => $review]);
    }

    public function create()
    {;
        $appointments = Appointment::all();
        return view('reviews.create',compact('appointments'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'appointment_id' => 'required',
            'comment' => 'required',
            'rating' => 'required',
        ]);
        $review = Review::create($validatedData);
        return redirect()->route('reviews.show', ['review' => $review->id])
                         ->with('message', 'Review created successfully');
    }

    public function edit(Review $review)
    {
        return view('reviews.edit', ['review' => $review]);
    }

    public function update(Request $request, Review $review)
    {
        $validatedData = $request->validate([
            'comment' => 'required',
            'rating' => 'required',
        ]);
      
        $review->update($validatedData);
        return redirect()->route('reviews.show', ['review' => $review->id])
                         ->with('message', 'Review updated successfully');
    }

    public function destroy(Review $review)
    {
        $review->delete();
        return redirect()->route('reviews.index')
                         ->with('message', 'Review deleted successfully');
    }

}
