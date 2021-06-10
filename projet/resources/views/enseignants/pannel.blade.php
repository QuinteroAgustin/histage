@extends('layouts.app')
@section('title', 'Enseignant')
@section('content')

<div class="bg-red-200 h-full w-full flex">
    <div class="bg-green-200 px-2 flex flex-col" id="menuleft">
        <a class="bg-pink-200 mx-2 px-2 my-2 rounded" href="#">Sections</a>
        <a class="bg-pink-200 mx-2 px-2 mb-2 rounded" href="#">Etudiants</a>
        <a class="bg-pink-200 mx-2 px-2 mb-2 rounded" href="#">Mes stages</a>
    </div>
    <div class="bg-blue-200"  id="stages">
        <table class="border">
            <tr class="bg-white">
                <th>id</th>
                <th>Nom du stage</th>
                <th>Date de début</th>
                <th>Date de fin</th>
                <th>Durée hebdomadaire</th>
                <th>Année du stage</th>
                <th>Entreprise</th>
                <th>Eleve</th>
                <th>Action</th>
            </tr>
            @foreach ($stages as $stage)
            <tr class="text-center">
                <td>{{ $stage->id }}</td>
                <td>{{ $stage->titreStage }}</td>
                <td>{{ $stage->dateDebutStage }}</td>
                <td>{{ $stage->dateFinStage }}</td>
                <td>{{ $stage->dureeHebdoStage }}</td>
                <td>{{ $stage->anneescolaire->libAnneeScolaire }}</td>
                <td>{{ $stage->entreprise->nomEntreprise }}</td>
                @foreach ($stage->users as $user)
                    @if (App\Models\User::find($user->id)->role->id == 3)
                        <td>{{ $user->nomUser }} {{ $user->prenomUser }} </td>
                    @endif
                @endforeach
                <td><a class="bg-yellow-200 rounded hover:bg-yellow-500 mx-1 px-1" href="#">Evaluer</a></button></td>
            </tr>
            @endforeach
        </table>
    </div>
</div>

@endsection
