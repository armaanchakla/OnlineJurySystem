<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Online Jury System | @yield('title_area')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS here -->
    @yield('css')
</head>

<body>
    <!-- header-start -->
    @yield('header')
    <!-- header-end -->

    

    <!-- slider_area_start -->
    @yield('slider_area')
    <!-- slider_area_end -->

    <!-- bradcam_area_start  -->
    @yield('bradcam_area')
    <!-- bradcam_area_end  -->

    <!-- about_area _start  -->
    @yield('about_area')
    <!-- about_area _end -->

    <!-- practice_area_start -->
    @yield('practice_area')
    <!-- practice_area_end -->

    <!-- our_loyers-start  -->
    @yield('our_lawyer_area')
    <!-- our_loyers-end  -->

    <!-- testmonial_area_start  -->
    @yield('testmonial_area')
    <!-- testmonial_area_end  -->

    <!-- appointment_area_start  -->
    @yield('appointment_area')
    <!-- appointment_area_end  -->

    <!-- login_area_start  -->
    @yield('login_area')
    <!-- login_area_end  -->

    <!-- register_area_start  -->
    @yield('register_area')
    <!-- register_area_end  -->

    <!--================blog_area start =================-->
    @yield('blog_area')
    <!--================blog_area end =================-->

    <!-- ================ contact_section start ================= -->
    @yield('contact_section')
    <!-- ================ contact_section end ================= -->

    <!-- Start Sample Area -->
    @yield('sample_area')
    <!-- End Sample Area -->

    <!-- Start Button -->
    @yield('button')
    <!-- End Button -->

    <!-- Start Align Area -->
    @yield('align_area')
    <!-- End Align Area -->

    <!-- footer_start -->
    @include('include.footer')
    <!-- footer_end -->

    <!-- JS here -->
    @yield('js')

    <!--contact js-->
    @yield('contact_js')
</body>

</html>