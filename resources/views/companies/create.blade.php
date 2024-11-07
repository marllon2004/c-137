@extends('layouts.main')

@section('title', 'Cadastrar Empresa')

@section('content')

<head>
    <link rel="stylesheet" href="/css/register.css"></link>   
</head>

<div class="style-container">
    <div class="style-container-card">
        <h1>Cadastrar empresa</h1>
        <form action="/companies" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Nome da Empresa:</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Nome da empresa">
            </div>
            <div class="form-group">
                <label for="title">CNPJ:</label>
                <input type="text" class="form-control" id="cnpj" name="cnpj" placeholder="CNPJ da empresa">
            </div>
            <div class="form-group">
                <label for="title">Data de fundação:</label>
                <input type="date" class="form-control" id="foundation" name="foundation" placeholder="Fundação do evento">
            </div>
            <div class="form-group">
                <label for="title">Sobre:</label>
                <textarea name="description" id="description" class="form-control" placeholder="Descrição da empresa"></textarea>
            </div>

            <div class="button-container">
                <button class="btn">Cadastrar empresa</button>
            </div>

        </form>
    </div>
</div>

@endsection