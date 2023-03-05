<?php

namespace Database\Factories;
use app\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Client::class;

    public function definition()
    {
        return [
            'address' => $this->faker->address,
            'is_special_client' => $this->faker->boolean,
            'user_id' => \App\Models\User::factory(),
        ];
    }
}
