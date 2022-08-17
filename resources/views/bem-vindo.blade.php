@extends('layouts.app')

@section('content')
    @auth

        <h1>Usuário Autenticado</h1>
        <p>ID: {{ Auth::user()->id }}</p>
        <p>Nome: {{ Auth::user()->name }}</p>
        <p>E-mail: {{ Auth::user()->email }}</p>

    @endauth


    @guest

        <h1>Olá visitante, tudo bem ?</h1>

    @endguest
@endsection
