@extends('layouts.main')

@section('title', 'C-137')

@section('content')

<script>
    function myFunction(element) {
        const slide = element.id
        let image = ''

        switch (slide){
            case 'slide1':
                image = '/img/1.jpeg'
                break;
            case 'slide2':
                image = '/img/2.jpeg'
                break;
            case 'slide3':
                image = '/img/3.jpeg'
                break;
            default:

        }
        document.getElementById('container-sliders').style.backgroundImage="url("+image+")";
        console.log(slide)
    }
</script>

<div id="container-sliders" style='background-image: url("/img/1.jpeg")'>
    <ul class="slider">
        <li style='background-image: url("/img/1.jpeg")'>
            <input type="radio" id="slide1" name="slide" checked>
        </li>
        
        <li style='background-image: url("/img/2.jpeg")'>
            <input type="radio" id="slide2" name="slide">
        </li>
        <li style='background-image: url("/img/3.jpeg")'>
            <input type="radio" id="slide3" name="slide">
        </li>
    </ul>
    <ion-icon id="slide1" style="background-color: red" onclick="myFunction(this)" name="location-outline"></ion-icon>
    <ion-icon id="slide2" style="background-color: red" onclick="myFunction(this)" name="location-outline"></ion-icon>
    <ion-icon id="slide3" style="background-color: red" onclick="myFunction(this)" name="location-outline"></ion-icon>
</div>

<div class="container-novos-lancamentos"></div>
<div class="container-mais-vendidos"></div>
    

@endsection