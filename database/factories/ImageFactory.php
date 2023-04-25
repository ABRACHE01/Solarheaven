<?php

namespace Database\Factories;

use App\Models\Image;
use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\Factory;
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
            'url' => $this->faker->imageUrl(),
            'service_id' => Service::factory(),
        ];
    }

 
}
