@extends('layout.index')
@section('content')
<section id="type-unit" class="position-relative padding-large" style="background-color: #EEEEEE;">
    <div class="container col-md-12">
        <div class="section-title text-center">
            <h2 style="font-size: 50px;font-family: 'SortsMillGoudy-Regular', sans-serif;margin-bottom: unset;font-weight: 500;">Pilihan Unit</h2>
            <h2 style="font-size: 55px;font-family: 'SortsMillGoudy-Regular', sans-serif;margin-bottom: unset;">Perumahan Reswara Park</h2>
        </div>
        <div class="testimonial-swiper">
            <div class="">
            <div class="">
                <p class="text-center" style="font-size: 13px;color:#818274;font-family:'SortsMillGoudy-Regular'">Reswara Park - Where modern design meets the serenity of the tropics</p>
            </div>
            </div>
        </div> 
        <style>
            .swiper-container {
                overflow: hidden; /* Hides overflow to ensure only one slide shows fully */
            }

            .swiper-wrapper {
                display: flex;
                transition: transform 0.3s ease;
            }

            .swiper-slide {
                width: 100%; /* Ensures each slide takes the full width of the container */
                flex-shrink: 0;
                opacity: 0; /* Hide inactive slides */
                transition: opacity 0.3s ease;
            }

            .swiper-slide-active {
                opacity: 1;
            }
        </style>
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <?php
                    $cards = [
                        ['image' => 'images/Pilihan Unit_Tipe Ranjana.png', 'name' => 'Ranjana', 'type' => '84/215'],
                        ['image' => 'images/Pilihan Unit_Tipe Ragnala.png', 'name' => 'Ragnala', 'type' => '60/155'],
                        ['image' => 'images/Pilihan Unit_Tipe Raksaka.png', 'name' => 'Raksaka', 'type' => '60/84']
                    ];
                
                    $cardCount = 0;
                    foreach ($cards as $index => $card) {
                        if ($cardCount % 3 == 0) {
                            if ($cardCount > 0) echo '</div>';
                            echo '<div class="swiper-slide d-flex justify-content-center">';
                        }
                ?>

                <div class="card-unit mx-3">
                    <img src="<?= $card['image'] ?>" class="image">
                    <div class="text-default">
                        <div style="position: absolute;bottom: 25px;left:25px">
                            <h4><?= $card['name'] ?></h4>
                            <p>Type <?= $card['type'] ?></p>
                        </div>
                    </div>
                    <div class="overlay">
                        <div class="text">
                            <h4><?= $card['name'] ?></h4>
                            <p>Type <?= $card['type'] ?></p>
                            <button class="button-unit mt-3 border-0" id="open-popup-<?= strtolower($card['name']) ?>">Lihat Detail</button>
                            <a href="https://wa.me/6287877776333" class="button-price">Tanya Harga</a>
                        </div>
                    </div>
                </div>

                <?php
                    $cardCount++;
                    }
                    echo '</div>';
                ?>
            </div>
            
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
            <!-- Add Navigation -->
            <div class="swiper-button-next" style="color: #3A3C25;"></div>
            <div class="swiper-button-prev" style="color: #3A3C25;"></div>
        </div>
    </div>
</section>
<section id="type-unit" class="position-relative padding-large pt-0" style="background-color: #EEEEEE;">
    <div class="container col-md-12">
        <div class="section-title text-center">
            <h2 style="font-size: 55px;font-family: 'SortsMillGoudy-Regular', sans-serif;margin-bottom: unset;">Ruko Reswara Park</h2>
        </div>
        <div class="testimonial-swiper">
            <div class="">
            <div class="">
                <p class="text-center" style="font-size: 13px;color:#818274;font-family:'SortsMillGoudy-Regular'">Reswara Park - Where modern design meets the serenity of the tropics</p>
            </div>
            </div>
        </div> 
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide d-flex justify-content-center">
                    <div class="card-unit mx-3">
                        <img src="images/Unit Ruko.png" class="image">
                        <div class="text-default">
                            <div class="" style="position: absolute;bottom: 25px;left:25px">
                                <h4>Unit Ruko</h4>
                                <p>Type 150/84</p>
                            </div>
                        </div>
                        <div class="overlay">
                            <div class="text">
                                <h4>Unit Ruko</h4>
                                <p>Type 60/155</p>
                                <button class="button-unit mt-3 border-0" id="open-popup-ruko">Lihat Detail</button>
                                <a href="https://wa.me/6287877776333" target="_blank" class="button-price">Tanya Harga</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
            <!-- Add Navigation -->
            <div class="swiper-button-next" style="color: #3A3C25;"></div>
            <div class="swiper-button-prev" style="color: #3A3C25;"></div>
        </div>
    </div>
</section>
<section id="customers-reviews" class="position-relative padding-large pt-0" style="background-color: #EEEEEE;">
    <div class="container col-md-7">
        <div class="section-title mb-5 text-center">
        <h2 class="mb-4" style="font-size:48px;color: black;text-transform: none;">Spesifikasi dan Siteplan</h2>
        </div>
        <div class="swiper-container spek-carousel">
            <div class="swiper-wrapper">
                <div class="swiper-slide d-flex justify-content-center">
                    <div class="card-spek mx-3">
                        <img src="images/spek-1.jpg" alt="Danapati" class="image">
                    </div>
                </div>
                <div class="swiper-slide d-flex justify-content-center">
                    <div class="card-spek mx-3">
                        <img src="images/spek-2.jpg" alt="Danapati" class="image">
                    </div>
                </div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
            <!-- Add Navigation -->
            <div class="swiper-button-next" style="color: #3A3C25;"></div>
            <div class="swiper-button-prev" style="color: #3A3C25;"></div>
        </div>
    </div>
</section>
<div id="popup-ragnala" class="popup-overlay">
    <div class="popup-content-background d-flex" style="margin-top: 2cm;">
        <span class="close-popup">&times;</span>
        <img src="images/Pilihan Unit_Tipe Ragnala.png" alt="Rute The Reswara" width="500">
        <div class="" style="margin-top: 2.5rem;margin-left: 2rem;">
            <h5 style="font-weight: 700;">Ragnala</h5>
            <div class="">
                <p>TIPE RAGNALA (3 LANTAI)</p>
                <br>
                <p>Luas Tanah : 60 m</p>
                <p>Luas Bangunan : 155 m</p>
                <br>
                <p>2 + 1 Kamar Tidur</p>
                <p>3 + 1 Kamar Mandi</p>
                <p>Carport untuk 2 Mobil</p>
                <br>
                <p>Ruang Keluarga</p>
                <p>Ruang Makan</p>
                <p>Dapur</p>
            </div>
        </div>
    </div>
</div>
<div id="popup-ranjana" class="popup-overlay">
    <div class="popup-content-background d-flex" style="margin-top: 2cm;">
        <span class="close-popup">&times;</span>
        <img src="images/Pilihan Unit_Tipe Ranjana.png" width="500">
        <div class="" style="margin-top: 2.5rem;margin-left: 2rem;">
        <h5 style="font-weight: 700;">Ranjana</h5>
        <div class="">
            <p>TIPE RANJANA (3 LANTAI)</p>
            <br>
            <p>Luas Tanah : 84 m</p>
            <p>Luas Bangunan : 215 m</p>
            <br>
            <p>3 + 1 Kamar Tidur</p>
            <p>3 + 1 Kamar Mandi </p>
            <p>Carport untuk 2 Mobil </p>
            <br>
            <p>Ruang Keluarga</p>
            <p>Ruang Makan</p>
            <p>Dapur</p>
        </div>
        </div>
        <!-- Tambahkan konten sesuai kebutuhan -->
    </div>
</div>
<div id="popup-raksaka" class="popup-overlay">
    <div class="popup-content-background d-flex" style="margin-top: 2cm;">
        <span class="close-popup">&times;</span>
        <img src="images/Pilihan Unit_Tipe Raksaka.png" alt="Rute The Reswara" width="500">
        <div class="" style="margin-top: 2.5rem;margin-left: 2rem;">
        <h5 style="font-weight: 700;">Raksaka</h5>
        <div class="">
            <p>TIPE RAKSAKA (2 LANTAI)</p>
            <br>
            <p>Luas Tanah : 60 m</p>
            <p>Luas Bangunan : 84 m</p>
            <br>
            <p>2 Kamar Tidur</p>
            <p>2 + 1 Kamar Mandi</p>
            <p>Carport untuk 2 Mobil</p>
            <br>
            <p>Ruang Keluarga</p>
            <p>Ruang Makan</p>
            <p>Dapur</p>
        </div>
        </div>
        <!-- Tambahkan konten sesuai kebutuhan -->
    </div>
</div>
<div id="popup-ruko" class="popup-overlay">
    <div class="popup-content-background d-flex" style="margin-top: 2cm;">
        <span class="close-popup">&times;</span>
        <img src="images/Unit Ruko.png" alt="Rute The Reswara" width="500">
        <div class="" style="margin-top: 2.5rem;margin-left: 2rem;">
        <h5 style="font-weight: 700;">Ruko Reswara</h5>
        <div class="">
            <p>RUKO (2 LANTAI)</p>
            <br>
            <p>Luas Tanah : 70 m</p>
            <p>Luas Bangunan : 123 m</p>
            <br>
            <p>Ruang Pantry</p>
            <p>2 Kamar Mandi</p>
            <p>Slot Parkir Mobil & Motor</p>
        </div>
        </div>
        <!-- Tambahkan konten sesuai kebutuhan -->
    </div>
</div>
@endsection