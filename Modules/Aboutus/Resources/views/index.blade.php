@extends('layouts.app')
@section('breadcrumb')
<ol class="m-0 border-0 breadcrumb">
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item"><a href="#">About US Info</a></li>
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
    <form method="post" action="{{ route('aboutus.update',$aboutus->id) }}" enctype="multipart/form-data">
    @csrf
    
        <div class="content">
        <div>
                <input type="checkbox" id="question1" name="q"  class="questions">
                <div class="plus">+</div>
                <label for="question1" class="question font-weight-bold">
                    SEO DETAILS:
                </label>
                <div class="answers">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="meta_title">Meta Title</label>
                                <input type="text" name="meta_title" class="form-control" placeholder="Enter Meta Title"
                                    value="{{ $aboutus->meta_title }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="meta_keyword">Meta KeyWord</label>
                                <input type="text" name="meta_keyword" class="form-control" placeholder="Enter Meta Keyword"
                                    value="{{ $aboutus->meta_keyword }}">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="description">Meta Description</label>
                                <textarea name="description" class="form-control">
                                    {{ $aboutus->description }}
                                </textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <input type="checkbox" id="question1" name="q"  class="questions">
                <div class="plus">+</div>
                <label for="question1" class="question font-weight-bold">
                    WHO WE ARE:
                </label>
                <div class="answers">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="short_description">About Description</label>
                                <textarea name="short_description" class="form-control">
                                    {{ $aboutus->short_description }}
                                </textarea>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <label class="col-form-label">About Us Page Image</label>
                            <div class="col-form-label">
                                <div class="row">
                                    <div class="col-12 colxs-12">
                                        <div class="form-check checkbox">
                                            <input type="file" name="aboutus_inner_image" class="form-control"
                                                onchange="aboutus_inner_imagePreview()">
                                            <img id="aboutus_inner_image" src="{{ Storage::url($aboutus->aboutus_inner_image) }}"
                                                width="100px" height="100px" />
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <label class="col-form-label">Organizational Image</label>
                            <div class="col-form-label">
                                <div class="row">
                                    <div class="col-12 colxs-12">
                                        <div class="form-check checkbox">
                                            <input type="file" name="organizational_image" class="form-control"
                                                onchange="organizational_imagePreview()">
                                            <img id="organizational_image" src="{{ Storage::url($aboutus->organizational_image) }}"
                                                width="100px" height="100px" />
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <label class="col-form-label">Organizational BackGround Image</label>
                            <div class="col-form-label">
                                <div class="row">
                                    <div class="col-12 colxs-12">
                                        <div class="form-check checkbox">
                                            <input type="file" name="organizational_back_image" class="form-control"
                                                onchange="organizationalback_imagePreview()">
                                            <img id="organizational_back_image" src="{{ Storage::url($aboutus->organizational_back_image) }}"
                                                width="100px" height="100px" />
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <input type="checkbox" id="question2" name="q"  class="questions">
                <div class="plus">+</div>
                <label for="question2" class="question font-weight-bold">
                    OUR APPROACH AND STRATEGIES:
                </label>
                <div class="answers">
                    <div class="row">
                    <div class="col-sm-12">
                            <div class="form-group">
                                <label for="approach_title">Title </label>
                                <input type="text" name="approach_title" class="form-control" value="{{ $aboutus->approach_title }}">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="approach_short_description">Short Description</label>
                                <textarea name="approach_short_description" class="form-control">
                                    {{ $aboutus->approach_short_description }}
                                </textarea>
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
    function aboutus_inner_imagePreview() {
        aboutus_inner_image.src=URL.createObjectURL(event.target.files[0]);
    }
    function organizational_imagePreview() {
        organizational_image.src=URL.createObjectURL(event.target.files[0]);
    }
    function organizationalback_imagePreview() {
        organizational_back_image.src=URL.createObjectURL(event.target.files[0]);
    }
    
</script>
