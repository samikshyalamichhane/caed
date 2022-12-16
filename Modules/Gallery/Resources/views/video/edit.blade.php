@extends('layouts.app')
@section('breadcrumb')
<ol class="breadcrumb border-0 m-0">
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item"><a href="{{ route('video.index') }}"> Video Gallery </a></li>
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
            <form method="post" action="{{ route('video.update',$details->id) }}"
                enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header"><i class="fa fa-align-justify"></i> Gallery</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input name="title" class="form-control" value="{{ $details->title }}" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                            <div class="form-group">
                                <label for="video">Thumbnail Video Link</label>
                                <input type="text" name="video" class="form-control" value="{{ $details->thumbnail_video }}" required>
                            </div>
                        </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="description">Video Gallery Description</label>
                                    <textarea name="description" class="form-control"
                                        required>{!! $details->description !!}</textarea>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="publish">Publish</label>
                                <br>
                                <input id="publish" name="publish" type="checkbox" value="true" {{
                                    $details->publish?'checked':'' }}>
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

