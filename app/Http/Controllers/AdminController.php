<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\User;
use App\Models\City;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;


class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        
    }
    
    public function index()
    {

        $admins = Admin::with('user')->latest()->paginate(10);
        return view('admins.index', compact('admins'));

    }

    public function show(Request $request, $id)
    {
        $admin = Admin::with('user')->find($id);
        return view('admins.show', compact('admin'));
    }

    public function create()
    {
        $cities = City::all();
        return view('admins.create', compact('cities'));
    
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
            $image_name = 'admin.png';
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'image' => $image_name,
            'city_id' => $request->city_id,
            'phone_number' => $request->phone_number,
        ]);

        $user->assignRole('admin');

        $admin = Admin::create([
            'user_id' => $user->id,
        ]);

        User::where('id', $user->id)->update([
            'admin_id' => $admin->id,
        ]);

        return redirect()->route('admins.index')->with('success', 'Admin created successfully');

    }

    


    public function destroy(Request $request, $id)
    {
        $admin = Admin::find($id);
        $admin->delete();
        return redirect()->route('admins.index')->with('success', 'Admin deleted successfully');
    }
}
