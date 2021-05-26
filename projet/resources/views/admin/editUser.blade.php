@extends('layouts.app')
@section('title', 'Edit utilisateur')
@section('content') 
    <div class="mx-auto self-center">
        <form action="{{ route('editUserPost') }}" method="POST">
            @csrf
        <div class="bg-white shadow-lg max-w-lg md:flex">
            <div class="p-4 flex-1 md:flex md:flex-col justify-center">
                <h1 class="text-2xl font-bold text-gray-800 mb-2">Edition du profil de {{ $user->emailUser }}</h1>
                <input class="hidden" type="text" value="{{ $user->id }}" name="id">
                <div class="mb-4">
                    <label class="block text-gray-600 mb-2" for="titre">Titre : </label>
                    <input class="border shadow py-2 px-3 text-gray-700 w-full focus:shadow-outline" type="text" value="{{ $user->titreUser }}" name="titre" id="titre">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-600 mb-2" for="nom">Nom : </label>
                    <input class="border shadow py-2 px-3 text-gray-700 w-full focus:shadow-outline" type="text" value="{{ $user->nomUser }}" name="nom" id="nom">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-600 mb-2" for="prenom">Prénom : </label>
                    <input class="border shadow py-2 px-3 text-gray-700 w-full focus:shadow-outline" type="text" value="{{ $user->prenomUser }}" name="prenom" id="prenom">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-600 mb-2" for="email">Email : </label>
                    <input class="border shadow py-2 px-3 text-gray-700 w-full focus:shadow-outline" type="text" value="{{ $user->emailUser }}" name="email" id="email">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-600 mb-2" for="telephone">Téléphone : </label>
                    <input class="border shadow py-2 px-3 text-gray-700 w-full focus:shadow-outline" type="text" value="{{ $user->telephoneUser }}" name="telephone" id="telephone">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-600 mb-2" for="mobile">Mobile : </label>
                    <input class="border shadow py-2 px-3 text-gray-700 w-full focus:shadow-outline" type="text" value="{{ $user->mobileUser }}" name="mobile" id="mobile">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-600 mb-2" for="role">Role : </label>
                    <select name="role" id="role">
                        @foreach ($roles as $role)
                        <option value="{{ $role->id }}" @if($user->role->id == $role->id) selected @endif>{{ $role->libRole}}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-green-500">Modifier l'utilisateur</button>
            </div>
        </div>
        </form>
    </div>

    <div class="mx-auto self-center">
        <form action="{{ route('editUserPasswordPost') }}" method="POST">
            @csrf
        <div class="bg-white shadow-lg max-w-lg md:flex">
            <div class="p-4 flex-1 md:flex md:flex-col justify-center">
                <h1 class="text-2xl font-bold text-gray-800 mb-2">Edition du mot de passe</h1>
                <input class="hidden" type="text" value="{{ $user->id }}" name="id">
                <div class="mb-4">
                    <label class="block text-gray-600 mb-2" for="password">Nouveau mot de passe : </label>
                    <input class="border shadow py-2 px-3 text-gray-700 w-full focus:shadow-outline" type="password" name="password" id="password">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-600 mb-2" for="repassword">Valider le mot de passe : </label>
                    <input class="border shadow py-2 px-3 text-gray-700 w-full focus:shadow-outline" type="password" name="repassword" id="repassword">
                </div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-green-500">Modifier son ancien mot de passe</button>
            </div>
        </div>
        </form>
    </div>

@endsection