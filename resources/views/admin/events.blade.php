@extends('layouts.Admin-Layout')

@section('title')

     Settings

@stop

<style>

.setting {
    margin: 100px 4% 0 0;
}

.about input {
    margin: 15px 0;
}


.file-ok {
    width: 100px;
height: 100px;
background-size: cover;
display: block;
}

.setting-about form button {
    margin: 22px 0 100px;
}

    .admins button {
        float: left;
margin: 13px 0;
padding: 7px 17px;
    }
</style>

@section('content')

<div class="sa-content-wrapper" style="margin: 0 45px 0 0;padding:2% 0 10% 0;">

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
                            <header>
                                <div class="widget-header">
                                        <span class="widget-icon"> <i
                                                    class="fa fa-lg fa-fw fa-inbox"></i> </span>

                                </div>
                            </header>
                            <!-- widget div-->
                            <div style="text-align: center;">
                                <!-- Modal  to add supervisor-->

                                <div class="modal fade" id="myModal-third" tabindex="-1" role="dialog"
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
                                                <form action="{{route('add-event')}}" method="post" enctype="multipart/form-data">
                                                    @csrf

                                                    <input type="date" class="form-control social" placeholder="date" name="date">
            
            <input class="form-control social" placeholder="title" name="title">
            <input class="form-control social" placeholder="title Arabic" name="title_ar">

            <textarea class="form-control social" placeholder="detail Arabic" name="detail_ar" rows="10"></textarea>
                        
                        <input class="form-control social" placeholder="author Arabic" name="author_ar">
                        
                        <label for="exampleInputEmail1">Event Img</label>

                        <div class="wrap-custom-file inline-block mb-10">
                                    <input type="file" name="img"
                                    accept=".gif, .jpg, .png"/>
                                     
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

                                <div class="col-md-9 float-right admins">
                                <button style=" margin-top: 1rem;" href="javascript:void(0);"
                                   class="btn btn-primary" data-toggle="modal"
                                   data-target="#myModal-third"> Add</button>
                                <!-- widget content -->
                                <div class="widget-body p-0">
                                    <table id="dt-basic"
                                           class="table table-striped table-bordered table-hover"
                                           width="100%">
                                        <thead>
                                        <tr>
                                            <th data-class="expand">date</th>
                                            <th data-class="expand">title</th>
                                            <th data-class="expand">detail</th>
                                            <th data-class="expand">author</th>
                                            <th data-class="expand">Arabic Title</th>
                                            <th data-class="expand">Arabic Detail</th>
                                            <th data-class="expand">Arabic Author</th>
                                            <th data-class="expand">Img</th>
                                            <th data-hide="phone,tablet">action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        
                                        @foreach($events as $event)
                                            <tr>
                                            <td>{{$event->date}}</td>
                                            <td>{{$event->title}}</td>
                                                <td>{{$event->detail}}</td>
                                                <td>{{$event->author}}</td>
                                                <td>{{$event->title_ar}}</td>
                                                <td>{{$event->detail_ar}}</td>
                                                <td>{{$event->author_ar}}</td>
                                                <td><img height="70" width="100" src="{{asset('images/img/'.$event->img)}}"></td>
                                                <td>
                                                    <button class="btn btn-primary" data-toggle="modal"
                                                            data-target="#myModal-third{{$event->id}}"
                                                            style="margin-bottom:10px;"><i
                                                                class="fa fa-edit"></i></button>
                                                    <button class="btn btn-danger" data-toggle="modal"
                                                            data-target="#myModal-third-d{{$event->id}}"
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
</div>
@foreach($events as $event)
<!-- Modal  to Edit supervisor-->
<div class="modal fade" id="myModal-third{{$event->id}}" tabindex="-1"
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
                <form action="{{route('edit-event',['event_id'=>$event->id])}}" method="post" enctype="multipart/form-data">
                    @csrf

                    <input type="date" class="form-control social" placeholder="date" name="date" value="{{$event->date}}">
            
            <input class="form-control social" placeholder="title" name="title" value="{{$event->title}}">
            <input class="form-control social" placeholder="title Arabic" name="title_ar" value="{{$event->title_ar}}">

            <textarea class="form-control social" placeholder="detail" name="detail" rows="10">{{$event->detail}}</textarea>
            <textarea class="form-control social" placeholder="detail arabic" name="detail_ar" rows="10">{{$event->detail_ar}}</textarea>

                        <input class="form-control social" placeholder="author" name="author" value="{{$event->author}}">
                        <input class="form-control social" placeholder="author Arabic" name="author_ar" value="{{$event->author_ar}}">

                        <label for="exampleInputEmail1">Event Img</label>

                        <div class="wrap-custom-file inline-block mb-10">
                                    <input type="file" name="img" id="image1{{$event->id}}"
                                    accept=".gif, .jpg, .png"/>
                                     <label for="image1{{$event->id}}" class="file-ok" style="background-image: url({{asset('images/img/'.$event->img1)}});">
                                    </label>
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
<div class="modal fade" id="myModal-third-d{{$event->id}}" tabindex="-1"
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
            <form action="{{route('delete-event',['event_id'=>$event->id])}}" method="post">
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

@stop