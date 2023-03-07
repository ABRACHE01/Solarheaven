<?php

namespace Database\Factories;
use App\Models\Review;
use App\Models\Client;
use App\Models\Appointment;
use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Review::class;

    public function definition()
    {
        return [
            'appointment_id' => Appointment::factory(),
            'rating' => $this->faker->numberBetween(1, 5),
            'comment' => $this->faker->text(200),
        ];
    }
}
