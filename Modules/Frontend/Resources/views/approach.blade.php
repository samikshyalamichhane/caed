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
<section class="skills-section section-padding" id="approach">
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
@endsection