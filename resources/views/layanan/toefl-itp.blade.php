@extends('partials.main')

@section('css')
    <!-- FilePond styles -->
    <link href="https://unpkg.com/filepond/dist/filepond.min.css" rel="stylesheet">

    <!-- FilePond library -->
    <script src="https://unpkg.com/filepond/dist/filepond.min.js"></script>

    <!-- File type validation plugin -->
    <script src="https://unpkg.com/filepond-plugin-file-validate-type/dist/filepond-plugin-file-validate-type.min.js">
    </script>

    <!-- FilePond preview plugin (optional) -->
    <script src="https://unpkg.com/filepond-plugin-file-preview/dist/filepond-plugin-file-preview.min.js"></script>

    <!-- Datatable -->
    <link rel="stylesheet" href="{{ asset('/') }}assets/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}assets/css/buttons.bootstrap5.min.css">
    <style>
        /* Custom list style using Font Awesome icon */
        .list-disc {
            list-style: none;
            /* Remove default bullet */
            padding-left: 1.5rem;
            /* Indent the list items */
        }

        .list-disc li {
            position: relative;
            margin-bottom: 0.5rem;
        }

        .list-disc li::before {
            content: "\f111";
            /* Unicode for fa-circle (solid) */
            font-family: "Font Awesome 5 Pro";
            font-weight: 400;
            /* 400 = regular (outline), 900 = solid */
            position: absolute;
            left: -1.5rem;
            top: 0.25rem;
            color: #0d6efd;
            /* Bootstrap primary color, customize as needed */
            font-size: 0.6rem;
        }

        .accordion-two .accordion-button {
            font-size: 20px !important
        }

        .blog-details-box .blogs__meta .blog-author,
        .blog-details-box .blogs__meta span {
            font-size: 14px !important
        }

        .blog-details-box .blogs__meta li {
            margin-right: 0
        }

        .form-check-input {
            height: 18px !important;
            width: 18px !important;
            padding-left: 0px !important
        }
    </style>
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
                            <h1 class="page-title mb-25">Layanan TOEFL ITP</h1>
                            <div class="breadcrumb-list">
                                <ul class="breadcrumb">
                                    <li><a class="link-khusus" href="{{ url('/') }}">Beranda -</a></li>
                                    <li><a href="#">Layanan TOEFL ITP</a></li>
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
                    'title' => 'TOEFL ITP Gelombang #3',
                    'is_end' => false,
                    'date' => '25 September 2025',
                    'time' => '14:00 WIB',
                    'place' => 'Ruang Serbaguna Poltekkes Pontianak',
                    'quota' => 50,
                    'filled' => 7,
                    'url' => 'legalisir',
                ],
                [
                    'id' => 2,
                    'title' => 'TOEFL ITP Gelombang #2',
                    'is_end' => true,
                    'date' => '12 September 2025',
                    'time' => '10:00 WIB',
                    'place' => 'Ruang Serbaguna Poltekkes Pontianak',
                    'quota' => 80,
                    'filled' => 80,
                    'url' => 'legalisir',
                ],
                [
                    'id' => 3,
                    'title' => 'TOEFL ITP Gelombang #1',
                    'is_end' => true,
                    'date' => '5 September 2025',
                    'time' => '10:00 WIB',
                    'place' => 'Ruang Serbaguna Poltekkes Pontianak',
                    'quota' => 80,
                    'filled' => 80,
                    'url' => 'legalisir',
                ],
            ];
        @endphp
        <!-- blog-details-area start -->
        <section class="course-categories border-bot pt-150 pb-115 pt-md-95 pb-md-65 pt-xs-95 pb-xs-65"
            style="background: #fbfcfd">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-12 text-center">
                        <div class="portfolio-menu mb-60">
                            <button class="gf_btn active" data-filter='*'>Semua</button>
                            <button class="gf_btn" data-filter='.cat-false'>Tersedia</button>
                            <button class="gf_btn" data-filter='.cat-true'>Berakhir</button>
                        </div>
                    </div>
                </div>
                <div class="grid row justify-content-center">
                    @foreach ($layanan as $key => $val)
                        <div class="col-lg-4 col-md-6 grid-item cat-{{ $val['is_end'] ? 'true' : 'false' }}">
                            <div class="z-gallery z-gallery-two gallery-03 mb-30">
                                <div class="z-gallery__thumb mb-20">
                                    <a href="course-details"><img class="img-fluid"
                                            src="{{ URL::asset('assets/img/course/13.jpg') }}" alt=""
                                            @if ($val['is_end']) style="filter: grayscale(1)" @endif></a>
                                    <div class="research-tag">
                                        @if ($val['is_end'])
                                            <span>Berakhir</span>
                                        @else
                                            <span>Tersedia</span>
                                            <span hidden></span>
                                        @endif
                                    </div>
                                </div>
                                <div class="z-gallery__content pos-rel">
                                    <div class="course__meta d-flex align-items-center justify-content-between mb-15">
                                        <span><img class="icon" src="{{ URL::asset('assets/img/icon/date-line.svg') }}"
                                                alt="course-meta"> {{ $val['date'] }}</span>
                                        <span><img class="icon" src="{{ URL::asset('assets/img/icon/time.svg') }}"
                                                alt="course-meta"> {{ $val['time'] }}</span>
                                    </div>
                                    <h4 class="sub-title mb-15"><a href="course-details">{{ $val['title'] }}</a></h4>
                                    <p class="mb-20">{{ $val['place'] }}</p>
                                    <div class="feedback-tag pt-20 d-flex justify-content-between align-items-center">
                                        <div class="course__authors course__meta">
                                            <p class="ps-0">
                                                <span class="fs-6">
                                                    <img class="icon" src="{{ URL::asset('assets/img/icon/user.svg') }}"
                                                        alt="course-meta" style="height: 20px;">
                                                    @if ($val['quota'] == $val['filled'])
                                                        <strong class="text-danger">Kuota Penuh</strong>
                                                    @else
                                                        {{ $val['filled'] }}/{{ $val['quota'] }}
                                                    @endif
                                                </span>
                                                @if ($val['quota'] != $val['filled'])
                                                    Kuota
                                                @endif
                                            </p>
                                        </div>
                                        <a @if ($val['is_end']) href="#" @else href="{{ url('/layanan/toefl-itp/daftar') }}" @endif
                                            class="theme_btn px-4 py-3 small @if ($val['is_end']) bg-secondary @endif">Daftar</a>
                                    </div>
                                </div>
                            </div>
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
