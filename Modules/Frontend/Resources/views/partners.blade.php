@extends('frontend::layouts.master')
@section('content')

<section class="page-banner-wrap bg-cover sameoverlay" style="background-image: url({{Storage::url($dashboard_site->partner_banner)}})">
        <div class="inner-overlay"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="page-heading text-white">
                        <div class="sub-title">
                            <h4><strong>Our Mission:</strong> Food, Education, Medicine</h4>
                        </div>
                        <div class="page-title">
                            <h1>Project & Partners</h1>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Project & Partners</li>
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
                        <button data-filter="*" class="active">Our Partners</button>
                        <button data-filter=".water">Funding Partner</button>
                        <button data-filter=".festival">Consortium Partner</button>
                        <button data-filter=".implementing">Implementing Partner</button>
                        <!--<button data-filter=".proevent">Pro Event</button>-->
                        <!--<button data-filter=".trending">Trending</button>-->
                    </div>
                </div>
            </div>

            <div class="row grid">
                @foreach($partners->where('category','funding')  as $partner)
                <div class="col-12 col-lg-6 col-xl-12 water proevent grid-item">
                    <div class="single-event-ticket row align-items-center">
                        <div class="col-xl-4">
                            <div class="event-featured-cover bg-cover" style="background-image: url('{{Storage::url($partner->image)}}')">
                                <div class="event-time-address">
                                    <span><i class="fal fa-calendar-alt"></i>24th June 2020</span>
                                    <!-- <span><i class="fal fa-map-marker-alt"></i>NY, London</span> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 pr-xl-0">
                            <div class="event-info">
                                <h2><a href="event-details.html">{{$partner->name}}</a></h2>
                                <p>{!! $partner->description !!}</p>
                            </div>
                        </div>
                        <div class="col-xl-3 text-xl-right">
                            <div class="event-ticket-buy">
                                <a href="event-details.html" class="ticket-buy-btn"><i class="fal fa-home"></i>Book A Seat</a>
                            </div>
                        </div>
                    </div> <!-- single-event-ticket -->
                </div>  
                @endforeach 
                @foreach($partners->where('category','consortium') as $partner) 
                <div class="col-12 col-lg-6 col-xl-12 festival proevent grid-item">
                    <div class="single-event-ticket row align-items-center">
                        <div class="col-xl-4">
                            <div class="event-featured-cover bg-cover" style="background-image: url('{{Storage::url($partner->image)}}')">
                                <div class="event-time-address">
                                    <span><i class="fal fa-calendar-alt"></i>24th July 2021</span>
                                    <!-- <span><i class="fal fa-map-marker-alt"></i>NY, London</span> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 pr-xl-0">
                            <div class="event-info">
                                <h2><a href="event-details.html">{{$partner->name}}</a></h2>
                                <p>{!! $partner->description !!}</p>
                            </div>
                        </div>
                        <div class="col-xl-3 text-xl-right">
                            <div class="event-ticket-buy">
                                <a href="event-details.html" class="ticket-buy-btn"><i class="fal fa-home"></i>Book A Seat</a>
                            </div>
                        </div>
                    </div> <!-- single-event-ticket -->
                </div> 
                @endforeach  
                @foreach($partners->where('category','implementing')  as $partner) 
                <div class="col-12 col-lg-6 col-xl-12 implementing proevent grid-item">
                    <div class="single-event-ticket row align-items-center">
                        <div class="col-xl-4">
                            <div class="event-featured-cover bg-cover" style="background-image: url('{{Storage::url($partner->image)}}')">
                                <div class="event-time-address">
                                    <span><i class="fal fa-calendar-alt"></i>24th July 2021</span>
                                    <!-- <span><i class="fal fa-map-marker-alt"></i>NY, London</span> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 pr-xl-0">
                            <div class="event-info">
                                <h2><a href="event-details.html">{{$partner->name}}</a></h2>
                                <p>{!! $partner->description !!}</p>
                            </div>
                        </div>
                        <div class="col-xl-3 text-xl-right">
                            <div class="event-ticket-buy">
                                <a href="event-details.html" class="ticket-buy-btn"><i class="fal fa-home"></i>Book A Seat</a>
                            </div>
                        </div>
                    </div> <!-- single-event-ticket -->
                </div> 
                @endforeach         
            </div>

            {{--<div class="row align-items-center">
                <div class="col-12 col-lg-12 text-center">
                    <div class="causes-page-nav mt-50 causes-pages-link">
                        <ul>
                            <li><a href="#"><i class="fal fa-long-arrow-left"></i></a></li>
                            <li><a href="#">01</a></li>
                            <li><a href="#">02</a></li>
                            <li><a href="#">03</a></li>
                            <li><a href="#">04</a></li>
                            <li><a href="#"><i class="fal fa-long-arrow-right"></i></a></li>
                        </ul>
                    </div><!-- /.blog-page-nav -->
                </div> <!-- /.col-12 col-lg-12 -->  
            </div>--}}
        </div>
    </section>

@endsection