@extends('welcome')
@section('content')


<!-- Content Wrapper Start -->
<div class="content-wrapper">

    <!-- Breadcrumb Start -->
    <div class="breadcrumb-wrap bg-f br-2">
        <div class="container">
            <div class="breadcrumb-title">
                <h2>About Us</h2>
                <ul class="breadcrumb-menu list-style">
                    <li><a href="index.html">Home</a></li>
                    <li>About Us</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- About Section Start -->
    <section class="about-wrap style1 ptb-100">
        <div class="container">
            <div class="row gx-5 align-items-center">
                {{-- <div class="col-lg-6">
                    <div class="about-img-wrap">
                        <img src="assets/img/about/about-img-1.jpg" alt="Image" class="about-img-one">
                        <img src="assets/img/about/about-img-2.jpg" alt="Image" class="about-img-two">
                        <div class="about-doctor-box">
                            <div class="doctor-img">
                                <img src="assets/img/about/doctor-1.jpg" alt="Image">
                            </div>
                            <div class="doctor-info">
                                <h5>Dr. Kate Winslet</h5>
                                <span>Radiology</span>
                            </div>
                            <button type="button" class="btn style1">Select</button>
                        </div>
                    </div>
                </div> --}}
                <div class="">
                    <div class="about-content">
                        <div class=" style1">
                            {{-- <span>About Our Program</span> --}}
                            <h2>About Us</h2>
                            <span>Cyncare Health is a family run business, founded based on<span style="color:#2490EB"> compassion and care</span> for lives and communities. With many years of wide-ranging experience committed to enhancing the healthcare sector through <span style="color:#2490EB">professionalism and exceptional relationships</span> with stakeholders (service users, clients, nurses, doctors, other health care professionals, regulatory bodies etc.), we have a vision to deliver exceptional care service, first time and at all times! &nbsp;</span>

                            <div style="margin-top: 50px ">We have a team of dedicated and exceptionally-trained staff working together with other stakeholders to provide robust healthcare solutions tailored to meet the specific needs of our service users / client and to bring about 
                                <span style="color:#2490EB">improved lives </span>and 
                                <span style="color:#2490EB">flourishing communities. &nbsp;</span></div>
                        </div>
                        <span>Our service delivery and work operations are underpinned by these seven core values: &nbsp;</span>
                        <div class="row align-items-center">
                            <div class="col-md-7">
                                <ul class="content-feature-list list-style">
                                    <li><i class="ri-checkbox-circle-line"></i>C – Compassionate Care  
                                    </li>
                                    <li><i class="ri-checkbox-circle-line"></i>Y – You at heart and Your Choice  
                                    </li>
                                    <li><i class="ri-checkbox-circle-line"></i>N – Nobility  
                                    </li>
                                    <li><i class="ri-checkbox-circle-line"></i>C – Clear Communication    
                                    </li>
                                    <li><i class="ri-checkbox-circle-line"></i>A – Accountability  
                                    </li>
                                    <li><i class="ri-checkbox-circle-line"></i>R – Respect  
                                    </li>
                                    <li><i class="ri-checkbox-circle-line"></i>E – Empathy.  
                                    </li>
                                </ul>
                                <span>Working in line with our vision and based on the afore-mentioned values, we set out on our mission of providing healthcare service based on these three objectives: &nbsp;</span>
                                <ul>
                                    <li>
                                        <span>- &nbsp; &nbsp; &nbsp; &nbsp;<span style="color:#2490EB">Exceptional service</span> outcome and unique delivery experience for service users, clients and staff &nbsp;</span> 
                                    </li>
                                    <li>
                                        <span>- &nbsp; &nbsp; &nbsp; &nbsp;<span style="color:#2490EB">Fully qualified, trained</span> and continually developing professional workforce with wide-ranging industry experience &nbsp;</span>
                                    </li>
                                    <li>
                                        <span>- &nbsp; &nbsp; &nbsp; &nbsp;Adopting safe and regulatory-compliant organisational processes and practices &nbsp;</span> 
                                    </li>
                                </ul>
                                <span>A range of home care services can be provided, with assessments carried out before creating care plans to ensure all needs will be met in the preferred ways of the service users. We also provide a Care Agency Service, providing highly qualified, trained staff members, from Carers to Nurses, and to supporting other services. &nbsp;</span>
                                <span>You can rely on Cyncare Health Ltd. to ensure you or your loved ones receive a high standard, person-centred and unique care with a personal and flexible approach to encourage independence and choice. &nbsp;</span>
                                <span>Please do not hesitate to contact us today! &nbsp;</span>
                            </div>
                            {{-- <div class="col-md-5">
                                <div class="about-promo-video bg-f">
                                    <a class="play-now" data-fancybox="" href="https://www.youtube.com/watch?v=UNSSuTSQI9I">
                                        <i class="ri-play-fill"></i>
                                        <span class="ripple"></span>
                                    </a>
                                </div>
                            </div> --}}
                        </div>
                        <div class="ceo-msg">
                            <div class="ceo-img">
                                <img src="assets/img/about/doctor-2.jpg" alt="Image">
                            </div>
                            <p>"Think Hard And Focus On The Patient's Well-Being"</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section End -->

    <!-- Counter Section Start -->
    <div class="counter-wrap pt-100 pb-75  bg-blue">
        <div class="container">
            <div class="counter-card-wrap style1 pb-75">
                <div class="counter-card style1">
                    <span class="counter-icon">
                        <i class="flaticon-admision-form"></i>
                    </span>
                    <div class="counter-text">
                        <h2 class="counter-num">
                            <span class="odometer" data-count="60"></span>
                            <span class="target">+</span>
                        </h2>
                        <p>Project Completed</p>
                    </div>
                </div>
                <div class="counter-card style1">
                    <span class="counter-icon">
                        <i class="flaticon-doctor"></i>
                    </span>
                    <div class="counter-text">
                        <h2 class="counter-num">
                            <span class="odometer" data-count="99"></span>
                            <span class="target">%</span>
                        </h2>
                        <p>Patients Satisfied</p>
                    </div>
                </div>
                <div class="counter-card style1">
                    <span class="counter-icon">
                        <i class="flaticon-medical-operation"></i>
                    </span>
                    <div class="counter-text">
                        <h2 class="counter-num">
                            <span class="odometer" data-count="700"></span>
                            <span class="target">+</span>
                        </h2>
                        <p>Medical Beds</p>
                    </div>
                </div>
                <div class="counter-card style1">
                    <span class="counter-icon">
                        <i class="flaticon-blood-test"></i>
                    </span>
                    <div class="counter-text">
                        <h2 class="counter-num">
                            <span class="odometer" data-count="70"></span>
                            <span class="target">+</span>
                        </h2>
                        <p>Laboratory Experts</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="promo-wrap style1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="promo-card">
                        <div class="promo-icon">
                            <i class="flaticon-dentist"></i>
                        </div>
                        <div class="promo-info">
                            <h3>Dentristy Care</h3>
                            <p>There are many variations of passages of words are valid.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="promo-card">
                        <div class="promo-icon">
                            <i class="flaticon-disability"></i>
                        </div>
                        <div class="promo-info">
                            <h3>Orthopedic Care</h3>
                            <p>There are many variations of passages of words are valid.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="promo-card">
                        <div class="promo-icon">
                            <i class="flaticon-x-ray"></i>
                        </div>
                        <div class="promo-info">
                            <h3>Cosmetic Dentist</h3>
                            <p>There are many variations of passages of words are valid.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-10">
                <p class="mb-0">We have all kinds of hospital treatment. <a href="service-one.html" class="link style1">View More</a></p>
            </div>
        </div>
    </div>
    <!-- Counter Section End -->

    <!-- Testimonial Section Start -->
    <section class="testimonial-wrap style2 ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2  col-md-10 offset-md-1">
                    <div class="section-title style1 text-center mb-40">
                        <span>Testimonial</span>
                        <h2>Our Great Psychitrist Services Provided For You</h2>
                    </div>
                </div>
            </div>
            <div class="testimonial-slider-two owl-carousel">
                <div class="testimonial-card style2">
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
                    <ul class="ratings list-style">
                        <li><i class="ri-star-fill"></i></li>
                        <li><i class="ri-star-fill"></i></li>
                        <li><i class="ri-star-fill"></i></li>
                        <li><i class="ri-star-fill"></i></li>
                        <li><i class="ri-star-fill"></i></li>
                    </ul>
                    <p class="client-quote">Lorem ipsum dolor sit amet adip selection repellat tetur delni vel quam aliq earu expel dolor eme fugiat enim amet sit dolor.</p>
                </div>
                <div class="testimonial-card style2">
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
                    <ul class="ratings list-style">
                        <li><i class="ri-star-fill"></i></li>
                        <li><i class="ri-star-fill"></i></li>
                        <li><i class="ri-star-fill"></i></li>
                        <li><i class="ri-star-fill"></i></li>
                        <li><i class="ri-star-fill"></i></li>
                    </ul>
                    <p class="client-quote">Lorem ipsum dolor sit amet adip selection repellat tetur delni vel quam aliq earu expel dolor eme fugiat enim amet sit dolor.</p>
                </div>
                <div class="testimonial-card style2">
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
                    <ul class="ratings list-style">
                        <li><i class="ri-star-fill"></i></li>
                        <li><i class="ri-star-fill"></i></li>
                        <li><i class="ri-star-fill"></i></li>
                        <li><i class="ri-star-fill"></i></li>
                        <li><i class="ri-star-fill"></i></li>
                    </ul>
                    <p class="client-quote">Lorem ipsum dolor sit amet adip selection repellat tetur delni vel quam aliq earu expel dolor eme fugiat enim amet sit dolor.</p>
                </div>
                <div class="testimonial-card style2">
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
                    <ul class="ratings list-style">
                        <li><i class="ri-star-fill"></i></li>
                        <li><i class="ri-star-fill"></i></li>
                        <li><i class="ri-star-fill"></i></li>
                        <li><i class="ri-star-fill"></i></li>
                        <li><i class="ri-star-fill"></i></li>
                    </ul>
                    <p class="client-quote">Lorem ipsum dolor sit amet adip selection repellat tetur delni vel quam aliq earu expel dolor eme fugiat enim amet sit dolor.</p>
                </div>
                <div class="testimonial-card style2">
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
                    <ul class="ratings list-style">
                        <li><i class="ri-star-fill"></i></li>
                        <li><i class="ri-star-fill"></i></li>
                        <li><i class="ri-star-fill"></i></li>
                        <li><i class="ri-star-fill"></i></li>
                        <li><i class="ri-star-fill"></i></li>
                    </ul>
                    <p class="client-quote">Lorem ipsum dolor sit amet adip selection repellat tetur delni vel quam aliq earu expel dolor eme fugiat enim amet sit dolor.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-8">
                    <p class="mb-0 md-center">Are you impressed?Do you want to take our service here? <a href="appointment.html" class="link style1">Book An Appointment</a></p>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial Section End -->

    <!-- Why Choose Us Section Start -->
    <section class="wh-wrap style2 pb-100">
        <div class="container">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6">
                    <div class="wh-img-wrap">
                        <form action="#" class="appointment-form">
                            <h2>Book An Appointment</h2>
                            <div class="form-group">
                                <input type="text" placeholder="Full name">   
                            </div>
                            <div class="form-group">
                                <input type="number" placeholder="Phone Number">   
                            </div>
                            <div class="form-group">
                                <select name="select_doctor" id="select_doctor">
                                    <option value="0" data-display="Select Doctor">Select Doctor</option>
                                    <option value="1" >Dr. Novlel Josef</option>
                                    <option value="2" >Dr. Fredrick Henry</option>
                                    <option value="3" >Dr. Steave Mark</option>
                                </select>   
                            </div>
                            <div class="form-group">
                                <input type="date">   
                            </div>
                            <button type="submit" class="btn style2">Book Now</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="wh-content">
                        <div class="content-title style1">
                            <span>Why Choose us</span>
                            <h2>Protect Your Health With Our Health Package</h2>
                            <p>There are many variations of passages of Lorem Ipsum amets avoilble but majority have suffered alteration in some form, by injected humour or randomise words which don't sure amet consec tetur adicing.</p>
                        </div>
                        <div class="feature-item-wrap">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="flaticon-pulse"></i>
                                </div>
                                <div class="feature-text">
                                    <h3>Good People Work</h3>
                                    <p>Vestibulum ac diam sit amet quam vehicula elemen tum sed sit amet dui praesent sapien pellen tesque .</p>
                                </div>
                            </div>
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="flaticon-pills"></i>
                                </div>
                                <div class="feature-text">
                                    <h3>Live Healthy Life</h3>
                                    <p>Vestibulum ac diam sit amet quam vehicula elemen tum sed sit amet dui praesent sapien pellen tesque.</p>
                                </div>
                            </div>
                        </div>
                        <a href="about.html" class="btn style7">Get More info</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Why Choose Us Section End -->

    <!-- Partner Area Start -->
    <div class="container  pb-100">
        <div class="partner-slider-one owl-carousel">
            <div class="partner-item">
                <img src="assets/img/partner/partner-7.png" alt="Image">
            </div>
            <div class="partner-item">
                <img src="assets/img/partner/partner-8.png" alt="Image">
            </div>
            <div class="partner-item">
                <img src="assets/img/partner/partner-9.png" alt="Image">
            </div>
            <div class="partner-item">
                <img src="assets/img/partner/partner-10.png" alt="Image">
            </div>
            <div class="partner-item">
                <img src="assets/img/partner/partner-11.png" alt="Image">
            </div>
            <div class="partner-item">
                <img src="assets/img/partner/partner-12.png" alt="Image">
            </div>
        </div>
    </div>
    <!-- Partner Area End -->

</div>
<!-- Content wrapper end -->


<section class="wh-wrap style2 pt-100">
    <div class="container">
        <div class="row gx-5 align-items-center">
            <div class="col-lg-6 aos-init" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="200">
                <div class="wh-img-wrap">
                    <form action="#" class="appointment-form">
                        <h2>Book An Appointment</h2>
                        <div class="form-group">
                            <input type="text" placeholder="Full name">   
                        </div>
                        <div class="form-group">
                            <input type="number" placeholder="Phone Number">   
                        </div>
                        <div class="form-group">
                            <select name="select_doctor" id="select_doctor">
                                <option value="0" data-display="Select Doctor">Select Doctor</option>
                                <option value="1">Dr. Novlel Josef</option>
                                <option value="2">Dr. Fredrick Henry</option>
                                <option value="3">Dr. Steave Mark</option>
                            </select>   
                        </div>
                        <div class="form-group">
                            <input type="date">   
                        </div>
                        <button type="submit" class="btn style2">Book Now</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-6 aos-init" data-aos="fade-left" data-aos-duration="1200" data-aos-delay="200">
                <div class="wh-content">
                    <div class="content-title style1">
                        <span>Why Choose us</span>
                        <h2>Protect Your Health With Our Health Package</h2>
                        <p>There are many variations of passages of Lorem Ipsum amets avoilble but majority have suffered alteration in some form, by injected humour or randomise words which don't sure amet consec tetur adicing.</p>
                    </div>
                    <div class="feature-item-wrap">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="flaticon-pulse"></i>
                            </div>
                            <div class="feature-text">
                                <h3>Good People Work</h3>
                                <p>Vestibulum ac diam sit amet quam vehicula elemen tum sed sit amet dui praesent sapien pellen tesque .</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="flaticon-pills"></i>
                            </div>
                            <div class="feature-text">
                                <h3>Live Healthy Life</h3>
                                <p>Vestibulum ac diam sit amet quam vehicula elemen tum sed sit amet dui praesent sapien pellen tesque.</p>
                            </div>
                        </div>
                    </div>
                    <a href="about.html" class="btn style7">Get More info</a>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection