@extends('frontend::layouts.master')
@section('content')

<section class="page-banner-wrap bg-cover sameoverlay" style="background-image: url('{{Storage::url($news->bg_image)}}')">
        <div class="inner-overlay"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="page-heading text-white">
                        <div class="sub-title">
                            <h4><strong>Our Mission:</strong> Food, Education, Medicine</h4>
                        </div>
                        <div class="page-title">
                            <h1>News and Events Details</h1>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                          <li class="breadcrumb-item active" aria-current="page">News Details</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <section class="blog-wrapper news-wrapper section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="blog-post-details border-wrap">
                        <div class="single-blog-post post-details">                            
                            <div class="post-content">
                                <div class="post-cat">
                                    <a href="#">Charity</a>
                                    <a href="#">help</a>
                                </div>
                                <h2>{{$news->title}}</h2>
                               
                                <div class="post-meta">
                                    <span><i class="fal fa-calendar-alt"></i>{{ \Carbon\Carbon::parse($news->created_at)->format('jS F, Y') }}
                                    </span>
                                </div>
                                 <img src="{{Storage::url($news->image)}}" alt="">
                                <p>{!! $news->description !!}</p>
                            </div>
                        </div>
                        <div class="row tag-share-wrap">
                            <!-- <div class="col-lg-6 col-12">
                                <h4>Releted Tags</h4>
                                <div class="tagcloud">                                   
                                    <a href="news-details.html">water</a>
                                    <a href="news-details.html">charity</a>
                                    <a href="news-details.html">donate</a>
                                </div>
                            </div> -->
                            <div class="col-lg-6 col-12">
                                <h4>Social Share</h4>
                                <div class="social-share" style="align: center;">
                                    <!-- Go to www.addthis.com/dashboard to customize your tools -->
                                     <div class="addthis_inline_share_toolbox"></div>                                   
                                </div>
                            </div>
                            <hr>
                        </div>

                        <!-- <div class="related-post-wrap">
                            <h3>Related Post</h3>

                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="single-related-post">
                                        <div class="featured-thumb bg-cover" style="background-image: url('assets/img/blog/p1.jpg')"></div>
                                        <div class="post-content">
                                            <div class="post-date">
                                                <span><i class="fal fa-calendar-alt"></i>27th March 2021</span>
                                            </div>
                                            <h4><a href="news-details.html">How To Provide Fresh Water In Nigeria</a></h4>
                                            <p>Lorem ipsum dolor sit amet, conse ctet ur adipisicing elit, sed doing.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="single-related-post">
                                        <div class="featured-thumb bg-cover" style="background-image: url('assets/img/blog/p2.jpg')"></div>
                                        <div class="post-content">
                                            <div class="post-date">
                                                <span><i class="fal fa-calendar-alt"></i>24th July 2020</span>
                                            </div>
                                            <h4><a href="news-details.html">How Does Malnutrition Affect Children.</a></h4>
                                            <p>Lorem ipsum dolor sit amet, conse ctet ur adipisicing elit, sed doing.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="main-sidebar">
                        <!-- <div class="single-sidebar-widget author-box-widegts">
                            <div class="wid-title">
                                <h3>About Me</h3>
                            </div>
                            <div class="author-info text-center">
                                <div class="author-img" style="background-image: url('assets/img/blog/author_img.jpg');"></div>
                                <h4>Rosalina D. Willaimson</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                                <div class="social-profile">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="single-sidebar-widget">
                            <div class="wid-title">
                                <h3>Search Objects</h3>
                            </div>
                            <div class="search_widget">
                                <form action="#">
                                    <input type="text" placeholder="Search your keyword...">
                                    <button type="submit"><i class="fal fa-search"></i></button>
                                </form>
                            </div>
                        </div> -->
                        <div class="single-sidebar-widget">
                            <div class="wid-title">
                                <h3>Popular Feeds</h3>
                            </div>
                            <div class="popular-posts">
                                @foreach($relatedposts as $post)
                                <div class="single-post-item">
                                    <div class="thumb bg-cover" style="background-image: url('{{Storage::url($post->image)}}')"></div>
                                    <div class="post-content">
                                        <h5><a href="{{route('newsInner',$post->slug)}}">{{$post->title}}</a></h5>

                                        <div class="post-date">
                                            <i class="far fa-calendar-alt"></i>{{ \Carbon\Carbon::parse($post->created_at)->format('jS F, Y') }}
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <!-- <div class="single-sidebar-widget">
                            <div class="wid-title">
                                <h3>Categories</h3>
                            </div>
                            <div class="widget_categories">
                                <ul>
                                    <li><a href="news.html">Consultant <span>23</span></a></li>
                                    <li><a href="news.html">Help <span>24</span></a></li>
                                    <li><a href="news.html">Education <span>11</span></a></li>
                                    <li><a href="news.html">Technology <span>05</span></a></li>
                                    <li><a href="news.html">business <span>06</span></a></li>
                                    <li><a href="news.html">Events <span>10</span></a></li>    
                                </ul>                                
                            </div>
                        </div>
                        <div class="single-sidebar-widget">
                            <div class="wid-title">
                                <h3>Never Miss News</h3>
                            </div>
                            <div class="social-link">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                        <div class="single-sidebar-widget instagram-widget">
                            <div class="wid-title">
                                <h3>Instagram Feeds</h3>
                            </div>
                            <div class="instagram-gallery">
                                <a href="assets/img/img1.jpg" class="single-photo-item bg-cover popup-gallery" style="background-image: url('assets/img/img1.jpg')">                                    
                                </a>
                                <a href="assets/img/img2.jpg" class="single-photo-item bg-cover popup-gallery" style="background-image: url('assets/img/img2.jpg')">                                    
                                </a>
                                <a href="assets/img/img3.jpg" class="single-photo-item bg-cover popup-gallery" style="background-image: url('assets/img/img3.jpg')">                                    
                                </a>
                                <a href="assets/img/img4.jpg" class="single-photo-item bg-cover popup-gallery" style="background-image: url('assets/img/img4.jpg')">                                    
                                </a>
                                <a href="assets/img/img5.jpg" class="single-photo-item bg-cover popup-gallery" style="background-image: url('assets/img/img5.jpg')">                                    
                                </a>
                                <a href="assets/img/img6.jpg" class="single-photo-item bg-cover popup-gallery" style="background-image: url('assets/img/img6.jpg')">                                    
                                </a>
                            </div>
                        </div>
                        <div class="single-sidebar-widget">
                            <div class="wid-title">
                                <h3>Popular Tags</h3>
                            </div>
                            <div class="tagcloud">
                                <a href="#">event</a>     
                                <a href="#">help</a>
                                <a href="#">ux</a>
                                <a href="#">food</a>                                
                                <a href="#">ui</a>
                                <a href="#">water</a>
                                <a href="#">charity</a>
                                <a href="#">donate</a>
                            </div>
                        </div> -->
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection