<?php

namespace Database\Factories;

use App\Models\Partner;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PartnerFactory extends Factory
{
    protected $model = Partner::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "name" => $this->faker->name(),
            "surnames" => $this->faker->lastName() . " " . $this->faker->lastName(),
            "address" => $this->faker->address(),
            "phone" => $this->faker->phoneNumber(),
            "email" =>$this->faker->email(),
        ];
    }
}
