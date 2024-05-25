@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mt-5 mb-4">Ajouter un nouveau Formateur</h1>
        <form action="{{ route('formateurs.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nom" class="form-label">Nom:</label>
                <input type="text" class="form-control" id="nom" name="nom">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email :</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="mb-3">
                <label for="telephone" class="form-label">Telephone :</label>
                <input type="text" class="form-control" id="telephone" name="telephone">
            </div>
            <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>
    </div>
@endsection
