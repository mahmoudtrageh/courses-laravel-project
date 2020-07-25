@extends('layouts.Admin-Layout')

@section('title')

     Payments

@stop

<style>

.admin-table {
    margin: 35px 0;
}

.admins button {
        float: left;
margin: 13px 0;
padding: 7px 17px;
    }

    .admins h2 {
        text-align: center;
margin-top: 20px;
    }

</style>

@section('content')

<div class="col-md-9 float-right admins" style="margin: 20px 45px 0 0;padding-bottom:10%;">

<div class="admin-table">
  <!-- widget content -->
                                        <div class="widget-body p-0">
                                            <table id="dt-basic"
                                                   class="table table-striped table-bordered table-hover"
                                                   width="100%">
                                                <thead>
                                                <tr>
                                                <th data-hide="phone">ID</th>
                                                    <th data-class="expand">Name</th>
                                                    <th data-class="expand">Notification</th>
                                                    <th data-class="expand">Course Name</th>
                                                    <th data-hide="phone,tablet">Time</th>
                                                    <th data-hide="phone,tablet">Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                    @foreach(auth()->guard('admin')->user()->readnotifications as $notification)
                                                    <tr>
                                                        <td>{{$notification->id}}</td>
                                                        <td>{{$notification->data['name']}}</td>
                                                        <td>{{$notification->data['message']}}</td>
                                                        <td>{{$notification->data['course_name']}}</td>
                                                        <td>{{$notification->created_at}}</td>

                                                       

                                                        <td>
                                                            <button class="btn btn-danger" data-toggle="modal"
                                                                    data-target="#myModal-third-d{{$notification->id}}"
                                                                    style="margin-bottom:10px;"><i
                                                                        class="fa fa-trash"></i></button>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>

                                            {{$notifications->links()}}

                                        </div>
                                        <!-- end widget content -->
                                        </div>
</div>

@foreach(auth()->guard('admin')->user()->notifications as $notification)

<!-- Modal to delet supervisor -->
<div class="modal fade" id="myModal-third-d{{$notification->id}}" tabindex="-1"
     role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"
                    id="exampleModalLabel"
                    style="font-weight:bold">delete</h5>
                <button type="button" class="close"
                        data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body"
                 style="text-align:right;">
              <strong> confirm delete </strong>
            </div>
            <form action="{{route('delete.notification',['noti_id'=>$notification->id])}}" method="post">
                @csrf
                <div class="modal-footer">
                    <button type="button"
                            class="btn btn-default"
                            data-dismiss="modal">cancel
                    </button>
                    <button type="submit"
                            class="btn btn-primary">confirm
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

@endforeach

@stop


@section('js')
<!-- <script>
        $(document).on("change", ".stutus", function () {
            var status = $(this).val();
            var id = $(this).attr("uid");
            var token = "{{ csrf_token() }}";
            $.ajax({
                url: "{{ route('update-status') }}",
                type: "post",
                dataType: "json",
                data: {status: status, id: id, _token: token},
                success: function (data) {
                    console.log(data.status);
                    if (data.status !== "ok") {
                        alert("ERROR");
                    }

                },
                error: function () {
                    alert("ERROR");
                }
            })
        })
    </script> -->


@stop