@extends('template.main')

@section('container')
    <h1>Tambah barang jual</h1>
    <hr>
    <form>
        <div class="mb-3">
            <label for="exampleInputNameBRG1" class="form-label">Nama produk</label>
            <input type="text" class="form-control" id="exampleInputNameBRG1" name="nama_produk" placeholder="Nama produk"
                autocomplete="off">
        </div>
        <div class="mb-3">
            <label for="exampleInputHarga1" class="form-label">Harga</label>
            <input type="number" class="form-control" id="exampleInputHarga1" name="harga" placeholder="Harga"
                autocomplete="off">
        </div>
        <div class="mb-3">
            <label for="exampleInputKeterangan1" class="form-label">Keterangan</label>
            <input type="text" class="form-control" id="exampleInputKeterangan1" name="keterangan"
                placeholder="Keterangan" autocomplete="off">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
