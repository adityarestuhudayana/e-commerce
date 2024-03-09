@extends('template.main')

@section('container')
    <h1>Tambah barang jual</h1>
    <hr>
    <form action="/products" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
        <div class="mb-3">
            <label for="exampleInputNameBRG1" class="form-label">Nama produk</label>
            <input type="text" class="form-control @error('nama_produk') is-invalid @enderror" id="exampleInputNameBRG1" name="nama_produk" placeholder="Nama produk"
                autocomplete="off" value="{{ old('nama_produk') }}">
        </div>
        <div class="mb-3">
            <label for="exampleInputHarga1" class="form-label">Harga</label>
            <input type="number" class="form-control @error('harga') is-invalid @enderror" id="exampleInputHarga1" name="harga" placeholder="Harga"
                autocomplete="off" value="{{ old('harga') }}">
        </div>
        <div class="mb-3">
            <label for="exampleInputKeterangan1" class="form-label">Keterangan</label>
            <input type="text" class="form-control @error('keterangan') is-invalid @enderror" id="exampleInputKeterangan1" name="keterangan"
                placeholder="Keterangan" autocomplete="off" value="{{ old('keterangan') }}">
        </div>

        <div class="mb-3">
            <label for="inputGroupFile04" class="form-label">Gambar</label>
            <input type="file" class="form-control @error('gambar') is-invalid @enderror" id="inputGroupFile04" name="gambar">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
