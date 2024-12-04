@extends('layout.index')
@section('content')
<section id="customers-reviews" class="position-relative padding-large">
    <div class="container col-lg-12 col-xl-9 p-5">
        <div class="row">
            <!-- Kolom Gambar -->
            <div class="col-xxl-4 col-lg-4 col-md-4 pb-3 pb-lg-0 img-col" style="padding: unset;">
                <img src="images/landscape-3.jpg" class="responsive-img" alt="Reswara Park">
            </div>
            <!-- Kolom Teks -->
            <div class="col-xxl-8 col-lg-8 col-md-8 pb-3 pb-lg-0 text-col" style="padding: unset;">
                <div class="d-flex" style="padding: 0rem 2rem;">
                    <div class="icon-box-content">
                        <h4 class="card-title mb-1 text-capitalize text-dark" style="font-size:30px">Reswara Park</h4>
                        <p class="mb-0 text-content">Dengan mengusung konsep townhouse yang premium, compact dan modern, Reswara Park hadir di daerah Jakarta Timur. Hunian dengan lokasi strategis yang memberikan berbagai kemudahan aksesibilitas, kenyamanan serta memiliki nilai investasi.</p>
                        <br>
                        <p class="mb-0 text-content">Reswara Park merupakan Kawasan perumahan berbasis Cluster yang terletak di JI. Mini III, Bambu Apus, Kec. Cipayung, Kota Jakarta Timur. Lokasi yang sangat strategis hanya 3 menit ke Gerbang Toll Bambu Apus, 10 Menit ke Stasiun LRT Taman Mini Indonesia Indah (TMII) dan 15 Menit ke Terminal Pinang Ranti.</p>
                        <br>
                        <p class="mb-0 text-content">Reswara Park juga memiliki berbagai kemudahan akses terhadap fasilitas komersil seperti Tamini Square dan AEON, fasilitas Pendidikan yang mendukung kebutuhan dalam Pendidikan anak seperti Sekolah BPK Penabur, Nizamia High School dan lainnya serta fasilitas Kesehatan terdekat seperti RS Harapan Bunda, RS Haji Jakarta,RS AD dan RS Brawijaya Pinang Ranti yang sedang dalam tahap pembangunan.</p>
                        <br>
                        <p class="mb-0 text-content">Reswara Park yang memiliki lokasi dekat dengan pusat kota Jakarta ditambah semakin berkembangnya infrastruktur jalan dan transportasi umum serta memiliki aksesibilitas yang memudahkan sehingga Reswara Park dapat dengan mudah dicapai dari segala penjuru Jakarta.</p>
                        <br>
                        <p class="mb-0 text-content">Selain itu, investor yang berminat untuk peluang berinvestasi akan meraih keuntungan di Reswara Park yang akan terus dikembangkan oleh PT Cahaya Candra Jaya menjadi sebuah kawasan hunian premium, modern dan strategis di daerah Jakarta Timur. Saat ini pembangunan Reswara Park dimulai dengan pembangunan Fase 1 yang berdiri di lahan sebesar kurang lebih 8.150 m2. Dengan total luas lahan sebesar kurang lebih 12 Ha, Reswara Park masih akan terus berkembang dan akan menjadi Kawasan townhouse dengan fasilitas yang nyaman dan lengkap.</p>
                    </div>
                </div>
            </div>
        </div>

        <style>
            .text-content {
                text-align: justify;
            }

            /* Gaya untuk gambar agar tetap sama ukuran */
            .responsive-img {
                width: 100%;
                height: 100%;
                max-height: 720px;
                object-fit: cover;
                border-radius: 15px;
                object-position: top; /* Fokus pada bagian atas gambar */
            }

            /* Media query untuk lebar layar <= 1025px */
            @media (max-width: 1023px) {
                .img-col{
                    display: none;
                }
                /* Menampilkan gambar di bagian atas */
                /* Atur teks agar menempati lebar penuh di bawah gambar */
                .text-col {
                    width: 100% !important;
                    flex: 0 0 100%;
                    max-width: 100%;
                }
                .text-content {
                    font-size: 14px !important;
                }
                .icon-box-content {
                    padding: 0 1rem;
                }
            }
        </style>
    </div>
</section>


@endsection