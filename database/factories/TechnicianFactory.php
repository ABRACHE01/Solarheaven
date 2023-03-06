<?php

namespace Database\Factories;
use App\Models\Technician;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Technician>
 */
class TechnicianFactory  extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Technician::class;

    public function definition()
    {
        return [
            'qualification' => $this->faker->sentence,
            'user_id' => \App\Models\User::factory(),
        ];
    }

}
