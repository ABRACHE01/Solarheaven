<?php

namespace Database\Factories;
use app\Models\Admin;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Admin>
 */
class AdminFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Admin::class;

    public function definition()
    {
        return [
             'user_id' => \App\Models\User::factory(),
                'bio' => $this->faker->text,
        ];
    }

}
