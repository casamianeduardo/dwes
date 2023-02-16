<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Worker;
use App\Models\Center;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class WorkerFactory extends Factory
{

    protected $model = Worker::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition()
    {
        return [
            "name" => $this->faker->name(),
            "password" => $this->faker->password(),
            "role" => $this->faker->randomElement(["admin","manager"]),
            "center_id" => Center::inRandomOrder()->first()->id
        ];
    }
}
