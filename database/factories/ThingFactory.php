<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ThingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(1),
            'description'=> $this->faker->paragraph(5),
            'wrnt' => $this->faker->date(),
            'creator' => 'user1',
            'dimension' => ''
        ];
    }
}
