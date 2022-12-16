@extends('layouts.app')
@section('breadcrumb')
<ol class="breadcrumb border-0 m-0">
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item"><a href="{{ route('page.index') }}">page Events </a></li>
    <li class="breadcrumb-item">Edit</li>
</ol>
@endsection
@section('content')
<div class="container-fluid">
    <div class="fade-in">
        <div class="col-lg-12">
            @include('errors.validation-error')
            @if(Session::has('error'))
            @include('errors.catch-error',['catch_error'=>Session::get('error')])
            @endif
            <form method="post" action="{{ route('page.update',$page->id) }}"
                enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header"><i class="fa fa-align-justify"></i> Edit Page</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input name="title" class="form-control" value="{{ $page->title }}" required>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="short_description">page Short Description</label>
                                    <textarea name="short_description" class="form-control"
                                        required>{!! $page->short_description !!}</textarea>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="description">page Description</label>
                                    <textarea name="description" class="form-control"
                                        required>{!! $page->description !!}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label">Image</label>
                            <div class="col-md-6 col-form-label">
                                <div class="row">
                                    <div class="col-6 colxs-12">
                                        <div class="form-check checkbox">
                                            <input type="file" name="image" class="form-control" onchange="preview()">
                                            <img id="frame" src="{{ Storage::url($page->image) }}" width="100px"
                                                height="100px" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <label class="col-md-4 col-form-label">Background Image For Inner Page</label>
                            <div class="col-md-6 col-form-label">
                                <div class="row">
                                    <div class="col-6 colxs-12">
                                        <div class="form-check checkbox">
                                            <input type="file" name="bg_image" class="form-control" onchange="preview1()">
                                            <img id="frame1" src="{{ Storage::url($page->bg_image) }}" width="100px"
                                                height="100px" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="publish">Publish</label>
                                <br>
                                <input id="publish" name="publish" type="checkbox" value="true" {{
                                    $page->publish?'checked':'' }}>
                            </div>
                        </div>

                    </div>
                    <div class="card-footer">
                        <button class="btn btn-sm btn-primary" type="submit"> Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
<script>
    function preview() {
        frame.src=URL.createObjectURL(event.target.files[0]);
    }
    function preview1() {
        frame1.src=URL.createObjectURL(event.target.files[0]);
    }
</script>
