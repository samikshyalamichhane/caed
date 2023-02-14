@extends('layouts.app')
@section('breadcrumb')
<ol class="breadcrumb border-0 m-0">
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item"><a href="{{ route('ProjectCategory.index') }}">Project Partner</a></li>
    <li class="breadcrumb-item">Create</li>
</ol>
@endsection
@section('content')
<div class="container-fluid">
    <div class="fade-in">
        <div class="row">
            <div class="col-lg-6">
                @include('errors.validation-error')
                @if(Session::has('error'))
                @include('errors.catch-error',['catch_error'=>Session::get('error')])
                @endif
                <form method="post" action="{{ route('projectpartner.store') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="project_id" value="{{$project->id}}">
                    <div class="card">
                        <div class="card-header"><i class="fa fa-align-justify"></i> Add Project Partners</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        <input name="title" class="form-control" value="{{ old('title') }}">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <textarea name="description" class="form-control">
                                        </textarea>
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
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header"><i class="fa fa-align-justify"></i>Project Partner</div>
                    <div class="card-body">
                        <table class="table table-responsive-sm table-bordered table-striped table-sm">
                            <thead>
                                <tr>
                                    <th>S.N</th>
                                    <th>Title</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($project->projectPartners as $key=>$partner)
                                <tr data-id="{{$partner->id}}">
                                    <td>{{$key+1}}</td>
                                    <td>{{ $partner->title }}</td>
                                    <td>{!! $partner->publish?'<span class="badge badge-pill badge-success">Active</span>':'<span class="badge badge-pill badge-warning">Inactive</span>' !!}</td>
                                    <td>
                                        <button class="btn btn-xs btn-info" onclick="window.location=`{{ route('projectpartner.edit',['id'=>$partner->id]) }}`">Edit</button>
                                        <button data-question="Are you sure to delete the data?" data-toggle="confirm" data-id="{{ $partner->id }}" class="btn btn-xs btn-danger">Delete</button>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="3">Data Not Found</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>


                        {{-- {{ $projectCategories->links('pagination::bootstrap-4') }} --}}
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('page_scripts')
<script>
    function preview() {
        frame.src = URL.createObjectURL(event.target.files[0]);
    }

    function preview1() {
        frame1.src = URL.createObjectURL(event.target.files[0]);
    }
</script>
<style>
    .team-heading {
        color: blue;
        font-size: 14px;
    }

    .details {

        padding-top: 10px;
        padding-bottom: 10px;
        font-size: 20px;
    }

    .edit {
        color: blue;
    }

    .edit:hover {
        border-radius: 50px;
        background-color: whitesmoke;
    }

    .delete {
        color: red;
    }

    .delete:hover {
        border-radius: 50px;
        background-color: whitesmoke;
    }
</style>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jscroll/2.4.1/jquery.jscroll.min.js"></script> -->
<script>
    $(function(){
        $('[data-toggle="confirm"]').jConfirm().on('confirm', function(e){
            var btn = $(this),
            id = btn.data('id');
            var url = '{{ route("projectpartner.delete", ":id") }}';
            url = url.replace(':id', id);
            window.location=url
        });
    });

    $('ul.pagination').hide();
    $(function() {
        $('.card').jscroll({
            loadingHtml: `<center><img src="https://i.pinimg.com/originals/ec/d6/bc/ecd6bc09da634e4e2efa16b571618a22.gif" width="150px" height="120px"></center>`,
            autoTrigger: true,
            padding: 0,
            nextSelector: '.pagination li.active + li a',
            contentSelector: 'div.card-body',
            callback: function() {
                $('ul.pagination').remove();
                $('[data-toggle="confirm"]').jConfirm().on('confirm', function(e){
                var btn = $(this),
                id = btn.data('id');
                var url = '{{ route("projectpartner.delete", ":id") }}';
                url = url.replace(':id', id);
                window.location=url
                });
            }
        });
    });

</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
@endpush