<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'cereals_id'=> fake()->boolean(),
            'quantity'=> fake()->numberBetween(0, 50),
            'value'=> fake()->numberBetween(0,100)
        ];
    }
}
