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
            'address' => 'required',
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
            'address' => $request->address,
            'city_id' => $request->city_id,
            'start_time' => $request->start_time,
            'admin_id' => $request->admin_id,
        ]);
    
        //relate the appointment with the payment
        $appointment->payments()->create([
            'appointment_id' => $appointment->id,
            // 'amount' => $appointment->service->price,
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

            $appointment->payments()->create([
                'appointment_id' => $appointment->id,
                'amount' => $appointment->service->price,
                'extra_charges' => $request->extra_charges,
                'paid_at' => $request->paid_at,
                'note' => $request->note,
                'method' =>$request->method,
                'status' => $request->payment_status,
            ]);

        }

        //if status is canceled  changed
        if($appointment->status == 'canceled'){

            $appointment->update(['admin_id' => auth()->user()->admin->id]);
        }
    
        return redirect()->route('appointments.index');
    }

    public function destroy(Appointment $appointment)
    {
        $appointment->delete();
        return redirect()->route('appointments.index');
    }

}
