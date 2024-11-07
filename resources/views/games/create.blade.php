@extends('layouts.main')

@section('title', 'Cadastrar Jogo')

@section('content')

<head>
    <link rel="stylesheet" href="/css/register.css"></link>   
</head>

<div class="style-container" style="width: 1000px">
    <div class="style-container-card">
        <h1>Cadastrar jogo</h1>
        <form action="/games" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-row" style="display: flex; gap: 15px;">
                <div class="form-group col-md-4">
                    <label for="title">Nome da Jogo:</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Nome do jogo">
                </div>
                <div class="form-group col-md-4">
                    <label for="release_date">Data de lançamento:</label>
                    <input type="date" class="form-control" id="release_date" name="release_date" placeholder="Data de lançamento">
                </div>
                <div class="form-group col-md-3">
                    <label for="price">Preço:</label>
                    <input type="text" class="form-control" id="price" name="price" placeholder="Preço do jogo">
                </div>
            </div>
            
            <div class="form-row" style="display: flex; gap: 15px;">
                 <div class="form-group col-md-4">
                    <label for="company">Empresa:</label>
                    <select class="select" name="company" id="company">
                    @foreach($companies as $company)
                        <option value="{{$company->getId()}}">{{$company->getName()}}</option>
                    @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="cover_image">Capa do Jogo:</label>
                    <input type="file" class="form-control-file file-upload" id="cover_image" name="cover_image">
                </div> 
                <div class="form-group">
                    <label for="character_image">Personagem do Jogo:</label>
                    <input type="file" class="form-control-file" id="character_image" name="character_image">
                </div> 
            </div>

            <div class="form-row form-row-checkbox">
                <div class="form-group form-group-checkbox">
                    <label for="title">Categorias:</label>
                    @if(count($categories) > 0)
                        @foreach($categories as $category)
                            <div class="checkbox-item">
                                <input type="checkbox" name="items[]" value="{{ $category->getName() }}">
                                <span>{{ $category->getName() }}</span>
                            </div>
                        @endforeach
                    @endif
                </div>
                
                <div class="form-group form-group-checkbox">
                    <label for="title">Plataformas:</label>
                    @if(count($gamingPlatforms) > 0)
                        @foreach($gamingPlatforms as $platform)
                            <div class="checkbox-item">
                                <input type="checkbox" name="items[]" value="{{ $platform->getName() }}">
                                <span>{{ $platform->getName() }}</span>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>

            <div class="form-group">
                <label for="description">Descrição:</label>
                <textarea name="description" id="description" class="form-control" placeholder="Descrição do jogo"></textarea>
            </div>

            <div class="button-container">
                <button class="btn">Cadastrar jogo</button>
            </div>
        </form>
    </div>
</div>


@endsection