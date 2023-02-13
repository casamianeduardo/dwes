<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Cliente;
use GuzzleHttp\Client;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cliente>
 */
class ClienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model=Cliente::class;//asocio al modelo

    public function definition()
    {
        return [
            "dni" => $this->faker->bothify('########?'),
            "nombre" => $this->faker->name(),
            "apellidos" => $this->faker->name(),
            "telefono" => $this->faker->regexify('[0-9]{9}'),
            "email" =>$this->faker->email(),
        ];
    }
}
