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
                            <h1 class="page-title mb-25">Penyewaan Mobil</h1>
                            <div class="breadcrumb-list">
                                <ul class="breadcrumb">
                                    <li><a class="link-khusus" href="{{ url('/') }}">Beranda</a> - <a
                                            class="link-khusus" href="{{ url('/layanan/sarpras') }}">Sarpras</a> - </li>
                                    <li><a href="#">Penyewaan Mobil</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--page-title-area end-->
        @php
            $mobil = [
                [
                    'id' => 1,
                    'title' => 'Hiace 16 Seat',
                    'jenis' => 'non_akademik',
                    'icon' => url('/assets/img/course/hiace.png'),
                    'available' => false,
                ],
                [
                    'id' => 2,
                    'title' => 'Avanza MT 2020 #1',
                    'jenis' => 'non_akademik',
                    'icon' => url('/assets/img/course/avanza1.jpg'),
                    'available' => true,
                ],
                [
                    'id' => 3,
                    'title' => 'Avanza MT 2022 #2',
                    'jenis' => 'non_akademik',
                    'icon' => url('/assets/img/course/avanza2.png'),
                    'available' => true,
                ],
                [
                    'id' => 4,
                    'title' => 'Innova 2010',
                    'jenis' => 'non_akademik',
                    'icon' => url('/assets/img/course/innova.jpg'),
                    'available' => true,
                ],
            ];
        @endphp
        <!-- blog-details-area start -->
        <section class="blog-details-area pt-150 pb-105 pt-md-100 pb-md-55 pt-xs-100 pb-xs-55" style="background: #fbfcfd">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-xl-4 order-2 order-lg-1">
                        <div class="courses-ingredients ms-0 mb-50" style="border: 2px dashed #16b3ac">
                            <h4 class="corses-title mb-30">Informasi & Petunjuk</h4>
                            <p class="mb-30">Layanan ini diperuntukkan bagi mahasiswa Poltekkes Pontianak yang memiliki
                                kewajiban pembayaran denda atas keterlambatan pengembalian buku pinjaman dari perpustakaan.
                                Melalui sistem SAPA POLKESPON, pengguna dapat melakukan pengecekan dan pembayaran denda
                                dengan lebih mudah dan transparan.</p>
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
                                                <li>Layanan ini hanya berlaku bagi peminjam buku perpustakaan Poltekkes
                                                    Pontianak.</li>
                                                <li>Denda dikenakan berdasarkan jumlah hari keterlambatan sesuai ketentuan
                                                    yang berlaku.</li>
                                                <li>Pembayaran dapat dilakukan secara online melalui sistem SAPA POLKESPON
                                                    atau langsung di bagian administrasi perpustakaan.</li>
                                                <li>Setelah pembayaran diverifikasi, status keterlambatan akan otomatis
                                                    diperbarui pada sistem.</li>
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
                                                <li>Memiliki akun aktif di SAPA POLKESPON atau terdaftar sebagai mahasiswa
                                                    Poltekkes Pontianak.</li>
                                                <li>Mengetahui daftar buku yang terlambat dikembalikan.</li>
                                                <li>Melakukan pembayaran sesuai nominal denda yang tertera.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item mb-30">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree">
                                            Waktu Proses
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree" data-bs-parent="#accoedion-ex-two">
                                        <div class="accordion-body">
                                            <p>Verifikasi pembayaran dilakukan maksimal 1 hari kerja setelah transaksi
                                                diterima.</p>
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
                                                <li>Unit Perpustakaan Poltekkes Pontianak</li>
                                                <li>Email: perpustakaan@poltekkes-pontianak.ac.id</li>
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
                    <div class="col-lg-7 col-xl-8 order-1 order-lg-2">
                        <div class="comments-form-area mb-45 border-bot border-start-0 border-end-0 border-top-0 px-0 pt-0">
                            <div class="blog-details-box mb-45">
                                <ul class="blogs__meta mb-30 gap-3 border-bot pb-3">
                                    <li><span class="blog-author">Tanggal</span></li>
                                    <li><span><img src="http://127.0.0.1:8000/assets/img/icon/material-date-range.svg"
                                                alt="mate-date"> 25 September 2025</span></li>
                                </ul>
                            </div>
                            <div class="row online__course__cat mt-30">
                                @foreach ($mobil as $key => $val)
                                    @php
                                        // Hitung delay dinamis: mulai dari 0.1s dan naik 0.1 tiap item
                                        $delay = number_format(0.1 * ($key + 1), 1);
                                    @endphp
                                    <div class="col-xl-4 col-lg-6 col-md-6 grid-item cat-{{ $val['jenis'] }}">
                                        <div>
                                            <div class="z-gallery mb-30 shadow-sm">
                                                <div class="z-gallery__thumb mb-20" style="height: 150px;">
                                                    <div class="feedback-tag @if (!$val['available']) bg-danger @endif"
                                                        style="font-size: 12px; z-index: 1;">
                                                        @if (!$val['available'])
                                                            OFF
                                                        @else
                                                            Tersedia
                                                        @endif
                                                    </div>
                                                    <img class="h-100 w-100"
                                                        @if (!$val['available']) style="filter: grayscale(1); object-fit: cover" @else style="object-fit: cover" @endif
                                                        src="{{ $val['icon'] }}" alt="">
                                                </div>
                                                <div class="z-gallery__content pb-3">
                                                    <h4 class="sub-title mb-25 fs-6">{{ $val['title'] }}</h4>
                                                    <div class="z-blogs__meta d-sm-flex justify-content-between pt-20">
                                                        <span class="text-primary" style="font-weight: 600">Rp
                                                            500.000</span>
                                                        <button type="button"
                                                            class="btn btn-sm {{ !$val['available'] ? 'btn-secondary' : 'btn-primary' }}"
                                                            {{ !$val['available'] ? 'disabled' : '' }}
                                                            onclick="showModalSewa({{ $val['id'] }})">
                                                            <i class="fas fa-shopping-cart"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="comments-form-area mb-45 bg-white rounded-3 border-0 shadow-sm">
                            <h2>Riwayat Penyewaan</h2>
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
                                                Jenis Mobil
                                            </th>
                                            <th class="text-end" style="min-width: 100px;">
                                                Biaya Sewa
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
                                                <ul class="list-disc">
                                                    <li class="mb-0">Hiace 16 Seat</li>
                                                    <li class="mb-0">Avanza MT 2020 #1</li>
                                                </ul>
                                            </td>
                                            <td class="text-end">
                                                Rp 1.155.421,-
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
                                                <div class="badge bg-warning rounded-pill p-2">Selesai</div>
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
    <div class="modal fade" id="modalSewa" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="modalSewaLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content shadow-lg border-0">
                <div class="modal-header" style="background: #16b3ac">
                    <h5 class="modal-title text-white" id="modalSewaLabel">
                        <i class="fas fa-car-alt me-2"></i> Sewa Mobil
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <form id="formSewaMobil">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <h6 class="mb-1">Nomor Pemesanan:</h6>
                                <p class="fw-bold mb-2" id="bookingNumber">SEWA-20251014-0001</p>
                            </div>
                            <div class="col-md-6 text-md-end">
                                <h6 class="mb-1">Status Pemesanan:</h6>
                                <span class="badge bg-warning text-dark" id="bookingStatus">
                                    Menunggu Konfirmasi
                                </span>
                            </div>
                        </div>

                        <hr>

                        <div class="mb-3 w-100">
                            <h6 class="mb-1">Nama Mobil:</h6>
                            <select class="form-select" id="namaMobil" name="namaMobil" required>
                                <option value="">-- Pilih Mobil --</option>
                                @foreach ($mobil as $key => $val)
                                    <option value="{{ $val['id'] }}">{{ $val['title'] }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <h6 class="mb-1">Tanggal Penyewaan Awal:</h6>
                                <input type="date" class="form-control" id="tanggalAwal" name="tanggalAwal" required>
                            </div>
                            <div class="col-md-6">
                                <h6 class="mb-1">Tanggal Penyewaan Akhir:</h6>
                                <input type="date" class="form-control" id="tanggalAkhir" name="tanggalAkhir"
                                    required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <h6 class="mb-1">Tujuan Perjalanan:</h6>
                            <textarea class="form-control" id="tujuan" name="tujuan" rows="2"
                                placeholder="Masukkan tujuan perjalanan..." required></textarea>
                        </div>

                        <div class="mb-3">
                            <h6 class="mb-1">Estimasi Biaya:</h6>
                            <h4 class="fw-bold text-success mb-0" id="totalHarga">Rp 500.000/Hari</h4>
                            <p class="text-muted small">*Biaya akan disesuaikan berdasarkan jarak dan durasi penyewaan</p>
                        </div>
                    </form>
                </div>


                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-outline-danger" id="cancel" data-bs-dismiss="modal">
                        <i class="fas fa-times-circle me-2"></i> Batal
                    </button>
                    <button type="button" class="btn btn-success" id="confirm" onclick="masukkanKeranjang()">
                        <i class="fas fa-check-circle me-2"></i> Masukkan Keranjang
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
        function showModalSewa(id) {
            // Auto select mobil
            const select = document.getElementById('namaMobil');
            select.value = id; // select the matching option

            // Show the modal
            const modal = new bootstrap.Modal(document.getElementById('modalSewa'));
            modal.show();
        }
    </script>

    <script>
        function masukkanKeranjang() {
            const modalEl = document.getElementById('modalSewa');
            const modal = bootstrap.Modal.getInstance(modalEl);
            modal.hide();

            Toast.fire({
                icon: "success",
                title: "Berhasil dimasukkan keranjang"
            }).then(() => {})
        }
    </script>


    <script>
        $(document).ready(function() {
            $('select').niceSelect('destroy');

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
