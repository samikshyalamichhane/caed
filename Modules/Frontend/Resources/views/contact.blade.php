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
                        <h1>Contact Us</h1>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">contact</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<section class="contact-page-wrap section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-12">
                <div class="single-contact-card card1">
                    <div class="top-part">
                        <div class="icon">
                            <i class="fal fa-envelope"></i>
                        </div>
                        <div class="title">
                            <h4>Email Address</h4>
                            <span>Sent mail asap anytime</span>
                        </div>
                    </div>
                    <div class="bottom-part">
                        <div class="info">
                            <p>{{@$dashboard_site->email1}}</p>
                            <p>{{@$dashboard_site->email2}}</p>
                        </div>
                        <div class="icon">
                            <i class="fal fa-arrow-right"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="single-contact-card card2">
                    <div class="top-part">
                        <div class="icon">
                            <i class="fal fa-phone"></i>
                        </div>
                        <div class="title">
                            <h4>Phone Number</h4>
                            <span>call us asap anytime</span>
                        </div>
                    </div>
                    <div class="bottom-part">
                        <div class="info">
                            <p>{{@$dashboard_site->contact1}}</p>
                            <p>{{@$dashboard_site->contact2}} </p>
                        </div>
                        <div class="icon">
                            <i class="fal fa-arrow-right"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="single-contact-card card3">
                    <div class="top-part">
                        <div class="icon">
                            <i class="fal fa-map-marker-alt"></i>
                        </div>
                        <div class="title">
                            <h4>Office Address</h4>
                            <span>Sent mail asap anytime</span>
                        </div>
                    </div>
                    <div class="bottom-part">
                        <div class="info">
                            <p>{{@$dashboard_site->address}}</p>
                        </div>
                        <div class="icon">
                            <i class="fal fa-arrow-right"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="contact-map-wrap">
                    <div id="map">
                        <iframe src="{!!@$dashboard_site->map!!}" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>

        <div class="row section-padding pb-0">
            <div class="col-12 text-center mb-20">
                <div class="section-title">
                    <!--<span><i class="fal fa-pen"></i>Write Here</span>-->
                    <h1>Get In Touch</h1>
                </div>
            </div>

            <div class="col-12 col-lg-12">
                @if($errors->any())
                <div class="alert alert-danger">
                    <p><strong>Opps Something went wrong</strong></p>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                @if(Session::has('success'))
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    {!! Session::get('success') !!}
                </div>
                @endif
                @if(Session::has('error'))
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    {!! Session::get('error') !!}
                </div>
                @endif
                <div class="contact-form">
                    <form action="{{route('contactSave')}}" method="POST" class="row conact-form">
                        @csrf
                        <div class="col-md-6 col-12">
                            <div class="single-personal-info">
                                <label for="fname">Full Name</label>
                                <input type="text" id="fname" name="name" placeholder="Enter Name">
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="single-personal-info">
                                <label for="email">Email Address</label>
                                <input type="email" id="email" name="email" placeholder="Enter Email Address">
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="single-personal-info">
                                <label for="phone">Phone Number</label>
                                <input type="text" id="phone" name="phone_no" placeholder="Enter Number">
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="single-personal-info">
                                <label for="subject">Subject</label>
                                <input type="text" id="subject" name="subject" placeholder="Enter Subject">
                            </div>
                        </div>
                        <div class="col-md-12 col-12">
                            <div class="single-personal-info">
                                <label for="subject">Enter Message</label>
                                <textarea id="subject" name="comment" placeholder="Enter message"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12 col-12 text-center">
                            <input class="submit-btn" type="submit" value="Send">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
@push('page_scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    Swal.fire({
        // position: 'top-end',
        type: 'success',
        title: 'Done',
        html: message,
        confirmButtonText: 'Close',
        timer: 10000
    });
</script>
@endpush