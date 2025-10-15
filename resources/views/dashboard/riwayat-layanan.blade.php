@extends('partials.main')

@section('css')
    <!-- Datatable -->
    <link rel="stylesheet" href="{{ asset('/') }}assets/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}assets/css/buttons.bootstrap5.min.css">

    <style>
        .comments__author img {
            width: 180px;
            height: 180px;
            border: 3px solid #36bfb4
        }

        .cat-btn a {
            margin: 0px !important;
            font-size: 16px;
            padding-left: 25px !important;
            padding-right: 25px !important;
        }

        .cat-btn a:hover,
        .cat-btn a.active {
            color: #ffffff;
            background-color: #36bfb4;
            border-color: #36bfb4
        }

        .single-box__icon {
            height: 50px;
            width: 50px;
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
                            <h1 class="page-title mb-25">Riwayat Layanan</h1>
                            <div class="breadcrumb-list">
                                <ul class="breadcrumb">
                                    <li><a class="link-khusus" href="{{ url('/') }}">Beranda</a> - <a
                                            class="link-khusus" href="{{ url('/dashboard') }}">Dashboard</a> - </li>
                                    <li><a href="#">Riwayat Layanan</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--page-title-area end-->
        <!-- blog-details-area start -->
        <section class="blog-details-area border-bot pt-150 pb-105 pt-md-100 pb-md-55 pt-xs-100 pb-xs-55"
            style="background: #fbfcfd">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        @include('partials.dashboard-sidebar')
                    </div>
                    <div class="col-lg-8">
                        <div class="comments-form-area mb-45 rounded-3 wow fadeInUp2 animated" data-wow-delay='.5s'>
                            <h2>Layanan Berjalan</h2>
                            <div class="parent-table w-100 overflow-auto">
                                <table id="tableHistory" class="fs-6" style="min-width: 700px;">
                                    <thead>
                                        <tr>
                                            <th style="min-width: 50px;">
                                                No
                                            </th>
                                            <th style="min-width: 100px;">
                                                Tanggal Mulai
                                            </th>
                                            <th style="min-width: 100px;">
                                                Tanggal Selesai
                                            </th>
                                            <th style="min-width: 200px;">
                                                Jenis Layanan
                                            </th>
                                            <th class="text-end" style="min-width: 100px;">
                                                Status
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="small">
                                        <tr>
                                            <td>
                                                1.
                                            </td>
                                            <td>
                                                25 September 2025
                                            </td>
                                            <td>
                                                30 September 2025
                                            </td>
                                            <td>
                                                <a href="#" class="link-khusus text-uppercase">
                                                    Layanan Perpustakaan
                                                </a>
                                            </td>
                                            <td class="text-end">
                                                <div class="badge bg-success rounded-pill p-2">Selesai</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                2.
                                            </td>
                                            <td>
                                                27 September 2025
                                            </td>
                                            <td>
                                                27 September 2025
                                            </td>
                                            <td>
                                                <a href="#" class="link-khusus text-uppercase">
                                                    Layanan TOEFL ITP
                                                </a>
                                            </td>
                                            <td class="text-end">
                                                <div class="badge bg-success rounded-pill p-2">Selesai</div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- blog-details-area end -->
    </main>
@endsection



@section('js')
    <!-- DataTables and extensions -->
    <script src="{{ asset('/') }}assets/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('/') }}assets/js/dataTables.buttons.min.js"></script>
    <script src="{{ asset('/') }}assets/js/buttons.html5.min.js"></script>
    <script src="{{ asset('/') }}assets/js/buttons.bootstrap5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.23/jspdf.plugin.autotable.min.js"></script>

    <script>
        $(document).ready(function() {
            // Initialize DataTable after appending
            const table = document.getElementById('tableHistory')

            new DataTable(table, {
                responsive: true,
                order: [],
                // dom: 'Bfrtip', // Add the Buttons UI
                // buttons: [{
                //     extend: 'excelHtml5',
                //     text: '<i class="fas fa-print me-2"></i>Export',
                //     className: 'btn btn-sm btn-success',
                //     title: `History Pendapatan ${username} ${_END_DATE} sd ${_START_DATE}`
                // }]
            });
        });
    </script>
@endsection
