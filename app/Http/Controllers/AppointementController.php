<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\Service;


class AppointementController extends Controller
{
    public function index()
    {
        $appointments = Appointment::with('client', 'technician', 'service')->get();
        return view('appointments.index', compact('appointments'));
    }

    public function create()
    {
        // get all available services
        $services = Service::all();
        return view('appointments.create', compact('services'));
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
