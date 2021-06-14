@extends('layouts.app')
@section('title', 'Rs')
@section('content')

<div class="bg-red-200 h-full w-full flex">
    <div class="bg-green-200 px-2 flex flex-col" id="menuleft">
        @foreach ($sectionsTab as $section)
            <a class="bg-pink-200 mx-2 px-2 mb-2 rounded" href="#">{{ $section }}</a>
        @endforeach
        <a class="bg-pink-200 mx-2 px-2 mb-2 rounded" href="{{ route('createEntreprise') }}">Créer une Entreprises</a>
    </div>
    <div class="bg-blue-200"  id="center">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, vero. Vero quo eos enim quas asperiores consequatur. Unde delectus velit earum molestias dolorem, fuga eos enim? Cumque eaque neque harum.</p>
    </div>
</div>


@endsection
