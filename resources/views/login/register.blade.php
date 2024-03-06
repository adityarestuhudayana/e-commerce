@extends('template.main')

@section('container')
    <div class="row d-flex justify-content-center mt-5 text-center">
        <div class="col-md-4">
            <form>
                <h1 class="h3 mb-3 fw-normal">Register</h1>

                <div class="form-floating mb-2">
                    <input type="text" class="form-control" id="floatingInput" placeholder="Username" name="username"
                        autocomplete="off">
                    <label for="floatingInput">Username</label>
                </div>
                <div class="form-floating mb-2">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com"
                        name="email" autocomplete="off">
                    <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating mb-2">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password"
                        autocomplete="off">
                    <label for="floatingPassword">Password</label>
                </div>

                <button class="btn btn-primary w-100 py-2" type="submit">Register</button>
            </form>
            <a href="/login" class="btn btn-danger mt-3">Kembali</a>
        </div>
    </div>
@endsection
