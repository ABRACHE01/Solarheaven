<?php

namespace App\Http\Controllers;
use App\Models\Client;
use Illuminate\Http\Request;
use App\Models\User;

class ClientController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        
        $this->middleware('can:all-clients')->only(['index']);
        $this->middleware('can:show-client')->only(['show']);
        $this->middleware('can:delete-client')->only(['destroy']);
    }
    public function index()
    {
        $users = Client::with('user')->latest()->paginate(10);
        return view('clients.index', compact('users'));
    }

    public function show(Request $request, $id)
    {
        $client= client::with('user')->find($id);
        return view('clients.show', compact('client'));
    }
    
    public function destroy(Request $request, $id)
    {
        $client = Client::find($id);
        $client->delete();
       
        return redirect()->route('clients.index');
    }

}
