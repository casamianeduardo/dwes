<?php

namespace Database\Seeders;

use App\Models\Center;
use App\Models\Worker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CenterWorkerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Center::factory()->count(5)->create();

        Worker::factory()->count(20)->create();
    }
}
