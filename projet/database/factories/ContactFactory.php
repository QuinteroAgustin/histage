<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Contact;
use App\Models\Entreprise;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Contact::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory()->create()->id,
            'statusContact' => Str::random(1),
            'fonctionContact' => Str::random(15),
            'entreprise_id' => Entreprise::factory()->create()->id,
        ];
    }
}
