@extends('layouts.app')
@section('breadcrumb')
<ol class="breadcrumb border-0 m-0">
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item"><a href="{{ route('partner.index') }}">Partner</a></li>
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
            <form method="post" action="{{ route('partner.update',$partner->id) }}" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header"><i class="fa fa-align-justify"></i> Edit Partner</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="name">Partner Name </label>
                                    <input name="name" class="form-control" value="{{ $partner->name }}">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="location">Location </label>
                                    <input name="location" class="form-control" value="{{ $partner->location }}" placeholder="Enter Location">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="category">Select Category</label>
                                    <select class="form-control form-control-sm" id="category" name="category">
                                        <option value="">Select Category</option>
                                        <option value="funding" {{ $partner->category=='funding' ? 'selected' : '' }}>Funding Partners</option>
                                        <option value="consortium" {{ $partner->category=='consortium' ? 'selected' : '' }}>Consortium Partners</option>
                                        <option value="implementing" {{ $partner->category=='implementing' ? 'selected' : '' }}>Implementing Partners</option>
                                    </select>
                                </div>
                            </div>
                             <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="description"> Description</label>
                                    <textarea name="description" class="form-control">{{ $partner->description }}</textarea>
                                </div>
                            </div> 
                        </div>
                        <div class="form-group row">
                            <label class="col-md-1 col-form-label">Image</label>
                            <div class="col-md-9 col-form-label">
                                <div class="row">
                                    <div class="col-6 colxs-12">
                                        <div class="form-check checkbox">
                                            <input type="file" name="image" class="form-control" onchange="preview()">
                                            <img id="frame" src="{{ Storage::url($partner->image) }}" width="100px"
                                                height="100px" />
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
                                                    value="true" {{ $partner->publish==1?'checked':'' }}>
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
</script>
