<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Marca;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MarcaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $marcas = Marca::factory(12)->create();

        foreach($marcas as $marca){
            Image::factory(1)->create([
                "imageable_id" => $marca->id,
                "imageable_type" => Marca::class
            ]);
        }
    }
}
