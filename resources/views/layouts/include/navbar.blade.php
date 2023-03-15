<nav class="navbar shadow" style="background-color:#e3f2fd;">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/') }}">{{ config('app.name', 'Laravel') }}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbarDark" aria-controls="offcanvasNavbarDark">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbarDark" aria-labelledby="offcanvasNavbarDarkLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarDarkLabel">MENU</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    {{-- <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Home</a></li> --}}
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{ url('/') }}">PORTFOLIO</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('blog') }}">BLOG</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('oss') }}">OSS</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('projet') }}">PROJETS</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">ABOUT</a></li>
                </ul>
                {{-- <form class="d-flex mt-3" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form> --}}
            </div>
        </div>
    </div>
</nav>