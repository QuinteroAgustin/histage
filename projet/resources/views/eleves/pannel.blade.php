@extends('layouts.app')
@section('content')

<div class="bg-red-200 h-full w-full flex">
    <div class="bg-green-200 px-2 flex flex-col" id="menuleft">
        <a class="bg-pink-200 mx-2 px-2 my-2 rounded" href="#">Mes stages</a>
        <a class="bg-pink-200 mx-2 px-2 mb-2 rounded" href="#">Mes conventions</a>
        <a class="bg-pink-200 mx-2 px-2 mb-2 rounded" href="#">Mes contacts</a>
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
                <th>Actions</th>
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
                <td><a class="bg-yellow-200 hover:bg-yellow-500 rounded mx-1 px-1" href="#">Convention</a></td>
            </tr>
            @endforeach
        </table>
    </div>
</div>

@endsection
