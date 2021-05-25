@extends('layouts.app')
@section('title', 'Accueil')
@section('content')
<div class="mx-auto self-center">
    <form action="{{ route('createUserPost') }}" method="POST">
        @csrf
    <div class="bg-white shadow-lg max-w-lg md:flex">
        <div class="p-4 flex-1 md:flex md:flex-col justify-center">
            <h1 class="text-2xl font-bold text-gray-800 mb-2">Créer un utilisateur</h1>
            <div class="mb-4">
                <label class="block text-gray-600 mb-2" for="titre">Titre : </label>
                <select name="titre" id="titre">
                    <option value="Mr.">Mr.</option>
                    <option value="Mme.">Mme.</option>
                    <option value="Mlle.">Mlle.</option>
                </select>
            </div>
            <div class="mb-4">
                <label class="block text-gray-600 mb-2" for="nom">Nom : </label>
                <input class="border shadow py-2 px-3 text-gray-700 w-full focus:shadow-outline" type="text" name="nom" id="nom">
            </div>
            <div class="mb-4">
                <label class="block text-gray-600 mb-2" for="prenom">Prénom : </label>
                <input class="border shadow py-2 px-3 text-gray-700 w-full focus:shadow-outline" type="text" name="prenom" id="prenom">
            </div>
            <div class="mb-4">
                <label class="block text-gray-600 mb-2" for="email">Email : </label>
                <input class="border shadow py-2 px-3 text-gray-700 w-full focus:shadow-outline" type="text" name="email" id="email">
            </div>
            <div class="mb-4">
                <label class="block text-gray-600 mb-2" for="telephone">Téléphone : </label>
                <input class="border shadow py-2 px-3 text-gray-700 w-full focus:shadow-outline" type="text" name="telephone" id="telephone">
            </div>
            <div class="mb-4">
                <label class="block text-gray-600 mb-2" for="mobile">Mobile : </label>
                <input class="border shadow py-2 px-3 text-gray-700 w-full focus:shadow-outline" type="text" name="mobile" id="mobile">
            </div>
            <div class="mb-4">
                <label class="block text-gray-600 mb-2" for="role">Role : </label>
                <select name="role" id="role">
                    @foreach ($roles as $role)
                    <option value="{{ $role->id }}">{{ $role->libRole}}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-green-500">Créer l'utilisateur</button>
        </div>
    </div>
    </form>
</div>
@endsection