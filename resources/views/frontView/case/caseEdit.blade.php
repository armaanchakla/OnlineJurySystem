@extends('frontView.master')

@section('title_area')
    Case Edit
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
                                        <li><a href="#">Case<i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="{{ url('/case/show') }}">Show All Case</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="/profile">Hello, {{ Auth::user()->name }}</a></li>
                                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">Logout</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                        </form>
                                        </li>
                                        
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
                        <h3>Edit Case Here</h3>
                        <h2>{{ Session::get('caseSubmitMessage') }}</h2>
                        <br>
                        	{{ Form::open(['url' => '/case/edit','method' => 'post', 'role' => 'form', 'name' => 'editForm']) }}
                                <div class="row">
                                    <div class="col-xl-12">
                                            <input type="text" name="caseName" value="{{ $caseEditData -> caseName }}" placeholder="Title">
                                    </div>
                                    <div class="col-xl-12">
                                        <textarea name="caseDescription"  placeholder="Description" >{{ $caseEditData -> caseDescription }}</textarea>
                                    </div>
                                    <div class="form-select" id="default-select">
                                    	<center>
                                    	<label><b>Select Case Type</b></label><br>
                                    	<select name="caseStatus">
                                    		<option value='1'>General</option>
                                    		<option value='0'>Non General</option>
                                    	</select>
                                    	</center>
                                    </div>

                                    <input type="hidden" name="caseId" value='{{ $caseEditData -> id }}'>
                                    
                                    <br><br><br><br>
                                    
                                    <div class="col-xl-12">
                                        <div class="appoinment_button">
                                            <button class="boxed-btn5 " type="submit" value="submit">Submit</button>
                                        </div>
                                    </div>
                                </div>
        					{{ Form::close() }}
                    </div>
                    <script type="text/javascript">
                    	document.forms['editForm'].elements['caseStatus'].value='{{ $caseEditData -> caseStatus }}'
                    </script>

                </div>
            </div>
        </div>
    </div>
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