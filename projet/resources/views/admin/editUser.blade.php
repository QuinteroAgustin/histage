@extends('layouts.app')
@section('title', 'Edit utilisateur')
@section('content')
    <div class="">
        <form action="{{ route('editUserPost') }}" method="POST">
            @csrf
            <p>Edition du profil</p>
            <label for="titre">titre</label>
            <input type="text" name="titre" id="titre" value="{{ $user->titreUser }}">

            <label for="nom">nom</label>
            <input type="text" name="nom" id="nom" value="{{ $user->nomUser }}">

            <label for="prenom">prenom</label>
            <input type="text" name="prenom" id="prenom" value="{{ $user->prenomUser }}">

            <label for="email">email</label>
            <input type="text" name="email" id="email" value="{{ $user->emailUser }}">

            <label for="telephone">telephone</label>
            <input type="text" name="telephone" id="telephone" value="{{ $user->telephoneUser }}">

            <label for="mobile">mobile</label>
            <input type="text" name="mobile" id="mobile" value="{{ $user->mobileUser }}">

            <button class="bg-blue-300 px-2 rounded hover:bg-green-300" type="submit" name="submit">Modifier</button>
        </form>
    </div>
    <div>
        <form action="{{ route('home') }}" method="POST">
            @csrf
            <p>Edition du mot de passe</p>
            <label for="password">Nouveau mot de passe</label>
            <input type="password" name="password" id="password">
            <label for="password2">Nouveau mot de passe</label>
            <input type="password" name="password2" id="password2">
            <button class="bg-blue-300 px-2 rounded hover:bg-green-300" type="submit" name="submit">Modifier mot de passe</button>
        </form>
    </div>
    

@endsection