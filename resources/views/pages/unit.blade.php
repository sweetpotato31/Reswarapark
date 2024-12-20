@extends('layout.index')
@section('content')
<section id="type-unit" class="position-relative padding-large" style="background-color: #EEEEEE;">
    <div class="container col-md-12">
        <div class="section-title text-center">
            <h2 id="title-unit" style="font-weight: 500;">Pilihan Unit</h2>
            <h2 id="title-unit">Perumahan Reswara Park</h2>
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
        <div id="unit-large-view" class="swiper-container">
            <div class="swiper-wrapper">
                <?php
                    $cards = [
                        ['image' => 'images/Pilihan Unit_Tipe Ranjana.png', 'name' => 'Ranjana-large', 'title' => 'Ranjana', 'type' => '84/215'],
                        ['image' => 'images/Pilihan Unit_Tipe Ragnala.png', 'name' => 'Ragnala-large', 'title' => 'Ragnala', 'type' => '60/155'],
                        ['image' => 'images/Pilihan Unit_Tipe Raksaka.png', 'name' => 'Raksaka-large', 'title' => 'Raksaka', 'type' => '60/84']
                    ];
                
                    $cardCount = 0;
                    foreach ($cards as $index => $card) {
                        if ($cardCount % 3 == 0) {
                            if ($cardCount > 0) echo '</div>';
                            echo '<div id="swiper-unit" class="swiper-slide d-flex justify-content-center">';
                        }
                ?>

                <div id="card-unit" class="card-unit mx-3">
                    <img src="<?= $card['image'] ?>" class="image">
                    <div class="text-default">
                        <div style="position: absolute;bottom: 25px;left:25px">
                            <h4><?= $card['title'] ?></h4>
                            <p>Type <?= $card['type'] ?></p>
                        </div>
                    </div>
                    <div class="overlay">
                        <div class="text">
                            <h4><?= $card['title'] ?></h4>
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
        <div id="unit-small-view" class="swiper-container">
            <div class="swiper-wrapper">
            <?php
                    $cards = [
                        ['image' => 'images/Pilihan Unit_Tipe Ranjana.png', 'name' => 'Ranjana-small', 'title' => 'Ranjana', 'type' => '84/215'],
                        ['image' => 'images/Pilihan Unit_Tipe Ragnala.png', 'name' => 'Ragnala-small', 'title' => 'Ragnala', 'type' => '60/155'],
                        ['image' => 'images/Pilihan Unit_Tipe Raksaka.png', 'name' => 'Raksaka-small', 'title' => 'Raksaka', 'type' => '60/84']
                    ];
                
                    $cardCount = 0;
                    foreach ($cards as $index => $card) {
                        if ($cardCount % 1 == 0) {
                            if ($cardCount > 0) echo '</div>';
                            echo '<div id="swiper-unit" class="swiper-slide d-flex justify-content-center">';
                        }
                ?>

                <div id="card-unit" class="card-unit mx-3">
                    <img src="<?= $card['image'] ?>" class="image">
                    <div class="text-default">
                        <div style="position: absolute;bottom: 25px;left:25px">
                            <h4><?= $card['title'] ?></h4>
                            <p>Type <?= $card['type'] ?></p>
                        </div>
                    </div>
                    <div class="overlay">
                        <div class="text">
                            <h4><?= $card['title'] ?></h4>
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
            <h2 id="title-ruko">Ruko Reswara Park</h2>
        </div>
        <div class="testimonial-swiper">
            <div class="">
            <div class="">
                <p class="text-center" style="font-size: 13px;color:#818274;font-family:'SortsMillGoudy-Regular'">Reswara Park - Where modern design meets the serenity of the tropics</p>
            </div>
            </div>
        </div> 
        <div id="ruko-large-view" class="swiper-container">
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
                                <button class="button-unit mt-3 border-0" id="open-popup-ruko-large">Lihat Detail</button>
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
        <div id="ruko-small-view" class="swiper-container">
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
                                <button class="button-unit mt-3 border-0" id="open-popup-ruko-small">Lihat Detail</button>
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
        <h2 id="title-spek" class="mb-4">Spesifikasi dan Siteplan</h2>
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
<div id="popup-ragnala-large" class="popup-overlay">
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
<div id="popup-ranjana-large" class="popup-overlay">
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
<div id="popup-raksaka-large" class="popup-overlay">
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
<div id="popup-ragnala-small" class="popup-overlay">
    <div class="popup-content-background d-flex flex-column justify-content-center" style="margin-top: 2cm;">
        <span class="close-popup">&times;</span>
        <img src="images/Pilihan Unit_Tipe Ragnala.png" alt="Rute The Reswara" style="margin:1% auto; width: 100%; max-width: 400px;">
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
<div id="popup-ranjana-small" class="popup-overlay">
    <div class="popup-content-background d-flex flex-column justify-content-center" style="margin-top: 2cm;">
        <span class="close-popup">&times;</span>
        <img src="images/Pilihan Unit_Tipe Ranjana.png" style="margin:1% auto; width: 100%; max-width: 400px;">
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
<div id="popup-raksaka-small" class="popup-overlay">
    <div class="popup-content-background d-flex flex-column" style="margin-top: 2cm;">
        <span class="close-popup">&times;</span>
        <img src="images/Pilihan Unit_Tipe Raksaka.png" alt="Rute The Reswara" style="margin:1% auto; width: 100%; max-width: 400px;">
        <div class="" style="margin-top: 2.5rem;">
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
<div id="popup-ruko-large" class="popup-overlay">
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
<div id="popup-ruko-small" class="popup-overlay">
    <div class="popup-content-background d-flex flex-column" style="margin-top: 2cm;">
        <span class="close-popup">&times;</span>
        <img src="images/Unit Ruko.png" alt="Rute The Reswara" style="margin:1% auto; width: 100%; max-width: 400px;">
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