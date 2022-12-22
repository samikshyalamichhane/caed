@extends('layouts.app')
@section('breadcrumb')
<ol class="m-0 border-0 breadcrumb">
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item"><a href="#">Site Info</a></li>
    {{-- <li class="breadcrumb-item active">Dashboard</li> --}}
</ol>
@endsection
<style>

    .content {
        width: 100%;
        padding: 0;
        margin: 0 auto;
    }

    .question {
        position: relative;
        background: #fff;
        margin: 0;
        padding: 10px 10px 10px 50px;
        display: block;
        width:100%;
        cursor: pointer;
    }

    .answers {
        padding: 0px 15px;
        margin: 5px 0;
        width:100%!important;
        height: 0;
        overflow: hidden;
        /* z-index: -1; */
        position: relative;
        opacity: 0;
        -webkit-transition: .3s ease;
        -moz-transition: .3s ease;
        -o-transition: .3s ease;
        transition: .3s ease;
    }

    .questions:checked ~ .answers{
        height: auto;
        opacity: 1;
        background: #fff;
        padding: 15px;
    }

    .plus {
        position: absolute;
        margin-left: 10px;
        z-index: 5;
        font-size: 2em;
        line-height: 100%;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        -o-user-select: none;
        user-select: none;
        -webkit-transition: .3s ease;
        -moz-transition: .3s ease;
        -o-transition: .3s ease;
        transition: .3s ease;

    }

    .questions:checked ~ .plus {
        -webkit-transform: rotate(45deg);
        -moz-transform: rotate(45deg);
        -o-transform: rotate(45deg);
        transform: rotate(45deg);
    }

    .questions {
        display: none;
    }

</style>
@section('content')

<div class="container-fluid">
    @include('errors.validation-error')
        @if(Session::has('error'))
            @include('errors.catch-error',['catch_error'=>Session::get('error')])
        @endif
    <form method="post" action="{{ route('site.update',@$site->id) }}" enctype="multipart/form-data">
    @csrf
        <div class="content">
            <div>
                <input type="checkbox" id="question1" name="q"  class="questions">
                <div class="plus">+</div>
                <label for="question1" class="question font-weight-bold">
                    SEO DETAILS:
                </label>
                <div class="answers">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="title">Site Title</label>
                                <input name="title" class="form-control" value="{{ $site->title }}" placeholder="Enter Site Title"  required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="meta_title">Meta Title</label>
                                <input type="text" name="meta_title" class="form-control" placeholder="Enter Meta Title"
                                    value="{{ $site->meta_title }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="meta_keyword">Meta KeyWord</label>
                                <input type="text" name="meta_keyword" class="form-control" placeholder="Enter Meta Keyword"
                                    value="{{ $site->meta_keyword }}">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="description">Meta Description</label>
                                <textarea name="description" class="form-control">
                                    {{ $site->description }}
                                </textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <input type="checkbox" id="question2" name="q" class="questions">
                <div class="plus">+</div>
                <label for="question2" class="question font-weight-bold">
                    SOCIAL MEDIA LINKS:
                </label>
                <div class="answers">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="facebook">Facebook</label>
                                <input type="text" name="facebook" class="form-control" placeholder="Enter Facebook Link"
                                    value="{{ $site->facebook }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="twitter">Twitter</label>
                                <input type="text" name="twitter" class="form-control" value="{{ $site->twitter }}" placeholder="Enter Twitter Link">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="instagram">Instagram</label>
                                <input type="text" name="instagram" class="form-control" placeholder="Enter Instagram Link"
                                    value="{{ $site->instagram }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="youtube">Youtube</label>
                                <input type="text" name="youtube" class="form-control" value="{{ $site->youtube }}" placeholder="Enter Youtube Link">
                            </div>
                        </div>
                        {{-- <div class="col-sm-6">
                            <div class="form-group">
                                <label for="whatsapp">Whatsapp</label>
                                <input type="text" name="whatsapp" class="form-control" placeholder="Enter Whatsapp Number"
                                    value="{{ $site->whatsapp }}">
                            </div>
                        </div> --}}

                        {{-- <div class="col-sm-6">
                            <div class="form-group">
                                <label for="messanger">Messanger Link</label>
                                <input type="text" name="messanger" class="form-control" value="{{ $site->messanger }}" placeholder="Enter Messanger Link">
                            </div>
                        </div> --}}
                        {{-- <div class="col-sm-6">
                            <div class="form-group">
                                <label for="skype">Skype</label>
                                <input type="text" name="skype" class="form-control" value="{{ $site->skype }}" placeholder="Enter Sykpe Link">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="viber">Viber</label>
                                <input type="text" name="viber" class="form-control" value="{{ $site->viber }}" placeholder="Enter Viber Number">
                            </div>
                        </div> --}}
                        {{-- <div class="col-sm-6">
                            <div class="form-group">
                                <label for="video">Video Link (Below Slider)</label>
                                <input type="text" name="video" class="form-control" value="{{ $site->video }}" placeholder="Enter Video Link">
                            </div>
                        </div> --}}

                    </div>
                </div>
            </div>

            <div>
                <input type="checkbox" id="question3" name="q" class="questions">
                <div class="plus">+</div>
                <label for="question3" class="question font-weight-bold">
                    ADDRESS & CONTACT INFO:
                </label>
                <div class="answers">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="contact1">Contact (International Format)</label>
                                <input type="text" name="contact1" class="form-control" placeholder="Enter Contact Number "
                                    value="{{ $site->contact1 }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="contact2">Alternative Contact</label>
                                <input type="text" name="contact2" class="form-control" placeholder="Enter Alternative Contact Number"
                                    value="{{ $site->contact2 }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" name="email1" class="form-control" value="{{ $site->email1 }}" placeholder="Enter Email">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="email2">Alternative Email</label>
                                <input type="text" name="email2" class="form-control" value="{{ $site->email2 }}" placeholder="Enter Alternative Email">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" name="address" class="form-control" value="{{ $site->address }}" placeholder="Enter Address">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="map">Map Link</label>
                                <input type="text" name="map" class="form-control" value="{{ $site->map }}" placeholder="Enter Map">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="volunteer_detail">Volunteer Details</label>
                                <input type="text" name="volunteer_detail" class="form-control" value="{{ $site->volunteer_detail }}" placeholder="Enter Volunteer Detail">
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div>
                <input type="checkbox" id="question7" name="q" class="questions">
                <div class="plus">+</div>
                <label for="question7" class="question font-weight-bold">
                    LOGO & BANNER IMAGES:
                </label>
                <div class="answers">
                    <div class="row">
                        <div class="col-sm-4">
                            <label class="col-form-label">Header Logo</label>
                            <div class="col-form-label">
                                <div class="row">
                                    <div class="col-12 colxs-12">
                                        <div class="form-check checkbox">
                                            <input type="file" name="header_logo" class="form-control"
                                                onchange="headerPreview()">
                                            <img id="header_logo" src="{{ Storage::url($site->header_logo) }}"
                                                width="100px" height="100px" />
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <label class="col-form-label">Fav Icon</label>
                            <div class="col-form-label">
                                <div class="row">
                                    <div class="col-12 colxs-12">
                                        <div class="form-check checkbox">
                                            <input type="file" name="fav_icon" class="form-control"
                                                onchange="favPreview()">
                                            <img id="fav_icon" src="{{ Storage::url($site->fav_icon) }}"
                                                width="100px" height="100px" />
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <label class="col-form-label">About Us Banner</label>
                            <div class="col-form-label">
                                <div class="row">
                                    <div class="col-12 colxs-12">
                                        <div class="form-check checkbox">
                                            <input type="file" name="aboutus_banner" class="form-control"
                                                onchange="aboutusbannerPreview()">
                                            <img id="aboutus_banner" src="{{ Storage::url($site->aboutus_banner) }}"
                                                width="100px" height="100px" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <label class="col-form-label">Support Banner</label>
                            <div class="col-form-label">
                                <div class="row">
                                    <div class="col-12 colxs-12">
                                        <div class="form-check checkbox">
                                            <input type="file" name="support_banner" class="form-control"
                                                onchange="supportbannerPreview()">
                                            <img id="support_banner" src="{{ Storage::url($site->support_banner) }}"
                                                width="100px" height="100px" />
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <label class="col-form-label">Volunteer Banner</label>
                            <div class="col-form-label">
                                <div class="row">
                                    <div class="col-12 colxs-12">
                                        <div class="form-check checkbox">
                                            <input type="file" name="volunteer_banner" class="form-control"
                                                onchange="volunteerbannerPreview()">
                                            <img id="volunteer_banner" src="{{ Storage::url($site->volunteer_banner) }}"
                                                width="100px" height="100px" />
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <label class="col-form-label">Vacancy Banner</label>
                            <div class="col-form-label">
                                <div class="row">
                                    <div class="col-12 colxs-12">
                                        <div class="form-check checkbox">
                                            <input type="file" name="vacancy_banner" class="form-control"
                                                onchange="productbannerPreview()">
                                            <img id="vacancy_banner" src="{{ Storage::url($site->vacancy_banner) }}"
                                                width="100px" height="100px" />
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <label class="col-form-label">Contact Banner</label>
                            <div class="col-form-label">
                                <div class="row">
                                    <div class="col-12 colxs-12">
                                        <div class="form-check checkbox">
                                            <input type="file" name="contact_banner" class="form-control"
                                                onchange="contactbannerPreview()">
                                            <img id="contact_banner" src="{{ Storage::url($site->contact_banner) }}"
                                                width="100px" height="100px" />
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                         <div class="col-sm-4">
                            <label class="col-form-label">News Banner</label>
                            <div class="col-form-label">
                                <div class="row">
                                    <div class="col-12 colxs-12">
                                        <div class="form-check checkbox">
                                            <input type="file" name="news_banner" class="form-control"
                                                onchange="newsbannerPreview()">
                                            <img id="news_banner" src="{{ Storage::url($site->news_banner) }}"
                                                width="100px" height="100px" />
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div> 
                         <div class="col-sm-4">
                            <label class="col-form-label">Project Report Banner</label>
                            <div class="col-form-label">
                                <div class="row">
                                    <div class="col-12 colxs-12">
                                        <div class="form-check checkbox">
                                            <input type="file" name="project_report_banner" class="form-control"
                                                onchange="projectreportbannerPreview()">
                                            <img id="project_report_banner" src="{{ Storage::url($site->project_report_banner) }}"
                                                width="100px" height="100px" />
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <label class="col-form-label">Issue and Theme Banner</label>
                            <div class="col-form-label">
                                <div class="row">
                                    <div class="col-12 colxs-12">
                                        <div class="form-check checkbox">
                                            <input type="file" name="publication_banner" class="form-control"
                                                onchange="publicationbannerPreview()">
                                            <img id="publication_banner" src="{{ Storage::url($site->publication_banner) }}"
                                                width="100px" height="100px" />
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div> 
                         <div class="col-sm-4">
                            <label class="col-form-label">Gallery Banner</label>
                            <div class="col-form-label">
                                <div class="row">
                                    <div class="col-12 colxs-12">
                                        <div class="form-check checkbox">
                                            <input type="file" name="gallery_banner" class="form-control"
                                                onchange="gallerybannerPreview()">
                                            <img id="gallery_banner" src="{{ Storage::url($site->gallery_banner) }}"
                                                width="100px" height="100px" />
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <label class="col-form-label">Partner Banner</label>
                            <div class="col-form-label">
                                <div class="row">
                                    <div class="col-12 colxs-12">
                                        <div class="form-check checkbox">
                                            <input type="file" name="partner_banner" class="form-control"
                                                onchange="partnerbannerPreview()">
                                            <img id="partner_banner" src="{{ Storage::url($site->partner_banner) }}"
                                                width="100px" height="100px" />
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div> 
                        <div class="col-sm-4">
                            <label class="col-form-label">Resources Banner</label>
                            <div class="col-form-label">
                                <div class="row">
                                    <div class="col-12 colxs-12">
                                        <div class="form-check checkbox">
                                            <input type="file" name="resources_banner" class="form-control"
                                                onchange="resourcesbannerPreview()">
                                            <img id="resources_banner" src="{{ Storage::url($site->resources_banner) }}"
                                                width="100px" height="100px" />
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div> 
                          {{-- <div class="col-sm-4">
                            <label class="col-form-label">Footer Logo</label>
                            <div class="col-form-label">
                                <div class="row">
                                    <div class="col-12 colxs-12">
                                        <div class="form-check checkbox">
                                            <input type="file" name="footer_logo" class="form-control"
                                                onchange="footerPreview()">
                                            <img id="footer_logo" src="{{ Storage::url($site->footer_logo) }}"
                                                width="100px" height="100px" />
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>

        </div>
        <div>
            <button class="btn btn-primary" type="submit">Submit</button>
        </div>
    </form>
</div>
@endsection
<script>
    function headerPreview() {
        header_logo.src=URL.createObjectURL(event.target.files[0]);
    }
    function footerPreview() {
        footer_logo.src=URL.createObjectURL(event.target.files[0]);
    }
    function favPreview(){
        fav_icon.src = URL.createObjectURL(event.target.files[0]);
    }
    function resourcesbannerPreview(){
        resources_banner.src = URL.createObjectURL(event.target.files[0]);
    }
    function ourlogoPreview(){
        our_logo.src = URL.createObjectURL(event.target.files[0]);
    }
    function aboutusbannerPreview(){
        aboutus_banner.src = URL.createObjectURL(event.target.files[0]);
    }
    function gallerybannerPreview(){
        gallery_banner.src = URL.createObjectURL(event.target.files[0]);
    }
    function supportbannerPreview(){
        support_banner.src = URL.createObjectURL(event.target.files[0]);
    }
    function volunteerbannerPreview(){
        volunteer_banner.src = URL.createObjectURL(event.target.files[0]);
    }
    function vacancybannerPreview(){
        vacancy_banner.src = URL.createObjectURL(event.target.files[0]);
    }
    function contactbannerPreview(){
        contact_banner.src = URL.createObjectURL(event.target.files[0]);
    }
    function newsbannerPreview(){
        news_banner.src = URL.createObjectURL(event.target.files[0]);
    }
    function partnerbannerPreview(){
        partner_banner.src = URL.createObjectURL(event.target.files[0]);
    }
    function careerbannerPreview(){
        career_banner.src = URL.createObjectURL(event.target.files[0]);
    }
    function projectreportbannerPreview(){
        project_report_banner.src = URL.createObjectURL(event.target.files[0]);
    }
    function publicationbannerPreview(){
        publication_banner.src = URL.createObjectURL(event.target.files[0]);
    }
    function gallery_bannerPreview(){
        gallery_banner.src = URL.createObjectURL(event.target.files[0]);
    }
    function resourcesbannerPreview(){
        resources_banner.src = URL.createObjectURL(event.target.files[0]);
    }
</script>
