<div class="sidebar offcanvas offcanvas-start" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="sidebarLabel">Menu</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link mb-1" href="{{ url('/') }}">
                    <i class="bi bi-house-fill"></i> Beranda
                </a>
            </li>

            @auth
            <li class="nav-item">
                <a class="nav-link" href="{{ route('posts.index') }}">
                    <i class="bi bi-search"></i> Cari
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('posts.create') }}">
                    <i class="bi bi-plus-square-fill"></i> Bagikan
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/collection">
                    <i class="bi bi-bookmark-fill"></i> Koleksi
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('profile.show', Auth::user()->id) }}">
                    <i class="bi bi-person-fill"></i> Akun
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form-sidebar').submit();">
                    <i class="bi bi-box-arrow-right"></i> Logout
                </a>
                <form id="logout-form-sidebar" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
            @endauth

            @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">
                    <i class="bi bi-box-arrow-in-right"></i> Login
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">
                    <i class="bi bi-person-plus-fill"></i> Register
                </a>
            </li>
            @endguest
        </ul>
    </div>
</div>
