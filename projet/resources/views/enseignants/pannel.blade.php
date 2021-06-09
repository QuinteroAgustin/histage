@extends('layouts.app')
@section('title', 'Enseignant')
@section('content')

<div class="bg-red-200 h-full w-full flex">
    <div class="bg-green-200 px-2 flex flex-col" id="menuleft">
        <a class="bg-pink-200 mx-2 px-2 my-2 rounded" href="#">Sections</a>
        <a class="bg-pink-200 mx-2 px-2 mb-2 rounded" href="#">Etudiants</a>
        <a class="bg-pink-200 mx-2 px-2 mb-2 rounded" href="#">Mes stages</a>
    </div>
    <div class="bg-blue-200"  id="center">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, vero. Vero quo eos enim quas asperiores consequatur. Unde delectus velit earum molestias dolorem, fuga eos enim? Cumque eaque neque harum.</p>
    </div>
</div>

@endsection
