@extends('layout.artikel')
@section('content')
<style>.nav-link{
            font-size: 11px !important
        }    
</style>
<section class="position-relative">
    <div class="container col-md-8 p-5">
        <div class="row" style="box-shadow: 0 0 20px rgba(0, 0, 0, .08);border-radius:15px 15px 0 0 !important">
            <div class="w-100 p-0 d-flex" style="background: linear-gradient(to right, #6f6f5f, #e6e6de); border-bottom:solid 1px rgba(0, 0, 0, 0.034); overflow: hidden;border-radius:15px 15px 0 0 !important">
                <img src="/images/home3.png" alt="" style="width: fit-content;height:140px; display: block; object-fit: cover; object-position: right bottom; clip-path: polygon(0 0, 100% 0, 80% 100%, 0% 100%);">
                <div class="d-flex flex-column justify-content-center" style="height: 140px;">
                    <span class="ms-3" style="font-size: 24px; font-weight: bold; color:#ffffff">Reswara Park</span>
                </div>
            </div>
            <header id="header" class="site-header px-0" style="width: 100%; border-radius: 0 0 15px 15px !important">
                <nav id="header-nav" class="navbar navbar-expand-lg" style="background: linear-gradient(to right, #6f6f5f, #e6e6de); padding-bottom: 15px; padding-top: 15px;">
                    <div class="container">
                        <a class="navbar-brand" href="index.html"></a>
                        <button class="navbar-toggler d-flex d-lg-none order-3 p-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#bdNavbar" aria-controls="bdNavbar" aria-expanded="false" aria-label="Toggle navigation">
                            <svg class="navbar-icon">
                                <use xlink:href="#navbar-icon"></use>
                            </svg>
                        </button>
                        <div class="offcanvas offcanvas-end" tabindex="-1" id="bdNavbar" aria-labelledby="bdNavbarOffcanvasLabel">
                            <div class="offcanvas-body">
                                <ul id="navbar" class="navbar-nav justify-content-center align-items-start align-items-lg-center flex-grow-1">
                                    <li class="nav-item" style="margin-right: 3cm;">
                                        <img src="/images/logo.png" class="logo" width="90">
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link me-4 {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Beranda</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link me-4 {{ request()->routeIs('tentang-kami') ? 'active' : '' }}" href="{{ route('tentang-kami') }}">Tentang Kami</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link me-4 {{ request()->routeIs('lokasi') ? 'active' : '' }}" href="{{ route('lokasi') }}">Lokasi</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link me-4 {{ request()->routeIs('keunggulan') ? 'active' : '' }}" href="{{ route('keunggulan') }}">Keunggulan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link me-4 {{ request()->routeIs('unit') ? 'active' : '' }}" href="{{ route('unit') }}">Tipe Unit</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link me-4 {{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Kontak</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link me-4 {{ request()->routeIs('artikel') ? 'active' : '' }}" href="{{ route('artikel') }}">Artikel</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </header>
            <div class="col-lg-12 col-md-12 p-4">
                <div>
                    <p style="font-size: 13px;color: #6f6f5f"><a href="" style="color: #6f6f5f">Home </a> / <a href="" style="color: #6f6f5f"> Artikel </a> / Keunggulan Memiliki Rumah di Area Jakarta Timur</p>
                </div>
                <div class="d-flex">
                    <div class="icon-box-content" style="overflow: hidden;">
                        <img src="images/Enscape_2023-02-18-08-41-21-min-1024x557.png" alt="" style="max-width: 100%;border-radius:10px;margin-bottom:10px">
                        <h4 class="card-title mb-1 text-capitalize text-dark" style="font-size:30px">Keunggulan Memiliki Rumah di Area Jakarta Timur</h4>
                        <p class="mt-2"><a href="" style="color: #6f6f5f">Artikel</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;29 / 10 / 2024</p>
                        <p class="mb-0" style="font-size:18px !important;text-align:justify">Terdapat beberapa keunggulan memiliki rumah di Jakarta Timur. Khususnya area Bambu Apus, antara lain: </p>
                        <br>
                        <ol style="font-family:'SortsMillGoudy-Regular';font-size:17px !important;text-align:justify;padding-left: 20px;color:#0e0e0ea6">
                            <li style=""><span style="font-weight: 700">Lokasi Strategis:</span> Bambu Apus terletak di Jakarta Timur, yang memiliki akses mudah ke pusat kota dan area bisnis utama. Terdapat banyak fasilitas umum di sekitar area, seperti pasar tradisional, pusat perbelanjaan, rumah sakit, sekolah, dan universitas.</li>
                            <br>
                            <li style=""><span style="font-weight: 700">Lingkungan Hijau:</span> Meskipun terletak di daerah perkotaan, Bambu Apus masih memiliki banyak area hijau dan taman yang membuat lingkungan menjadi lebih sejuk dan asri. Selain itu, Bambu Apus juga dekat dengan Taman Mini Indonesia Indah dan Taman Hutan Raya, yang menjadi tempat rekreasi yang populer di Jakarta.</li>
                            <br>
                            <li style=""><span style="font-weight: 700">Harga Terjangkau:</span> Harga rumah di Bambu Apus relatif terjangkau dibandingkan dengan daerah lain di Jakarta. Hal ini membuat Bambu Apus menjadi pilihan yang baik bagi mereka yang ingin memiliki hunian di daerah strategis dengan harga yang lebih terjangkau.</li>
                            <br>
                            <li style=""><span style="font-weight: 700">Desain Rumah Unik:</span> Karena terbuat dari bambu, rumah di Bambu Apus memiliki desain yang unik dan menarik. Selain itu, bangunan dari bambu juga memiliki keunggulan sebagai bahan yang ramah lingkungan dan tahan terhadap gempa bumi.</li>
                            <br>
                            <li style=""><span style="font-weight: 700">Potensi Investasi:</span> Sebagai daerah yang berkembang, Bambu Apus memiliki potensi untuk meningkatkan nilai properti di masa depan. Hal ini membuat rumah di Bambu Apus juga menjadi pilihan investasi yang menarik.</li>
                        </ol>
                        {{-- <h4 class="card-title mb-1 text-capitalize text-dark" style="font-size:25px">Artikel Lainya</h4>
                        <div class="row">
                            <div class="card card-artikel-other px-0 me-3" style="width:390px;display:flex !important">
                                <div class="p-3">
                                    <img class="card-img-top" src="images/view-reswara-min-1024x568.png" alt="Card image" style="width:100%">
                                </div>
                                <div class="px-3">
                                    <h6>Mengenal Desain Rumah Bergaya Spanyol</h6>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
            <footer id="footer" class="padding-small pb-0" style="background: linear-gradient(to right, #6f6f5f, #e6e6de);border-radius:0 0 15px 15px">
                <div class="container">
                    <div class="row">
                        <div class="footer-top-area">
                        <div class="row d-flex flex-wrap justify-content-between">
                            <div class="col-lg-3 col-sm-6">
                                <div class="footer-menu">
                                    <img src="/images/logo.png" alt="logo" class="img-fluid mb-2" width="120">
                                    <p style="color: #ebebeb;font-size: 11px;">Copyright © 2024. Reswara Park.</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 pb-3">
                                <div class="footer-menu text-capitalize" style="color: #ebebeb !important;">
                                    <h6 class="widget-title text-capitalize pb-2">Visit Our Marketing Gallery : </h6>
                                    <p  style="color: #ebebeb;font-size: 11px;">
                                        <a style="color:#ebebeb" href="https://maps.app.goo.gl/YyebrxvfrWmQtBbT7">
                                            Jl. Mini III B, RT.5/RW.3, Bambu Apus, Kec. Cipayung, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13890                            
                                        </a>
                                    </p>
                                    <p  style="color: #ebebeb;font-size: 11px;">Open Everyday (09.00-17.00 WIB)</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="footer-menu contact-item" style="color: #ebebeb;">
                                    <h6 class="widget-title text-capitalize pb-2">Contact Us</h6>
                                    <p  style="color: #ebebeb;font-size: 11px;">
                                        Email : <br>
                                        <a href="mailto:marketing@reswarapark.com" class="text-decoration-underline"  style="color: #ebebeb;font-size: 11px;">marketing@reswarapark.com</a>
                                    </p>
                                    <p  style="color: #ebebeb;font-size: 11px;">
                                        Whatsapp : <br>
                                        <a href="https://wa.me/6287877776333" class="text-decoration-underline"  style="color: #ebebeb;font-size: 11px;">+62 878-7777-6333</a>
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="footer-menu">
                                    <img src="/images/candra-jaya.png" alt="logo" class="img-fluid mb-2" width="120">
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</section>

@endsection