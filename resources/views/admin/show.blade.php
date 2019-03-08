@extends('layouts/main')

@section('content')
    <p>Titre: {{ $post->post_title }}</p>
    <p>Contenu: {{ $post->post_content }}</p>

    <a href="{{ $post->post_name }}/edit">Modifier l'article</a>

    <form action="/admin/articles/{{ $post->post_name }}" method="post">
        {{ csrf_field() }}
        {{ method_field('delete') }}
        <input type="submit" value="Supprimer" />
    </form>

@endsection
