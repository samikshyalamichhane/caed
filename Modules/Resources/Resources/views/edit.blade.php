@extends('layouts.app')
@section('breadcrumb')
<ol class="breadcrumb border-0 m-0">
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item"><a href="{{ route('resource.index') }}">resource</a> </li>
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
            <form method="post" action="{{ route('resource.update',$resource->id) }}"
                enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header"><i class="fa fa-align-justify"></i> Edit Resource</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="title">Resource Title</label>
                                    <input type="text" name="title" class="form-control" value="{{ $resource->title }}" >
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="category">Select Category</label>
                                    <select class="form-control form-control-sm" id="category" name="category">
                                        <option value="">Select Category</option>
                                        <option value="resource" {{ $partner->category=='resource' ? 'selected' : '' }}>Resources</option>
                                        <option value="report" {{ $partner->category=='report' ? 'selected' : '' }}>Project Reports</option>
                                        <option value="publication" {{ $partner->category=='publication' ? 'selected' : '' }}>Publications</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea name="description">{{ $resource->description }}</textarea>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="file">File</label>
                                    <input type="file" name="file" class="form-control" >
                                    <a href="{{ Storage::url('public/resource/'.$resource->file) }}">{{ $resource->file}}</a>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="publish">Publish</label>
                                <br>
                                <input id="publish" name="publish" type="checkbox" value="true" {{
                                    $resource->publish?'checked':'' }}>
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
