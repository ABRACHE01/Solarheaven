<?php

namespace App\Http\Controllers;
use App\Models\Client;
use Illuminate\Http\Request;
use App\Models\User;

class ClientController extends Controller
{
    public function index()
    {
        $users = user::with('client')->where('role_id', 3)->get();
        return view('clients.index', compact('users'));
    }

    public function show(Request $request, $id)
    {
        $client = Client::with('user')->find($id);
        return view('clients.show', compact('client'));
    }



    public function destroy(Request $request, $id)
    {
        $user = user::find($id);
        $user->delete();
       
        return redirect()->route('clients.index');
    }

}
