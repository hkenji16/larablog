@extends('layouts/main')

@section('content')
<h1>Modifier l'article {{ $post->post_name }}</h1>
<form method="POST" action="/admin/articles/{{ $post->post_name }}">
    {{ csrf_field() }}
    @method('PUT')
        <div>
            <input type="text" name="title" value="{{ $post->post_title }}">
        </div>
        <div>
            <input type="text" name="name" value="{{ $post->post_name }}">
        </div>
        <div>
            <textarea name="content">{{ $post->post_content }}</textarea>
        </div>
        <div>
            <button type="submit">Envoyer</button>
        </div>
    </form>
@endsection
