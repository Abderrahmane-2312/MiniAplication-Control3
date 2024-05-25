@extends('layouts.app')

@section('content')
    <h1>دروس المدرب {{ $formateur->nom }}</h1>
    @if($lessons)
        <ul>
            @foreach ($lessons as $lesson)
                <li>{{ $lesson->title }} - {{ $lesson->description }}</li>
            @endforeach
        </ul>
    @else
        <p>لا توجد دروس متاحة حالياً.</p>
    @endif
@endsection

