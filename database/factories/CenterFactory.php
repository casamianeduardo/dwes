<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Center;
use Faker\Provider\es_ES\Person as Person_ES;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\s>
 */
class CenterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model=Center::class;

    public function definition()
    {
        $this->faker->addProvider(new Person_ES($this->faker));

        return [
            "name" => $this->faker->name(),
            "company_reason" => $this->faker->randomElement(["SA","SL"]),
            "address" => $this->faker->address(),
            "phone" => $this->faker->phoneNumber(),
            "email" =>$this->faker->email(),
            "nif" =>$this->faker->dni(),
            "room_number" =>$this->faker->randomNumber(2),
            "physiotherapy" =>$this->faker->boolean(),
            "max_capacity" =>$this->faker->randomNumber(2),
            "unisex" =>$this->faker->boolean(),
        ];
    }
}