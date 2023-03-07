<?php

namespace Database\Factories;
use app\Models\Payment;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Payment>
 */
class PaymentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Payment::class;

    public function definition()
    {
        return [
            'appointment_id' => \App\Models\Appointment::factory(),
            'amount' => $this->faker->randomFloat(2, 0, 1000),
            'extra_charges' => $this->faker->randomFloat(2, 0, 1000),
            'paid_at' => $this->faker->dateTime,
            'status' => $this->faker->randomElement(['pending','paid','refunded','failed']),
            'note' => $this->faker->text,
            'method' => $this->faker->randomElement(['cash', 'card']),
        ];
    }
}
