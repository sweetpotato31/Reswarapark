@extends('layout.index')
@section('content')
<section id="customers-reviews" class="position-relative padding-large">
    <div class="container col-md-7 mt-5">
        <div class="section-title mb-4 text-center mt-5">
        <h2 id="title-lokasi" class="mb-4 mt-5">Rute Menuju Reswara Park</h2>
        </div>
        <div id="content-lokasi" class="swiper testimonial-swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide text-center">
                    <a href="https://maps.app.goo.gl/YyebrxvfrWmQtBbT7" target="_blank">
                        <img src="images/LOKASI.png" width="100%" style="background-size: contain;" alt="">
                    </a>
                        Click Here<i class="fa-regular fa-hand-point-up ms-1 mt-3"></i>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection