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
                            <h1 class="page-title mb-25">Permohonan Dokumen Akademik</h1>
                            <div class="breadcrumb-list">
                                <ul class="breadcrumb">
                                    <li><a class="link-khusus" href="{{ url('/') }}">Beranda -</a></li>
                                    <li><a href="#">Permohonan Dokumen Akademik</a></li>
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
                    'title' => 'Legalisir Ijazah/Transkrip Nilai',
                    'jenis' => 'akademik',
                    'icon' => url('/assets/img/icon/1704689402659b7efaa4bdf1.56164178.webp'),
                    'url' => 'legalisir',
                ],
                [
                    'id' => 2,
                    'title' => 'Pengajuan Surat Keterangan',
                    'jenis' => 'akademik',
                    'icon' => url('/assets/img/icon/1704689354659b7ecac52d49.87203241.webp'),
                    'url' => 'surat-keterangan',
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
                                <div class="courses_link mb-30 wow fadeInUp2 animated" data-wow-delay="{{ $delay }}s"
                                    style="min-height: 280px">
                                    <img class="icon-01 mb-35"
                                        src="{{ asset($val['icon'] ?? url('/') . '/assets/img/icon/chart-a.svg') }}"
                                        alt="">
                                    <h4 class="sub-title mb-25 fs-6">{{ $val['title'] }}</h4>
                                    <div>
                                        <img class='arrows-icon' src="{{ url('/') }}/assets/img/icon/arrow-right.svg"
                                            alt="arrow-right">
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
