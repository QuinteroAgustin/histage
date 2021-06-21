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
        <form action="{{ route('createUserContactPost') }}" method="POST">
            @csrf
        <div class="bg-white shadow-lg max-w-lg md:flex">
            <div class="p-4 flex-1 md:flex md:flex-col justify-center">
                <h1 class="text-2xl font-bold text-gray-800 mb-2">Création d'un Contact</h1>
                <p class="text-xl">Email : {{ $user->emailUser }}</p>
                <p>Nom : {{ $user->nomUser }}</p>
                <p>Prénom : {{ $user->prenomUser }}</p>

                <input type="text" name="id" id="id" value="{{ $user->id }}" hidden>
                <div class="mb-4">
                    <label class="block text-gray-600 mb-2" for="fonctionContact">Fonction : </label>
                    <input class="border shadow py-2 px-3 text-gray-700 w-full focus:shadow-outline" type="text" name="fonctionContact" id="fonctionContact">
                </div>
                <div class="mb-4" id="section_selector">
                    <label class="block text-gray-600 mb-2" for="statusContact">Status : </label>
                    <select name="statusContact" id="statusContact">
                        <option value="A">Actif</option>
                        <option value="I">Inactif</option>
                    </select>
                </div>
                <div class="mb-4" id="section_selector">
                    <label class="block text-gray-600 mb-2" for="entreprise_id">Entreprise : </label>
                    <select name="entreprise_id" id="entreprise_id">
                        @foreach ($entreprises as $entreprise)
                        <option value="{{ $entreprise->id }}">{{ $entreprise->nomEntreprise}}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-green-500">Créer le contact</button>
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
