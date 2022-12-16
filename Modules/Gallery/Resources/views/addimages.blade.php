@extends('layouts.app')
@section('breadcrumb')
<ol class="breadcrumb border-0 m-0">
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item"><a >Images</a></li>
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
            @if(Session::has('success'))
            @include('success.success',['success'=>Session::get('success')])
            @endif
            <form method="post" action="{{ route('images.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header"><i class="fa fa-align-justify"></i> Add Gallery</div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label">Select Multiple Image for gallery (Size should be less than 2MB)</label>
                            <div class="col-md-6 col-form-label">
                                <div class="row">
                                    <div class="col-6 colxs-12">
                                        <div class="form-check checkbox">
                                            <input type='hidden' name='id' value="{{$id}}">
                                            <input type="file" name="image[]" multiple id="upload_file">
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
            <div class="card-body">
                <div class="row">
                    @foreach($images as $image)
                        <div class="col-sm-2">
                            <img src="{{Storage::url('public/images/gallery/'.$image->image)}}" height="100"><br>
                            <a class="btn btn-xs btn-danger" href="{{route('images.delete',$image->id)}}">Delete</a>
                        </div>
                    @endforeach
                </div>
            </div>
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
