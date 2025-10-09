@extends('partials.main')

@section('css')
    <style>
        .role-selection {
            display: flex;
            gap: 20px;
            margin-top: 10px;
        }

        .role-card {
            flex: 1;
            /* makes both same width */
            border: 2px solid #e0e0e0;
            border-radius: 10px;
            text-align: center;
            padding: 20px;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
            background-color: #fff;
        }

        .role-card:hover {
            border-color: #00bcd4;
        }

        .role-card input[type="radio"] {
            position: absolute;
            top: 10px;
            right: 10px;
            accent-color: #00bcd4;
            width: 18px;
            height: 18px;
            cursor: pointer;
        }

        .role-card img {
            width: 80px;
            height: 80px;
            object-fit: contain;
            margin-bottom: 10px;
        }

        .role-card.active {
            border-color: #00bcd4;
            box-shadow: 0 0 5px rgba(0, 188, 212, 0.5);
        }

        .role-card p {
            margin: 0;
            font-weight: 600;
            color: #007c91;
        }
    </style>
@endsection

@section('main')
    <header>
        <div id="theme-menu-two" class="main-header-area main-head-three pl-100 pr-100 pt-20 pb-15">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-xl-2">
                        <div class="logo"><a href="index"><img
                                    src="{{ URL::asset('assets/img/logo/header_logo_one.svg') }}" alt=""></a></div>
                    </div>
                    <div class="col-xl-7">
                        <nav class="main-menu navbar navbar-expand-lg justify-content-center">
                            <div class="nav-container">
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav">
                                        <li class="nav-item dropdown mega-menu">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                All Categories
                                            </a>
                                            <ul class="dropdown-menu submenu mega-menu__sub-menu-box"
                                                aria-labelledby="navbarDropdown">
                                                <li><a href="index"><span><img
                                                                src="{{ URL::asset('assets/img/icon/icon7.svg') }}"
                                                                alt=""></span> Business</a></li>
                                                <li><a href="index-2"><span><img
                                                                src="{{ URL::asset('assets/img/icon/icon8.svg') }}"
                                                                alt=""></span> Technology</a></li>
                                                <li><a href="index"><span><img
                                                                src="{{ URL::asset('assets/img/icon/icon9.svg') }}"
                                                                alt=""></span> Development</a></li>
                                                <li><a href="index-2"><span><img
                                                                src="{{ URL::asset('assets/img/icon/icon10.svg') }}"
                                                                alt=""></span> Photography</a></li>
                                                <li><a href="index"><span><img
                                                                src="{{ URL::asset('assets/img/icon/icon11.svg') }}"
                                                                alt=""></span> Digital Marketing</a></li>
                                                <li><a href="index-2"><span><img
                                                                src="{{ URL::asset('assets/img/icon/icon12.svg') }}"
                                                                alt=""></span> Programming</a></li>
                                                <li><a href="index"><span><img
                                                                src="{{ URL::asset('assets/img/icon/icon14.svg') }}"
                                                                alt=""></span> Videograpgy</a></li>
                                                <li><a href="index-2"><span><img
                                                                src="{{ URL::asset('assets/img/icon/icon13.svg') }}"
                                                                alt=""></span> Illustration</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2"
                                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Home
                                            </a>
                                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown2">
                                                <li><a class="dropdown-item" href="index">Home Style 1</a></li>
                                                <li><a class="dropdown-item" href="index-2">Home Style 2</a></li>
                                                <li><a class="dropdown-item" href="index-3">Home Style 3</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item dropdown active">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3"
                                                role="button" data-bs-toggle="dropdown" aria-expanded="false">Pages</a>
                                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown3">
                                                <li><a class="dropdown-item" href="about">About Us</a></li>
                                                <li><a class="dropdown-item" href="courses">Course One</a></li>
                                                <li><a class="dropdown-item" href="courses-2">Course Two</a></li>
                                                <li><a class="dropdown-item" href="course-details">Courses Details</a></li>
                                                <li><a class="dropdown-item" href="price">Price</a></li>
                                                <li><a class="dropdown-item" href="instructor">Instructor</a></li>
                                                <li><a class="dropdown-item" href="instructor-profile">Instructor
                                                        Profile</a></li>
                                                <li><a class="dropdown-item" href="faq">FAQ</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown4"
                                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Blog
                                            </a>
                                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown4">
                                                <li><a class="dropdown-item" href="blog">Blog Grid</a></li>
                                                <li><a class="dropdown-item" href="blog-details">Blog Details</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="contact" id="navbarDropdown5" role="button"
                                                aria-expanded="false">Contact</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                    <div class="col-xl-3 col-lg-2 col-7">
                        <div class="right-nav d-flex align-items-center justify-content-end">
                            <div class="right-btn mr-25 mr-xs-15">
                                <ul class="d-flex align-items-center">
                                    <li><a href="contact" class="theme_btn free_btn">Try Free Now</a></li>
                                    <li><a class="sign-in ml-20" href="login"><img
                                                src="{{ URL::asset('assets/img/icon/user.svg') }}" alt=""></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="hamburger-menu d-md-inline-block d-lg-none text-right">
                                <a href="javascript:void(0);">
                                    <i class="far fa-bars"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- /.theme-main-menu -->
    </header>




    <main>
        <!--page-title-area start-->
        <section class="page-title-area d-flex align-items-end"
            style="background-image: url(assets/img/page-title-bg/01.jpg);">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-lg-12">
                        <div class="page-title-wrapper mb-50">
                            <h1 class="page-title mb-25">Login</h1>
                            <div class="breadcrumb-list">
                                <ul class="breadcrumb">
                                    <li><a href="index">Home -</a></li>
                                    <li><a href="#">Login</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--page-title-area end-->
        <!--contact-form-area start-->
        <section class="contact-form-area pt-150 pb-120 pt-md-100 pt-xs-100 pb-md-70 pb-xs-70">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-6">
                        <div class="contact-form-wrapper text-center mb-30">
                            <h2 class="mb-45">Login</h2>
                            <form action="#" class="row gx-3 comments-form contact-form">
                                <div class="col-lg-12 mb-30">
                                    <p class="mb-3 text-start">Masuk Sebagai</p>
                                    <div class="role-selection">
                                        <label class="role-card active" id="nonPegawai">
                                            <input type="radio" name="role" value="non" checked />
                                            <i class="fa fa-2x fa-user-alt"></i>
                                            <p>Mahasiswa</p>
                                        </label>

                                        <label class="role-card" id="pegawai">
                                            <input type="radio" name="role" value="pegawai" />
                                            <i class="fa fa-2x fa-users"></i>
                                            <p>Non-Mahasiswa</p>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-12 mb-30">
                                    <p class="mb-3 text-start">Email</p>
                                    <input type="email" placeholder="Username">
                                </div>
                                <div class="col-lg-12 mb-30">
                                    <p class="mb-3 text-start">Password</p>
                                    <div class="position-relative mb-2">
                                        <input type="password" placeholder="******" style="padding-right: 80px;">
                                        <div class="position-absolute h-100 d-flex justify-content-center align-items-center px-3"
                                            style="top: 0; right: 0;">
                                            <button type="button" class="btn btn-primary border-0 btn-password"
                                                onclick="togglePassword(this)"><i class="fa fa-eye"></i></button>
                                        </div>
                                    </div>
                                    <div class="text-end">
                                        <a href="#" class="text-primary">Lupa kata sandi?</a>
                                    </div>
                                </div>
                                <div class="col-lg-12 mb-30">
                                    <p class="mb-3 text-start">Kode Captcha</p>
                                    <div class="position-relative">
                                        <div id="captchaCode"
                                            style="font-weight: bold; letter-spacing: 3px; background: #f2f2f2; border-radius: 5px;"
                                            class="w-100 p-3 fs-4"></div>
                                        <div class="position-absolute h-100 d-flex justify-content-center align-items-center px-3"
                                            style="top: 0; right: 0;">
                                            <button type="button" class="btn btn-primary border-0"
                                                onclick="generateCaptcha()"><i class="fa fa-undo"></i></button>
                                        </div>
                                    </div>
                                    <input type="text" id="captchaInput" placeholder="Masukkan captcha"
                                        class="mt-2">
                                </div>
                            </form>
                            <button class="theme_btn message_btn mt-20 mb-4">Masuk</button>
                            <p>Belum punya akun? <a href="#" class="fw-bold text-primary">Daftar sekarang</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--contact-form-area end-->
    </main>
@endsection


@section('js')
    <script>
        const roleCards = document.querySelectorAll('.role-card');
        roleCards.forEach(card => {
            card.addEventListener('click', () => {
                roleCards.forEach(c => c.classList.remove('active'));
                card.classList.add('active');
                card.querySelector('input[type="radio"]').checked = true;
            });
        });
    </script>

    <script>
        function togglePassword(button) {
            const input = button.previousElementSibling;
            const icon = button.querySelector("i");

            if (input.type === "password") {
                input.type = "text";
                icon.classList.remove("fa-eye");
                icon.classList.add("fa-eye-slash");
            } else {
                input.type = "password";
                icon.classList.remove("fa-eye-slash");
                icon.classList.add("fa-eye");
            }
        }
    </script>

    <script>
        function generateCaptcha(length = 6) {
            const chars = "ABCDEFGHJKLMNPQRSTUVWXYZabcdefghijkmnopqrstuvwxyz23456789";
            let captcha = "";
            for (let i = 0; i < length; i++) {
                captcha += chars.charAt(Math.floor(Math.random() * chars.length));
            }
            document.getElementById("captchaCode").textContent = captcha;
            return captcha;
        }

        // Call it once on page load
        let currentCaptcha = "";
        document.addEventListener("DOMContentLoaded", () => {
            currentCaptcha = generateCaptcha();
        });

        // Example: verify function
        function verifyCaptcha() {
            const input = document.getElementById("captchaInput").value.trim();
            if (input === document.getElementById("captchaCode").textContent.trim()) {
                alert("Captcha benar!");
            } else {
                alert("Captcha salah. Silakan coba lagi.");
                generateCaptcha();
            }
        }
    </script>
@endsection
