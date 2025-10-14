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
                            <h1 class="page-title mb-25">Dashboard</h1>
                            <div class="breadcrumb-list">
                                <ul class="breadcrumb">
                                    <li><a class="link-khusus" href="{{ url('/') }}">Beranda</a> - </li>
                                    <li><a href="#">Dashboard</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--page-title-area end-->
        <!-- blog-details-area start -->
        <section class="blog-details-area border-bot pt-150 pb-105 pt-md-100 pb-md-55 pt-xs-100 pb-xs-55">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        @include('partials.dashboard-sidebar')
                    </div>
                    <div class="col-lg-8">
                        <div class="row mb-45">
                            <div class="col-lg-4 col-6">
                                <div class="counters count-1 text-center mb-30 wow fadeInUp2 animated" data-wow-delay='.1s'>
                                    <div class="single-box s-box3 bg-transparent p-0 mb-5">
                                        <div class="single-box__icon mx-auto">
                                            <i class="fas fa-file-invoice-dollar text-white"></i>
                                        </div>
                                    </div>
                                    <h2 class="mb-1"><span class="counter">1</span></h2>
                                    <h5 class="fs-6">Pembayaran Menunggu</h5>
                                </div>
                            </div>
                            <div class="col-lg-4 col-6">
                                <div class="counters text-center mb-30 wow fadeInUp2 animated" data-wow-delay='.2s'>
                                    <div class="single-box bg-transparent p-0 mb-5">
                                        <div class="single-box__icon mx-auto">
                                            <i class="fas fa-check text-white"></i>
                                        </div>
                                    </div>
                                    <h2 class="mb-1"><span class="counter">2</span></h2>
                                    <h6 class="fs-6">Layanan Berjalan</h6>
                                </div>
                            </div>

                            <div class="col-lg-4 col-6">
                                <div class="counters count-2 text-center mb-30 wow fadeInUp2 animated" data-wow-delay='.3s'>
                                    <div class="single-box s-box2 bg-transparent p-0 mb-5">
                                        <div class="single-box__icon mx-auto">
                                            <i class="fas fa-history text-white"></i>
                                        </div>
                                    </div>
                                    <h2 class="mb-1"><span class="counter">7</span></h2>
                                    <h6 class="fs-6">Layanan Selesai</h6>
                                </div>
                            </div>
                        </div>
                        <div class="comments-form-area mb-45 rounded-3 wow fadeInUp2 animated" data-wow-delay='.5s'>
                            <h2>Pembayaran Menunggu</h2>
                            <div class="alert alert-info small mb-4">
                                ℹ️ — Anda memiliki satu pembayaran yang sedang menunggu
                            </div>
                            <div class="parent-table w-100 overflow-auto">
                                <table id="tableHistory" class="fs-6" style="min-width: 700px;">
                                    <thead>
                                        <tr>
                                            <th style="min-width: 50px;">
                                                No
                                            </th>
                                            <th style="min-width: 100px;">
                                                Tanggal
                                            </th>
                                            <th style="min-width: 200px;">
                                                Jenis Layanan
                                            </th>
                                            <th class="text-end" style="min-width: 100px;">
                                                Pembayaran
                                            </th>
                                            <th class="text-end" style="min-width: 100px;">
                                                Aksi
                                            </th>
                                            <th class="text-end" style="min-width: 100px;">
                                                Bukti Pembayaran
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
                                                Layanan Perpustakaan
                                            </td>
                                            <td class="text-end">
                                                Rp 55.421,-
                                            </td>
                                            <td>
                                                <div class="btn-group-vertical" role="group">
                                                    <button type="button" class="btn btn-sm btn-success"
                                                        data-bs-toggle="modal" data-bs-target="#modalInvoice">
                                                        <i class="fas fa-credit-card-front me-2"></i> Pembayaran
                                                    </button>
                                                    <button type="button" class="btn btn-sm btn-danger">
                                                        <i class="fas fa-times me-2"></i> Batalkan
                                                    </button>
                                                </div>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="text-primary" style="text-transform: unset">-</a>
                                            </td>
                                            <td class="text-end">
                                                <div class="badge bg-warning rounded-pill p-2">Menunggu Pembayaran</div>
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

    <!-- Modal Invoice -->
    <div class="modal fade" id="modalInvoice" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="modalInvoiceLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content shadow-lg border-0">
                <div class="modal-header" style="background: #16b3ac">
                    <h5 class="modal-title text-white" id="modalInvoiceLabel">
                        <i class="fas fa-file-invoice-dollar me-2"></i> Invoice Pembayaran
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <h6 class="mb-1">Nomor Pembayaran:</h6>
                            <p class="fw-bold mb-2" id="invoiceNumber">INV-20251009-00123</p>
                        </div>
                        <div class="col-md-6 text-md-end">
                            <h6 class="mb-1">Status Pembayaran:</h6>
                            <span class="badge bg-warning text-dark" id="invoiceStatus">
                                Menunggu Pembayaran
                            </span>
                        </div>
                    </div>

                    <hr>

                    <div class="mb-3">
                        <h6 class="mb-1">Metode Pembayaran:</h6>
                        <p class="mb-2">Transfer Bank (BCA Virtual Account)</p>
                    </div>

                    <div class="mb-3">
                        <h6 class="mb-1">Nomor Rekening / VA:</h6>
                        <div class="d-flex align-items-center">
                            <p class="fw-bold mb-0 me-2" id="paymentAccount">1234567890123456</p>
                            <button class="btn btn-sm btn-outline-secondary" id="copyVA"
                                onclick="copyToClipboard(1234567890123456)">
                                <i class="fas fa-copy"></i> Salin
                            </button>
                        </div>
                    </div>

                    <div class="mb-3">
                        <h6 class="mb-1">Atas Nama:</h6>
                        <p class="mb-2">POLTEKKES PONTIANAK</p>
                    </div>

                    <div class="mb-3">
                        <h6 class="mb-1">Total Tagihan:</h6>
                        <h4 class="fw-bold text-success mb-0">Rp 250.000</h4>
                    </div>

                    <div class="mb-3">
                        <div class="alert border border-primary text-center small mb-4">
                            <p class="text-primary mb-1">
                                <i class="fas fa-clock me-1"></i>
                                Selesaikan pembayaran sebelum:
                                <span id="invoiceDeadline">09 Oktober 2025, 23:59 WIB</span>
                            </p>
                            <div class="fw-bold text-danger fs-4 p-3 d-inline-block mx-auto" id="countdownTimer"
                                style="background: #f1f0ee">00:14:28</div>
                        </div>
                    </div>

                    <hr>

                    <div class="mb-3">
                        <h6 class="mb-3">Upload Bukti Pembayaran:</h6>
                        <input type="file" class="filepond" name="file" multiple data-allow-reorder="true"
                            data-max-file-size="3MB" data-max-files="5" />
                        <p class="text-primary small">**File format: .jpeg/.png, dan maksimum 1MB</p>
                    </div>
                </div>

                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-outline-danger" id="cancelPayment">
                        <i class="fas fa-times-circle me-2"></i> Batalkan Pembayaran
                    </button>
                    <button type="button" class="btn btn-success" id="confirmPayment">
                        <i class="fas fa-check-circle me-2"></i> Konfirmasi Sudah Bayar
                    </button>
                </div>
            </div>
        </div>
    </div>
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
        let countdownInterval;

        function startCountdown(deadline) {
            clearInterval(countdownInterval);
            const endTime = new Date(deadline).getTime();

            countdownInterval = setInterval(() => {
                const now = new Date().getTime();
                const diff = endTime - now;

                if (diff <= 0) {
                    clearInterval(countdownInterval);
                    document.getElementById('countdownTimer').textContent = 'Waktu pembayaran habis';
                    document.getElementById('invoiceStatus').textContent = 'Kedaluwarsa';
                    document.getElementById('invoiceStatus').className = 'badge bg-danger';
                    return;
                }

                const hours = Math.floor((diff / (1000 * 60 * 60)) % 24);
                const minutes = Math.floor((diff / (1000 * 60)) % 60);
                const seconds = Math.floor((diff / 1000) % 60);

                document.getElementById('countdownTimer').textContent =
                    `${hours.toString().padStart(2, '0')}:${minutes
                .toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;
            }, 1000);
        }

        // Example usage
        startCountdown("2025-10-09T23:59:00+07:00");
    </script>


    <script>
        // Register FilePond plugin for file type validation
        FilePond.registerPlugin(FilePondPluginFileValidateType);

        // Create FilePond instance with restrictions
        FilePond.create(document.querySelector('.filepond'), {
            maxFileSize: '5MB',
            acceptedFileTypes: [
                'application/pdf',
                'application/msword',
                'application/vnd.openxmlformats-officedocument.wordprocessingml.document'
            ],
            labelFileTypeNotAllowed: 'Hanya file PDF atau DOC/DOCX yang diperbolehkan',
            fileValidateTypeLabelExpectedTypes: 'File yang diperbolehkan: PDF, DOC, DOCX',
            labelIdle: 'Seret & jatuhkan file di sini atau <span class="filepond--label-action">Telusuri</span>',
        });
    </script>

    <script>
        function copyToClipboard(text) {
            const tempTextArea = document.createElement('textarea');
            const selectedValue = document.getElementById('pembayaranSelect').value;
            tempTextArea.value = text ?? selectedValue;

            // Append the textarea to the DOM (it doesn't need to be visible)
            document.body.appendChild(tempTextArea);

            // Select the text inside the textarea
            tempTextArea.select();
            tempTextArea.setSelectionRange(0, 99999); // For mobile devices

            // Execute the copy command
            document.execCommand('copy');

            // Clean up: remove the temporary textarea
            document.body.removeChild(tempTextArea);

            Toast.fire({
                icon: "success",
                title: "Nomor pembayaran berhasil disalin"
            });
        }
    </script>

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
