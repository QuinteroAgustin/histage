<!DOCTYPE html>
<html lang="fr" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Histage - @yield('title')</title>
    <!-- Tailwind CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">-->
</head>
<body class="h-full">
    <div class="bg-gray-200 flex h-full">
        @section('sidebar')
        <ul class="p-4 w-32 bg-white">
            <li><a class="" href="{{ route('home') }}">Accueil</a></li>
            <li><a class="" href="{{ route('connexion') }}">Connexion</a></li>
            
            @if(session()->exists('user'))
            <li><a class="" href="{{ route('profil') }}">Profil</a></li>
            <li><form action="{{ route('deconnexion') }}" method="POST">@csrf<button>Déconnexion</button></form></li>
            @endif
            
            <!-- <li><a class="" href="{{ route('inscription') }}">Inscription</a></li> -->
        </ul>
        @show

        @if(session()->exists('messages'))
        <div class="bg-red-100 h-12 flow-root border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
            @foreach (session()->get('messages') as $key => $message)
            <strong class="font-bold">{{ $key }}</strong>
            <span class="block sm:inline">{{ $message }}</span>
            @endforeach
        </div>
        @endif

        <div class="flex">
            @yield('content')
        </div>
    </div>
    
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- Bootstrap JS -->
    <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>-->
</body>
</html>