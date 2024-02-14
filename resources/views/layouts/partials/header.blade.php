  <!-- Header Section Start -->
  <header class="header-wrap style3">
    <div class="header-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="header-top-left">
                        <ul class="contact-info list-style">
                            <li>
                                <span><i class="ri-customer-service-fill"></i></span>
                                <p>Your Trusted Service Provider</p>
                            </li>
                            <li>
                                <span><i class="ri-phone-fill"></i></span>
                                <a href="tel:01273973957">01273973957&nbsp;</a>
                                <a href="tel:07359397227">07359397227</a>
                            </li>
                            {{-- <li>
                                <span><i class="ri-map-pin-fill"></i></span>
                                <p>2767 Sunrise Street, NY 1002, USA</p>
                            </li> --}}
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="header-top-right">
                        <div class="select-lang">
                            <i class="ri-earth-fill"></i>
                            <div class="navbar-option-item navbar-language dropdown language-option">
                                <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <span class="lang-name"></span>
                                </button>
                                <div class="dropdown-menu language-dropdown-menu">
                                    <a class="dropdown-item" href="#">
                                        <img src="assets/img/uk.png" alt="flag">
                                        Eng
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <img src="assets/img/china.png" alt="flag">
                                        简体中文
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <img src="assets/img/uae.png" alt="flag">
                                        العربيّة
                                    </a>
                                </div>
                            </div>
                        </div>
                        <ul class="social-profile list-style style1">
                            <li>
                                <a href="https://facebook.com/">
                                    <i class="ri-facebook-fill"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/">
                                    <i class="ri-twitter-fill"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://linkedin.com/">
                                    <i class="ri-linkedin-fill"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://pinterest.com/">
                                    <i class="ri-pinterest-line"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="header-bottom">
            <nav class="navbar navbar-expand-md navbar-light">
               <a class="navbar-brand" href="index.html">
                    <img class="logo-light" src="{{ asset('assets\img\about\CynCareLogo.png') }}" alt="logo">
                    <img class="logo-dark" src="{{ asset('assets\img\about\CynCareLogo.png') }}" alt="logo">     
                </a>
                <div class="headerLogotxt">
                    <a href="#">
                        CynCare 
                        <span style="color:#2490EB;"">Health Ltd</span>
                    </a>
                    <span style="font-style:italic;">.....exceptional healthcare always.....</span>
                </div>
                <div class="collapse navbar-collapse main-menu-wrap" id="navbarSupportedContent">
                    <div class="menu-close d-lg-none">
                        <a href="javascript:void(0)"> <i class="ri-close-line"></i></a>
                    </div>
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a href="/" class="nav-link active">
                                Home
                                <i class="ri-arrow-down-s-line"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="{{ route('pages.about') }}" class="nav-link">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('pages.missionVision') }}" class="nav-link">Our Mission and Vision</a>
                                </li>
                                {{-- <li class="nav-item">
                                    <a href="index-3.html" class="nav-link">Home Three</a>
                                </li>
                                <li class="nav-item">
                                    <a href="index-4.html" class="nav-link">Home Four</a>
                                </li>
                                <li class="nav-item">
                                    <a href="index-5.html" class="nav-link">Home Five</a>
                                </li>
                                <li class="nav-item">
                                    <a href="index-6.html" class="nav-link active">Home Six</a>
                                </li>
                                <li class="nav-item">
                                    <a href="index-7.html" class="nav-link">Home Seven</a>
                                </li> --}}
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                Services
                                <i class="ri-arrow-down-s-line"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="{{ route('service.domicilary') }}" class="nav-link">Domiciliary care</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('service.join') }}" class="nav-link">Join Us</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('service.staffing') }}" class="nav-link">Staffing</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('service.training') }}" class="nav-link">Training</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('service.cleaning') }}" class="nav-link">Cleaning Service</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('pages.contact') }}" class="nav-link">
                                Contact
                                {{-- <i class="ri-arrow-down-s-line"></i> --}}
                            </a>
                            {{-- <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="service-one.html" class="nav-link">Service One</a>
                                </li>
                                <li class="nav-item">
                                    <a href="service-two.html" class="nav-link">Service Two</a>
                                </li>
                                <li class="nav-item">
                                    <a href="service-details.html" class="nav-link">Single Service</a>
                                </li>
                            </ul> --}}
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                News
                                <i class="ri-arrow-down-s-line"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="{{ route('pages.faqs') }}" class="nav-link">FAQs</a>
                                </li>
                                {{-- <li class="nav-item">
                                    <a href="appointment.html" class="nav-link">Book Appointment</a>
                                </li>
                                <li class="nav-item">
                                    <a href="faq.html" class="nav-link">FAQ</a>
                                </li>
                                <li class="nav-item">
                                    <a href="pricing-plan.html" class="nav-link">Pricing Plan</a>
                                </li>
                                <li class="nav-item">
                                    <a href="testimonials.html" class="nav-link">Testimonials</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        User Pages
                                        <i class="ri-arrow-right-s-line"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="login.html" class="nav-link">Login</a>
                                        </li>
                                         <li class="nav-item">
                                            <a href="register.html" class="nav-link">Register</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="recover-password.html" class="nav-link">Recover Password</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="terms-of-service.html" class="nav-link">Terms of Service</a>
                                </li>
                                <li class="nav-item">
                                    <a href="privacy-policy.html" class="nav-link">Privacy Policy</a>
                                </li>
                                <li class="nav-item">
                                     <a href="error-404.html" class="nav-link">404 Error Page</a>
                                </li> --}}
                            </ul>
                        </li>
                        {{-- <li class="nav-item">
                            <a href="#" class="nav-link">
                                Blog
                                <i class="ri-arrow-down-s-line"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Blog Layout
                                        <i class="ri-arrow-right-s-line"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="blog-no-sidebar.html" class="nav-link">Blog Grid</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="blog-left-sidebar.html" class="nav-link">Blog Left Sidebar</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="blog-right-sidebar.html" class="nav-link">Blog Right Sidebar</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Single Blog
                                        <i class="ri-arrow-right-s-line"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="blog-details-no-sidebar.html" class="nav-link">Blog Details No Sidebar</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="blog-details-left-sidebar.html" class="nav-link">Blog Details Left Sidebar</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="blog-details-right-sidebar.html" class="nav-link">Blog Details Right Sidebar</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="contact.html" class="nav-link">Contact Us</a>
                        </li>
                        <li class="nav-item d-lg-none">
                            <a href="appointment.html" class="nav-link btn style1">Book Appointment</a>
                        </li> --}}
                    </ul>
                    <div class="other-options md-none">
                        <div class="option-item">
                            <button class="searchbtn"><i class="ri-search-line"></i></button>
                        </div>
                        <div class="option-item">
                            <a href="appointment.html" class="btn style1">Book Appointment</a>
                        </div>
                    </div>
                </div>
            </nav>
            <div class="search-area">
                <input type="search" placeholder="Search Here..">
                <button type="submit"><i class="ri-search-line"></i></button>
            </div>
            <div class="mobile-bar-wrap">
                <button class="searchbtn d-lg-none"><i class="ri-search-line"></i></button>
                <div class="mobile-menu d-lg-none">
                    <a href="javascript:void(0)"><i class="ri-menu-line"></i></a>
                </div>
            </div>
        </div>
    </div>
</header>  
<!-- Header Section End -->