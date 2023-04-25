<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Technician;
use App\Models\Admin;
use App\Models\City;
use App\Models\Service;
use App\Models\Review;


class LandingController extends Controller
{
    
    public function index()
    {
        
        $latestTechnicians = Technician::latest()->take(3)->get();
        $latestAdmins = Admin::latest()->take(5)->get();
        $latestServices = Service::latest()->take(5)->get();
        $latestReviews = Review::latest()->take(3)->get();
        $latestCities = City::latest()->take(5)->get();
        return view('welcome', compact('latestTechnicians', 'latestAdmins', 'latestServices', 'latestReviews', 'latestCities'));
        
    }
}
