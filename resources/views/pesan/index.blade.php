<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Portfolio Details - Lumia Bootstrap Template</title>
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

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center">

            <div class="logo me-auto">
                <h1><a href="#">Sport Shop</a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="{{ asset('assets/assets/img/logo.png') }}" alt="" class="img-fluid"></a>-->
            </div>
            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto " href="{{ url('home') }}">Beranda</a></li>
                    <li><a class="nav-link scrollto" href="{{ url('history') }}">Riwayat Pemesanan</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->



        </div>
    </header><!-- End Header -->

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Checkout</h2>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Portfolio Details Section ======= -->
        <section id="portfolio-details" class="portfolio-details">
            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-8">
                        <div class="portfolio-details-slider swiper" style="height: 370px; width: 400px;">
                            <div class="swiper-wrapper align-items-center">

                                <div class="swiper-slide">
                                    <img src="{{ $barang->image() }}" alt="">
                                </div>

                                <div class="swiper-slide">
                                    <img src="{{ $barang->image() }}" alt="">
                                </div>

                                <div class="swiper-slide">
                                    <img src="{{ $barang->image() }}" alt="">
                                </div>

                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="portfolio-info">
                            <h3>{{ $barang->nama_barang }}</h3>
                            <ul>
                                <li><strong>Harga</strong>: Rp. {{ number_format($barang->harga) }}</li>
                                <li><strong>Stok</strong>: {{ $barang->stok }}</li>
                                <li><strong>Keterangan </strong>: {!! $barang->keterangan !!}</li>
                                <li><strong>Jumlah Pesanan</strong>: <form
                                        action="{{ url('pesan') }}/{{ $barang->id }}" method="post">
                                        @csrf
                                        <input type="text" name="jumlah_pesan" class="form-control" required="">
                                        <button type="submit" class="btn btn-primary mt-2"><i
                                                class="fa fa-shopping"></i>Masukan Keranjang</button>
                                    </form>
                                </li>
                            </ul>
                        </div>

                    </div>

                </div>

            </div>
        </section><!-- End Portfolio Details Section -->

    </main><!-- End #main -->


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

</html>



{{-- @section('content')
    <div class="container">
        <div class="col-md-12 mt-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                    
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-md-12 mt-3">
                <div class="card">
                    <div class="card-header">
                        <h2>{{ $barang->nama_barang }}</h2>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="{{ $barang->image() }}" class="rounded mx-auto d-block" width="100%" alt="">
                            </div>
                            <div class="col-md-6 mt-5">
                                <h3>{{ $barang->nama_barang }}</h3>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <td>Harga</td>
                                            <td>:</td>
                                            <td> Rp. {{ number_format($barang->harga) }}</td>
                                        </tr>
                                        <tr>
                                            <td>Stok</td>
                                            <td>:</td>
                                            <td>{{ $barang->stok }}</td>
                                        </tr>
                                        <tr>
                                            <td>Keterangan</td>
                                            <td>:</td>
                                            <td>{!! $barang->keterangan !!}</td>
                                        </tr>

                                        <tr>
                                            <td>Jumlah Pesanan</td>
                                            <td>:</td>
                                            <td>
                                                <form action="{{  url('pesan') }}/{{ $barang->id }}" method="post">
                                                    @csrf
                                                    <input type="text" name="jumlah_pesan" class="form-control"
                                                        required="">
                                                    <button type="submit" class="btn btn-primary mt-2"><i
                                                            class="fa fa-shopping"></i>Masukan Keranjang</button>
                                                </form>
                                            </td>
                                        </tr>
                                        </td>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection --}}
