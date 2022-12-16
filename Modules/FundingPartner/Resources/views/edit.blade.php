@extends('layouts.app')
@section('breadcrumb')
<ol class="breadcrumb border-0 m-0">
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item"><a href="{{ route('FundingPartner.index') }}">FundingPartner</a></li>
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
            <form method="post" action="{{ route('FundingPartner.update',$fundingPartners->id) }}"
                enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header"><i class="fa fa-align-justify"></i> Edit FundingPartner</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input name="title" class="form-control" value="{{ $fundingPartners->title }}" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="partner_type">Select Funding Partners Category</label>
                                    <select name="partner_type" class="form-control">
                                        <option value=""></option>
                                        <option value="current">Current Funding Partners</option>
                                        <option value="past">Past Funding Partners</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="website_link">Website Link</label>
                                    <input name="website_link" class="form-control" value="{{ $fundingPartners->website_link }}">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label">Logo</label>
                            <div class="col-md-9 col-form-label">
                                <div class="row">
                                    <div class="col-6 colxs-12">
                                        <div class="form-check checkbox">
                                            <input type="file" name="logo" class="form-control" onchange="preview()">
                                            <img id="frame" src="{{ Storage::url($fundingPartners->logo) }}" width="100px"
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
                                    $fundingPartners->publish?'checked':'' }}>
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
