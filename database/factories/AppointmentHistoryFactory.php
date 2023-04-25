<?php

namespace Database\Factories;
use App\Models\Appointment;
use App\Models\AppointmentHistory;
use App\Models\User;
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
            'reason' => $this->faker->text(),
            'status' => $this->faker->randomElement(['rescheduled', 'cancelled']),
        ];
    }
}
