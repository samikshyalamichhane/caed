@extends('layouts.app')
@section('breadcrumb')
<ol class="breadcrumb border-0 m-0">
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item"><a href="{{ route('career.index') }}">Career</a></li>
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
            <form method="post" action="{{ route('career.update',$career->id) }}" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header"><i class="fa fa-align-justify"></i>Edit Career</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="title">Job Title</label>
                                    <input name="title" class="form-control" value="{{ $career->title }}" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="no_of_requirement">No of vacancy</label>
                                    <input type="number" name="no_of_requirement" class="form-control"
                                        value="{{ $career->no_of_requirement }}" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="date">Expiry date</label>
                                    <input type="date" name="date" class="form-control"
                                        value="{{ $career->date }}" required>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="description">Job Description body </label>
                                    <textarea name="description" class="form-control">{{ $career->description  }}</textarea>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="publish">Publish</label>
                                    <br>
                                    <input id="publish" name="publish" type="checkbox" value="true" {{
                                        $career->publish?'checked':'' }}>

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
