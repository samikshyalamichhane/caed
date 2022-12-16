@extends('frontend::layouts.master')
@section('content')

<section class="hero-slider hero-style-1">
    <div class="hero-slider-active owl-carousel">
        @foreach($sliders as $slider)
        <div class="single-slide" style="background-image: url('{{Storage::url($slider->image)}}')">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6">
                        <div class="slide-contents text-white">
                            <div class="sub-itle">
                                <h4>{{$slider->slider_title}} </h4>
                            </div>
                            <h1 class="fs-lg">{!! $slider->slider_description !!}</h1>
                            <!--<a href="causes.html" class="theme-btn">View Causes</a>-->
                            <!--<a href="#" class="theme-btn no-fil">Donate Now</a>-->
                            <a href="{{route('partners')}}" class="theme-btn">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- single-slide end -->
        @endforeach
        {{--<div class="single-slide" style="background-image: url('https://www.nepalitimes.com/wp-content/uploads/2019/01/page-7a-1-1.jpg')">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6">
                        <div class="slide-contents text-white">
                            <div class="sub-itle">
                                <h4>Welcome to<strong> KLEP</strong> </h4>
                            </div>
                            <h1 class="fs-lg">More charity. Make More better life.</h1>
                            <a href="partner.html" class="theme-btn">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- single-slide end -->
        <div class="single-slide" style="background-image: url('https://www.datocms-assets.com/7165/1572878597-agr.jpg')">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6">
                        <div class="slide-contents text-white">
                            <div class="sub-itle">
                                <h4>Welcome to<strong> WOGCRP</strong> </h4>
                            </div>
                            <h1 class="fs-lg">The Centre for Agro-Ecology and Development </h1>
                            <!--<a href="causes.html" class="theme-btn">View Causes</a>-->
                            <!--<a href="#" class="theme-btn no-fil">Donate Now</a>-->
                            <a href="partner.html" class="theme-btn">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- single-slide end -->
        <div class="single-slide" style="background-image: url('https://www.nepalitimes.com/wp-content/uploads/2019/01/page-7a-1-1.jpg')">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6">
                        <div class="slide-contents text-white">
                            <div class="sub-itle">
                                <h4>Welcome to<strong> WRRP</strong> </h4>
                            </div>
                            <h1 class="fs-lg">More charity. Make More better life.</h1>
                            <a href="partner.html" class="theme-btn">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- single-slide end -->--}}


    </div>
</section>

<!-- <section class="promo-section promo-box-items text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="support-promo-box text-white">
                        <div class="promo-bg bg-cover" style="background-image: url('https://codexpeed.com/html/fundbux-html/assets/img/slide2.jpg')"></div>
                        <div class="promo-details">
                            <span>Livelihood</span>
                            <h2><a href="#">Empowerment</a></h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="checkout-promo-box text-white">
                        <div class="icon">
                            <img src="assets/img/home1/support_icon.png" alt="">
                        </div>                        
                        <span>Women, Girls and Child </span>
                        <h2>Rights Programs</h2>
                        <a href="causes.html" class="theme-btn black">Check It Out</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="subscribe-promo-box text-white">
                        <div class="icon">
                            <img src="assets/img/home1/envalope.png" alt="">
                        </div>                        
                        <span>Women's Reproductive</span>
                        <h2> Rights Program</h2>

                        <form action="#" class="mailchimp-form">
                            <input type="email" placeholder="Enter email address">
                            <button type="submit"><i class="fal fa-envelope"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

<section class="about-us-section section-padding pt-235 overflow-hidden">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-shots">
                    <div class="about-top-img bg-cover" style="background-image: url('assets/img/i5.jpg')"></div>
                    <div class="about-main-img">
                        <img src="{{Storage::url($homepage->home_image)}}??{{asset('assets/img/img1.png')}}" alt="" class="img-fluid">
                    </div>
                    <div class="our-experience text-white d-none d-sm-block">
                        <h1>{{$homepage->home_year}}</h1>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 about_left_content pr-lg-0 pl-lg-5">
                <div class="section-title">
                    <!--<span><i class="fal fa-heart"></i>About Us</span>-->
                    <h1>{{$homepage->home_title}}</h1>
                </div>
                <p>{!! $homepage->home_description !!}</p>

                <a href="{{route('about')}}" class="theme-btn minimal-btn ml-80 mt-35">Learn More</a>
            </div>
        </div>
    </div>
</section>

<section class="cause-section section-padding section-bg same-color">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8 offset-lg-2 text-center">
                <div class="section-title mb-40">

                    <h1>Approaches and Strategies</h1>
                </div>
            </div>
        </div>

        <div class="row align-items-center app-btn">
            <div class="col-lg-5 offset-lg-1 col-md-12 pl-lg-0">
                <div class="block-feature-list">
                    @foreach($approaches as $key=>$approach)
                    @if($loop->iteration % 2 == 0)
                    <div class="single-block-item">
                        <div class="icon">
                            <!--<img src="assets/img/block-icon1.png" alt="caed">-->
                            <i class="{{$approach->icon ?? 'fa fa-users'}}" aria-hidden="true"></i>
                        </div>
                        <div class="heading">
                            <h3>{{$approach->title}}</h3>
                            <p>{!! $approach->description !!}</p>
                        </div>
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>

            <div class="col-lg-5 offset-lg-1 col-md-12 pl-lg-0">
                <div class="block-feature-list">
                    @foreach($approaches as $key=>$approach)
                    @if($loop->iteration % 2 != 0)
                    <div class="single-block-item">
                        <div class="icon">
                            <!--<img src="assets/img/block-icon1.png" alt="caed">-->
                            <i class="{{$approach->icon ?? 'fa fa-users' }}" aria-hidden="true"></i>
                        </div>
                        <div class="heading">
                            <h3>{{$approach->title}}</h3>
                            <p>{!! $approach->description !!}</p>
                        </div>
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>
        </div>

    </div>
</section>



<section class="video-section bg-cover section-padding" style="background-image: url('assets/img/i1.jpg')">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-12 text-center text-lg-left">
                <div class="section-title">
                    <span><i class="fal fa-heart"></i>Life Changing Video</span>
                    <h1>Joel Orphanage Of Ministry Uganda</h1>
                </div>
            </div>
            <div class="col-lg-4 col-12 text-center text-lg-right offset-lg-1 mt-4 mt-lg-0">
                <div class="video-play-btn">
                    <a href="https://www.facebook.com/CAEDNepal/" class="play-video popup-video"><i class="fas fa-play"></i></a>
                    <a href="https://www.facebook.com/CAEDNepal/" class="popup-video play-text text-white text-capitalize pl-4">play video</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="blog-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-50">
                <div class="section-title">

                    <h1>News & Events</h1>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach($news as $detail)
            @if ($loop->first)
            <div class="col-lg-6 pr-3 pl-3 pr-lg-5">
                <div class="blog-card">
                    <div class="single-blog-card">
                        <div class="featured-img bg-cover" style="background-image: url('{{Storage::url($detail->image)}}')"></div>
                        <div class="post-content">
                            <div class="post-meta d-flex">
                                <div class="post-author">
                                    <i class="fal fa-user"></i>By <a href="#">{{$detail->author}}</a>
                                </div>
                                <div class="post-cat">
                                    <i class="fal fa-tags"></i>
                                    <a href="news.html">Charity</a>
                                    <a href="news.html">Fundrise</a>
                                </div>
                            </div>

                            <h3><a href="{{route('newsInner',$detail->slug)}}">{{$detail->title}}</a></h3>
                            <p>{!! $detail->short_description !!}</p>

                        </div>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
            <div class="col-lg-6">
                <div class="blog-list-view">
                    @foreach($news as $key=>$details)
                    @if($key > 0)
                    <div class="single-blog-item">
                        <div class="post-date">
                            <img src="{{Storage::url($details->image)}}" alt="" class="img-fluid">
                        </div>
                        <div class="post-content">
                            <div class="post-meta">
                                <div class="post-author">
                                    <i class="fal fa-user"></i>By <a href="#">{{$details->author}}</a>
                                </div>
                                <div class="post-cat">
                                    <i class="fal fa-tags"></i>
                                    <a href="news.html">Charity</a>
                                    <a href="news.html">Donate</a>
                                </div>
                            </div>

                            <h3><a href="{{route('newsInner',$details->slug)}}">{{$details->title}}</a></h3>
                            <p>{!! $details->short_description !!}</p>
                        </div>
                    </div> <!-- ./single-blog-item -->
                    @endif
                    @endforeach
                    {{--<div class="single-blog-item">
                            <div class="post-date">
                                <img src="assets/img/img2.png" alt="" class="img-fluid">
                            </div>
                            <div class="post-content">
                                <div class="post-meta">
                                    <div class="post-author">
                                        <i class="fal fa-user"></i>By <a href="#">Modina Theme</a>
                                    </div>
                                    <div class="post-cat">
                                        <i class="fal fa-tags"></i>
                                        <a href="news.html">Charity</a>
                                        <a href="news.html">Fundrise</a>
                                    </div>
                                </div>

                                <h3><a href="news-details.html">The New Volunteer Workforce</a></h3>
                                <p>Many of us have no idea what it's like to be thirsty. We have plenty of water to drink even.</p>
                            </div>
                        </div> <!-- ./single-blog-item -->
                        <div class="single-blog-item">
                            <div class="post-date">
                                <img src="assets/img/img3.jpg" alt="" class="img-fluid">
                            </div>
                            <div class="post-content">
                                <div class="post-meta">
                                    <div class="post-author">
                                        <i class="fal fa-user"></i>By <a href="#">Salman Ahmed</a>
                                    </div>
                                    <div class="post-cat">
                                        <i class="fal fa-tags"></i>
                                        <a href="news.html">Charity</a>
                                        <a href="news.html">Fundrise</a>
                                    </div>
                                </div>

                                <h3><a href="news-details.html">Be Aware of Stereotyping</a></h3>
                                <p>Forty million victims of modern slavery: That figure made headlines of water to drink even.</p>
                            </div>
                        </div> <!-- ./single-blog-item -->--}}
                </div>
            </div>
        </div>

    </div>
</section>

<section class="cta-section theme-bg text-white section-padding dn">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-4 pr-xl-0">
                <div class="section-title">
                    <span><i class="fal fa-heart"></i>Call To Action</span>
                    <h1>Give Your Big Hand Forever</h1>
                </div>
            </div>
            <div class="col-xl-8 mt-5 mt-xl-0">
                <div class="cta-subscribe-form">
                    <form action="#" class="row">
                        <div class="col-md-6 pr-5i">
                            <div class="single-input">
                                <input type="text" placeholder="Enter your name" required>
                                <span class="fal fa-user"></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="single-input">
                                <input type="text" placeholder="Enter phone number" required>
                                <span class="fal fa-phone"></span>
                            </div>
                        </div>
                        <div class="col-md-4 pr-5i">
                            <div class="single-input">
                                <input type="text" placeholder="Enter address" required>
                                <span class="far fa-map-marker-alt"></span>
                            </div>
                        </div>
                        <div class="col-md-4 pr-5i">
                            <div class="single-input">
                                <input type="text" placeholder="Zip Code">
                                <span class="fal fa-map"></span>
                            </div>
                        </div>
                        <div class="col-md-4">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="popular-cause-section section-padding pb-0">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-8 text-left mb-40">
                <div class="section-title">

                    <h1>Projects and Partners</h1>
                </div>
            </div>
            <div class="col-4 text-right mb-40">
                <div class="cause-carousel-nav"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="popular-cause-carousel-active owl-carousel owl-theme mt-40">
                    @foreach($projects as $project)
                    <div class="single-cause-item style-2">
                        <div class="cause-featured-img bg-cover" style="background-image: url('{{Storage::url($project->image)}}')">
                            <!-- <a href="causes.html" class="cause-cat">water</a> -->
                            <div class="donate-progress-bar wow fadeInLeft" data-wow-duration="2s" data-percentage="70%">
                                <div class="progress-title-holder clearfix"> <span class="progress-number-wrapper">
                                        <span class="progress-number-mark"> <span class="percent"></span> <span class="down-arrow"></span> </span> </span> </div>
                                <div class="progress-content-outter">
                                    <div class="progress-content"></div>
                                </div>
                            </div>
                        </div>
                        <div class="cause-details">
                            <!-- <div class="cause-amount d-flex justify-content-between">
                                    <div class="price-raised"> <i class="fal fa-location"></i> Dhading</div>
                                    <div class="price-goal"> <i class=""></i><span>$30000</span> Budget
                                    </div>
                                </div> -->
                            <h4> <a href="{{route('projectDetail',$project->slug)}}">{{$project->title}}</a> </h4>
                        </div>
                    </div>
                    @endforeach
                    {{--<div class="single-cause-item style-2">
                            <div class="cause-featured-img bg-cover"
                                style="background-image: url('assets/img/i4.jpg')">
                                <a href="causes.html" class="cause-cat">water</a>
                                <div class="donate-progress-bar wow fadeInLeft" data-wow-duration="2s"
                                    data-percentage="90%">
                                    <div class="progress-title-holder clearfix"> <span class="progress-number-wrapper">
                                            <span class="progress-number-mark"> <span class="percent"></span> <span
                                                    class="down-arrow"></span> </span> </span> </div>
                                    <div class="progress-content-outter">
                                        <div class="progress-content"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="cause-details">
                                <div class="cause-amount d-flex justify-content-between">
                                    <div class="price-raised"> <i class="fal fa-location"></i> Dhading</div>
                                    <div class="price-goal"> <i class=""></i><span>$30000</span> Budget
                                    </div>
                                </div>
                                <h4> <a href="cause-details.html">Child Deserves Better Healthy Foods</a> </h4>
                            </div>
                        </div>
                        <div class="single-cause-item style-2">
                            <div class="cause-featured-img bg-cover"
                                style="background-image: url('assets/img/i3.jpg')">
                                <a href="causes.html" class="cause-cat">water</a>
                                <div class="donate-progress-bar wow fadeInLeft" data-wow-duration="2s"
                                    data-percentage="80%">
                                    <div class="progress-title-holder clearfix"> <span class="progress-number-wrapper">
                                            <span class="progress-number-mark"> <span class="percent"></span> <span
                                                    class="down-arrow"></span> </span> </span> </div>
                                    <div class="progress-content-outter">
                                        <div class="progress-content"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="cause-details">
                                <div class="cause-amount d-flex justify-content-between">
                                    <div class="price-raised"> <i class="fal fa-location"></i> Dhading</div>
                                    <div class="price-goal"> <i class=""></i><span>$30000</span> Budget
                                    </div>
                                </div>
                                <h4> <a href="cause-details.html">Childhood Education Development support</a> </h4>
                            </div>
                        </div>
                        <div class="single-cause-item style-2">
                            <div class="cause-featured-img bg-cover"
                                style="background-image: url('assets/img/i4.jpg')">
                                <a href="causes.html" class="cause-cat">water</a>
                                <div class="donate-progress-bar wow fadeInLeft" data-wow-duration="2s"
                                    data-percentage="55%">
                                    <div class="progress-title-holder clearfix"> <span class="progress-number-wrapper">
                                            <span class="progress-number-mark"> <span class="percent"></span> <span
                                                    class="down-arrow"></span> </span> </span> </div>
                                    <div class="progress-content-outter">
                                        <div class="progress-content"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="cause-details">
                                <div class="cause-amount d-flex justify-content-between">
                                    <div class="price-raised"> <i class="fal fa-location"></i> Dhading</div>
                                    <div class="price-goal"> <i class=""></i><span>$30000</span> Budget
                                    </div>
                                </div>
                                <h4> <a href="cause-details.html">Emergency response and school food</a> </h4>
                            </div>
                        </div>--}}
                </div>
            </div>
        </div>
    </div>
</section>

@endsection