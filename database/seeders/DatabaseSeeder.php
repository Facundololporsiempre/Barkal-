<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Categoria;
use App\Models\Cliente;
use App\Models\Compra;
use App\Models\Consulta;
use App\Models\Marca;
use App\Models\Modelo;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Storage::deleteDirectory("public/posts");
        Storage::makeDirectory("public/posts");

        $this->call(RoleSeeder::class);

        $this->call(ProveedorSeeder::class);
        Categoria::factory(6)->create();
        Consulta::factory(0)->create();
        Compra::factory(0)->create();
        $this->call(UserSeeder::class);
        Modelo::factory(24)->create();
        $this->call(MarcaSeeder::class);
        Cliente::factory(0)->create();
        $this->call(RepuestoSeeder::class);
    }
}
