<?php



namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\appointmentHistorie;
use Illuminate\Http\Request;
use App\Models\AppointmentHistory;


class AppointmentHistoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Appointment $appointment)
    {
        $appointmentHistories = $appointment->appointmentHistories()->orderBy('created_at', 'desc')->get();

        return view('appointment-histories.index', compact('appointment', 'appointmentHistories'));
    }

    public function store(Request $request, Appointment $appointment)
    {
        $validatedData = $request->validate([
            'reason' => 'nullable|string',
            'status' => 'required|in:rescheduled,cancelled',
        ]);

        $appointmentHistory = new AppointmentHistory($validatedData);
        $appointmentHistory->appointment()->associate($appointment);
        $appointmentHistory->save();

        return redirect()->route('appointments.show', ['appointment' => $appointment->id])
        ->with('message', 'Appointment history added successfully');
    }
}

