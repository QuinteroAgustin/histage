@extends('layouts.app')
@section('title', 'Accueil')
@section('content')
<div class="mx-auto self-center">
    <form action="{{ route('editAnneeScolairePost') }}" method="POST">
        @csrf
    <div class="bg-white shadow-lg max-w-lg md:flex">
        <div class="p-4 flex-1 md:flex md:flex-col justify-center">
            <h1 class="text-2xl font-bold text-gray-800 mb-2">Editer Année Scolaire</h1>
            <div class="mb-4">
                <label class="block text-gray-600 mb-2" for="libAnneeScolaire">Année Scolaire : </label>
                <input class="border shadow py-2 px-3 text-gray-700 w-full focus:shadow-outline" type="text" name="libAnneeScolaire" id="libAnneeScolaire" value="{{ $annee->libAnneeScolaire }}">
                <input type="text" hidden name="id" value="{{ $annee->id }}">
            </div>    
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-green-500">Editer l'année</button>
        </div>
    </div>
    </form>
</div>
@endsection