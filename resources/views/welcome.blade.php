<!DOCTYPE html>
<html lang="zxx">

    
<!-- Mirrored from templates.hibotheme.com/teli/default/index-6.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Feb 2024 10:56:45 GMT -->
<head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Link of CSS files -->
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/flaticon.')}}">
        <link rel="stylesheet" href="{{asset('assets/css/remixicon.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/odometer.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/fancybox.css">
        <!-- <link rel="stylesheet" href="assets/css/aos.css')}}"> -->
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/dark-theme.css')}}">
        <title>CynCare Health Ltd</title>
        <link rel="icon" type="image/png" href="{{asset('assets/img/favicon.png')}}">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300&family=Poppins:wght@900&family=Raleway:ital,wght@0,100..900;1,100..900&family=Wix+Madefor+Display:wght@500&display=swap" rel="stylesheet">
    </head>

    <body>

        <!--Preloader starts-->
        <div class="loader js-preloader">
            <div class="absCenter">
                <div class="loaderPill">
                    <div class="loaderPill-anim">
                        <div class="loaderPill-anim-bounce">
                            <div class="loaderPill-anim-flop">
                                <div class="loaderPill-pill"></div>
                            </div>
                        </div>
                    </div>
                    <div class="loaderPill-floor">
                        <div class="loaderPill-floor-shadow"></div>
                    </div>
                </div>
            </div>
        </div>
        <!--Preloader ends-->

        <!-- Theme Switcher Start -->
        <div class="switch-theme-mode">
            <label id="switch" class="switch">
                    <input type="checkbox" onchange="toggleTheme()" id="slider">
                    <span class="slider round"></span>
            </label>
        </div>
        <!-- Theme Switcher End -->

        <!-- Page Wrapper End -->
        <div class="page-wrapper">

            {{-- header included --}}
            @include('layouts.partials.header')

            {{-- yeild home extension --}}
            @yield('content')

            {{-- footer included --}}
            @include('layouts.partials.footer')


                
        </div>
        <!-- Page Wrapper End -->
        
        <!-- Back-to-top button Start -->
         <a href="javascript:void(0)" class="back-to-top bounce"><i class="ri-arrow-up-s-line"></i></a>
        <!-- Back-to-top button End -->

        <!-- Link of JS files -->
        <script data-cfasync="false" src="{{ asset('assets/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js') }}"></script><script src="assets/js/jquery.min.js"></script>
        <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('assets/js/form-validator.min.js')}}"></script>
        <script src="{{asset('assets/js/contact-form-script.js')}}"></script>
        <script src="{{asset('assets/js/aos.js')}}"></script>
        <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('assets/js/odometer.min.js')}}"></script>
        <script src="{{asset('assets/js/fancybox.js')}}"></script>
        <script src="{{asset('assets/js/jquery.appear.js')}}"></script>
        <script src="{{asset('assets/js/tweenmax.min.js')}}"></script>
        <script src="{{asset('assets/js/main.js')}}"></script>
    </body>


<!-- Mirrored from templates.hibotheme.com/teli/default/index-6.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Feb 2024 10:56:45 GMT -->
</html>