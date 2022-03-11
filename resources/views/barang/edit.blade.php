 @extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

    <h4> Data Barang </h4>

@endsection


@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit Data Barang</div>
                <div class="card-body">
                    <form action="{{ route('barang.update', $barangs->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        {{-- <div class="form-group">
                                <label for="">Pilih Kategori</label>
                                <select name="nama_kategori" class="form-control @error('nama_kategori') is-invalid @enderror">
                                    @foreach ($kategori as $data)
                                        <option value="{{ $data->id }}">{{ $data->nama_kategori }}</option>
                                    @endforeach
                                </select>
                                @error('nama_kategori')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div> --}}
                             <div class="form-group">
                                <label for="">Pilih Kategori</label>
                                <select name="nama_kategori" class="form-control @error('nama_kategori') is-invalid @enderror">
                                    @foreach ($kategori as $data)
                                        <option value="{{ $data->id }}">{{ $data->nama_kategori }}</option>
                                    @endforeach
                                </select>
                                @error('nama_kategori')
                                    <span class="ineditvalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        <div class="form-group">
                            <label for="">Nama Barang</label>
                            <input type="text" name="nama_barang" value="{{ $barangs->nama_barang }}"
                                class="form-control @error('nama_barang') is-invalid @enderror">
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
                            <input type="text" name="harga" value="{{ $barangs->harga }}"
                                class="form-control @error('harga') is-invalid @enderror">
                            @error('harga')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Stok</label>
                            <input type="text" name="stok" value="{{ $barangs->stok }}"
                                class="form-control @error('stok') is-invalid @enderror">
                            @error('stok')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Keterangan</label>
                            <textarea id="keterangan" name="keterangan"
                                class="form-control @error('keterangan') is-invalid @enderror">{{ $barangs->keterangan }}</textarea>
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
    </div>
@endsection

@section('js')
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script>
        var konten = document.getElementById("keterangan");
        CKEDITOR.replace(konten, {
            language: 'en-gb'
        });
        CKEDITOR.config.allowedContent = true;
    </script>
@endsection 


