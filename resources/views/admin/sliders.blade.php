@extends('layouts.Admin-Layout')

@section('title')

     Sliders

@stop

<style>

.setting {
    margin: 100px 4% 0 0;
}

.admins button {
        float: left;
margin: 13px 0;
padding: 7px 17px;
    }

.about input {
    margin: 15px 0;
}

.setting-about form button {
    margin: 22px 0 100px;
}

</style>

@section('content')

<div class="sa-content-wrapper" style="padding-bottom:10%;">

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

                                <div class="modal fade" id="myModal-second" tabindex="-1" role="dialog"
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
                                                <form action="{{route('add-second-slider')}}" method="post" enctype="multipart/form-data">
                                                    @csrf

                                                    <div class="col-sm-6">
                                                        <div class="wrap-custom-file inline-block mb-10">
                                                            <input type="file" name="slider_img"
                                                            accept=".gif, .jpg, .png"/>
                                                           
                                                        </div>
                                                    </div>
                                                
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Main NAme</label>
                                                        <input type="text" class="form-control"
                                                               id="exampleInputText1" placeholder="main name"
                                                               name="main_name">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Sub Name</label>
                                                        <input type="text" class="form-control"
                                                               id="exampleInputText1" placeholder="Second name"
                                                               name="second_name">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Main Name</label>
                                                        <input type="text" class="form-control"
                                                               id="exampleInputText1" placeholder="Arabic Main Name"
                                                               name="mainname_ar">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Second Name</label>
                                                        <input type="text" class="form-control"
                                                               id="exampleInputText1" placeholder="Arabic Second Name"
                                                               name="secondname_ar">
                                                    </div>

                                                    <!-- <div class="col-sm-6">
                                                        <div class="wrap-custom-file inline-block mb-10">
                                                            <input type="file" name="slider_icon"
                                                            accept=".gif, .jpg, .png"/>
                                                        </div>
                                                   </div> -->

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
                                   data-target="#myModal-second"> Add</button>
                                <!-- widget content -->
                                <div class="widget-body p-0">
                                    <table id="dt-basic"
                                           class="table table-striped table-bordered table-hover"
                                           width="100%">
                                        <thead>
                                        <tr>
                                            <th data-class="expand">Slider Image</th>
                                            <th data-class="expand">Main Name</th>
                                            <th data-class="expand">Arabic Main Name</th>
                                            <th data-class="expand">Second Name</th>
                                            <th data-class="expand">Arabic Second Name</th>

                                            <th data-hide="phone,tablet">action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        
                                        @foreach($second_sliders as $second_slider)
                                            <tr>
                                            <td><img height="70" width="100" src="{{asset('images/img/'.$second_slider->slider_img)}}"></td>
                                                <td>{{$second_slider->main_name}}</td>
                                                <td>{{$second_slider->mainname_ar}}</td>                                                
                                                <td>{{$second_slider->second_name}}</td>
                                                <td>{{$second_slider->secondname_ar}}</td>
                                                <td>
                                                    <button class="btn btn-primary" data-toggle="modal"
                                                            data-target="#myModal-second{{$second_slider->id}}"
                                                            style="margin-bottom:10px;"><i
                                                                class="fa fa-edit"></i></button>
                                                    <button class="btn btn-danger" data-toggle="modal"
                                                            data-target="#myModal-second-d{{$second_slider->id}}"
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
@foreach($second_sliders as $second_slider)
<!-- Modal  to Edit supervisor-->
<div class="modal fade" id="myModal-second{{$second_slider->id}}" tabindex="-1"
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
                <form action="{{route('edit-second-slider',['second_id'=>$second_slider->id])}}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="col-sm-6">
                            <div class="wrap-custom-file inline-block mb-10">
                                <input type="file" name="slider_img" id="imagesecond{{$second_slider->id}}"
                                accept=".gif, .jpg, .png"/>
                                <label for="imagesecond{{$second_slider->id}}" class="file-ok" style="background-image: url({{asset('images/img/'.$second_slider->slider_img)}});">
                                </label>
                            </div>
                        </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Main Name</label>
                <input type="text" class="form-control"
                                                    id="exampleInputText1" placeholder="name"
                                                    name="main_name" value="{{$second_slider->main_name}}">
                                        </div>

                                        <div class="form-group">
                        <label for="exampleInputEmail1">Arabic Main Name</label>
                <input type="text" class="form-control"
                                                    id="exampleInputText1" placeholder="name"
                                                    name="mainname_ar" value="{{$second_slider->mainname_ar}}">
                                        </div>

                                        <div class="form-group">
                        <label for="exampleInputEmail1">Arabic Second Name</label>
                <input type="text" class="form-control"
                                                    id="exampleInputText1" placeholder="name"
                                                    name="secondname_ar" value="{{$second_slider->secondname_ar}}">
                                        </div>

                                        <div class="form-group">
                        <label for="exampleInputEmail1">Second Name</label>
                <input type="text" class="form-control"
                                                    id="exampleInputText1" placeholder="icon link"
                                                    name="second_name" value="{{$second_slider->second_name}}">
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
<div class="modal fade" id="myModal-second-d{{$second_slider->id}}" tabindex="-1"
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
            <form action="{{route('delete-second-slider',['second_id'=>$second_slider->id])}}" method="post">
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

<div class="sa-content-wrapper" style="padding-bottom:100px;">

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
                                                <form action="{{route('add-third-slider')}}" method="post" enctype="multipart/form-data">
                                                    @csrf

                                                    <div class="col-sm-6">
                                                        <div class="wrap-custom-file inline-block mb-10">
                                                            <input type="file" name="slider_img"
                                                            accept=".gif, .jpg, .png"/>
                                                           
                                                        </div>
                                                    </div>
                                                
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Main NAme</label>
                                                        <input type="text" class="form-control"
                                                               id="exampleInputText1" placeholder="main name"
                                                               name="main_name">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Sub Name</label>
                                                        <input type="text" class="form-control"
                                                               id="exampleInputText1" placeholder="Second name"
                                                               name="second_name">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Main Name</label>
                                                        <input type="text" class="form-control"
                                                               id="exampleInputText1" placeholder="Arabic Main Name"
                                                               name="mainname_ar">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Second Name</label>
                                                        <input type="text" class="form-control"
                                                               id="exampleInputText1" placeholder="Arabic Second Name"
                                                               name="secondname_ar">
                                                    </div>

                                                    <!-- <div class="col-sm-6">
                                                        <div class="wrap-custom-file inline-block mb-10">
                                                            <input type="file" name="slider_icon"
                                                            accept=".gif, .jpg, .png"/>
                                                        </div>
                                                   </div> -->

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
                                            <th data-class="expand">Slider Image</th>
                                            <th data-class="expand">Main Name</th>
                                            <th data-class="expand">Second Name</th>
                                            <th data-class="expand">Arabic Main Name</th>
                                            <th data-class="expand">Arabic Second Name</th>
                                            <th data-hide="phone,tablet">action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        
                                        @foreach($third_sliders as $third_slider)
                                            <tr>
                                            <td><img height="70" width="100" src="{{asset('images/img/'.$third_slider->slider_img)}}"></td>
                                                <td>{{$third_slider->main_name}}</td>
                                                <td>{{$third_slider->second_name}}</td>
                                                <td>{{$third_slider->mainname_ar}}</td>
                                                <td>{{$third_slider->secondname_ar}}</td>
                                                <td>
                                                    <button class="btn btn-primary" data-toggle="modal"
                                                            data-target="#myModal-third{{$third_slider->id}}"
                                                            style="margin-bottom:10px;"><i
                                                                class="fa fa-edit"></i></button>
                                                    <button class="btn btn-danger" data-toggle="modal"
                                                            data-target="#myModal-third-d{{$third_slider->id}}"
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
@foreach($third_sliders as $third_slider)
<!-- Modal  to Edit supervisor-->
<div class="modal fade" id="myModal-third{{$third_slider->id}}" tabindex="-1"
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
                <form action="{{route('edit-third-slider',['third_id'=>$third_slider->id])}}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="col-sm-6">
                            <div class="wrap-custom-file inline-block mb-10">
                                <input type="file" name="slider_img" id="imagethird{{$third_slider->id}}"
                                accept=".gif, .jpg, .png"/>
                                <label for="imagethird{{$third_slider->id}}" class="file-ok" style="background-image: url({{asset('images/img/'.$third_slider->slider_img)}});">
                                </label>
                            </div>
                        </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Main Name</label>
                <input type="text" class="form-control"
                                                    id="exampleInputText1" placeholder="name"
                                                    name="main_name" value="{{$third_slider->main_name}}">
                                        </div>

                                        <div class="form-group">
                        <label for="exampleInputEmail1">Second Name</label>
                <input type="text" class="form-control"
                                                    id="exampleInputText1" placeholder="icon link"
                                                    name="second_name" value="{{$third_slider->second_name}}">
                                        </div>

                                        <div class="form-group">
                        <label for="exampleInputEmail1">Arabic Main Name</label>
                <input type="text" class="form-control"
                                                    id="exampleInputText1" placeholder="name"
                                                    name="mainname_ar" value="{{$third_slider->mainname_ar}}">
                                        </div>

                                        <div class="form-group">
                        <label for="exampleInputEmail1">Arabic Second Name</label>
                <input type="text" class="form-control"
                                                    id="exampleInputText1" placeholder="name"
                                                    name="secondname_ar" value="{{$third_slider->secondname_ar}}">
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
<div class="modal fade" id="myModal-third-d{{$third_slider->id}}" tabindex="-1"
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
            <form action="{{route('delete-third-slider',['third_id'=>$third_slider->id])}}" method="post">
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


<div class="sa-content-wrapper" style="padding-bottom:100px;">

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

                                <div class="modal fade" id="myModal-fourth" tabindex="-1" role="dialog"
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
                                                <form action="{{route('add-fourth-slider')}}" method="post" enctype="multipart/form-data">
                                                    @csrf

                                                    <div class="col-sm-6">
                                                        <div class="wrap-custom-file inline-block mb-10">
                                                            <input type="file" name="slider_img"
                                                            accept=".gif, .jpg, .png"/>
                                                           
                                                        </div>
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
                                   data-target="#myModal-fourth"> Add</button>
                                <!-- widget content -->
                                <div class="widget-body p-0">
                                    <table id="dt-basic"
                                           class="table table-striped table-bordered table-hover"
                                           width="100%">
                                        <thead>
                                        <tr>
                                            <th data-class="expand">Slider Image</th>
                                            <th data-hide="phone,tablet">action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        
                                        @foreach($fourth_sliders as $fourth_slider)
                                            <tr>
                                            <td><img height="70" width="100" src="{{asset('images/img/'.$fourth_slider->slider_img)}}"></td>
                                                <td>
                                                    <button class="btn btn-primary" data-toggle="modal"
                                                            data-target="#myModal-fourth{{$fourth_slider->id}}"
                                                            style="margin-bottom:10px;"><i
                                                                class="fa fa-edit"></i></button>
                                                    <button class="btn btn-danger" data-toggle="modal"
                                                            data-target="#myModal-fourth-d{{$fourth_slider->id}}"
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
@foreach($fourth_sliders as $fourth_slider)
<!-- Modal  to Edit supervisor-->
<div class="modal fade" id="myModal-fourth{{$fourth_slider->id}}" tabindex="-1"
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
                <form action="{{route('edit-fourth-slider',['third_id'=>$fourth_slider->id])}}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="col-sm-6">
                            <div class="wrap-custom-file inline-block mb-10">
                                <input type="file" name="slider_img" id="imagethird{{$fourth_slider->id}}"
                                accept=".gif, .jpg, .png"/>
                                <label for="imagethird{{$fourth_slider->id}}" class="file-ok" style="background-image: url({{asset('images/img/'.$fourth_slider->slider_img)}});">
                                </label>
                            </div>
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
<div class="modal fade" id="myModal-fourth-d{{$fourth_slider->id}}" tabindex="-1"
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
            <form action="{{route('delete-fourth-slider',['third_id'=>$fourth_slider->id])}}" method="post">
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