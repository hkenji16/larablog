@extends('layouts/main')

@section('content')
    <h1>{{ $post->author->name }}</h1>

    {{ $post->post_content }}

    <ul>
        @foreach ($comments as $comment )
        <li>{{ $comment->comment_content }}</li>
        @endforeach
    </ul>

    <form method="POST" action="/articles/{post_name}">
    {{ csrf_field() }}
        <div>
            <input type="text" name="name" placeholder="Votre nom">
        </div>
        <div>
            <input type="text" name="email" placeholder="Votre adresse email">
        </div>
        <div>
            <textarea name="content" placeholder="Votre message"></textarea>
        </div>
        <div>
            <input type="hidden" name="id" value="{{$post->id}}">
        </div>
        <div>
            <button type="submit">Envoyer</button>
        </div>
    </form>
@endsection