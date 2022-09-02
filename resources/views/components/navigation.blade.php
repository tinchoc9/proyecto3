<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('post.index') }}">Gordo Web Post</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Etiquetas
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Actualidad</a></li>
                        <li><a class="dropdown-item" href="#">Economia</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    @if (Route::has('login'))

                            @auth
                                <a class="nav-link active" aria-current="page" href="{{ url('/dashboard') }}">Dashboard</a>
                            @else
                                <a class="nav-link active" aria-current="page" href="{{ route('login') }}">Log in</a>
                </li>
                <li>
                                @if (Route::has('register'))
                                    <a class="nav-link active" aria-current="page"
                                        href="{{ route('register') }}">Register</a>
                                @endif
                            @endauth

                    @endif

                </li>
            </ul>

            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
                <button class="btn btn-outline-success" type="submit">Buscar</button>
            </form>
        </div>
    </div>
</nav>
