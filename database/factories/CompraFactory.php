<?php

namespace Database\Factories;

use App\Models\Proveedor;
use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Compra>
 */
class CompraFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "status" => $this->faker->randomElement([1, 2]),
            "street" => $this->faker->text(40),
            "number" => $this->faker->randomElement(["2574", "3454", "1234", "4524", "9002", "1923", "2341", "1532", "3291", "9282", "1893", "2020", "3021", "1829", "4642", "1375", "2424", "3421", "2820", "1881", "3931", "1356", "1111", "2982"]),
            "flat" => $this->faker->randomElement(["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13"]),
            "department" => $this->faker->text(25),
            "province" => $this->faker->text(25),
            "city" => $this->faker->text(25),
            // "payment" => $this->faker->randomElement(["VISA", "Master Card", "VISA DEBITO"]),
            "payment" => $this->faker->randomElement([1, 2, 3]),
            // "city" => $this->faker->text(25),
            "name" => $this->faker->unique()->sentence(1),
            "surname" => $this->faker->unique()->sentence(1),
            "dni" => $this->faker->randomElement(["45520222", "45222111", "45202121", "45677982", "45666222", "45762123", "45727999", "45676123", "45722099", "45123212"]),
            "phone" => $this->faker->randomElement(["3794283904", "3794102467", "3794018244", "3794125768", "3794029345", "3794043892", "3794102966", "3794102930", "3794109228", "3794102040", "3794561902", "3794198201", "3794022234", "3794022033", "3794227788", "3794502781", "3794021672", "3794029344", "3794441287", "3794029283", "3794032922", "3794292922", "3794124476", "3794213344", "3794102123", "3794012222"]),
            'email' => $this->faker->unique()->safeEmail(),
            "cpl" => $this->faker->randomElement(["3400", "3500", "3900", "3300", "3200", "3100", "3800", "3700"]),
            "birth" => $this->faker->text(25),
            "numberT" => $this->faker->randomElement(["2574202091911232", "3454231929102345", "1234567819213456", "4524218212321627", "900299220021", "1923234528912211", "2341234529102323"]),
            "headline" => $this->faker->unique()->text(25),
            "validM" => $this->faker->unique()->text(25),
            "validA" => $this->faker->unique()->text(25),
            // "codeT" => $this->faker->unique()->text(10),
            "codeS" => $this->faker->unique()->text(10),
            "repuestoname" => $this->faker->unique()->text(10),
            "repuestomarca" => $this->faker->unique()->text(10),
            "repuestomodelo" => $this->faker->unique()->text(10),
            "repuestocategoria" => $this->faker->unique()->text(10),
            "cantidad" => $this->faker->unique()->text(10),
            "precio" => $this->faker->unique()->text(10),
            // 'proveedor_id' => Proveedor::all()->random()->id,
        ];
    }
}
