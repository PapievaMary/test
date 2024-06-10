<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PlaceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=> $this->faker->sentence(1),
            'description' => $this->faker->paragraph(3),
            'repair' => 'false',
            'work'=> 'false'
        ];
    }
}
