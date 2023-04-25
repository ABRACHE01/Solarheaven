<?php

namespace Database\Factories;
use App\Models\Appointment;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Appointment>
 */
class AppointmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Appointment::class;

    public function definition()
    {
        return [
            'client_id' => \App\Models\Client::factory(),
            'technician_id' => \App\Models\Technician::factory(),
            'service_id' => \App\Models\Service::factory(),
            'city_id' => \App\Models\City::factory(),
            'start_time' => $this->faker->dateTimeBetween('now', '+1 week'),
            'end_time' => $this->faker->dateTimeBetween('+1 week', '+2 week'),
            'status' => $this->faker->randomElement(['requested', 'confirmed', 'completed', 'cancelled']),
            'admin_id' => null,
        ];
    }
}
