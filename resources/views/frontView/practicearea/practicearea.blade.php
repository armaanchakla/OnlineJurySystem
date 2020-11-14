@extends('frontView.master')

@section('title_area')
    Practice Area
@endsection

@section('header')
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid p-0">
                    <div class="row align-items-center justify-content-between no-gutters">
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo-img">
                                <a href="/">
                                    <p style="font-size: 22px; color: #F2C64D;">Online Jury System</p>
                                    <!-- <img src="{{ asset('frontEnd') }}/img/logo.png" alt=""> -->
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-8">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="/">home</a></li>
                                        <li><a href="/about">About</a></li>
                                        <!-- <li><a href="/practicearea">Practice Area</a></li> -->
                                        <li><a href="#">blog <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="/blog">blog</a></li>
                                                <li><a href="/singleblog">single-blog</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">pages <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="/profile">Profile</a></li>
                                                <li><a href="/elements">elements</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="/login">Login</a></li>
                                        <li><a href="/register">Register</a></li>
                                        <li><a href="/contact">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-2 d-none d-lg-block">
                            <div class="social_media_links">
                                <ul>
                                    <li><a href="#"> <i class="fa fa-facebook"></i> </a></li>
                                    <li><a href="#"> <i class="fa fa-twitter"></i> </a></li>
                                    <li><a href="#"> <i class="fa fa-instagram"></i> </a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('frontEnd') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('frontEnd') }}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('frontEnd') }}/css/magnific-popup.css">
    <link rel="stylesheet" href="{{ asset('frontEnd') }}/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('frontEnd') }}/css/themify-icons.css">
    <link rel="stylesheet" href="{{ asset('frontEnd') }}/css/nice-select.css">
    <link rel="stylesheet" href="{{ asset('frontEnd') }}/css/flaticon.css">
    <link rel="stylesheet" href="{{ asset('frontEnd') }}/css/flaticon.css">
    <link rel="stylesheet" href="{{ asset('frontEnd') }}/css/gijgo.css">
    <link rel="stylesheet" href="{{ asset('frontEnd') }}/css/slicknav.css">
    <link rel="stylesheet" href="{{ asset('frontEnd') }}/css/style.css">
@endsection

@section('bradcam_area')
    <div class="bradcam_area">
        <div class="bradcam_inner bradcam_bg d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="bradcam_text text-center">
                            <h3>Finest And Strongest Law <br>
                                Firm Win The World</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('practice_area')
<div class="practice_area">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-60">
                        <h3>Practice Area</h3>
                        <p>Many variations of passages of Lorem Ipsum available, but the majority have <br> suffered alteration in some.</p>
                    </div>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-xl-3 col-md-6">
                    <div class="single_practice">
                        <div class="practice_image">
                            <img src="{{ asset('frontEnd') }}/img/practice/1.png" alt="">
                        </div>
                        <div class="practice_hover text-center">
                            <div class="hover_inner">
                                <i class="flaticon-case"></i>
                                <h3>Business Law</h3>
                                <p>There are many variations of passages of <br> Lorem Ipsum available, <br> but the
                                    majority have suffered</p>
                                <a href="#" class="lern_more">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="single_practice">
                        <div class="practice_image">
                            <img src="{{ asset('frontEnd') }}/img/practice/2.png" alt="">
                        </div>
                        <div class="practice_hover text-center">
                            <div class="hover_inner">
                                <i class="flaticon-courthouse"></i>
                                <h3>Finance Law</h3>
                                <p>There are many variations of passages of <br> Lorem Ipsum available, <br> but the
                                    majority have suffered</p>
                                <a href="#" class="lern_more">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="single_practice">
                        <div class="practice_image">
                            <img src="{{ asset('frontEnd') }}/img/practice/3.png" alt="">
                        </div>
                        <div class="practice_hover text-center">
                            <div class="hover_inner">
                                <i class="flaticon-judge"></i>
                                <h3>Family Law</h3>
                                <p>There are many variations of passages of <br> Lorem Ipsum available, <br> but the
                                    majority have suffered</p>
                                <a href="#" class="lern_more">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="single_practice">
                        <div class="practice_image">
                            <img src="{{ asset('frontEnd') }}/img/practice/4.png" alt="">
                        </div>
                        <div class="practice_hover text-center">
                            <div class="hover_inner">
                                <i class="flaticon-jury"></i>
                                <h3>Education Law</h3>
                                <p>There are many variations of passages of <br> Lorem Ipsum available, <br> but the
                                    majority have suffered</p>
                                <a href="#" class="lern_more">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

    @section('about_area')
    <div class="about_area">
        <div class="opacity_icon d-none d-lg-block">
            <i class="flaticon-balance"></i>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-md-6">
                    <div class="single_about_info text-center">
                        <div class="about_thumb">
                            <img src="{{ asset('frontEnd') }}/img/about/1.png" alt="">
                        </div>
                        <h3>Finest And Strongest Law <br>
                            Firm Win The World</h3>
                        <p>There are many variations of passages of Lorem Ipsum <br> available, but the majority have
                            suffered alteration in <br> some form, by injected humour, or randomised words <br> which
                            don't look even slightly believable. </p>
                        <div class="signature">
                            <img src="{{ asset('frontEnd') }}/img/about/signature.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6">
                    <div class="single_about_info text-center">
                        <div class="about_thumb">
                            <div class="image_hover">
                                <div class="hover_inner">
                                    <h2>93%</h2>
                                    <span>Success Case</span>
                                </div>
                            </div>
                        </div>
                        <h3>About Lawyer Justice</h3>
                        <p>There are many variations of passages of Lorem Ipsum <br> available, but the majority have
                            suffered alteration in <br> some form, by injected humour, or randomised words <br> which
                            don't look even slightly believable. </p>
                        <div class="total_cases">
                            <div class="single_cases">
                                <h4>879</h4>
                                <p>Total Cases</p>
                            </div>
                            <div class="single_cases">
                                <h4>787</h4>
                                <p>Case Won</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('testmonial_area')
    <div class="testmonial_area testmonial_bg_1 overlay2">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="testmonial_active owl-carousel">
                        <div class="single_testmonial text-center">
                            <i class="flaticon-straight-quotes"></i>
                            <p>There are many variations of passages of Lorem Ipsum available, but the <br> majority have suffered alteration in some form, by injected humour, or <br> randomised words which don't look even slightly believable. </p>
                            <div class="author_info d-flex justify-content-center align-items-center">
                                <div class="thumb">
                                    <img src="{{ asset('frontEnd') }}/img/testmonial/smaill_thumb.png" alt="">
                                </div>
                                <span>- Millan Mirza</span>
                            </div>
                        </div>
                        <div class="single_testmonial text-center">
                            <i class="flaticon-straight-quotes"></i>
                            <p>There are many variations of passages of Lorem Ipsum available, but the <br> majority have suffered alteration in some form, by injected humour, or <br> randomised words which don't look even slightly believable. </p>
                            <div class="author_info d-flex justify-content-center align-items-center">
                                <div class="thumb">
                                    <img src="{{ asset('frontEnd') }}/img/testmonial/smaill_thumb.png" alt="">
                                </div>
                                <span>- Millan Mirza</span>
                            </div>
                        </div>
                        <div class="single_testmonial text-center">
                            <i class="flaticon-straight-quotes"></i>
                            <p>There are many variations of passages of Lorem Ipsum available, but the <br> majority have suffered alteration in some form, by injected humour, or <br> randomised words which don't look even slightly believable. </p>
                            <div class="author_info d-flex justify-content-center align-items-center">
                                <div class="thumb">
                                    <img src="{{ asset('frontEnd') }}/img/testmonial/smaill_thumb.png" alt="">
                                </div>
                                <span>- Millan Mirza</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('appointment_area')
    <div class="appointment_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-5 col-md-6 col-lg-6">
                    <div class="appiontment_thumb d-none d-lg-block">
                        <img src="{{ asset('frontEnd') }}/img/appointment/1.png" alt="">
                    </div>
                </div>
                <div class="col-xl-6 offset-xl-1 col-md-6 col-md-12 col-lg-6">
                    <div class="appointment_info">
                        <div class="opacity_icon d-none d-lg-block">
                            <i class="flaticon-balance"></i>
                        </div>
                        <h3>Make an Appointment</h3>
                        <p>Many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some.</p>
                        <form action="#">
                                <div class="row">
                                    <div class="col-xl-6 col-md-6">
                                            <input type="text" placeholder="Your Name">
                                    </div>
                                    <div class="col-xl-6 col-md-6">
                                            <input type="email" placeholder="Your Email">
                                    </div>
                                    <div class="col-xl-6 col-md-6">
                                            <input type="text" placeholder="Phone no.">
                                    </div>
                                    <div class="col-xl-6 col-md-6">
                                        <input id="datepicker" placeholder="Appointment date">
                                    </div>
                                    <div class="col-xl-12">
                                        <textarea placeholder="Message" ></textarea>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="appoinment_button">
                                            <button class="boxed-btn5 " type="submit" >Submit</button>
                                        </div>
                                    </div>
                                </div>
        
                            </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('frontEnd') }}/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="{{ asset('frontEnd') }}/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="{{ asset('frontEnd') }}/js/popper.min.js"></script>
    <script src="{{ asset('frontEnd') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('frontEnd') }}/js/owl.carousel.min.js"></script>
    <script src="{{ asset('frontEnd') }}/js/isotope.pkgd.min.js"></script>
    <script src="{{ asset('frontEnd') }}/js/ajax-form.js"></script>
    <script src="{{ asset('frontEnd') }}/js/waypoints.min.js"></script>
    <script src="{{ asset('frontEnd') }}/js/jquery.counterup.min.js"></script>
    <script src="{{ asset('frontEnd') }}/js/imagesloaded.pkgd.min.js"></script>
    <script src="{{ asset('frontEnd') }}/js/scrollIt.js"></script>
    <script src="{{ asset('frontEnd') }}/js/jquery.scrollUp.min.js"></script>
    <script src="{{ asset('frontEnd') }}/js/wow.min.js"></script>
    <script src="{{ asset('frontEnd') }}/js/nice-select.min.js"></script>
    <script src="{{ asset('frontEnd') }}/js/gijgo.min.js"></script>
    <script src="{{ asset('frontEnd') }}/js/jquery.slicknav.min.js"></script>
    <script src="{{ asset('frontEnd') }}/js/jquery.magnific-popup.min.js"></script>
    <script src="{{ asset('frontEnd') }}/js/plugins.js"></script>
@endsection
