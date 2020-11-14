@extends('frontView.master')

@section('title_area')
    Profile
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

@section('align_area')
    <div class="whole-wrap">
        <div class="container box_1170">
            
            <div class="section-top-border">
                <div class="row">

                    <div class="col-md-3">
                        <center>
                        <img src="{{ asset('uploads') }}/avatars/{{ $user->avatar}}" style="width: 200px; height: 200px; border-radius: 50%" alt="avatar" class="img-fluid">
                        <hr>
                        {{ Form::open(['url' => '/profile','method' => 'post', 'enctype' => 'multipart/form-data']) }}
                            <h5><input type="file" name="avatar"></h5>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <hr>
                        
                            <input type="submit" value="Upload Image" name="avatarSubmit" class="boxed-btn5">
                        
                        {{ Form::close() }}
                        </center>
                    </div>
                    
                    <div class="col-md-9 mt-sm-20">
                        <h3 class="mb-30">{{ Auth::user()->name }}</h3>
                        {{ Form::open(['url' => '/profile','method' => 'post', 'role' => 'form']) }}
                            <h5>Biography:</h5>
                            <textarea rows="8" cols="100" name="bioDescription" placeholder="Add Biography"></textarea>
                            <center>
                                <div class="col-xl-12">
                                    <div class="appoinment_button">
                                        <button class="boxed-btn5" type="submit" value="submit">Edit Bio</button>
                                    </div>
                                    <br>
                                    <h6>{{ Session::get('bioSubmitMessage') }}</h6>
                                </div>
                            </center>
                        {{ Form::close() }}
                    </div>
                    
                </div>
            </div>

            <hr>

            <div class="section-top-border">
                <h3 class="mb-30">Info</h3>
                <div class="row">
                    <div class="col-lg-12">
                        <blockquote class="generic-blockquote">
                            “Recently, the US Federal government banned online casinos from operating in America by making it illegal to transfer money to them through any US bank or payment system. As a result of this law, most of the popular online casino networks such as Party Gaming and PlayTech left the United States. Overnight, online casino players found themselves being chased by the Federal government. But, after a fortnight, the online casino industry came up with a solution and new online casinos started taking root. These began to operate under a different business umbrella, and by doing that, rendered the transfer of money to and from them legal. A major  part of this was enlisting electronic banking systems that would accept this new clarification and start doing business with me. Listed in this article are the electronic banking systems that accept players from the United States that wish to play in online casinos.”
                        </blockquote>
                    </div>
                </div>
            </div>
            
            <div class="section-top-border">
                <h3 class="mb-30">Definition</h3>
                <div class="row">
                    <div class="col-md-4">
                        <div class="single-defination">
                            <h4 class="mb-20">Definition 01</h4>
                            <p>Recently, the US Federal government banned online casinos from operating in America by
                                making it illegal to
                                transfer money to them through any US bank or payment system. As a result of this law,
                                most of the popular
                                online casino networks</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single-defination">
                            <h4 class="mb-20">Definition 02</h4>
                            <p>Recently, the US Federal government banned online casinos from operating in America by
                                making it illegal to
                                transfer money to them through any US bank or payment system. As a result of this law,
                                most of the popular
                                online casino networks</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single-defination">
                            <h4 class="mb-20">Definition 03</h4>
                            <p>Recently, the US Federal government banned online casinos from operating in America by
                                making it illegal to
                                transfer money to them through any US bank or payment system. As a result of this law,
                                most of the popular
                                online casino networks</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section-top-border">
                <h3 class="mb-30">Table</h3>
                <div class="progress-table-wrap">
                    <div class="progress-table">
                        <div class="table-head">
                            <div class="serial">#</div>
                            <div class="country">Countries</div>
                            <div class="visit">Visits</div>
                            <div class="percentage">Percentages</div>
                        </div>
                        <div class="table-row">
                            <div class="serial">01</div>
                            <div class="country"> <img src="{{ asset('frontEnd') }}/img/elements/f1.jpg" alt="flag">Canada</div>
                            <div class="visit">645032</div>
                            <div class="percentage">
                                <div class="progress">
                                    <div class="progress-bar color-1" role="progressbar" style="width: 80%"
                                        aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="table-row">
                            <div class="serial">02</div>
                            <div class="country"> <img src="{{ asset('frontEnd') }}/img/elements/f2.jpg" alt="flag">Canada</div>
                            <div class="visit">645032</div>
                            <div class="percentage">
                                <div class="progress">
                                    <div class="progress-bar color-2" role="progressbar" style="width: 30%"
                                        aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="table-row">
                            <div class="serial">03</div>
                            <div class="country"> <img src="{{ asset('frontEnd') }}/img/elements/f3.jpg" alt="flag">Canada</div>
                            <div class="visit">645032</div>
                            <div class="percentage">
                                <div class="progress">
                                    <div class="progress-bar color-3" role="progressbar" style="width: 55%"
                                        aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="table-row">
                            <div class="serial">04</div>
                            <div class="country"> <img src="{{ asset('frontEnd') }}/img/elements/f4.jpg" alt="flag">Canada</div>
                            <div class="visit">645032</div>
                            <div class="percentage">
                                <div class="progress">
                                    <div class="progress-bar color-4" role="progressbar" style="width: 60%"
                                        aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="table-row">
                            <div class="serial">05</div>
                            <div class="country"> <img src="{{ asset('frontEnd') }}/img/elements/f5.jpg" alt="flag">Canada</div>
                            <div class="visit">645032</div>
                            <div class="percentage">
                                <div class="progress">
                                    <div class="progress-bar color-5" role="progressbar" style="width: 40%"
                                        aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="table-row">
                            <div class="serial">06</div>
                            <div class="country"> <img src="{{ asset('frontEnd') }}/img/elements/f6.jpg" alt="flag">Canada</div>
                            <div class="visit">645032</div>
                            <div class="percentage">
                                <div class="progress">
                                    <div class="progress-bar color-6" role="progressbar" style="width: 70%"
                                        aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="table-row">
                            <div class="serial">07</div>
                            <div class="country"> <img src="{{ asset('frontEnd') }}/img/elements/f7.jpg" alt="flag">Canada</div>
                            <div class="visit">645032</div>
                            <div class="percentage">
                                <div class="progress">
                                    <div class="progress-bar color-7" role="progressbar" style="width: 30%"
                                        aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="table-row">
                            <div class="serial">08</div>
                            <div class="country"> <img src="{{ asset('frontEnd') }}/img/elements/f8.jpg" alt="flag">Canada</div>
                            <div class="visit">645032</div>
                            <div class="percentage">
                                <div class="progress">
                                    <div class="progress-bar color-8" role="progressbar" style="width: 60%"
                                        aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="section-top-border">
                <h3>Image Gallery</h3>
                <div class="row gallery-item">
                    <div class="col-md-4">
                        <a href="{{ asset('frontEnd') }}/img/elements/g1.jpg" class="img-pop-up">
                            <div class="single-gallery-image" style="background: url({{ asset('frontEnd') }}/img/elements/g1.jpg);"></div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="{{ asset('frontEnd') }}/img/elements/g2.jpg" class="img-pop-up">
                            <div class="single-gallery-image" style="background: url({{ asset('frontEnd') }}/img/elements/g2.jpg);"></div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="{{ asset('frontEnd') }}/img/elements/g3.jpg" class="img-pop-up">
                            <div class="single-gallery-image" style="background: url({{ asset('frontEnd') }}/img/elements/g3.jpg);"></div>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a href="{{ asset('frontEnd') }}/img/elements/g4.jpg" class="img-pop-up">
                            <div class="single-gallery-image" style="background: url({{ asset('frontEnd') }}/img/elements/g4.jpg);"></div>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a href="{{ asset('frontEnd') }}/img/elements/g5.jpg" class="img-pop-up">
                            <div class="single-gallery-image" style="background: url({{ asset('frontEnd') }}/img/elements/g5.jpg);"></div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="{{ asset('frontEnd') }}/img/elements/g6.jpg" class="img-pop-up">
                            <div class="single-gallery-image" style="background: url({{ asset('frontEnd') }}/img/elements/g6.jpg);"></div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="{{ asset('frontEnd') }}/img/elements/g7.jpg" class="img-pop-up">
                            <div class="single-gallery-image" style="background: url({{ asset('frontEnd') }}/img/elements/g7.jpg);"></div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="{{ asset('frontEnd') }}/img/elements/g8.jpg" class="img-pop-up">
                            <div class="single-gallery-image" style="background: url({{ asset('frontEnd') }}/img/elements/g8.jpg);"></div>
                        </a>
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