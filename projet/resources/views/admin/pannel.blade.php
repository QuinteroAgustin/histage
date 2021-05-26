@extends('layouts.app')
@section('title', 'Connexion')
@section('content')
    
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

    <table class="bg-yellow-200">
        <tr  class="bg-gray-400 text-2xl text-white">
            <th>id</th>
            <th>role</th>
            <th><a class="bg-blue-300 pl-3 pr-3 rounded hover:bg-blue-600" href="{{ route('createRole') }}">Add</a></th>
        </tr>
        @foreach ($roles as $role)
            <tr class="hover:bg-gray-200">
                <td>{{ $role->id }}</td>
                <td>{{ $role->libRole }}</td>
                <td><a class="bg-blue-300 pl-3 pr-3 rounded hover:bg-blue-600" href="{{ route('editRole', ['id'=>$role->id]) }}">Edit</a></td>
            </tr>
            
        @endforeach
    </table>
@endsection