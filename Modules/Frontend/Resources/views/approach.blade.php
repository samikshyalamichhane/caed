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
                        <h1>Our Approach and Strategies</h1>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Our Approach and Strategies</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<section class="upcoming-events-wrap section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-12 text-center">
                    <div class="event-cat-filter mb-20">
                        <button data-filter="*" class="active">All</button>
                        <button data-filter=".water">Our Approach</button>
                        <button data-filter=".festival">Our Strategies</button>
                                            </div>
                </div>
            </div>

            <div class="row grid" style="position: relative; height: 1025px;">
                                <div class="col-12 col-lg-6 col-xl-12 water proevent grid-item" style="position: absolute; left: 0%; top: 0px;">
                    <div class="single-event-ticket row align-items-center">
                        <div class="col-xl-4">
                            <div class="event-featured-cover bg-cover" style="background-image: url('https://caed.webhousejapan.com//storage/public/partner/1671102559.jpg')">
                                <div class="event-time-address">
                                    <span><i class="fal fa-calendar-alt"></i>24th June 2020</span>
                                    <!-- <span><i class="fal fa-map-marker-alt"></i>NY, London</span> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 pr-xl-0">
                            <div class="event-info">
                                <h2><a href="event-details.html">Project Management In The Voluntary Sector</a></h2>
                                <p></p><h2 style="margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; line-height: 2.5rem; font-size: 1.875rem; border: 0px; outline: 0px; font-family: arialregular; color: rgb(32, 36, 38);"><span style="color: rgb(114, 116, 117); font-family: Roboto, sans-serif; font-size: 18px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidid unt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in repreh enderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</span></h2><p></p>
                            </div>
                        </div>
                        <div class="col-xl-3 text-xl-right">
                            <div class="event-ticket-buy">
                                <a href="event-details.html" class="ticket-buy-btn"><i class="fal fa-home"></i>Book A Seat</a>
                            </div>
                        </div>
                    </div> <!-- single-event-ticket -->
                </div>  
                 
                 
                <div class="col-12 col-lg-6 col-xl-12 festival proevent grid-item" style="position: absolute; left: 0%; top: 434px;">
                    <div class="single-event-ticket row align-items-center">
                        <div class="col-xl-4">
                            <div class="event-featured-cover bg-cover" style="background-image: url('https://caed.webhousejapan.com//storage/public/partner/1671102589.png')">
                                <div class="event-time-address">
                                    <span><i class="fal fa-calendar-alt"></i>24th July 2021</span>
                                    <!-- <span><i class="fal fa-map-marker-alt"></i>NY, London</span> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 pr-xl-0">
                            <div class="event-info">
                                <h2><a href="event-details.html">10 Ways To Help Others That Will Lead You</a></h2>
                                <p></p><p><span style="color: rgb(114, 116, 117); font-family: Roboto, sans-serif; font-size: 18px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidid unt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in repreh enderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</span></p><p></p>
                            </div>
                        </div>
                        <div class="col-xl-3 text-xl-right">
                            <div class="event-ticket-buy">
                                <a href="event-details.html" class="ticket-buy-btn"><i class="fal fa-home"></i>Book A Seat</a>
                            </div>
                        </div>
                    </div> <!-- single-event-ticket -->
                </div> 
                  
                 
                <div class="col-12 col-lg-6 col-xl-12 implementing proevent grid-item" style="position: absolute; left: 0%; top: 755px;">
                    <div class="single-event-ticket row align-items-center">
                        <div class="col-xl-4">
                            <div class="event-featured-cover bg-cover" style="background-image: url('https://caed.webhousejapan.com//storage/public/partner/1671102625.png')">
                                <div class="event-time-address">
                                    <span><i class="fal fa-calendar-alt"></i>24th July 2021</span>
                                    <!-- <span><i class="fal fa-map-marker-alt"></i>NY, London</span> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 pr-xl-0">
                            <div class="event-info">
                                <h2><a href="event-details.html">Helping The Church To Serve Others</a></h2>
                                <p></p><p><span style="color: rgb(114, 116, 117); font-family: Roboto, sans-serif; font-size: 18px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidid unt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in repreh enderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</span></p><p></p>
                            </div>
                        </div>
                        <div class="col-xl-3 text-xl-right">
                            <div class="event-ticket-buy">
                                <a href="event-details.html" class="ticket-buy-btn"><i class="fal fa-home"></i>Book A Seat</a>
                            </div>
                        </div>
                    </div> <!-- single-event-ticket -->
                </div> 
                         
            </div>

            
        </div>
    </section>
@endsection