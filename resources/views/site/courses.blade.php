@extends('layouts.Site-Layout')

@section('title')

     courses

@stop

<style>
     
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

.course-section > p {
     margin-bottom: 0;
overflow: hidden;
display: none;
padding: 13px;
border: 1px solid #dad3d3;
}

.course-section button {
     display: block;
float: right;
background-color: #f652e2;
color: #fff;
margin: 40px 0 0 0;
}

.course-section button a {
     color:#fff;
}

.course-section h3 {
    display: inline-block;
padding: 10px 103px 10px 5px;
color: #fff;
margin: 52px 0 20px;
background: linear-gradient(-90deg, rgba(217,221,224,0.1), rgb(0, 123, 255));
width: 19%;
font-size: 16px;
}

.course-section h3:after {
     background: rgba(0, 0, 0, 0.3);
}

.course-section h2 {
     background-color: #dad1d1;
color: #000;
margin: 3px 0;
padding: 10px;
font-size: 17px;
font-weight: normal;
}

.course-section h2 p {
     display: inline;
margin-left: 85px;
background-color: transparent !important;
}

.add-margin {
     margin:127px 0;
}

</style>

@section('content')

<div class="section" style="background-image: url({{asset('site/img/header-section.jpg')}})">

<!-- <div class="overlay"></div> -->

     <h2>{{trans('site.courses categories')}}</h2>
     <p>{{$category}} /{{trans('site.all courses')}}</p>

</div>

<div class="container">

<div class="search-section">
<form action="{{route('search', ['category'=>$category])}}" method="get" class="form-inline my-2 my-lg-0">
@if(app()->isLocale('ar'))

      <input class="text-left form-control mr-sm-2" type="search" placeholder="{{trans('site.search')}}" aria-label="Search" name="item_ar">
      @else 
      <input class="form-control mr-sm-2" type="search" placeholder="{{trans('site.search')}}" aria-label="Search" name="item">

      @endif
      <button class="btn btn-outline-success my-2 my-sm-0 sim-button button5" type="submit">{{trans('site.go')}}</button>
    </form>
</div>


<!--  -->

<!-- $field->specValues->groupBy('value') -->

<!-- <h2 class="text-center">Search Result</h2> -->

@if($item)

@foreach($searched_courses as $searched_course)

<div class="course-section">
     
     @if(app()->isLocale('ar'))

     <h2 id="hone-search{{$searched_course->id}}">{{$searched_course->cname_ar}}   <p>{{trans('site.start on')}} {{$searched_course->start}}</p> 


<i class=" float-left fa fa-plus"></i>
     </h2>

<p id="p-search{{$searched_course->id}}">"{{$searched_course->detail_ar}}"

@else 

<h2 id="hone-search{{$searched_course->id}}">{{$searched_course->c_name}}   <p>{{trans('site.start on')}} {{$searched_course->start}}</p> 

<i class="float-right fa fa-plus"></i>
</h2>

<p id="p-search{{$searched_course->id}}">"{{$searched_course->detail_en}}"

@endif
     
       <button class="btn sim-button button5"><a href="{{route('course-page', ['id'=>$searched_course->id, 'category'=>$category])}}">{{trans('site.register')}}</a></button>

     </p>

</div>
@endforeach
@endif
<div class="add-margin"></div>


<!-- $field->specValues->groupBy('value') -->

@if(count($courses) == 0)

     @if(app()->isLocale('ar'))

<span class="alert alert-danger">لا يوجد كورسات في هذا التصنيف </span>

@else 

<span class="alert alert-danger">there is no courses in this category </span>


@endif

@else 

@foreach($courses as $month => $mycourses)

<div class="course-section">
@foreach($mycourses as $key=>$course)
@if($key == 0)
<h3>{{date('M Y', strtotime($course->start))}}</h3>
@endif
@endforeach
</div>

@foreach($mycourses as $course)

<div class="course-section">

     
     @if(app()->isLocale('ar'))

     <h2 id="hone{{$course->id}}">{{$course->cname_ar}}   <p>{{trans('site.start on')}} {{$course->start}}</p> 


     <i class="float-left fa fa-plus"></i>

     </h2>

     <p id="p{{$course->id}}">"{{$course->detail_ar}}"

     @else 

     <h2 id="hone{{$course->id}}">{{$course->c_name}}   <p>{{trans('site.start on')}} {{$course->start}}</p> 

    

     <i class="float-right fa fa-plus"></i>

     </h2>
     <p id="p{{$course->id}}">"{{$course->detail}}"

     @endif
       <button class="btn sim-button button5"><a href="{{route('course-page', ['id'=>$course->id, 'category'=>$category])}}">{{trans('site.register')}}</a></button>

     </p>

</div>
@endforeach

@endforeach


@endif


<div class="add-margin"></div>

</div>


@stop


@section('js')

@foreach($courses as $course)

@foreach($course as $data)

<script>


$('#hone{{$data->id}}').click(function(){
    
    $('#p{{$data->id}}').slideToggle()

})
</script>

@endforeach
@endforeach

@foreach($searched_courses as $searched_course)

<script>


$('#hone-search{{$searched_course->id}}').click(function(){
    
    $('#p-search{{$searched_course->id}}').slideToggle()

})
</script>

@endforeach


<script>


// $('.htwo').click(function(){
    
//     $('.p2').slideToggle()
//     $('.p3').slideUp()
//     $('.p4').slideUp()
//     $('.p1').slideUp()
// })

// $('.hthree').click(function(){
    
//     $('.p3').slideToggle()
//     $('.p1').slideUp()
//     $('.p4').slideUp()
//     $('.p2').slideUp()
// })

// $('.hfour').click(function(){
    
//     $('.p4').slideToggle()
//     $('.p3').slideUp()
//     $('.p1').slideUp()
//     $('.p2').slideUp()
// })


$('.course-section h2').click(function() {
    $("i", this).toggleClass("fa fa-plus fa fa-minus");
});

</script>


@stop