<?php

namespace Database\Factories;

use App\Models\Indicateur;
use App\Models\Typeindicateur;
use Illuminate\Database\Eloquent\Factories\Factory;

class IndicateurFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Indicateur::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'libIndicateur' => $this->faker->realText(100),
            'typeindicateur_id' => Typeindicateur::all()->random()->id,
        ];
    }
}
