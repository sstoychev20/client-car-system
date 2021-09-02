<?php

namespace Database\Factories;

use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ClientFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \App\Models\Client::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'make' => $this->faker->sentence(3),
            'model' => $this->faker->word(2),
            'client_name' => $this->faker->name(),
            'license_number' => $this->faker->numerify("###-###"),
            'year' => $this->faker->dateTimeThisMonth()->format('Y-m-d'),
            'telephone' => $this->faker->numerify("###-###-####"),
            'reg_data' => $this->faker->dateTimeThisMonth()->format('Y-m-d'),
            'email' => $this->faker->unique()->safeEmail(),
            'created_at' => now(),
        ];
    }
}
