@extends('welcome')
@section('content')

<div class="content-wrapper">
 <!-- Breadcrumb Start -->
 <div class="breadcrumb-wrap bg-f br-3">
    <div class="container">
        <div class="breadcrumb-title">
            <h2>Domicilary</h2>
            <ul class="breadcrumb-menu list-style">
                <li><a href="/">Home </a></li>
                <li style="color: white">Domiciliary</li>
            </ul>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->
<section>


</section>
<section class="service-wrap style2 ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 offset-xl-3 col-lg-4 offset-lg-2 col-md-10 offset-md-1">
                <div class="section-title style2 text-center mb-40">
                  
                    <h2>What is Domiciliary Care</h2>
                    <p>This is define as the different care services offered to support an individual to help individuals maintain their independence and quality of life in the comfort of their home rather than in a care facility such as care home or residential home. Domiciliary care can be referred to as homecare. This type of care services may vary from personal care to food shopping.
                    </p>
                </div>
            </div>
        </div>
        <div class="service-slider-one style2 owl-carousel owl-loaded owl-drag">
            
            
            
            
        <div class="owl-stage-outer owl-height" style="height: 442.5px;"><div class="owl-stage" style="transform: translate3d(-1140px, 0px, 0px); transition: all 1.3s ease 0s; width: 3804px;"><div class="owl-item cloned" style="width: 355.333px; margin-right: 25px;"><div class="service-card style2 aos-init aos-animate" data-aos="fade-left" data-aos-duration="1200" data-aos-delay="300">
                <div class="service-img">
                    <img src="{{ asset('assets\img\domic\domic1.png') }}" alt="Image" style="max-height: 50%">
                    <span class="service-icon"><i class='bx bx-plus-medical'></i></span>
                </div>
                <div class="service-info">
                    <h3><a href="service-details.html">Visiting Care</a></h3>
                    <p>Receive extra support  bespoke to your needs while maintaining your independence and dignity</p>
                    <a href="service-details.html" class="link style2">Read More<i class="flaticon-right-arrow"></i></a>
                </div>
            </div>
        </div>
        <div class="owl-item cloned" style="width: 355.333px; margin-right: 25px;"><div class="service-card style2 aos-init aos-animate" data-aos="fade-left" data-aos-duration="1200" data-aos-delay="400">
                <div class="service-img">
                    <img src="{{ asset('assets\img\domic\domic2.png') }}" alt="Image">
                    <span class="service-icon"><i class='bx bx-plus-medical'></i></span>
                </div>
                <div class="service-info">
                    <h3><a href="service-details.html">Live  in Care</a></h3>
                    <p>A care professional moves into the client's home and provide practical support throughout the day</p>
                    <a href="service-details.html" class="link style2">Read More<i class="flaticon-right-arrow"></i></a>
                </div>
            </div>
        </div>
        <div class="owl-item cloned" style="width: 355.333px; margin-right: 25px;"><div class="service-card style2 aos-init aos-animate" data-aos="fade-left" data-aos-duration="1200" data-aos-delay="500">
                <div class="service-img">
                    <img src="{{ asset('assets\img\domic\domic3.png') }}" alt="Image">
                    <span class="service-icon"><i class='bx bx-plus-medical'></i></span>
                </div>
                <div class="service-info">
                    <h3><a href="service-details.html">Night Care</a></h3>
                    <p>We will match you with the right staff, well trained and experiences. </p>
                    <a href="service-details.html" class="link style2">Read More<i class="flaticon-right-arrow"></i></a>
                </div>
            </div>
            </div>
        <div class="owl-item active" style="width: 355.333px; margin-right: 25px;"><div class="service-card style2 aos-init aos-animate" data-aos="fade-left" data-aos-duration="1200" data-aos-delay="200">
                <div class="service-img">
                    <img src="{{ asset('assets\img\domic\domic4.png') }}" alt="Image">
                    <span class="service-icon"><i class='bx bx-plus-medical'></i></span>
                </div>
                <div class="service-info">
                    <h3><a href="service-details.html">
                        Hospital to Home care</a></h3>
                    <p>It is a long established fact that reader will content of page when looks layout.</p>
                    <a href="service-details.html" class="link style2" style="margin-top: 26px">Read More<i class="fa fa-hospital-o" aria-hidden="true"></i></a>
                </div>
            </div></div>
            {{-- <div class="owl-item cloned" style="width: 355.333px; margin-right: 25px;">
                <div class="service-card style2 aos-init aos-animate" data-aos="fade-left" data-aos-duration="1200" data-aos-delay="400">
                <div class="service-img">
                    <img src="assets/img/services/service-11.jpg" alt="Image">
                    <span class="service-icon"><i class="flaticon-health-care"></i></span>
                </div>
                <div class="service-info">
                    <h3><a href="service-details.html">Heart Checkup</a></h3>
                    <p>It is a long established fact that reader will content of page when looks layout.</p>
                    <a href="service-details.html" class="link style2">Read More<i class="flaticon-right-arrow"></i></a>
                </div>
            </div></div> --}}
        </div></div>
        <div class="owl-nav">
            <button type="button" role="presentation" class="owl-prev"><i class="ri-arrow-left-s-line"></i>
            </button>
            <button type="button" role="presentation" class="owl-next"><i class="ri-arrow-right-s-line"></i>
            </button></div><div class="owl-dots disabled"></div></div>
    </div>
</section>

<section class="wh-wrap style3 ptb-100 bg-chathamas">
    <div class="container">
        <div class="row gx-5 align-items-center">
            <div class=" aos-init" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="200">
                <div class="wh-content">
                    <div class="content-title style2">
                        {{-- <span>Why Choose us</span> --}}
                        <h2>Benefit of Home Care</h2>
                        {{-- <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iste cupiditate sit debitis, aut, perferendis praesentium alias, asperiores similique veniam vitae veritatis.</p> --}}
                        <ul class="content-feature-list style2 list-style" id="vancyId">
                            <li><i class="ri-checkbox-circle-line"></i>Homecare allows you to continue to stay in your own home in the surroundings you are familiar with., which means there is minimal  distribution to your normal routine and you receive extra care and support</li>
                            <li><i class="ri-checkbox-circle-line"></i>Staying in familiar surroundings is vital for Dementia.</li>
                            <li><i class="ri-checkbox-circle-line"></i>Homecare  provides one to one  undivided attention care and support that is bespoke to your needs and wishes.</li>
                            <li><i class="ri-checkbox-circle-line"></i>Homecare promotes your independence and dignity and because it is a on e to one care it provides significant benefit to one's well being</li>
                            <li><i class="ri-checkbox-circle-line"></i>Family and friends can participate and there is no visiting restriction for them and also not separated from pets.</li>
                            <li><i class="ri-checkbox-circle-line"></i>In homecare you pay for what you use.</li>
                        </ul>
                    </div>
                    <div >
                        <h2 style="color: white">Homecare can be funded through</h2>
                    </div>
                    <div class="feature-item-wrap">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="ri-check-line"></i>
                            </div>
                            <div class="feature-text">
                               
                                <h3>NHS Funded</h3>
                                <p>This is sometimes part of an ongoing health treatment.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="ri-check-line"></i>
                            </div>
                            <div class="feature-text">
                                <h3>Local Authority </h3>
                                <p>You will need to contact them and an assessment will be done to found out if you are  eligible and what   kind of care package you need.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="ri-check-line"></i>
                            </div>
                            <div class="feature-text">
                                <h3>Self Funded </h3>
                                <p>You will be responsible for the payment of your care</p>
                            </div>
                        </div>
                    </div>
                    <a href="about.html" class="btn style1">Get More info</a>
                </div>
            </div>
            
        </div>
    </div>
</section>

</div>


@endsection