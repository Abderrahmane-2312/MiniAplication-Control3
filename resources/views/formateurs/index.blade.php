@extends('layouts.app')

@section('content')
    <div class="container">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <h1 class="mt-5 mb-4">Liste des formateurs</h1>
        <a href="{{ route('formateurs.create') }}" class="btn btn-primary mb-3">Ajouter formateur</a>
        <ul class="list-group">
            @foreach ($formateurs as $formateur)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <div>
                        {{ $formateur->nom }} - {{ $formateur->email }}
                    </div>
                    <div>
                        <a href="{{ route('formateurs.edit', $formateur->id) }}" class="btn btn-warning btn-sm">Modifier</a>
                        <form action="{{ route('formateurs.destroy', $formateur->id) }}" method="POST" class="d-inline">
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
