<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\User;


use Illuminate\Http\Request;

class CityController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:create-city')->only(['create', 'store']);
        $this->middleware('can:delete-city')->only(['destroy']);
    }
    public function index()
    {
        $cities = City::all();
        return view('cities.index',compact('cities'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $city = City::create([
            'name' => $request->name,
            'country_id' => $request->country_id,
        ]);

        return redirect()->route('cities.index')->with('success', 'City created successfully');
    }
    public function show(City $city)
    {
        return view('cities.index', compact('city'));
    }
    public function destroy(City $city)
    {
        $city->delete();
        return redirect()->route('cities.index')->with('success', 'City deleted successfully');
    }
    public function sort_by_city($id)
    {
        $city = City::find($id);

        if (!$city) {
            abort(404, 'City not found');
        }

        $city_id = $city->id;
       
        //filter technicians by city by spatie roles

        $technicians = User::role('technician')->where('city_id', $city_id)->get();

        return view('cities.sort_by_city', compact('technicians'))->with('city', $city);
   }

    
}