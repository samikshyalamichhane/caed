@extends('layouts.app')
@section('breadcrumb')
<ol class="breadcrumb border-0 m-0">
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item"><a href="{{ route('PressRelease.index') }}">Press Release</a></li>
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
            <form method="post" action="{{ route('PressRelease.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header"><i class="fa fa-align-justify"></i> Add Press Release</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input name="title" class="form-control" value="{{ old('title') }}">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="date">Date</label>
                                    <input type="date" name="date" class="form-control" value="{{ old('date') }}">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="description"> Description</label>
                                    <textarea name="description" class="form-control"
                                        required>{{ old('description') }}</textarea>
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
                                            <img id="frame" src="" width="100px" height="100px" />
                                        </div>
                                    </div>

                                </div>
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
