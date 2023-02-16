<?php

namespace Database\Seeders;

use App\Models\Center;
use App\Models\Partner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CenterPartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //
         

         Partner::factory()->count(80)->create()->each(function($partner){
             $partner->centers()->sync(
                 Center::all()->random(2)
             );
         });
    }
}
