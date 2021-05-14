<?php

namespace Database\Seeders;

use App\Models\Anneescolaire;
use App\Models\Contact;
use App\Models\Eleve;
use App\Models\Enseignant;
use App\Models\Role;
use App\Models\Section;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Role::factory(10)->create();
        Section::factory(10)->create();
        Eleve::factory(10)->create();
        Enseignant::factory(10)->create();
        Contact::factory(10)->create();
        Anneescolaire::factory(3)->create();
         
    }
}
