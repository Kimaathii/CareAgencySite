@extends('welcome')
@section('content')
<section class="service-details-wrap pt-100 pb-75">
    <div class="container">
        <div class="row gx-5">
            <div class="col-xl-8">
                <div class="service-desc">
                    <a class="single-service-img" data-fancybox="gallery" href="assets/img/portfolio/single-portfolio-1.jpg">
                        <img src="{{ asset('assets/img/about/missionimg.png') }}" alt="Image">
                    </a>
                    <h2>Training</h2>
                    <p>
                        We thrive to attain a high standard of care to our clients/ service users to achieve this, we invest in training of our staff. 
                        
                       </p>
                    
                    <p> We are currently working towards accrediting our centre as a training provider. This will enable our development team to train staffs from other companies / organisation.</p>
                    {{-- <ul class="content-feature-list style2 list-style">
                        <li><i class="ri-checkbox-circle-line"></i>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed diam nonumy eirmod tempor.</li>
                        <li><i class="ri-checkbox-circle-line"></i> Advisory membership elitr, sed diam nonumy eirmod tempor invidunt ut labor et dolore magna.</li>
                        <li><i class="ri-checkbox-circle-line"></i> If you do not have enough time, you will always be able to work and do what you want.</li>
                        <li><i class="ri-checkbox-circle-line"></i>Irmad temporarily involved labor and doll magna alicum erat, sed diam voluptua. Vero Eos and accused and fair.</li>
                        <li><i class="ri-checkbox-circle-line"></i>Labor and Love Magna Aliquam Irat, Sed Diam Valupatua. Vero eos et accusam et justo dolores et ea ribam.</li>
                    </ul> --}}
                    <div class="row">
                        <div class="col-md-6">
                            <a class="single-service-img" data-fancybox="gallery" href="assets/img/portfolio/portfolio-1.jpg">
                                <img src="assets/img/portfolio/portfolio-1.jpg" alt="Image">
                            </a>
                        </div>
                        <div class="col-md-6">
                            <a class="single-service-img" data-fancybox="gallery" href="assets/img/portfolio/portfolio-6.jpg">
                                <img src="assets/img/portfolio/portfolio-6.jpg" alt="Image">
                            </a>
                        </div>
                    </div>
                    <p>Amet consectetur adipisicing elit. Mollitia excepturi eaque, corporis nulla maxime inventore magni repreh enderit lorem ipsum dolor sit consequatur deserunt, eligendi totam voluptas natus. Quaerat neque nisi voluptatum ex esse architecto.</p>
                    <div class="row align-items-center gx-5">
                        <div class="col-xl-5">
                            <a class="single-service-img" data-fancybox="gallery" href="assets/img/portfolio/portfolio-12.jpg">
                                <img src="assets/img/portfolio/portfolio-12.jpg" alt="Image">
                            </a>
                        </div>
                        <div class="col-xl-7">
                            <ul class="content-feature-list  list-style my-0">
                                <li><i class="ri-checkbox-circle-line"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                <li><i class="ri-checkbox-circle-line"></i> Advisory membership elitr sed diam nonumy .</li>
                                <li><i class="ri-checkbox-circle-line"></i>You will always be able to work and do what you want.</li>
                                <li><i class="ri-checkbox-circle-line"></i>Sed diam voluptua. Vero Eos and accused and fair.</li>
                                <li><i class="ri-checkbox-circle-line"></i>Vestibulum ac diam sit amet quam vehicula.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="sidebar">
                    <div class="sidebar-widget">
                        <div class="search-box">
                            <div class="form-group">
                                <input type="search" placeholder="Search">
                                <button type="submit"> 
                                    <i class="ri-search-2-line"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="sidebar-widget portfolio-info-widget">
                        <h4>Project Brief</h4>
                        <div class="portfolio-info-item-wrap">
                            <div class="portfolio-info-item">
                                <p><i class="ri-calendar-line"></i>Date:</p>
                               <span>25 Jun, 2022</span>
                            </div>
                            <div class="portfolio-info-item">
                                <p><i class="ri-user-unfollow-line"></i>Client:</p>
                               <span>Willum Smith</span>
                            </div>
                            <div class="portfolio-info-item">
                                <p><i class="ri-map-pin-line"></i>Location:</p>
                               <span>Florida, USA</span>
                            </div>
                            <div class="portfolio-info-item">
                                <p><i class="ri-bookmark-line"></i>Category:</p>
                               <span>Open Heart Surgery</span>
                            </div>
                            <div class="portfolio-info-item">
                                <p><i class="ri-hospital-line"></i>Skills:</p>
                               <span>Surgery</span>
                            </div>
                        </div>
                    </div> --}}
                    <div class="sidebar-widget categories">
                        <h4>Training Courses</h4>
                        <div class="category-box">
                            <ul class="list-style">
                                <li>
                                    <a href="service-one.html">
                                        Introduction to Caregiving
                                    </a>
                                </li>
                                <li>
                                    <a href="service-one.html">
                                        Health and Safety
                                    </a>
                                </li>
                                <li>
                                    <a href="service-one.html">
                                        Medication Administration
                                    </a>
                                </li>
                                <li>
                                    <a href="service-one.html">
                                        Personal Care Skills
                                    </a>
                                </li>
                                <li>
                                    <a href="service-one.html">
                                        Specialized Care Training
                                    </a>
                                </li>
                                <li>
                                    <a href="service-one.html">
                                        Communication and Interpersonal Skills
                                    </a>
                                </li>
                                <li>
                                    <a href="service-one.html">
                                        And lots More
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar-widget tags">
                        <h4>Tags </h4>
                        <div class="tag-list">
                            <ul class="list-style">
                                <li><a href="portfolio.html">Health</a></li>
                                <li><a href="portfolio.html">Medicine</a></li>
                                <li><a href="portfolio.html">Dental</a></li>
                                <li><a href="portfolio.html">Acne</a></li>
                                <li><a href="portfolio.html">Doctor</a></li>
                                <li><a href="portfolio.html">Eye Care</a></li>
                                <li><a href="portfolio.html">Patient</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>






@endsection