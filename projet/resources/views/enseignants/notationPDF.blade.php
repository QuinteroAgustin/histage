<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $stage->titreStage }} - Notation</title>
    {!! $css !!}
</head>
<body>
    <div class="">
        <div class="">
            <div class="flex flex-grow justify-items-center justify-between">
                <div class="w-52 h-20">{!! $img !!} </div>
                <div>Fiche d'évaluation stage</div>
            </div>
            <div>{{ $stage->anneescolaire->libAnneeScolaire }}</div>
            <hr>
        </div>

        <div class="">
            @foreach ($stage->users as $user)
                @if ($user->role_id == 2)
                    <p>Visite</p>
                    <p>Nom du professeur: {{ $user->titreUser }} {{ $user->nomUser }} {{ $user->prenomUser }}</p>
                    <p>Date: {{ $stage->dateEvalStage }}</p>
                @endif
            @endforeach
            <hr>
            <div class="">
                <div id="gauche" style="width:40%; float:left; margin:0;">
                    @foreach ($stage->users as $user)
                        @if ($user->role_id == 3)
                            <p>Eleve</p>
                            <p>Nom: {{ $user->titreUser }} {{ $user->nomUser }}</p>
                            <p>Prénom: {{ $user->prenomUser }}</p>
                            <p>Tél: {{ $user->telephoneUser }}</p>
                            <p>Port: {{ $user->mobileUser }}</p>
                        @endif
                    @endforeach
                </div>
                <div id="droite" style="float:right; width:60%; margin:0; padding: 0 0 0 1em;">
                    <p>Entreprise</p>
                    <p>Nom: {{ $stage->entreprise->nomEntreprise }}</p>
                    <p>Adresse: {{ $stage->entreprise->numAdrEntreprise }} {{ $stage->entreprise->libAdrEntreprise }} {{ $stage->entreprise->codePostalEntreprise }} {{ $stage->entreprise->villeEntreprise }}</p>
                    <p>Tél: {{ $stage->entreprise->telephoneEntreprise }}</p>
                </div>
            </div>
            <hr>
            @foreach ($stage->users as $user)
                @if ($user->role_id == 4)
                    <p>Maitre de stage</p>
                    <p>Nom: {{ $user->titreUser }} {{ $user->nomUser }} {{ $user->prenomUser }}</p>
                    <p>Fonction: {{ $user->contact->fonctionContact }}</p>
                    <p>Tél: {{ $user->telephoneUser }}</p>
                    <p>Port: {{ $user->mobileUser }}</p>
                    <p>Mail: {{ $user->emailUser }}</p>
                @endif
            @endforeach
            <hr>
        </div>

        <div class="">
            @foreach ($typeindicateurs as $typeindicateur)
            <table>
                <tr>
                    <th>{{ $typeindicateur->libTypeIndicateur }}</th>
                    <th>Status</th>
                </tr>
                @foreach ($stage->indicateurs as $indicateur)
                    @if($indicateur->typeindicateur_id == $typeindicateur->id)
                    <tr>
                        <td>{{ $indicateur->libIndicateur }}</td>
                        <td>@if ($indicateur->pivot->repCategorieIndicateur == 0)  Non validé @endif</td>
                        <td>@if ($indicateur->pivot->repCategorieIndicateur == 1)  Validé @endif</td>
                    </tr>
                    @endif
                @endforeach
            </table>
            <hr>
            @endforeach
            <p>Commentaire : {{ $stage->commentaireEvalStage }}</p>
        </div>
    </div>
</body>
</html>
