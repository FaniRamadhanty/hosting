@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

    Dashboard

@endsection

@section('content')
    <div class="py-12">
        <div class="container">
            <div class="row">

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">Gambar Produk</div>
                        <div class="card-body">


                            <form action="{{ route('store.image') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="">Brand Image</label>
                                    <input type="file" name="image[]" class="form-control" id="" aria-describedby=""
                                        multiple="">

                                    @error('image')
                                        <span class="text-danger"> {{ $message }} </span>
                                    @enderror

                                </div>

                                <button type="submit" class="btn btn-primary">Tambahkan Gambar</button>

                            </form>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
