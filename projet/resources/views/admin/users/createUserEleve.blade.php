@extends('layouts.app')
@section('title', 'Accueil')
@section('content')
<div class="flex justify-between">
    <!-- Gauche -->
    <div>

    </div>
    <!-- Milieu -->
    <div>
    <!-- Laisse la place pour le content de la page qui va etre appelé -->
    <div class="mx-auto self-center">
        <form action="{{ route('createUserElevePost') }}" method="POST">
            @csrf
        <div class="bg-white shadow-lg max-w-lg md:flex">
            <div class="p-4 flex-1 md:flex md:flex-col justify-center">
                <h1 class="text-2xl font-bold text-gray-800 mb-2">Création d'un élève</h1>
                <p class="text-xl">Email : {{ $user->emailUser }}</p>
                <p>Nom : {{ $user->nomUser }}</p>
                <p>Prénom : {{ $user->prenomUser }}</p>

                <input type="text" name="id" id="id" value="{{ $user->id }}" hidden>

                <div class="mb-4">
                    <label class="block text-gray-600 mb-2" for="datenaissance">Date de naissance : </label>
                    <input class="border shadow py-2 px-3 text-gray-700 w-full focus:shadow-outline" type="date" name="datenaissance" id="datenaissance">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-600 mb-2" for="daterentree">Date de rentrée : </label>
                    <input class="border shadow py-2 px-3 text-gray-700 w-full focus:shadow-outline" type="date" name="daterentree" id="daterentree">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-600 mb-2" for="numAdr">Numero : </label>
                    <input class="border shadow py-2 px-3 text-gray-700 w-full focus:shadow-outline" type="text" name="numAdr" id="numAdr">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-600 mb-2" for="libAdr">Addresse : </label>
                    <input class="border shadow py-2 px-3 text-gray-700 w-full focus:shadow-outline" type="text" name="libAdr" id="libAdr">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-600 mb-2" for="villeAdr">Ville : </label>
                    <input class="border shadow py-2 px-3 text-gray-700 w-full focus:shadow-outline" type="text" name="villeAdr" id="villeAdr">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-600 mb-2" for="codePostalAdr">Code postal : </label>
                    <input class="border shadow py-2 px-3 text-gray-700 w-full focus:shadow-outline" type="text" name="codePostalAdr" id="codePostalAdr">
                </div>
                <div class="mb-4" id="section_selector">
                    <label class="block text-gray-600 mb-2" for="section">Section : </label>
                    <select name="section" id="section">
                        @foreach ($sections as $section)
                        <option value="{{ $section->id }}">{{ $section->libSection}}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-green-500">Créer l'élève</button>
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
