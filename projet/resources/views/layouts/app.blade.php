<!DOCTYPE html>
<html lang="fr" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Histage - @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    
</head>
<body class="h-full bg-gray-200">
    <!-- Navbar -->
    @section('sidebar')
    <div class="flex bg-white mb-2 py-5 pl-5">
        <div class="flex items-center text-2xl font-semibold">
            <p>Histage</p>
        </div>
        <div class="flex-grow text-gray-400 ml-4 flex items-center space-x-4">
            <a href="{{ route('home') }}">Accueil</a>
            <a href="#">Administrateur</a>
            <a href="#">Enseignant</a>
            <a href="#">Etudiant</a>
        </div>
        <div class="mr-5 flex items-center">
            @if(session()->exists('user'))
            <div class="relative inline-block text-left">
                <button id="menuprofilbutton">
                    <div class="rounded-full bg-gray-400 w-8 h-8">
                        <img class="flex-1 rounded-full w-full h-8 object-cover md:h-full" src="https://picsum.photos/200/300" alt="">
                    </div>
                </button>
                <div class="hidden origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" id="menuprofil">
                    <div class="py-1">
                        <a href="{{ route('profil') }}" class="text-gray-700 block px-4 py-2 text-sm hover:bg-gray-200">Profil</a>
                        <a href="{{ route('deconnexion') }}" class="text-gray-700 block px-4 py-2 text-sm hover:bg-gray-200">Déconnexion</a>
                    </div>
                </div>
            </div>
            @else
                <a class="" href="{{ route('connexion') }}">Connexion</a>
            @endif
        </div>
    </div>
    @show

    <!-- Messages -->
    @if(session()->exists('messages'))
    @foreach (session()->get('messages') as $key => $message)
        @if ($key == 'Erreur')
            <div class="bg-red-100 w-auto h-auto border border-red-400 text-red-700 m-2 px-4 py-3 rounded relative" role="alert" id="alert-message">
        @else
            <div class="bg-green-100 w-auto h-auto border border-green-400 text-green-700 m-2 px-4 py-3 rounded relative" role="alert" id="alert-message">
        @endif
                <strong class="font-bold">{{ $key }}</strong>
                <span class="block sm:inline">{{ $message }}</span>
            
            {{ session()->forget('messages') }}
            <button class="" id="alert">X</button>
        </div>
        @endforeach
    @endif

    <!-- sous la navbar -->
    <div class="flex justify-between">
        <!-- Gauche -->
        <div class="">
            
        </div>
        <!-- Milieu -->
        <div class="">
            <!-- Laisse la place pour le content de la page qui va etre appelé -->
            @yield('content')
        </div>
        <!-- Droite -->
        <div class="">

        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>