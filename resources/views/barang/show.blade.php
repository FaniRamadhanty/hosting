@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

    <h4> Data Barang </h4>

@endsection

@section('content')
    {{-- <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data Buku</div>
                <div class="card-body">
                   <form action="{{route('barang.show',$barangs->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="">Nama Barang</label>
                            <input type="text" name="nama_barang" value="{{$barangs->nama_barang}}" class="form-control @error('nama_barang') is-invalid @enderror" disabled>
                             @error('nama_barang')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Produk</label>
                            <br>
                            <img src="{{ $barangs->image() }}" height="75" style="padding:10px;" />
                            <input type="file" name="cover" class="form-control">
                        </div>
                          <div class="form-group">
                            <label for="">Harga</label>
                            <input type="text" name="harga" value="{{$barangs->harga}}" class="form-control @error('harga') is-invalid @enderror" disabled>
                             @error('harga')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                          <div class="form-group">
                            <label for="">Stok</label>
                            <input type="text" name="stok" value="{{$barangs->stok}}" class="form-control @error('stok') is-invalid @enderror" disabled>
                             @error('stok')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                          <div class="form-group">
                            <label for="">Keterangan</label>
                            <input type="text" name="keterangan" value="{{$barangs->keterangan}}" class="form-control @error('keterangan') is-invalid @enderror" disabled>
                             @error('keterangan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-outline-primary">Simpan</button>
                        </div>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}

    <div class="card col-md-5 " style="max-width: 1000px;">
        <div class="row g-0">
 
            <div class="col-md-12 mt-1">
            
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 mt-1">
                            <div class="card">
                                <div class="card-header">
                                    <h2>{{ $barangs->nama_barang }}</h2>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img src="{{ $barangs->image() }}" class="rounded mx-auto d-block"
                                                width="100%" alt="">
                                        </div>
                                        <div class="col-md-8 mt-2">
                                            <h3>{{ $barangs->nama_barang }}</h3>
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <td>Harga</td>
                                                        <td>:</td>
                                                        <td> Rp. {{ number_format($barangs->harga) }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Stok</td>
                                                        <td>:</td>
                                                        <td>{{ $barangs->stok }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Keterangan</td>
                                                        <td>:</td>
                                                        <td>{!! $barangs->keterangan !!}</td>
                                                    </tr>
                                                     <tr>
 <td><a href="{{ route('barang.index') }}" class="btn btn-outline-warning ">Kembali</a></td>
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
            </div>
        </div>
    </div>
@endsection
