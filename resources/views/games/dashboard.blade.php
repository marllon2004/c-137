@extends('layouts.main')

@section('title', 'Dashboard Jogos')

@section('content')

<head>
    <script src="/js/script.js"></script>
    <link rel="stylesheet" href="/css/styles.css"></link>   
     
</head>

<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>Todos os jogos</h1>
</div>
<div class="col-md-10 offset-md-1 games-cards">
    @if(count($games) > 0)
        @foreach($games as $game)
            <div class="container-card">
                <div class="card">
                    <div class="wrapper">
                        <img class="cover-image" src="/img/{{ $game->getCoverImage()}}" alt="">
                    </div>
                    
                    <img class="character" src="/img/{{ $game->getCharacterImage()}}" alt="">
                </div>
                <div class="card-body">
                    <p class="card-title">{{$game->getTitle()}}</p>
                </div>
            </div>
        @endforeach
    @else
        <p>Sem jogos cadastrados.</p>
    @endif
@endsection