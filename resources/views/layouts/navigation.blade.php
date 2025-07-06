<nav class="navbar navbar-expand-md bg-dark text-light py-3">
    <div class="container d-flex justify-content-between align-items-center">

        {{-- Left Icon --}}
        <a class="d-flex navbar-brand text-light ms-3" href="{{ url('/home') }}">
            <i class="fas fa-shopping-bag fs-4"></i>
        </a>

        {{-- Center Nav Links (Only for authenticated users) --}}
        @auth
        <div class="d-none d-sm-flex flex-wrap gap-4">
            <a class="nav-link text-light fw-bold" href="{{ route('home') }}">HOME</a>
            <a class="nav-link text-light fw-bold" href="{{ route('product.list') }}">PRODUCTS</a>
            <a class="nav-link text-light fw-bold" href="#"> ABOUT </a>
            <a class="nav-link text-light fw-bold" href="#"> CONTACT </a>
        </div>
        <div class="d-flex d-sm-none">
            <button class="btn btn-dark" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
                </svg>
            </button>
            <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
                <div class="offcanvas-header">
                    <div class="d-flex w-100 justify-content-center">
                        <h5 class="offcanvas-title" id="offcanvasTopLabel">
                            <a class="d-flex navbar-brand text-dark" href="{{ url('/home') }}">
                                <i class="fas fa-shopping-bag fs-1"></i>
                            </a>
                        </h5>
                    </div>
                </div>
                <div class="offcanvas-body">
                    <div class="d-flex flex-column gap-3 border">
                        <a class="nav-link text-light fw-bold p-3 bg-dark rounded" href="{{ route('home') }}">HOME</a>
                        <a class="nav-link text-light fw-bold p-3 bg-dark rounded" href="{{ route('product.list') }}">PRODUCTS</a>
                        <a class="nav-link text-light fw-bold p-3 bg-dark rounded" href="#"> ABOUT </a>
                        <a class="nav-link text-light fw-bold p-3 bg-dark rounded" href="#"> CONTACT </a>
                    </div>
                    <div class="mt-3">
                        <a class="nav-link text-light fw-bold p-3 bg-dark rounded" href="{{ route('logout') }}">
                                {{ __('LOGOUT') }}
                        </a>
                        <form action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
                    </div>
                </div>
            </div>
        </div>
        @endauth

        {{-- Right Icons --}}
        <ul class="d-none navbar-nav d-sm-flex flex-row gap-3">
            @auth
                <li class="nav-item">
                    <a class="nav-link text-light" href="#"><i class="fas fa-search"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="#"><i class="fas fa-shopping-cart"></i></a>
                </li>
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link text-light dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                        <i class="fas fa-user"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
                    </div>
                </li>
            @else
                @if(Request::is('login'))
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center gap-2 text-light fw-semibold" href="{{ route('register') }}">
                            <i class="fas fa-user"></i> REGISTER
                        </a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center gap-2 text-light fw-semibold" href="{{ route('login') }}">
                            <i class="fas fa-user"></i> LOGIN
                        </a>
                    </li>
                @endif
            @endguest
        </ul>
    </div>
</nav>
