<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;

class ProfileController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
        // if i wanted it to apply in a specific methods in the controller
        //  $this->middleware('auth')->only(['create','edit','update','destroy']);
    //there is a methode like only its name is excepte
    }

    public function index($id)
    {
        $user = User::findOrFail($id);
        return view('profile.index', compact('user'));
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
            $request->image->move(public_path('images'), $imageName);
        
            // delete the old image
            try {
                if (File::exists(public_path('images/'.$user->image))) {
                    File::delete(public_path('images/'.$user->image));
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
        $user->update($updateData);
       
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
