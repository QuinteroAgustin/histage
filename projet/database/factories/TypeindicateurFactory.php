<?php

namespace Database\Factories;

use App\Models\Typeindicateur;
use Illuminate\Database\Eloquent\Factories\Factory;

class TypeindicateurFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Typeindicateur::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'libTypeIndicateur' => $this->faker->realText(100),
        ];
    }
}
