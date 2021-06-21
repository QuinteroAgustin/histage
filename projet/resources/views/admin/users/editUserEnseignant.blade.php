@extends('layouts.app')
@section('title', 'Accueil')
@section('content')
<div class="flex justify-between">
    <!-- Gauche -->
    <div>

    </div>
    <!-- Milieu -->
    <div>
    <!-- Laisse la place pour le content de la page qui va etre appelé -->
    <div class="mx-auto self-center">
        <form action="{{ route('editUserEnseignantPost') }}" method="POST">
            @csrf
        <div class="bg-white shadow-lg max-w-lg md:flex">
            <div class="p-4 flex-1 md:flex md:flex-col justify-center">
                <h1 class="text-2xl font-bold text-gray-800 mb-2">Edition d'un enseignant</h1>
                <p class="text-xl">Email : {{ $user->emailUser }}</p>
                <p>Nom : {{ $user->nomUser }}</p>
                <p>Prénom : {{ $user->prenomUser }}</p>

                <input type="text" name="id" id="id" value="{{ $user->id }}" hidden>
                <div class="mb-4">
                    <label class="block text-gray-600 mb-2" for="ligMetier">Nom du métier : </label>
                    <input class="border shadow py-2 px-3 text-gray-700 w-full focus:shadow-outline" type="text" name="ligMetier" id="ligMetier" value="{{ $enseignant->libMetierEnseignant }}">
                </div>
                <table>
                    <tr>
                        <th>Section</th>
                        <th>RS</th>
                    </tr>
                    @foreach ($enseignant->sections as $item)
                    <tr>
                        <td>
                            <div class="mb-4" id="section_selector">
                                <select name="section_{{ $item->pivot->id }}" id="section">
                                    @foreach ($sections as $section)
                                    <option value="{{ $section->id }}" @if ($item->id == $section->id) selected @endif>{{ $section->libSection}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </td>
                        <td>

                            <div class="mb-4" id="section_selector">
                                <select name="isRs_{{ $item->pivot->id }}" id="isRs">
                                    <option value="0" @if($item->pivot->isRs == 0) selected @endif>Non</option>
                                    <option value="1" @if($item->pivot->isRs == 1) selected @endif>Oui</option>
                                </select>
                            </div>
                        </td>
                    </tr>
                    @endforeach

                </table>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-green-500">Editer l'enseignant</button>
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
