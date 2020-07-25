@extends('layouts.Admin-Layout')

@section('title')

     Registers

@stop

<style>

.admin-table {
    margin: 100px 4% 0 0;
}

.print-page {
    display:none;
}

@media print {
.print-page {
    display:block;
}

.left-sidebar {
    display:none !important;
}

.admin-table {
    display:none;
}

.topbar {
    display:none;
}
.do-print, .modal-footer, .footer {
    display:none !important;
}

}

.print-page p {
    display:inline-block;
}
</style>

@section('content')
<div class="col-md-9 float-right" style="padding-bottm:10%;">

@foreach($registers as $register)

<div class="print-page text-right modal fade" id="print-page{{$register->id}}" tabindex="-1"
     role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true" style="direction:rtl;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            
            <div class="modal-header">
            <div>
                                <label>بيانات المتدرب</label>:

                <p>{{$register->name}}</p></div>
            </div>
            <div class="modal-body"
                    >

<div>
                <label>الاسم</label>:
                <p>{{$register->name}}</p>
</div>
<div>

                 <label>البريد الإلكتروني</label>:
                <p>{{$register->name}}</p>
</div>

<div>

                 <label>رقم المحمول</label>:
                <p>{{$register->mobile}}</p>
</div>

<div>

                 <label>العنوان</label>:
                <p>{{$register->address}}</p>
</div>

<div>

                 <label>السكن</label>:
                <p>{{$register->occupation}}</p>
    </div>

    <div>
    

    <label>سبق له التقديم</label>:
                <p>{{$register->apply}}</p>
</div>

<div>

                    <label>عدد مرات التقديم</label>:
                <p>{{$register->apply_n}}</p>

                </div>
            </div>

            <div class="modal-footer">
<button class="btn btn-primary do-print" id="do-print{{$register->id}}">Print</button>
 <button type="button"
                                class="btn btn-default"
                                data-dismiss="modal">cancel
                        </button>
                </div>
        </div>
    </div>
</div>

@endforeach

<div class="admin-table">
  <!-- widget content -->
                                        <div class="widget-body p-0">
                                            <table id="dt-basic"
                                                   class="table-responsive table table-striped table-bordered table-hover"
                                                   width="100%" style="overflow-x: scroll;margin-bottom: 100px;">
                                                <thead>
                                                <tr>
                                                    <th data-hide="phone">ID</th>
                                                    <th data-class="expand">Name</th>
                                                    <th data-class="expand">Email</th>
                                                    <th data-class="expand">Mobile</th>
                                                    <th data-class="expand">Address</th>
                                                    <th data-class="expand">Occupation</th>
                                                    <th data-class="expand">Apply Before</th>
                                                    <th data-class="expand">Apply Numbers</th>
                                                    <th data-hide="phone,tablet">Course Title</th>
                                                    <th data-class="expand">Reach Channel</th>     
                                                    <th data-class="expand">Action</th>                                                                                                 
                                                </tr>
                                                </thead>

                                                                                            {{$registers->links()}}

                                                <tbody>
                                                @foreach($registers as $register)
                                                    <tr>
                                                        <td>{{$register->id}}</td>
                                                        <td>{{$register->name}}</td>
                                                        <td>{{$register->email}}</td>
                                                        <td>{{$register->mobile}}</td>
                                                        <td>{{$register->address}}</td>
                                                        <td>{{$register->occupation}}</td>
                                                        <td>{{$register->apply}}</td>
                                                        <td>{{$register->apply_n}}</td>
                                                        @foreach($register->courses as $regist)
                                                        <td>{{$regist->c_name}}</td>
                                                        @endforeach
                                                        <td>@foreach ($register->channels as $channel)
                                                                <span class="label label-info"
                                                                      style="font-size: 11px">{{$channel->name_en}}</span>
                                                            @endforeach</td>

                                                             <td>
                                                    <button class="btn btn-primary" data-toggle="modal"
                                                            data-target="#myModal-third-e{{$register->id}}"
                                                            style="margin-bottom:10px;"><i
                                                                class="fa fa-edit"></i></button>
                                                    <button class="btn btn-danger" data-toggle="modal"
                                                            data-target="#myModal-third-d{{$register->id}}"
                                                            style="margin-bottom:10px;"><i
                                                                class="fa fa-trash"></i></button>

                                                    <button class="btn btn-print" data-toggle="modal"
                                                            data-target="#print-page{{$register->id}}"
                                                            style="margin-bottom:10px;"><i
                                                                class="fa fa-print"></i></button>
                                                            </td>

                                                    </tr>
                                                    
                                            @endforeach
                                                </tbody>
                                            </table>
                       
                                        </div>
                                        <!-- end widget content -->
                                        </div>
</div>

@foreach($registers as $register)
<!-- Modal  to Edit supervisor-->
<div class="modal fade" id="myModal-third-e{{$register->id}}" tabindex="-1"
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
                <form action="{{route('edit-register',['register_id'=>$register->id])}}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                <input type="text" class="form-control"
                                                    id="exampleInputText1" placeholder="Register Name"
                                                    name="name" value="{{$register->name}}">
                                        </div>

                                        <div class="form-group">
                        <label for="exampleInputEmail1">Register Email</label>
                <input type="text" class="form-control"
                                                    id="exampleInputText1" placeholder="Register Email"
                                                    name="email" value="{{$register->email}}">
                                        </div>

                                        <div class="form-group">
                        <label for="exampleInputEmail1">Register Mobile</label>
                <input type="text" class="form-control"
                                                    id="exampleInputText1" placeholder="Register Mobile"
                                                    name="mobile" value="{{$register->mobile}}">
                                        </div>

                                        <div class="form-group">
                        <label for="exampleInputEmail1">Register Address</label>
                <input type="text" class="form-control"
                                                    id="exampleInputText1" placeholder="Register Address"
                                                    name="address" value="{{$register->address}}">
                                        </div>

                                        <div class="form-group">
                        <label for="exampleInputEmail1">Register Occupation</label>
                <input type="text" class="form-control"
                                                    id="exampleInputText1" placeholder="Register Occupation"
                                                    name="occupation" value="{{$register->occupation}}">
                                        </div>

                                        <div class="form-group">
                        <label for="exampleInputEmail1">Apply Before</label>
                <input type="text" class="form-control"
                                                    id="exampleInputText1" placeholder="Apply Before"
                                                    name="apply" value="{{$register->apply}}">
                                        </div>

                                        <div class="form-group">
                        <label for="exampleInputEmail1">Apply Numbers</label>
                <input type="text" class="form-control"
                                                    id="exampleInputText1" placeholder="Apply Numbers"
                                                    name="apply_n" value="{{$register->apply_n}}">
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
<div class="modal fade" id="myModal-third-d{{$register->id}}" tabindex="-1"
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
            <form action="{{route('delete-register',['register_id'=>$register->id])}}" method="post">
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

@foreach($registers as $register)

<script>
$('#do-print{{$register->id}}').click(function() {
    window.print();
});

</script>

@endforeach

@stop