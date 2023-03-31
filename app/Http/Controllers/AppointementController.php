<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\Service;
use App\Models\Technician;
use App\Models\City;
use App\Models\Client;


class AppointementController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

        $this->middleware('can:all-appointments')->only(['index']);
        $this->middleware('can:create-appointment')->only(['create', 'store']);
        $this->middleware('can:show-appointment')->only(['show']);
        $this->middleware('can:update-appointment')->only(['edit', 'update']);
        $this->middleware('can:delete-appointment')->only(['destroy']);

    }
    public function index()
    {
        $appointments = Appointment::with('client', 'technician', 'service')->get();
        return view('appointments.index', compact('appointments'));
    }

    public function create()
    {
        // get all available services
        $services = Service::all();
        // get all available technicians
        $technicians = Technician::all();
        // get all available cities
        $cities = City::all();
        //get all clients 
        $clients = Client::all();

        return view('appointments.create', compact('services', 'technicians', 'cities', 'clients'));
    }

    public function store(Request $request)
    {
        $appointment = Appointment::create($request->all());
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

        return redirect()->route('appointments.index');
    }

    public function destroy(Appointment $appointment)
    {
        $appointment->delete();
        return redirect()->route('appointments.index');
    }
}
