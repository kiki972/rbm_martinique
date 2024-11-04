@extends('layouts.app')

@section('content')
    <h1>Liste des Articles</h1>
    <a href="{{ route('articles.create') }}">Créer un article</a>
    <ul>
        @foreach ($articles as $article)
            <li>{{ $article->title }}</li>
        @endforeach
    </ul>
@endsection