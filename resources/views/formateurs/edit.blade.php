@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mt-5 mb-4">Modifier Formateur</h1>
        <form action="{{ route('formateurs.update', $formateur->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nom" class="form-label">Nom:</label>
                <input type="text" class="form-control" id="nom" name="nom" value="{{ $formateur->nom }}">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email :</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $formateur->email }}">
            </div>
            <div class="mb-3">
                <label for="telephone" class="form-label">Telephone:</label>
                <input type="text" class="form-control" id="telephone" name="telephone" value="{{ $formateur->telephone }}">
            </div>
            <button type="submit" class="btn btn-primary">Actualiser</button>
        </form>
    </div>
@endsection
