<?php

namespace App\Http\Controllers;

use App\Models\Technician;
use App\Models\Admin;
use App\Models\City;
use App\Models\Client;
use App\Models\Appointment;
use App\Models\Service;
use App\Models\Review;
use App\Models\Payment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        $techniciansCount = Technician::count();
        $adminsCount = Admin::count();
        $citiesCount = City::count();
        $clientsCount = Client::count();
        $appointmentsCount = Appointment::count();
        $servicesCount = Service::count();
        $reviewsCount = Review::count();
        $paymentsCount = Payment::count();
        $usersCount = User::count();

        
        //latest 5 records
        $latestTechnicians = Technician::latest()->take(3)->get();
        $latestAdmins = Admin::latest()->take(3)->get();
        $latestCities = City::latest()->take(3)->get();
        $latestClients = Client::latest()->take(3)->get();
        $latestAppointments = Appointment::latest()->take(3)->get();
        $latestServices = Service::latest()->take(3)->get();
        $latestReviews = Review::latest()->take(3)->get();
        $latestPayments = Payment::latest()->take(3)->get();
        $latestUsers = User::latest()->take(3)->get();
        $latestPayments = Payment::latest()->take(3)->get();

        

        //client spesific appointments
        if(Auth::user()->hasRole('client')){

            $clientAppointments = Appointment::with('reviews')->where('client_id', Auth::user()->client->id)->get();
           $appointmentId = $clientAppointments->first()->id ?? null;
            $clientReviews = $appointmentId ? Review::where('appointment_id', $appointmentId)->get() : null;
           
        }else{
            $clientReviews = null;
            $clientAppointments = null;
        }


        if(Auth::user()->hasRole('technician')){
            $technicianAppointments = Appointment::with('reviews')->where('technician_id', Auth::user()->technician->id)->get();
            $appointmentId = $technicianAppointments->first()->id ?? null;
            $technicianReviews = $appointmentId ? Review::where('appointment_id', $appointmentId)->get() : null;
        }else{
            $technicianReviews = null;
            $technicianAppointments = null;
        }
       


       
        return view('home', compact('techniciansCount', 'adminsCount',
         'citiesCount', 'clientsCount', 'appointmentsCount', 'servicesCount', 'reviewsCount', 
        'paymentsCount', 'usersCount', 'latestTechnicians', 'latestAdmins', 'latestCities', 'latestClients', 
        'latestAppointments', 'latestServices', 'latestReviews', 'latestPayments', 'latestUsers',
         'clientAppointments', 'clientReviews', 'technicianAppointments', 'technicianReviews', 'latestPayments'));
    }
}
