{{-- <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm"> --}}
{{-- <nav class="navbar navbar-expand-lg bg-light rounded shadow-sm" aria-label="Twelfth navbar example">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample10" aria-controls="navbarsExample10" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample10">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{ url('/') }}">{{ config('app.name', 'Laravel') }}</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('blog') }}">BLOG</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('oss') }}">OSS</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('projet') }}">PROJETS</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">ABOUT</a></li>
            </ul>
        </div>
    </div>
</nav>
<br> --}}
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
    <div class="container-fluid">
        {{-- <a class="navbar-brand" href="{{ url('/') }}">{{ config('app.name', 'Laravel') }}</a> --}}
        <a class="navbar-brand" href="{{ url('/') }}">LOGO ICI</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbarLight" aria-controls="offcanvasNavbarLight">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbarLight" aria-labelledby="offcanvasNavbarLightLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLightLabel">MENU</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{ url('/') }}">PORTFOLIO</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('blog') }}">BLOG</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('oss') }}">OSS</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('projet') }}">PROJETS</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">ABOUT</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>