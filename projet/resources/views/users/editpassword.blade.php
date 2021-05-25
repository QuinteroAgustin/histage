@extends('layouts.app')
@section('title', 'Connexion')
@section('content')
    <div class="mx-auto self-center">
        <form action="{{ route('editpasswordPost') }}" method="POST">
            @csrf
        <div class="bg-white shadow-lg max-w-lg md:flex">
            <div class="p-4 flex-1 md:flex md:flex-col justify-center">
                <h1 class="text-2xl font-bold text-gray-800 mb-2">Moddifier mon mot de passe</h1>
                <div class="mb-4">
                    <label class="block text-gray-600 mb-2" for="lastpassword">Ancien mot de passe : </label>
                    <input class="border shadow py-2 px-3 text-gray-700 w-full focus:shadow-outline" type="password" name="lastpassword" id="lastpassword">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-600 mb-2" for="password">Nouveau mot de passe : </label>
                    <input class="border shadow py-2 px-3 text-gray-700 w-full focus:shadow-outline" type="password" name="password" id="password">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-600 mb-2" for="repassword">Valider mot de passe : </label>
                    <input class="border shadow py-2 px-3 text-gray-700 w-full focus:shadow-outline" type="password" name="repassword" id="repassword">
                </div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-green-500">Moddifier mon ancien mot de passe</button>
            </div>
        </div>
        </form>
    </div>
@endsection