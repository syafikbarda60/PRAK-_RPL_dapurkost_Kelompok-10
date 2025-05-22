<header class="bg-dark custom-header sticky-top d-flex justify-content-between align-items-center px-3 py-2">
    <!-- Tombol Toggle Offcanvas -->
    <button class="btn btn-list text-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarMenu">
        <i class="bi bi-list"></i>
    </button>

    <!-- Logo -->
    <img src="{{ asset('assets/images/logo.png') }}" alt="Logo DapurKost" class="logo-img">

    <!-- Tombol Login / Logout -->
    @if(session('logged_in'))
    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        <i class="bi bi-box-arrow-right text-white"></i>
    </a>
    <form id="logout-form" action="
    {{ route('logout') }}
     " method="POST" class="d-none">
        @csrf
    </form>
    @else
    <a href="
    {{ route('show.login') }}
     ">
        <i class="bi bi-person-circle text-white"></i>
    </a>
    @endif
</header>
