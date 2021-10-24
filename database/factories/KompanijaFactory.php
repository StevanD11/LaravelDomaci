<?php

namespace Database\Factories;

use App\Models\Kompanija;
use Illuminate\Database\Eloquent\Factories\Factory;

class KompanijaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Kompanija::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'naziv' => $this->faker->unique()->company,
            'sediste' => $this->faker->streetAddress,
            'grad' => $this->faker->city
        ];
    }
}
