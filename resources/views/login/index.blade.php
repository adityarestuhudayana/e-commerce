@extends('template.main')

@section('container')
    <div class="row d-flex justify-content-center mt-5 text-center">
        <div class="col-md-4">
            @if (session('loginFailed'))
                <div class="alert alert-danger" role="alert">
                    {{ session('loginFailed') }}
                </div>
            @endif

            @if (session('regisSuccess'))
                <div class="alert alert-info" role="alert">
                    {{ session('regisSuccess') }}
                </div>
            @endif
            <form action="/login/auth" method="post">
                @csrf
                <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

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

                <div class="form-check text-start my-3">
                    <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Remember me
                    </label>
                </div>
                <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
            </form>
            <p class="mt-3">Belum punya akun? <a href="/register">Daftar</a></p>
        </div>
    </div>
@endsection
