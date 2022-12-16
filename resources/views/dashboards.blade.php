@extends('layouts.app')

@section('content')
<div class="container-fluid">
    @if(Session::has('error'))
    @include('errors.catch-error',['catch_error'=>Session::get('error')])
    @endif
    @if(Session::has('success'))
    @include('success.success',['success'=>Session::get('success')])
    @endif
    <div class="row">
        <div class="col-6 col-xs-12">
            @php
            $about = \Modules\Site\Entities\About::latest()->first();
            @endphp
            <form method="post" action="{{ route('site.about') }}" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header">About</div>
                    <div class="card-body">
                        <div class="row">

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="description">Description </label>
                                    <textarea class="form-control" name="description"
                                        required>{!! $about?$about->description:'' !!}</textarea>

                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="description">Image </label>
                                    <input type="file" name="image" class="form-control" onchange="preview()">
                                    <img id="frame" src="{{ $about?Storage::url($about->image):'' }}" width="100px"
                                        height="100px" />
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
        <div class="col-sm-6 col-xs-12">
            @php
            $openingHour = \Modules\Site\Entities\OpeningHour::latest()->first();
            @endphp
            <form method="post" action="{{ route('site.openingHour') }}">
                @csrf
                <div class="card">
                    <div class="card-header">Opening Hour</div>
                    <div class="card-body">
                        <div class="row mb-2 ">
                            <div class="col-sm-3">Sunday</div>
                            <div class="col-sm-9"><input name="sunday" class="form-control"
                                    value="{{ $openingHour?$openingHour->sunday:'' }}"></div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-sm-3">Monday</div>
                            <div class="col-sm-9"><input name="monday" class="form-control"
                                    value="{{ $openingHour?$openingHour->monday:'' }}"></div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-sm-3">Tuesday</div>
                            <div class="col-sm-9"><input name="tuesday" class="form-control"
                                    value="{{ $openingHour?$openingHour->tuesday:'' }}"></div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-sm-3">Wednesday</div>
                            <div class="col-sm-9"><input name="wednesday" class="form-control"
                                    value="{{ $openingHour?$openingHour->wednesday:'' }}"></div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-sm-3">Thursday</div>
                            <div class="col-sm-9"><input name="thursday" class="form-control"
                                    value="{{ $openingHour?$openingHour->thursday:'' }}"></div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-sm-3">Friday</div>
                            <div class="col-sm-9"><input name="friday" class="form-control"
                                    value="{{ $openingHour?$openingHour->friday:'' }}"></div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-sm-3">Saturday</div>
                            <div class="col-sm-9"><input name="saturday" class="form-control"
                                    value="{{ $openingHour?$openingHour->saturday:'' }}"></div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-sm btn-primary" type="submit"> Submit</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-12 col-xs-12">
            @php
            $mission = \Modules\Site\Entities\Mission::latest()->first();
            @endphp
            <form method="post" action="{{ route('site.mission') }}" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header">Mission/Vision</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="description">Mission </label>
                                    <textarea class="form-control" name="mission"
                                        required>{!! $mission?$mission->mission:'' !!}</textarea>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="missionImage">Image </label>
                                    <input type="file" name="missionImage" class="form-control"
                                        onchange="previewMissionImage()">
                                    <img id="frameMissionImage"
                                        src="{{ $mission?Storage::url($mission->mission_image):'' }}" width="100px"
                                        height="100px" />
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="vision">Vision </label>
                                    <textarea class="form-control" name="vision"
                                        required>{!! $mission?$mission->vision:'' !!}</textarea>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="visionImage">Image </label>
                                    <input type="file" name="visionImage" class="form-control"
                                        onchange="previewVisionImage()">
                                    <img id="frameVisionImage"
                                        src="{{ $mission?Storage::url($mission->vision_image):'' }}" width="100px"
                                        height="100px" />
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
    function previewMissionImage() {
        frameMissionImage.src=URL.createObjectURL(event.target.files[0]);
    }
    function previewVisionImage() {
        frameVisionImage.src=URL.createObjectURL(event.target.files[0]);
    }
</script>
