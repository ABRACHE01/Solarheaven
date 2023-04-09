<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\Service;
use App\Models\Technician;
use App\Models\City;
use App\Models\Client;
use App\Models\Payment;


class AppointementController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

        $this->middleware('can:all-appointments')->only(['index']);
        // $this->middleware('can:create-appointment')->only(['create', 'store']);
        // $this->middleware('can:show-appointment')->only(['show']);
        // $this->middleware('can:update-appointment')->only(['edit', 'update']);
        $this->middleware('can:delete-appointment')->only(['destroy']);

    }
    public function index()
    {
        
        $appointments = Appointment::with('client','technician', 'service','payments')->get();
        return view('appointments.index', compact('appointments'));
    }

    public function create($service)
    {
        // get the service
        $service = Service::find($service);
        // get all available technicians
        $technicians = Technician::all();
        // get all available cities
        $cities = City::all();
        //get all clients 
        $clients = Client::all();

        return view('appointments.create', compact('service', 'technicians', 'cities', 'clients'));
    }

    public function reserveByTech($technician)
    {
        // get the technician
        $technician = Technician::find($technician);
        // get all available services
        $services = Service::all();
        // get all available cities
        $cities = City::all();
        //get all clients 
        $clients = Client::all();

        return view('appointments.create', compact('technician', 'services', 'cities', 'clients'));
    }
  

    public function store(Request $request)
    {
        $appointment = Appointment::create($request->all());

        //relate the appointment with the payment
        $appointment->payments()->create([
            'amount' => $appointment->service->price,
            'status' => 'pending',
            'paid_at' =>' 2023-04-06 08:52:13' ,
        ]);
        return redirect()->route('appointments.index');


    }

    public function show(Appointment $appointment)
    {
        $appointment->load('client', 'technician', 'service');
        return view('appointments.show', compact('appointment'));
    }

    public function edit(Appointment $appointment)
    {
        // get all available services
        $services = Service::all();
        return view('appointments.edit', compact('appointment', 'services'));
    }

    public function update(Request $request, Appointment $appointment)
    {
        $appointment->update($request->all());
        if($request->has('status') && $request->status == 'confirmed'){

            $appointment->update([ 'admin_id' => auth()->user()->id ]);
        }
        
        return redirect()->route('appointments.index');
    }

    public function destroy(Appointment $appointment)
    {
        $appointment->delete();
        return redirect()->route('appointments.index');
    }

}
