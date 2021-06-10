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
        <form action="{{ route('createEntreprisePost') }}" method="POST">
            @csrf
        <div class="bg-white shadow-lg max-w-lg md:flex">
            <div class="p-4 flex-1 md:flex md:flex-col justify-center">
                <h1 class="text-2xl font-bold text-gray-800 mb-2">Création d'une Entreprise</h1>
                <div class="mb-4">
                    <label class="block text-gray-600 mb-2" for="nom">Nom : </label>
                    <input class="border shadow py-2 px-3 text-gray-700 w-full focus:shadow-outline" type="text" name="nom" id="nom">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-600 mb-2" for="service">Service : </label>
                    <input class="border shadow py-2 px-3 text-gray-700 w-full focus:shadow-outline" type="text" name="service" id="service">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-600 mb-2" for="mission">Mission de l'entreprise : </label>
                    <input class="border shadow py-2 px-3 text-gray-700 w-full focus:shadow-outline" type="text" name="mission" id="mission">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-600 mb-2" for="numAdr">Numéro de voie : </label>
                    <input class="border shadow py-2 px-3 text-gray-700 w-full focus:shadow-outline" type="text" name="numAdr" id="numAdr">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-600 mb-2" for="libAdr">Nom de voie : </label>
                    <input class="border shadow py-2 px-3 text-gray-700 w-full focus:shadow-outline" type="text" name="libAdr" id="libAdr">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-600 mb-2" for="cpAdr">Code postal : </label>
                    <input class="border shadow py-2 px-3 text-gray-700 w-full focus:shadow-outline" type="text" name="cpAdr" id="cpAdr">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-600 mb-2" for="villeAdr">Ville : </label>
                    <input class="border shadow py-2 px-3 text-gray-700 w-full focus:shadow-outline" type="text" name="villeAdr" id="villeAdr">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-600 mb-2" for="telephone">Téléphone : </label>
                    <input class="border shadow py-2 px-3 text-gray-700 w-full focus:shadow-outline" type="text" name="telephone" id="telephone">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-600 mb-2" for="mail">Email : </label>
                    <input class="border shadow py-2 px-3 text-gray-700 w-full focus:shadow-outline" type="text" name="mail" id="mail">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-600 mb-2" for="siret">Siret : </label>
                    <input class="border shadow py-2 px-3 text-gray-700 w-full focus:shadow-outline" type="text" name="siret" id="siret">
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
