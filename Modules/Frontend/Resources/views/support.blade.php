@extends('frontend::layouts.master')
@section('content')

<section class="page-banner-wrap bg-cover sameoverlay" style="background-image: url('{{Storage::url($page->bg_image)}}')">
        <div class="inner-overlay"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="page-heading text-white">
                        <div class="sub-title">
                            <h4><strong>Our Mission:</strong> Food, Education, Medicine</h4>
                        </div>
                        <div class="page-title">
                            <h1>Support and Donate</h1>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Support and Donate</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <section class="event-details-wrap section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="event-fetaured-thumb">
                        <img src="{{Storage::url($page->image)}}" alt="event details">
                    </div>
                </div>
                <div class="col-12 col-lg-7 col-xl-8">
                    <div class="event-details-contents">

                        <p>{!!$page->short_description!!}</p>
                      
                    </div>
                </div>
                {{--<div class="col-12 col-lg-5 col-xl-4">
                    <div class="event-details-sidebar">
                        <div class="single-event-sidebar wow fadeInUp">
                            <div class="sidebar-title">
                                <h3>Event Details</h3>
                            </div>

                            <div class="event-address-info">
                                <div class="single-address-info">
                                    <div class="icon icon1">
                                        <i class="fal fa-map-marker-alt"></i>
                                    </div>
                                    <div class="address">
                                        <p>12/A, Miranda Halim City Town Hall, NYC</p>
                                    </div>
                                </div>
                                <div class="single-address-info">
                                    <div class="icon icon2">
                                        <i class="fal fa-envelope"></i>
                                    </div>
                                    <div class="address">
                                        <p>info@webmail.com</p>
                                    </div>
                                </div>
                                <div class="single-address-info">
                                    <div class="icon icon3">
                                        <i class="fal fa-phone"></i>
                                    </div>
                                    <div class="address">
                                        <p>908-098-098-09</p>
                                    </div>
                                </div>
                                <a href="#" class="theme-btn minimal-btn">Book Your Seat</a>
                            </div>
                        </div>

                        <!--<div class="single-event-sidebar wow fadeInUp">-->
                        <!--    <div class="sidebar-title">-->
                        <!--        <h3>Special Guest</h3>-->
                        <!--    </div>-->

                        <!--    <div class="special-guest-list">-->
                        <!--        <div class="single-guest-info">-->
                        <!--            <div class="profile-img" style="background-image: url('assets/img/event/guest1.jpg')"></div>-->
                        <!--            <div class="guest-bio">-->
                        <!--                <h5>Kinlon K. Karlo</h5>-->
                        <!--                <span>Speaker</span>-->
                        <!--            </div>-->
                        <!--        </div>-->
                        <!--        <div class="single-guest-info">-->
                        <!--            <div class="profile-img" style="background-image: url('assets/img/event/guest2.jpg')"></div>-->
                        <!--            <div class="guest-bio">-->
                        <!--                <h5>Salman Khan</h5>-->
                        <!--                <span>Actor</span>-->
                        <!--            </div>-->
                        <!--        </div>-->
                        <!--        <div class="single-guest-info">-->
                        <!--            <div class="profile-img" style="background-image: url('assets/img/event/guest3.jpg')"></div>-->
                        <!--            <div class="guest-bio">-->
                        <!--                <h5>Joy Roy</h5>-->
                        <!--                <span>Speaker</span>-->
                        <!--            </div>-->
                        <!--        </div>-->
                        <!--        <div class="single-guest-info">-->
                        <!--            <div class="profile-img" style="background-image: url('assets/img/event/guest4.jpg')"></div>-->
                        <!--            <div class="guest-bio">-->
                        <!--                <h5>Ismail IRF</h5>-->
                        <!--                <span>Actor</span>-->
                        <!--            </div>-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--</div>-->

                        <!--<div class="event-map-wrap wow fadeInUp">-->
                        <!--    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5457.875323165521!2d144.90402300269133!3d-37.792722838344716!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad646b5d2ba4df7%3A0x4045675218ccd90!2sMelbourne%20VIC%2C%20Australia!5e0!3m2!1sen!2sbd!4v1612018663424!5m2!1sen!2sbd" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>-->
                        <!--</div>-->
                    </div>
                </div> --}}
            </div>
            <div class="donate-now">
                {!! $page->description !!}
             
            </div>
        </div>
    </section>

@endsection