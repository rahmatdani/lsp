@extends('client.app')

@section('content')
    <!-- Hero Section Start -->
    <section class="hero-section hero-3" style="background-image: url('assetsblog/img/hero/hero-bg-3.jpg'); margin-top: 120px">
        <div class="line-shape">
            <img src="assetsblog/img/hero/line-shape.png" alt="img">
        </div>
        <div class="container-fluid">
            <div class="row g-4 justify-content-between align-items-center">
                <div class="col-lg-6">
                    <div class="hero-content">
                        <h6 class="wow fadeInUp">LSP SMK Telkom Makassar</h6>
                        {{-- <h1 class="wow fadeInUp" data-wow-delay=".3s">
                            Tingkatkan <span>Kompetensi Siswa</span>
                            dengan Sertifikasi Profesional
                        </h1> --}}
                        <h1 class="gradient-text">
                            Tingkatkan Kompetensi Siswa
                            dengan Sertifikasi Profesional
                        </h1>
                        <p class="wow fadeInUp" data-wow-delay=".5s">
                            Kami berkomitmen untuk memberikan layanan sertifikasi berkualitas tinggi guna mempersiapkan
                            siswa menghadapi dunia kerja dengan kompetensi yang teruji dan diakui.
                        </p>
                        <div class="hero-button">
                            <div class="main-button wow fadeInUp" data-wow-delay=".3s">
                                <a href="about.html"> <span class="theme-btn">PELAJARI LEBIH LANJUT</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="hero-image wow img-custom-anim-left" data-wow-duration="1.5s" data-wow-delay="0.3s">
                        <img src="assetsblog/img/orang1.png" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Layanan Kami -->
    <section class="service-section fix section-padding">
        <div class="left-shape float-bob-y">
            <img src="assetsblog/img/pricing-left.png" alt="img">
        </div>
        <div class="right-shape">
            <img src="assetsblog/img/service/right-shape.png" alt="img">
        </div>
        <div class="container">
            <div class="section-title-area">
                <div class="section-title">
                    <div class="sub-title wow fadeInUp">
                        <span>Layanan Kami</span>
                    </div>
                    <h2 class="wow fadeInUp" data-wow-delay=".3s">
                        Meningkatkan <span>Keterampilan</span><br> dan <span>Peluang Siswa</span> SMK Telkom Makassar
                    </h2>
                </div>
                {{-- <p class="wow fadeInUp" data-wow-delay=".5s">
                    Layanan kami dirancang untuk memastikan siswa memiliki kompetensi yang dibutuhkan dalam dunia kerja.
                </p> --}}
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="service-box-items">
                        <div class="icon">
                            <img src="assetsblog/img/service/1.png" alt="img">
                        </div>
                        <div class="content">
                            <h4><a href="service-details.html">Sertifikasi Kompetensi</a></h4>
                            <p>Membantu siswa mendapatkan pengakuan atas keterampilan mereka dengan sertifikasi yang diakui.
                            </p>
                            {{-- <a href="service-details.html" class="link-btn">Pelajari Selengkapnya <i
                                    class="fa-regular fa-arrow-right-long"></i></a> --}}
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                    <div class="service-box-items">
                        <div class="icon">
                            <img src="assetsblog/img/service/3.png" alt="img">
                        </div>
                        <div class="content">
                            <h4><a href="service-details.html">Pelatihan Persiapan</a></h4>
                            <p>Kami memberikan pelatihan intensif untuk mempersiapkan siswa menghadapi uji sertifikasi.</p>
                            {{-- <a href="service-details.html" class="link-btn">Pelajari Selengkapnya <i
                                    class="fa-regular fa-arrow-right-long"></i></a> --}}
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                    <div class="service-box-items">
                        <div class="icon">
                            <img src="assetsblog/img/service/2.png" alt="img">
                        </div>
                        <div class="content">
                            <h4><a href="service-details.html">Evaluasi Kompetensi</a></h4>
                            <p>Proses evaluasi yang komprehensif untuk memastikan siswa memenuhi standar kompetensi.</p>
                            {{-- <a href="service-details.html" class="link-btn">Pelajari Selengkapnya <i
                                    class="fa-regular fa-arrow-right-long"></i></a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- Marque Section Start -->
<div class="marquee-section-1">
    <div class="mycustom-marque style-2">
        <div class="scrolling-wrap">
            <div class="comm">
                <div class="cmn-textslide"><img src="assetsblog/img/star.png" alt="img">SMK Telkom Makassar</div>
                <div class="cmn-textslide"><img src="assetsblog/img/star.png" alt="img">Sekolah Sahabat Teknologi</div>
                <div class="cmn-textslide"><img src="assetsblog/img/star.png" alt="img">SMK Telkom Makassar</div>
                <div class="cmn-textslide"><img src="assetsblog/img/star.png" alt="img">Sekolah Sahabat Teknologi</div>
                <div class="cmn-textslide"><img src="assetsblog/img/star.png" alt="img">SMK Telkom Makassar</div>
            </div>
            <div class="comm">
                <div class="cmn-textslide"><img src="assetsblog/img/star.png" alt="img">SMK Telkom Makassar</div>
                <div class="cmn-textslide"><img src="assetsblog/img/star.png" alt="img">Sekolah Sahabat Teknologi</div>
                <div class="cmn-textslide"><img src="assetsblog/img/star.png" alt="img">SMK Telkom Makassar</div>
                <div class="cmn-textslide"><img src="assetsblog/img/star.png" alt="img">Sekolah Sahabat Teknologi</div>
                <div class="cmn-textslide"><img src="assetsblog/img/star.png" alt="img">SMK Telkom Makassar</div>
            </div>
            <div class="comm">
                <div class="cmn-textslide"><img src="assetsblog/img/star.png" alt="img">SMK Telkom Makassar</div>
                <div class="cmn-textslide"><img src="assetsblog/img/star.png" alt="img">Sekolah Sahabat Teknologi</div>
                <div class="cmn-textslide"><img src="assetsblog/img/star.png" alt="img">SMK Telkom Makassar</div>
                <div class="cmn-textslide"><img src="assetsblog/img/star.png" alt="img">Sekolah Sahabat Teknologi</div>
                <div class="cmn-textslide"><img src="assetsblog/img/star.png" alt="img">SMK Telkom Makassar</div>
            </div>
            <div class="comm">
                <div class="cmn-textslide"><img src="assetsblog/img/star.png" alt="img">SMK Telkom Makassar</div>
                <div class="cmn-textslide"><img src="assetsblog/img/star.png" alt="img">Sekolah Sahabat Teknologi</div>
                <div class="cmn-textslide"><img src="assetsblog/img/star.png" alt="img">SMK Telkom Makassar</div>
                <div class="cmn-textslide"><img src="assetsblog/img/star.png" alt="img">Sekolah Sahabat Teknologi</div>
                <div class="cmn-textslide"><img src="assetsblog/img/star.png" alt="img">SMK Telkom Makassar</div>
            </div>
        </div>
    </div>
    <div class="mycustom-marque style-3">
        <div class="scrolling-wrap">
            <div class="comm">
                <div class="cmn-textslide"><img src="assetsblog/img/star2.png" alt="img">SMK Telkom Makassar</div>
                <div class="cmn-textslide"><img src="assetsblog/img/star2.png" alt="img">Sekolah Sahabat Teknologi</div>
                <div class="cmn-textslide"><img src="assetsblog/img/star2.png" alt="img">SMK Telkom Makassar</div>
                <div class="cmn-textslide"><img src="assetsblog/img/star2.png" alt="img">Sekolah Sahabat Teknologi</div>
                <div class="cmn-textslide"><img src="assetsblog/img/star2.png" alt="img">SMK Telkom Makassar</div>
            </div>
            <div class="comm">
                <div class="cmn-textslide"><img src="assetsblog/img/star2.png" alt="img">SMK Telkom Makassar</div>
                <div class="cmn-textslide"><img src="assetsblog/img/star2.png" alt="img">Sekolah Sahabat Teknologi</div>
                <div class="cmn-textslide"><img src="assetsblog/img/star2.png" alt="img">SMK Telkom Makassar</div>
                <div class="cmn-textslide"><img src="assetsblog/img/star2.png" alt="img">Sekolah Sahabat Teknologi</div>
                <div class="cmn-textslide"><img src="assetsblog/img/star2.png" alt="img">SMK Telkom Makassar</div>
            </div>
            <div class="comm">
                <div class="cmn-textslide"><img src="assetsblog/img/star2.png" alt="img">SMK Telkom Makassar</div>
                <div class="cmn-textslide"><img src="assetsblog/img/star2.png" alt="img">Sekolah Sahabat Teknologi</div>
                <div class="cmn-textslide"><img src="assetsblog/img/star2.png" alt="img">SMK Telkom Makassar</div>
                <div class="cmn-textslide"><img src="assetsblog/img/star2.png" alt="img">Sekolah Sahabat Teknologi</div>
                <div class="cmn-textslide"><img src="assetsblog/img/star2.png" alt="img">SMK Telkom Makassar</div>
            </div>
            <div class="comm">
                <div class="cmn-textslide"><img src="assetsblog/img/star2.png" alt="img">SMK Telkom Makassar</div>
                <div class="cmn-textslide"><img src="assetsblog/img/star2.png" alt="img">Sekolah Sahabat Teknologi</div>
                <div class="cmn-textslide"><img src="assetsblog/img/star2.png" alt="img">SMK Telkom Makassar</div>
                <div class="cmn-textslide"><img src="assetsblog/img/star2.png" alt="img">Sekolah Sahabat Teknologi</div>
                <div class="cmn-textslide"><img src="assetsblog/img/star2.png" alt="img">SMK Telkom Makassar</div>
            </div>
        </div>
    </div>
</div>

    <!-- Team Section Start -->
    <section class="team-section-3 fix section-padding">
        <div class="container">
            <div class="section-title-area">
                <div class="section-title">
                    <div class="sub-title wow fadeInUp">
                        <span>Tim Asesor Kami</span>
                    </div>
                    <h2 class="wow fadeInUp" data-wow-delay=".3s">
                        <span>Tim Asesor LSP</span> SMK Telkom Makassar
                    </h2>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                    <div class="team-card-items">
                        <div class="team-image">
                            <img src="assetsblog/img/asesor/3.png" alt="img">
                        </div>
                        <div class="team-content">
                            <h3><a href="#">Ayu Rismayanti</a></h3>
                            <p>Asesor Kompetensi</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                    <div class="team-card-items">
                        <div class="team-image">
                            <img src="assetsblog/img/asesor/6.png" alt="img">
                        </div>
                        <div class="team-content">
                            <h3><a href="#">Ahwan Azhari Tahir</a></h3>
                            <p>Asesor Kompetensi</p>
                        </div>
                       
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                    <div class="team-card-items">
                        <div class="team-image">
                            <img src="assetsblog/img/asesor/4.png" alt="img">
                        </div>
                        <div class="team-content">
                            <h3><a href="#">Asrul</a></h3>
                            <p>Asesor Kompetensi</p>
                        </div>
                        
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                    <div class="team-card-items">
                        <div class="team-image">
                            <img src="assetsblog/img/asesor/2.png" alt="img">
                        </div>
                        <div class="team-content">
                            <h3><a href="#">Erlindah ZS Suyuthi</a></h3>
                            <p>Asesor Kompetensi</p>
                        </div>
                       
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                    <div class="team-card-items">
                        <div class="team-image">
                            <img src="assetsblog/img/asesor/1.png" alt="img">
                        </div>
                        <div class="team-content">
                            <h3><a href="#">Raodatul Jannah</a></h3>
                            <p>Asesor Kompetensi</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                    <div class="team-card-items">
                        <div class="team-image">
                            <img src="assetsblog/img/asesor/5.png" alt="img">
                        </div>
                        <div class="team-content">
                            <h3><a href="#">Sattubang</a></h3>
                            <p>Asesor Kompetensi</p>
                        </div>
                       
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                    <div class="team-card-items">
                        <div class="team-image">
                            <img src="assetsblog/img/asesor/7.png" alt="img">
                        </div>
                        <div class="team-content">
                            <h3><a href="#">Ali Akbar</a></h3>
                            <p>Asesor Kompetensi</p>
                        </div>
                        
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                    <div class="team-card-items">
                        <div class="team-image">
                            <img src="assetsblog/img/asesor/8.png" alt="img">
                        </div>
                        <div class="team-content">
                            <h3><a href="#">Rahmat Mahmud</a></h3>
                            <p>Asesor Kompetensi</p>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section section-padding pb-0">
        <div class="faq-overlay">
            <img src="assetsblog/img/faq-overlay.png" alt="img">
        </div>
        <div class="faq-shape">
            <img src="assetsblog/img/faq-shape.png" alt="img">
        </div>
        <div class="container">
            <div class="faq-wrapper">
                <div class="row g-4 justify-content-between">
                    <div class="col-xl-5 col-lg-6">
                        <div class="faq-content">
                            <div class="section-title">
                                <div class="sub-title bg-color-2 wow fadeInUp">
                                    <span>Pertanyaan Umum</span>
                                </div>
                                <h2 class="wow fadeInUp" data-wow-delay=".3s">
                                    Apa yang Perlu Anda Ketahui Tentang <span>LSP</span>?
                                </h2>
                            </div>
                            <ul class="faq-list">
                                <li class="wow fadeInUp" data-wow-delay=".3s">
                                    <i class="fa-regular fa-circle-check"></i>
                                    Sertifikasi Mudah dan Efisien
                                </li>
                                <li class="wow fadeInUp" data-wow-delay=".5s">
                                    <i class="fa-regular fa-circle-check"></i>
                                    Pelatihan oleh Asesor Kompeten
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="faq-accordion-items">
                            <div class="faq-accordion">
                                <div class="accordion" id="accordion">
                                    <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".3s">
                                        <h5 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="true"
                                                aria-controls="faq1">
                                                Apa itu Sertifikasi LSP?
                                            </button>
                                        </h5>
                                        <div id="faq1" class="accordion-collapse collapse"
                                            data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                Sertifikasi LSP merupakan bukti pengakuan atas kompetensi siswa yang diakui
                                                secara nasional.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".5s">
                                        <h5 class="accordion-header">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#faq2" aria-expanded="false" aria-controls="faq2">
                                                Apa Manfaat Sertifikasi Kompetensi?
                                            </button>
                                        </h5>
                                        <div id="faq2" class="accordion-collapse show" data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                Dengan sertifikasi kompetensi, siswa lebih siap bersaing di dunia kerja
                                                dengan bukti keterampilan yang valid.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".7s">
                                        <h5 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#faq3" aria-expanded="false"
                                                aria-controls="faq3">
                                                Bagaimana Proses Sertifikasi?
                                            </button>
                                        </h5>
                                        <div id="faq3" class="accordion-collapse collapse"
                                            data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                Proses sertifikasi melibatkan uji kompetensi sesuai bidang keahlian yang
                                                dipandu oleh asesor bersertifikat.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br><br><br><br><br>
    

   
@endsection
