@extends('partials.main')

@section('css')
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
                            <h1 class="page-title mb-25">Kontak</h1>
                            <div class="breadcrumb-list">
                                <ul class="breadcrumb">
                                    <li><a class="link-khusus" href="{{ url('/') }}">Beranda</a> - </li>
                                    <li><a href="#">Kontak</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--page-title-area end-->
        <!-- blog-details-area start -->
        <section class="blog-details-area pt-150 pb-105 pt-md-100 pb-md-55 pt-xs-100 pb-xs-55">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-6">
                        <div class="contact-img mb-30">
                            <img class="img-fluid" src="{{ URL::asset('assets/img/contact/01.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="contact-wrapper pl-75 mb-30">
                            <div class="section-title mb-30">
                                <h2>Kontak Kami</h2>
                                <p>Untuk informasi lebih lanjut silakan menghubungi kami</p>
                            </div>
                            <div class="single-contact-box d-flex align-items-center mb-30">
                                <div class="contact__iocn" style="min-width: 60px;">
                                    <img src="{{ URL::asset('assets/img/icon/material-location-on.svg') }}" alt="">
                                </div>
                                <div class="contact__text">
                                    <h5>Jalan 28 Oktober Siantan Hulu Pontianak, Kalimantan Barat 78241</h5>
                                </div>
                            </div>
                            <div class="single-contact-box d-flex align-items-center cb-2 mb-30">
                                <div class="contact__iocn" style="min-width: 60px;">
                                    <img src="{{ URL::asset('assets/img/icon/phone-alt.svg') }}" alt="">
                                </div>
                                <div class="contact__text">
                                    <h5>+000 (125) 3654 34</h5>
                                </div>
                            </div>
                            <div class="single-contact-box d-flex align-items-center cb-3 mb-30">
                                <div class="contact__iocn" style="min-width: 60px;">
                                    <img src="{{ URL::asset('assets/img/icon/feather-mail.svg') }}" alt="">
                                </div>
                                <div class="contact__text">
                                    <h5>sapapolkespon@gmail.com</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- blog-details-area end -->

        <!--contact-map-area start-->
        <section class="contact-map-area">
            <div class="container-fluid px-0">
                <div class="row gx-0">
                    <div class="col-lg-12">
                        <div class="conatct-map">
                            {{-- <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d10019.512355675912!2d90.3779420697561!3d23.95217349394493!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1625130888507!5m2!1sen!2sbd"
                                style="border:0;" allowfullscreen="" loading="lazy"></iframe> --}}

                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7979.63661378395!2d109.3703667!3d-0.0047048!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e1d580427d9d85b%3A0x3645a80cd5c7f99!2sPOLTEKKES%20KEMENKES%20PONTIANAK!5e0!3m2!1sid!2sid!4v1760449131791!5m2!1sid!2sid"
                                height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--contact-map-area end-->
    </main>
@endsection



@section('js')
@endsection
