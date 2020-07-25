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
    width: 60px;
border-radius: 50%;
}

.course-detail {
    font-size: 12px;
font-weight: normal;
}

.course-detail h5 {
    margin: 7px 0;
}

.course-header p {
    margin-bottom:0 !important;
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

.section h2 {
    top:38% !important;
}

.sidebar {
    background-color:#4D95FD;
    padding:20px;
}

.sidebar input {
    margin:10px 0;
}

form button {
    background-color: #f652e2;
color: #fff;
margin: 16px auto;
width: 43%;
display: block !important;
padding: 10px 20px;
}

.contact li {
        padding:5px;
    }

    .contact li p {
        display: inline;
        margin-left: 3px;
    }

    .contact img {
        width: 200px;
position: relative;
top: 47%;
left: 20%;
    }

    .contact-btn {
        background-color:#FF78E1 !important ;
    }

    .sidebar, .map-section {
        height:450px !important;
    }

</style>

@section('content')

<div class="section" style="background-image: url({{asset('site/img/header-section.jpg')}})">

<!-- <div class="overlay"></div> -->

     <h2>{{trans('site.contact us')}}</h2>

</div>

<div class="container">

<!-- end of container -->

<div class="row mt-4 contact-wrapper">
    <div class="col-md-4">

    <h2>{{trans('site.contact us')}}</h2>
                <ul class="contact" style="margin-top: 2%;">
                <li>
                <span>{{trans('site.phone')}}:</span>
                <p>323232323</p>
                </li>
                <li>
                <span>{{trans('site.mobile')}}:</span>
                <p>+9664545453545353</p>
                </li>
                <li>
                <span>{{trans('site.email')}}:</span>
                <p>info@medcourses.com</p>
                </li>
                </ul>

                <h2 class="mt-2">{{trans('site.visit us')}}</h2>
                <ul class="contact" style="margin-top: 2%;">
                <li>
                <span>{{trans('site.address')}}:</span>
                <p>Riyadh - Saudi Arabia</p>
                </li>
                </ul>

                <p class="mt-5">{{trans('site.Or simply message us by filling the contact form.')}}</p>

    </div>

    <div class="col-md-4 contact">

    @if(app()->isLocale('en'))


        <img src="{{asset('site/img/arrow.png')}}">

        @else 

        <img style="top:60%;" src="{{asset('site/img/arabic-arrow.png')}}">


        @endif

    </div>

    <div class="col-md-4">
        <div class="sidebar">
        <form action="{{route('send-contact')}}" method="post">
@csrf
                <input class="form-control" type="text" name="name" placeholder="{{trans('site.name')}}" onfocus="this.placeholder=''" onblur="this.placeholder='{{trans('site.name')}}'">
                
                @if(app()->isLocale('en'))

                
                <input class="form-control" type="email" name="email" placeholder="{{trans('site.email')}}" onfocus="this.placeholder=''" onblur="this.placeholder='{{trans('site.email')}}'">
                
                @else 
                <input class="form-control text-right" type="email" name="email" placeholder="{{trans('site.email')}}" onfocus="this.placeholder=''" onblur="this.placeholder='{{trans('site.email')}}'">


                @endif
                
                <input class="form-control" type="text" name="mobile" placeholder="{{trans('site.mobile')}}" onfocus="this.placeholder=''" onblur="this.placeholder='{{trans('site.mobile')}}'">
                <textarea rows="4" type="text" name="message" class="form-control" placeholder="{{trans('site.message')}}" onfocus="this.placeholder=''" onblur="this.placeholder='{{trans('site.message')}}'"></textarea>

                <button class="btn contact-btn sim-button button5">{{trans('site.send')}}</button>
                </form>
        </div>
    </div>

</div>

</div>

<div class="map-section">
<iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBlrt_orIptWAxwaxHOOlsmPaMNvrgSQQ0
    &q=Space+Needle,Seattle+WA" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
@stop


@section('js')


@stop