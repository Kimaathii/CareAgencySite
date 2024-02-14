@extends('welcome')
@section('content')

<section class="wh-wrap style3 ptb-100 bg-chathamas" style="; margin-top:100px">
    <div class="container">
        <div class="row gx-5 align-items-center">
            <div class="col-lg-6 order-lg-1 order-md-1 order-1 aos-init" data-aos="fade-left" data-aos-duration="1200" data-aos-delay="200">
                <div class="wh-content">
                    <div class="content-title style2">
                        {{-- <span>Why Choose us</span> --}}
                        <h2>Vision</h2>
                        <p>Our vision is underpinned by our values, providing a safer, outstanding care to service users.</p>
                    </div>
                    {{-- <div class="feature-item-wrap">
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
                    </div> --}}
                    {{-- <a href="about.html" class="btn style1">Get More info</a> --}}
                </div>
            </div>
            <div class="col-lg-6 order-lg-2 order-md-2 order-2 aos-init" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="200">
                <div class="wh-content">
                    <div class="content-title style2">
                        {{-- <span>Why Choose us</span> --}}
                        <h2>Our Mission and Vision</h2>
                        <p>After working in the healthcare industry for so many years, we decided it was time to transform the way home care and nursing staffing is carried out. This transformation birth Cyncare Health Ltd, a company that strives to deliver the highest quality of care to our service users. We are not a franchise, we care for your loved ones like they were ours. </p>
                    </div>
                    {{-- <div class="feature-item-wrap">
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
                    </div> --}}
                    {{-- <a href="about.html" class="btn style1">Get More info</a> --}}
                </div>
            </div>
            
        </div>
    </div>
    <div class="doctor-img">
        <img src="{{ asset('assets\img\about\missionimg.png') }}" alt="Image" style="width: 100%">
    </div>
</section>

<section class="wh-wrap style3 ptb-100 bg-chathamas">
    <div class="container">
        <div class="row gx-5 align-items-center">
            <div class="col-lg-6 order-lg-1 order-md-2 order-2 aos-init" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="200">
                <div class="wh-content">
                    <div class="content-title style2">
                        {{-- <span>Why Choose us</span> --}}
                        <h2>Mission</h2>
                        <p>We are a company that aim to always deliver exceptional care service to our service users. Our mission is to provide healthcare agency services to both individual clients and healthcare providers. We are not a franchise, we care for your loved ones like they were our own. We have a team of dedicated and exceptionally trained staff working together with other stakeholders to provide robust healthcare solution tailored to meet the specific needs of our services users and to bring about improved lives and flourishing communities.​</p>
                    </div>
                    {{-- <div class="feature-item-wrap">
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
                    </div> --}}
                    {{-- <a href="about.html" class="btn style1">Get More info</a> --}}
                </div>
            </div>
            <div class="col-lg-6 order-lg-2 order-md-1 order-1 aos-init" data-aos="fade-left" data-aos-duration="1200" data-aos-delay="200">
                <div class="wh-img-wrap">
                    <div class="wh-bg-3 bg-f"></div>
                    {{-- <div class="about-doctor-box">
                        <div class="doctor-img">
                            <img src="{{ asset('assets\img\about\missionimg2.png') }}" alt="Image">
                        </div>
                        <div class="doctor-info">
                            <h5>Dr. Kate Winslet</h5>
                            <span>Radiology</span>
                        </div>
                        <button type="button" class="btn">Select</button>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</section>




@endsection