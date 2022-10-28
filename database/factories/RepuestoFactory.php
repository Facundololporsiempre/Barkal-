<?php

namespace Database\Factories;

use App\Models\Categoria;
use App\Models\Marca;
use App\Models\Modelo;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Repuesto>
 */
class RepuestoFactory extends Factory
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
            "slug" => Str::slug($name),
            "description" => $this->faker->text(200),
            "stock" => $this->faker->randomElement([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]),
            "price" => $this->faker->randomElement(["1.000", "2.000", "3.000", "4.000", "5.000", "6.000", "7.000", "8.000", "9.000", "10.000", "11.000", "12.000", "13.000", "14.000", "15.000", "16.000", "17.000", "18.000", "19.000", "20.000"]),
            // "url" =>  $this->faker->image(storage_path(path:"posts") , 640, 480, null, false),
            'user_id' => User::all()->random()->id,
            "categoria_id" => Categoria::all()->random()->id,
            "marca_id" => Marca::all()->random()->id,
            "modelo_id" => Modelo::all()->random()->id
        ];
    }
}
