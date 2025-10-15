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
                            <h1 class="page-title mb-25">Translate Abstract/Dokumen</h1>
                            <div class="breadcrumb-list">
                                <ul class="breadcrumb">
                                    <li><a class="link-khusus" href="{{ url('/') }}">Beranda -</a></li>
                                    <li><a href="#">Translate Abstract/Dokumen</a></li>
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
                    <div class="col-lg-5 col-xl-4 order-2 order-lg-1">
                        <div class="courses-ingredients ms-0 mb-50" style="border: 2px dashed #16b3ac">
                            <h4 class="corses-title mb-30">Informasi & Petunjuk</h4>
                            <p class="mb-30">Layanan ini ditujukan bagi mahasiswa, dosen, dan peneliti Poltekkes Pontianak
                                yang memerlukan bantuan penerjemahan abstrak atau dokumen ilmiah dari Bahasa Indonesia ke
                                Bahasa Inggris, maupun sebaliknya, untuk keperluan publikasi, tugas akhir, atau kegiatan
                                akademik lainnya.</p>
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
                                                <li>Dokumen yang dapat diterjemahkan meliputi abstrak karya ilmiah, laporan
                                                    penelitian, artikel jurnal, atau dokumen akademik resmi.</li>
                                                <li>Proses penerjemahan dilakukan oleh tim penerjemah resmi yang memahami
                                                    istilah teknis di bidang kesehatan dan akademik.</li>
                                                <li>Hasil terjemahan akan dikirim dalam format digital (PDF/DOCX) sesuai
                                                    permintaan pemohon.</li>
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
                                                <li>Mengisi formulir permohonan layanan penerjemahan.</li>
                                                <li>Melampirkan file dokumen yang akan diterjemahkan (format Word/PDF).</li>
                                                <li>Menyertakan keterangan bahasa tujuan (Indonesia ↔ Inggris).</li>
                                                <li>Bukti pembayaran (jika berlaku).</li>
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
                                            <p>Estimasi waktu penyelesaian 2–5 hari kerja, tergantung panjang dan
                                                kompleksitas dokumen.</p>
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
                    <div class="col-lg-7 col-xl-8 order-1 order-lg-2">
                        <div class="comments-form-area mb-45 bg-white rounded-3 border-0 shadow-sm">
                            <h2>Form Translate</h2>
                            <form id="formSubmit" class="comments-form mb-30">
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
                                    <label for="translate" class="col-sm-3 col-form-label fw-semibold">Jenis
                                        Translate</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="jenis_translate"
                                                id="ijazah" value="ijazah" checked>
                                            <label class="form-check-label" for="ijazah">Abstract</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="jenis_translate"
                                                id="transkrip_nilai" value="transkrip_nilai">
                                            <label class="form-check-label" for="transkrip_nilai">Dokumen Lain</label>
                                        </div>
                                    </div>
                                </div>


                                <div class="row mb-30">
                                    <label for="comment" class="col-sm-3 col-form-label fw-semibold">File</label>
                                    <div class="col-sm-9">
                                        <input type="file" class="filepond" name="file" multiple
                                            data-allow-reorder="true" data-max-file-size="3MB" data-max-files="5" />
                                        <p class="text-primary small">**File format: .docx/.pdf, dan maksimum 5MB</p>
                                    </div>
                                </div>
                                <div class="text-end">
                                    <button class="theme_btn comment_btn btn-submit">Ajukan Permohonan</button>
                                </div>
                            </form>

                        </div>
                        <div class="comments-form-area mb-45 bg-white rounded-3 border-0 shadow-sm">
                            <h2>Riwayat Translate</h2>
                            <div class="parent-table w-100 overflow-auto">
                                <table id="tableHistory" class="fs-6">
                                    <thead>
                                        <tr>
                                            <th style="min-width: 50px;">
                                                No
                                            </th>
                                            <th style="min-width: 100px;">
                                                Jenis Translate
                                            </th>
                                            <th class="text-end" style="min-width: 100px;">
                                                File
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
                                                Abstract
                                            </td>
                                            <td>
                                                <ul>
                                                    <li class="text-end">
                                                        <a href="#" class="text-primary"
                                                            style="text-transform: unset">nama_file_abstract.pdf</a>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td class="text-end">
                                                <div class="badge bg-primary rounded-pill p-2">Sedang Proses</div>
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
                                    title: "Permohonan berhasil dikirim"
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
