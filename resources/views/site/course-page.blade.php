@extends('layouts.Site-Layout')

@section('title')

     course page

@stop

<style>

.course-header {
    padding: 4% 0;
border-bottom: 1px solid #000;
}

.course-header img {
    width: 40px;
border-radius: 50%;
height: 40px;
margin: 10px;
}


.dropdown-item {
    display: block;
    width: 100%;
    padding: 1.25rem 0 !important;
    clear: both;
    font-weight: 400;
    color: #212529;
    text-align: left;
    white-space: nowrap;
    background-color: transparent;
    border: 0;
}

.dropdown-menu {
    width:290px;
}

.course-detail {
    font-size: 12px;
font-weight: normal;
}

.course-detail h5 {
    margin: 7px 0;
}

.course-header h5 {
    color:#898989;
}


.course-header p {
    margin-bottom:0 !important;
    display: inline;
float: right;
}

.course-value h5 {
    margin: 5px 0;
}

.course-value span{
    color: green;
font-size: 20px;
font-weight: bold;
padding: 10px 10px 0 0;
}

.add-padd-left {
    padding: 0 35px !important;
}

.sidebar {
    background-color:#4D95FD;
    padding:20px;
    margin-bottom:20px;
}

.sidebar input {
    margin:10px 0;
}

.dotted-border {
    height:20px;
    border-bottom:1px dotted #fff;
}

.sidebar form p {
    color:#fff;
    font-weight:bold;
    margin-top:20px;
}

.sidebar form label {
    margin-left:5px;
    color:#fff;
    font-weight:bold;
}

.sidebar form input[type="radio"] {
    margin-left:10px;
}

.code input {
    width: 30%;
border: 0;
border-radius: 4px;
position: relative;
top: 16px;
left: 20px;
padding: 10px;
}

.course-content {
    padding-left:4% !important;
}

.course-content p {
    padding: 5px 0;
line-height: 24px;
}

</style>

@section('content')

<div class="section" style="background-image: url({{asset('site/img/header-section.jpg')}})">

<!-- <div class="overlay"></div> -->
<h2>{{trans('site.courses categories')}}</h2>
@foreach($courses_page as $course_page)

@if(app()->isLocale('en'))


     <p>{{$category}} /{{trans('site.all courses')}}/{{$course_page->c_name}}</p>

     @else 
     <p>{{$category}} /{{trans('site.all courses')}}/{{$course_page->cname_ar}}</p>


     @endif
@endforeach
</div>

<div class="container">

@foreach($courses_page as $course_page)

<div class="course-header">
<div class="row">

<div class="col-md-8">


    <div class="row">

    @if(app()->isLocale('en'))

        <div class="col-md-4" style="border-right: 1px solid #e9e9e9;">

        @else 
        <div class="col-md-4" style="border-left: 1px solid #e9e9e9;">

        @endif
        <div class="row">
                   

                    <div class="col-md-12">
                        <div class="course-detail">

                            <div class="dropdown">
                            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"                                          aria-haspopup="true" aria-expanded="false">
                                <h5 style="display: inline-block;">Instructors</h5>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        @foreach ($course_page->instructors as $cours_page)
                                                @if(app()->isLocale('en'))

                                                <div class="row">
                                                 <div class="col-sm-4 col-xs-4">
                        <img src="{{asset('images/img/'. $cours_page->ins_img)}}">
                    </div>

                                                 <div class="col-sm-8 col-xs-8">

                                <a class="dropdown-item" href="#">{{$cours_page->name_en}}</a>

                                </div>
                                </div>
                              
                                                                      @else
    
                                     <div class="row">
                                                 <div class="col-sm-4 col-xs-4">
                        <img src="{{asset('images/img/'. $cours_page->ins_img)}}">
                    </div>

                                                 <div class="col-sm-8 col-xs-8">

                                <a class="dropdown-item" href="#">{{$cours_page->name_ar}}</a>

                                </div>
                                </div>

                                                                    @endif


                                                          @endforeach

                            </div>
                            </div>



                        </div>
                    </div>
                </div>
                </div>
                @if(app()->isLocale('en'))

        <div class="col-md-3 add-padd-left" style="border-right: 1px solid #e9e9e9;">

        @else 
        <div class="col-md-3 add-padd-left" style="border-left: 1px solid #e9e9e9;">


        @endif
        <h5>{{trans('site.duration')}}</h5>

        @if(app()->isLocale('en'))

<div>
        <span>{{trans('site.start')}}</span>
         <p>{{$course_page->start}}</p></div>   
        <div><span>{{trans('site.end')}}</span>
         <p>{{$course_page->end}}</p></div>

@else 
<div>
        <span style="margin-right:5px;">{{trans('site.start')}}</span>
         <p>{{$course_page->start}}</p></div>   
        <div><span style="margin-right:5px;">{{trans('site.end')}}</span>
         <p>{{$course_page->end}}</p></div>

@endif
        </div>

        <div class="col-md-3 course-value add-padd-left">
        <h5>{{trans('site.value')}}</h5>
        <span>{{$course_page->value}}</span><h5 style="display:inline-block;">{{trans('site.sar')}}</h5>
        </div>
    </div>

</div>
</div>

</div>

@endforeach

<!-- end of container -->

<div class="row mt-4">

    <div class="col-md-4">

        <div class="sidebar">
        <form action="{{route('register-course', ['category'=>$category])}}" method="post">
        @csrf

        @foreach($courses_page as $course_page)

        <input type="hidden" value="{{$course_page->id}}" name="course_id">

        @endforeach
                <input type="text" class="form-control" name="name" placeholder="{{trans('site.name')}}" onfocus="this.placeholder=''" onblur="this.placeholder='{{trans('site.name')}}'">

                @if(app()->isLocale('en'))

                <input type="email" class="form-control" name="email" placeholder="{{trans('site.email')}}" onfocus="this.placeholder=''" onblur="this.placeholder='{{trans('site.email')}}'">
                
                @else 

                <input type="email" class="form-control text-right" name="email" placeholder="{{trans('site.email')}}" onfocus="this.placeholder=''" onblur="this.placeholder='{{trans('site.email')}}'">

                @endif
                <input type="text" class="form-control" name="mobile" placeholder="{{trans('site.mobile')}}" onfocus="this.placeholder=''" onblur="this.placeholder='{{trans('site.mobile')}}'">
                <input type="text" class="form-control" name="address" placeholder="{{trans('site.address')}}" onfocus="this.placeholder=''" onblur="this.placeholder='{{trans('site.address')}}'">
                <input type="text" class="form-control" name="occupation" placeholder="{{trans('site.occupation and employment')}}" onfocus="this.placeholder=''" onblur="this.placeholder='{{trans('site.occupation and employment')}}'">

                <div class="dotted-border"></div>

                <p>{{trans('site.Have you previously applied for S.L.E?')}}؟</p>
                <input name="apply" value="Yes" type="radio"><label>{{trans('site.yes')}} </label>
                <input name="apply" value="No" type="radio"><label>{{trans('site.no')}}</label>
<div class="row" style="margin:0 auto;">
                <p>{{trans('site.How many time you applied?')}}</p>
                <input type="number" name="apply_n" min="0" max="100" style="width:20%;margin-left:15px;">
                </div>
                <p>{{trans('site.How you reach us?')}}</p>
                <!-- <div> -->
                @foreach($channels as $channel)
                                            <div class="">
                                                        <input type="checkbox" value="{{$channel->id}}" id="add{{$channel->id}}"
                                                               name="channels[]"
                                                               aria-label="Checkbox for following text input"
                                                               @if(old('channels'))
                                                               @foreach(old('channels') as $old_channel)
                                                               @if($old_channel == $channel->id)
                                                               checked
                                                                @endif
                                                                @endforeach
                                                                @endif
                                                        >
                                                        @if(app()->isLocale('en'))

                                                <label for="message-text" class="col-form-label">{{$channel->name_en}}</label>
                                           
                                           @else 

                                           <label for="message-text" class="col-form-label">{{$channel->name_ar}}</label>

                                           @endif
                                           
                                            </div>
                                        @endforeach

                <div class="dotted-border"></div>

                <div class="row code">

                <div class="form-group{{ $errors->has('captcha') ? ' has-error' : '' }}">

<label for="password" style="font-size: 18px;margin: 10px 14px;" class="control-label">{{trans('site.Enter the code')}}</label>


<div class="col-md-6">

    <div class="captcha">

    <span>{!! captcha_img() !!}</span>

    </div>

    <input id="captcha" style="width:100%;left:0;" type="text" class="form-control" placeholder="{{trans('site.Enter Captcha')}}" name="captcha">


    @if ($errors->has('captcha'))

        <span class="help-block">

            <strong>{{ $errors->first('captcha') }}</strong>

        </span>

    @endif

</div>

</div>
                </div>
                <button class="coursep-btn btn sim-button button5">{{trans('site.ENROLL NOW')}}</button>
            </form>
        </div>

    </div>

    <div class="col-md-7 course-content">

    @foreach($courses_page as $course_page)


    @if(app()->isLocale('en'))

        <h2>{{$course_page->c_name}}</h2>
        <p>{{$course_page->detail}}.</p>
        <h2>{{trans('site.advantage')}}</h2>
        <p>{{$course_page->advantage}}</p>

        @else 

        <h2>{{$course_page->cname_ar}}</h2>
        <p>{{$course_page->detail_ar}}.</p>
        <h2>{{trans('site.advantage')}}</h2>
        <p>{{$course_page->advantage_ar}}</p>
        @endif

<h2>{{trans('site.venue')}}</h2>
        <div class="map-section">

        <p>{{$course_page->venue}}</p>
<iframe src="{{$course_page->map_link}}" width="100%" height="532px" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>

    @endforeach
    </div>

</div>

</div>
@stop


@section('js')

<script>

</script>


@stop