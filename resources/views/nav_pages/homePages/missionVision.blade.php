@extends('welcome')
@section('content')
<div class="content-wrapper">
<section class="wh-wrap style3 ptb-100 bg-chathamas" style="; margin-top:100px">
    <div class="container">
        <div class="row gx-5 align-items-center">
       
            <div class="" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="200">
                <div class="wh-content">
                    <div class="content-title style2" style="text-align: center">
                        <h2>Our Mission and Vision</h2>
                        <p>After working in the healthcare industry for so many years, we decided it was time to transform <br> the way home care and nursing staffing is carried out. This transformation birth Cyncare Health Ltd, <br> a company that strives to deliver the highest quality of care to our service users. <br>We are not a franchise, we care for your loved ones like they were ours. </p>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <div class="doctor-img missionimg">
        <img src="{{ asset('assets\img\about\missionimg.png') }}" alt="Image" >
    </div>
</section>

<section class="wh-wrap style3 ptb-100 ">
    <div class="container">
        <div class="row gx-5 align-items-center">
            <div class="col-lg-6 order-lg-1 order-md-2 order-2 aos-init" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="200">
                <div class="wh-content">
                    <div class="content-title ">
                        <h2 style="color: #9155A7">Vision</h2>
                        <p>Our vision is underpinned by our values, providing a safer, outstanding care to service users.</p>
                    </div>
                        <h2 style="color: #9155A7">Mission</h2>
                        <p>We are a company that aim to always deliver exceptional care service to our service users. Our mission is to provide healthcare agency services to both individual clients and healthcare providers. We are not a franchise, we care for your loved ones like they were our own. We have a team of dedicated and exceptionally trained staff working together with other stakeholders to provide robust healthcare solution tailored to meet the specific needs of our services users and to bring about improved lives and flourishing communities.​</p>
                    </div>
                </div>
           
            <div class="col-lg-6 order-lg-1 order-md-2 order-2 aos-init" data-aos="fade-left" data-aos-duration="1200" data-aos-delay="200">
                <div class="wh-img-wrap">
                    <div class="wh-bg-3 bg-f" ></div>
                   
                </div>
            </div>
        </div>
        </div>
    </div>
</section>

</div>


@endsection