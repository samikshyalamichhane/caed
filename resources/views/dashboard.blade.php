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
                <div class="col-sm-3">
                    <div id="card" class="card border-primary  mb-3" style="max-width: 18rem;">
                        <div class="card-header" id="num">
                            <h3>{{$news}}</h3>
                        </div>
                        <div class="card-body text-primary">
                            <h3 class="card-title" id="title">News And Events</h3>
                            <div class="icon">
                                <i class="ion ion-pie-graph"></i>
                            </div>
                            <a id="link" href="{{route('newsevent.index')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                            <p class="card-text"></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div id="card" class="card border-primary  mb-3" style="max-width: 18rem;">
                        <div class="card-header" id="num">
                            <h3>{{$projects}}</h3>
                        </div>
                        <div class="card-body text-primary">
                            <h3 class="card-title" id="title">Projects</h3>
                            <div class="icon">
                                <i class="ion ion-pie-graph"></i>
                            </div>
                            <a id="link" href="{{route('project.index')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                            <p class="card-text"></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div id="card" class="card border-primary  mb-3" style="max-width: 18rem;">
                        <div class="card-header" id="num">
                            <h3>{{$teams}}</h3>
                        </div>
                        <div class="card-body text-primary">
                            <h3 class="card-title" id="title">Teams</h3>
                            <div class="icon">
                                <i class="ion ion-pie-graph"></i>
                            </div>
                            <a id="link" href="{{route('team.index')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                            <p class="card-text"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header"><i class="fa fa-align-justify"></i> Contact</div>
        <div class="card-body">
            <table class="table table-responsive-sm table-bordered table-striped table-sm">
                <thead>
                    <tr>
                        <th>S.N</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Subject</th>
                        <th>Message</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($contactuss as $key=>$contactus)
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $contactus->name }}</td>
                        <td>{{ $contactus->email }}</td>
                        <td>{{ $contactus->subject }}</td>
                        <td>
                            {{ html_entity_decode(strip_tags($contactus->comment)) }}
                        </td>


                        {{-- <!-- <td>{!! $blog->publish?'<span
                                        class="badge badge-pill badge-success">Active</span>':'<span
                                        class="badge badge-pill badge-warning">Inactive</span>' !!}</td> --> --}}
                        <td>
                            <a href="" class="btn btn-success btn-sm view" data-id="{{$contactus->id}}"><i class="fa fa-eye"></i></a>
                            <button data-question="Are you sure to delete the data?" data-toggle="confirm" data-id="{{ $contactus->id }}" class="btn btn-xs btn-danger">Delete</button>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="3">Data Not Found</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          {{-- <h4 class="modal-title">Details</h4> --}}
        </div>
        <div class="modal-body">

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
</div>
@endsection
@push('page_scripts')
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jscroll/2.4.1/jquery.jscroll.min.js"></script>
<script>
    $(function(){
        $('[data-toggle="confirm"]').jConfirm().on('confirm', function(e){
            var btn = $(this),
            id = btn.data('id');
            var url = '{{ route("contactus.delete", ":id") }}';
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
                var url = '{{ route("contactus.delete", ":id") }}';
                url = url.replace(':id', id);
                window.location=url
                });
            }
        });
    });

</script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
<script>
    $(document).ready(function(){
        $(".view").click(function(e) {
            e.preventDefault();
            id=$(this).data('id');
            $.ajax({
                method:"post",
                url:"{{route('viewContact')}}",
                data:{id:id},
                success:function(data){
                    console.log("Hello world");
                    console.log(data);
                    $('#myModal .modal-body').html(data);
                    $('#myModal').modal('show');
                }
            });
        });
    });
</script>


@endpush