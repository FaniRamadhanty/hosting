@extends('layouts.app')
@section('content')

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title>SPORT SHOP</title>
        <meta content="" name="description">
        <meta content="" name="keywords">

        <!-- Favicons -->
        <link href="{{ asset('assets/assets/img/favicon.png') }}" rel="icon">
        <link href="{{ asset('assets/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link
            href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
            rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="{{ asset('assets/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="{{ asset('assets/assets/css/style.css') }}" rel="stylesheet">

        <!-- =======================================================
                  * Template Name: Lumia - v4.7.0
                  * Template URL: https://bootstrapmade.com/lumia-bootstrap-business-template/
                  * Author: BootstrapMade.com
                  * License: https://bootstrapmade.com/license/
                  ======================================================== -->
    </head>

    <body>


        <!-- ======= Hero Section ======= -->
        <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
            <div class="container text-center text-md-left" data-aos="fade-up">
                <h1>Welcome to <span>Sport Shop</span></h1>
                <h2>Menyediakan alat olahraga untuk menunjang kesehatan anda</h2>
            </div>
        </section><!-- End Hero -->

        <main id="main">

            <!-- ======= What We Do Section ======= -->
            <section id="what-we-do" class="what-we-do">
                <div class="container">

                    <div class="section-title">
                    <br><br>
                        <h2>apa yang kita jual? </h2>
                        <b>Treadmill | Weight Plates | Rowing Machine</b>
                    </div>

                    <div class="row">
                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                            <div class="icon-box">
                                <div class="icon"><i class="bi bi-truck"></i></div>
                                <h4><a href="">Fast Delivery</a></h4>
                                <p>Pengiriman barang yang cepat</p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
                            <div class="icon-box">
                                <div class="icon"><i class="bi bi-patch-check"></i></i></div>
                                <h4><a href="">Free Shiping</a></h4>
                                <p>Bebas ongkir seluruh Indoensia</p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
                            <div class="icon-box">
                                <div class="icon"><i class="bi bi-star"></i></i></div>
                                <h4><a href="">Best Quality</a></h4>
                                <p>Kualitas barang berkualitas tinggi</p>
                            </div>
                        </div>

                    </div>

                </div>
            </section><!-- End What We Do Section -->

            <!-- ======= About Section ======= -->
            <section id="about" class="about">
                <div class="container">

                    <div class="row">
                        <div class="col-lg-6">
                            <img src="{{ asset('assets/assets/img/about.jpg') }}" class="img-fluid"
                                style="height:400px; " alt="">
                        </div>
                        <div class="col-lg-6 pt-4 pt-lg-0">
                            <h3>About Sport</h3>
                            <p>
                                Ada banyak sekali manfaat olahraga yang diperoleh tubuh jika rutin dilakukan.
                                Sebaiknya, olahraga dilakukan setiap hari minimal 30 menit.
                                Tidak perlu melakukan olahraga berat untuk bisa mendapatkan manfaatnya, cukup yang ringan
                                saja, seperti jalan kaki atau joging pada pagi hari.
                                Jika tidak sempat, olahraga ringan malam hari juga memungkinkan. Berikut adalah manfaat yang
                                bisa dirasakan dari rutin berolahraga:


                            </p>
                            <ul>
                                <li><i class="bx bx-check-double"></i>
                                    <h6>Menjauhkan dari Beragam Penyakit</h6>
                                    Manfaat pertama yang bisa didapatkan dari olahraga adalah meningkatkan daya tahan tubuh
                                    agar tidak mudah sakit. Ketika berolahraga, tubuh akan lebih bebas bergerak. Ini akan
                                    memicu proses metabolisme dan sirkulasi darah menjadi lebih lancar. Hasilnya tubuh lebih
                                    sehat dan kuat, serta enggak mudah terserang penyakit.
                                </li>
                                <li><i class="bx bx-check-double"></i>
                                    <h6>Membuat Tubuh Lebih Tegap</h6>
                                    Berolahraga membuat semua bagian tubuh kamu bergerak, sehingga bisa meningkatkan
                                    fleksibilitas. Otot tubuh juga menjadi lebih elastis dan tidak kaku. Bagi anak-anak,
                                    olahraga amat penting untuk menunjang perkembangan postur tubuhnya. Menurut Kathleen,
                                    anak yang rutin berolahraga sejak kecil akan memiliki postur tubuh yang tegap dan tidak
                                    membungkuk saat berjalan.
                                </li>
                                <li><i class="bx bx-check-double"></i>
                                    <h6>Merangsang Pertumbuhan Ideal</h6>
                                    Informasi Terlengkap Tentang Olahraga
                                    Ada banyak sekali manfaat olahraga yang diperoleh tubuh jika rutin dilakukan. Sebaiknya,
                                    olahraga dilakukan setiap hari minimal 30 menit. Tidak perlu melakukan olahraga berat
                                    untuk bisa mendapatkan manfaatnya, cukup yang ringan saja, seperti jalan kaki atau
                                    joging pada pagi hari. Jika tidak sempat, olahraga ringan malam hari juga memungkinkan.
                                    Berikut adalah manfaat yang bisa dirasakan dari rutin berolahraga:

                                    1. Menjauhkan dari Beragam Penyakit
                                    Manfaat pertama yang bisa didapatkan dari olahraga adalah meningkatkan daya tahan tubuh
                                    agar tidak mudah sakit. Ketika berolahraga, tubuh akan lebih bebas bergerak. Ini akan
                                    memicu proses metabolisme dan sirkulasi darah menjadi lebih lancar. Hasilnya tubuh lebih
                                    sehat dan kuat, serta enggak mudah terserang penyakit.

                                    2. Membuat Tubuh Lebih Tegap
                                    Berolahraga membuat semua bagian tubuh kamu bergerak, sehingga bisa meningkatkan
                                    fleksibilitas. Otot tubuh juga menjadi lebih elastis dan tidak kaku. Bagi anak-anak,
                                    olahraga amat penting untuk menunjang perkembangan postur tubuhnya. Menurut Kathleen,
                                    anak yang rutin berolahraga sejak kecil akan memiliki postur tubuh yang tegap dan tidak
                                    membungkuk saat berjalan.

                                    3. Merangsang Pertumbuhan Ideal
                                    Saat tubuh digunakan untuk beraktivitas, kalori yang ada di dalamnya akan terbakar lebih
                                    optimal. Kalori dalam tubuh akan diproses menjadi energi secara keseluruhan, tanpa ada
                                    yang tersisa dan berpotensi menimbulkan tumpukan lemak tubuh. Tubuh mendapatkan suplai
                                    nutrisi yang cukup untuk melancarkan proses pertumbuhan dan perkembangan secara ideal.

                                <li><i class="bx bx-check-double"></i>
                                    <h6>Meningkatkan Daya Pikir</h6>
                                    Selain bermanfaat bagi fisik tubuh, Kathleen kembali menjelaskan jika olahraga teratur
                                    juga memiliki peran yang baik untuk meningkatkan daya pikir anak. Aktivitas fisik yang
                                    dilakukan secara rutin dapat membuat otak lebih tercukupi asupan gizinya. Otak pun
                                    berkembang secara berkala, sehingga membuat Si Kecil lebih pintar saat proses belajar
                                    tiba.


                            </ul>

                        </div>
                    </div>
                </div>

                </div>
            </section><!-- End About Section -->

            <!-- ======= Testimonials Section ======= -->
            <section id="testimonials" class="testimonials section-bg">
                <div class="container">

                    <!-- ======= Portfolio Section ======= -->
                    <section id="portfolio" class="portfolio">
                        <div class="container">

                            <div class="section-title">
                                <h2>Product</h2>
                            </div>


                            <div class="row portfolio-container">

                                @foreach ($barangs as $barang)
                                    <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp"
                                        data-wow-delay="0.1s">
                                        <div class="portfolio-wrap">
                                            <figure>
                                                <img src="{{ $barang->image() }}" class="img-fluid" alt="">
                                                <a href="{{ $barang->image() }}" class="link-preview portfolio-lightbox"
                                                    data-gallery="portfolioGallery"
                                                    title="  {{ $barang->keterangan }}  "><i
                                                        class="bi bi-zoom-in"></i></a>
                                                <a href="{{ url('pesan') }}/{{ $barang->id }}" class="link-details"
                                                    title="More Details"><i class="bx bx-cart"></i></a>
                                            </figure>

                                            <div class="portfolio-info">
                                                <h4>{{ $barang->nama_barang }}</h4>
                                                <p class="card-text">
                                                    <strong>Harga :</strong> Rp. {{ number_format($barang->harga) }} <br>
                                                    <strong>Stok :</strong> {{ $barang->stok }} <br>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <section id="contact" class="contact section-bg">
                                <div class="container">

                                    <div class="row mt-5 justify-content-center">

                                        <div class="col-lg-10">

                                            <div class="info-wrap">
                                                <div class="section-title">
                                                    <h2>Contact</h2>
                                                    <p>Jika ada pertanyaan mengenai barang, silahkan hubungi nomor dibawah
                                                        ini!</p>
                                                </div>
                                                <div class="row">


                                                    <div class="col-lg-4 info mt-4 mt-lg-0">
                                                        <i class="bi bi-whatsapp"></i>
                                                        <h4>Call:</h4>
                                                        <a href="https://api.whatsapp.com/send?phone=62895631989279&text=Assalamualaikum%20.....%20Hallo Kak, ada yang mau saya tanyakan"
                                                            class="btn-get-started scrollto">0895631989279</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                        </div>
                    </section>
                    <div class="row mt-5 justify-content-center">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d63365.752115434!2d107.592842!3d-6.966847!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x658cc60fbe5017b9!2sSMK%20Assalaam%20Bandung!5e0!3m2!1sid!2sid!4v1647235979981!5m2!1sid!2sid"
                            width="650" height="350" style="border:0;"></iframe>
                    </div>
                </div>
            </section><!-- End Portfolio Section -->

            </div>
            </section><!-- End Contact Section -->


            <!-- ======= Contact Section ======= -->
            <!-- End Contact Section -->




            <!-- ======= Footer ======= -->
            <footer id="footer">

                {{-- <div class="footer-top">
                    <div class="container">
                        <div class="row"> --}}

                {{-- <div class="col-lg-3 col-md-6 footer-contact">
                                <h3>Lumia</h3>
                                <p>
                                    A108 Adam Street <br>
                                    New York, NY 535022<br>
                                    United States <br><br>
                                    <strong>Phone:</strong> +1 5589 55488 55<br>
                                    <strong>Email:</strong> info@example.com<br>
                                </p>
                            </div> --}}
                {{-- <div class="col-lg-2 col-md-6 footer-links">
                                <h4>Useful Links</h4>
                                <ul>
                                    <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                                    <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                                    <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                                    <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                                    <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                                </ul>
                            </div> --}}

                {{-- <div class="col-lg-3 col-md-6 footer-links">
                                <h4>Our Services</h4>
                                <ul>
                                    <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                                    <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                                    <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                                    <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                                    <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                                </ul>
                            </div> --}}

                {{-- <div class="col-lg-4 col-md-6 footer-newsletter">
                                <h4>Join Our Newsletter</h4>
                                <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                                <form action="" method="post">
                                    <input type="email" name="email"><input type="submit" value="Subscribe">
                                </form>
                            </div> --}}

                {{-- </div>
                    </div>
                </div> --}}

                <div class="container d-md-flex py-4">


                </div>
                <div class="social-links text-center text-md-right pt-3 pt-md-0">
                    <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                    <a href="#" class="tiktok"><i class="bx bxl-tiktok"></i></a>

                </div>
                </div>
            </footer><!-- End Footer -->

            <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
                    class="bi bi-arrow-up-short"></i></a>

            <!-- Vendor JS Files -->
            <script src="{{ asset('assets/assets/vendor/purecounter/purecounter.js') }}"></script>
            <script src="{{ asset('assets/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
            <script src="{{ asset('assets/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
            <script src="{{ asset('assets/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
            <script src="{{ asset('assets/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
            <script src="{{ asset('assets/assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
            <script src="{{ asset('assets/assets/vendor/php-email-form/validate.js') }}"></script>

            <!-- Template Main JS File -->
            <script src="{{ asset('assets/assets/js/main.js') }}"></script>


    </body>
@endsection
