@extends('layouts.main')

@section('title', 'Cadastrar Plataformas')

@section('content')

<head>
    <link rel="stylesheet" href="/css/register.css"></link>   
</head>

<div class="style-container">
    <div class="style-container-card">
        <h1>Cadastrar plataforma</h1>
        <form action="/platforms" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Nome da Plataforma:</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Nome da plataforma">
            </div>

            <div class="button-container">
                <button class="btn">Cadastrar plataforma</button>
            </div>

        </form>
    </div>
</div>

@endsection