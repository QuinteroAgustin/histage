@extends('layouts.app')
@section('title', 'Créer une entreprise')
@section('content')
<div class="flex justify-between">
    <!-- Gauche -->
    <div>

    </div>
    <!-- Milieu -->
    <div>
    <!-- Laisse la place pour le content de la page qui va etre appelé -->
    <div class="mx-auto self-center">
        <form action="{{ route('createStagePost') }}" method="POST">
            @csrf
        <div class="bg-white shadow-lg max-w-lg md:flex">
            <div class="p-4 flex-1 md:flex md:flex-col justify-center">
                <h1 class="text-2xl font-bold text-gray-800 mb-2">Création d'un stage</h1>
                <div class="mb-4">
                    <label class="block text-gray-600 mb-2" for="titreStage">Titre du stage : </label>
                    <input class="border shadow py-2 px-3 text-gray-700 w-full focus:shadow-outline" type="text" name="titreStage" id="titreStage">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-600 mb-2" for="descriptionStage">Description : </label>
                    <input class="border shadow py-2 px-3 text-gray-700 w-full focus:shadow-outline" type="text" name="descriptionStage" id="descriptionStage">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-600 mb-2" for="dateDebutStage">Date de début : </label>
                    <input class="border shadow py-2 px-3 text-gray-700 w-full focus:shadow-outline" type="date" name="dateDebutStage" id="dateDebutStage">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-600 mb-2" for="dateFinStage">Date de fin : </label>
                    <input class="border shadow py-2 px-3 text-gray-700 w-full focus:shadow-outline" type="date" name="dateFinStage" id="dateFinStage">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-600 mb-2" for="dureeStage">Durée hebdomadaire : </label>
                    <input class="border shadow py-2 px-3 text-gray-700 w-full focus:shadow-outline" type="text" name="dureeStage" id="dureeStage">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-600 mb-2" for="anneeScolaire_id">Année scolaire : </label>
                    <select name="anneeScolaire_id" id="anneeScolaire_id">
                        @foreach ($anneesScolaires as $anneeScolaire)
                        <option value="{{ $anneeScolaire->id }}">{{ $anneeScolaire->libAnneeScolaire}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-600 mb-2" for="eleve_id">Choix de l'élève : </label>
                    <select name="eleve_id" id="eleve_id">
                        @foreach ($eleves as $eleve)
                        <option value="{{ $eleve->id }}">{{ $eleve->user->nomUser }} {{ $eleve->user->prenomUser }} - {{ $eleve->section->libSection }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-600 mb-2" for="enseignant_id">Choix de l'enseignant : </label>
                    <select name="enseignant_id" id="enseignant_id">
                        @foreach ($enseignants as $enseignant)
                        <option value="{{ $enseignant->id }}">{{ $enseignant->user->nomUser}} {{ $enseignant->user->prenomUser }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-600 mb-2" for="contact_id">Choix du contact : </label>
                    <select name="contact_id" id="contact_id">
                        @foreach ($contacts as $contact)
                        <option value="{{ $contact->id }}">{{ $contact->user->nomUser}} {{ $contact->user->prenomUser }} - {{ $contact->entreprise->nomEntreprise }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-green-500">Créer le stage</button>
            </div>
        </div>
        </form>
    </div>
    </div>
    <!-- Droite -->
    <div>

    </div>
</div>
@endsection
