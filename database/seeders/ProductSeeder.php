<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use App\Models\Product;// si da error en product es porque hay que importar esto

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()

    {
    //DB::table('products')->truncate(); //truncar la tabla antes de rellenarla con datos
    
    Product::factory()->count(23)->create();//asociar el seeder con el productFactory qu hemos creado// Crea 23 filas de productos ficticios
        

    }
}
