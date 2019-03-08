@extends('layouts/main')

@section('content')
    <h1>Nouvel article</h1>

    <form method="POST" action="/admin/articles">
    {{ csrf_field() }}
        <div>
            <input type="text" name="title" placeholder="Titre de l'article">
        </div>
        <div>
            <input type="text" name="name" placeholder="Nom de l'article">
        </div>
        <div>
            <textarea name="content" placeholder="Contenu de l'article"></textarea>
        </div>
        <div>
            <button type="submit">Envoyer</button>
        </div>
    </form>
@endsection