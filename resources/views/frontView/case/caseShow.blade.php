@extends('frontView.master')

@section('title_area')
    Case Show
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
            
            <!-- <div class="section-top-border">
                <h4><b>{{ Session::get('caseUpdateMessage') }} </b></h4>
                <h4><b>{{ Session::get('caseDeleteMessage') }} </b></h4>
                <h3 class="mb-30">Submitted Case</h3>
                <div class="row">
                    <div class="col-lg-12">
                        <blockquote class="generic-blockquote">
                            Recently, the US Federal government banned online casinos from operating in America by making it illegal to transfer money to them through any US bank or payment system. As a result of this law, most of the popular online casino networks such as Party Gaming and PlayTech left the United States. Overnight, online casino players found themselves being chased by the Federal government. But, after a fortnight, the online casino industry came up with a solution and new online casinos started taking root. These began to operate under a different business umbrella, and by doing that, rendered the transfer of money to and from them legal. A major part of this was enlisting electronic banking systems that would accept this new clarification and start doing business with me. Listed in this article are the electronic banking.
                        </blockquote>
                    </div>
                </div>
            </div> -->


            <style>
                table, td, th {  
                  border: 1px solid #ddd;
                  text-align: left;
                }

                table {
                  border-collapse: collapse;
                  width: 100%;
                  background-color: #f9f9ff;
                }

                th{
                    background-color: #ff7433;
                    color: black; 
                }

                th, td {
                  padding: 15px;
                  
                }
                tr:hover {background-color:#f5f5f5;}
            </style>

            <div class="section-top-border">
                <h4><b>{{ Session::get('caseUpdateMessage') }} </b></h4>
                <h4><b>{{ Session::get('caseDeleteMessage') }} </b></h4>
                <center><h3 class="mb-30">Submitted Case</h3></center>
                <div class="row">
                    <div class="col-lg-12">
                        <blockquote class="generic-blockquote">
                        
                        <h6><b>Total Case:</b> {{ $caseShowData -> total() }}</h6>
                        <h6><b>Page number:</b> {{ $caseShowData -> currentpage() }}</h6>
                        <h6><b>Cases is in this page:</b> {{ $caseShowData -> firstItem() }} to {{ $caseShowData -> lastItem() }} number </h6>
                        <h6><b>Fixed case showing per page:</b> {{ $caseShowData -> perPage() }}</h6>
                        <h6><b>Total number of Case in present page:</b> {{ $caseShowData -> count() }}</h6>
                        
                        </blockquote>
                    </div>
                </div>
            </div>
            <hr>
            <center><h3 class="mb-30">Case Feed</h3></center>
            <table>
                <thead>
                    <tr>
                        <th>Serial</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Update</th>
                        <th>Remove</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $i=0;
                    ?>
                    @foreach($caseShowData as $singleCase)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $singleCase -> caseName }}</td>
                        <td>{{ $singleCase -> caseDescription }}</td>
                        <td>{{ ($singleCase -> caseStatus == 1)? 'General':'Non General' }}</td>
                        <td><a href="{{ url('/case/edit/'.$singleCase->id) }}">Edit</a></td>
                        <td><a href="{{ url('/case/delete/'.$singleCase->id) }}">Delete</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <br>
            {{ $caseShowData -> links() }}
            <br><br><br>

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