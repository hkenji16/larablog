@extends('layouts/main')

@section('content')
    <h1>Articles</h1>
    <a href="/admin/articles/create">Ajouter un nouvel article</a>
    <ul>
    @foreach ( $posts as $post )
        <li><a href="/admin/articles/{{ $post->post_name }}">{{ $post->post_title }}</a></li>
    @endforeach
    </ul>
@endsection
