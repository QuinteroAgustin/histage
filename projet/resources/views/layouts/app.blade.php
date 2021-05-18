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
    <div class="">
        @section('sidebar')
            <ul class="p-4 w-full bg-white grid grid-cols-3">
                <li class="place-self-start"><a class="" href="{{ route('home') }}">Accueil</a></li>
                @if(session()->exists('user'))
                    <li class=" place-self-end"><a class="" href="{{ route('profil') }}">Profil</a></li>
                    <li class="flex-1 place-self-end"><form action="{{ route('deconnexion') }}" method="POST">@csrf<button>Déconnexion</button></form></li>
                @else
                    <li class="place-self-end"><a class="" href="{{ route('connexion') }}">Connexion</a></li>
                @endif
            </ul>
        @show
    </div>
    <div class="flex justify-between">
        <div class="">

        </div>

        <div class="">
            <!-- Messages -->
            @if(session()->exists('messages'))
                <div class="bg-red-100 h-12 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                    @foreach (session()->get('messages') as $key => $message)
                        <strong class="font-bold">{{ $key }}</strong>
                        <span class="block sm:inline">{{ $message }}</span>
                    @endforeach
                </div>
            @endif
            <!-- Laisse la place pour le content de la page qui va etre appelé -->
            @yield('content')
        </div>

        <div class="">

        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>