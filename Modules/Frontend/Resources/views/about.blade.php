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
                        <h1>About Us</h1>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">about us</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<section class="about-us-section section-padding about-page newabt">
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
                    <h1>About<span>caed</span></h1>
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

<div class="timeline-wrap bg-cover section-padding" style="background-image: url('{{Storage::url($about->organizational_back_image)}}' ?? {{asset('assets/img/timeline-bg.png')}}">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-10 offset-lg-1 text-center orgstr">
                <div class="section-title mb-40">
                    <span><i class="fal fa-heart"></i>Structure</span>
                    <h1>Organizational<span>Structure</span></h1>
                </div>
                <div class="org-structure">
                    <a href="#"><img src="{{Storage::url($about->organizational_image)}}" alt=""></a>
                </div>
            </div>

            <!-- <div class="col-12 p-md-0">
                    <div class="featured-timeline">
                        <div class="timeline">
                            <div class="timeline__wrap">
                              <div class="timeline__items">
                                
                                <div class="timeline__item">
                                  <div class="timeline__content">
                                    <h2>1998</h2>
                                    <p>- Journey Was Started</p>
                                    <img src="assets/img/timeline/1.jpg" alt="">
                                  </div>
                                </div>
                                
                                <div class="timeline__item">
                                  <div class="timeline__content">
                                    <h2>2002</h2>
                                    <p>- Journey Was Started</p>
                                    <img src="assets/img/timeline/2.jpg" alt="">
                                  </div>
                                </div>
                                
                                <div class="timeline__item">
                                  <div class="timeline__content">
                                    <h2>2010</h2>
                                    <p>- Journey Was Started</p>
                                    <img src="assets/img/timeline/3.jpg" alt="">
                                  </div>
                                </div>
                                
                                <div class="timeline__item">
                                  <div class="timeline__content">
                                    <h2>2018</h2>
                                    <p>- Journey Was Started</p>
                                    <img src="assets/img/timeline/4.jpg" alt="">
                                  </div>
                                </div>
                                
                                <div class="timeline__item">
                                  <div class="timeline__content">
                                    <h2>2020</h2>
                                    <p>- Journey Was Started</p>
                                    <img src="assets/img/timeline/1.jpg" alt="">
                                  </div>
                                </div>
                                
                                <div class="timeline__item">
                                  <div class="timeline__content">
                                    <h2>2021</h2>
                                    <p>- Journey Was Started</p>
                                    <img src="assets/img/timeline/2.jpg" alt="">
                                  </div>
                                </div>
                                
                              </div>
                            </div>
                        </div>
                    </div>
                </div> -->
        </div>
    </div>
</div>

<section class="skills-section section-padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 pr-lg-0">
                <div class="section-title mb-4">

                    <h1>{{$about->approach_title}}</h1>
                </div>
                <p>{!! $about->approach_short_description !!}</p>
            </div>
            <div class="col-lg-6 offset-lg-1 mt-5 mt-lg-0">
                <div class="skill-box-items row text-center">
                    @foreach($approaches as $approach)
                    <div class="col-12 col-sm-6">
                        <div class="single-skill-box bg-cover" style="background-image: url('{{Storage::url($approach->image)}}')">
                            <div class="skill-content">
                                <div class="icon">
                                    <i class="{{$approach->icon ?? 'fal fa-tint' }}"></i>
                                </div>
                                <h3>{{$approach->title}}</h3>
                                <p>{!! $approach->description !!}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- <div class="col-12 col-sm-6">
                            <div class="single-skill-box bg-cover" style="background-image: url('assets/img/img4.jpg')">
                                <div class="skill-content">
                                    <div class="icon">
                                        <i class="fal fa-hands-heart"></i>
                                    </div>
                                    <h3>Our Missions</h3>
                                    <p>Become the One Who is Considered a Hero</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="single-skill-box bg-cover" style="background-image: url('assets/img/img5.jpg')">
                                <div class="skill-content">
                                    <div class="icon">
                                        <i class="fal fa-medkit"></i>
                                    </div>
                                    <h3>Our Achievement</h3>
                                    <p>Become the One Who is Considered a Hero</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="single-skill-box bg-cover" style="background-image: url('assets/img/img6.jpg')">
                                <div class="skill-content">
                                    <div class="icon">
                                        <i class="fal fa-house-flood"></i>
                                    </div>
                                    <h3>Our Dream</h3>
                                    <p>Become the One Who is Considered a Hero</p>
                                </div>
                            </div>
                        </div> -->
                </div>
            </div>
        </div>
    </div>
</section>

<!--<section class="brands-carousel-section bg-cover bg-overlay section-padding"  style="background-image: url('assets/img/brand_carousel_bg.jpg')">-->
<!--    <div class="container">-->
<!--        <div class="row align-items-center">-->
<!--            <div class="col-12 col-lg-12">-->
<!--                <div class="brands-carousel-active owl-carousel d-flex align-items-center">-->
<!--                    <div class="single-brand-logo">-->
<!--                        <img src="assets/img/brand/1.png" alt="">-->
<!--                    </div>-->
<!--                    <div class="single-brand-logo">-->
<!--                        <img src="assets/img/brand/2.png" alt="">-->
<!--                    </div>-->
<!--                    <div class="single-brand-logo">-->
<!--                        <img src="assets/img/brand/3.png" alt="">-->
<!--                    </div>-->
<!--                    <div class="single-brand-logo">-->
<!--                        <img src="assets/img/brand/4.png" alt="">-->
<!--                    </div>-->
<!--                    <div class="single-brand-logo">-->
<!--                        <img src="assets/img/brand/5.png" alt="">-->
<!--                    </div>-->
<!--                    <div class="single-brand-logo">-->
<!--                        <img src="assets/img/brand/6.png" alt="">-->
<!--                    </div>-->
<!--                    <div class="single-brand-logo">-->
<!--                        <img src="assets/img/brand/1.png" alt="">-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section> -->
<section class="team-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8 offset-lg-2 text-center">
                <div class="section-title mb-40">
                    <span><i class="fal fa-heart"></i>Team </span>
                    <h1>Executive<span>Team</span></h1>
                </div>
            </div>
            @foreach($exec_teams as $staff)
            <div class="col-lg-3 col-md-6 col-12">
                <div class="single-team-member text-center">
                    <div class="member-img">
                        <img src="{{Storage::url($staff->image)}}" alt="">
                        <div class="small-element"></div>
                    </div>
                    <div class="member-details">
                        <h3>{{$staff->name}}</h3>
                        <span>{{$staff->position}}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="join-team-btn text-center mt-50">
            <a href="{{route('contact')}}">Join With Us</a>
        </div>
    </div>
</section>
<section class="team-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8 offset-lg-2 text-center">
                <div class="section-title mb-40">
                    <span><i class="fal fa-heart"></i>Team </span>
                    <h1>Our<span>Staff</span></h1>
                </div>
            </div>
            @foreach($staffs as $staff)
            <div class="col-lg-3 col-md-6 col-12">
                <div class="single-team-member text-center">
                    <div class="member-img">
                        <img src="{{Storage::url($staff->image)}}" alt="">
                        <div class="small-element"></div>
                    </div>
                    <div class="member-details">
                        <h3>{{$staff->name}}</h3>
                        <span>{{$staff->position}}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="join-team-btn text-center mt-50">
            <a href="{{route('contact')}}">Join With Us</a>
        </div>
    </div>
</section>

@endsection