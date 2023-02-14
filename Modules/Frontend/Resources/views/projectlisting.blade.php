@extends('frontend::layouts.master')
@section('content')

<section class="page-banner-wrap bg-cover sameoverlay" style="background-image: url('{{Storage::url($dashboard_site->project_report_banner)}}">
        <div class="inner-overlay"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="page-heading text-white">
                        <div class="sub-title">
                            <h4><strong>Our Mission:</strong> Food, Education, Medicine</h4>
                        </div>
                        <div class="page-title">
                            <h1>Projects and Partners</h1>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Projects and Partners</li>
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
                        <button data-filter="*" class="active">Our Projects</button>
                        <button data-filter=".water">Onging Projects and Partners</button>
                        <button data-filter=".festival">Completed Projects and Partners</button>
                        <!--<button data-filter=".proevent">Pro Event</button>-->
                        <!--<button data-filter=".trending">Trending</button>-->
                    </div>
                </div>
            </div>

            <div class="row grid">
                @foreach($projects->where('projectCategory_id',2) as $project)
                <div class="col-12 col-lg-6 col-xl-12 water grid-item">
                    <div class="single-event-ticket row align-items-center">
                        <div class="col-xl-4">
                            <div class="event-featured-cover bg-cover" style="background-image: url('{{Storage::url($project->image)}}')">
                                <div class="event-time-address">
                                    <span><i class="fal fa-calendar-alt"></i>{{ \Carbon\Carbon::parse($project->created_at)->format('jS F, Y') }}</span>
                                    <!-- <span><i class="fal fa-map-marker-alt"></i>NY, London</span> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 pr-xl-0">
                            <div class="event-info">
                                <h2><a href="{{route('projectDetail',$project->slug)}}">{{$project->title}}</a></h2>
                                <p>{!! $project->description !!}</p>
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
                @foreach($projects->where('projectCategory_id',3) as $project)
                <div class="col-12 col-lg-6 col-xl-12 festival grid-item">
                    <div class="single-event-ticket row align-items-center">
                        <div class="col-xl-4">
                            <div class="event-featured-cover bg-cover" style="background-image: url('{{Storage::url($project->image)}}')">
                                <div class="event-time-address">
                                    <span><i class="fal fa-calendar-alt"></i>{{ \Carbon\Carbon::parse($project->created_at)->format('jS F, Y') }}</span>
                                    <!-- <span><i class="fal fa-map-marker-alt"></i>NY, London</span> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 pr-xl-0">
                            <div class="event-info">
                                <h2><a href="event-details.html">{{$project->title}}</a></h2>
                                <p>{!! $project->description !!}</p>
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