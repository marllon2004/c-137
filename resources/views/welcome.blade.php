@extends('layouts.main')

@section('title', 'C-137')

@section('content')

<script>
    document.addEventListener('DOMContentLoaded', function () {
        let count = 1;
        document.getElementById("radio1").checked = true;

        setInterval(function () {
            nextImage();
        }, 2000);

        function nextImage() {
            count++;

            if (count > 3) {
                count = 1;
            }

            document.getElementById("radio" + count).checked = true;
        
        }
    });
</script>


<div class="slider">
    <div class="slides">
        <input type="radio" name="radio-btn" id="radio1">
        <input type="radio" name="radio-btn" id="radio2">
        <input type="radio" name="radio-btn" id="radio3">

        <div class="slide first">
            <img src="/img/rick.jpg" alt="cod1"/>
        </div>

        <div class="slide">
            <img src="/img/rick.jpg" alt="cod2"/>
        </div>

        <div class="slide">
            <img src="/img/rick.jpg" alt="cod3"/>
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
@endsection