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
                                        <li class="nav-item dropdown active">
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
                                        <li class="nav-item dropdown">
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
      <section class="page-title-area d-flex align-items-end" style="background-image: url(assets/img/page-title-bg/01.jpg);">
          <div class="container">
              <div class="row align-items-end">
                  <div class="col-lg-12">
                      <div class="page-title-wrapper mb-50">
                         <h1 class="page-title mb-25">Courses Details</h1>
                         <div class="breadcrumb-list">
                            <ul class="breadcrumb">
                                <li><a href="index">Home - Pages -</a></li>
                                <li><a href="#">Courses Details</a></li>
                            </ul>
                         </div>
                    </div>
                  </div>
              </div>
          </div>
      </section>
      <!--page-title-area end-->
      <!--course-details-area start-->
      <section class="course-details-area pt-150 pb-120 pt-md-100 pb-md-70 pt-xs-100 pb-xs-70">
          <div class="container">
                  <div class="row">
                      <div class="col-xxl-8 col-xl-7">
                          <div class="courses-details-wrapper mb-30">
                              <h2 class="courses-title mb-30">Fundamentals Of Dslr Photography</h2>
                              <h5>Photography Specialist By Jason Momoa</h5>
                              <div class="course-details-img mb-30" style="background-image: url(assets/img/course/details/01.jpg);">
                                <div class="video-wrapper">
                                    <a href="https://www.youtube.com/watch?v=7omGYwdcS04" class="popup-video"><i class="fas fa-play"></i></a>
                                    </div>
                                </div>
                                <div class="courses-tag-btn">
                                    <a href="#">Add to wishlist</a>
                                    <a href="#">Share</a>
                                    <a href="#">Gift this course</a>
                                </div>
                          </div>
                      </div>
                      <div class="col-xxl-4 col-xl-5">
                          <div class="learn-area mb-30">
                              <ul class="cart-list-tag d-sm-inline-flex align-items-center mb-50">
                                  <li>
                                      <div class="price-list">
                                          <h5><span>$123.65</span> <b class="sub-title">$93.65</b></h5>
                                      </div>
                                  </li>
                                  <li>
                                       <div class="cart-btn">
                                            <a class="theme_btn" href="#">Add To Cart</a>
                                        </div>
                                  </li>
                                  <li>
                                     <div class="video-wrapper courses-cart-video">
                                        <a href="https://www.youtube.com/watch?v=7omGYwdcS04" class="popup-video"><i class="fas fa-play"></i></a>
                                     </div>
                                  </li>
                              </ul>
                              <div class="learn-box">
                                  <h5>25 Lessons ( 3h 36m )</h5>
                                  <ul class="learn-list">
                                      <li>
                                          <a href="https://www.youtube.com/watch?v=7omGYwdcS04">
                                              <span class="play-video"><img src="{{ URL::asset('assets/img/icon/video-player.svg') }}" alt="course-list"></span> 01. Intro Video <span class="time float-end">4:02</span>
                                            </a>
                                        </li>
                                      <li>
                                          <a href="https://www.youtube.com/watch?v=7omGYwdcS04">
                                              <span class="play-video"><i class="fal fa-lock-alt"></i></span> 02. How to Open Camera <span class="time float-end">2:03</span>
                                          </a>
                                      </li>
                                      <li>
                                          <a href="https://www.youtube.com/watch?v=7omGYwdcS04">
                                              <span class="play-video"><i class="fal fa-lock-alt"></i></span> 03. Balancing the Exposure <span class="time float-end">5:03</span>
                                          </a>
                                      </li>
                                      <li>
                                          <a href="https://www.youtube.com/watch?v=7omGYwdcS04">
                                              <span class="play-video"><i class="fal fa-lock-alt"></i></span> 04. Preparing to Shoot <span class="time float-end">5:12</span>
                                          </a>
                                      </li>
                                      <li>
                                          <a href="https://www.youtube.com/watch?v=7omGYwdcS04">
                                              <span class="play-video"><i class="fal fa-lock-alt"></i></span> 05. Studio Demonstration <span class="time float-end">6:12</span>
                                          </a>
                                      </li>
                                      <li>
                                          <a href="https://www.youtube.com/watch?v=7omGYwdcS04">
                                              <span class="play-video"><i class="fal fa-lock-alt"></i></span> 06. Shutter Speed <span class="time float-end">7:00</span>
                                          </a>
                                      </li>
                                      <li>
                                          <a href="https://www.youtube.com/watch?v=7omGYwdcS04">
                                              <span class="play-video"><i class="fal fa-lock-alt"></i></span> 07. Aperture <span class="time float-end">6:05</span>
                                          </a>
                                      </li>
                                      <li>
                                          <a href="https://www.youtube.com/watch?v=7omGYwdcS04">
                                              <span class="play-video"><i class="fal fa-lock-alt"></i></span> 08. ISO <span class="time float-end">30:00</span>
                                          </a>
                                      </li>
                                      <li>
                                          <a href="https://www.youtube.com/watch?v=7omGYwdcS04">
                                              <span class="play-video"><i class="fal fa-lock-alt"></i></span> 09. Editing Tips & Tricks <span class="time float-end">20:03</span>
                                          </a>
                                      </li>
                                      <li>
                                          <a href="https://www.youtube.com/watch?v=7omGYwdcS04">
                                              <span class="play-video"><i class="fal fa-lock-alt"></i></span> 10. Advance Photography <span class="time float-end">40:36</span>
                                          </a>
                                      </li>
                                      <li>
                                          <a href="https://www.youtube.com/watch?v=7omGYwdcS04">
                                              <span class="play-video"><i class="fal fa-lock-alt"></i></span> 10. Advance Photography-2 <span class="time float-end">40:36</span>
                                          </a>
                                      </li>
                                      <li>
                                          <a href="https://www.youtube.com/watch?v=7omGYwdcS04">
                                              <span class="play-video"><i class="fal fa-lock-alt"></i></span> 10. Advance Photography-3 <span class="time float-end">40:36</span>
                                          </a>
                                      </li>
                                      <li>
                                          <a href="https://www.youtube.com/watch?v=7omGYwdcS04">
                                              <span class="play-video"><i class="fal fa-lock-alt"></i></span> 10. Advance Photography-4 <span class="time float-end">40:36</span>
                                          </a>
                                      </li>
                                  </ul>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-xl-6 col-lg-7">
                          <div class="project-details mb-65">
                              <h2 class="courses-title mb-30">Photography Learning A-Z</h2>
                              <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed di nonumy eirmod tempor invidunt ut labore et dolore magn aliq erat.Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed di nonumy eirmod tempor invidunt ut labore et dolore magn aliq erat.</p>
                              <ul class="seller-rating d-md-inline-flex align-items-center mt-20 mb-10">
                                  <li>
                                      <a href="#" class="theme_btn mb-10">Bestseller</a>
                                  </li>
                                  <li>
                                    <div class="star-icon mb-10">
                                        <a href="#"><i class="fas fa-star"></i></a>
                                        <a href="#"><i class="fas fa-star"></i></a>
                                        <a href="#"><i class="fas fa-star"></i></a>
                                        <a href="#"><i class="fas fa-star"></i></a>
                                        <a href="#"><i class="fas fa-star"></i></a>
                                        <a href="#">4.8 ( 256,384)</a>
                                    </div>
                                  </li>
                                  <li>
                                      <h5 class="mb-10">Enroll 360,349</h5>
                                  </li>
                              </ul>
                              <h5 class="mb-25"><span>Created by</span> Jason Momoa & Uxaction Photography team</h5>
                              <div class="date-lang">
                                  <span><b>Date :</b> 31/05/2020</span>
                                  <span><b>Language :</b> English</span>
                              </div>
                          </div>
                          <div class="meet-our-teacher mb-65">
                               <h2 class="courses-title mb-30">Meet Your Teacher</h2>
                               <div class="teachers-content mb-25">
                                   <img class="teacher_01" src="{{ URL::asset('assets/img/course/details/teacher.png') }}" alt="">
                                   <div class="teachers-content__text">
                                       <h5>Jason Momoa</h5>
                                       <p>Photography Specialist</p>
                                   </div>
                               </div>
                               <p class="mb-20">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed di nonumy eirmod tempor invidunt ut labore et dolore magn aliq erat.Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed di nonumy eirmod tempor invidunt ut labore et dolore magn aliq erat.</p>
                               <p class="mb-20">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed di nonumy eirmod tempor invidunt ut labore et dolore magn aliq erat.Lorem ipsum dolor.</p>
                               <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed di nonumy eirmod tempor invidunt ut labore et dolore magn aliq erat.Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed di nonumy.</p>
                          </div>
                          <div class="skill-area">
                              <h2 class="courses-title mb-35">Related Skills</h2>
                              <div class="courses-tag-btn">
                                    <a href="#">Photography</a>
                                    <a href="#">Outdoor</a>
                                    <a href="#">Indoor Photography</a>
                                    <a href="#">DSLR</a>
                                    <a href="#">Creative</a>
                                    <a href="#">Camera</a>
                                    <a href="#">Professional</a>
                              </div>
                          </div>
                      </div>
                      <div class="col-xl-6 col-lg-5">
                          <div class="courses-ingredients">
                              <h2 class="corses-title mb-30">Course Includes</h2>
                              <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed di nonumy eirmod tempor invidunt ut labore et dolore.</p>
                              <ul class="courses-item mt-25">
                                  <li><img src="{{ URL::asset('assets/img/icon/video.svg') }}" alt=""> 4 hours on-demand video</li>
                                  <li><img src="{{ URL::asset('assets/img/icon/newspaper.svg') }}" alt=""> 73 articles</li>
                                  <li><img src="{{ URL::asset('assets/img/icon/download.svg') }}" alt=""> 650+ downloadable resources</li>
                                  <li><img src="{{ URL::asset('assets/img/icon/infinity.svg') }}" alt=""> Full Lifetime Access</li>
                                  <li><img src="{{ URL::asset('assets/img/icon/mobile.svg') }}" alt=""> Access on mobile and TV or any devices</li>
                                  <li><img src="{{ URL::asset('assets/img/icon/certificate-line.svg') }}" alt=""> Certificate of completion</li>
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>
      </section>
      <!--course-details-area end-->
       <!-- feature-course start -->
       <section class="feature-course pb-130 pt-md-95 pb-md-80 pt-xs-95 pb-xs-80">
            <div class="container">
               <h2 class="courses-title mb-35">Recent Courses</h2>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="z-gallery mb-30">
                            <div class="z-gallery__thumb mb-20">
                                <a href="course-details"><img class="img-fluid" src="{{ URL::asset('assets/img/course/01.png') }}" alt=""></a>
                                <div class="feedback-tag">4.8(256)</div>
                                <div class="heart-icon"><i class="fas fa-heart"></i></div>
                            </div>
                            <div class="z-gallery__content">
                                <div class="course__tag mb-15">
                                    <span>Science</span>
                                    <span>Lab</span>
                                    <a class="f-right" href="instructor-details"><img src="{{ URL::asset('assets/img/course/in1.png') }}" alt=""></a>
                                </div>
                                <h4 class="sub-title mb-20"><a href="course-details">Take Your Career to the Next Level Future</a></h4>
                                <div class="course__meta">
                                    <span><img class="icon" src="{{ URL::asset('assets/img/icon/time.svg') }}" alt="course-meta"> 12 Class</span>
                                    <span><img class="icon" src="{{ URL::asset('assets/img/icon/bar-chart.svg') }}" alt="course-meta"> Higher</span>
                                    <span><img class="icon" src="{{ URL::asset('assets/img/icon/user.svg') }}" alt="course-meta"> 6395+</span>
                                    <span>$260</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                       <div class="z-gallery mb-30">
                            <div class="z-gallery__thumb mb-20">
                                <a href="course-details"><img class="img-fluid" src="{{ URL::asset('assets/img/course/02.png') }}" alt=""></a>
                                <div class="feedback-tag">4.8(256)</div>
                                <div class="heart-icon"><i class="fas fa-heart"></i></div>
                            </div>
                            <div class="z-gallery__content">
                                <div class="course__tag mb-15">
                                    <span>Science</span>
                                    <span>Lab</span>
                                    <a class="f-right" href="instructor-details"><img src="{{ URL::asset('assets/img/course/in2.png') }}" alt=""></a>
                                </div>
                                <h4 class="sub-title mb-20"><a href="course-details">Your Career to build for the pro level</a></h4>
                                <div class="course__meta">
                                    <span><img class="icon" src="{{ URL::asset('assets/img/icon/time.svg') }}" alt="course-meta"> 12 Class</span>
                                    <span><img class="icon" src="{{ URL::asset('assets/img/icon/bar-chart.svg') }}" alt="course-meta"> Higher</span>
                                    <span><img class="icon" src="{{ URL::asset('assets/img/icon/user.svg') }}" alt="course-meta"> 6395+</span>
                                    <span>$260</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="z-gallery mb-30">
                            <div class="z-gallery__thumb mb-20">
                                <a href="course-details"><img class="img-fluid" src="{{ URL::asset('assets/img/course/03.png') }}" alt=""></a>
                                <div class="feedback-tag">4.8(256)</div>
                                <div class="heart-icon"><i class="fas fa-heart"></i></div>
                            </div>
                            <div class="z-gallery__content">
                                <div class="course__tag mb-15">
                                    <span>Science</span>
                                    <span>Lab</span>
                                    <a class="f-right" href="instructor-details"><img src="{{ URL::asset('assets/img/course/in3.png') }}" alt=""></a>
                                </div>
                                <h4 class="sub-title mb-20"><a href="course-details">Take A Course For You Biright Future</a></h4>
                                <div class="course__meta">
                                    <span><img class="icon" src="{{ URL::asset('assets/img/icon/time.svg') }}" alt="course-meta"> 12 Class</span>
                                    <span><img class="icon" src="{{ URL::asset('assets/img/icon/bar-chart.svg') }}" alt="course-meta"> Higher</span>
                                    <span><img class="icon" src="{{ URL::asset('assets/img/icon/user.svg') }}" alt="course-meta"> 6395+</span>
                                    <span>$260</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       </section>
       <!-- feature-course end -->
       <!--what-loking-for start-->
       <section class="what-looking-for pos-rel gradient-bg pt-145 pb-130 pt-md-95 pb-md-80 pt-xs-95 pb-xs-80">
           <div class="what-blur-shape-one"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="section-title text-center mb-55">
                            <h5 class="bottom-line mb-25">Teachers & Students</h5>
                            <h2>What you Looking For?</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="what-box text-center mb-3">
                            <div class="what-box__icon mb-30">
                                <img src="{{ URL::asset('assets/img/icon/phone-operator.svg') }}" alt="">
                            </div>
                            <h3>Do you want to teach here?</h3>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed di nonumy eirmod tempor invidunt ut labore et dolore magn aliq erat.</p>
                            <a href="course-details" class="theme_btn border_btn">Register Now</a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="what-box text-center mb-3">
                            <div class="what-box__icon mb-30">
                                <img src="{{ URL::asset('assets/img/icon/graduate.svg') }}" alt="">
                            </div>
                            <h3>Do you want to learn here?</h3>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed di nonumy eirmod tempor invidunt ut labore et dolore magn aliq erat.</p>
                            <a href="course-details" class="theme_btn border_btn active">Register Now</a>
                        </div>
                    </div>
                </div>
            </div>
       </section>
       <!--what-loking-for end-->
       <!-- subscribe-area start -->
       <section class="subscribe-area border-bot pt-145 pb-50 pt-md-90 pt-xs-90">
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
