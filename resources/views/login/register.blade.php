@extends('template.main')

@section('container')
    <div class="row d-flex justify-content-center mt-5 text-center">
        <div class="col-md-4">
            <form action="/register/store" method="post">
                @csrf
                <h1 class="h3 mb-3 fw-normal">Register</h1>

                <div class="form-floating mb-2">
                    <input type="text" class="form-control @error('username') is-invalid @enderror" id="floatingInput"
                        placeholder="Username" name="username" autocomplete="off" value="{{ old('username') }}">
                    <label for="floatingInput">Username</label>

                    @error('username')
                        <div class="invalid-feedback">
                            <p class="text-danger">{{ $message }}</p>
                        </div>
                    @enderror
                </div>
                <div class="form-floating mb-2">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="floatingInput"
                        placeholder="name@example.com" name="email" autocomplete="off" value="{{ old('email') }}">
                    <label for="floatingInput">Email address</label>

                    @error('email')
                        <div class="invalid-feedback">
                            <p class="text-danger">{{ $message }}</p>
                        </div>
                    @enderror
                </div>
                <div class="form-floating mb-2">
                    <input type="password" class="form-control @error('password') is-invalid @enderror"
                        id="floatingPassword" placeholder="Password" name="password" autocomplete="off">
                    <label for="floatingPassword">Password</label>

                    @error('password')
                        <div class="invalid-feedback">
                            <p class="text-danger">{{ $message }}</p>
                        </div>
                    @enderror
                </div>

                <button class="btn btn-primary w-100 py-2" type="submit">Register</button>
            </form>
            <a href="/login" class="btn btn-danger mt-3">Kembali</a>
        </div>
    </div>
@endsection
