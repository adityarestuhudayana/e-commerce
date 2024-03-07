@extends('template.main')

@section('container')
    <select class="form-select mb-3" aria-label="Default select example">
        <option selected>Pilih kategori</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
    </select>

    @if ($products->count())
        <div class="row">

            @foreach ($products as $product)
                <div class="col-md-3">
                    <div class="card">
                        <img src="{{ asset('storage/' . $product->gambar) }}" class="card-img-top" height="130">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->nama_produk }}</h5>
                            <hr>
                            <p class="card-text">Keterangan : <br><small>{{ $product->exerpt }}</small></p>

                            <div class="row">
                                <button type="button" class="btn btn-danger position-relative mb-2">
                                    Rp {{ number_format($product->harga) }} <i class="bi bi-bag-check-fill"></i>
                                    <span
                                        class="position-absolute top-0 start-100 translate-middle p-2 bg-success border border-light rounded-circle">
                                        <i class="bi bi-star-fill"></i>
                                    </span>
                                </button>
                                <a href="#" class="btn btn-primary">Pesan sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    @else
        <h3 class="text-center">Belum ada produk</h3>
    @endif
@endsection
