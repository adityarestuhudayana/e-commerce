@extends('template.main')

@section('container')
    <div class=" bg-light d-flex justify-content-center flex-column align-items-center">

        @if (session('addProdukSuccess'))
            <div class="alert alert-info" role="alert">
                {{ session('addProdukSuccess') }}
            </div>
        @endif

        <div class="col-md-5">
            <div class="img-profile text-center my-4">
                <img src="img/profile.png" alt="" width="200" height="200"
                    class="img-fluid img-thumbnail rounded-circle">
            </div>

            <a href="#" class="btn btn-success mb-3"><i class="bi bi-box-arrow-down me-2"></i>Simpan</a>
            <form>
                <div class="mb-3">
                    <label for="exampleInputUsername1" class="form-label">Username</label>
                    <input type="text" class="form-control" id="exampleInputUsername1"
                        value="{{ auth()->user()->username }}">
                </div>
                <div class="mb-3">
                    <label for="exampleInputAlamat1" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="exampleInputAlamat1"
                        value="{{ auth()->user()->alamat }}">
                </div>
            </form>
            <br>
            <hr>
            <br>
        </div>



        <p class="btn btn-info text-white"><i class="bi bi-cart-fill me-2"></i>Barang kamu</p>
        <a href="/products/create" class="btn btn-primary mb-3"><i class="bi bi-plus-lg me-2"></i>Buat barang jual</a>
        <div class="row d-flex justify-content-center flex-wrap">
            @foreach ($products as $product)
                <div class="col-md-4 mb-2">
                    <div class="card">
                        <img src="{{ asset('storage/' . $product->gambar) }}" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->nama_produk }}</h5>
                            <hr>
                            <p class="card-text">{{ $product->exerpt }}</p>
                            <div class="row text-center">
                                <p class="btn btn-primary mb-1">Rp {{ number_format($product->harga) }}</p>
                                <form action="">
                                    <button class="btn btn-danger">
                                        <i class="bi bi-trash3-fill"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
