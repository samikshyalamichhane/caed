@extends('frontend::layouts.master')

@section('content')
<section class="page-banner-wrap bg-cover sameoverlay" style="background-image: url('{{Storage::url($dashboard_site->aboutus_banner)}}')">
    <div class="inner-overlay"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-8">
                <div class="page-heading text-white">
                    <div class="sub-title">
                        <h4><strong>Our Mission:</strong> Food, Education, Medicine</h4>
                    </div>
                    <div class="page-title">
                        <h1>Who We Are</h1>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Who We Are</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<section class="about-us-section section-padding about-page newabt" id="">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-shots">
                    <div class="about-main-img">
                        <img src="{{Storage::url($about->aboutus_inner_image)}}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 about_left_content mt-0 pr-lg-0 pl-lg-5">
                <div class="section-title">
                    <span><i class="fal fa-heart"></i>About Us</span>
                    <h1>Who We Are<span>caed</span></h1>
                </div>
                <p>
                    {!! $about->short_description !!}
                </p>
                     <!-- <div class="testimonial-quote">
                    <div class="feedback">
                        Join our community of monthly donors bringing clean water to
                        people in need. <a href="#">Get Started Now</a>
                    </div>
                    <div class="user-info d-flex align-items-center">
                        <div class="profile-img bg-cover" style="background-image: url('assets/img/user-img.jpg')">
                        </div>
                        <span>Rosalina. Williamson</span>
                    </div>
                </div> -->

                <ul class="list-box">
                    <li>We track every dollar</li>
                    <li>We’re an open book</li>
                    <li>100% goes to the field</li>
                    <li>Received the highest grades</li>
                </ul>
            </div>
        </div>
    </div>
</section>
@endsection