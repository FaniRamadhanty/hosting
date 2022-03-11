@extends('layouts.app')
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
                        </div>
                    </div>
                </div>
            </div>


        @endsection
