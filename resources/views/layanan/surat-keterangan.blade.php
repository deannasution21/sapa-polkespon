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

        .form-select {
            font-size: 14px;
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
                            <h1 class="page-title mb-25">Surat Keterangan</h1>
                            <div class="breadcrumb-list">
                                <ul class="breadcrumb">
                                    <li><a class="link-khusus" href="{{ url('/') }}">Beranda</a> - <a
                                            class="link-khusus"
                                            href="{{ url('/layanan/permohonan-dokumen-akademik') }}">Permohonan Dokumen
                                            Akademik</a> - </li>
                                    <li><a href="#">Surat Keterangan</a></li>
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
                    <div class="col-lg-5 col-xl-4">
                        <div class="courses-ingredients ms-0 mb-50" style="border: 2px dashed #16b3ac">
                            <h4 class="corses-title mb-30">Informasi & Petunjuk</h4>
                            <p class="mb-30">Layanan ini disediakan bagi mahasiswa maupun alumni Poltekkes Pontianak yang
                                memerlukan surat keterangan resmi dari institusi, seperti surat keterangan aktif kuliah,
                                surat keterangan lulus, atau surat keterangan lainnya untuk keperluan administrasi.</p>
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
                                                <li>Surat keterangan diterbitkan oleh bagian akademik setelah data pemohon
                                                    diverifikasi.</li>
                                                <li>Jenis surat yang dapat diajukan meliputi:</li>
                                                <ol class="">
                                                    <li>Surat Keterangan Aktif Kuliah</li>
                                                    <li>Surat Keterangan Lulus</li>
                                                    <li>Surat Keterangan Belum Menerima Ijazah</li>
                                                    <li>Surat Keterangan Lain sesuai kebutuhan
                                                        administrasi resmi</li>
                                                </ol>
                                                <li>Pemohon dapat mengajukan secara langsung (offline) atau melalui layanan
                                                    online SAPA POLKESPON.</li>
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
                                                <li>Mengisi formulir pengajuan surat keterangan.</li>
                                                <li>Melampirkan identitas diri (KTM atau KTP).</li>
                                                <li>Dokumen pendukung sesuai jenis surat yang dimohonkan.</li>
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
                                            <p>Estimasi penyelesaian 1–2 hari kerja setelah berkas dinyatakan lengkap dan
                                                diverifikasi.</p>
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
                                                <li>Bagian Akademik Poltekkes Pontianak</li>
                                                <li>Email: akademik@poltekkes-pontianak.ac.id</li>
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
                        <div class="comments-form-area mb-45">
                            <h2>Form Surat Keterangan</h2>
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
                                    <label for="program_studi" class="col-sm-3 col-form-label fw-semibold">Program
                                        Studi</label>
                                    <div class="col-sm-9">
                                        <select class="form-control programStudiSelect me-0" id="programStudiSelect"
                                            name="program_studi" placeholder="Plih Program Studi" required>
                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-3 align-items-center">
                                    <label for="semester" class="col-sm-3 col-form-label fw-semibold">Semester</label>
                                    <div class="col-sm-9">
                                        <select class="form-control semesterSelect me-0" id="semesterSelect"
                                            name="semester" placeholder="Plih Semester" required>
                                        </select>
                                    </div>
                                </div>



                                <div class="row mb-30 align-items-start">
                                    <label for="jenis_surat" class="col-sm-3 col-form-label fw-semibold">
                                        Jenis Surat Keterangan
                                    </label>
                                    <div class="col-sm-9">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered align-middle" id="tableSurat"
                                                style="min-width: 400px;">
                                                <thead>
                                                    <tr>
                                                        <th style="width: 60px;">No</th>
                                                        <th>Jenis Surat</th>
                                                        <th class="text-end" style="width: 120px;">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="small">
                                                    <tr>
                                                        <td>1.</td>
                                                        <td>
                                                            <select class="form-select w-100">
                                                                <option value="">Pilih Jenis Surat...</option>
                                                                <option value="kuliah">Surat Keterangan Kuliah</option>
                                                                <option value="penelitian">Surat Izin Penelitian</option>
                                                                <option value="pkl">Surat Izin PKL</option>
                                                            </select>
                                                        </td>
                                                        <td class="text-end">
                                                            <button type="button" class="btn btn-sm btn-danger" disabled>
                                                                <i class="fas fa-trash me-2"></i> Hapus
                                                            </button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="text-end">
                                            <button type="button" class="btn btn-sm btn-primary"
                                                onclick="tambahSurat()">
                                                <i class="fas fa-plus me-2"></i> Tambah Surat
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="text-end">
                                    <button class="theme_btn comment_btn btn-submit">Ajukan Permohonan</button>
                                </div>
                            </form>

                        </div>
                        <div class="comments-form-area mb-45">
                            <h2>History Surat Keterangan</h2>
                            <div class="parent-table w-100 overflow-auto">
                                <table id="tableHistory" class="fs-6">
                                    <thead>
                                        <tr>
                                            <th style="min-width: 50px;">
                                                No
                                            </th>
                                            <th style="min-width: 100px;">
                                                Jenis Surat
                                            </th>
                                            <th style="min-width: 100px;">
                                                Tanggal
                                            </th>
                                            <th class="text-end" style="min-width: 100px;">
                                                Unduh Surat
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
                                                <ul>
                                                    <li>SK Aktif Kuliah</li>
                                                    <li>SK Sehat</li>
                                                </ul>
                                            </td>
                                            <td>
                                                20 September 2025
                                            </td>
                                            <td>
                                                <ul>
                                                    <li class="text-end">
                                                        <a href="#" class="text-primary"
                                                            style="text-transform: unset">nama_sk_aktif.pdf</a>
                                                    </li>
                                                    <li class="text-end">
                                                        <a href="#" class="text-primary"
                                                            style="text-transform: unset">nama_sk_sehat.pdf</a>
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

    <!-- Select2 -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
        // Dummy data for Program Studi
        async function fetchData() {
            return [{
                    group: "D3",
                    items: [{
                            id: "d3_gizi",
                            text: "Gizi"
                        },
                        {
                            id: "d3_gigi",
                            text: "Gigi"
                        },
                        {
                            id: "d3_bidan",
                            text: "Bidan"
                        },
                        {
                            id: "d3_kesling",
                            text: "Kesehatan Lingkungan"
                        },
                        {
                            id: "d3_tlm",
                            text: "Teknologi Laboratorium Medis"
                        },
                        {
                            id: "d3_keperawatan",
                            text: "Keperawatan"
                        }
                    ]
                },
                {
                    group: "D4",
                    items: [{
                            id: "d4_gizi",
                            text: "Gizi"
                        },
                        {
                            id: "d4_k3",
                            text: "Kesehatan dan Keselamatan Kerja (K3)"
                        },
                        {
                            id: "d4_bidan",
                            text: "Bidan"
                        },
                        {
                            id: "d4_kesling",
                            text: "Kesehatan Lingkungan"
                        },
                        {
                            id: "d4_tlm",
                            text: "Teknologi Laboratorium Medis"
                        },
                        {
                            id: "d4_keperawatan",
                            text: "Keperawatan"
                        }
                    ]
                }
            ];
        }

        const selectProgram = document.getElementById("programStudiSelect");
        const selectSemester = document.getElementById("semesterSelect");

        async function initializeSelect2() {
            const groupedOptions = await fetchData();
            selectProgram.innerHTML = "";

            groupedOptions.forEach(group => {
                const optgroup = document.createElement("optgroup");
                optgroup.label = group.group;

                group.items.forEach(item => {
                    const option = new Option(item.text, item.id);
                    option.dataset.group = group.group;
                    optgroup.append(option);
                });

                selectProgram.append(optgroup);
            });

            // Initialize Select2 for Program Studi
            $(selectProgram).select2({
                placeholder: "Pilih Program Studi...",
                allowClear: true,
                width: "100%",
                templateSelection: function(data) {
                    if (!data.id) return data.text;
                    const el = data.element;
                    const group = el?.dataset.group || "";
                    return `${group} - ${data.text}`;
                },
            });

            // Initialize Select2 for Semester
            for (let i = 1; i <= 8; i++) {
                const option = new Option(`Semester ${i}`, i);
                selectSemester.append(option);
            }

            $(selectSemester).select2({
                placeholder: "Pilih Semester...",
                allowClear: true,
                width: "100%",
            });
        }

        // Run initialization
        initializeSelect2();
    </script>

    <script>
        function tambahSurat() {
            const table = document.getElementById("tableSurat").querySelector("tbody");
            const rowCount = table.rows.length;
            const newRow = document.createElement("tr");

            newRow.innerHTML = `
            <td>${rowCount + 1}.</td>
            <td>
                <select class="form-select w-100">
                    <option value="">Pilih Jenis Surat...</option>
                    <option value="kuliah">Surat Keterangan Kuliah</option>
                    <option value="penelitian">Surat Izin Penelitian</option>
                    <option value="pkl">Surat Izin PKL</option>
                </select>
            </td>
            <td class="text-end">
                <button type="button" class="btn btn-sm btn-danger" onclick="hapusSurat(this)">
                    <i class="fas fa-trash me-2"></i> Hapus
                </button>
            </td>
        `;

            table.appendChild(newRow);
            updateNomor();
        }

        function hapusSurat(button) {
            const table = document.getElementById("tableSurat").querySelector("tbody");
            const rowCount = table.rows.length;

            if (rowCount <= 1) {
                alert("Minimal satu surat harus ada!");
                return;
            }

            // Remove the selected row
            button.closest("tr").remove();

            // Recalculate numbering
            updateNomor();
        }

        function updateNomor() {
            const rows = document.querySelectorAll("#tableSurat tbody tr");
            rows.forEach((row, index) => {
                row.querySelector("td:first-child").textContent = `${index + 1}.`;
                const btn = row.querySelector("button.btn-danger");

                // Disable delete button for first row
                btn.disabled = index === 0;
            });
        }
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
