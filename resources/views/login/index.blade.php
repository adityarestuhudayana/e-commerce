@extends('template.main')

@section('container')
    <div class="row d-flex justify-content-center mt-5 text-center">
        <div class="col-md-4">
            <form>
                <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

                <div class="form-floating mb-2">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email"
                        autocomplete="off">
                    <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password"
                        autocomplete="off">
                    <label for="floatingPassword">Password</label>
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
