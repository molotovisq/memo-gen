<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{

    public function withFaker()
    {
        return \Faker\Factory::create('pt_BR');
    }

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->firstName() ." ".  $this->faker->lastName(),
            'rg' => $this->faker->rg(),
            'cpf' => $this->faker->cpf(),
            'street' => $this->faker->streetName(),
            'street_number' => $this->faker->numberBetween(100, 9999),
            'neighbor' => 'Bairro Qualquer',
            'cep' => '64340-000',
            'phone' => $this->faker->cellPhoneNumber(),
            'city_id' => $this->faker->numberBetween(1,1),

        ];
    }
}
