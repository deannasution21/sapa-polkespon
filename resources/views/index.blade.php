@extends('partials.main')

@section('css')
@endsection





@section('main')
    @include('partials.header')

    <main>
        <!--slider-area start-->
        <section class="slider-area pt-180 pt-xs-150 pt-150 pb-xs-35">
            <img class="sl-shape shape_01" src="{{ URL::asset('assets/img/icon/01.svg') }}" alt="">
            <img class="sl-shape shape_02" src="{{ URL::asset('assets/img/icon/02.svg') }}" alt="">
            <img class="sl-shape shape_03" src="{{ URL::asset('assets/img/icon/03.svg') }}" alt="">
            <img class="sl-shape shape_04" src="{{ URL::asset('assets/img/icon/04.svg') }}" alt="">
            <img class="sl-shape shape_05" src="{{ URL::asset('assets/img/icon/05.svg') }}" alt="">
            <img class="sl-shape shape_06" src="{{ URL::asset('assets/img/icon/06.svg') }}" alt="">
            <img class="sl-shape shape_07" src="{{ URL::asset('assets/img/shape/dot-box-5.svg') }}" alt="">
            <div class="main-slider pt-10">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-6 col-lg-6 order-last order-lg-first">
                            <div class="slider__img__box mb-50 pr-30">
                                <img class="img-one mt-55 pr-70" src="{{ URL::asset('assets/img/slider/a.png') }}"
                                    alt="">
                                <img class="slide-shape img-two" src="{{ URL::asset('assets/img/slider/b.png') }}"
                                    alt="">
                                <img class="slide-shape img-three" src="{{ URL::asset('assets/img/slider/c.png') }}"
                                    alt="">
                                <img class="slide-shape img-four" src="{{ URL::asset('assets/img/shape/dot-box-1.svg') }}"
                                    alt="">
                                <img class="slide-shape img-five" src="{{ URL::asset('assets/img/shape/dot-box-2.svg') }}"
                                    alt="">
                                <img class="slide-shape img-six" src="{{ URL::asset('assets/img/shape/zigzg-1.svg') }}"
                                    alt="">
                                <img class="slide-shape img-seven wow fadeInRight animated" data-delay="1.5s"
                                    src="{{ URL::asset('assets/img/icon/dot-plan-1.svg') }}" alt="Chose-img">
                                <img class="slide-shape img-eight" src="{{ URL::asset('assets/img/slider/earth-bg.svg') }}"
                                    alt="">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="slider__content pt-15">
                                <h1 class="main-title mb-40 wow fadeInUp2 animated" data-wow-delay='.1s'>SELAMAT DATANG
                                    DI<span class="vec-shape">SAPA POLKESPON</span></h1>
                                <h5 class="mb-35 wow fadeInUp2 animated" data-wow-delay='.2s'>Sistem Administrasi
                                    Pelayanan Poltekkes Pontianak hadir untuk memudahkan Anda dalam mengakses berbagai
                                    layanan akademik maupun non-akademik. Praktis, cepat, dan terpadu dalam satu platform.
                                </h5>
                                <button class="theme_btn search_btn">Telusuri Layanan</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--slider-area end-->
        @php
            $layanan = [
                [
                    'id' => 1,
                    'title' => 'Permohonan Dokumen Akademik',
                    'jenis' => 'akademik',
                    'icon' => null,
                    'url' => '#',
                ],
                [
                    'id' => 2,
                    'title' => 'Ethical Clearance',
                    'jenis' => 'akademik',
                    'icon' => null,
                    'url' => '#',
                ],
                [
                    'id' => 3,
                    'title' => 'Translate Abstract/Dokumen',
                    'jenis' => 'akademik',
                    'icon' => null,
                    'url' => '#',
                ],
                [
                    'id' => 4,
                    'title' => 'Layanan TOEFL ITP',
                    'jenis' => 'akademik',
                    'icon' => null,
                    'url' => '#',
                ],
                [
                    'id' => 5,
                    'title' => 'Layanan Pengujian',
                    'jenis' => 'akademik',
                    'icon' => null,
                    'url' => '#',
                ],
                [
                    'id' => 6,
                    'title' => 'Layanan Jurnal dan Publikasi',
                    'jenis' => 'akademik',
                    'icon' => null,
                    'url' => '#',
                ],
                [
                    'id' => 7,
                    'title' => 'Layanan Perpustakaan',
                    'jenis' => 'akademik',
                    'icon' => null,
                    'url' => '#',
                ],
                [
                    'id' => 8,
                    'title' => 'Layanan Pengembangan Kompetensi',
                    'jenis' => 'akademik',
                    'icon' => null,
                    'url' => '#',
                ],
                [
                    'id' => 9,
                    'title' => 'Layanan Penyewaan Sarpras',
                    'jenis' => 'non_akademik',
                    'icon' => null,
                    'url' => '#',
                ],
                [
                    'id' => 10,
                    'title' => 'Layanan Klinik Pratama',
                    'jenis' => 'non_akademik',
                    'icon' => null,
                    'url' => '#',
                ],
                [
                    'id' => 11,
                    'title' => 'Layanan Asrama (khusus mahasiswa)',
                    'jenis' => 'non_akademik',
                    'icon' => null,
                    'url' => '#',
                ],
                [
                    'id' => 12,
                    'title' => 'Layanan Catering (khusus mahasiswa)',
                    'jenis' => 'non_akademik',
                    'icon' => null,
                    'url' => '#',
                ],
            ];
        @endphp
        <!--what-loking-for start-->
        <section class="what-looking-for pos-rel mt-50">
            <div class="what-blur-shape-one"></div>
            <div class="what-blur-shape-two"></div>
            <div class="what-look-bg gradient-bg pt-145 pb-130 pt-md-95 pb-md-80 pt-xs-95 pb-xs-80">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="section-title section-title-2 text-center text-xl-start mb-50">
                                <div class="d-flex justify-content-center">
                                    <h5 class="bottom-line left-line mb-25 pl-40">Layanan</h5>
                                </div>
                                <h2 class="text-center mb-20">Layanan SAPA POLKESPON</h2>
                                <p class="text-center">Temukan berbagai layanan akademik dan non-akademik Poltekkes
                                    Pontianak dalam satu sistem
                                    terpadu yang mudah diakses kapan saja.</p>
                            </div>
                        </div>
                        <div class="col-xl-6 text-center text-xl-start">
                            <div class="portfolio-menu portfolio-menu-two mb-30">
                                <button class="gf_btn active" data-filter='*'>Semua</button>
                                <button class="gf_btn" data-filter='.cat-akademik'>Akademik</button>
                                <button class="gf_btn" data-filter='.cat-non_akademik'>Non-Akademik</button>
                            </div>
                        </div>
                        <div class="col-xl-6 text-center text-xl-end">
                            <ul class="search__area d-md-inline-flex align-items-center justify-content-between mb-30 wow fadeInUp animated"
                                data-delay="1.5s">
                                <li>
                                    <div class="widget__search">
                                        <form class="input-form" action="#">
                                            <input type="text" placeholder="Find Courses">
                                        </form>
                                        <button class="search-icon"><i class="far fa-search"></i></button>
                                    </div>
                                </li>
                                <li>
                                    <div class="widget__select">
                                        <select name="select-cat" id="select">
                                            <option value="">Categories</option>
                                            <option value="">Class One</option>
                                            <option value="">Class Two</option>
                                            <option value="">Class Three</option>
                                            <option value="">Class Four</option>
                                            <option value="">Class Five</option>
                                        </select>
                                    </div>
                                </li>
                                <li>
                                    <button class="theme_btn search_btn ml-35">Search Now</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="grid row online__course__cat mt-30">
                        @foreach ($layanan as $key => $val)
                            @php
                                // Hitung delay dinamis: mulai dari 0.1s dan naik 0.1 tiap item
                                $delay = number_format(0.1 * ($key + 1), 1);
                            @endphp
                            <div class="col-xl-3 col-lg-4 col-md-6 grid-item cat-{{ $val['jenis'] }}">
                                <div class="courses_link mb-30 wow fadeInUp2 animated"
                                    data-wow-delay="{{ $delay }}s" style="min-height: 280px">
                                    <img class="icon-01 mb-35"
                                        src="{{ asset($val['icon'] ?? 'assets/img/icon/chart-a.svg') }}" alt="">
                                    <h4 class="sub-title mb-25 fs-6">{{ $val['title'] }}</h4>
                                    <a href="{{ $val['url'] }}"><img class='arrows-icon'
                                            src="assets/img/icon/arrow-right.svg" alt="arrow-right"></a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <!--what-loking-for end-->
    </main>
@endsection

@section('js')
@endsection
