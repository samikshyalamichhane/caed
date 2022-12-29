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
                </div>
            </div>
        </div>
    </div>
</section>

<section class="team-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8 offset-lg-2 text-center">
                <div class="section-title mb-40">
                    <span><i class="fal fa-heart"></i>Team </span>
                    <h1>Executive Committee<span>(Board)</span></h1>
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
                    <h1>WoGCRP<span>Staff</span></h1>
                </div>
            </div>
            @foreach($wogcrpstaffs as $staff)
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
                    <h1>KLEP<span>Staff</span></h1>
                </div>
            </div>
            @foreach($klepstaffs as $staff)
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