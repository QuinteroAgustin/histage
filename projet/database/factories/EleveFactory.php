<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Eleve;
use App\Models\Section;
use Illuminate\Database\Eloquent\Factories\Factory;

class EleveFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Eleve::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id' => User::factory()->create()->id,
            'dateNaissanceEleve' => $this->faker->date(),
            'dateRentreeEleve' => $this->faker->date(),
            'dateRentreeEleve' => $this->faker->date(),
            'numAdrEleve' => $this->faker->buildingNumber(),
            'villeAdrEleve' => $this->faker->city(),
            'libAdrEleve' => $this->faker->address(),
            'codePostalAdrEleve' => $this->faker->buildingNumber(),
            'section_id' => Section::all()->random()->id,
        ];
    }
}
