@extends('layouts.app')
@section('breadcrumb')
<ol class="breadcrumb border-0 m-0">
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item"><a href="{{ route('team.index') }}">Team</a></li>
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
            <form method="post" action="{{ route('team.update',$team->id) }}" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header"><i class="fa fa-align-justify"></i> Edit Team</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input name="name" class="form-control" value="{{ $team->name }}" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="category">Select Category</label>
                                    <select class="form-control form-control-sm" id="category" name="category">
                                        <option value="">Select Category</option>
                                        <option value="{{ $team->category }}" {{ $team->category ? 'selected' : '' }}>{{ $team->category }}</option>
                                        <option value="executive_board">Executive Board</option>
                                        <option value="wogcrpstaff">WoGCRP staffs</option>
                                        <option value="klepstaff">KLEP staffs</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="position">Position</label>
                                    <input name="position" class="form-control" value="{{$team->position}}" required>
                                </div>
                            </div>
                            {{-- <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="content">Content</label>
                                    <textarea name="content" cols="10" rows="5">
                                        {!! $team->content !!}
                                    </textarea>
                                </div>
                            </div> --}}
                        </div>
                        <div class="form-group row">
                            <label class="col-md-1 col-form-label">Image</label>
                            <div class="col-md-9 col-form-label">
                                <div class="row">
                                    <div class="col-6 colxs-12">
                                        <div class="form-check checkbox">
                                            <input type="file" name="image" class="form-control" onchange="preview()">
                                            <img id="frame" src="{{ Storage::url($team->image) }}" width="100px"
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
                                    $team->publish?'checked':'' }}>

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
