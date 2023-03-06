<?php

namespace Database\Factories;
use App\Models\Appointment;
use App\Models\AppointmentHistory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AppointmentHistory>
 */
class AppointmentHistoryFactory  extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = AppointmentHistory::class;

    public function definition()
    {
        return [   
            'appointment_id' => Appointment::factory(),
            'reschedule_time' => $this->faker->dateTime(),
            'status' => $this->faker->randomElement(['rescheduled', 'cancelled']),
        ];
    }
}
