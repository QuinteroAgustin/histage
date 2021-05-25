@extends('layouts.app')
@section('title', 'Connexion')
@section('content')
    <div class="mx-auto self-center">
        <div class="bg-white shadow-lg max-w-lg md:flex">
            <img class="flex-1 w-full h-40 object-cover md:h-full" src="https://picsum.photos/200/300" alt="">
            <div class="p-4 flex-1 md:flex md:flex-col justify-center">
                <h1 class="text-2xl font-bold text-gray-800 mb-2">Profil</h1>
                <div class="mb-4 text-gray-600">
                    <p>Bienvenue {{ $user->emailUser }}</p>
                </div>
                <a href="{{ route('editpassword') }}" class="bg-blue-500 text-white text-center px-4 py-2 rounded hover:bg-green-500">Moddifier mot de passe</a>
            </div>
        </div>
    </div>
@endsection