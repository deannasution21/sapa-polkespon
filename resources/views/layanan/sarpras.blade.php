@extends('partials.main')

@section('css')
@endsection


@section('main')
    @include('partials.header2')

    <main>
        <!--page-title-area start-->
        <section class="page-title-area d-flex align-items-end"
            style="background-image: url({{ asset('/') }}assets/img/page-title-bg/01.jpg);">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-lg-12">
                        <div class="page-title-wrapper mb-50">
                            <h1 class="page-title mb-25">Penyewaan Sarpras</h1>
                            <div class="breadcrumb-list">
                                <ul class="breadcrumb">
                                    <li><a class="link-khusus" href="{{ url('/') }}">Beranda -</a></li>
                                    <li><a href="#">Penyewaan Sarpras</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--page-title-area end-->
        @php
            $layanan = [
                [
                    'id' => 1,
                    'title' => 'Mobil Hiace',
                    'jenis' => 'non_akademik',
                    'icon' => url('/assets/img/course/hiace.png'),
                    'url' => url('/layanan/sarpras/mobil'),
                ],
                [
                    'id' => 2,
                    'title' => 'Ruang Auditorium',
                    'jenis' => 'non_akademik',
                    'icon' => url('/assets/img/course/auditorium.jpg'),
                    'url' => url('/layanan/sarpras/ruang-auditorium'),
                ],
                [
                    'id' => 3,
                    'title' => 'Ruang Teather',
                    'jenis' => 'non_akademik',
                    'icon' => url('/assets/img/course/teather.jpg'),
                    'url' => url('/layanan/sarpras/ruang-teather'),
                ],
                [
                    'id' => 4,
                    'title' => 'Ruang Kelas',
                    'jenis' => 'non_akademik',
                    'icon' => url('/assets/img/course/ruang-kelas.jpg'),
                    'url' => url('/layanan/sarpras/ruang-kelas'),
                ],
                [
                    'id' => 5,
                    'title' => 'Alat Laboratorium/Phantom Praktikum',
                    'jenis' => 'non_akademik',
                    'icon' => url('/assets/img/course/alat-laboratorium.jpg'),
                    'url' => url('/layanan/sarpras/alat-laboratorium'),
                ],
                [
                    'id' => 6,
                    'title' => 'CBT',
                    'jenis' => 'non_akademik',
                    'icon' => url('/assets/img/course/cbt.jpg'),
                    'url' => url('/layanan/sarpras/cbt'),
                ],
            ];
        @endphp
        <!-- blog-details-area start -->
        <section class="what-looking-for border-bot pos-rel pt-135 pb-115 pt-md-90 pb-md-70 pt-xs-90 pb-xs-70">
            <div class="what-blur-bg-three"></div>
            <div class="container">
                <div class="row justify-content-center online__course__cat mt-30">
                    @foreach ($layanan as $key => $val)
                        @php
                            // Hitung delay dinamis: mulai dari 0.1s dan naik 0.1 tiap item
                            $delay = number_format(0.1 * ($key + 1), 1);
                        @endphp
                        <div class="col-xl-3 col-lg-4 col-md-6 grid-item cat-{{ $val['jenis'] }}">
                            <a
                                @if ($val['url'] != '#') href="{{ $val['url'] }}" @else onclick="layananMaintenance()" style="cursor:pointer" @endif>
                                <div class="z-gallery mb-30">
                                    <div class="z-gallery__thumb mb-20"><img class="img-fluid" src="{{ $val['icon'] }}"
                                            alt="" style="height: 188px">
                                    </div>
                                    <div class="z-gallery__content text-center">
                                        <h4 class="sub-title mb-25 fs-6">{{ $val['title'] }}</h4>
                                        <div>
                                            <img class='arrows-icon'
                                                src="{{ url('/') }}/assets/img/icon/arrow-right.svg" alt="arrow-right">
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- blog-details-area end -->
    </main>
@endsection



@section('js')
@endsection
