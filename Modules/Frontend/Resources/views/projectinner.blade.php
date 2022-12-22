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
            <div class="col-12 col-lg-8">
                <div class="blog-post-details border-wrap project-detail-wrap">
                    <div class="single-blog-post post-details">
                        <div class="post-content">

                            <h2>{{$project->title}}</h2>
                            <img src="{{Storage::url($project->image)}}" alt="">
                            <p>{!! $project->description !!}</p>
                        </div>
                    </div>


                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="main-sidebar">
                    <div class="single-sidebar-widget">
                        <div class="wid-title">
                            <h3>Related Projects</h3>
                        </div>
                        <div class="popular-posts">
                            @foreach($relatedprojects as $project)
                            <div class="single-post-item">
                                <div class="thumb bg-cover" style="background-image: url('{{Storage::url($project->image)}}')"></div>
                                <div class="post-content">
                                    <h5><a href="{{route('projectDetail',$project->slug)}}">{{$project->title}}</a></h5>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</section>
@endsection