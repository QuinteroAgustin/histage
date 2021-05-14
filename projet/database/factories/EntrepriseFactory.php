<?php

namespace Database\Factories;

use App\Models\Entreprise;
use Illuminate\Database\Eloquent\Factories\Factory;

class EntrepriseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Entreprise::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nomEntreprise' => $this->faker->company,
            'serviceEntreprise' => $this->faker->companySuffix,
            'missionEntreprise' => $this->faker->jobTitle,
            'numAdrEntreprise' => $this->faker->buildingNumber,
            'libAdrEntreprise' => $this->faker->address,
            'codePostalEntreprise' => $this->faker->buildingNumber,
            'villeEntreprise' => $this->faker->city,
            'telephoneEntreprise' => $this->faker->phoneNumber,
            'mailEntreprise' => $this->faker->companyEmail,
            'siretEntreprise' => $this->faker->randomNumber,
        ];
    }
}
