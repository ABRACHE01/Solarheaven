<?php

namespace Database\Seeders;
use App\Models\Appointment;;
use App\Models\AppointmentHistory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AppointmentHistorySeeder  extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Get 10 random appointments
        $appointments = Appointment::inRandomOrder()->take(5)->get();

        // Create appointment reschedules for each appointment
        foreach ($appointments as $appointment) {
            AppointmentHistory::factory()->create([
                'appointment_id' => $appointment->id,
            ]);
        }
    }
}
