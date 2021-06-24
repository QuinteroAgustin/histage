@extends('layouts.app')
@section('title', 'Notation stage')
@section('content')
<div class="flex justify-between">
    <!-- Gauche -->
    <div>

    </div>
    <!-- Milieu -->
    <div>
    <!-- Laisse la place pour le content de la page qui va etre appelé -->
    <div class="mx-auto self-center">
        <form action="{{ route('notationEnseignantPost') }}" method="POST">
            @csrf
        <div class="bg-white shadow-lg w-w-9/12 md:flex">
            <div class="p-4 flex-1 md:flex md:flex-col justify-center">
                <h1 class="text-2xl font-bold text-gray-800 mb-2">Notation de stage</h1>
                <div class="border border-black my-2">
                    <p class="border border-t-0 border-r-0 border-l-0 border-black">Titre du stage :</p><p>{{ $stage->titreStage }}</p>
                    <p class="border border-r-0 border-l-0 border-black">Année du stage :</p><p>{{ $stage->anneescolaire->libAnneeScolaire }}</p>
                </div>
                <input class="hidden" type="text" value="{{ $stage->id }}" name="stage_id">

                @foreach ($typeindicateurs as $typeindicateur)
                    <div class="border border-black my-2">
                        <table class="w-full">
                            <tr class="border border-black">
                                <th class="border border-black">{{ $typeindicateur->libTypeIndicateur }}</th>
                                <th >Validé ?</th>
                                <th></th>
                            </tr>
                            @foreach ($typeindicateur->indicateurs as $indicateur)
                            <tr class="hover:bg-gray-200">
                                <td class="border border-black">{{ $indicateur->libIndicateur }}</td>
                                <td>
                                    <input type="radio" id="notation_{{ $typeindicateur->id }}_{{ $indicateur->id }}" name="notation_{{ $typeindicateur->id }}_{{ $indicateur->id }}" value="1"
                                    checked>
                                    <label for="notation_{{ $typeindicateur->id }}_{{ $indicateur->id }}">Oui</label>
                                </td>
                                <td>
                                    <input type="radio" id="notation_{{ $typeindicateur->id }}_{{ $indicateur->id }}" name="notation_{{ $typeindicateur->id }}_{{ $indicateur->id }}" value="0"
                                    checked>
                                    <label for="notation_{{ $typeindicateur->id }}_{{ $indicateur->id }}">Non</label>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                @endforeach

                <div class="mb-4">
                    <label class="block text-gray-600 mb-2" for="commentaire">Autre commentaire : </label>
                    <input class="border shadow py-2 px-3 text-gray-700 w-full focus:shadow-outline" type="text" name="commentaire" id="commentaire">
                </div>

                <button type="submit" class="bg-blue-500 text-white mt-3 px-4 py-2 rounded hover:bg-green-500">Noter</button>
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
