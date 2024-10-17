@extends('layouts.main')

@section('title', 'Criar Categoria')

@section('content')

<div class="style-container">
    <div class="style-container-card">
        <h1>Cadastrar categoria</h1>
        <form action="/categories" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Nome da Categoria:</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Nome da categoria">
            </div>
            <div class="form-group">
                <label for="title">Descrição:</label>
                <textarea name="description" id="description" class="form-control" placeholder="Descrição da categoria"></textarea>
            </div>

            <div class="button-container">
                <button class="btn">Criar Categoria</button>
            </div>

        </form>
    </div>
</div>

@endsection