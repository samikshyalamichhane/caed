@extends('layouts.app')
@section('breadcrumb')
<ol class="breadcrumb border-0 m-0">
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item"><a href="{{ route('service.index') }}">Service</a></li>
    <li class="breadcrumb-item">Create</li>
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
            <form method="post" action="{{ route('service.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header"><i class="fa fa-align-justify"></i> Add Service</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input name="title" class="form-control" value="{{ old('title') }}" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="servicecategory_id">Select Service Category</label>
                                    <select class="form-control form-control-sm" id="servicecategory_id" name="servicecategory_id">
                                        <option value="">Select Service Category</option>
                                        @foreach($servicecategorys as $servicecategory)
                                        <option value="{{ $servicecategory->id }}">{{ $servicecategory->category_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="description">Service Description </label>
                                    <textarea name="description" class="form-control"
                                        required>{{ old('description') }}</textarea>
                                </div>
                            </div>
                            {{-- <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="service_full_description">Service Full Description </label>
                                    <textarea name="service_full_description" class="form-control"
                                        required>{{ old('service_full_description') }}</textarea>
                                </div>
                            </div> --}}
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12 col-form-label">
                                <div class="row">
                                    <div class="col-6 colxs-12">
                                        <label>Banner Image</label>
                                        <div class="form-check checkbox">
                                            <input type="file" name="image" class="form-control" onchange="preview()">
                                            <img id="frame" src="" width="100px" height="100px" />
                                        </div>
                                    </div>
                                    {{-- <div class="col-6 colxs-12">
                                        <label>Icon</label>
                                        <div class="form-check checkbox">
                                            <input type="file" name="icon" class="form-control"
                                                onchange="previewIcon()">
                                            <img id="frameIcon" src="" width="100px" height="100px" />
                                        </div>
                                    </div> --}}
                                    <div class="col-6 colxs-12">
                                        <label>Service Image</label>
                                        <div class="form-check checkbox">
                                            <input type="file" name="service_inner_banner" class="form-control"
                                                onchange="previewServiceBanner()">
                                            <img id="frameServiceBanner" src="" width="100px" height="100px" />
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-1 col-form-label">Publish</label>
                            <div class="col-md-9 col-form-label">
                                <div class="row">
                                    <div class="col-3 colxs-12">
                                        <div class="form-check checkbox">
                                            <input class="form-check-input" id="publish" name="publish" type="checkbox"
                                                value="true">
                                            <label class="form-check-label" for="publish">Publish</label>
                                        </div>
                                    </div>

                                </div>
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
    function previewIcon() {
        frameIcon.src=URL.createObjectURL(event.target.files[0]);
    }
    function previewServiceBanner() {
        frameServiceBanner.src=URL.createObjectURL(event.target.files[0]);
    }
</script>
