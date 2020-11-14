@extends('frontView.master')

@section('title_area')
    Login
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
                                        <li><a href="#">Case<i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="{{ url('/case/submit') }}">Submit Case</a></li>
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

@section('login_area')
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
                        <h3>Login Here</h3>
                        <br>
                        <form method="POST" action="{{ route('login') }}">
                        @csrf
                            <div>
                                <div class="col-xl-6 col-md-6">
                                        <input type="email" name="email" placeholder="Your Email" required autocomplete="email">
                                </div>
                                <div class="col-xl-6 col-md-6">
                                        <input type="password" name="password" placeholder="Password" required autocomplete="password">
                                </div>
                                <div class="col-xl-12">
                                    <div class="appoinment_button">
                                        <button type="submit" class="boxed-btn5">
                                        {{ __('Login') }}
                                        </button>
                                    </div>
                                </div>
                                <br>
                                <center><a href="/register">Don't have an account?</a></center>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection