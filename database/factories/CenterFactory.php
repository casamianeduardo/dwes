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

        $random = rand(0,1);

        if($random == 0){
            $company_reason = "SA";
        }else{
            $company_reason = "SL";
        }

        return [
            "name" => $this->faker->name(),
            "company_reason" => $company_reason,
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