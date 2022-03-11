@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

    Dashboard

@endsection

@section('content')
    <div class="py-12">
        <div class="container">
            <div class="row">

                <div class="col-md-8">
                    <div class="card-group">
                        @foreach ($images as $multi)

                        <div class="col-md-4 mt-5">
                        <div class="card">
                        <img src="{{ asset($multi->image)}}" alt="">
                        </div>
                        </div>
                        @endforeach
                    </div>
                </div>

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
