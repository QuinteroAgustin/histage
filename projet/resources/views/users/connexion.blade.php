@extends('layouts.app')
@section('title', 'Connexion')
@section('content')
    <div class="flex justify-between">
        <!-- Gauche -->
        <div>

        </div>
        <!-- Milieu -->
        <div>
        <!-- Laisse la place pour le content de la page qui va etre appelé -->
        <div class="mx-auto self-center">
            <form action="{{ route('connexionPost') }}" method="POST">
                @csrf
            <div class="bg-white shadow-lg max-w-lg md:flex">
                <img class="flex-1 w-full h-40 object-cover md:h-full" src="https://picsum.photos/200/300" alt="">
                <div class="p-4 flex-1 md:flex md:flex-col justify-center">
                    <h1 class="text-2xl font-bold text-gray-800 mb-2">Connexion</h1>
                    <div class="mb-4">
                        <label class="block text-gray-600 mb-2" for="email">Email : </label>
                        <input class="border shadow py-2 px-3 text-gray-700 w-full focus:shadow-outline" type="text" name="email" id="email">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-600 mb-2" for="password">Mot de passe : </label>
                        <input class="border shadow py-2 px-3 text-gray-700 w-full focus:shadow-outline" type="password" name="password" id="password">
                    </div>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-green-500">Se connecter</button>
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
