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
    <div class="swiper-container" style="width: 100%; height: 80vh;">
        <div class="container-fluid offset-md-3 col-md-6 position-absolute mt-5" style="z-index: 10;">
            <div class="section-title text-center d-flex flex-column align-items-center" style="margin-top: 8rem">
                <h3 id="title-contact">Miliki segera unitmu & Dapatkan penawaran special anda!</h3>
            </div>
            <div class="swiper testimonial-swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="d-flex justify-content-center">
                            <p id="span-contact">Price Start From 1,9 M!</p>
                        </div>
                        <div class="">
                            <h2 id="content-contact">
                                Kunjungi Marketing Gallery Kami,
                            </h2>
                            <h2 id="content-contact">
                                Untuk Info Lebih Lanjut atau Hubungi WhatsApp Kami
                            </h2>
                        </div>
                        <div class="d-flex justify-content-center mt-5">
                            <a id="button-contact" class="py-3 px-5" href="https://wa.me/6287877776333" target="_blank">
                                <i class="fa-brands fa-whatsapp me-2"></i>Contact Us!
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-wrapper">
            <div class="swiper-slide" style="background-image: url(images/contact-1.jpg); background-size: cover; background-repeat: no-repeat; background-position: bottom; display: flex; align-items: center;">
                <div class="ms-0 me-0" style="background-color: rgba(0, 0, 0, 0.514);height: 100%;width:100%;align-items: center;">
                    <div class="row d-flex flex-column-reverse flex-md-row align-items-center">
                        <div class="col-md-12 offset-md-1 mt-5 mt-md-0 text-center text-md-start">
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide" style="background-image: url(images/contact-2.jpg); background-size: cover; background-repeat: no-repeat; background-position: bottom; display: flex; align-items: center;">
                <div class="ms-0 me-0" style="background-color: rgba(0, 0, 0, 0.514);height: 100%;width:100%;align-items: center;">
                    <div class="row d-flex flex-column-reverse flex-md-row align-items-center">
                        <div class="col-md-12 offset-md-1 mt-5 mt-md-0 text-center text-md-start">
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide" style="background-image: url(images/contact-3.jpg); background-size: cover; background-repeat: no-repeat; background-position: bottom; display: flex; align-items: center;">
                <div class="ms-0 me-0" style="background-color: rgba(0, 0, 0, 0.514);height: 100%;width:100%;align-items: center;">
                    <div class="row d-flex flex-column-reverse flex-md-row align-items-center">
                        <div class="col-md-12 offset-md-1 mt-5 mt-md-0 text-center text-md-start">
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide" style="background-image: url(images/contact-4.jpg); background-size: cover; background-repeat: no-repeat; background-position: bottom; display: flex; align-items: center;">
                <div class="ms-0 me-0" style="background-color: rgba(0, 0, 0, 0.514);height: 100%;width:100%;align-items: center;">
                    <div class="row d-flex flex-column-reverse flex-md-row align-items-center">
                        <div class="col-md-12 offset-md-1 mt-5 mt-md-0 text-center text-md-start">
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide" style="background-image: url(images/contact-5.jpg); background-size: cover; background-repeat: no-repeat; background-position: bottom; display: flex; align-items: center;">
                <div class="ms-0 me-0" style="background-color: rgba(0, 0, 0, 0.514);height: 100%;width:100%;align-items: center;">
                    <div class="row d-flex flex-column-reverse flex-md-row align-items-center">
                        <div class="col-md-12 offset-md-1 mt-5 mt-md-0 text-center text-md-start">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection