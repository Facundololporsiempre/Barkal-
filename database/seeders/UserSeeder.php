<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Facundo Fernandez Gonzalez',
            'email' => 'barkalicorrientes@gmail.com',
            'password' => bcrypt('barkalifbv'),
        ])->assignRole("Admin");
        // User::factory(0)->create();
    }
}
