<?php

namespace Database\Seeders;

use App\Models\Partner;
use App\Models\Treatment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PartnerTreatmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Partner::factory()->count(80)->create();

        Treatment::factory()->count(23)->create()->each(function($treatment){
            $treatment->partners()->sync(
                Partner::all()->random(10)
            );
        });
    }
}
