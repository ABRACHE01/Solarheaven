<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Technician;
use App\Models\User;
use App\Models\City;
use Illuminate\Foundation\Auth\User as AuthUser;

class TechnicianController extends Controller
{

    public function __construct()
    {
        // $this->middleware('auth');

        $this->middleware('can:create-technician')->only(['create', 'store']);
        $this->middleware('can:delete-technician')->only(['destroy']);
    }
    
    public function index()
    {
        $cities = City::all();
        $technicians = Technician::with('user')->latest()->paginate(10);
        return view('technicians.index', compact('technicians', 'cities'));

    }

    public function show(Request $request, $id)
    {
        $technician = Technician::with('user')->find($id);
     // this specific technician's appointments
        $appointments = Appointment::where('technician_id', $id)->get();
       
        return view('technicians.show', compact('technician', 'appointments'));
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
            $image_name = 'technician.png';
        }

        

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => hash::make($request->password),
            'phone_number' => $request->phone_number,
            'image' => $image_name,
            'city_id' => $request->city_id,
        ]);

         $user->assignRole('technician');


        $technician = Technician::create([
            'qualification' => $request->qualification,
            'years_of_experience' => $request->years_of_experience,
            'bio' => $request->bio ?? 'No bio',
            'user_id' => $user->id,
            'years_of_experience' => $request->years_of_experience,
        ]);

        user::where('id', $user->id)->update(['technician_id' => $technician->id]);

        return redirect()->route('tech.index')->with('success', 'Technician created successfully');
        
   
    }

    public function edit(Request $request, $id)
    {
        $technician = Technician::with('user')->find($id);
        return view('technicians.edit', compact('technician'));
    }

    public function destroy(Request $request, $id)
    {
        $technician = Technician::find($id);
        $technician->delete();
        return redirect()->route('tech.index')->with('error', 'Technician deleted successfully');
    }
    
}

