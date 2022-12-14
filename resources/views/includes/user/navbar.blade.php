<header class="header navbar navbar-expand-lg bg-light shadow-sm shadow-dark-mode-none fixed-top">
    <div class="container px-3">

        <a href="#" class="navbar-brand">
            @if ($logo == null)
                <img src="{{ asset('imagenull/logo.png') }}" width="47" alt="Silicon">
            @else
                <img src="{{ asset($logo->foto) }}" width="47" alt="Silicon">    
            @endif

            @if ($logo == null)
                TRACER STUDY
            @else
                {{ $logo->isi }}
            @endif
        </a>
        
        <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse5"
            aria-expanded="false">
            <span class="navbar-toggler-icon"></span>
        </button>

        @if (Route::has('login'))
        @auth
        <div class="nav dropdown d-block order-lg-3 ms-4">
            <a href="#" class="d-flex nav-link p-0" data-bs-toggle="dropdown">
                @if (Auth::user()->foto_profile == null)
                <img src="{{ asset('default/user.png') }}" class="rounded-circle" width="47" height="47" alt="Avatar">
                @else
                <img src="{{ asset(auth()->user()->foto_profile) }}" class="rounded-circle" width="47" alt="Avatar">
                @endif
                {{-- <div class="d-none d-sm-block ps-2">
                    <div class="fs-xs lh-1 opacity-60">Hello,</div>
                    <div class="fs-sm dropdown-toggle">{{ auth()->user()->nama }}</div>
                </div> --}}
            </a>
            <ul class="dropdown-menu dropdown-menu-end my-1" style="width: 14rem;">
                <li>
                    <a href="/profile" class="dropdown-item d-flex align-items-center">
                        <i class="bx bx-group fs-base opacity-60 me-2"></i>
                        Profil Saya
                        {{-- <span class="ms-auto fs-xs text-muted">$735.00</span> --}}
                    </a>
                </li>
                <li class="dropdown-divider"></li>
                <li>
                    <a class="dropdown-item d-flex align-items-center" href="/logout">
                        <i class="bx bx-log-out fs-base opacity-60 me-2"></i>
                        Log out
                    </a>
                </li>
            </ul>
        </div>

        @else
        <div class="nav d-block order-lg-3 ms-4">
            <a href="/login" class="btn btn-primary btn-sm fs-sm rounded d-lg-inline-flex">
                &nbsp;Login
            </a>
        </div>
        @endauth
        @endif

        <nav id="navbarCollapse5" class="collapse navbar-collapse order-lg-2">
            <hr class="d-lg-none mt-3 mb-2">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a href="/" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="/tentangkami" class="nav-link">Tentang Kami</a>
                </li>
                @if (Route::has('login'))
                @auth
                <li class="nav-item">
                    <a href="/semuaalumni" class="nav-link">Alumni</a>
                </li>
                @endauth
                @endif
                <li class="nav-item">
                    <a href="/organisasi" class="nav-link">Organisasi</a>
                </li>
                <li class="nav-item">
                    <a href="/tampilberita" class="nav-link">Berita & Event</a>
                </li>
                
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle show" data-bs-toggle="dropdown" aria-expanded="true">Lainnya</a>
                    <ul class="dropdown-menu show" data-bs-popper="static">

                      <li><a href="/lowonganpekerjaan" class="dropdown-item">Lowongan Pekerjaan</a></li>
                      <li><a href="/publikasiloker" class="dropdown-item">Publikasi Lowongan Pekerjaan</a></li>

                      <li><a href="/kesanpesan" class="dropdown-item">Kesan & Pesan</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a href="/kontak" class="nav-link">Kontak Kami</a>
                </li>
            </ul>
        </nav>
    </div>
</header>
