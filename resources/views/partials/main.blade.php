<!DOCTYPE html>
<html class="no-js" lang="en">

<!-- Charset and viewport -->
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Primary Meta Tags -->
<title>@yield('title', 'SAPA POLKESPON - sapapolkespon.poltekkes-pontianak.ac.id')</title>
<meta name="title" content="SAPA POLKESPON - sapapolkespon.poltekkes-pontianak.ac.id">
<meta name="description"
    content="Portal layanan terpadu Poltekkes Pontianak untuk mengurus kebutuhan akademik dan non-akademik secara online, mudah, cepat, dan efisien.">

<!-- Canonical URL -->
<link rel="canonical" href="https://sapapolkespon.poltekkes-pontianak.ac.id/" />

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://sapapolkespon.poltekkes-pontianak.ac.id/">
<meta property="og:title" content="SAPA POLKESPON - sapapolkespon.poltekkes-pontianak.ac.id">
<meta property="og:description"
    content="Portal layanan terpadu Poltekkes Pontianak untuk mengurus kebutuhan akademik dan non-akademik secara online, mudah, cepat, dan efisien.">
<meta property="og:image" content="https://sapapolkespon.poltekkes-pontianak.ac.id/assets/img/logo/logo-ipg2.jpeg">
<!-- Change from favicon -->

<!-- Twitter -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:url" content="https://sapapolkespon.poltekkes-pontianak.ac.id/">
<meta name="twitter:title" content="SAPA POLKESPON - sapapolkespon.poltekkes-pontianak.ac.id">
<meta name="twitter:description"
    content="Portal layanan terpadu Poltekkes Pontianak untuk mengurus kebutuhan akademik dan non-akademik secara online, mudah, cepat, dan efisien.">
<meta name="twitter:image" content="https://sapapolkespon.poltekkes-pontianak.ac.id/assets/img/logo/logo-ipg2.jpeg">
<!-- Change from favicon -->

<!-- Favicon & Icons -->
<link rel="icon" type="image/png"
    href="https://sapapolkespon.poltekkes-pontianak.ac.id/assets/img/logo/logo-ipg2.jpeg">

@include('partials.icon')
@include('partials/css')

@yield('css')

<style>
    header .navbar-nav .nav-item:first-child .nav-link::before {
        display: none
    }

    .navbar-nav .nav-item:hover>.nav-link,
    .navbar-nav .nav-item.active .nav-link,
    .fot-list a:hover {
        color: #16b3ac;
    }

    .side-mobile-menu ul li a[aria-expanded="true"],
    .side-mobile-menu ul li a:hover {
        color: #CDDC2C
    }

    .swal2-confirm {
        background: #16b3ac
    }

    .swal2-confirm:hover {
        background: #36bfb4
    }

    .whatsapp-float {
        position: fixed;
        bottom: 75px;
        right: 20px;
        background-color: #25d366;
        color: white;
        border-radius: 50%;
        width: 60px;
        height: 60px;
        text-align: center;
        font-size: 30px;
        box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.3);
        z-index: 1000;
        transition: all 0.3s ease;
        animation: pulse 2s infinite;
    }

    .whatsapp-float:hover {
        background-color: #1ebe5d;
        transform: scale(1.15);
    }

    .whatsapp-icon {
        margin-top: 14px;
    }

    .whatsapp-tooltip {
        position: fixed;
        bottom: 145px;
        right: 25px;
        background-color: #25d366;
        color: white;
        padding: 8px 12px;
        border-radius: 8px;
        font-size: 14px;
        box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.2);
        white-space: nowrap;
        opacity: 0;
        transform: translateY(10px);
        transition: all 0.3s ease;
        pointer-events: none;
    }

    .whatsapp-float:hover+.whatsapp-tooltip {
        opacity: 1;
        transform: translateY(0);
    }

    @keyframes pulse {
        0% {
            box-shadow: 0 0 0 0 rgba(37, 211, 102, 0.6);
        }

        70% {
            box-shadow: 0 0 0 15px rgba(37, 211, 102, 0);
        }

        100% {
            box-shadow: 0 0 0 0 rgba(37, 211, 102, 0);
        }
    }

    @keyframes bounce {

        0%,
        20%,
        50%,
        80%,
        100% {
            transform: translateY(0);
        }

        40% {
            transform: translateY(-8px);
        }

        60% {
            transform: translateY(-4px);
        }
    }
</style>

</head>

<body>
    <!-- Floating WhatsApp Icon -->
    <a href="https://api.whatsapp.com/send?phone=6281234567890&text=Halo%20SAPA%20POLKESPON,%20saya%20ingin%20bertanya..."
        class="whatsapp-float" target="_blank" aria-label="Chat via WhatsApp">
        <i class="fas fa-headphones-alt whatsapp-icon text-white"></i>
    </a>

    <div class="whatsapp-tooltip">Customer Service</div>

    @yield('loader')

    @include('partials.slidebar')

    @yield('main')

    @include('partials.footer')
    @include('partials.js')

    <script src="{{ asset('/') }}assets/js/sweetalert2@11.js"></script>
    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: "top-end",
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.onmouseenter = Swal.stopTimer;
                toast.onmouseleave = Swal.resumeTimer;
            },
        });
    </script>

    <script>
        function signOut() {
            Toast.fire({
                icon: "success",
                title: "Anda berhasil keluar"
            }).then(() => {
                window.location.href = "/masuk"
            })
        }

        function layananMaintenance() {
            Swal.fire({
                customClass: {
                    title: 'fs-3', // Larger title
                    htmlContainer: 'fs-6', // For the text/body
                },
                title: 'Perbaikan Layanan',
                html: `<p>Mohon maaf layanan ini sedang dalam tahap perbaikan/pengembangan</p>`,
                icon: 'info',
                allowOutsideClick: false,
                allowEscapeKey: false,
                // showCancelButton: true,
                // confirmButtonText: "Daftar",
                // cancelButtonText: "Batal"
            })
        }
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const currentPath = window.location.pathname; // e.g. /layanan/translate or /layanan/toefl-itp
            const element = document.getElementById("cartBtn");

            // If URL starts with /layanan/
            if (currentPath.startsWith("/layanan/sarpras/")) {
                element.hidden = false;
            }
        });
    </script>

    @yield('js')


</body>

</html>
