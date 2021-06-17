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
                




                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-green-500">Créer l'entreprise</button>
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
