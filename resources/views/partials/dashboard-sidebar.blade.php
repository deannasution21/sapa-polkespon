<div class="blog-widget-area">
    <div class="widget mb-50 border-0 shadow-sm" style="background:#eaf8f7;">
        <div class="blog-search-widget">
            <div class="d-flex flex-column mb-4">
                <div class="comments__author d-flex justify-content-center mb-3">
                    <img src="{{ url('/') }}/assets/img/blog/comment/01.jpg" alt="" class="me-0 p-2">
                </div>
                <div class="z-instructors__content text-center">
                    <h4 class="sub-title mb-1 ps-0 border-0"><a>Fuad Amin</a></h4>
                    <p>Mahasiswa</p>
                </div>
            </div>
            <div>
                <ul class="courses-tag-btn cat-btn p-0 d-flex flex-column gap-2 mx-3">
                    <li>
                        <a href="{{ url('/dashboard') }}"
                            class="w-100 {{ request()->is('dashboard') ? 'active' : '' }}">
                            <i class="me-2 fas fa-home"></i>Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/dashboard/profil-saya') }}"
                            class="w-100 {{ request()->is('dashboard/profil-saya') ? 'active' : '' }}">
                            <i class="me-2 fas fa-user"></i>Profil Saya
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/dashboard/layanan-berjalan') }}"
                            class="w-100 {{ request()->is('dashboard/layanan-berjalan') ? 'active' : '' }}">
                            <i class="me-2 fas fa-check-circle"></i>Layanan Berjalan
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/dashboard/riwayat-layanan') }}"
                            class="w-100 {{ request()->is('dashboard/riwayat-layanan') ? 'active' : '' }}">
                            <i class="me-2 fas fa-history"></i>Riwayat Layanan
                        </a>
                    </li>
                    <li><a onclick="signOut()" class="w-100"><i class="me-2 fas fa-sign-out"></i>Keluar</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
