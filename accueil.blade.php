@extends('layout')

@section('content')
    <h1>Bienvenue sur la Plateforme de Cours !</h1>
    <p>Explorez nos catégories de cours en fiscalité et développement web.</p>
    <div class="mt-4">
        <a href="{{ route('fiscalite') }}" class="btn btn-primary me-2">Découvrir la Fiscalité</a>
        <a href="{{ route('devweb') }}" class="btn btn-success">Découvrir le Dev Web</a>
    </div>
@endsection
