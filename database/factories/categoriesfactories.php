<?php

namespace Database\Factories;

use App\Models\Kategori;
use Illuminate\Database\Eloquent\Factories\Factory;

class categoriesfactories extends Factory
{
    public function definition(): array
    {
        return [
            'code' => fake()->unique()->bothify('IOT', 'SRV', 'DRN'),
            'name' => fake()->unique()->randomElement([
                'Server & Cloud',
                'Internet of Things', 
                'Multimedia & Drone',
            ]),
        ];
    }
}