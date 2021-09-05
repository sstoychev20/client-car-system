<?php

namespace Database\Factories;

use App\Models\Car;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CarFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \App\Models\Car::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'client_id' =>rand(1,3),
            'licence_no' => $this->faker->numerify('###-###'),
            'vin' => $this->faker->numerify('####'),
            'model' => $this->faker->word(1),
            'make' => $this->faker->word(2),
            'date' => $this->faker->dateTimeThisMonth()->format('Y-m-d'),
            'created_at' => now(),
        ];
    }
}
