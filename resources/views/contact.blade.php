@extends('layouts/main')

@section('content')
    <h1>Contact</h1>
    <form method="POST" action="/contact">
    {{ csrf_field() }}
        <div>
            <input type="text" name="name" placeholder="Votre nom">
        </div>
        <div>
            <input type="text" name="email" placeholder="Votre adresse email">
        </div>
        <div>
            <textarea name="message" placeholder="Votre message"></textarea>
        </div>
        <div>
            <button type="submit">Envoyer</button>
        </div>
    </form>
@endsection