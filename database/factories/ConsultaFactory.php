<?php

namespace Database\Factories;

use App\Models\Proveedor;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Consulta>
 */
class ConsultaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = $this->faker->unique()->sentence(1);
        return [
            "name" => $name,
            "response" => $this->faker->word(1),
            'email' => $this->faker->unique()->safeEmail(),
            "phone" => $this->faker->randomElement(["3794283904", "3794102467", "3794018244", "3794125768", "3794029345", "3794043892", "3794102966", "3794102930", "3794109228", "3794102040", "3794561902", "3794198201", "3794022234", "3794022033", "3794227788", "3794502781", "3794021672", "3794029344", "3794441287", "3794029283", "3794032922", "3794292922", "3794124476", "3794213344", "3794102123", "3794012222"]),
            "query" => $this->faker->text(120),
            'proveedor_id' => Proveedor::all()->random()->id,
        ];
    }
}
