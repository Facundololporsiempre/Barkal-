<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cliente>
 */
class ClienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = $this->faker->unique()->sentence();
        return [
            "name" => $name,
            "surname" => $this->faker->text(15),
            "dni" => $this->faker->text(15),
            "phone" => $this->faker->text(15),
            'email' => $this->faker->unique()->text(30),
            "password" => $this->faker->text(15),
            "direction" => $this->faker->text(15)
        ];
    }
}
