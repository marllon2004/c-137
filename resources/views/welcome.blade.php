@extends('layouts.main')

@section('title', 'C-137')

@section('content')

<head>
    <link rel="stylesheet" href="/css/index/home.css"></link>   
</head>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const radios = document.querySelectorAll('.input-radio');
        const img = document.getElementById('imagembraba');
        let count = 1;
        let interval;

        document.getElementById("radio" + count).checked = true;

        function nextImage() {
            count++;

            if (count > radios.length) {
                count = 1;
            }

            document.getElementById("radio" + count).checked = true;
            img.src = document.getElementById("radio" + count).value;
        }

        interval = setInterval(nextImage, 10000);

        radios.forEach(radio => {
            radio.onclick = function() {
                img.src = this.value;

                clearInterval(interval);
                
                interval = setInterval(nextImage, 10000);
            };
        });
    });
</script>

<div class="welcome">
    <div class="slider">
        <div class="slides">
            <input type="radio" name="radio-btn" id="radio1" class="input-radio" value="/img/rick.jpg">
            <input type="radio" name="radio-btn" id="radio2" class="input-radio" value="/img/1.jpeg">
            <input type="radio" name="radio-btn" id="radio3" class="input-radio" value="/img/3.jpeg">

            <div class="slide first">
                <img id="imagembraba" src="/img/rick.jpg" alt="cod1"/>
            </div>

            <div class="navigation-auto">
                <div class="auto-btn1"></div>
                <div class="auto-btn2"></div>
                <div class="auto-btn3"></div>
            </div>
        </div>

        <div class="manual-navigation">
            <label for="radio1" class="manual-btn"></label>
            <label for="radio2" class="manual-btn"></label>
            <label for="radio3" class="manual-btn"></label>
        </div>
    </div>

    <div class="icon-container">
        <div class="icon-item">
            <a href="">
                <ion-icon name="cart-outline"></ion-icon>
                <p>OFERTAS</p>
            </a>            
        </div>
        <div class="icon-item">
            <a href="">
                <ion-icon name="qr-code-outline"></ion-icon>
                <p>RESGATAR<br>CÓDIGO</p>
            </a>
        </div>
        <div class="icon-item">
            <a href="">
                <ion-icon name="bag-add-outline"></ion-icon>
                <p>LISTA DE DESEJOS</p>
            </a>
        </div>
    </div>

    <div class="container-explorar">
        <h2>Explorar jogos no universe</h2>
        <a href="/games/dashboard">
            <p>Explore todos os jogos</p>
        </a>
    </div>

    <div class="games-cards">
        @if(count($lastFiveGames) > 0)
            @foreach($lastFiveGames as $game)
                <div class="container-card">
                    <div class="card">
                        <div class="wrapper">
                            <img class="cover-image" src="/img/{{ $game->getCoverImage() }}" alt="">
                        </div>
                        
                        <img class="character" src="/img/{{ $game->getCharacterImage() }}" alt="">
                    </div>
                    <div class="card-body">
                        <p class="card-title">{{ $game->getTitle() }}</p>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
</div>
@endsection