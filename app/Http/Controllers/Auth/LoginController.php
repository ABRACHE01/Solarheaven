<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    // protected function authenticated(Request $request, $user)
    // {
    //     if (Auth::check()) {
    //         $user = Auth::user();
    //         $user->is_active = true; // set is_active to 1 when the user logs in
    //         $user->save();
    //     }
    // }
    
    // protected function loggedOut(Request $request)
    // {
    //     if (Auth::check()) {
    //         $user = Auth::user();
    //         $user->is_active = false; // set is_active to 0 when the user logs out
    //         $user->save();
    //     }
    // }


}