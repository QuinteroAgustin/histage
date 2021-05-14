<!DOCTYPE html>
<html lang="fr">
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
<body>
    <div class="bg-gray-200">
        @section('sidebar')
        <ul class="bg-white">
            <li><a class="" href="{{ route('home') }}">Accueil</a></li>
            <li><a class="" href="{{ route('home') }}">Connexion</a></li>
            <li><a class="" href="{{ route('home') }}">Inscription</a></li>
        </ul>
        @show

        <div class="container mx-auto ">
            @yield('content')
        </div>
    </div>
    
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- Bootstrap JS -->
    <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>-->
</body>
</html>