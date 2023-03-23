<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Technician;
use App\Models\User;
use App\Models\City;

class TechnicianController extends Controller
{

    public function index()
    {

        $technicians = Technician::with('user')->latest()->paginate(10);
        return view('technicians.index', compact('technicians'));

    }

    public function show(Request $request, $id)
    {
        $technician = Technician::with('user')->find($id);
        return view('technicians.show', compact('technician'));
    }

    public function create()
    {
        $cities = City::all();
        return view('technicians.create', compact('cities'));
    
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|confirmed',
        ]);
        
        if($request->hasfile('image'))
        {
        $image = $request->file('image');
        $image_name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('images/usersImages');
        $image->move($destinationPath, $image_name);
        }
        else
        {
            $image_name = 'default.png';
        }

        

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => hash::make($request->password),
            'phone_number' => $request->phone_number,
            'image' => $image_name,
            'role_id' => 2,
            'city_id' => $request->city_id,
        ]);

        

        $technician = Technician::create([
            'qualification' => $request->qualification,
            'years_of_experience' => $request->years_of_experience,
            'bio' => $request->bio ?? 'No bio',
            'user_id' => $user->id,
            'years_of_experience' => $request->years_of_experience,
        ]);

        return redirect()->route('tech.index')->with('success', 'Technician created successfully');
        
   
    }

    public function edit(Request $request, $id)
    {
        $technician = Technician::with('user')->find($id);
        return view('technicians.edit', compact('technician'));
    }

    public function update(Request $request, $id)
    {
        // $request->validate([
        //     'name' => 'required',
        //     'email' => 'required',
        // ]);
        
        // if($request->hasfile('image'))
        // {
        // $image = $request->file('image');
        // $image_name = time().'.'.$image->getClientOriginalExtension();
        // $destinationPath = public_path('images/usersImages');
        // $image->move($destinationPath, $image_name);
        // }
        // else
        // {
        //     $image_name = 'default.jpg';
        // }

        // new User([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'phone' => $request->phone,
        //     'image' => $image_name,
        //     'role_id' => 2,
        // ]);

        // $technician = Technician::find($id);
        // $technician->qualification = $request->qualification;
        // $technician->years_of_experience = $request->years_of_experience;
        // $technician->bio = $request->bio;
        // $technician->save();


        // return redirect()->route('tech.index')->with('success', 'Technician updated successfully');
        
   
    }

    public function destroy(Request $request, $id)
    {
        $technician = Technician::find($id);
        $technician->delete();
        return redirect()->route('tech.index')->with('error', 'Technician deleted successfully');
    }
    
}

