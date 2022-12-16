@extends('layouts.app')
@section('breadcrumb')
<ol class="m-0 border-0 breadcrumb">
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item"><a href="#">HomePage Info</a></li>
    {{-- <li class="breadcrumb-item active">Dashboard</li> --}}
</ol>
@endsection
<style>

    .content {
        width: 100%;
        padding: 0;
        margin: 0 auto;
    }

    .question {
        position: relative;
        background: #fff;
        margin: 0;
        padding: 10px 10px 10px 50px;
        display: block;
        width:100%;
        cursor: pointer;
    }

    .answers {
        padding: 0px 15px;
        margin: 5px 0;
        width:100%!important;
        height: 0;
        overflow: hidden;
        /* z-index: -1; */
        position: relative;
        opacity: 0;
        -webkit-transition: .3s ease;
        -moz-transition: .3s ease;
        -o-transition: .3s ease;
        transition: .3s ease;
    }

    .questions:checked ~ .answers{
        height: auto;
        opacity: 1;
        background: #fff;
        padding: 15px;
    }

    .plus {
        position: absolute;
        margin-left: 10px;
        z-index: 5;
        font-size: 2em;
        line-height: 100%;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        -o-user-select: none;
        user-select: none;
        -webkit-transition: .3s ease;
        -moz-transition: .3s ease;
        -o-transition: .3s ease;
        transition: .3s ease;

    }

    .questions:checked ~ .plus {
        -webkit-transform: rotate(45deg);
        -moz-transform: rotate(45deg);
        -o-transform: rotate(45deg);
        transform: rotate(45deg);
    }

    .questions {
        display: none;
    }

</style>
@section('content')

<div class="container-fluid">
    @include('errors.validation-error')
        @if(Session::has('error'))
            @include('errors.catch-error',['catch_error'=>Session::get('error')])
        @endif
    <form method="post" action="{{ route('homepage.update',$aboutus->id) }}" enctype="multipart/form-data">
    @csrf
        <div class="content">
            <div>
                <input type="checkbox" id="question1" name="q"  class="questions">
                <div class="plus">+</div>
                <label for="question1" class="question font-weight-bold">
                    Home Page Description:
                </label>
                <div class="answers">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="home_title">Title</label>
                                <input type="text" name="home_title" class="form-control" value="{{ $aboutus->home_title }}">
                                    
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="navbar_title">Nav Bar Title</label>
                                <input type="text" name="navbar_title" class="form-control" value="{{ $aboutus->navbar_title }}">
                                    
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="home_year">Years</label>
                                <input type="text" name="home_year" class="form-control" value="{{ $aboutus->home_year }}">
                                    
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="home_description">Description</label>
                                <textarea name="home_description" class="form-control">
                                    {{ $aboutus->home_description }}
                                </textarea>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <label class="col-form-label">Home Page Image</label>
                            <div class="col-form-label">
                                <div class="row">
                                    <div class="col-12 colxs-12">
                                        <div class="form-check checkbox">
                                            <input type="file" name="home_image" class="form-control"
                                                onchange="home_image_imagePreview()">
                                            <img id="home_image" src="{{ Storage::url($aboutus->home_image) }}"
                                                width="100px" height="100px" />
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div>
            <button class="btn btn-primary" type="submit">Submit</button>
        </div>
    </form>
</div>
@endsection
<script>
    function home_image_imagePreview() {
        home_image.src=URL.createObjectURL(event.target.files[0]);
    }
    function organizational_imagePreview() {
        organizational_image.src=URL.createObjectURL(event.target.files[0]);
    }
</script>
