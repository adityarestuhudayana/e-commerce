@extends('template.main')

@section('container')
    <div class=" bg-light d-flex justify-content-center flex-column align-items-center">

        <div class="col-md-5">
            <div class="img-profile text-center my-4">
                <img src="img/profile.png" alt="" width="200" height="200"
                    class="img-fluid img-thumbnail rounded-circle">
            </div>

            <a href="#" class="btn btn-success mb-3"><i class="bi bi-box-arrow-down me-2"></i>Simpan</a>

            <form>
                <div class="mb-3">
                    <label for="exampleInputUsername1" class="form-label">Username</label>
                    <input type="text" class="form-control" id="exampleInputUsername1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputAlamat1" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="exampleInputAlamat1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
            </form>
            <br>
            <hr>
            <br>
        </div>



        <p class="btn btn-info text-white"><i class="bi bi-cart-fill me-2"></i>Barang kamu</p>
        <a href="/products/create" class="btn btn-primary mb-3"><i class="bi bi-plus-lg me-2"></i>Buat barang jual</a>
        <div class="col-md-4 mb-2">
            <div class="card">
                <img src="img/shopping.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <hr>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's
                        content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                    <a href="#" class="btn btn-danger">Hapus</a>
                </div>
            </div>
        </div>
    </div>
@endsection
