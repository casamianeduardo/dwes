<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Study;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Study>
 */
class StudyFactory extends Study
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model=Product::class;//asocio al modelo

    public function definition()
    {
        return [
            "name" => $this->faker->word(),
            "code" => $this->faker->word(),
            "family" => $this->faker->word(),
            "level" => $this->faker->randomInt(1,2)
        ];
    }
}
