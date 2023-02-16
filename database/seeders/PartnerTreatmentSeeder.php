<?php

namespace Database\Seeders;

use DateTime;
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

        /*
        $treatments = Treatment::factory()->count(23)->create();
        $partners = Partner::all()->random(10);

        $treatments->each(function ($treatment) use ($partners) {
            $treatment->partners()->attach(
                $partners->pluck('id')->toArray(),
                ["date" => new \DateTime()]
            );
        });
        */

        
        Treatment::factory()->count(23)->create()->each(function($treatment){
            
            $treatment->partners()->syncWithPivotValues(
                Partner::all()->random(10)->pluck('id')->toArray(),
                ["date" => new DateTime()]
            );
        });
        
    }
}
