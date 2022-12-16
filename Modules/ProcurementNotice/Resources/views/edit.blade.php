@extends('layouts.app')
@section('breadcrumb')
<ol class="breadcrumb border-0 m-0">
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item"><a href="{{ route('ProcurementNotice.index') }}">ProcurementNotice</a></li>
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
            <form method="post" action="{{ route('ProcurementNotice.update',$procurementNotices->id) }}" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header"><i class="fa fa-align-justify"></i> Edit ProcurementNotice</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input name="title" class="form-control" value="{{ $procurementNotices->title }}" required>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="publish_date">Publish Date</label>
                                    <input type="date" name="publish_date" class="form-control"
                                        value="{{ $procurementNotices->publish_date }}" >
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="submission_date">Submission Date</label>
                                    <input type="date" name="submission_date" class="form-control"
                                        value="{{ $procurementNotices->submission_date }}">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="notice">Notice (eg: pdf)</label>
                                    <input type="file" name="notice" class="form-control"
                                        value="{{ $procurementNotices->notice }}">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea name="description" class="form-control"
                                        required>{!! $procurementNotices->description !!}
                                    </textarea>
                                </div>
                            </div>

                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="publish">Publish</label>
                                <br>
                                <input id="publish" name="publish" type="checkbox" value="true" {{$procurementNotices->publish?'checked':'' }}>
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


