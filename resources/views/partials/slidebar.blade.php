 <!-- slide-bar start -->
 <aside class="slide-bar" style="background: #09B8AC">
     <div class="close-mobile-menu">
         <a href="javascript:void(0);"><i class="fas fa-times"></i></a>
     </div>

     <!-- offset-sidebar start -->
     <div class="offset-sidebar">
         <div class="offset-widget offset-logo mb-30">
             <a href="index">
                 <img src="{{ URL::asset('assets/img/logo/header_logo_one.svg') }}" alt="logo">
             </a>
         </div>
         <div class="offset-widget mb-40">
             <div class="info-widget">
                 <h4 class="offset-title mb-20">About Us</h4>
                 <p class="mb-30">
                     But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain
                     was born and will give you a complete account of the system and expound the actual teachings of
                     the great explore
                 </p>
                 <a class="theme_btn theme_btn_bg" href="contact">Contact Us</a>
             </div>
         </div>
         <div class="offset-widget mb-30 pr-10">
             <div class="info-widget info-widget2">
                 <h4 class="offset-title mb-20">Contact Info</h4>
                 <p> <i class="fal fa-address-book"></i> 23/A, Miranda City Likaoli Prikano, Dope</p>
                 <p> <i class="fal fa-phone"></i> +0989 7876 9865 9 </p>
                 <p> <i class="fal fa-envelope-open"></i> info@example.com </p>
             </div>
         </div>
     </div>
     <!-- offset-sidebar end -->

     <!-- side-mobile-menu start -->
     <nav class="side-mobile-menu">
         <ul id="mobile-menu-active">
             <li><a href="{{ url('/') }}">Beranda</a></li>
             <li class="has-dropdown">
                 <a href="#">Akademik</a>
                 <ul class="sub-menu">
                     <li><a href="{{ url('/layanan/permohonan-dokumen-akademik') }}">Permohonan Dokumen Akademik</a>
                     </li>
                     <li><a onclick="layananMaintenance()" style="cursor:pointer">Ethical Clearance</a></li>
                     <li><a href="{{ url('/layanan/translate') }}">Translate Abstract/Dokumen</a></li>
                     <li><a href="{{ url('/layanan/toefl-itp') }}">Layanan TOEFL ITP</a></li>
                     <li><a onclick="layananMaintenance()" style="cursor:pointer">Layanan Pengujian Laboratorium</a>
                     </li>
                     <li><a href="https://kemkes.go.id/id/home" target="_blank">Layanan Jurnal dan Publikasi</a></li>
                     <li><a href="{{ url('/layanan/perpustakaan') }}">Layanan Perpustakan</a></li>
                     <li><a onclick="layananMaintenance()" style="cursor:pointer">Layanan Pengembangan Kompetensi SDM
                             Kesehatan</a></li>
                 </ul>
             </li>
             <li class="has-dropdown">
                 <a href="#">Non Akademik</a>
                 <ul class="sub-menu">
                     <li><a href="{{ url('/layanan/sarpras') }}">Layanan Penyewaan Sarpras</a></li>
                     <li><a href="{{ url('/layanan/klinik') }}">Layanan Klinik Pratama</a></li>
                     <li><a href="{{ url('/layanan/asrama') }}">Layanan Asrama (khusus mahasiswa)</a></li>
                     <li><a href="{{ url('/layanan/katering') }}">Layanan Catering (khusus mahasiswa)</a></li>
                 </ul>
             </li>
             <li><a href="{{ url('/kontak') }}">Kontak</a></li>
         </ul>
     </nav>
     <!-- side-mobile-menu end -->
 </aside>
 <div class="body-overlay"></div>
 <!-- slide-bar end -->
