@extends('layouts.app')
@section('breadcrumb')
<ol class="breadcrumb border-0 m-0">
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item"><a href="{{ route('career.index') }}">Career</a></li>
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
            <form method="post" action="{{ route('career.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header"><i class="fa fa-align-justify"></i> Add Career</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="title">Job Title</label>
                                    <input name="title" class="form-control" value="{{ old('title') }}" >
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="no_of_requirement">No of vacancy</label>
                                    <input type="number" name="no_of_requirement" class="form-control"
                                        value="{{ old('no_of_requirement') }}" >
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="publish_date">Publish Date</label>
                                    <input type="date" name="publish_date" class="form-control"
                                        value="{{ old('publish_date') }}" >
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="date">Expiry Date</label>
                                    <input type="date" name="expiry_date" class="form-control"
                                        value="{{ old('expiry_date') }}" >
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="description">Job Description body </label>
                                    <textarea name="description" class="form-control">{{ old('description') }}</textarea>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="publish">Publish</label>
                                    <br>
                                    <input id="publish" name="publish" type="checkbox" value="true">

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
