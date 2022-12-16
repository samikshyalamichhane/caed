@extends('frontend::layouts.master')
@section('content')

<section class="page-banner-wrap bg-cover sameoverlay" style="background-image: url('{{Storage::url(@$dashboard_site->volunteer_banner)}}')">
    <div class="inner-overlay"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-8">
                <div class="page-heading text-white">
                    <div class="sub-title">
                        <h4><strong>Our Mission:</strong> Food, Education, Medicine</h4>
                    </div>
                    <div class="page-title">
                        <h1>Volunteering</h1>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Volunteering</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<section class="mt-5 volunteer-wrap">
    <div class="container">
        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>
        <h3>Apply Now For Volunteering</h3>
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
        <div class="offset-2 col-md-8 volunteer-form mb-5">
            <form action="{{route('volunteer.post')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label>Name:</label>
                    <input type="text" class="form-control" id="name" placeholder="John Doe" name="name">
                </div>
                <div class="form-group">
                    <label>Email:</label>
                    <input type="email" class="form-control" id="name" placeholder="john@gmail.com" name="email">
                </div>

                <div class="form-group">
                    <label>Phone No.:</label>
                    <input type="text" class="form-control" id="phone" placeholder="987654543" name="phone">
                </div>
                <div class="form-group">
                    <label>Country:</label>
                    <select class="form-control b-select" name="country">
                        <option value="nepal">Nepal</option>
                        <option value="india">India</option>
                        <option value="china">China</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Message</label>
                    <textarea name="issues" class="form-control" id="iq" placeholder="Message"></textarea>
                </div>


                <button type="submit" class="btn btn-default">Apply Now</button>
            </form>
        </div>
    </div>
</section>

@endsection