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

</head>

<body>

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

    @yield('js')


</body>

</html>
