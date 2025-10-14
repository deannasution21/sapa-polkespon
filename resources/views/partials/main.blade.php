<!DOCTYPE html>
<html class="no-js" lang="en">

<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>@yield('title')</title>
<meta name="keywords" content="online education, e-learning, coaching, education, teaching, learning">
<meta name="description"
    content="Zoomy is a e-learnibg HTML template for all kinds of education, coaching, online education website">
<meta name="viewport" content="width=device-width, initial-scale=1">

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

    @yield('js')


</body>

</html>
