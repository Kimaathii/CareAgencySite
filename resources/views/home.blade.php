        @extends('welcome')
        @section('content')
       
            <!-- Hero Section Start -->
            <section class="hero-wrap style6">
                <div class="hero-slider-three owl-carousel">
                    <div class="hero-slide-item bg-one bg-f">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="hero-content"  data-speed="0.10" data-revert="true">
                                        <h1>Domiciliary care</h1>
                                        <p>Our domiciliary care team are here to support you in your home 24/7 around the clock. We tailor our services to meet your needs and wishes.</p>
                                        <div class="hero-btn">
                                            <a href="{{ route('service.domicilary') }}" class="btn style1">Read More</a>
                                            {{-- <a class="play-video" data-fancybox="" href="https://www.youtube.com/watch?v=UNSSuTSQI9I">
                                                <span class="video-icon">
                                                    <i class="ri-play-fill"></i>
                                                </span>
                                               <span> Watch Video</span>
                                            </a> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hero-slide-item bg-two bg-f">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="hero-content"  data-speed="0.10" data-revert="true">
                                        <h1>Staffing</h1>
                                        <p>Need an emergency cover, or a long term rolling cover? we've got you covered! We have well-trained staff to cover all of your shift problems, anytime and any-day. </p>
                                        <div class="hero-btn">
                                            <a href="{{ route('service.staffing') }}" class="btn style1">Read More</a>
                                            {{-- <a class="play-video" data-fancybox="" href="https://www.youtube.com/watch?v=UNSSuTSQI9I">
                                                <span class="video-icon">
                                                    <i class="ri-play-fill"></i>
                                                </span>
                                               <span> Watch Video</span>
                                            </a> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hero-slide-item bg-three bg-f">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="hero-content"  data-speed="0.10" data-revert="true">
                                        <h1>Join Us</h1>
                                        <p>At CynCare Health Limited, we believe in making a difference in people's lives every day. As a leading provider of healthcare services in our community, we are dedicated to delivering exceptional care with compassion, integrity, and professionalism.</p>
                                        <div class="hero-btn">
                                            <a href="{{ route('service.join') }}" class="btn style1">Read More</a>
                                            {{-- <a class="play-video" data-fancybox="" href="https://www.youtube.com/watch?v=UNSSuTSQI9I">
                                                <span class="video-icon">
                                                    <i class="ri-play-fill"></i>
                                                </span>
                                               <span> Watch Video</span>
                                            </a> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Hero Section End -->
            <section class="appointment-wrap style2 bg-blue pb-100">
                <div class="container">
                    <div class="row gx-5">
                        <div class="">
                            <div class="appointment-content pt-100" style="display: flex; justify-content:space-evenly">
                                <div class="content-title style2" >
                                    {{-- <span>Best Solutions</span> --}}
                                    <h2>Here For Recruitment</h2>
                                    {{-- <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iste cupiditate sit debitis, aut, perferendis praesentium alias, asperiores similique veniam vitae veritatis.</p> --}}
                                </div>
                                <ul class="content-feature-list list-style">
                                    <li><a href="#"><i class="ri-checkbox-circle-line"></i>Application Form</a></li>
                                    <li><a href="#"><i class="ri-checkbox-circle-line"></i>Timesheet</a></li>
                                    {{-- <li><i class="ri-checkbox-circle-line"></i>Discount On Treatment Fees</li>
                                    <li><i class="ri-checkbox-circle-line"></i>Multi-Functional Hospital</li>
                                    <li><i class="ri-checkbox-circle-line"></i>20+ Years Of Experience</li>
                                    <li><i class="ri-checkbox-circle-line"></i>Top Professional Specialist</li> --}}
                                </ul>
                            </div>
                        </div>
                        {{-- <div class="col-lg-6">
                            <div class="promo-bg bg-f">
                                <a class="play-now" data-fancybox="" href="https://www.youtube.com/watch?v=UNSSuTSQI9I">
                                    <i class="ri-play-fill"></i>
                                    <span class="ripple"></span>
                                </a>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </section>
              <!-- Partner Section Start -->
              <div class="container pb-100">
                <div class="headerLogotxt">
                <h2 style="font-size:30px;" class="">We are a fully regulated&nbsp; service</h2>
                <span style="font-size:16px;" class="">Cyncare Health are registered with the Care Quality Commission&nbsp;</span>
                </div>
                <div class="partner-slider-one owl-carousel">
                    <div class="partner-item">
                        <img src="{{ asset('assets\img\regulatedServices\alzheimers.png') }}" alt="Image" >
                    </div>
                    <div class="partner-item">
                        <img src="{{ asset('assets\img\regulatedServices\AoHT-Member-Logo.png') }}" alt="Image">
                    </div>
                    <div class="partner-item">
                        <img src="{{ asset('assets\img\regulatedServices\badge-white (1).png') }}" alt="Image">
                    </div>
                    <div class="partner-item">
                        <img src="{{ asset('assets\img\regulatedServices\BSBClogo.png') }}" alt="Image">
                    </div>
                    <div class="partner-item">
                        <img src="{{ asset('assets\img\regulatedServices\careManager.png') }}" alt="Image">
                    </div>
                    <div class="partner-item">
                        <img src="{{ asset('assets\img\regulatedServices\Cyber-Essentials-Logo-v2.png') }}" alt="Image">
                    </div>
             
                    <div class="partner-item">
                        <img src="{{ asset('assets\img\regulatedServices\homecare.png') }}" alt="Image">
                    </div>
                    <div class="partner-item">
                        <img src="{{ asset('assets\img\regulatedServices\information-commissioners-office-ico-logo.png') }}" alt="Image">
                    </div>
                    <div class="partner-item">
                        <img src="{{ asset('assets\img\regulatedServices\Regulated-by-PURPLE.png') }}" alt="Image">
                    </div>
                </div>
            </div>
            <!-- Partner Section End -->

            <section class="blog-wrap pt-100 pb-75">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 offset-xl-3  col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                            <div class="section-title style1 text-center mb-40">
                                {{-- <span>Join Us</span> --}}
                                <h2>Join Us</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-xl-4 col-lg-6 col-md-6 aos-init aos-animate" data-aos="fade-left" data-aos-duration="1200" data-aos-delay="200">
                            <div class="blog-card style2">
                                <div id="blog-img">
                                    {{-- <img src="assets/img/blog/blog-5.jpg" alt="Image"> --}}
                                    <div class="svgstyle">
                                    <svg preserveAspectRatio="xMidYMid meet" data-bbox="31.075 21.391 138.032 158.809" xmlns="http://www.w3.org/2000/svg"  viewBox="31.075 21.391 138.032 158.809" data-type="color" role="presentation" aria-hidden="true" aria-label="">
                                        <defs>
                                            <style>#comp-imlofp3r svg [data-color="1"] {fill: #FFFFFF;}</style>
                                        </defs>
                                        <g>
                                            <path fill="#FFFFFF" d="M53 84.3c.8.3 1.7.2 2.4-.2.1-.1 11.2-7.5 15-13.3 17.7.5 35.5-4.3 50.6-13.7 1.1 1.3 2.9 3.3 4.4 5.1 5.9 7 14.8 17.5 21.4 22.1.5.3 1 .5 1.5.5.3 0 .6-.1 1-.2.8-.3 1.4-1 1.6-1.9 3.1-14.1 2.2-25.4-2.6-33.8-4.3-7.5-10.9-10.9-15.7-12.5-2.7-.9-4.6-1.3-6.1-1.4-4.3-7.3-11.4-11.9-20.6-13.2-7.6-1.1-14.6.3-17.2.9-12.8 3.1-24.1 11.2-31 22.1-7.1 11.2-9.4 24.8-6.4 37.6.3.9.9 1.6 1.7 1.9zm73.9-44.7c-.1.1-.2.2-.3.2.1 0 .2-.1.3-.2zm.3-.4c-.1.1-.1.2-.2.3.1-.1.1-.2.2-.3zm-.7.7c-.1.1-.3.2-.4.2.2 0 .3-.1.4-.2zm-64.2 7.8c6.2-9.8 16.3-17 27.8-19.8 4-1 24.4-5 32.6 11 .5.9 1.4 1.5 2.4 1.4h.2c1 0 10.2.7 16.4 8.4 5.3 6.5 6.9 16.1 4.9 28.6-5.6-5-12.3-13-17.1-18.6-4.2-4.9-5.7-6.7-6.8-7.4-.4-.3-.9-.4-1.4-.4-.5 0-1 .1-1.5.4-15 9.8-33 14.7-50.9 13.9-1.1 0-2.2.6-2.6 1.7-1 2.5-6.6 7.2-10.6 10.2-1.2-9.9 1.1-20.7 6.6-29.4z" data-color="1"></path>
                                            <path fill="#FFFFFF" d="M69 151.1c-1.4 0-2.7 1.2-2.7 2.6 0 3.8-3.8 8.8-7.4 12.1-3.4 3.1-5.9 4.1-10.5 5.7-4.9 1.6-9.9 2.8-15 3.4-1.5.2-2.5 1.5-2.3 3 .2 1.3 1.3 2.3 2.6 2.3h.3c5.5-.7 10.9-1.9 16.1-3.7 4.7-1.6 8.1-2.9 12.4-6.7 2.1-1.9 9.1-8.7 9.2-16-.1-1.5-1.3-2.7-2.7-2.7z" data-color="1"></path>
                                            <path fill="#FFFFFF" d="M166.7 174.9c-5.1-.6-10.2-1.8-15-3.4-4.6-1.5-7.1-2.6-10.5-5.7-3.7-3.3-7.4-8.3-7.4-12.1 0-1.5-1.2-2.7-2.7-2.6-1.5 0-2.6 1.2-2.6 2.7.1 7.3 7.1 14.1 9.2 16 4.3 3.8 7.7 5.2 12.4 6.7 5.2 1.8 10.6 3 16.1 3.7h.3c1.3 0 2.5-1 2.6-2.3.1-1.5-.9-2.9-2.4-3z" data-color="1"></path>
                                            <path fill="#FFFFFF" d="M134.7 143.1c0-.1 0-.1 0 0 3.7-11.2 22.8-32.5 23-32.7l.1-.1c.2-.3 5.4-6.6 3.7-12.9-1-3.7-4-6.4-9-8.1-.1 0-.2-.1-.3-.1-1.4-.4-6.3-1.2-11.6 3.7-2.5 2.4-5.3 5.8-8.7 10.4-23-12.1-53.4-3.3-61.3-.7-1.1-1.5-2.1-2.9-3-4.1-1.5-2.2-2.9-4.1-4.2-5.6-4.4-4.8-9.4-5-12.6-3.6h-.1c-5.2 2.4-8.3 5.6-9 9.6-1.1 5.8 3.4 10.8 4 11.4.9 1 18.4 21 22 31.9.1.4.3.7.6 1 .1.2.3.4.5.6.3.3 8.2 6.8 20.1 10.2 3.9 1.1 8.6 1.9 13.7 1.9 9.3 0 20.3-2.8 31.3-11.6.4-.3.7-.7.8-1.2zm9.5-46.3c3.3-3.1 6-2.6 6.6-2.5 3.1 1.1 5 2.6 5.5 4.5.8 3-1.6 6.8-2.6 8-1 1.1-13.3 14.9-20.2 26.5l1.6-25.6c3.7-4.7 6.7-8.6 9.1-10.9zm-94.6 10s-.1-.1 0 0c-.9-1-3.2-4.1-2.7-6.9.4-2.2 2.4-4.1 5.9-5.7h.1c.7-.3 3.4-1.1 6.5 2.3 1.1 1.2 2.3 2.9 3.8 5.1 1 1.4 2.1 3 3.4 4.7v.5l1.2 23.9c-6.9-11.1-17.6-23.2-18.2-23.9zm24 34.1l-.4-8.8c2.3.4 5.7 1 9.6 1 1.4 0 2.6-1.2 2.7-2.6 0-1.5-1.1-2.7-2.6-2.7-4.4-.1-8.1-.8-9.9-1.2l-.4-7.7 14.6.3h.1c1.4 0 2.6-1.2 2.7-2.6 0-1.5-1.1-2.7-2.6-2.7l-15-.3-.3-5.9c6.8-2.3 36.6-11 57.8.5l-2.2 34.2c-24.9 17.5-48.3 2.8-54.1-1.5z" data-color="1"></path>
                                        </g>
                                    </svg>
                                </div>
                                </div>
                                <div class="blog-info">
                                    
                                    <h3><a href="{{ route('service.join') }}">Homecare Support Assistant</a></h3>
                                    <p>Homecare Assistants  provide high quality care to service users in their homes. Care tailored to their needs and wishes.</p>
                                    <a href="{{ route('service.join') }}" class="link style2" style="margin-top:50px">Read More<i class="flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 aos-init aos-animate" data-aos="fade-left" data-aos-duration="1200" data-aos-delay="300">
                            <div class="blog-card style2">
                                <div id="blog-img">
                                    <div class="svgstyle">
                                    {{-- <img src="assets/img/blog/blog-6.jpg" alt="Image"> --}}
                                    <svg preserveAspectRatio="xMidYMid meet" data-bbox="37.5 14.5 125 170.9" xmlns="http://www.w3.org/2000/svg" viewBox="37.5 14.5 125 170.9" role="presentation" aria-hidden="true">
                                        <defs>
                                            <style>#comp-imlofp3r svg [data-color="1"] {fill: #FFFFFF;}</style>
                                        </defs>
                                        <g>
                                            <path fill="#FFFFFF" d="M148 98.8c-7.6-6.4-17.8-10.6-30.4-12.5 12-6.4 20.2-19.1 20.2-33.7 0-21-17-38.1-37.8-38.1S62.2 31.6 62.2 52.6c0 14.7 8.3 27.4 20.4 33.8-12.5 2.1-22.9 6.5-30.7 13.2-9.2 7.9-14.4 18.8-14.4 30.1V170c0 1.7 1 6 9.8 9.5 9.9 3.9 27.2 5.9 51.2 5.9 25.3 0 43.4-2 53.8-5.9 8.9-3.3 10.2-7.4 10.2-9.6v-39.6c0-8.8-2.5-21.5-14.5-31.5zM70.4 52.6c0-16.4 13.3-29.8 29.6-29.8s29.6 13.4 29.6 29.8-13.3 29.8-29.6 29.8S70.4 69 70.4 52.6zm83.9 116.5c-1.4 1.4-10.5 8.1-55.8 8.1-43 0-51.5-6.7-52.7-8v-39.6c0-18.1 16.8-36.3 54.3-36.3 19 0 33.4 4 42.8 11.8 9.5 8 11.5 18.2 11.5 25.3v38.7z"></path>
                                        </g>
                                    </svg>
                                    
                                    </div>
                                </div>
                                <div class="blog-info">
                                    
                                    <h3><a href="{{ route('service.join') }}">Healthcare Assistant</a></h3>
                                    <p>Healthcare Assistants (HCA) provide high quality care for patients in Hospital, residential care/ Nursing Homes. monitoring, observing and recording patient's temperature, weight etc.</p>
                                    <a href="{{ route('service.join') }}" class="link style2" style="margin-top:25px">Read More<i class="flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 aos-init aos-animate" data-aos="fade-left" data-aos-duration="1200" data-aos-delay="400">
                            <div class="blog-card style2">
                                <div id="blog-img">
                                    <div class="svgstyle">
                                        <svg preserveAspectRatio="xMidYMid meet" data-bbox="15 15 170 170" viewBox="15 15 170 170" height="200" width="200" xmlns="http://www.w3.org/2000/svg" data-type="color" role="presentation" aria-hidden="true" aria-label="">
                                            <defs>
                                                <style>#comp-imm6az2x svg [data-color="1"] {fill: #FFFFFF;}</style>
                                            </defs>
                                            <g>
                                                <path fill="#FFFFFF" d="M99.7 93.6c-11.2 0-20.5-6.8-20.7-15.3v-29c0-.2.1-.3.3-.4l3.7-2c.1 0 .2-.1.2-.1l33 .3c.1 0 .1 0 .2.1L120 49c.2.1.3.3.3.4v29c-.1 8.4-9.4 15.2-20.6 15.2zM80 78.2s.1 0 0 0c.2 8 9 14.5 19.7 14.5s19.5-6.5 19.7-14.4V49.6l-3.2-1.6-32.8-.3-3.4 1.9v28.6z"></path>
                                                <path fill="#FFFFFF" d="M149.3 140.7c-.3 0-.5-.2-.5-.5-1.6-19-9.7-30.5-16.3-36.9-6.1-5.9-11.9-8.5-13.5-9.2l-9.1 19c-.1.2-.3.3-.4.3l-20.7.3c-.2 0-.4-.1-.5-.3-2.4-5.8-6.8-16.5-7.8-18.6-28.7 8.3-29.3 45-29.3 45.4 0 .3-.2.5-.5.5s-.5-.2-.5-.5c0-.4.6-38.2 30.4-46.4.2-.1.5 0 .6.3.2.4 6.6 15.8 7.8 18.7l20-.2 9.2-19.1c.1-.2.4-.3.6-.3.3.1 27.7 10.1 30.8 47 .2.2 0 .5-.3.5z"></path>
                                                <path fill="#FFFFFF" d="M129.6 151.5H70.7c-.3 0-.5-.2-.5-.5s.2-.5.5-.5h58.9c.3 0 .5.2.5.5s-.2.5-.5.5z"></path>
                                                <path fill="#FFFFFF" d="M99.1 151.6c-.3 0-.5-.2-.5-.5V122c0-.3.2-.5.5-.5s.5.2.5.5v29.1c0 .2-.2.5-.5.5z"></path>
                                                <path fill="#FFFFFF" d="M130.4 131.4H112c-.3 0-.5-.2-.5-.5v-10.6c0-.3.2-.5.5-.5h18.4c.3 0 .5.2.5.5v10.6c0 .2-.2.5-.5.5zm-17.9-1h17.4v-9.6h-17.4v9.6z"></path>
                                                <path fill="#FFFFFF" d="M122.5 118.3h-1.7c-.3 0-.5-.2-.5-.5v-5.3c0-.3.2-.5.5-.5h1.7c.3 0 .5.2.5.5v5.3c-.1.3-.3.5-.5.5zm-1.2-1h.7V113h-.7v4.3z"></path>
                                                <path fill="#FFFFFF" d="M116 64H83.4c-.3 0-.5-.2-.5-.5s.2-.5.5-.5H116c.3 0 .5.2.5.5s-.2.5-.5.5z"></path>
                                                <path fill="#FFFFFF" d="M99.5 60.7c-.3 0-.5-.2-.5-.5v-7.7c0-.3.2-.5.5-.5s.5.2.5.5v7.7c0 .3-.3.5-.5.5z"></path>
                                                <path fill="#FFFFFF" d="M103.3 56.9h-7.7c-.3 0-.5-.2-.5-.5s.2-.5.5-.5h7.7c.3 0 .5.2.5.5 0 .2-.2.5-.5.5z"></path>
                                                <path fill="#FFFFFF" d="M100 185c-46.9 0-85-38.1-85-85s38.1-85 85-85 85 38.1 85 85-38.1 85-85 85zm0-169.5c-46.6 0-84.5 37.9-84.5 84.5s37.9 84.5 84.5 84.5 84.5-37.9 84.5-84.5-37.9-84.5-84.5-84.5z"></path>
                                                <path fill="#FFFFFF" d="M100.5 178.2c-43.4 0-78.7-35.3-78.7-78.7s35.3-78.7 78.7-78.7 78.7 35.3 78.7 78.7-35.3 78.7-78.7 78.7zm0-156.4c-42.8 0-77.7 34.8-77.7 77.7s34.8 77.7 77.7 77.7 77.7-34.8 77.7-77.7-34..8-77.7-77.7z"></path>
                                            </g>
                                        
                                        </svg>
                                    </div>
                                </div>
                                <div class="blog-info">
                                   
                                    <h3><a href="{{ route('service.join') }}">Nurses</a></h3>
                                    <p>Nurses provide medical and nursing care for their patient, be it in the homes of their patient, nursing homes or hospital. Nurses monitor the conditions of their patient, providing compassionate care and improving the well-being of their patient.</p>
                                    <a href="{{ route('service.join') }}" class="link style2">Read More<i class="flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- About Section Start -->
            {{-- <section class="about-wrap style2 ptb-100">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2 col-md-10 offset-md-1" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
                            <div class="section-title style1 text-center mb-40">
                                <span>About Us</span>
                                <h2>Our Best Services &amp; Poplular Treatment Here</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row gx-5 align-items-center">
                        <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="200">
                            <div class="about-img-wrap">
                                <img src="assets/img/about/about-img-4.jpg" alt="Image" class="about-img-one">
                                <img src="assets/img/about/about-img-5.jpg" alt="Image" class="about-img-two">
                                <div class="about-promo-box">
                                    <span class="promo-icon"><i class="flaticon-medical-operation"></i></span>
                                    <h2>700+ <span>Labratory Experts</span></h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1200" data-aos-delay="200">
                            <div class="about-content">
                                <div class="content-title style1">
                                    <p>There are many variations of passages of Lorem Ipsum amets avoilble but majority have suffered alteration in some form, by injected humour or randomise words which don't sure amet consec tetur adicing.</p>
                                </div>
                                <div class="feature-item-wrap">
                                    <div class="feature-item">
                                        <div class="feature-icon">
                                            <i class="ri-check-line"></i>
                                        </div>
                                        <div class="feature-text">
                                            <h3>Mental health Solutions</h3>
                                            <p>Vestibulum ac diam sit amet quam vehicula elemen tum sed sit amet dui praesent sapien pellen tesque injected humour.</p>
                                        </div>
                                    </div>
                                    <div class="feature-item">
                                        <div class="feature-icon">
                                            <i class="ri-check-line"></i>
                                        </div>
                                        <div class="feature-text">
                                            <h3>Rapid Patient Improvement</h3>
                                            <p>Vestibulum ac diam sit amet quam vehicula elemen tum sed sit amet dui praesent sapien pellen tesque injected humour.</p>
                                        </div>
                                    </div>
                                    <div class="feature-item">
                                        <div class="feature-icon">
                                            <i class="ri-check-line"></i>
                                        </div>
                                        <div class="feature-text">
                                            <h3>World Class Treatment</h3>
                                            <p>Vestibulum ac diam sit amet quam vehicula elemen tum sed sit amet dui praesent sapien pellen tesque injected humour.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> --}}
            <!-- About Section End -->

            <!-- Promo Section Start -->
            {{-- <div class="promo-wrap style3 pb-100">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-4 col-lg-6 col-md-6"  data-aos="fade-right" data-aos-duration="1200" data-aos-delay="200">
                            <div class="promo-card style3">
                                <div class="promo-icon">
                                    <i class="flaticon-admision-form"></i>
                                </div>
                                <div class="promo-info">
                                    <h3>Contact Our Doctor</h3>
                                    <p>There are many variations of passages of words are valid.</p>
                                    <a href="service-one.html" class="link style2">View All Services <i class="flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6"  data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
                            <div class="promo-card style3">
                                <div class="promo-icon">
                                    <i class="flaticon-aid-man"></i>
                                </div>
                                <div class="promo-info">
                                    <h3>Need Family Health</h3>
                                    <p>There are many variations of passages of words are valid.</p>
                                    <a href="appointment.html" class="link style2">Book Appointment <i class="flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6"  data-aos="fade-left" data-aos-duration="1200" data-aos-delay="200">
                            <div class="promo-card style3">
                                <div class="promo-icon">
                                    <i class="flaticon-support"></i>
                                </div>
                                <div class="promo-info">
                                    <h3>24 Hours Service</h3>
                                    <p>There are many variations of passages of words are valid.</p>
                                    <a href="register.html" class="link style2">Provide Registration<i class="flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cta-wrap pt-75">
                        <div class="row gx-5 align-items-center">
                            <div class="col-xl-8 col-lg-7">
                                <div class="cta-content">
                                    <div class="cta-logo">
                                        <img src="assets/img/cta-icon-2.png" alt="Image">
                                    </div>
                                    <div class="content-title style2">
                                        <h2>Don't Hesitate To Contact us</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto inventore voluptatem possimus quibusdam veritatis. Accusamus ipsum saepe quas.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-5">
                                <div class="cta-btn">
                                    <a href="appointment.html" class="btn style2">Make Appointment</a>
                                    <a href="contact.html" class="btn style8">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <!-- Promo Section End -->

            <!-- Service Section Start -->
            {{-- <section class="service-wrap style3 ptb-100 bg-athens">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2 col-md-10 offset-md-1" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
                            <div class="section-title style1 text-center mb-40">
                                <span>Our Services</span>
                                <h2>Think Hard &amp; Focus On The Patient's Well-Being</h2>
                            </div>
                        </div>
                    </div>
                    <div class="service-slider-one style2 owl-carousel">
                        <div class="service-card style3" data-aos="fade-left" data-aos-duration="1200" data-aos-delay="200">
                            <div class="service-img">
                                <img src="assets/img/services/service-12.jpg" alt="Image">
                                <span class="service-icon"><i class="flaticon-traumatology"></i></span>
                            </div>
                            <div class="service-info">
                                <h3><a href="service-details.html">Orthopedic Solution</a></h3>
                                <p>It is a long established fact that reader will content of page when looks layout.</p>
                                <a href="service-details.html" class="link style2">Explore More</a>
                            </div>
                        </div>
                        <div class="service-card style3" data-aos="fade-left" data-aos-duration="1200" data-aos-delay="400">
                            <div class="service-img">
                                <img src="assets/img/services/service-9.jpg" alt="Image">
                                <span class="service-icon"><i class="flaticon-hospital-ward"></i></span>
                            </div>
                            <div class="service-info">
                                <h3><a href="service-details.html">Patient Onboarding</a></h3>
                                <p>It is a long established fact that reader will content of page when looks layout.</p>
                                <a href="service-details.html" class="link style2">Explore More</a>
                            </div>
                        </div>
                        <div class="service-card style3" data-aos="fade-left" data-aos-duration="1200" data-aos-delay="600">
                            <div class="service-img">
                                <img src="assets/img/services/service-10.jpg" alt="Image">
                                <span class="service-icon"><i class="flaticon-nurse"></i></span>
                            </div>
                            <div class="service-info">
                                <h3><a href="service-details.html">Specialist Advise</a></h3>
                                <p>It is a long established fact that reader will content of page when looks layout.</p>
                                <a href="service-details.html" class="link style2">Explore More</a>
                            </div>
                        </div>
                        <div class="service-card style3" data-aos="fade-left" data-aos-duration="1200" data-aos-delay="800">
                            <div class="service-img">
                                <img src="assets/img/services/service-11.jpg" alt="Image">
                                <span class="service-icon"><i class="flaticon-health-care"></i></span>
                            </div>
                            <div class="service-info">
                                <h3><a href="service-details.html">Heart Checkup</a></h3>
                                <p>It is a long established fact that reader will content of page when looks layout.</p>
                                <a href="service-details.html" class="link style2">Explore More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section> --}}
            <!-- Service Section End -->

            <!-- Why Choose Us Section Start -->
            {{-- <section class="wh-wrap style3 pb-100 bg-chathamas">
                <div class="container">
                    <div class="row gx-5 align-items-center">
                        <div class="col-lg-6 order-lg-1 order-md-2 order-2" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="200">
                            <div class="wh-content">
                                <div class="content-title style2">
                                    <span>Why Choose us</span>
                                    <h2>Protect Your Health With Our Health Package</h2>
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iste cupiditate sit debitis, aut, perferendis praesentium alias, asperiores similique veniam vitae veritatis.</p>
                                </div>
                                <div class="feature-item-wrap">
                                    <div class="feature-item">
                                        <div class="feature-icon">
                                            <i class="ri-check-line"></i>
                                        </div>
                                        <div class="feature-text">
                                            <h3>Mental Health Solution</h3>
                                            <p>Vestibulum ac diam sit amet quam vehicula elemen tum sed sit amet dui praesent sapien pellen tesque .</p>
                                        </div>
                                    </div>
                                    <div class="feature-item">
                                        <div class="feature-icon">
                                            <i class="ri-check-line"></i>
                                        </div>
                                        <div class="feature-text">
                                            <h3>Rapid Improvement Patient</h3>
                                            <p>Vestibulum ac diam sit amet quam vehicula elemen tum sed sit amet dui praesent sapien pellen tesque.</p>
                                        </div>
                                    </div>
                                </div>
                                <a href="about.html" class="btn style1">Get More info</a>
                            </div>
                        </div>
                        <div class="col-lg-6 order-lg-2 order-md-1 order-1" data-aos="fade-left" data-aos-duration="1200" data-aos-delay="200">
                            <div class="wh-img-wrap">
                                <div class="wh-bg-3 bg-f"></div>
                                <div class="about-doctor-box">
                                    <div class="doctor-img">
                                        <img src="assets/img/about/doctor-1.jpg" alt="Image">
                                    </div>
                                    <div class="doctor-info">
                                        <h5>Dr. Kate Winslet</h5>
                                        <span>Radiology</span>
                                    </div>
                                    <button type="button" class="btn">Select</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> --}}
            <!-- Why Choose Us Section End -->

            <!-- Team Section Start -->
            {{-- <section class="team-wrap ptb-100">
                <div class="container">
                    <div class="row">
                        <div class="col-xxl-6 offset-xl-3 col-xl-8 offset-xl-2 col-lg-8 offset-lg-2  col-md-10 offset-md-1" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
                            <div class="section-title style1 text-center mb-40">
                                <span>Our Team</span>
                                <h2>Meet Our Expert &amp; Experienced Team Members</h2>
                            </div>
                        </div>
                    </div>
                    <div class="team-slider-one style2 owl-carousel">
                        <div class="team-card style2"  data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
                            <img src="assets/img/team/team-1.jpg" alt="Image">
                            <div class="team-info">
                                <h3>Dr. Fedrick Bonita</h3>
                                <span>Othopedic Surgeon</span>
                                <ul class="social-profile style2 list-style">
                                    <li>
                                        <a target="_blank" href="https://facebook.com/">
                                            <i class="ri-facebook-fill"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="https://twitter.com/">
                                            <i class="ri-twitter-fill"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="https://instagram.com/">
                                            <i class="ri-instagram-line"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="https://linkedin.com/">
                                            <i class="ri-linkedin-fill"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-card style2"  data-aos="fade-up" data-aos-duration="1200" data-aos-delay="300">
                            <img src="assets/img/team/team-2.jpg" alt="Image">
                            <div class="team-info">
                                <h3>Dr. Ken Moris</h3>
                                <span>Urology Efficient</span>
                                <ul class="social-profile style2 list-style">
                                    <li>
                                        <a target="_blank" href="https://facebook.com/">
                                            <i class="ri-facebook-fill"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="https://twitter.com/">
                                            <i class="ri-twitter-fill"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="https://instagram.com/">
                                            <i class="ri-instagram-line"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="https://linkedin.com/">
                                            <i class="ri-linkedin-fill"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-card style2"  data-aos="fade-up" data-aos-duration="1200" data-aos-delay="400">
                            <img src="assets/img/team/team-3.jpg" alt="Image">
                            <div class="team-info">
                                <h3>Dr. Luiz Frank</h3>
                                <span>Neurosurgery Efficient</span>
                                <ul class="social-profile style2 list-style">
                                    <li>
                                        <a target="_blank" href="https://facebook.com/">
                                            <i class="ri-facebook-fill"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="https://twitter.com/">
                                            <i class="ri-twitter-fill"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="https://instagram.com/">
                                            <i class="ri-instagram-line"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="https://linkedin.com/">
                                            <i class="ri-linkedin-fill"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-card style2"  data-aos="fade-up" data-aos-duration="1200" data-aos-delay="500">
                            <img src="assets/img/team/team-4.jpg" alt="Image">
                            <div class="team-info">
                                <h3>Dr. Selina Gomez</h3>
                                <span>Surgery Efficient </span>
                                <ul class="social-profile style2 list-style">
                                    <li>
                                        <a target="_blank" href="https://facebook.com/">
                                            <i class="ri-facebook-fill"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="https://twitter.com/">
                                            <i class="ri-twitter-fill"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="https://instagram.com/">
                                            <i class="ri-instagram-line"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="https://linkedin.com/">
                                            <i class="ri-linkedin-fill"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-card style2"  data-aos="fade-up" data-aos-duration="1200" data-aos-delay="600">
                            <img src="assets/img/team/team-5.jpg" alt="Image">
                            <div class="team-info">
                                <h3>Dr. Sarai Conn</h3>
                                <span>Senior Dentist</span>
                                <ul class="social-profile style2 list-style">
                                    <li>
                                        <a target="_blank" href="https://facebook.com/">
                                            <i class="ri-facebook-fill"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="https://twitter.com/">
                                            <i class="ri-twitter-fill"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="https://instagram.com/">
                                            <i class="ri-instagram-line"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="https://linkedin.com/">
                                            <i class="ri-linkedin-fill"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-card style2"  data-aos="fade-up" data-aos-duration="1200" data-aos-delay="700">
                            <img src="assets/img/team/team-6.jpg" alt="Image">
                            <div class="team-info">
                                <h3>Dr. Maureen Klein</h3>
                                <span>Othopedic Surgeon</span>
                                <ul class="social-profile style2 list-style">
                                    <li>
                                        <a target="_blank" href="https://facebook.com/">
                                            <i class="ri-facebook-fill"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="https://twitter.com/">
                                            <i class="ri-twitter-fill"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="https://instagram.com/">
                                            <i class="ri-instagram-line"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="https://linkedin.com/">
                                            <i class="ri-linkedin-fill"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section> --}}
            <!-- Team Section End -->

            

            <!-- Appointment Section Start -->
            {{-- <section class="appointment-wrap style3 ptb-100 bg-athens">
                <div class="container">
                    <div class="row align-items-center gx-5">
                        <div class="col-lg-6"  data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
                            <div class="promo-bg bg-f">
                                <a class="play-now" data-fancybox="" href="https://www.youtube.com/watch?v=UNSSuTSQI9I">
                                    <i class="ri-play-fill"></i>
                                    <span class="ripple"></span>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6"  data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
                            <div class="appointment-content">
                                <div class="content-title style1">
                                    <span>Best Solutions</span>
                                    <h2>Awesome Smart Health Can Make Your Life Easier</h2>
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iste cupiditate sit debitis, aut, perferendis praesentium alias, asperiores similique veniam vitae veritatis.</p>
                                </div>
                                <ul class="content-feature-list list-style mb-0">
                                    <li><i class="ri-checkbox-circle-line"></i>Top Professional Team</li>
                                    <li><i class="ri-checkbox-circle-line"></i>World Class Dental Services</li>
                                    <li><i class="ri-checkbox-circle-line"></i>Discount On Treatment Fees</li>
                                    <li><i class="ri-checkbox-circle-line"></i>Multi-Functional Hospital</li>
                                    <li><i class="ri-checkbox-circle-line"></i>20+ Years Of Experience</li>
                                    <li><i class="ri-checkbox-circle-line"></i>Top Professional Specialist</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section> --}}
            <!-- Appointment Section End -->

            <!-- Testimonial Section Start -->
            {{-- <section class="testimonial-wrap pb-100 bg-athens">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2  col-md-10 offset-md-1"  data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
                            <div class="section-title style1 text-center mb-40">
                                <span>Testimonial</span>
                                <h2>The Main Reason For Your Choice Is Our Best Service </h2>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-slider-two style2 owl-carousel">
                        <div class="testimonial-card style3"  data-aos="fade-left" data-aos-duration="1200" data-aos-delay="200">
                            <ul class="ratings list-style">
                                <li><i class="ri-star-fill"></i></li>
                                <li><i class="ri-star-fill"></i></li>
                                <li><i class="ri-star-fill"></i></li>
                                <li><i class="ri-star-fill"></i></li>
                                <li><i class="ri-star-fill"></i></li>
                            </ul>
                            <p class="client-quote">Lorem ipsum dolor sit amet adip selection repellat tetur delni vel quam aliq earu expel dolor eme fugiat enim amet sit dolor.</p>
                            <div class="client-info-area">
                                <div class="client-info-wrap">
                                    <div class="client-img">
                                        <img src="assets/img/testimonials/client-1.jpg" alt="Image">
                                    </div>
                                    <div class="client-info">
                                        <h3>Jim Morison</h3>
                                        <span>Director, BAT</span>
                                    </div>
                                </div>
                                <div class="quote-icon">
                                    <i class="flaticon-straight-quotes"></i>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-card style3"  data-aos="fade-left" data-aos-duration="1200" data-aos-delay="300">
                            <ul class="ratings list-style">
                                <li><i class="ri-star-fill"></i></li>
                                <li><i class="ri-star-fill"></i></li>
                                <li><i class="ri-star-fill"></i></li>
                                <li><i class="ri-star-fill"></i></li>
                                <li><i class="ri-star-fill"></i></li>
                            </ul>
                            <p class="client-quote">Lorem ipsum dolor sit amet adip selection repellat tetur delni vel quam aliq earu expel dolor eme fugiat enim amet sit dolor.</p>
                            <div class="client-info-area">
                                <div class="client-info-wrap">
                                    <div class="client-img">
                                        <img src="assets/img/testimonials/client-2.jpg" alt="Image">
                                    </div>
                                    <div class="client-info">
                                        <h3>Alex Cruis</h3>
                                        <span>CEO, IBAC</span>
                                    </div>
                                </div>
                                <div class="quote-icon">
                                    <i class="flaticon-straight-quotes"></i>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-card style3"  data-aos="fade-left" data-aos-duration="1200" data-aos-delay="400">
                            <ul class="ratings list-style">
                                <li><i class="ri-star-fill"></i></li>
                                <li><i class="ri-star-fill"></i></li>
                                <li><i class="ri-star-fill"></i></li>
                                <li><i class="ri-star-fill"></i></li>
                                <li><i class="ri-star-fill"></i></li>
                            </ul>
                            <p class="client-quote">Lorem ipsum dolor sit amet adip selection repellat tetur delni vel quam aliq earu expel dolor eme fugiat enim amet sit dolor.</p>
                            <div class="client-info-area">
                                <div class="client-info-wrap">
                                    <div class="client-img">
                                        <img src="assets/img/testimonials/client-3.jpg" alt="Image">
                                    </div>
                                    <div class="client-info">
                                        <h3>Tom Haris</h3>
                                        <span>Engineer, Olleo</span>
                                    </div>
                                </div>
                                <div class="quote-icon">
                                    <i class="flaticon-straight-quotes"></i>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-card style3"  data-aos="fade-left" data-aos-duration="1200" data-aos-delay="500">
                            <ul class="ratings list-style">
                                <li><i class="ri-star-fill"></i></li>
                                <li><i class="ri-star-fill"></i></li>
                                <li><i class="ri-star-fill"></i></li>
                                <li><i class="ri-star-fill"></i></li>
                                <li><i class="ri-star-fill"></i></li>
                            </ul>
                            <p class="client-quote">Lorem ipsum dolor sit amet adip selection repellat tetur delni vel quam aliq earu expel dolor eme fugiat enim amet sit dolor.</p>
                            <div class="client-info-area">
                                <div class="client-info-wrap">
                                    <div class="client-img">
                                        <img src="assets/img/testimonials/client-4.jpg" alt="Image">
                                    </div>
                                    <div class="client-info">
                                        <h3>Harry Jackson</h3>
                                        <span>Enterpreneur</span>
                                    </div>
                                </div>
                                <div class="quote-icon">
                                    <i class="flaticon-straight-quotes"></i>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-card style3"  data-aos="fade-left" data-aos-duration="1200" data-aos-delay="600">
                            <ul class="ratings list-style">
                                <li><i class="ri-star-fill"></i></li>
                                <li><i class="ri-star-fill"></i></li>
                                <li><i class="ri-star-fill"></i></li>
                                <li><i class="ri-star-fill"></i></li>
                                <li><i class="ri-star-fill"></i></li>
                            </ul>
                            <p class="client-quote">Lorem ipsum dolor sit amet adip selection repellat tetur delni vel quam aliq earu expel dolor eme fugiat enim amet sit dolor.</p>
                            <div class="client-info-area">
                                <div class="client-info-wrap">
                                    <div class="client-img">
                                        <img src="assets/img/testimonials/client-5.jpg" alt="Image">
                                    </div>
                                    <div class="client-info">
                                        <h3>Chris Haris</h3>
                                        <span>MD, ITec</span>
                                    </div>
                                </div>
                                <div class="quote-icon">
                                    <i class="flaticon-straight-quotes"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> --}}
            <!-- Testimonial Section End -->

            <!-- Pricing Section Start -->
            {{-- <section class="pricing-wrap pt-100 pb-75">
                <div class="container">
                    <div class="section-title style1 text-center mb-40">
                        <span>Pricing Plan</span>
                        <h2>Our Simple &amp; Affordable Plan</h2>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-xl-4 col-lg-6 col-md-6"  data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
                            <div class="pricing-card">
                                <div class="pricing-header">
                                    <div class="pricing-header-left">
                                        <h5>Basic Plan</h5>
                                        <h2>$79<span>/Month</span></h2>
                                    </div>
                                    <div class="pricing-header-right">
                                       <i class="flaticon-home"></i>
                                    </div>
                                </div>
                                <ul class="pricing-features list-style">
                                    <li class="checked">New Patient Consultation <i class="ri-check-line"></i></li>
                                    <li class="checked">Regular health Checkup<i class="ri-check-line"></i></li>
                                    <li class="checked">Ocupational Therapy<i class="ri-check-line"></i></li>
                                    <li class="checked">Phusical Therapy<i class="ri-check-line"></i></li>
                                    <li class="unchecked">X-rays<i class="ri-close-fill"></i></li>
                                    <li class="unchecked">Cancer Treatment<i class="ri-close-fill"></i></li>
                                </ul>
                                <a href="login.html" class="btn style2">Get Started Now</a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6"  data-aos="fade-up" data-aos-duration="1200" data-aos-delay="300">
                            <div class="pricing-card">
                                <div class="pricing-header">
                                    <div class="pricing-header-left">
                                        <h5>Standard Plan</h5>
                                        <h2>$89<span>/Month</span></h2>
                                    </div>
                                    <div class="pricing-header-right">
                                       <i class="flaticon-user-2"></i>
                                    </div>
                                </div>
                                <ul class="pricing-features list-style">
                                    <li class="checked">New Patient Consultation <i class="ri-check-line"></i></li>
                                    <li class="checked">Regular health Checkup<i class="ri-check-line"></i></li>
                                    <li class="checked">Ocupational Therapy<i class="ri-check-line"></i></li>
                                    <li class="checked">Phusical Therapy<i class="ri-check-line"></i></li>
                                    <li class="checked">X-rays<i class="ri-check-line"></i></li>
                                    <li class="unchecked">Cancer Treatment<i class="ri-close-fill"></i></li>
                                </ul>
                                <a href="login.html" class="btn style2">Get Started Now</a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6"  data-aos="fade-up" data-aos-duration="1200" data-aos-delay="400">
                            <div class="pricing-card">
                                <div class="pricing-header">
                                    <div class="pricing-header-left">
                                        <h5>Premium Plan</h5>
                                        <h2>$99<span>/Month</span></h2>
                                    </div>
                                    <div class="pricing-header-right">
                                       <i class="flaticon-clipboard"></i>
                                    </div>
                                </div>
                                <ul class="pricing-features list-style">
                                    <li class="checked">New Patient Consultation <i class="ri-check-line"></i></li>
                                    <li class="checked">Regular health Checkup<i class="ri-check-line"></i></li>
                                    <li class="checked">Ocupational Therapy<i class="ri-check-line"></i></li>
                                    <li class="checked">Phusical Therapy<i class="ri-check-line"></i></li>
                                    <li class="checked">X-rays<i class="ri-check-line"></i></li>
                                    <li class="checked">Cancer Treatment<i class="ri-check-line"></i></li>
                                </ul>
                                <a href="login.html" class="btn style2">Get Started Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section> --}}
            <!-- Pricing Section End -->

          
        @endsection
