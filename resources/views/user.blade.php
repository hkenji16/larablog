@extends('layouts/main')

@section('content')
    <form method="POST" action="/user/{name}">
    {{ csrf_field() }}
        <div>
        <input type="text" name="name" value="{{ $user -> name }}">
        </div>
        <div>
            <input type="text" name="email" value="{{ $user -> email }}">
        </div>
        <div>
            <input type="text" name="password" placeholder="Nouveau mot de passe"></textarea>
        </div>
        <div>
            <input type="text" name="password_confirmation" placeholder="Confirmer mot de passe"></textarea>
        </div>
        <div>
        <input type="hidden" name="id" value="{{ $user -> id }}">
        </div>
        <div>
            <button type="submit">Envoyer</button>
        </div>
    </form>
@endsection
