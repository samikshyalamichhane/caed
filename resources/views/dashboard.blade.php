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
        <div class="col-sm-12">
            <div class="row">
                @php
                $countService = \Modules\Service\Entities\Service::latest()->count();
                @endphp
                <div class="col-sm-3">
                    <div id="card" class="card border-primary  mb-3" style="max-width: 18rem;">
                        <div class="card-header" id="num"><h3>{{ $countService }}</h3></div>
                        <div class="card-body text-primary">
                        <h3 class="card-title" id="title">Services</h3>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a id="link" href="{{route('service.index')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                        <p class="card-text"></p>
                        </div>
                    </div>
                </div>


                @php
                $countPartner = \Modules\Partner\Entities\Partner::latest()->count();
                @endphp
                <div class="col-sm-3">
                    <div id="card" class="card border-primary  mb-3" style="max-width: 18rem;">
                        <div class="card-header" id="num"><h3>{{ $countPartner }}</h3></div>
                        <div class="card-body text-primary">
                        <h3 class="card-title" id="title">Partners</h3>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a id="link" href="{{route('partner.index')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                        <p class="card-text"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection

