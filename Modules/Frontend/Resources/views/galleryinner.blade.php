@extends('frontend::layouts.master')
@section('content')

<section class="page-banner-wrap bg-cover sameoverlay" style="background-image: url('{{Storage::url($dashboard_site->gallery_banner)}}')">
    <div class="inner-overlay"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-8">
                <div class="page-heading text-white">
                    <div class="sub-title">
                        <h4><strong>Our Mission:</strong> Food, Education, Medicine</h4>
                    </div>
                    <div class="page-title">
                        <h1>Gallery</h1>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Gallery</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<section class="section-padding">

    <div class="container">
        <div class="gallery">
            <div class="row">
                @forelse($images as $image)
                <div class="col-md-3">
                    <a class="example-image-link" href="{{Storage::url('public/images/gallery/'.$image->image)}}" data-lightbox="example-set" data-title=""><img class="example-image" src="{{Storage::url('public/images/gallery/'.$image->image)}}" alt="" /></a>
                </div>
                @empty
                <div class="col-md-12">
                    No Images Found in this Gallery!!
                </div>
                @endforelse
            </div>
        </div>
    </div>
</section>

@endsection