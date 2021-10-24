<?php

namespace Database\Factories;

use App\Models\Zaposleni;
use Illuminate\Database\Eloquent\Factories\Factory;

class ZaposleniFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Zaposleni::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ime' => $this->faker->firstName,
            'prezime' => $this->faker->lastName,
            'adresa' => $this->faker->streetAddress,
            'plata' => $this->faker->numberBetween($min = 45000, $max = 150000),
            'kompanija_id' => $this->faker->numberBetween($min = 1, $max = 10),
        ];
    }
}
