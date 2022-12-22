@extends('frontend::layouts.master')
@section('content')
<section class="page-banner-wrap bg-cover sameoverlay" style="background-image: url('{{Storage::url($dashboard_site->contact_banner)}}')">
    <div class="inner-overlay"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-8">
                <div class="page-heading text-white">
                    <div class="sub-title">
                        <h4><strong>Our Mission:</strong> Food, Education, Medicine</h4>
                    </div>
                    <div class="page-title">
                        <h1>Project Detail</h1>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Project Detail</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<section class="project-detail">
    <div class="container">
        <div class="row">
            <!--<div class="col-md-9">-->
            <!--    <h2>Back to the future: Quality education through.</h2>-->
            <!--    <img src="https://caed.webhousejapan.com//storage/public/projects/1671097164.jpg" alt="">-->
            <!--    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidid unt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in repreh enderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>-->
            <!--   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidid unt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in repreh enderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>-->
            <!--</div>-->
            <div class="col-12 col-lg-8">
                    <div class="blog-post-details border-wrap project-detail-wrap">
                        <div class="single-blog-post post-details">                            
                            <div class="post-content">
                               
                                <h2>Back to the future: Quality education through.</h2>
                                <img src="https://caed.webhousejapan.com//storage/public/projects/1671097164.jpg" alt="">
                                <p></p><p><span style="color: rgb(114, 116, 117); font-family: Roboto, sans-serif; font-size: 16px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidid unt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in repreh enderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</span></p><p></p>
                            </div>
                        </div>
                        
                        
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
                                <h3>Related Projects</h3>
                            </div>
                            <div class="popular-posts">
                                                                <div class="single-post-item">
                                    <div class="thumb bg-cover" style="background-image: url('https://caed.webhousejapan.com//storage/public/newsevents/1671095768.jpg')"></div>
                                    <div class="post-content">
                                        <h5><a href="https://caed.webhousejapan.com/news/save-the-children-s-role-in-fight-against-malnutrition-hailed">Save the Children’s Role in Fight Against Malnutrition Hailed</a></h5>

                                        
                                    </div>
                                </div>
                                                                <div class="single-post-item">
                                    <div class="thumb bg-cover" style="background-image: url('https://caed.webhousejapan.com//storage/public/newsevents/1671691687.jpg')"></div>
                                    <div class="post-content">
                                        <h5><a href="https://caed.webhousejapan.com/news/the-new-volunteer-workforce">The New Volunteer Workforce</a></h5>

                                        
                                    </div>
                                </div>
                                <div class="single-post-item">
                                    <div class="thumb bg-cover" style="background-image: url('https://caed.webhousejapan.com//storage/public/newsevents/1671095768.jpg')"></div>
                                    <div class="post-content">
                                        <h5><a href="https://caed.webhousejapan.com/news/save-the-children-s-role-in-fight-against-malnutrition-hailed">Save the Children’s Role in Fight Against Malnutrition Hailed</a></h5>

                                        
                                    </div>
                                </div>
                                                            </div>
                        </div>
                       
                        
                    </div>
                </div>
        </div>
    </div>
</section>
@endsection