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

<section class="team-section section-padding" id="our-team">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8 offset-lg-2 text-center">
                <div class="section-title mb-40">
                    <span><i class="fal fa-heart"></i>Team </span>
                    <h1>Executive Committee<span>(Board)</span></h1>
                </div>
            </div>
            @foreach($exec_teams as $staff)
            <div class="col-lg-3 col-md-6 col-12">
                <div class="single-team-member text-center">
                    <div class="member-img">
                        <img src="{{Storage::url($staff->image)}}" alt="">
                        <div class="small-element"></div>
                    </div>
                    <div class="member-details">
                        <h3>{{$staff->name}}</h3>
                        <span>{{$staff->position}}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="join-team-btn text-center mt-50">
            <a href="{{route('contact')}}">Join With Us</a>
        </div>
    </div>
</section>
<section class="team-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8 offset-lg-2 text-center">
                <div class="section-title mb-40">
                    <span><i class="fal fa-heart"></i>Team </span>
                    <h1>WoGCRP<span>Staff</span></h1>
                </div>
            </div>
            @foreach($wogcrpstaffs as $staff)
            <div class="col-lg-3 col-md-6 col-12">
                <div class="single-team-member text-center">
                    <div class="member-img">
                        <img src="{{Storage::url($staff->image)}}" alt="">
                        <div class="small-element"></div>
                    </div>
                    <div class="member-details">
                        <h3>{{$staff->name}}</h3>
                        <span>{{$staff->position}}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="join-team-btn text-center mt-50">
            <a href="{{route('contact')}}">Join With Us</a>
        </div>
    </div>
</section>
<section class="team-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8 offset-lg-2 text-center">
                <div class="section-title mb-40">
                    <span><i class="fal fa-heart"></i>Team </span>
                    <h1>KLEP<span>Staff</span></h1>
                </div>
            </div>
            @foreach($klepstaffs as $staff)
            <div class="col-lg-3 col-md-6 col-12">
                <div class="single-team-member text-center">
                    <div class="member-img">
                        <img src="{{Storage::url($staff->image)}}" alt="">
                        <div class="small-element"></div>
                    </div>
                    <div class="member-details">
                        <h3>{{$staff->name}}</h3>
                        <span>{{$staff->position}}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="join-team-btn text-center mt-50">
            <a href="{{route('contact')}}">Join With Us</a>
        </div>
    </div>
</section>
@endsection