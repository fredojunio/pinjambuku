<div class="px-3">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Web Perpustakaan</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Katalog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Peminjaman</a>
                </li>
            </ul>
        </div>
        @if (Auth::check())
        <ul>
        <li class="nav-item">
            <a class="nav-link" href="#">Hai, <span>{{ Auth::user()->nama }}</span></a>
        </li>
    </ul>
        @else
            <a href="{{ route('login') }}" class="btn btn-outline-primary my-2 my-sm-0">Login</a>
        @endif
    </nav>
    
</div>
