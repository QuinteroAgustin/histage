@extends('layouts.app')
@section('title', 'Connexion')
@section('content')
<div class="bg-red-200 h-full flex">
    <div class="flex-row m-4 p-2 bg-white">
        <div class="flex flex-col justify-between items-center">
            <ul class="flex-grow">
                <li><button class="bg-blue-200 hover:bg-blue-600 rounded mb-1 w-full" id="buttonUser">Utilisateurs</button></li>
                <li><button class="bg-blue-200 hover:bg-blue-600 rounded mb-1 w-full" id="buttonRole">Roles</button></li>
                <li><button class="bg-blue-200 hover:bg-blue-600 rounded mb-1 w-full" id="buttonAnnee">Annees Scolaires</button></li>
                <li><button class="bg-blue-200 hover:bg-blue-600 rounded mb-1 w-full" id="buttonSection">Sections</button></li>
            </ul>
            <ul class="flex-grow">
                <li><a class="bg-blue-200 hover:bg-blue-600 rounded mb-1 px-2 w-full" href="{{ route('createUser') }}">Add User</a></li>
                <!--<li><a class="bg-blue-200 hover:bg-blue-600 rounded mb-1 px-2 w-full" href="{{ route('createRole') }}">Add Role</a></li> -->
                <li><a class="bg-blue-200 hover:bg-blue-600 rounded mb-1 px-2 w-full" href="{{ route('createAnneeScolaire') }}">Add Annee</a></li>
                <li><a class="bg-blue-200 hover:bg-blue-600 rounded mb-1 px-2 w-full" href="{{ route('createSection') }}">Add Section</a></li>
            </ul>
        </div>
    </div>
    <div  class="flex-row overflow-y-auto m-4 p-2 bg-green-200" id="pannelUser">
        <table class="bg-yellow-200">
            <tr class="bg-gray-400 text-2xl text-white">
                <th>id</th>
                <th>nom</th>
                <th>prenom</th>
                <th>email</th>
                <th>role</th>
                <th>actions</th>
            </tr>
            @foreach ($users as $user)
                <tr class="hover:bg-gray-200">
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->nomUser }}</td>
                    <td>{{ $user->prenomUser }}</td>
                    <td>{{ $user->emailUser }}</td>
                    <td>{{ $user->role->libRole }}</td>
                    <td><a class="bg-blue-300 pl-3 pr-3 rounded hover:bg-blue-600" href="{{ route('editUser', ['id'=>$user->id]) }}">Edit</a></td>
                </tr>

            @endforeach
        </table>
    </div>
    <div class="hidden flex-row m-4 p-2 bg-blue-200" id="pannelRole">
        <table class="bg-yellow-200">
            <tr  class="bg-gray-400 text-2xl text-white">
                <th>id</th>
                <th>role</th>
                <th>actions</th>
            </tr>
            @foreach ($roles as $role)
                <tr class="hover:bg-gray-200">
                    <td>{{ $role->id }}</td>
                    <td>{{ $role->libRole }}</td>
                    <td><a class="bg-blue-300 pl-3 pr-3 rounded hover:bg-blue-600" href="{{ route('editRole', ['id'=>$role->id]) }}">Edit</a></td>
                </tr>

            @endforeach
        </table>
    </div>
    <div class="hidden flex-row m-4 p-2 bg-blue-200" id="pannelAnnee">
        <table class="bg-yellow-200">
            <tr  class="bg-gray-400 text-2xl text-white">
                <th>id</th>
                <th>AnneeScolaire</th>
                <th>actions</th>
            </tr>
            @foreach ($annees as $annee)
                <tr class="hover:bg-gray-200">
                    <td>{{ $annee->id }}</td>
                    <td>{{ $annee->libAnneeScolaire }}</td>
                    <td><a class="bg-blue-300 pl-3 pr-3 rounded hover:bg-blue-600" href="{{ route('editAnneeScolaire', ['id'=>$annee->id]) }}">Edit</a></td>
                </tr>

            @endforeach
        </table>
    </div>
    <div class="hidden flex-row m-4 p-2 bg-blue-200" id="pannelSection">
        <table class="bg-yellow-200">
            <tr  class="bg-gray-400 text-2xl text-white">
                <th>id</th>
                <th>Section</th>
                <th>actions</th>
            </tr>
            @foreach ($sections as $section)
                <tr class="hover:bg-gray-200">
                    <td>{{ $section->id }}</td>
                    <td>{{ $section->libSection }}</td>
                    <td><a class="bg-blue-300 pl-3 pr-3 rounded hover:bg-blue-600" href="{{ route('editSection', ['id'=>$section->id]) }}">Edit</a></td>
                </tr>

            @endforeach
        </table>
    </div>
</div>
<script>
    window.addEventListener('DOMContentLoaded', ()=> {
        const buttonUser = document.querySelector('#buttonUser')
        const buttonRole = document.querySelector('#buttonRole')
        const buttonAnnee = document.querySelector('#buttonAnnee')
        const buttonSection = document.querySelector('#buttonSection')
        const pannelUser = document.querySelector('#pannelUser')
        const pannelRole = document.querySelector('#pannelRole')
        const pannelAnnee = document.querySelector('#pannelAnnee')
        const pannelSection = document.querySelector('#pannelSection')

        buttonUser.addEventListener('click', () => {
            pannelUser.classList.toggle('hidden')
        })
        buttonRole.addEventListener('click', () => {
            pannelRole.classList.toggle('hidden')
        })
        buttonAnnee.addEventListener('click', () => {
            pannelAnnee.classList.toggle('hidden')
        })
        buttonSection.addEventListener('click', () => {
            pannelSection.classList.toggle('hidden')
        })
    })
</script>
@endsection
