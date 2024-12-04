<header id="header" class="site-header" style="position: fixed; top: 0; width: 100%; z-index: 1000;">
    <nav id="header-nav" class="navbar navbar-expand-lg" style="background: linear-gradient(to right, #6f6f5f, #e6e6de); padding-bottom: 20px; padding-top: 10px; border-bottom-left-radius: 50% 100%; border-bottom-right-radius: 50% 100%;">
        <div class="container">
            <a class="navbar-brand" href="index.html"></a>
            <button class="navbar-toggler d-flex d-lg-none order-3 p-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#bdNavbar" aria-controls="bdNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa-solid fa-bars"></i>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="bdNavbar" aria-labelledby="bdNavbarOffcanvasLabel">
                <div class="offcanvas-body">
                    <ul id="navbar" class="navbar-nav justify-content-center align-items-start align-items-lg-center flex-grow-1">
                        <li class="nav-item">
                            <img src="images/logo.png" class="logo me-4" width="90">
                        </li>
                        <li class="nav-item">
                            <a class="nav-link me-4 {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link me-4 {{ request()->routeIs('tentang-kami') ? 'active' : '' }}" href="{{ route('tentang-kami') }}">Tentang Kami</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link me-4 {{ request()->routeIs('lokasi') ? 'active' : '' }}" href="{{ route('lokasi') }}">Lokasi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link me-4 {{ request()->routeIs('keunggulan') ? 'active' : '' }}" href="{{ route('keunggulan') }}">Keunggulan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link me-4 {{ request()->routeIs('unit') ? 'active' : '' }}" href="{{ route('unit') }}">Tipe Unit</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link me-4 {{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Kontak</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link me-4 {{ request()->routeIs('artikel') ? 'active' : '' }}" href="{{ route('artikel') }}">Artikel</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>

