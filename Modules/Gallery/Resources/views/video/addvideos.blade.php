@extends('layouts.app')
@section('breadcrumb')
<ol class="breadcrumb border-0 m-0">
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item"><a >Videos</a></li>
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
            <form method="post" action="{{ route('videos.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header"><i class="fa fa-align-justify"></i> Add Video Gallery</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="video">Video</label>
                                    <input type='hidden' name='video_id' value="{{$id}}">
                                   <input type="text" name="video" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer">
                        <button class="btn btn-sm btn-primary" type="submit"> Submit</button>
                    </div>
                </div>
                <div>
                    <h2><b>Videos In Our Gallery</b></h2>
                </div>
            </form>
            <div class="card-body">
                <div class="row">
                    @foreach($videos as $video)
                        <div class="col-sm-4">
                            <iframe width="300" height="220" src="{{$video->video}}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe><br>
                            <a class="btn btn-xs btn-danger" href="{{route('videos.delete',$video->id)}}">Delete</a>
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
