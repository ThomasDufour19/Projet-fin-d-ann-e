<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class FieldFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'number'=> fake()->numberBetween(0,100),
            'adresse'=> fake()->address(),
            'beasts_id'=> fake()->boolean(),
            'cereals_id'=> fake()->boolean()
        ];
    }
}
