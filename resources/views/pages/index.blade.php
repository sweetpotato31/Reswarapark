@extends('layout.index')
@section('content')
    <section id="billboard" class="position-relative align-items-center bg-light-gray">
        <div class="swiper-container" style="width: 100%; height: 80vh;">
        <div class="banner-content d-flex align-items-start mt-5 flex-column" style="z-index:9999; position: absolute; top: 30%; left:0; width: fit-content;margin-left:70px !important;margin: 40px;">
            <h1 class="mb-5" style="font-family:'SortsMillGoudy-Regular; font-size: calc(1.5rem + 1vw);text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.9);">RESWARA PARK</h1>
            <p class="m-0 mb-2" style="color: #ffffff; font-family: 'SortsMillGoudy-Regular'; font-size: calc(1rem + 0.5vw);text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.9);"> <i class="fa fa-map-marker" style="color: red"></i> Bambu Apus - Jakarta Timur</p>
            <p class="m-0" style="color: #ffffff; font-family: 'SortsMillGoudy-Regular'; font-size: calc(1rem + 0.5vw);text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.9);"> Welcome to Reswara Park <span style="font-style: italic">"Empowering you to make the right move"</span></p>
            <a href="{{route('unit')}}" class="btn mt-5 py-3">Info Lanjut <span><i class="fas fa-angle-right ms-2"></i></span></a>
        </div>
        <div class="swiper-wrapper">
            <div class="swiper-slide" style="background-image: url(images/home1.jpg); background-size: cover; background-repeat: no-repeat; background-position: bottom; display: flex; align-items: center;">
            <div class="container ms-0">
                <div class="row d-flex flex-column-reverse flex-md-row align-items-center">
                <div class="col-md-12 offset-md-1 mt-5 mt-md-0 text-center text-md-start">
                    
                </div>
                </div>
            </div>
            </div>
            <div class="swiper-slide" style="background-image: url(images/home2.png); background-size: cover; background-repeat: no-repeat; background-position: bottom; display: flex; align-items: center;">
            <div class="container ms-0">
                <div class="row d-flex flex-column-reverse flex-md-row align-items-center">
                <div class="col-md-12 offset-md-1 mt-5 mt-md-0 text-center text-md-start">
                </div>
                </div>
            </div>
            </div>
            <div class="swiper-slide" style="background-image: url(images/home3.png); background-size: cover; background-repeat: no-repeat; background-position: bottom; display: flex; align-items: center;">
            <div class="container ms-0">
                <div class="row d-flex flex-column-reverse flex-md-row align-items-center">
                <div class="col-md-12 offset-md-1 mt-5 mt-md-0 text-center text-md-start">
                    
                </div>
                </div>
            </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-next" style="color: #3A3C25;"></div>
        <div class="swiper-button-prev" style="color: #3A3C25;"></div>
        </div>
    </section>
@endsection