@extends('layouts.app')
@section('title', 'Rs')
@section('content')

<div class="bg-red-200 h-full w-full flex">
    <div class="bg-green-200 px-2 flex flex-col" id="menuleft">
        @foreach ($sectionsTab as $section)
            <a class="bg-pink-200 mx-2 px-2 mb-2 rounded" href="#">{{ $section }}</a>
        @endforeach
        <a class="bg-pink-200 mx-2 px-2 mb-2 rounded" href="{{ route('createEntreprise') }}">Créer une Entreprises</a>
        <a class="bg-pink-200 mx-2 px-2 mb-2 rounded" href="#">Créer un Stage</a>
    </div>
    <div class="bg-blue-200"  id="center">
        @foreach ($sectionsTab as $key=>$section)
        <div id="{{ $key }}">
            <table>
                <tr>
                    <th>id</th>
                    <th>nom</th>
                    <th>prenom</th>
                    <th>stage</th>
                </tr>
                @foreach ($listeDesEleves as $eleve)
                    @if ($eleve->section_id == $key)
                        <tr>
                            <td>{{ $eleve->id }}</td>
                            <td>{{ $eleve->user->nomUser }}</td>
                            <td>{{ $eleve->user->prenomUser }}</td>
                            <td><a class="bg-yellow-200 hover:bg-yellow-500 rounded px-1 mx-1" href="#">Voir stages</a></td>
                        </tr>
                    @endif
                @endforeach
            </table>

        </div>
        @endforeach

    </div>
</div>


@endsection
