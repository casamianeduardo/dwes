<?php

namespace Database\Seeders;

use App\Models\Center;
use App\Models\Treatment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CenterTreatmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $treatments = Treatment::all();
        $centers = Center::all();

        foreach ($treatments as $treatment) {
            $treatment->centers()->sync($centers->random(2));
        }
    }
}
