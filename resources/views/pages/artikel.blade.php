@extends('layout.index')
@section('content')
<section id="customers-reviews" class="position-relative padding-large">
    <div class="container col-md-7">
        <div class="section-title text-center">
            <h3 style="font-size: 19px;font-family: 'SortsMillGoudy-Regular', sans-serif;margin-bottom: unset;">Artikel Terbaru</h3>
        </div>
        <div class="swiper testimonial-swiper" id="artikel-desc" style="max-width: 42%;">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <p class="text-center" style="font-size: 13px;color:#818274;font-family:'SortsMillGoudy-Regular'">Reswara Park - Where modern design meets the serenity of the tropics</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="card card-artikel px-0 pb-5 m-3" style="width:310px">
                <div class="p-3">
                    <img class="card-img-top" src="images/home3.png" alt="Card image" style="width:100%;">
                </div>
                <div class="px-3 py-2 ms-4" style="background: linear-gradient(90deg, #D9B770 0%, #FC466B 100%);width: fit-content;border-radius: 50%;z-index: 99;margin-top: -40px;">
                    <p class="m-0" style="font-weight: 800;color: #fff;font-size: 16px;">07</p>
                    <p class="m-0" style="font-size: 12px;color: #fff;text-align: center;">Mar</p>
                </div>
                <div class="card-body d-flex flex-column">
                    <p class="card-text" style="font-size: 15px;">Keunggulan Memiliki Rumah di Area Jakarta Timur</p>
                    <div class="d-flex mt-auto">
                    <p style="color: #D9B770;font-size: 13px;letter-spacing: 1px;align-items: center;"><i class="fa-regular fa-calendar"></i> 03/07/2024</p>
                    <p style="color: #D9B770;font-size: 13px;letter-spacing: 1px;align-items: center;margin-left: 1cm;"><i class="fa fa-folder-open"></i>Artikel</p>
                    </div>
                    <div class="d-flex flex-column mt-auto">
                    <p class="card-text" style="font-size: 14px;color: #636060;">Terdapat beberapa keunggulan memiliki rumah di Jakarta Timur. Khususnya area Bambu Apus, antara lain: Lokasi…</p>
                    <a href="{{route('detail-artikel', ['slug' => 'keunggulan-memiliki-rumah-area-jakarta-timur'])}}" class="px-4 py-2" style="background-color: #D9B770;color: #fff;font-size: 14px;width: fit-content;border-radius: 5px;position: absolute;bottom: 10px;">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection