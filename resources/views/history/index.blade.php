{{-- @extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a href="{{ url('home') }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
        </div>
        <div class="col-md-12 mt-2">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Riwayat Pemesanan</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h3><i class="fa fa-history"></i> Riwayat Pemesanan</h3>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tanggal</th>
                                <th>Status</th>
                                <th>Jumlah Harga</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            @foreach ($pesanans as $pesanan)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $pesanan->tanggal }}</td>
                                <td>
                                    @if ($pesanan->status == 1)
                                    Sudah Pesan, Selanjutnya Lakukan Pembayaran
                                    @else
                                    Sudah dibayar 
                                    @endif
                                </td>
                                <td>Rp. {{ number_format($pesanan->jumlah_harga) }}</td>
                                <td>
                                    <a href="{{ url('history') }}/{{ $pesanan->id }}" class="btn btn-primary"><i class="fa fa-info"></i> Detail</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection --}}


{{-- @extends('layouts.app')
@section('content')
    <div class="container">
        <div class="col">
            <div class="col-md-12">
                <a href="{{ url('history') }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
            </div>
            <div class="col-md-12 mt-2">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ url('history') }}">Riwayat Pemesanan</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Detail Pemesanan</li>
                    </ol>
                </nav>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h3>Sukses Check Out</h3>
                        <h5>Pesanan anda sudah sukses dicheck-out selanjutnya untuk pembayaran silahkan transfer ke nomor
                            rekening dibawah!
                            <strong>dengan nominal : Rp.
                                {{ number_format($pesanan->jumlah_harga) }}</strong>
                        </h5>
                    </div>
                </div>
                <div class="card mt-2">
                    <div class="card-body">
                        <h3><i class="fa fa-shopping-cart"></i> Detail Pemesanan</h3>
                        @if (!empty($pesanan))
                            <p align="right">Tanggal Pesan : {{ $pesanan->tanggal }}</p>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Gambar</th>
                                        <th>Nama Barang</th>
                                        <th>Jumlah</th>
                                        <th>Harga</th>
                                        <th>Total Harga</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    @foreach ($pesanan_details as $pesanan_detail)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>
                                                <img src="{{ $pesanan_detail->barang->image() }}" width="100" alt="...">
                                            </td>
                                            <td>{{ $pesanan_detail->barang->nama_barang }}</td>
                                            <td>{{ $pesanan_detail->jumlah }} buah</td>
                                            <td>Rp. {{ number_format($pesanan_detail->barang->harga) }}</td>
                                            <td>Rp. {{ number_format($pesanan_detail->jumlah_harga) }}</td>

                                        </tr>
                                    @endforeach

                                    <tr>
                                        <td colspan="5" align="right"><strong>Total Harga :</strong></td>
                                        <td><strong>Rp.
                                                {{ number_format($pesanan->jumlah_harga) }}</strong></td>

                                    </tr>
                                    <tr>
                                        <td colspan="5" align="right"><strong>Kode Unik :</strong></td>
                                        <td><strong>{{ $pesanan->kode }}</strong></td>

                                    </tr>
                                    <tr>
                                        <td colspan="5" align="right"><strong>Total yang harus ditransfer :</strong></td>
                                        <td><strong>Rp.
                                                {{ number_format($pesanan->jumlah_harga) }}</strong></td>

                                    </tr>
                                </tbody>
                            </table>
                        @endif

                    </div>
                </div>
            </div>

        </div>
    </div>


    <br><br>
    <div class="container">
        <div class="col">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="contact">
                            <div class="container">

                                <div class="section-title">
                                    <h2>Transfer</h2>
                                </div>
                                <div class="row">

                                    <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                                        <div class="info">
                                            {{-- <form action="{{ route('pembayaran.store') }}" method="post"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <br>
                                                <div class="form-group">
                                                    <label for=""><b>Foto Bukti Transfer</b></label>
                                                    <input type="file" name="cover"
                                                        class="form-control @error('cover') is-invalid @enderror">
                                                    @error('cover')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <br>
                                                <div class="form-group text-center">
                                                    <button type="submit" class="btn btn-outline-primary"
                                                        style="background:#5cb874; border-color: #5cb874; color: white;">KIRIM</button>
                                                </div>
                                            </form> --}}
{{-- </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="info" style="background:lightgrey">
                                            <table class="table">
                                                <tr>
                                                    <th>Bank</th>
                                                    <th>Rekening</th>
                                                    <th>Atas Nama</th>
                                                    <th>Link Internet Bangking</th>
                                                </tr>
                                                <tr>
                                                    <td>BCA</td>
                                                    <td>2828 555 222</td>
                                                    <td>SPORT SHOP</td>
                                                    <td><a href="https://www.klikbca.com/">Klik disini</a></td>

                                                </tr>
                                                <tr>
                                                    <td>BSI</td>
                                                    <td>7666666617</td>
                                                    <td>SPORT SHOP</td>
                                                    <td><a href="https://bsinet.bankbsi.co.id/cms/index.php">Klik disini</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Mandiri</td>
                                                    <td>132 004 118 5555</td>
                                                    <td>SPOR SHOP</td>
                                                    <td><a href="https://ibank.bankmandiri.co.id/retail3/">Klik disini</a>
                                                    </td>

                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        @endsection --}}


{{-- @extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Check Out</li>
                    </ol>
                </nav>
            </div>
            <div class="col-md-12">
                <h3><i class="fa fa-shopping-basket"></i> Check Out</h3>
                @if (!empty($pesanan))
                    <p align="right">Tanggal Pesan : {{ $pesanan->tanggal }}</p>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Barang</th>
                                <th>Jumlah</th>
                                <th>Harga</th>
                                <th>Total Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            @foreach ($pesanan_details as $pesanan_detail)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $pesanan_detail->barang->nama_barang }}</td>
                                    <td>{{ $pesanan_detail->jumlah }}</td>
                                    <td align="left">Rp. {{ number_format($pesanan_detail->barang->harga) }}</td>
                                    <td align="left">Rp. {{ number_format($pesanan_detail->jumlah_harga) }}</td>
                                    <td>
                                        <form action="{{ url('check-out') }}/{{ $pesanan_detail->id }}" method="post">
                                            @csrf
                                            {{ method_field('DELETE') }}
                                            <button type="submit" class="btn btn-danger"
                                                onclick="return confirm('Apakah anda yakin menghapus ini?')"><i
                                                    class="fa fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            <tr>
                                <td colspan="4"><strong>Total Harga :</strong></td>
                                <td><strong>Rp. {{ number_format($pesanan->jumlah_harga) }}</strong></td>
                                <td>
                                    <a href="{{ url('konfirmasi-check-out') }}" class="btn btn-success"  onclick="return confirm('Apakah anda yakin akan check-out?')">
                                        <i class="fa fa-shopping-basket"></i> Check Out</a>
                                </td>
                        </tbody>
                    </table>
                @endif
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection --}}


<!DOCTYPE html>
<html lang="en">

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

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center">

            <div class="logo me-auto">
                <h1><a href="index.html">Sport Shop</a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="{{ asset('assets/assets/img/logo.png') }}" alt="" class="img-fluid"></a>-->
            </div>


            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a href="{{ url('home') }}">Home</a></li>
                    <li><a href="{{ url('check-out') }}">Check-Out</a></li>
                   

                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->


        </div>
    </header><!-- End Header -->

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        {{-- <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Checkout</h2>
          <ol>
            <li><a href="{{ url('/') }}">Home</a></li>
            <li>  <a class="nav-link" href="{{ url('check-out') }}">
                                    <i class="fa fa-shopping-basket"></i>
                                    @if (!empty($notif))
                                        <span class="badge badge-danger">{{ $notif }}</span>
                                    @endif
                                </a></li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs --> --}}

        <!-- ======= Portfolio Details Section ======= -->
        <section id="portfolio-details" class="portfolio-details">
            <div class="container">
                <div class="row gy-4">

                    <div class="col">
                        <div class="col-md-12">
                            <a href="{{ url('history') }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i>
                                Kembali</a>
                                
                        </div>
                        <div class="col-md-12 mt-2">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
                                   
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Detail Pemesanan</li>
                                </ol>
                            </nav>
                        </div>

                    </div>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h3><i class="fa fa-history"></i> Riwayat Pemesanan</h3>
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal</th>
                                            <th>Status</th>
                                            <th>Jumlah Harga</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1; ?>
                                        @foreach ($pesanans as $pesanan)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $pesanan->tanggal }}</td>
                                                <td>
                                                    @if ($pesanan->status == 1)
                                                        Sudah Pesan, Selanjutnya Lakukan Pembayaran
                                                    @else
                                                        Sudah dibayar
                                                    @endif
                                                </td>
                                                <td>Rp. {{ number_format($pesanan->jumlah_harga) }}</td>
                                                <td>
                                                    <a href="{{ url('history') }}/{{ $pesanan->id }}"
                                                        class="btn btn-primary"><i class="fa fa-info"></i>
                                                        Detail</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="info" style="background:lightgrey">
                            <table class="table">
                                <tr>
                                    <th>Bank</th>
                                    <th>Rekening</th>
                                    <th>Atas Nama</th>
                                    <th>Link Internet Bangking</th>
                                </tr>
                                <tr>
                                    <td>BCA</td>
                                    <td>2828 555 222</td>
                                    <td>SPORT SHOP</td>
                                    <td><a href="https://www.klikbca.com/">Klik disini</a></td>

                                </tr>
                                <tr>
                                    <td>BSI</td>
                                    <td>7666666617</td>
                                    <td>SPORT SHOP</td>
                                    <td><a href="https://bsinet.bankbsi.co.id/cms/index.php">Klik disini</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Mandiri</td>
                                    <td>132 004 118 5555</td>
                                    <td>SPOR SHOP</td>
                                    <td><a href="https://ibank.bankmandiri.co.id/retail3/">Klik disini</a>
                                    </td>

                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Portfolio Details Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">


        <div class="container d-md-flex py-4">

            <div class="me-md-auto text-center text-md-start">
                <div class="copyright">
                    &copy; Copyright <strong><span>Lumia</span></strong>. All Rights Reserved
                </div>
                <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/lumia-bootstrap-business-template/ -->
                    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                </div>
            </div>
            <div class="social-links text-center text-md-right pt-3 pt-md-0">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
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

</html>
