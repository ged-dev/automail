@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Accueil</h1>
    </div>
    @foreach($users as $user)
        {{ $user->name }}
    @endforeach
@endsection