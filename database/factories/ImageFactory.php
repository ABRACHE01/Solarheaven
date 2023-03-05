<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Image;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Image>
 */
class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Image::class;

    public function definition()
    {
        return [
            'user_id' => rand(1, 10),
            'service_id' => rand(1, 10),
            'image' => $this->faker->imageUrl(640, 480),
        ];
    }

 
}
