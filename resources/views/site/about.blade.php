@extends('layouts.Site-Layout')

@section('title')

     courses

@stop

<style>

.section h2 {
    top:40% !important;
}
     
.para h3 {
    padding: 13px 0;
    color:#4D95FD;
    }

    .para {
        overflow:hidden;
        border-bottom:2px solid #cfcfcf;
    }

    .second h3 {
        margin-top:10px;
    }

.customers h2, .customers2 h2 {
        text-align: center;
        margin: 10px auto 82px;
        padding: 8px;
    }

    .customers, .customers2 {
        padding: 20px 0;
    }

.owl-two .owl-nav button.owl-next {
    float: right;
position: relative;
font-size: 30px !important;
border: 1px solid red !important;
border-radius: 50%;
padding: 0px 8px !important;
bottom: 300px;
left: 34px;
}

.owl-two .owl-nav button.owl-prev {
    float: left;
position: relative;
font-size: 30px !important;
border: 1px solid red !important;
border-radius: 50%;
padding: 0px 8px !important;
bottom: 300px;
right: 34px;
}

.owl-carousel {
    padding:0 20px;
}

.owl-two {
    padding:0 20px;
}

 .owl-two .owl-item {
    margin-bottom:50px;
}

.owl-two .owl-item p {
    color: #4D95FD;
font-weight: bold;
text-align: center;
padding: 10px 0;
}

.owl-two .owl-item i {
    border: 1px solid #4D95FD;
border-radius: 50%;
padding: 3px 7px;
color: #fff;
font-size: 50px;
position: absolute;
left: 39%;
top: 63%;
background-color: #4D95FD;
}

.owl-two .owl-item span {
    float: right;
margin: 2px 6px;
color: #4D95FD;
font-weight: normal;
font-size: 17px;
}

.owl-two .owl-item img {
    height:60%;
    }

.owl-two .owl-item p, .owl-two .owl-item span {
    background-color: #4D95FD;
color: #fff !important;
width: 100%;
text-align: center;
margin: 0 !important;
}

.owl-two .owl-item p {
    font-size:20px;
}

.owl-two .owl-item span {
    font-size: 14px !important;
padding: 10px 0;
}


 .para img {
    width: 100%;
    margin-top: 25px;
}

.first {
    margin-top: 62px;
}

.para {
    margin-bottom:20px;
    padding-bottom:20px;
}

.third {
    border:0;
}

.owl-two .owl-item img {
    height:300px;
}
</style>

@section('content')

<div class="section section-index" style="background-image: url({{asset('site/img/header-section.jpg')}})">

<!-- <div class="overlay"></div> -->

     <h2>{{trans('site.about')}}</h2>

</div>

<div class="container">

        <div class="first para">
        <div class="row">
<div class="col-md-8 col-sm-8 col-8">
@if(app()->isLocale('en'))

            <h3>{{$about->title1}}</h3>
            <p>{{$about->detail1}}</p>

            @else 

            <h3>{{$about->title1_ar}}</h3>
            <p>{{$about->detail1_ar}}</p>
            @endif
                  </div>
                  <div class="col-md-4 col-sm-4 col-4">
                  <img src="{{asset('images/img/'.$about->img1)}}">
                  </div>
                  </div>
        </div>

        <div class="second para">
        <div class="row">
                  <div class="col-md-4 col-sm-4 col-4">
<img src="{{asset('images/img/'.$about->img2)}}">
</div>

<div class="col-md-8 col-sm-8 col-8">
@if(app()->isLocale('en'))

            <h3>{{$about->title2}}</h3>
            <p>{{$about->detail2}}</p>

            @else 

            <h3>{{$about->title2_ar}}</h3>
            <p>{{$about->detail2_ar}}</p>
            @endif
                  </div>
        </div>
        </div>

        <div class="third para">
        <div class="row">
<div class="col-md-8 col-sm-8 col-8">
@if(app()->isLocale('en'))

            <h3>{{$about->title3}}</h3>
            <p>{{$about->detail3}}</p>

            @else 

            <h3>{{$about->title3_ar}}</h3>
            <p>{{$about->detail3_ar}}</p>

            @endif
                  </div>
                  <div class="col-md-4 col-sm-4 col-4">
                  <img src="{{asset('images/img/'.$about->img3)}}">
                  </div>
                  </div>
        </div>

    
    <div class="customers2">
        <div class="container">

            <h2>{{trans('site.meet doctors')}}</h2>

            <!-- Set up your HTML -->
            <div class="owl-two owl-carousel">
            @foreach($second_sliders as $second_slider)
                <div> <img src="{{asset('images/img/'.$second_slider->slider_img)}}">
                @if(app()->isLocale('en'))

                <p>{{$second_slider->main_name}}</p>
                <div class="border-bottom"></div>
                <span>{{$second_slider->second_name}}</span>

                @else 

                <p>{{$second_slider->mainname_ar}}</p>
                <div class="border-bottom"></div>
                <span>{{$second_slider->secondname_ar}}</span>
                @endif
                </div>
                @endforeach
            </div>

        </div>
    </div>

    
        </div>


@stop


@section('js')

<script>

$(document).ready(function(){
            $(".owl-one").owlCarousel();
        });


        $('.owl-one').owlCarousel({
            loop:true,
            margin:14,
            responsiveClass:true,
            responsive:{
                0:{
                    items:1,
                    nav:true
                },

                400:{
                    items:2,
                    nav:true
                },

                600:{
                    items:2,
                    nav:true
                },
                1000:{
                    items:4,
                    nav:true,
                    loop:false
                }
            }
        })

        $(document).ready(function(){
            $(".owl-two").owlCarousel();
        });


        $('.owl-two').owlCarousel({
            loop:true,
            margin:14,
            responsiveClass:true,
            responsive:{
                0:{
                    items:1,
                    nav:true
                },

                400:{
                    items:2,
                    nav:true
                },

                600:{
                    items:2,
                    nav:true
                },
                1000:{
                    items:3,
                    nav:true,
                    loop:false
                }
            }
        })

</script>


@stop