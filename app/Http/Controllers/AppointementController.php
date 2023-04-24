<?php

namespace App\Http\Controllers;

use App\Mail\TestEmail;
use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\Service;
use App\Models\Technician;
use App\Models\City;
use App\Models\Client;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;


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
        $this->middleware('can:show-cancelled-appointments')->only(['canceled']);

    }

    public function index()
    {
        $appointments = Appointment::with('client','technician', 'service','payments')->latest()->paginate(10);


        if(auth()->user()->hasRole('technician')){  

        $techappointments = Appointment::where('technician_id', auth()->user()->technician->id)->latest()->paginate(10);

        }else{

            $techappointments = null;

        }

        if(auth()->user()->hasRole('client')){  
     
            $clientappointments = Appointment::where('client_id', auth()->user()->client->id)->latest()->paginate(10);
            }else{
                $clientappointments = null;
            }

        return view('appointments.index', compact('appointments', 'techappointments', 'clientappointments'));
    }

    //trash appointments
    public function canceled()
    {
        $canceledAppointments = Appointment::onlyTrashed()->get();
        return view('appointments.canceled', compact('canceledAppointments'));

        
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

        if(($appointment->status == 'confirmed' || $appointment->status == 'canceled') && Auth::user()->hasRole('admin')){

            $appointment->update(['admin_id' => auth()->user()->admin->id]);

            if($appointment->status == 'confirmed'){
           
            
            $appointementdata = [
                'client_name' => $appointment->client->user->name,
                'client_email' => $appointment->client->user->email,
                'client_phone' => $appointment->client->user->phone_number,
                'service_name' => $appointment->service->name,
                'service_price' => $appointment->service->price,
                'technician_name' => $appointment->technician->user->name,
                'appointment_date' => $appointment->start_time,
                'appointment_address' => $appointment->address,
                'appointment_city' => $appointment->city->name,
            ];

            Mail::to($appointment->client->user->email)->send(new TestEmail($appointementdata));
            // Mail::to($appointment->technician->user->email)->send(new TestEmail($appointementdata));

        }

        }
        

        //if status is completed  changed
        if($appointment->status == 'completed' && Auth::user()->hasRole('technician')){

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
        if($appointment->status == 'cancelled' && Auth::user()->hasRole('admin') ){

            $appointment->update(['admin_id' => auth()->user()->admin->id]);

            // use soft delete
            $appointment->delete();
            
        }

        return redirect()->route('appointments.index');
    }

    public function destroy($id)
    {
       $appointment = Appointment::withTrashed()->find($id);
        $appointment->forceDelete();
    
        return redirect()->route('appointments.canceled');
    }



}