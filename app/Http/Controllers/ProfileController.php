<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;
use App\Models\City;
use App\Models\Admin;
use App\Models\Client;
use App\Models\Technician;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($id)
    {
        $cities = City::all();
        $user = User::with('admin','technician','client')->where('id', $id)->first();
        if (!$user) {
            return abort(404);
        }

        return view('profile.index', compact('user', 'cities'));
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'newpassword' => 'nullable|min:8',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg',
            'password' => [
                'required',
                function ($attribute, $value, $fail) {
                    if (!Hash::check($value, Auth::user()->password)) {
                        $fail("The $attribute is incorrect.");
                    }
                },
            ],
        ]);

        //confirmed name in the form must be password_confirmation

        $user = User::findOrFail($id);
        if ($request->hasFile('image')) {
            $imageName = time().'.'.request()->image->getClientOriginalExtension();
            $request->image->move(public_path('images/usersImages'), $imageName);
        
            // delete the old image
            try {
                if (File::exists(public_path('images/usersImages'.$user->image))) {
                    File::delete(public_path('images/usersImages'.$user->image));
                }
            } catch (\Exception $e) {
                dd($e);
            }
        
            $updateData['image'] = $imageName;
        }
        
        $user->name = $request->input('fullname');
        $user->email = $request->input('email');

        if ($request->input('newpassword')) {
            $user->password = bcrypt($request->input('newpassword'));
        }

        $updateData['name'] = $request->input('fullname');
        $updateData['email'] = $request->input('email');
        $updateData['city_id'] = $request->input('city_id');
        $user->update($updateData);

      

        if(Auth::user()->hasRole('admin')){
            $admin = Admin::findOrFail($user->admin->id);
            $admin->bio = $request->input('bio');
            $admin->update();
        }
        if(Auth::user()->hasRole('client')){
            $client = Client::findOrFail($user->client->id);
            $client->address = $request->input('address');
            $client->update();
        }
        if(Auth::user()->hasRole('technician')){
            $technician = Technician::findOrFail($user->technician->id);
            $technician->qualification = $request->input('qualification');
            $technician->years_of_experience = $request->input('years_of_experience');
            $technician->bio = $request->input('bio');
            $technician->update();
        }

        return redirect()->route('profile.index', $user->id)->with('success', 'Profile updated successfully');

    }


    public function destroy($id)
    { 
        $user = user::findOrFail($id);
        $path = public_path('images/usersImages/'.$user->image);

        if ( file_exists($path) && $user->image != null ) {
            unlink($path);
        }

        $user->delete();
        return redirect()->route('login');
    }
}
