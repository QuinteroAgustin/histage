@extends('layouts.app')
@section('title', 'Accueil')
@section('content')
<div class="mx-auto self-center">
    <form action="{{ route('createAnneeScolairePost') }}" method="POST">
        @csrf
    <div class="bg-white shadow-lg max-w-lg md:flex">
        <div class="p-4 flex-1 md:flex md:flex-col justify-center">
            <h1 class="text-2xl font-bold text-gray-800 mb-2">Créer Année Scolaire</h1>
            <div class="mb-4">
                <label class="block text-gray-600 mb-2" for="libAnneeScolaire">Nom de l'année : </label>
                <input class="border shadow py-2 px-3 text-gray-700 w-full focus:shadow-outline" type="text" name="libAnneeScolaire" id="libAnneeScolaire">
            </div>    
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-green-500">Créer l'année</button>
        </div>
    </div>
    </form>
</div>
@endsection