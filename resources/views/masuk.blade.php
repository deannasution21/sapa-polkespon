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
    @include('partials.header2')

    <main>
        <!--page-title-area start-->
        <section class="page-title-area d-flex align-items-end"
            style="background-image: url(assets/img/page-title-bg/01.jpg);">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-lg-12">
                        <div class="page-title-wrapper mb-50">
                            <h1 class="page-title mb-25">Masuk</h1>
                            <div class="breadcrumb-list">
                                <ul class="breadcrumb">
                                    <li><a href="index">Beranda -</a></li>
                                    <li><a href="#">Masuk</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--page-title-area end-->
        <!--contact-form-area start-->
        <section class="contact-form-area border-bot pt-150 pb-120 pt-md-100 pt-xs-100 pb-md-70 pb-xs-70">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-6">
                        <div class="contact-form-wrapper text-center mb-30">
                            <h2 class="mb-45">Portal SAPA</h2>
                            <form action="#" class="row gx-3 comments-form contact-form">
                                <div class="col-lg-12 mb-30">
                                    <p class="mb-3 text-start">Masuk Sebagai</p>
                                    <div class="role-selection">
                                        <label class="role-card active" id="mahasiswa">
                                            <input type="radio" name="role" value="mahasiswa" checked />
                                            <i class="fa fa-2x fa-user-alt"></i>
                                            <p>Mahasiswa</p>
                                        </label>

                                        <label class="role-card" id="non">
                                            <input type="radio" name="role" value="non" />
                                            <i class="fa fa-2x fa-users"></i>
                                            <p>Non-Mahasiswa</p>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-12 mb-30">
                                    <p class="mb-3 text-start">Email</p>
                                    <input type="email" placeholder="Username" value="fuadamin@gmail.com">
                                </div>
                                <div class="col-lg-12 mb-30">
                                    <p class="mb-3 text-start">Kata Sandi</p>
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
                                    <input type="text" id="captchaInput" placeholder="Masukkan captcha" class="mt-2">
                                </div>
                            </form>
                            <div class="mx-auto" style="max-width: 350px;">
                                <button onclick="masuk()" class="btn-submit theme_btn message_btn mt-20">Masuk</button>
                                <p class="my-3">Atau</p>
                                <button type="button"
                                    class="btn btn-outline-primary w-100 d-flex align-items-center justify-content-center gap-2 mb-4">
                                    <img src="{{ asset('/assets/img/icon/google.svg') }}" alt="Google" width="20"
                                        height="20">
                                    Masuk dengan Google
                                </button>
                            </div>

                            <p>Belum punya akun? <a href="{{ url('/daftar') }}" class="fw-bold text-primary">Daftar
                                    sekarang</a></p>
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

    <script>
        function masuk() {
            const btn1 = document.querySelector('.btn-submit')
            btn1.disabled = true
            btn1.textContent = 'Memproses...'

            Toast.fire({
                icon: "success",
                title: "Selamat datang di SAPA POLKESPON"
            }).then(() => {
                window.location.href = "/dashboard"
            })
        }
    </script>
@endsection
