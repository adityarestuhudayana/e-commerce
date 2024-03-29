<header class="p-3 mb-3 border-bottom">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 link-body-emphasis text-decoration-none">
                <i class="bi bi-check-circle-fill"></i>
            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="/"
                        class="nav-link px-2 link-{{ Request::is('/') ? 'secondary' : 'body-emphasis' }}">Home</a></li>
                <li><a href="/products"
                        class="nav-link px-2 link-{{ Request::is('products') ? 'secondary' : 'body-emphasis' }}">Products</a>
                </li>
                <li><a href="/cart"
                        class="nav-link px-2 link-{{ Request::is('cart') ? 'secondary' : 'body-emphasis' }}">Cart</a>
                </li>
            </ul>

            <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
                <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
            </form>

            @if (auth()->user())
                <div class="dropdown text-end">
                    <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="{{ asset('img/profile.png') }}" alt="mdo" width="32" height="32" class="rounded-circle">
                    </a>
                    <ul class="dropdown-menu text-small">
                        <li><a class="dropdown-item" href="/profile">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <form action="/login/logout" method="POST">
                                @csrf
                                <button class="dropdown-item" type="submit">
                                    Sign out
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
            @else
                <a href="/login" class="btn btn-danger">Login</a>
            @endif
        </div>
    </div>
</header>
