@extends('client.app1')

@section('content')
   <br><br><br><br>
    <!-- Contact Section Start -->
    <section class="contact-section fix section-padding" id="contact">
        <div class="container">
            <div class="section-title-area">
                <div class="section-title">
                    <div class="sub-title bg-color-3 wow fadeInUp">
                        <span class="wow fadeInUp">Hubungi Kami</span>
                    </div>
                    <h2 class="text-white wow fadeInUp" data-wow-delay=".3s">
                        Bagaimana Kami Dapat Membantu Anda?
                    </h2>
                </div>
                <p class="white-text wow fadeInUp" data-wow-delay=".5s">
                    LSP SMK Telkom Makassar selalu siap mendukung Anda dalam memberikan layanan <br>
                    sertifikasi kompetensi terbaik untuk siswa.
                </p>
            </div>
            <div class="contact-wrapper">
                <div class="row g-4">
                    <div class="col-xl-6">
                        <div class="contact-form-area">
                            <h3>Hubungi Kami</h3>
                            <form action="#" id="contact-form" method="POST">
                                <div class="row g-4">
                                    <div class="col-lg-6">
                                        <div class="form-clt">
                                            <input type="text" name="name" id="name"
                                                placeholder="Nama Lengkap">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-clt">
                                            <input type="text" name="email" id="email"
                                                placeholder="Alamat Email">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-clt">
                                            <input type="number" name="number" id="number"
                                                placeholder="Nomor Telepon">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-clt">
                                            <select name="orderby" class="single-select" aria-label="Pilih Subjek">
                                                <option value="subject" selected="selected">Subjek</option>
                                                <option value="complain">Keluhan</option>
                                                <option value="greetings">Ucapan</option>
                                                <option value="date">Tanggal Sertifikasi</option>
                                                <option value="price">Tentang Biaya</option>
                                                <option value="order">Layanan Lainnya</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-clt">
                                            <textarea name="message" id="message" placeholder="Pesan Anda"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckChecked" checked="">
                                            <label class="form-check-label" for="flexCheckChecked">
                                                Saya setuju dengan syarat dan ketentuan layanan ini.
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <button type="submit" class="theme-btn">
                                            Kirim Sekarang
                                            <i class="fa-solid fa-arrow-right ms-1"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="contact-map">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.408477856415!2d119.43133691486377!3d-5.171276296228932!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbee32da1a075d3%3A0x88e9cc6030cfa1dd!2sSMK%20Telkom%20Makassar!5e0!3m2!1sen!2sid!4v1691624000000!5m2!1sen!2sid"
                                style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            <div class="contact-info-wrapper">
                                <h2>Informasi Kontak</h2>
                                <div class="shape-left">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="29" height="39"
                                        viewBox="0 0 29 39" fill="none">
                                        <path d="M0 0L29 39V0H0Z" fill="#b7282c" />
                                    </svg>
                                </div>
                                <div class="shape-right">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="29" height="39"
                                        viewBox="0 0 29 39" fill="none">
                                        <path d="M29 0L0 39V0H29Z" fill="#b7282c" />
                                    </svg>
                                </div>
                                <div class="contact-info style2">
                                    <div class="icon">
                                        <i class="fa-solid fa-location-dot"></i>
                                    </div>
                                    <div class="content">
                                        <h3>
                                            Jl. A. P. Pettarani No.3, Makassar, Sulawesi Selatan <br> Indonesia
                                        </h3>
                                    </div>
                                </div>
                                <div class="contact-info style2">
                                    <div class="icon">
                                        <i class="fa-regular fa-phone"></i>
                                    </div>
                                    <div class="content">
                                        <h3>
                                            <a href="tel:+628123456789">+62 812-3456-789</a>
                                        </h3>
                                    </div>
                                </div>
                                <div class="contact-info style2 border-none">
                                    <div class="icon">
                                        <i class="fa-regular fa-envelope"></i>
                                    </div>
                                    <div class="content">
                                        <h3>
                                            <a
                                                href="mailto:info@smktelkom-makassar.ac.id">info@smktelkom-makassar.ac.id</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <br><br><br>
@endsection
