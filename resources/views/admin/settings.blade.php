@extends('layouts.Admin-Layout')

@section('title')

     Settings

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

.file-ok {
    width: 100px;
height: 100px;
background-size: cover;
display: block;
}

</style>

@section('content')


    <div class="col-md-9 float-right admins">
<div class="setting">
  <!-- widget content -->
                                        <div class="widget-body p-0">
                                        <h3>Home Header</h3>

                                            <table id="dt-basic"
                                                   class="table table-striped table-bordered table-hover"
                                                   width="100%">
                                                <thead>
                                                
                                                <tr>
                                                    <th data-hide="phone">Logo</th>
                                                    <th data-hide="phone">Home Header Image</th>
                                                    <th data-hide="phone">Courses Header Image</th>
                                                    <th data-hide="phone,tablet">Course Page Header Image</th>
                                                    <th data-hide="phone,tablet">about Image</th>
                                                    <th data-hide="phone,tablet">Fixed Image</th>
                                                    <th data-hide="phone,tablet">NewsLetter Image</th>
                                                    <th data-hide="phone,tablet">Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>

                                                    <tr>
                                                        <td><img height="70" width="100" src="{{asset('images/img/'.$images->logo)}}"></td>
                                                        <td><img height="70" width="100" src="{{asset('images/img/'.$images->home_img)}}"></td>
                                                        <td><img height="70" width="100" src="{{asset('images/img/'.$images->courses_img)}}"></td>
                                                        <td><img height="70" width="100" src="{{asset('images/img/'.$images->course_img)}}"></td>
                                                        <td><img height="70" width="100" src="{{asset('images/img/'.$images->about_img)}}"></td>
                                                        <td><img height="70" width="100" src="{{asset('images/img/'.$images->fixed_img)}}"></td>
                                                        <td><img height="70" width="100" src="{{asset('images/img/'.$images->news_img)}}"></td>

                                                        <td>
                                                        <button class="btn btn-primary" data-toggle="modal"
                                                                    data-target="#myModal-image{{$images->id}}"
                                                                    style="margin-bottom:10px;"><i
                                                                        class="fa fa-edit"></i></button>
                                    
                                                
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- end widget content -->
                                        </div>
</div>


 <!-- Modal  to Edit supervisor-->
 <div class="modal fade" id="myModal-image{{$images->id}}" tabindex="-1"
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
                        <form action="{{route('edit-image')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                            <div class="col-sm-6">
                                <div class="wrap-custom-file inline-block mb-10">
                                    <input type="file" name="logo" id="image1{{$images->id}}"
                                    accept=".gif, .jpg, .png"/>
                                     <label for="image1{{$images->id}}" class="file-ok" style="background-image: url({{asset('images/img/'.$images->logo)}});">
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="wrap-custom-file inline-block mb-10">
                                    <input type="file" name="home_img" id="image2{{$images->id}}"
                                    accept=".gif, .jpg, .png"/>
                                     <label for="image2{{$images->id}}" class="file-ok" style="background-image: url({{asset('images/img/'.$images->home_img)}});">
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="wrap-custom-file inline-block mb-10">
                                    <input type="file" name="courses_img" id="image3{{$images->id}}"
                                    accept=".gif, .jpg, .png"/>
                                     <label for="image3{{$images->id}}" class="file-ok" style="background-image: url({{asset('images/img/'.$images->courses_img)}});">
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="wrap-custom-file inline-block mb-10">
                                    <input type="file" name="course_img" id="image4{{$images->id}}"
                                    accept=".gif, .jpg, .png"/>
                                     <label for="image4{{$images->id}}" class="file-ok" style="background-image: url({{asset('images/img/'.$images->course_img)}});">
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="wrap-custom-file inline-block mb-10">
                                    <input type="file" name="fixed_img" id="image5{{$images->id}}"
                                    accept=".gif, .jpg, .png"/>
                                     <label for="image5{{$images->id}}" class="file-ok" style="background-image: url({{asset('images/img/'.$images->fixed_img)}});">
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="wrap-custom-file inline-block mb-10">
                                    <input type="file" name="about_img" id="image6{{$images->id}}"
                                    accept=".gif, .jpg, .png"/>
                                     <label for="image6{{$images->id}}" class="file-ok" style="background-image: url({{asset('images/img/'.$images->about_img)}});">
                                    </label>
                                </div>
                            </div>

                                 <div class="col-sm-6">
                                <div class="wrap-custom-file inline-block mb-10">
                                    <input type="file" name="news_img" id="image7{{$images->id}}"
                                    accept=".gif, .jpg, .png"/>
                                     <label for="image7{{$images->id}}" class="file-ok" style="background-image: url({{asset('images/img/'.$images->news_img)}});">
                                    </label>
                                </div>
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

        <div class="col-md-9 float-right">
<div class="setting-about">

<h3>Header Details</h3>

<form action="{{route('edit-header')}}" method="post">
@csrf
        <div class="col-md-4 about">
            <input class="form-control social" name="title1" value="{{$header_detail->title1}}" placeholder="Main Title">
            <input class="form-control social" name="title2" value="{{$header_detail->title2}}" placeholder="Sub Title">
            <input class="form-control social" name="title1_ar" value="{{$header_detail->title1_ar}}" placeholder="Arabic Main Title">
            <input class="form-control social" name="title2_ar" value="{{$header_detail->title2_ar}}" placeholder="Arabic Sub Title">
            <input type="number" class="form-control social" name="phone" value="{{$header_detail->phone}}" placeholder="Phone">
            <input type="text" class="form-control social" name="mobile" value="{{$header_detail->mobile}}" placeholder="Mobile">
            <input type="email" class="form-control social" name="email" value="{{$header_detail->email}}" placeholder="Email">
            <input type="text" class="form-control social" name="duration" value="{{$header_detail->duration}}" placeholder="{{$header_detail->duration}}">

        <button class="btn btn-primary">Update</button>
  </div>
          </form>
    </div>
</div>

<div class="col-md-9 float-right">
<div class="setting-about">

<h3>About Details</h3>

<form action="{{route('edit-detail')}}" method="post">
@csrf
    <div class="row">
        <div class="col-md-4 about">
            <input class="form-control social" name="title1" value="{{$home_about->title1}}" placeholder="title1">
            <input class="form-control social" name="title1_ar" value="{{$home_about->title1_ar}}" placeholder="title1_ar">           
            <textarea class="form-control social" name="detail1" placeholder="detail1" rows="10">{{$home_about->detail1}}</textarea>
 <textarea class="form-control social" name="detail1_ar" placeholder="detail1_ar" rows="10">{{$home_about->detail1_ar}}</textarea>
        </div>

         <div class="col-md-4 about">
            <input class="form-control social" name="title2" value="{{$home_about->title2}}" placeholder="title1">
            <input class="form-control social" name="title2_ar" value="{{$home_about->title2_ar}}" placeholder="title1_ar">    
            <textarea class="form-control social" name="detail2" placeholder="detail2" rows="10">{{$home_about->detail2}}</textarea>
            <textarea class="form-control social" name="detail2_ar" placeholder="detail2_ar" rows="10">{{$home_about->detail2_ar}}</textarea>
        </div>

  <div class="col-md-4 about">
           <input class="form-control social" name="title3" value="{{$home_about->title3}}" placeholder="title3">
           <input class="form-control social" name="title3_ar" value="{{$home_about->title3_ar}}" placeholder="title3_ar">
           <textarea class="form-control social" name="detail3" placeholder="detail3" rows="10">{{$home_about->detail3}}</textarea>
           <textarea class="form-control social" name="detail3_ar" placeholder="detail3_ar" rows="10">{{$home_about->detail3_ar}}</textarea>
        </div>
        <button class="btn btn-primary">Update</button>
  </div>
          </form>
    </div>
</div>

<div class="col-md-9 float-right admins">

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
                                                <form action="{{route('add-new')}}" method="post">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">New</label>
                                                        <input type="text" class="form-control"
                                                               id="exampleInputText1" placeholder="New"
                                                               name="new" value="{{old('new')}}">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Arabic New</label>
                                                        <input type="text" class="form-control"
                                                               id="exampleInputText1" placeholder="New_ar"
                                                               name="new_ar" value="{{old('new_ar')}}">
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
                                            <th data-class="expand">new</th> 
                                            <th data-class="expand">new arabic</th>                                                                               
                                            <th data-hide="phone,tablet">action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        
                                        @foreach($news as $new)
                                            <tr>
                                                <td>{{$new->id}}</td>
                                                <td>{{$new->new}}</td>
                                                <td>{{$new->new_ar}}</td>
                                                <td>
                                                    <button class="btn btn-primary" data-toggle="modal"
                                                            data-target="#myModal-2{{$new->id}}"
                                                            style="margin-bottom:10px;"><i
                                                                class="fa fa-edit"></i></button>
                                                    <button class="btn btn-danger" data-toggle="modal"
                                                            data-target="#myModal-3{{$new->id}}"
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

@foreach($news as $new)

<!-- Modal  to Edit supervisor-->
<div class="modal fade" id="myModal-2{{$new->id}}" tabindex="-1"
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
                <form action="{{route('edit-new', ['new_id'=>$new->id])}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label
                                for="exampleInputEmail1">name</label>
                        <input type="text"
                               class="form-control"
                               id="exampleInputText1"
                               placeholder="name" name="new" value="{{$new->new}}">
                    </div>

                    <div class="form-group">
                        <label
                                for="exampleInputEmail1">new ar</label>
                        <input type="text"
                               class="form-control"
                               id="exampleInputText1"
                               placeholder="new ar" name="new_ar" value="{{$new->new_ar}}">
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
<div class="modal fade" id="myModal-3{{$new->id}}" tabindex="-1"
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
            <form action="{{route('delete-new', ['new_id'=>$new->id])}}" method="post">
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

<div class="col-md-9 float-right">
<div class="setting-about">

<h3>NewsLetter Details</h3>

<form action="{{route('edit-newsletter')}}" method="post">
@csrf
    <div class="row">
        <div class="col-md-6 about">
            <input class="form-control social" name="paragraph1" value="{{$paragraphs->paragraph1}}" placeholder="paragraph1">
        </div>

         <div class="col-md-6 about">
            <input class="form-control social" name="paragraph2" value="{{$paragraphs->paragraph2}}" placeholder="paragraph2">
        </div>

        <div class="col-md-6 about">
            <input class="form-control social" name="paragraph1_ar" value="{{$paragraphs->paragraph1_ar}}" placeholder="Arabic Paragraph 1">
        </div>

        <div class="col-md-6 about">
            <input class="form-control social" name="paragraph2_ar" value="{{$paragraphs->paragraph2_ar}}" placeholder="Arabic Paragraph 2">
        </div>

        <button class="btn btn-primary">Update</button>
  </div>
          </form>
    </div>
</div>

@stop


@section('js')

@stop