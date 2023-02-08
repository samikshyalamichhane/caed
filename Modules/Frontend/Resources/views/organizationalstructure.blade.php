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
                        <h1>About Us</h1>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">about us</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<div class="timeline-wrap bg-cover section-padding" id="org-structure" style="background-image: url('{{Storage::url($about->organizational_back_image)}}' ?? {{asset('assets/img/timeline-bg.png')}}">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-10 offset-lg-1 text-center orgstr">
                <div class="section-title mb-40">
                    <span><i class="fal fa-heart"></i>Structure</span>
                    <h1>Organizational<span>Structure</span></h1>
                </div>
                <div class="org-structure">
                    <a href="#"><img src="{{Storage::url($about->organizational_image)}}" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection