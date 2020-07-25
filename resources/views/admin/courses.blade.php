@extends('layouts.Admin-Layout')

@section('title')

     Courses

@stop

<style>

.admin-table {
    margin: 100px 4% 0 0;
}

.admins button {
        float: left;
margin: 13px 0;
padding: 7px 17px;
    }

    .search-section {
     background-color:#4D95FD;
     height:60px;
     margin-bottom:100px;
}

.search-section form {
     float:right;
     position:relative;
     top:18%;
     right:3%;
}

.search-section form button {
     position:absolute;
     right: 11px;
     background-color: #f652e2;
color: #fff;
border: 0;
}


</style>

@section('content')

<div class="search-section">
<form action="{{route('search-courses')}}" method="get" class="form-inline my-2 my-lg-0">

      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="item">

      <button class="btn btn-outline-success my-2 my-sm-0 sim-button button5" type="submit">Go</button>
    </form>
</div>


<div class="sa-content-wrapper" style="padding-bottom:5%;">

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
                                                <form action="{{route('add-course')}}" method="post" enctype="multipart/form-data">
                                                    @csrf

                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Cource Name</label>
                                                        <input type="text" class="form-control"
                                                               id="exampleInputText1" placeholder="Course Name"
                                                               name="c_name">
                                                    </div>


 <div class="form-group">
                                                        <label for="exampleInputEmail1">Cource Name</label>
                                                        <input type="text" class="form-control"
                                                               id="exampleInputText1" placeholder="Arabic Name"
                                                               name="cname_ar">
                                                    </div>
                                        

                                                    <label>Instructors</label>

                                                     @foreach($instructors as $instructor)
                                            <div class="">
                                                        <input type="checkbox" value="{{$instructor->id}}" id="add{{$instructor->id}}"
                                                               name="instructors[]"
                                                               aria-label="Checkbox for following text input"
                                                               @if(old('instructors'))
                                                               @foreach(old('instructors') as $old_instructor)
                                                               @if($old_instructor == $instructor->id)
                                                               checked
                                                                @endif
                                                                @endforeach
                                                                @endif
                                                        >
                                                      
                                           <label for="message-text" class="col-form-label">{{$instructor->name_en}}</label>
                                           
                                            </div>
                                        @endforeach

                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Details</label>
                                                        <textarea type="text" class="form-control"
                                                               id="exampleInputText1" placeholder="Details English"
                                                               name="detail"></textarea>
                                                    </div>

                                                     <div class="form-group">
                                                        <label for="exampleInputEmail1">Details</label>
                                                        <textarea type="text" class="form-control"
                                                               id="exampleInputText1" placeholder="Details Arabic"
                                                               name="detail_ar"></textarea>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Advantage English</label>
                                                        <textarea type="text" class="form-control"
                                                               id="exampleInputText1" placeholder="Advantage English"
                                                               name="advantage"></textarea>
                                                    </div>

                                                      <div class="form-group">
                                                        <label for="exampleInputEmail1">Advantage Arabic</label>
                                                        <textarea type="text" class="form-control"
                                                               id="exampleInputText1" placeholder="Advantage Arabic"
                                                               name="advantage_ar"></textarea>
                                                    </div>

                                                    <div class="col-sm-6">
                                                    <label for="exampleInputEmail1">Cource Img</label>

                                                        <div class="wrap-custom-file inline-block mb-10">
                                                            <input type="file" name="course_img"
                                                            accept=".gif, .jpg, .png"/>
                                                           
                                                        </div>
                                                    </div>
                                                
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Start Date</label>
                                                        <input type="date" class="form-control"
                                                               id="exampleInputText1" placeholder="Start Date"
                                                               name="start">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">End Date</label>
                                                        <input type="date" class="form-control"
                                                               id="exampleInputText1" placeholder="End Date"
                                                               name="end">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Value</label>
                                                        <input type="number" class="form-control"
                                                               id="exampleInputText1" placeholder="Value"
                                                               name="value">
                                                    </div>

                                                    <input class="form-control social" type="text" placeholder="map link" name="map_link">

                                                    <input class="form-control social" type="text" placeholder="venue" name="venue">


                                                    <select name="course_category" class="select-css">
            <option selected disabled>Course Category</option>
            @foreach($first_sliders as $first_slider)
            <option value="{{$first_slider->title}}">{{$first_slider->title}}</option>
            @endforeach
            </select>

            <select name="category_ar" class="select-css">
            <option selected disabled>Course Category</option>
            @foreach($first_sliders as $first_slider)
            <option value="{{$first_slider->title_ar}}">{{$first_slider->title_ar}}</option>
            @endforeach
            </select>

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

                                <div class="col-md-9 float-right admins" style="margin: 45px 45px 0 0;">
                                <button style=" margin-top: 1rem;" href="javascript:void(0);"
                                   class="btn btn-primary" data-toggle="modal"
                                   data-target="#myModal-third"> Add</button>
                                <!-- widget content -->
                                <div class="widget-body p-0">

@if($item)
                                @foreach($searched_courses as $searched_course)

                                <table id="dt-basic"
                                                   class="table-responsive table table-striped table-bordered table-hover"
                                                   width="100%" style="overflow-x: scroll;margin-bottom: 100px;">
                                        <thead>
                                        <tr>
                                            <th data-class="expand">Course Name</th>
                                            <th data-class="expand">Instructor Name</th>
                                            <th data-class="expand">Instructor Image</th>
                                            <th data-class="expand">Course Category</th>
                                            <th data-class="expand">cname_ar</th>
                                            <th data-class="expand">detail_ar</th>
                                            <th data-class="expand">advantage_ar</th>
                                            <th data-class="expand">category_ar</th>
                                            <th data-class="expand">Start</th>
                                            <th data-class="expand">End</th>
                                            <th data-class="expand">Value</th>
                                            <th data-class="expand">Registers</th>

                                                                                        <th data-class="expand">Map Link</th>

                                                                                        <th data-class="expand">Venue</th>

                                                                                        <th data-class="expand">instructors</th>

                                            <th data-hide="phone,tablet">action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        
                                            <tr>
                                            <td>{{$searched_course->c_name}}</td>
                                            <td>{{$searched_course->ins_name}}</td>
                                            <td><img height="70" width="100" src="{{asset('images/img/'.$searched_course->course_img)}}"></td>
                                            <td>{{$searched_course->course_category}}</td>
                                            <td>{{$searched_course->cname_ar}}</td>
                                            <td>{{$searched_course->detail_ar}}</td>
                                            <td>{{$searched_course->advantage_ar}}</td>
                                            <td>{{$searched_course->category_ar}}</td>

                                                <td>{{$searched_course->start}}</td>
                                                <td>{{$searched_course->end}}</td>
                                                <td>{{$searched_course->value}}</td>
                                                  <td>

                                    

                                                                {{$course->registers->count()}}
                                    
                                            </td>

                                                                                            <td>{{$course->map_link}}</td>

                                                                                            <td>{{$course->venue}}</td>

                                                        <td>@foreach ($course->instructors as $course)
                                                                <span class="label label-info"
                                                                      style="font-size: 11px">{{$course->name_en}}</span>
                                                            @endforeach</td>
                                                <td>
                                                    <button class="btn btn-primary" data-toggle="modal"
                                                            data-target="#myModal-third-e{{$searched_course->id}}"
                                                            style="margin-bottom:10px;"><i
                                                                class="fa fa-edit"></i></button>
                                                    <button class="btn btn-danger" data-toggle="modal"
                                                            data-target="#myModal-third-d{{$searched_course->id}}"
                                                            style="margin-bottom:10px;"><i
                                                                class="fa fa-trash"></i></button>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>

                                    @endforeach
@endif

                                    <table id="dt-basic"
                                                   class="table-responsive table table-striped table-bordered table-hover"
                                                   width="100%" style="overflow-x: scroll;margin-bottom: 100px;">
                                        <thead>
                                        <tr>
                                            <th data-class="expand">Course Name</th>
                                            <th data-class="expand">Instructor Name</th>
                                            <th data-class="expand">Instructor Image</th>
                                            <th data-class="expand">Course Category</th>
                                            <th data-class="expand">cname_ar</th>
                                            <th data-class="expand">detail_ar</th>
                                            <th data-class="expand">advantage_ar</th>
                                            <th data-class="expand">category_ar</th>
                                            <th data-class="expand">Start</th>
                                            <th data-class="expand">End</th>
                                            <th data-class="expand">Value</th>
                                            <th data-class="expand">Registers</th>
                                            <th data-class="expand">Map Link</th>

                                                                                        <th data-class="expand">Venue</th>

                                            <th data-class="expand">Instructors</th>

                                            <th data-hide="phone,tablet">action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        
                                        @foreach($courses as $course)
                                            <tr>
                                            <td>{{$course->c_name}}</td>
                                            <td>{{$course->ins_name}}</td>
                                            <td><img height="70" width="100" src="{{asset('images/img/'.$course->course_img)}}"></td>
                                            <td>{{$course->course_category}}</td>
                                            <td>{{$course->cname_ar}}</td>
                                            <td>{{$course->detail_ar}}</td>
                                            <td>{{$course->advantage_ar}}</td>
                                            <td>{{$course->category_ar}}</td>
                                                <td>{{$course->start}}</td>
                                                <td>{{$course->end}}</td>
                                                <td>{{$course->value}}</td>
                                            
                                            
                                                <td>

                                    

                                                                {{$course->registers->count()}}
                                    
                                            </td>

                                                <td>{{$course->map_link}}</td>

                                                                                                                                            <td>{{$course->venue}}</td>


                                                        <td>@foreach ($course->instructors as $cours)
                                                                <span class="label label-info"
                                                                      style="font-size: 11px">{{$cours->name_en}}</span>
                                                            @endforeach</td>
                                                <td>
                                                    <button class="btn btn-primary" data-toggle="modal"
                                                            data-target="#myModal-third-e{{$course->id}}"
                                                            style="margin-bottom:10px;"><i
                                                                class="fa fa-edit"></i></button>
                                                    <button class="btn btn-danger" data-toggle="modal"
                                                            data-target="#myModal-third-d{{$course->id}}"
                                                            style="margin-bottom:10px;"><i
                                                                class="fa fa-trash"></i></button>
                                                </td>
                                            </tr>
                                        @endforeach

                                        </tbody>
                                    </table>

                                    {{$courses->links()}}

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
@foreach($courses as $course)
<!-- Modal  to Edit supervisor-->
<div class="modal fade" id="myModal-third-e{{$course->id}}" tabindex="-1"
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
                <form action="{{route('edit-course',['course_id'=>$course->id])}}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="exampleInputEmail1">Course Name</label>
                <input type="text" class="form-control"
                                                    id="exampleInputText1" placeholder="Course Name"
                                                    name="c_name" value="{{$course->c_name}}">
                                        </div>

                                              <div class="form-group">
                        <label for="exampleInputEmail1">Course Name</label>
                <input type="text" class="form-control"
                                                    id="exampleInputText1" placeholder="Name English"
                                                    name="cname_ar" value="{{$course->cname_ar}}">
                                        </div>

                                                     @foreach($instructors as $instructor)
                                            <div class="input-group col-sm-4">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <input type="checkbox" value="{{$instructor->id}}" id="edit{{$instructor->id}}"
                                                               name="instructors[]"
                                                               aria-label="Checkbox for following text input"
                                                               @foreach($course->instructors as $old_instructor)
                                                               @if($old_instructor->id == $instructor->id)
                                                               checked
                                                                @endif
                                                                @endforeach
                                                        >
                                                    </div>
                                                </div>

                                                <label for="message-text" class="col-form-label">{{$instructor->name_en}}</label>

                                               
                                            </div>

                                        @endforeach

                                        <div class="form-group">
                        <label for="exampleInputEmail1">Details</label>
                <input type="text" class="form-control"
                                                    id="exampleInputText1" placeholder="detail"
                                                    name="detail" value="{{$course->detail}}">
                                        </div>

                                        <div class="form-group">
                        <label for="exampleInputEmail1">Advantage</label>
                <input type="text" class="form-control"
                                                    id="exampleInputText1" placeholder="advantage"
                                                    name="advantage" value="{{$course->advantage}}">
                                        </div>

                                      


                                        <div class="form-group">
                        <label for="exampleInputEmail1">Details Arabic</label>
                <input type="text" class="form-control"
                                                    id="exampleInputText1" placeholder="arabic details"
                                                    name="detail_ar" value="{{$course->detail_ar}}">
                                        </div>

                                        <div class="form-group">
                        <label for="exampleInputEmail1">Advantage Arabic</label>
                <input type="text" class="form-control"
                                                    id="exampleInputText1" placeholder="arabic advantage"
                                                    name="advantage_ar" value="{{$course->advantage_ar}}">
                                        </div>

                    <div class="col-sm-6">
                            <div class="wrap-custom-file inline-block mb-10">
                                <input type="file" name="course_img" id="imagethird{{$course->id}}"
                                accept=".gif, .jpg, .png"/>
                                <label for="imagethird{{$course->id}}" class="file-ok" style="background-image: url({{asset('images/img/'.$course->course_img)}});">
                                </label>
                            </div>
                        </div>

                        <select name="course_category" class="select-css">
            <option selected>{{$first_slider->title}}</option>
            @foreach($first_sliders as $first_slider)
            <option value="{{$first_slider->title}}">{{$first_slider->title}}</option>
            @endforeach
            </select>

            <select name="category_ar" class="select-css">
            <option selected>{{$first_slider->title_ar}}</option>
            @foreach($first_sliders as $first_slider)
            <option value="{{$first_slider->title_ar}}">{{$first_slider->title_ar}}</option>
            @endforeach
            </select>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Start Date</label>
                <input type="date" class="form-control"
                                                    id="exampleInputText1" placeholder="Start Date"
                                                    name="start" value="{{$course->start}}">
                                        </div>

                                        <div class="form-group">
                        <label for="exampleInputEmail1">End Date</label>
                <input type="date" class="form-control"
                                                    id="exampleInputText1" placeholder="End Date"
                                                    name="end" value="{{$course->end}}">
                                        </div>


                                        <div class="form-group">
                        <label for="exampleInputEmail1">Value</label>
                <input type="number" class="form-control"
                                                    id="exampleInputText1" placeholder="Value"
                                                    name="value" value="{{$course->value}}">
                                        </div>

<input class="form-control social" type="text" placeholder="map link" name="map_link" value="{{$course->map_link}}">

<input class="form-control social" type="text" placeholder="venue" name="venue" value="{{$course->venue}}">


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
<div class="modal fade" id="myModal-third-d{{$course->id}}" tabindex="-1"
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
            <form action="{{route('delete-course',['course_id'=>$course->id])}}" method="post">
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


<h2 class="text-center mt-4">Courses Categories</h2>
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
                                                <form action="{{route('add-first-slider')}}" method="post">
                                                    @csrf

                                                    <!-- <div class="col-sm-6">
                                                        <div class="wrap-custom-file inline-block mb-10">
                                                            <input type="file" name="slider_img"
                                                            accept=".gif, .jpg, .png"/>
                                                           
                                                        </div>
                                                    </div> -->
                                                
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Name</label>
                                                        <input type="text" class="form-control"
                                                               id="exampleInputText1" placeholder="name"
                                                               name="title">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Name</label>
                                                        <input type="text" class="form-control"
                                                               id="exampleInputText1" placeholder="name ar"
                                                               name="title_ar">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Name</label>
                                                        <input type="text" class="form-control"
                                                               id="exampleInputText1" placeholder="icon link"
                                                               name="icon_link">
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
                                   data-target="#myModal-1"> Add</button>
                                <!-- widget content -->
                                <div class="widget-body p-0">
                                    <table id="dt-basic"
                                           class="table table-striped table-bordered table-hover"
                                           width="100%">
                                        <thead>
                                        <tr>
                                            <th data-class="expand">Title</th>
                                            <th data-class="expand">Title Arabic</th>
                                            <th data-class="expand">Icon</th>

                                            <th data-hide="phone,tablet">action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        
                                        @foreach($first_sliders as $first_slider)
                                            <tr>
                                                <td>{{$first_slider->title}}</td>
                                                <td>{{$first_slider->title_ar}}</td>
                                                <td><i class="{{$first_slider->icon_link}}"></i></td>
                                                <td>
                                                    <button class="btn btn-primary" data-toggle="modal"
                                                            data-target="#myModal-2{{$first_slider->id}}"
                                                            style="margin-bottom:10px;"><i
                                                                class="fa fa-edit"></i></button>
                                                    <button class="btn btn-danger" data-toggle="modal"
                                                            data-target="#myModal-3{{$first_slider->id}}"
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
@foreach($first_sliders as $first_slider)
<!-- Modal  to Edit supervisor-->
<div class="modal fade" id="myModal-2{{$first_slider->id}}" tabindex="-1"
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
                <form action="{{route('edit-first-slider',['slider_id'=>$first_slider->id])}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                <input type="text" class="form-control"
                                                    id="exampleInputText1" placeholder="name"
                                                    name="title" value="{{$first_slider->title}}">
                                        </div>

                                        <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                <input type="text" class="form-control"
                                                    id="exampleInputText1" placeholder="name ar"
                                                    name="title_ar" value="{{$first_slider->title_ar}}">
                                        </div>

                                        <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                <input type="text" class="form-control"
                                                    id="exampleInputText1" placeholder="icon link"
                                                    name="icon_link" value="{{$first_slider->icon_link}}">
                                        </div>

                        <!-- <div class="col-sm-6">
                            <div class="wrap-custom-file inline-block mb-10">
                                <input type="file" name="slider_icon" id="image1{{$first_slider->id}}"
                                accept=".gif, .jpg, .png"/>
                                <label for="image1{{$first_slider->id}}" class="file-ok" style="background-image: url({{asset('images/img/'.$first_slider->slider_img)}});">
                                </label>
                            </div>
                        </div> -->

                        <!-- <div class="col-sm-6">
                            <div class="wrap-custom-file inline-block mb-10">
                                <input type="file" name="slider_icon" id="image2{{$first_slider->id}}"
                                accept=".gif, .jpg, .png"/>
                                <label for="image2{{$first_slider->id}}" class="file-ok" style="background-image: url({{asset('images/img/'.$first_slider->slider_icon)}});">
                                </label>
                            </div>
                        </div> -->
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
<div class="modal fade" id="myModal-3{{$first_slider->id}}" tabindex="-1"
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
            <form action="{{route('delete-first-slider',['slider_id'=>$first_slider->id])}}" method="post">
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


<div class="col-md-9 float-right admins" style="margin-right: 45px;padding-bottom:5%;">
<h2>Instructors</h2>

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
                                <div class="modal fade" id="myModal-1-ins" tabindex="-1" role="dialog"
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
                                                <form action="{{route('add-instructor')}}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Arabic Name</label>
                                                        <input type="text" class="form-control"
                                                               id="exampleInputText1" placeholder="Arabic Name"
                                                               name="name_ar" value="{{old('name')}}">
                                                    </div>

                                                     <div class="form-group">
                                                        <label for="exampleInputEmail1">English Name</label>
                                                        <input type="text" class="form-control"
                                                               id="exampleInputText1" placeholder="English Name"
                                                               name="name_en" value="{{old('name')}}">
                                                    </div>
                                                    
                                                      <div class="col-sm-12">
                                                    <label for="exampleInputEmail1">Instructor Img</label>

                                                        <div class="wrap-custom-file inline-block mb-10">
                                                            <input type="file" name="ins_img"
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
                                <button style=" margin-top: 1rem;" href="javascript:void(0);"
                                   class="btn btn-primary" data-toggle="modal"
                                   data-target="#myModal-1-ins"> Add</button>
                                <!-- widget content -->
                                <div class="widget-body p-0">
                                    <table id="dt-basic"
                                           class="table table-striped table-bordered table-hover"
                                           width="100%">
                                        <thead>
                                        <tr>
                                        <th data-hide="phone">ID</th>
                                            <th data-class="expand">Arabic Name</th>  
                                            <th data-class="expand">English Name</th>                                                                                                                      <th data-class="expand">Instructor Image</th>                                                                          
                                            <th data-hide="phone,tablet">action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        
                                        @foreach($instructors as $instructor)
                                            <tr>
                                                <td>{{$instructor->id}}</td>
                                                <td>{{$instructor->name_ar}}</td>
                                                <td>{{$instructor->name_en}}</td>
                                                <td><img height="70" width="100" src="{{asset('images/img/'.$instructor->ins_img)}}"></td>

                                                <td>
                                                    <button class="btn btn-primary" data-toggle="modal"
                                                            data-target="#myModal-2-ins{{$instructor->id}}"
                                                            style="margin-bottom:10px;"><i
                                                                class="fa fa-edit"></i></button>
                                                    <button class="btn btn-danger" data-toggle="modal"
                                                            data-target="#myModal-3-ins{{$instructor->id}}"
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

@foreach($instructors as $instructor)

<!-- Modal  to Edit supervisor-->
<div class="modal fade" id="myModal-2-ins{{$instructor->id}}" tabindex="-1"
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
                <form action="{{route('edit-instructor', ['instructor_id'=>$instructor->id])}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label
                                for="exampleInputEmail1">Arabic Name</label>
                        <input type="text"
                               class="form-control"
                               id="exampleInputText1"
                               placeholder="Arabic Name" name="name_ar" value="{{$instructor->name_ar}}">
                    </div>

                     <div class="form-group">
                        <label
                                for="exampleInputEmail1">English Name</label>
                        <input type="text"
                               class="form-control"
                               id="exampleInputText1"
                               placeholder="English Name" name="name_en" value="{{$instructor->name_en}}">
                    </div>

                           <div class="col-sm-12">
                            <div class="wrap-custom-file inline-block mb-10">
                                <input type="file" name="ins_img" id="insimg{{$instructor->id}}"
                                accept=".gif, .jpg, .png"/>
                                <label for="insimg{{$instructor->id}}" class="file-ok" style="background-image: url({{asset('images/img/'.$instructor->ins_img)}});">
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
<div class="modal fade" id="myModal-3-ins{{$instructor->id}}" tabindex="-1"
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
            <form action="{{route('delete-instructor', ['instructor_id'=>$instructor->id])}}" method="post">
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

@stop