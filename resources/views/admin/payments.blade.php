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


<div class="col-md-9 float-right admins" style="margin-right: 45px;">
<h2>Bank Transfer Loggs</h2>

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
                                                    <th data-class="expand">Payment Method</th>
                                                    <th data-class="expand">Bank Name</th>
                                                    <th data-class="expand">Account Number</th>
                                                    <th data-hide="phone,tablet">Payment Status</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                    @foreach($payinfos as $payinfo)
                                                    <tr>
                                                        <td>{{$payinfo->id}}</td>
                                                        <td>{{$payinfo->sender}}</td>
                                                        <td>{{$payinfo->method}}</td>
                                                        <td>{{$payinfo->bank_name}}</td>
                                                        <td>{{$payinfo->account_number}}</td>

 <td style="border:1px solid #ccc;">
                                                            <select class="form-control stutus" uid="{{ $payinfo->id }}">
                                                            
                                                                <option @if(!$payinfo->paid_status) selected
                                                                        @endif value="no">
                                                                    No
                                                                </option>
                                                                <option @if($payinfo->paid_status) selected
                                                                        @endif value="yes">
                                                                     Yes
                                                                </option>
                                                            </select>
                                                        </td>

                                                        
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                            

                                        </div>
                                        <!-- end widget content -->
                                        </div>
</div>

<div class="col-md-9 float-right admins" style="margin-right: 45px;padding-bottom:5%;">
<h2>Banks</h2>

<div class="sa-content-wrapper">

<div class="sa-content">

    <div>
        <div>
            <!-- widget grid -->
            <section id="widget-grid" class="">
                <!-- row -->
                <div class="row">
                    <!-- NEW WIDGET START -->
                    <article class="col-12">
                        <!-- Widget ID (each widget will need unique ID)-->
                        <div class="jarviswidget jarviswidget-color-darken no-padding" id="wid-id-3"
                             data-widget-editbutton="false">
           
                            <!-- widget div-->
                            <div style="text-align: center;">
                                <!-- Modal  to add supervisor-->
                                <div class="modal fade" id="myModal-1" tabindex="-1" role="dialog"
                                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel"
                                                    style="font-weight:bold">Add</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body" style="text-align:left;">
                                                <form action="{{route('add-bank')}}" method="post">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Bank Name</label>
                                                        <input type="text" class="form-control"
                                                               id="exampleInputText1" placeholder="Bank"
                                                               name="name" value="{{old('name')}}">
                                                    </div>
                                                    
                                                    <div class="modal-footer" style="margin-top:1rem;">
                                                        <button type="button" class="btn btn-default"
                                                                data-dismiss="modal">Cancel
                                                        </button>
                                                        <button type="submit"
                                                                class="btn btn-primary">Confirm
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <button style=" margin-top: 1rem;" href="javascript:void(0);"
                                   class="btn btn-primary" data-toggle="modal"
                                   data-target="#myModal-1"> Add</button>
                                <!-- widget content -->
                                <div class="widget-body p-0">
                                    <table id="dt-basic"
                                           class="table table-striped table-bordered table-hover"
                                           width="100%">
                                        <thead>
                                        <tr>
                                        <th data-hide="phone">ID</th>
                                            <th data-class="expand">Name</th>                                        
                                            <th data-hide="phone,tablet">action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        
                                        @foreach($banks as $bank)
                                            <tr>
                                                <td>{{$bank->id}}</td>
                                                <td>{{$bank->name}}</td>
                                                <td>
                                                    <button class="btn btn-primary" data-toggle="modal"
                                                            data-target="#myModal-2{{$bank->id}}"
                                                            style="margin-bottom:10px;"><i
                                                                class="fa fa-edit"></i></button>
                                                    <button class="btn btn-danger" data-toggle="modal"
                                                            data-target="#myModal-3{{$bank->id}}"
                                                            style="margin-bottom:10px;"><i
                                                                class="fa fa-trash"></i></button>
                                                </td>
                                            </tr>
                                        @endforeach

                                        </tbody>
                                    </table>

                                </div>
                                <!-- end widget content -->

                                </div>

                            </div>
                            <!-- end widget div -->

                        </div>
                        <!-- end widget -->

                    </article>
                    <!-- WIDGET END -->

                </div>

                <!-- end row -->

                <!-- end row -->

            </section>
            <!-- end widget grid -->

        </div>
    </div>
</div>

@foreach($banks as $bank)

<!-- Modal  to Edit supervisor-->
<div class="modal fade" id="myModal-2{{$bank->id}}" tabindex="-1"
     role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"
                    id="exampleModalLabel"
                    style="font-weight:bold">edit</h5>
                <button type="button" class="close"
                        data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body"
                 style="text-align:left;">
                <form action="{{route('edit-bank', ['bank_id'=>$bank->id])}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label
                                for="exampleInputEmail1">Bank Name</label>
                        <input type="text"
                               class="form-control"
                               id="exampleInputText1"
                               placeholder="name" name="name" value="{{$bank->name}}">
                    </div>
                   
                    <div class="modal-footer"
                         style="margin-top:1rem;">
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
</div>


<!-- Modal to delet supervisor -->
<div class="modal fade" id="myModal-3{{$bank->id}}" tabindex="-1"
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
            <form action="{{route('delete-bank', ['bank_id'=>$bank->id])}}" method="post">
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
</div>
@endforeach

@stop


@section('js')

<script>
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
    </script>


@stop