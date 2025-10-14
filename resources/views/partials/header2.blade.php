<header>
    <div id="theme-menu-two" class="main-header-area main-head-three pl-100 pr-100 pt-20 pb-15">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-xl-2 col-lg-2 col-5">
                    <div class="logo"><a href="index"><img
                                src="{{ URL::asset('assets/img/logo/logo-poltekkes-pontianak.png') }}" alt=""></a>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-8 d-none d-lg-block">
                    <nav class="main-menu navbar navbar-expand-lg justify-content-center">
                        <div class="nav-container">
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav">
                                    {{-- === BERANDA === --}}
                                    <li class="nav-item {{ request()->is('/') ? 'active' : '' }}">
                                        <a class="nav-link" href="{{ url('/') }}">Beranda</a>
                                    </li>

                                    {{-- === AKADEMIK === --}}
                                    <li
                                        class="nav-item dropdown mega-menu
        {{ request()->is('layanan/permohonan-dokumen-akademik') ||
        request()->is('layanan/legalisir') ||
        request()->is('layanan/surat-keterangan') ||
        request()->is('layanan/translate') ||
        request()->is('layanan/toefl-itp') ||
        request()->is('layanan/perpustakaan') ||
        request()->is('layanan/ethical-clearance') ||
        request()->is('layanan/pengujian') ||
        request()->is('layanan/pengembangan-kompetensi')
            ? 'active'
            : '' }}">

                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2"
                                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Akademik
                                        </a>

                                        <ul class="dropdown-menu submenu mega-menu__sub-menu-box"
                                            aria-labelledby="navbarDropdown2">
                                            <li>
                                                <a href="{{ url('/layanan/permohonan-dokumen-akademik') }}">
                                                    <span><img src="{{ URL::asset('assets/img/icon/icon7.svg') }}"
                                                            alt=""></span>
                                                    Permohonan Dokumen Akademik
                                                </a>
                                            </li>
                                            <li>
                                                <a onclick="layananMaintenance()" style="cursor:pointer">
                                                    <span><img src="{{ URL::asset('assets/img/icon/icon8.svg') }}"
                                                            alt=""></span>
                                                    Ethical Clearance
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ url('/layanan/translate') }}">
                                                    <span><img src="{{ URL::asset('assets/img/icon/icon9.svg') }}"
                                                            alt=""></span>
                                                    Translate Abstract/Dokumen
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ url('/layanan/toefl-itp') }}">
                                                    <span><img src="{{ URL::asset('assets/img/icon/icon10.svg') }}"
                                                            alt=""></span>
                                                    Layanan TOEFL ITP
                                                </a>
                                            </li>
                                            <li>
                                                <a onclick="layananMaintenance()" style="cursor:pointer">
                                                    <span><img src="{{ URL::asset('assets/img/icon/icon11.svg') }}"
                                                            alt=""></span>
                                                    Layanan Pengujian
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://kemkes.go.id/id/home" target="_blank">
                                                    <span><img src="{{ URL::asset('assets/img/icon/icon12.svg') }}"
                                                            alt=""></span>
                                                    Layanan Jurnal dan Publikasi
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ url('/layanan/perpustakaan') }}">
                                                    <span><img src="{{ URL::asset('assets/img/icon/icon14.svg') }}"
                                                            alt=""></span>
                                                    Layanan Perpustakaan
                                                </a>
                                            </li>
                                            <li>
                                                <a onclick="layananMaintenance()" style="cursor:pointer">
                                                    <span><img src="{{ URL::asset('assets/img/icon/icon13.svg') }}"
                                                            alt=""></span>
                                                    Layanan Pengembangan Kompetensi
                                                </a>
                                            </li>
                                        </ul>
                                    </li>

                                    {{-- === NON AKADEMIK === --}}
                                    <li
                                        class="nav-item dropdown mega-menu
        {{ request()->is('layanan/sarpras') ||
        request()->is('layanan/klinik') ||
        request()->is('layanan/asrama') ||
        request()->is('layanan/catering')
            ? 'active'
            : '' }}">

                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3"
                                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Non Akademik
                                        </a>

                                        <ul class="dropdown-menu submenu mega-menu__sub-menu-box"
                                            aria-labelledby="navbarDropdown3">
                                            <li>
                                                <a href="{{ url('/layanan/sarpras') }}">
                                                    <span><img src="{{ URL::asset('assets/img/icon/icon7.svg') }}"
                                                            alt=""></span>
                                                    Layanan Penyewaan Sarpras
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ url('/layanan/klinik') }}">
                                                    <span><img src="{{ URL::asset('assets/img/icon/icon8.svg') }}"
                                                            alt=""></span>
                                                    Layanan Klinik Pratama
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ url('/layanan/asrama') }}">
                                                    <span><img src="{{ URL::asset('assets/img/icon/icon9.svg') }}"
                                                            alt=""></span>
                                                    Layanan Asrama (khusus mahasiswa)
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ url('/layanan/catering') }}">
                                                    <span><img src="{{ URL::asset('assets/img/icon/icon10.svg') }}"
                                                            alt=""></span>
                                                    Layanan Catering (khusus mahasiswa)
                                                </a>
                                            </li>
                                        </ul>
                                    </li>

                                    {{-- === KONTAK === --}}
                                    <li class="nav-item {{ request()->is('kontak') ? 'active' : '' }}">
                                        <a class="nav-link" href="{{ url('/kontak') }}">Kontak</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
                <div class="col-xl-3 col-lg-2 col-7">
                    <div class="right-nav d-flex align-items-center justify-content-end">
                        <div class="right-btn mr-25 mr-xs-15">
                            <ul class="d-flex align-items-center">
                                <li><a href="{{ url('/daftar') }}" class="theme_btn free_btn">Daftar SAPA</a></li>
                                <li><a class="sign-in ml-20" href="{{ url('/masuk') }}"><img
                                            src="{{ URL::asset('assets/img/icon/user.svg') }}" alt=""></a>
                                </li>
                            </ul>
                        </div>
                        <div class="hamburger-menu d-md-inline-block d-lg-none text-right">
                            <a href="javascript:void(0);">
                                <i class="far fa-bars"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- /.theme-main-menu -->
</header>
