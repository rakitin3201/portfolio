<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
{{-- <nav class="navbar navbar-expand-lg bg-light rounded shadow-sm" aria-label="Twelfth navbar example"> --}}
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample10" aria-controls="navbarsExample10" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample10">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{ url('/') }}">{{ Config::get('APP_NAME', 'PORTFOLIO') }}</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('blog') }}">BLOG</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('oss') }}">OSS</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('projet') }}">PROJETS</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">ABOUT</a></li>
                {{-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                        @auth
                            {{ Auth::user()->name }}
                        @else
                            {{ __('Connexion') }}
                        @endauth
                    </a>
                    <ul class="dropdown-menu">
                        @if (Route::has('login'))
                            <li><a class="dropdown-item" href="{{ route('login') }}">{{ __('Se connecter') }}</a></li>
                        @endif
                        @if (Route::has('register'))
                            <li><a class="dropdown-item" href="{{ route('register') }}">{{ __('Inscription') }}</a></li>
                        @endif
                        @if (Route::has('logout.perForm'))
                            <li><a class="dropdown-item" href="{{ route('logout.perForm') }}">{{ __('logout') }}</a></li>
                        @endif
                    </ul>
                </li> --}}
            </ul>
        </div>
    </div>
</nav>