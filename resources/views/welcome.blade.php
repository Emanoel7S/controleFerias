@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="container">
        <h1>Bem-vindo ao Dashboard</h1>
        <p>Este é o painel principal do sistema de férias.</p>

        <!-- Exemplo: mostrar o nome do usuário -->
{{--        <p>Usuário logado: {{ Auth::user()->name }}</p>--}}
    </div>
@endsection
