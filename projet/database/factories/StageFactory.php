<?php

namespace Database\Factories;

use App\Models\Anneescolaire;
use App\Models\Entreprise;
use App\Models\Stage;
use Illuminate\Database\Eloquent\Factories\Factory;

class StageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Stage::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'titreStage' => $this->faker->company(),
            'descriptifStage' => $this->faker->firstName(),
            'dateDebutStage' => $this->faker->date(),
            'dateFinStage' => now(),
            'dureeHebdoStage' => '35',
            'anneescolaire_id' => Anneescolaire::all()->random()->id,
            'entreprise_id' => Entreprise::all()->random()->id,
        ];
    }
}
