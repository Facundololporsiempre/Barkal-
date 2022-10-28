<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Repuesto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RepuestoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $repuestos = Repuesto::factory(120)->create();

        foreach($repuestos as $repuesto){
            Image::factory(1)->create([
                "imageable_id" => $repuesto->id,
                "imageable_type" => Repuesto::class
            ]);
        }
    }
}
