@extends('layout.index')
@section('content')
    <section id="customers-reviews" class="position-relative padding-large">
        <div class="container col-lg-9 col-xl-9">
            <div id="title-keunggulan" class="section-title mb-4 text-center">
                <h2 class="mb-4">Where modern design meets the serenity of the tropics</h2>
            </div>
            <div id="desc-keunggulan" class="swiper testimonial-swiper">
                <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <p class="text-center">Lokasi strategis di JI. Mini III, Bambu Apus, Kec. Cipayung, Kota Jakarta Timur. Hadir dengan hunian berkonsep modern tropis dan premium serta lokasi yang strategis dan aksesibilitas yang mudah dijangkau darimana saja menggunakan transportasi apapun membuat Reswara Park menjadi  pilihan tempat tinggal yang tepat.</p>
                </div>
                </div>
            </div>
            <style>
                .icon-box {
                    border: solid rgba(0, 0, 0, 0.055) 1px;
                    padding: 3rem 2rem;
                    display: flex;
                    align-items: center;
                    justify-content: start;
                    height: 100%;
                }
                .icon-box-icon {
                    font-size: 36px;
                    margin-right: 1rem;
                }
                .icon-box-content h4 {
                    font-size: 1.5rem;
                    margin-bottom: 0.5rem;
                }
                .icon-box-content p {
                    font-size: 1rem;
                    margin: 0;
                }
            </style>
            
            <div class="row">
                <div class="col-lg-4">
                    <div class="my-2">
                        <div class="icon-box">
                            <div class="icon-box-icon">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                            <div class="icon-box-content">
                                <h4 class="card-title text-capitalize text-dark">One Gate System</h4>
                                <p>Menjamin keamanan para penghuni cluster ini</p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4">
                        <div class="icon-box">
                            <div class="icon-box-icon">
                                <i class="fas fa-road"></i>
                            </div>
                            <div class="icon-box-content">
                                <h4 class="card-title text-capitalize text-dark">Row Jalan 7 Meter</h4>
                                <p>Membuat nyaman untuk lalu lalang kendaraan para penghuni</p>
                            </div>
                        </div>
                    </div>
                </div>
            
                <div class="col-lg-4 d-flex align-items-center">
                    <div class="w-100 my-2">
                        <div class="icon-box">
                            <div class="icon-box-icon">
                                <i class="far fa-clock"></i>
                            </div>
                            <div class="icon-box-content">
                                <h4 class="card-title text-capitalize text-dark">Lokasi Strategis</h4>
                                <p>Membuat efisiensi waktu Anda di area sibuk Jakarta</p>
                            </div>
                        </div>
                    </div>
                </div>
            
                <div class="col-lg-4">
                    <div class="my-2">
                        <div class="icon-box">
                            <div class="icon-box-icon">
                                <i class="fas fa-random"></i>
                            </div>
                            <div class="icon-box-content">
                                <h4 class="card-title text-capitalize text-dark">Underground Electricity</h4>
                                <p>Meningkatkan keselamatan, keamanan serta estetika di lingkungan</p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4">
                        <div class="icon-box">
                            <div class="icon-box-icon">
                                <i class="fas fa-gift"></i>
                            </div>
                            <div class="icon-box-content">
                                <h4 class="card-title text-capitalize text-dark">Best Price</h4>
                                <p>Harga perdana yang sulit Anda tolak dengan promo-promo menarik</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection