@extends('frontend::layouts.master')
@section('content')

<section class="page-banner-wrap bg-cover sameoverlay" style="background-image: url('{{Storage::url(@$dashboard_site->resources_banner)}}')">
        <div class="inner-overlay"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="page-heading text-white">
                        <div class="sub-title">
                            <h4><strong>Our Mission:</strong> Food, Education, Medicine</h4>
                        </div>
                        <div class="page-title">
                            <h1>Resources</h1>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Resources</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <section class="blog-wrapper news-wrapper section-padding newnews">
        <div class="container">
            
                
                    <div class="row blog-posts">
                        @foreach($resources as $resource)
                        <div class="col-md-4 single-blog-post">
                            <!--<div class="post-featured-thumb bg-cover" style="background-image: url('assets/img/img1.jpg')"></div>-->
                            <div class="post-content">
                               
                                <h2><a href="vacancies-detail.html">{{$resource->title}}</a></h2>
                                
                                <p>{!! $resource->description !!}</p>
                                    <div class="d-flex justify-content-between align-items-center mt-30">
                                   
                                    <div class="post-link">
                                        <a href="{{ Storage::url('public/resource/'.$resource->file) }}" target="_blank" download><i class="fal fa-download"></i> Download</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        {{--<div class="col-md-4 single-blog-post">
                            <!--<div class="post-featured-thumb bg-cover" style="background-image: url('assets/img/img2.png')"></div>-->
                            <div class="post-content">
                               
                                <h2><a href="news-details.html">Back to the future: Quality education through.</a></h2>
                                
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidid unt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in repreh enderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                <div class="d-flex justify-content-between align-items-center mt-30">
                                    <div class="author-info">
                                        <div class="author-img" style="background-image: url('assets/img/blog/author_img.jpg')"></div>
                                        <h5><a href="#">by Hetmayar</a></h5>
                                    </div>
                                    <div class="post-link">
                                        <a href="news-details.html"><i class="fal fa-download"></i> Download</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                        <div class="col-md-4 single-blog-post">
                            <!--<div class="post-featured-thumb bg-cover" style="background-image: url('assets/img/img3.jpg')"></div>-->
                            <div class="post-content">
                                
                                <h2><a href="news-details.html">Take Care Of The Elderly Without Home.</a></h2>
                                                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidid unt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in repreh enderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>

                                <div class="d-flex justify-content-between align-items-center mt-30">
                                    <div class="author-info">
                                        <div class="author-img" style="background-image: url('assets/img/blog/author_img.jpg')"></div>
                                        <h5><a href="#">by Hetmayar</a></h5>
                                    </div>
                                    <div class="post-link">
                                        <a href="news-details.html"><i class="fal fa-download"></i> Download</a>
                                    </div>
                                </div>
                            </div>
                        </div>--}}
                       
                    </div>
                    {{--<div class="page-nav-wrap mt-60 text-center">
                        <ul>
                            <li><a href="#"><i class="fal fa-long-arrow-left"></i></a></li>
                            <li><a href="#">01</a></li>
                            <li><a href="#">02</a></li>
                            <li><a href="#">..</a></li>
                            <li><a href="#">10</a></li>
                            <li><a href="#">11</a></li>
                            <li><a href="#"><i class="fal fa-long-arrow-right"></i></a></li>
                        </ul>
                    </div> <!-- /.col-12 col-lg-12 --> --}}
              
               
           
        </div>
    </section>

@endsection