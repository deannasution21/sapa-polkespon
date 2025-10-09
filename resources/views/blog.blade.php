@extends('partials.main')

@section('css')

 @endsection


 @section('main')

    
   <header>
        <div id="theme-menu-two" class="main-header-area main-head-three pl-100 pr-100 pt-20 pb-15">
            <div class="container-fluid">
                 <div class="row align-items-center">
                    <div class="col-xl-2 col-lg-2 col-5">
                        <div class="logo"><a href="index"><img src="{{ URL::asset('assets/img/logo/header_logo_one.svg') }}" alt=""></a></div>
                    </div>
                    <div class="col-xl-7 col-lg-8 d-none d-lg-block">
                        <nav class="main-menu navbar navbar-expand-lg justify-content-center">
                            <div class="nav-container">
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav">
                                        <li class="nav-item dropdown mega-menu">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            All Categories 
                                            </a>
                                            <ul class="dropdown-menu submenu mega-menu__sub-menu-box" aria-labelledby="navbarDropdown">
                                                <li><a href="index"><span><img src="{{ URL::asset('assets/img/icon/icon7.svg') }}" alt=""></span> Business</a></li>
                                                <li><a href="index-2"><span><img src="{{ URL::asset('assets/img/icon/icon8.svg') }}" alt=""></span> Technology</a></li>
                                                <li><a href="index"><span><img src="{{ URL::asset('assets/img/icon/icon9.svg') }}" alt=""></span> Development</a></li>
                                                <li><a href="index-2"><span><img src="{{ URL::asset('assets/img/icon/icon10.svg') }}" alt=""></span> Photography</a></li>
                                                <li><a href="index"><span><img src="{{ URL::asset('assets/img/icon/icon11.svg') }}" alt=""></span> Digital Marketing</a></li>
                                                <li><a href="index-2"><span><img src="{{ URL::asset('assets/img/icon/icon12.svg') }}" alt=""></span> Programming</a></li>
                                                <li><a href="index"><span><img src="{{ URL::asset('assets/img/icon/icon14.svg') }}" alt=""></span> Videograpgy</a></li>
                                                <li><a href="index-2"><span><img src="{{ URL::asset('assets/img/icon/icon13.svg') }}" alt=""></span> Illustration</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Home
                                            </a>
                                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown2">
                                                <li><a class="dropdown-item" href="index">Home Style 1</a></li>
                                                <li><a class="dropdown-item" href="index-2">Home Style 2</a></li>
                                                <li><a class="dropdown-item" href="index-3">Home Style 3</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button" data-bs-toggle="dropdown" aria-expanded="false">Pages</a>
                                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown3">
                                                <li><a class="dropdown-item" href="about">About Us</a></li>
                                                <li><a class="dropdown-item" href="courses">Course One</a></li>
                                                <li><a class="dropdown-item" href="courses-2">Course Two</a></li>
                                                <li><a class="dropdown-item" href="course-details">Courses Details</a></li>
                                                <li><a class="dropdown-item" href="price">Price</a></li>
                                                <li><a class="dropdown-item" href="instructor">Instructor</a></li>
                                                <li><a class="dropdown-item" href="instructor-profile">Instructor Profile</a></li>
                                                <li><a class="dropdown-item" href="faq">FAQ</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item dropdown active">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown4" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Blog
                                            </a>
                                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown4">
                                                <li><a class="dropdown-item" href="blog">Blog Grid</a></li>
                                                <li><a class="dropdown-item" href="blog-details">Blog Details</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="contact" id="navbarDropdown5" role="button"  aria-expanded="false">Contact</a></li>
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
                                    <li><a class="sign-in ml-20" href="login"><img src="{{ URL::asset('assets/img/icon/user.svg') }}" alt=""></a></li>
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
      <section class="page-title-area d-flex align-items-end" style="background-image: url(assets/img/page-title-bg/01.jpg) ;">
          <div class="container">
              <div class="row align-items-end">
                  <div class="col-lg-12">
                      <div class="page-title-wrapper mb-50">
                         <h1 class="page-title mb-25">Blog</h1>
                         <div class="breadcrumb-list">
                            <ul class="breadcrumb">
                                <li><a href="index">Home - Pages -</a></li>
                                <li><a href="#">Blog</a></li>
                            </ul>
                         </div>
                    </div>
                  </div>
              </div>
          </div>
      </section>
      <!--page-title-area end-->
      <!-- blog-area start -->
        <section class="blog-area">
            <div class="blog-bg pt-150 pb-120 pt-md-100 pb-md-70 pt-xs-100 pb-xs-70">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="section-title text-center mb-60">
                                <h2 class="mb-25">Lots of new Blogs & News</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="z-blogs mb-30">
                                <div class="z-blogs__thumb mb-30">
                                <a href="blog-details"><img src="{{ URL::asset('assets/img/blog/01.jpg') }}" alt="blog-img"></a>
                                </div>
                                <div class="z-blogs__content">
                                    <h5 class="mb-25">Online . School . Skill</h5>
                                    <h4 class="sub-title mb-15"><a href="blog-details">5 Ways to Use Padlet in -Ed Online Classroom</a></h4>
                                    <div class="z-blogs__meta d-sm-flex justify-content-between pt-20">
                                        <span>Date : June 15 , 2021</span>
                                        <span>By Guest Admin</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="z-blogs mb-30">
                                <div class="z-blogs__thumb mb-30">
                                <a href="blog-details"><img src="{{ URL::asset('assets/img/blog/02.jpg') }}" alt="blog-img"></a>
                                </div>
                                <div class="z-blogs__content">
                                    <h5 class="mb-25">Education . Expert</h5>
                                    <h4 class="sub-title mb-15"><a href="blog-details">4 New Zoom Enhance Virtual Learning</a></h4>
                                    <div class="z-blogs__meta d-sm-flex justify-content-between pt-20">
                                        <span>Date : June 15 , 2021</span>
                                        <span>By Guest Admin</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="z-blogs mb-30">
                                <div class="z-blogs__thumb mb-30">
                                <a href="blog-details"><img src="{{ URL::asset('assets/img/blog/03.jpg') }}" alt="blog-img"></a>
                                </div>
                                <div class="z-blogs__content">
                                    <h5 class="mb-25">Creative . Programmer</h5>
                                    <h4 class="sub-title mb-15"><a href="blog-details">Using Media to Support Online Teaching</a></h4>
                                    <div class="z-blogs__meta d-sm-flex justify-content-between pt-20">
                                        <span>Date : June 15 , 2021</span>
                                        <span>By Guest Admin</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="z-blogs mb-30">
                                <div class="z-blogs__thumb mb-30">
                                <a href="blog-details"><img src="{{ URL::asset('assets/img/blog/10.jpg') }}" alt="blog-img"></a>
                                </div>
                                <div class="z-blogs__content">
                                    <h5 class="mb-25">Online . School . Skill</h5>
                                    <h4 class="sub-title mb-15"><a href="blog-details">5 Ways to Use Padlet in -Ed Online Classroom</a></h4>
                                    <div class="z-blogs__meta d-sm-flex justify-content-between pt-20">
                                        <span>Date : June 15 , 2021</span>
                                        <span>By Guest Admin</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="z-blogs mb-30">
                                <div class="z-blogs__thumb mb-30">
                                <a href="blog-details"><img src="{{ URL::asset('assets/img/blog/11.jpg') }}" alt="blog-img"></a>
                                </div>
                                <div class="z-blogs__content">
                                    <h5 class="mb-25">Education . Expert</h5>
                                    <h4 class="sub-title mb-15"><a href="blog-details">4 New Zoom Enhance Virtual Learning</a></h4>
                                    <div class="z-blogs__meta d-sm-flex justify-content-between pt-20">
                                        <span>Date : June 15 , 2021</span>
                                        <span>By Guest Admin</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="z-blogs mb-30">
                                <div class="z-blogs__thumb mb-30">
                                <a href="blog-details"><img src="{{ URL::asset('assets/img/blog/12.jpg') }}" alt="blog-img"></a>
                                </div>
                                <div class="z-blogs__content">
                                    <h5 class="mb-25">Creative . Programmer</h5>
                                    <h4 class="sub-title mb-15"><a href="blog-details">Using Media to Support Online Teaching</a></h4>
                                    <div class="z-blogs__meta d-sm-flex justify-content-between pt-20">
                                        <span>Date : June 15 , 2021</span>
                                        <span>By Guest Admin</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="z-blogs mb-30">
                                <div class="z-blogs__thumb mb-30">
                                <a href="blog-details"><img src="{{ URL::asset('assets/img/blog/13.jpg') }}" alt="blog-img"></a>
                                </div>
                                <div class="z-blogs__content">
                                    <h5 class="mb-25">Online . School . Skill</h5>
                                    <h4 class="sub-title mb-15"><a href="blog-details">5 Ways to Use Padlet in -Ed Online Classroom</a></h4>
                                    <div class="z-blogs__meta d-sm-flex justify-content-between pt-20">
                                        <span>Date : June 15 , 2021</span>
                                        <span>By Guest Admin</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="z-blogs mb-30">
                                <div class="z-blogs__thumb mb-30">
                                <a href="blog-details"><img src="{{ URL::asset('assets/img/blog/14.jpg') }}" alt="blog-img"></a>
                                </div>
                                <div class="z-blogs__content">
                                    <h5 class="mb-25">Education . Expert</h5>
                                    <h4 class="sub-title mb-15"><a href="blog-details">4 New Zoom Enhance Virtual Learning</a></h4>
                                    <div class="z-blogs__meta d-sm-flex justify-content-between pt-20">
                                        <span>Date : June 15 , 2021</span>
                                        <span>By Guest Admin</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="z-blogs mb-30">
                                <div class="z-blogs__thumb mb-30">
                                <a href="blog-details"><img src="{{ URL::asset('assets/img/blog/15.jpg') }}" alt="blog-img"></a>
                                </div>
                                <div class="z-blogs__content">
                                    <h5 class="mb-25">Creative . Programmer</h5>
                                    <h4 class="sub-title mb-15"><a href="blog-details">Using Media to Support Online Teaching</a></h4>
                                    <div class="z-blogs__meta d-sm-flex justify-content-between pt-20">
                                        <span>Date : June 15 , 2021</span>
                                        <span>By Guest Admin</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 text-center mt-20 mb-30">
                            <a href="blog-details" class="theme_btn">Load More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- blog-area end -->
       <!-- subscribe-area start -->
       <section class="subscribe-area footer-bg border-bot pt-145 pb-50 pt-md-90 pt-xs-90">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8">
                        <div class="subscribe-wrapper text-center mb-30">
                            <h2>Subscribe our Newsletter & Get every updates.</h2>
                           <div class="subscribe-form-box pos-rel">
                                <form class="subscribe-form">
                                    <input type="text" placeholder="Write Your E-mail">
                                </form>
                                <button class="sub_btn">Subscribe Now</button>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
       </section>
       <!-- subscribe-area end -->
    </main>
    @endsection


    @section('js')
    @endsection