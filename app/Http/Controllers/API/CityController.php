<?php

namespace App\Http\Controllers\API;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index()
    {
        $cities = City::all();
        return response()->json($cities);
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
        return response()->json([
            'city' => $city,
            'message' => 'City created successfully'
        ], 201);
    }

    public function show(City $city)
    {
        $city = City::find($city->id);
        return response()->json($city);
    }


    public function destroy(City $city)
    {
        $city->delete();
        return response()->json([
            'message' => 'City deleted successfully'
        ], 200);
    }

    public function sort_by_city($id)
    {
        $city =city::find($id);

        if (!$city) {
            return response()->json(['message' => 'City not found'], 404);
        }

        $city_id = $city->id;
        $technicians = User::with('client')->where('city_id', $city_id)->where('role_id', 2)->get();
       
        return response()->json([
            'city' => $city,
            'technisians' =>$technicians,
        ]);
    }
   


}
