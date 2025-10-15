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

    <!-- Select2 -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

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

        .select2-container .select2-selection--single {
            height: unset;
            padding: 17px;
        }

        .select2-container--default .select2-selection--single {
            border-radius: 10px;
        }

        .select2-results__option {
            color: #111;
        }

        .select2-container--default .select2-selection--single .select2-selection__arrow {
            height: 61px;
            right: 17px;
        }

        .select2-container--default .select2-selection--single .select2-selection__clear {
            display: flex;
            align-items: center;
            top: -5px;
        }

        hr {
            border-bottom: 2px solid #16b3ac
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
                            <h1 class="page-title mb-25">Gelombang #3</h1>
                            <div class="breadcrumb-list">
                                <ul class="breadcrumb">
                                    <li><a class="link-khusus" href="{{ url('/') }}">Beranda</a> - <a
                                            class="link-khusus" href="{{ url('/layanan/toefl-itp') }}">TOEFL ITP</a> - </li>
                                    <li><a href="#">Gelombang #3</a></li>
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
                    <div class="col-lg-5 col-xl-4">
                        <div class="courses-ingredients ms-0 mb-50" style="border: 2px dashed #16b3ac">
                            <h4 class="corses-title mb-30">Informasi & Petunjuk</h4>
                            <p class="mb-30">Layanan ini ditujukan bagi mahasiswa, dosen, dan tenaga kependidikan Poltekkes
                                Pontianak yang ingin mengikuti kegiatan Seminar dan Tes TOEFL ITP sebagai salah satu syarat
                                akademik, kelulusan, atau pengembangan kemampuan bahasa Inggris. Melalui SAPA POLKESPON,
                                pendaftaran seminar TOEFL ITP dapat dilakukan secara mudah dan terintegrasi.</p>
                            <div class="accordion accordion-two" id="accoedion-ex-two">
                                <div class="accordion-item mb-30">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Ketentuan Umum
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOne" data-bs-parent="#accoedion-ex-two">
                                        <div class="accordion-body">
                                            <ul class="list-disc ms-4">
                                                <li>Peserta wajib mendaftar melalui sistem SAPA POLKESPON sesuai jadwal yang
                                                    ditentukan.</li>
                                                <li>Kuota peserta seminar dan tes bersifat terbatas per periode pelaksanaan.
                                                </li>
                                                <li>Peserta akan mendapatkan sertifikat resmi TOEFL ITP dari lembaga
                                                    penyelenggara yang bekerja sama dengan Poltekkes Pontianak.</li>
                                                <li>Pembayaran biaya seminar dan tes dilakukan melalui kanal pembayaran yang
                                                    telah disediakan.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item mb-30">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Persyaratan
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                        data-bs-parent="#accoedion-ex-two">
                                        <div class="accordion-body">
                                            <ul class="list-disc ms-4">
                                                <li>Mengisi formulir pendaftaran seminar TOEFL ITP secara online.</li>
                                                <li>Melampirkan identitas diri (KTM atau KTP).</li>
                                                <li>Melakukan pembayaran biaya pendaftaran sesuai ketentuan.</li>
                                                <li>Hadir tepat waktu sesuai jadwal yang telah ditetapkan.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item mb-30">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree">
                                            Waktu Pelaksanaan
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree" data-bs-parent="#accoedion-ex-two">
                                        <div class="accordion-body">
                                            <p>Seminar dan tes TOEFL ITP dilaksanakan secara berkala setiap semester, dengan
                                                jadwal diumumkan melalui SAPA POLKESPON.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item mb-30">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseFour" aria-expanded="false"
                                            aria-controls="collapseFour">
                                            Kontak Layanan
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                        data-bs-parent="#accoedion-ex-two">
                                        <div class="accordion-body">
                                            <ul class="list-disc ms-4">
                                                <li>Unit Bahasa Poltekkes Pontianak</li>
                                                <li>Email: bahasa@poltekkes-pontianak.ac.id</li>
                                                <li>Jam pelayanan: Senin–Jumat, 08.00–15.00 WIB</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-details-box">
                                <ul class="blogs__meta mb-3 justify-content-between">
                                    <li><span class="blog-author">Update terakhir</span></li>
                                    <li><span><img src="{{ URL::asset('assets/img/icon/material-date-range.svg') }}"
                                                alt="mate-date"> April 21 , 2021</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-xl-8">
                        <div class="comments-form-area mb-45 bg-white rounded-3 border-0 shadow-sm">
                            <h2>Form TOEFL ITP</h2>
                            <form id="formSubmit" class="comments-form mb-30">
                                <div class="row mb-3 align-items-center">
                                    <label for="gelombang" class="col-sm-3 col-form-label fw-semibold">Gelombang</label>
                                    <div class="col-sm-9">
                                        <input type="text" id="gelombang" placeholder="Gelombang" disabled
                                            value="Gelombang #3">
                                    </div>
                                </div>

                                <div class="row mb-3 align-items-center">
                                    <label for="tanggal" class="col-sm-3 col-form-label fw-semibold">Tanggal
                                        Pelaksanaan</label>
                                    <div class="col-sm-9">
                                        <input type="text" id="tanggal" placeholder="Tanggal" disabled
                                            value="25 September 2025, 10:00 WIB">
                                    </div>
                                </div>

                                <div class="row mb-3 align-items-center">
                                    <label for="nama" class="col-sm-3 col-form-label fw-semibold">Nama Lengkap</label>
                                    <div class="col-sm-9">
                                        <input type="text" id="nama" placeholder="Nama Anda" disabled>
                                    </div>
                                </div>

                                <div class="row mb-3 align-items-center">
                                    <label for="nim" class="col-sm-3 col-form-label fw-semibold">NIM</label>
                                    <div class="col-sm-9">
                                        <input type="text" id="nim" placeholder="Nomor Induk Mahasiswa"
                                            disabled>
                                    </div>
                                </div>

                                <div class="row mb-3 align-items-center">
                                    <label for="hp" class="col-sm-3 col-form-label fw-semibold">No HP/WA</label>
                                    <div class="col-sm-9">
                                        <input type="text" id="hp" placeholder="Nomor HP/WA" disabled>
                                    </div>
                                </div>

                                <div class="row mb-3 align-items-center">
                                    <label for="denda" class="col-sm-3 col-form-label fw-semibold">Biaya Pendaftaran
                                        (Rp)</label>
                                    <div class="col-sm-9">
                                        <input type="text" id="denda" placeholder="0" value="75000" disabled>
                                    </div>
                                </div>

                                <div class="row mb-30 align-items-start">
                                    <label for="pembayaran" class="col-sm-3 col-form-label fw-semibold">Metode
                                        Pembayaran</label>
                                    <div class="col-sm-9">
                                        <div class="d-flex gap-2">
                                            <select class="form-control pembayaranSelect me-0" id="pembayaranSelect"
                                                name="pembayaran" placeholder="Plih Pembayaran" required>
                                            </select>
                                            <div class="text-end">
                                                <button type="button" class="btn btn-sm btn-primary"
                                                    onclick="copyToClipboard()">
                                                    <i class="fas fa-copy"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <input type="text" class="mt-3" placeholder="AN. POLTEKKES PONTIANAK"
                                            disabled>
                                    </div>
                                </div>

                                <div class="text-end">
                                    <button class="theme_btn comment_btn btn-submit">Ajukan Pendaftaran</button>
                                </div>
                            </form>

                        </div>
                        <div class="comments-form-area mb-45 bg-white rounded-3 border-0 shadow-sm">
                            <h2>Riwayat Pendaftaran</h2>
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
                                                Gelombang
                                            </th>
                                            <th class="text-end" style="min-width: 100px;">
                                                Biaya Pendaftaran
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
                                                TOEFL ITP Gelombang #3
                                            </td>
                                            <td class="text-end">
                                                Rp 75.421,-
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
                                                <a href="#" class="text-primary"
                                                    style="text-transform: unset">-</a>
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

    <!-- Select2 -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
        // Dummy data for Program Studi
        async function fetchData() {
            return [{
                    group: "Bank Transfer",
                    items: [{
                            id: "bni",
                            text: "BNI - 123456"
                        },
                        {
                            id: "bri",
                            text: "BRI - 123456"
                        },
                        {
                            id: "bca",
                            text: "BCA - 123456"
                        },
                        {
                            id: "mandiri",
                            text: "MANDIRI - 123456"
                        }
                    ]
                },
                {
                    group: "Virtual Account",
                    items: [{
                            id: "va_bni",
                            text: "BNI - 123456"
                        },
                        {
                            id: "va_bri",
                            text: "BRI - 123456"
                        },
                        {
                            id: "va_bca",
                            text: "BCA - 123456"
                        },
                        {
                            id: "va_mandiri",
                            text: "MANDIRI - 123456"
                        }
                    ]
                }
            ];
        }

        const selectPembayaran = document.getElementById("pembayaranSelect");

        async function initializeSelect2() {
            const groupedOptions = await fetchData();
            selectPembayaran.innerHTML = "";

            groupedOptions.forEach(group => {
                const optgroup = document.createElement("optgroup");
                optgroup.label = group.group;

                group.items.forEach(item => {
                    const option = new Option(item.text, item.id);
                    option.dataset.group = group.group;
                    optgroup.append(option);
                });

                selectPembayaran.append(optgroup);
            });

            // Initialize Select2 for Pembayaran
            $(selectPembayaran).select2({
                placeholder: "Pilih Pembayaran...",
                allowClear: true,
                width: "100%",
                templateSelection: function(data) {
                    if (!data.id) return data.text;
                    const el = data.element;
                    const group = el?.dataset.group || "";
                    return `${group} - ${data.text}`;
                },
            });
        }

        // Run initialization
        initializeSelect2();
    </script>

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
        const moneyInput = document.getElementById('denda');

        moneyInput.addEventListener('input', function(e) {
            let rawValue = e.target.value;

            // Remove non-numeric and dot
            rawValue = rawValue.replace(/[^0-9.]/g, '');

            // Remove leading zeros
            rawValue = rawValue.replace(/^0+(?=\d)/, '');

            // Split integer and decimal
            const parts = rawValue.split('.');
            const intPart = parts[0];
            const decimalPart = parts[1] ? parts[1].slice(0, 2) : '';

            // Add comma formatting
            const formattedInt = intPart.replace(/\B(?=(\d{3})+(?!\d))/g, ',');

            // Final value
            const finalValue = decimalPart ? `${formattedInt}.${decimalPart}` : formattedInt;
            e.target.value = finalValue || '0';

            // Convert to number for checking
            const numeric = parseFloat(intPart + (decimalPart ? '.' + decimalPart : ''));
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const form = document.getElementById('formSubmit');
            // const username = form.querySelector('input[name="username"]');
            // const order = form.querySelector('input[name="nominal"]');
            // const method = form.querySelector('select[name="payment_method"]');

            form.addEventListener('submit', (e) => {
                e.preventDefault()
                const btn1 = document.querySelector('.btn-submit')
                btn1.disabled = true
                btn1.textContent = 'Memproses...'

                Swal.fire({
                    customClass: {
                        title: 'fs-3', // Larger title
                        htmlContainer: 'fs-6', // For the text/body
                    },
                    title: 'Konfirmasi Permohonan',
                    html: `<p>Anda sudah yakin dengan data ini?</p>`,
                    icon: 'question',
                    allowOutsideClick: false,
                    allowEscapeKey: false,
                    showCancelButton: true,
                    confirmButtonText: "Proses",
                    cancelButtonText: "Batal"
                }).then((lanjutkan) => {
                    if (lanjutkan.isConfirmed) {
                        Swal.fire({
                            customClass: {
                                title: 'fs-3', // Larger title
                                htmlContainer: 'fs-6', // For the text/body
                            },
                            title: 'Memproses...',
                            text: 'Mohon menunggu sebentar',
                            allowOutsideClick: false,
                            allowEscapeKey: false,
                            didOpen: async () => {
                                Swal.showLoading(); // Show a loading indicator

                                Toast.fire({
                                    icon: "success",
                                    title: "Invoice berhasi dibuat"
                                });
                            }
                        })
                    } else {
                        btn1.disabled = false
                        btn1.textContent = 'Ajukan Permohonan'
                    }
                })
            });
        });
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
