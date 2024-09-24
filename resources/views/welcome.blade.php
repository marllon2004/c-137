@extends('layouts.main')

@section('title', 'C-137')

@section('content')

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const radios = document.querySelectorAll('.input-radio');
        let count = 1; // Contador para a mudança automática
        let interval; // Armazenará o intervalo da mudança automática
        const img = document.getElementById('imagembraba');

        // Função para mudar a imagem automaticamente
        function nextImage() {
            count++;
            if (count > radios.length) {
                count = 1;
            }
            document.getElementById("radio" + count).checked = true; // Marca o próximo rádio
            img.src = document.getElementById("radio" + count).value; // Muda a imagem
        }

        // Inicia o intervalo para mudar a imagem automaticamente
        interval = setInterval(nextImage, 2000);

        // Adiciona evento de clique aos botões de rádio
        radios.forEach(radio => {
            radio.onclick = function() {
                img.src = this.value; // Muda a imagem
                clearInterval(interval); // Para a mudança automática
                // Reinicia o intervalo para continuar mudando as imagens
                interval = setInterval(nextImage, 2000);
            };
        });
    });
</script>


<div class="slider">
    <div class="slides">
        <input type="radio" name="radio-btn" id="radio1" class="input-radio" value="/img/rick.jpg">
        <input type="radio" name="radio-btn" id="radio2" class="input-radio" value="/img/1.jpeg">
        <input type="radio" name="radio-btn" id="radio3" class="input-radio" value="/img/3.jpeg">

        <div class="slide first">
            <img id="imagembraba" src="/img/rick.jpg" alt="cod1"/>
        </div>

        <!--<div class="slide">
            <img src="/img/rick.jpg" alt="cod2"/>
        </div>

        <div class="slide">
            <img src="/img/rick.jpg" alt="cod3"/>
        </div>-->

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
@endsection