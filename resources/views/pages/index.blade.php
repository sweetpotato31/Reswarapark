@extends('layout.index')
@section('content')
<style>
    html, body {
        margin: 0;
        padding: 0;
        width: 100%;
        height: auto; /* Biarkan tinggi menyesuaikan dengan konten */
        overflow-x: hidden; /* Mencegah scroll horizontal */
    }
</style>
    <section id="billboard" class="position-relative align-items-center bg-light-gray">
        <div id="main-home" class="swiper-container">
        <div class="banner-content d-flex align-items-start mt-5 flex-column" style="z-index:2; position: absolute; top: 30%; left:0; width: fit-content;margin-left:70px !important;margin: 40px;">
            <h1 class="mb-5" id="title-home">RESWARA PARK</h1>
            <p class="m-0 mb-2" id="content-home"> <i class="fa fa-map-marker" style="color: red"></i> Bambu Apus - Jakarta Timur</p>
            <p class="m-0" id="content-home"> Welcome to Reswara Park <span style="font-style: italic">"Empowering you to make the right move"</span></p>
            <a href="{{route('unit')}}" class="btn mt-5 py-3">Info Lanjut <span><i class="fas fa-angle-right ms-2"></i></span></a>
        </div>
        <div class="swiper-wrapper">
            <div class="swiper-slide" style="background-image: url(images/home1.webp); background-size: cover; background-repeat: no-repeat; background-position: bottom; display: flex; align-items: center;">
                <div class="container ms-0">
                    <div class="row d-flex flex-column-reverse flex-md-row align-items-center">
                        <div class="col-md-12 mt-5 mt-md-0 text-center text-md-start">
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide" style="background-image: url(images/home2.webp); background-size: cover; background-repeat: no-repeat; background-position: bottom; display: flex; align-items: center;">
                <div class="container ms-0">
                    <div class="row d-flex flex-column-reverse flex-md-row align-items-center">
                        <div class="col-md-12 mt-5 mt-md-0 text-center text-md-start">
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide" style="background-image: url(images/home3.webp); background-size: cover; background-repeat: no-repeat; background-position: bottom; display: flex; align-items: center;">
                <div class="container ms-0">
                    <div class="row d-flex flex-column-reverse flex-md-row align-items-center">
                        <div class="col-md-12 mt-5 mt-md-0 text-center text-md-start">
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