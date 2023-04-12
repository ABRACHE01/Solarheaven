<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\Service;
use App\Models\Technician;
use App\Models\City;
use App\Models\Client;
use App\Models\User;
use App\Models\Admin;
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


        if(auth()->user()->hasRole('technician')){  

        $techappointments = Appointment::where('technician_id', auth()->user()->technician->id)->get();

        }else{

            $techappointments = null;

        }

        if(auth()->user()->hasRole('client')){  
     
            $clientappointments = Appointment::where('client_id', auth()->user()->client->id)->get();
            }else{
                $clientappointments = null;
            }

        return view('appointments.index', compact('appointments', 'techappointments', 'clientappointments'));
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
        $request->validate([
            'client_id' => 'required',
            'service_id' => 'required',
            'technician_id' => 'required',
            'city_id' => 'required',
            'start_time' => 'required|date|after_or_equal:tomorrow',
        ], [
            'start_time.after_or_equal' => 'The appointment date must be after tomorrow.',
        ]);
        

        //tech availability
        $tech = Technician::find($request->technician_id);
        $tech_appointments = $tech->appointments;
        foreach ($tech_appointments as $appointment) {
            if ($appointment->start_time == $request->start_time) {
                return redirect()->back()->with('error', 'The technician is not available at this time.');
            }
        }
        //create the appointment
        $appointment = Appointment::create([
            'client_id' => $request->client_id,
            'service_id' => $request->service_id,
            'technician_id' => $request->technician_id,
            'city_id' => $request->city_id,
            'start_time' => $request->start_time,
            'admin_id' => $request->admin_id,
        ]);
    
        //relate the appointment with the payment
        $appointment->payments()->create([
            'amount' => $appointment->service->price,
        ]);
        return redirect()->route('appointments.index');
    }

    public function show(Appointment $appointment)
    {
        $appointment->load('client', 'technician', 'service');
        return view('appointments.show', compact('appointment'));
    }

    // public function confirm(Request $request)
    // {
    //     // Get the appointment ID from the input request
    //     $appointment_id = $request->input('appointment_id');
    
    //     // Find the appointment record in the database
    //     $appointment = Appointment::find($appointment_id);
    
    //     // Check if the appointment was found in the database
    //     if (!$appointment) {
    //         return redirect()->back()->withErrors(['Appointment not found']);
    //     }
    
    //     // Update the appointment status to "confirmed" enum value
    //     $appointment->status = 'confirmed';
    
    //     // Update the appointment admin_id to the current authenticated user
    //     $appointment->admin_id = auth()->user()->id;
    
    //     // Save the appointment
    //     $appointment->save();
    
    //     // Redirect back to the appointments page
    //     return redirect()->route('appointments.index');
    // }

    public function edit(Appointment $appointment)
    {
        // get all available services
        $technicians = Technician::all();
        $appointment = Appointment::find($appointment->id);

        return view('appointments.edit', compact('appointment', 'technicians'));
    }

    public function update(Request $request, Appointment $appointment)
    {
        $appointment->update($request->all());
    
        //if status is confirmed  changed

        if($appointment->status == 'confirmed' || $appointment->status == 'canceled'){

            $appointment->update(['admin_id' => auth()->user()->admin->id]);
        }

        //if status is completed  changed
        if($appointment->status == 'completed'){

            $appointment->update(['end_time' => now()]);

            $appointment->appointementHistory()->create([
                'client_id' => $appointment->client_id,
                'service_id' => $appointment->service_id,
                'technician_id' => $appointment->technician_id,
                'city_id' => $appointment->city_id,
                'start_time' => $appointment->start_time,
                'end_time' => $appointment->end_time,
                'admin_id' => $appointment->admin_id,
                'status' => $appointment->status,
            ]);

        }

        //if status is canceled  changed
        if($appointment->status == 'canceled'){

            $appointment->appointementHistory()->create([
                'client_id' => $appointment->client_id,
                'service_id' => $appointment->service_id,
                'technician_id' => $appointment->technician_id,
                'city_id' => $appointment->city_id,
                'start_time' => $appointment->start_time,
                'end_time' => $appointment->end_time ?? null,
                'admin_id' => $appointment->admin_id,
                'status' => $appointment->status,
            ]);
        }
    
        return redirect()->route('appointments.index');
    }

    public function destroy(Appointment $appointment)
    {
        $appointment->delete();
        return redirect()->route('appointments.index');
    }

}
