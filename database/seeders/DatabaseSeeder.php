<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Cliente;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        //las clases padre (las que propagan la id a la otra tabla)deben ir arriba de las hijas en la lista de aqui abajo Cliente es padre de Order,asi que va encima de esta
        $this->call([
                ProductSeeder::class,
                ClienteSeeder::class,
                OrderSeeder::class,
                ClienteOrderSeeder::class
                //CenterPartnerSeeder::class,
                //PartnerTreatmentSeeder::class,
                //UserSeeder::class,               
        ]);
    }
}
