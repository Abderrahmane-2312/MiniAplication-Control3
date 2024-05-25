@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mt-5 mb-4">Liste des stagiaires</h1>
        <a href="{{ route('stagiaires.create') }}" class="btn btn-primary mb-3">Ajouter stagiaire</a>
        <ul class="list-group">
            @foreach ($stagiaires as $stagiaire)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <div>
                        {{ $stagiaire->nom }} - {{ $stagiaire->email }} - {{ optional($stagiaire->formateur)->nom }}
                    </div>
                    <div>
                        <a href="{{ route('stagiaires.edit', $stagiaire->id) }}" class="btn btn-warning btn-sm">Modifier</a>
                        <form action="{{ route('stagiaires.destroy', $stagiaire->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                        </form>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
