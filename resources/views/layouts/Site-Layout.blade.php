<!DOCTYPE html>
<html lang="en">
<head>

    <title>@yield('title')</title>

    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{asset('site/img/fav.png')}}">
    <!-- Author Meta -->
    <meta name="author" content="colorlib">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

    <!--
    CSS
    ============================================= -->
    <link rel="stylesheet" href="{{asset('site/css/font-awesome.min.css')}}">

    @if(app()->isLocale('ar'))

    <link rel="stylesheet" href="{{asset('site/css/bootstrap-rtl.css')}}">
@else 
    <link rel="stylesheet" href="{{asset('site/css/bootstrap.css')}}">
        
        @endif
        <link rel="stylesheet" href="{{asset('site/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('site/css/main.css')}}">

    <link rel="stylesheet" href="{{asset('site/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('site/css/owl.theme.default.min.css')}}">

    <link href="https://fonts.googleapis.com/css?family=Cairo&display=swap" rel="stylesheet">

    {{--    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">--}}

<style>

body {
    overflow-x: hidden;
}
    nav li a {
        color:#000;
    }

    nav li {
        background-color: #fff;
        padding: 10px;
        border-radius: 4px;
        margin: 0 !important;
        text-align: center;
    }

    .customers h2, .customers2 h2, .events h2 {
        font-weight: 500;
    }

    footer {
        background-color: #2f2f32 !important;
        color:#fff;
        padding: 5% 0 2% 0;
    }

    a:hover {
        color:#000;
    }

    .navbar {
        position: relative;
        border-top: 2px solid #f3f3f3;
    }

    .socials {
        padding: 8px 0;
        margin: 0 auto;
        display:inline-block;
    }

    .footer-socials {
        padding: 8px 0;
        margin: 38px auto;
        display:inline-block;
    }

    .socials li i {
        color:#fff;
        font-size:20px;
        margin:5px 0;
    }

    .footer-socials li {
        border-radius:5px;
    }

    .footer-socials li i {
        color: #2f2f32;
font-size: 20px;
margin: 5px 0;
    }

    .socials li {
           display: inline-block;
    padding: 3px 11px;
    background-color: #FF78E1;
    margin: 0 4px !important;
    border-radius: 10px;
    }

    .footer-socials li {
     display: inline-block;
padding: 3px 9px;
background-color: #FF78E1;
margin: 0 4px !important;
border-radius: 8px;
    }

    .section {
          position:relative;
     }
     
     .coursep-btn {
         width:145px !important;
     }

.section h2 {
    text-align: center;
position: relative;
top: 28%;
color: #fff;
font-size: 50px;
font-weight: 600;  
     }

.section p {
     text-align: center;
     color: #ededed;
     position: relative;
top: 34%;
font-weight: 500;
font-size: 25px !important;
}

    .navy span {
margin: 0 9px !important;
        color: #a7a7a7;
        padding: 8px 0 !important;
        font-size: 20px;
    }

    .navy {
margin-top: 6px;
    }

    footer ul li {
        padding:0;
    }

    footer ul li p {
        display: inline;
        margin-left: 3px;
    }

    @media only screen and (max-width: 1280px) {

        .navbar-nav li a {
            font-size:15px !important;
        }

        .navy span {
            font-size:16px;
        }

        .socials li i {
            font-size: 15px;
    margin: 7px 0;
        }
       

    }
    

    @media only screen and (max-width: 1199px) {

    .course-header p {
    margin-bottom:0 !important;
    display: inline;
float: none;
}

.card-pay img {
    margin: 65px 0 100px 23px;
}   

.owl-two .owl-item p {
    font-size:18px;
}
    }

        


     @media only screen and (max-width: 1024px) {

        .navbar-nav li a {
            font-size:15px !important;
        }

        .navy span {
            font-size:16px;
        }

        .socials li i {
            font-size: 15px;
    margin: 7px 0;
        }

        //  .news-section img {
        //     height:70%;
        // }
       
    }



    @media only screen and (max-width: 991px) {
        .top-header .header-detail {
    padding: 10px 32px !important;
}

.course-header .row .col-md-8 .row .col-md-4 .row .col-md-4,
 .course-header .row .col-md-8 .row .col-md-4 .row .col-md-8   {
    max-width:100%;
}

.card-pay img {
    margin: 65px 0 100px 23px;
    width: 150px;
}

form button {
    width: 14% !important;
}

.contact-btn {
    width:145px !important;
}
.contact img {
    left:5%;
    top:58%;
}

.newsletter {
width: 44%;
} 

.payment {
    padding: 23px 25px 10% 0 !important;
}

.top-header .logo {
        width: 241px !important;
    margin-top: 10px !important;
}

    }


@media only screen and (max-width: 822px) {

.sidebar form button {
    padding: 9px 26px !important;
}

}

    @media only screen and (max-width: 768px) {

.top-header h2 {
    text-align: center;
padding: 15px;
}

.top-detail {
    text-align: center;
padding: 10px;
}

.top-detail .row {
    float:none !important;
}

nav ul {
    float:none !important;
}
.search-section form button {
    bottom:1px ;
            }
footer .row .col-md-4 {
    text-align:center;
}

footer .row .col-md-4 ul{
    float:none !important;
}

.footer-img {
    margin: 0 auto;
}
.course-header .row .col-md-8 .row .col-md-4, .course-header .row .col-md-8 .row .col-md-3 {
            text-align:center;
            padding:15px 0 !important;
            border-right:0 !important;
        } 

        .course-header p {
            display:block !important;
            float:none !important;
        }

        .payment {
            text-align:center;
        }

        .card-pay img {
        margin: 30px 0 50px 23px !important;
        }

        .vertical-border {
            display:none;   
        }

        .bank-pay input {
            width: 87%;
        }

        .last-input {
            margin-bottom: 68px !important;
        }

        .contact-wrapper {
            text-align: center;
        }

        .contact img {
            display:none;
        }

        .navy {
            text-align:center;
        }

        .footer-links {
            margin-top:0 !important;
            margin-bottom:20px;
        }

        .contact-footer {
            margin-bottom:20px;
        }

    .newsletter {
     width: 52%;
        }


        .events .det {
flex: 0 0 90% !important;
max-width: 90% !important;
margin-bottom:20px;
    }

        .home-about .about {
            margin-bottom: 45px !important;
        }

        .select-css {
    width: 87%;
        }

                .payment {
    padding: 23px 58px 16% 0 !important;
}

.pay-btn {
    bottom:-69px;
}

.top-header .logo {
    margin:0 auto;
    display:block;
}

.second-footer p {
        left: 128px !important;
} 

}

    @media only screen and (max-width: 567px) {

.top-header h2 {
    text-align: center;
padding: 15px;
}

.top-detail {
    text-align: center;
padding: 10px;
}

.top-detail .row {
    float:none !important;
}

nav ul {
    float:none !important;
}
.search-section form button {
    bottom:-7px !important;
            right:3px !important;
}
footer .row .col-md-4 {
    text-align:center;
}

footer .row .col-md-4 ul{
    float:none !important;
}


.footer-img {
    margin: 0 auto;
}

.course-header .row .col-md-8 .row .col-md-4, .course-header .row .col-md-8 .row .col-md-3 {
            text-align:center;
            padding:15px 0 !important;
        } 

        .course-header p {
            display:block;
            float:none !important;
        }

}

@media only screen and (max-width: 500px) {

        .top-header h2 {
            text-align: center;
    padding: 15px;
        }

        .top-detail {
            text-align: center;
    padding: 10px;
        }

        .top-detail .row {
            float:none !important;
        }

        nav ul {
            float:none !important;
        }
        .search-section form button {
            bottom:-7px !important;
            right:3px !important;
        }
        footer .row .col-md-4 {
            text-align:center;
        }

        footer .row .col-md-4 ul{
            float:none !important;
        }

        .footer-img {
            margin: 0 auto;
        }

        .course-header .row .col-md-8 .row .col-md-4, .course-header .row .col-md-8 .row .col-md-3 {
            text-align:center;
            padding:15px 0 !important;
        } 

        .course-header p {
            display:block;
            float:none !important;
        }

        .owl-two .owl-item p {
    font-size: 16px !important;
}

         .newsletter {
            width:60%;
        }


         .payment {
    padding: 23px 90px 30% 0 !important;
}

.pay-btn {
    bottom:-90px !important;
}
    }


    @media only screen and (max-width: 420px) {

        .section h2 {
            font-size:35px;
        }

        .section p {
            font-size:10px;
        }

    }

    @media only screen and (max-width: 400px) {

.newsletter {
    width:90% !important; 
}
}


@media only screen and (max-width: 320px) {

         .payment {
    padding: 23px 90px 40% 0 !important;
}

.news-section img {
    height:550px;
}
}

    

    /* Start scroll bar */

    body::-webkit-scrollbar {
        width: 0.5em;
    }

    body::-webkit-scrollbar-track {
        -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
    }

    body::-webkit-scrollbar-thumb {
        background-color: #4D95FD;
        outline: 1px solid slategrey;
    }

    /* End scroll bar */

    .top-header {
        padding:3%;
    }

    .top-header .header-detail span {
        display:block;
    }

    .span1 {
        color:#000; 
        font-weight:400;
    }

    .top-header .header-detail {
        padding: 10px 12px;
    }

    .top-header i {
        font-size: 43px;
border: 2px solid #4D95FD;
color: #4D95FD;
border-radius: 50%;
padding: 7px 10px;
font-weight: bold;
    }
    
    .section {
        height:300px;
        width:100%;
    }
    
    .second-footer {
     background-color: #fff;
margin: 0 auto;
width: 100% !important;
position: relative;
    }

    .second-footer p {
        text-align:center;
        margin: 10px 0 0;
        position: absolute;
top: 0;
left: 0;
right: 0;
bottom: 0;
    }

    .second-footer p i {
        color:red;
    }

    footer h2 {
        color:#fff;
        font-weight: normal;
    }

    .footer-links {
        margin-top:16%;
    }

    .footer-links li {
        padding:5px 0 !important;
    }

    .footer-links li a {
        color:#fff;
    }

    .footer-img {
        float:right;
    }

    .footer-img img {
        width: 100px;
        margin: 5px auto 5px;
        position: absolute;
        left:14px;
        padding-bottom: 5px;
    }

    .navbar-nav li:hover {
        background-color:#FF78E1;
        border-radius:0;
    }

    .navbar-nav li.active > a {
    color:#FF78E1;
}

.navbar-nav li.active > a:hover  {
    color:#fff;
}

.last {
    padding: 0 3px;
}

.sidebar input::placeholder, .news-section input::placeholder, form input::placeholder, form textarea::placeholder {
    color:#d7d7d7 !important ;
}

.coursep-btn {
color: #fff;
margin: 21px 0;
display: block !important;
padding: 9px 15px !important;
font-weight: 600 !important;
background-color: #FF78E1;
width:145px;
}

.last-tab:hover {
    color:#000 !important;
}

@-webkit-keyframes jello {
  from, 11.1%, to {
    -webkit-transform: none;
    transform: none;
  }

  22.2% {
    -webkit-transform: skewX(-12.5deg) skewY(-12.5deg);
    transform: skewX(-12.5deg) skewY(-12.5deg);
  }

  33.3% {
    -webkit-transform: skewX(6.25deg) skewY(6.25deg);
    transform: skewX(6.25deg) skewY(6.25deg);
  }

  44.4% {
    -webkit-transform: skewX(-3.125deg) skewY(-3.125deg);
    transform: skewX(-3.125deg) skewY(-3.125deg);
  }

  55.5% {
    -webkit-transform: skewX(1.5625deg) skewY(1.5625deg);
    transform: skewX(1.5625deg) skewY(1.5625deg);
  }

  66.6% {
    -webkit-transform: skewX(-0.78125deg) skewY(-0.78125deg);
    transform: skewX(-0.78125deg) skewY(-0.78125deg);
  }

  77.7% {
    -webkit-transform: skewX(0.390625deg) skewY(0.390625deg);
    transform: skewX(0.390625deg) skewY(0.390625deg);
  }

  88.8% {
    -webkit-transform: skewX(-0.1953125deg) skewY(-0.1953125deg);
    transform: skewX(-0.1953125deg) skewY(-0.1953125deg);
  }
}

@keyframes jello {
  from, 11.1%, to {
    -webkit-transform: none;
    transform: none;
  }

  22.2% {
    -webkit-transform: skewX(-12.5deg) skewY(-12.5deg);
    transform: skewX(-12.5deg) skewY(-12.5deg);
  }

  33.3% {
    -webkit-transform: skewX(6.25deg) skewY(6.25deg);
    transform: skewX(6.25deg) skewY(6.25deg);
  }

  44.4% {
    -webkit-transform: skewX(-3.125deg) skewY(-3.125deg);
    transform: skewX(-3.125deg) skewY(-3.125deg);
  }

  55.5% {
    -webkit-transform: skewX(1.5625deg) skewY(1.5625deg);
    transform: skewX(1.5625deg) skewY(1.5625deg);
  }

  66.6% {
    -webkit-transform: skewX(-0.78125deg) skewY(-0.78125deg);
    transform: skewX(-0.78125deg) skewY(-0.78125deg);
  }

  77.7% {
    -webkit-transform: skewX(0.390625deg) skewY(0.390625deg);
    transform: skewX(0.390625deg) skewY(0.390625deg);
  }

  88.8% {
    -webkit-transform: skewX(-0.1953125deg) skewY(-0.1953125deg);
    transform: skewX(-0.1953125deg) skewY(-0.1953125deg);
  }
}
.button5{
	color: rgba(255,255,255,1);
	-webkit-transition: all 0.5s;
	-moz-transition: all 0.5s;
	-o-transition: all 0.5s;
	transition: all 0.5s;
	position: relative;
}
.button5 a{
	color: rgba(51,51,51,1);
	text-decoration: none;
	display: block;
}
.button5:hover{
	-webkit-animation-name: jello;
	animation-name: jello;
	-webkit-animation-duration: 1s;
	animation-duration: 1s;
	-webkit-animation-fill-mode: both;
	animation-fill-mode: both;
	background-color: rgba(15,93,206, 0.4);
	
}

.top-header .logo {
    width:280px;
}

.top-detail {
    margin-top:10px;
}


</style>

</head>

<body>
<header>

<div class="top-header">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-xs-12">
                <img class="logo" src="{{asset('images/img/'.images()->logo)}}">
            </div>

            <div class="col-md-4 col-xs-12 top-detail">
                <div class="row" style="margin:0 auto;">
                    <div class="col-md-2">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                                        </div>

                    <div class="col-md-10">
                        <div class="header-detail">
                            <span class="span1">{{header_detail()->phone}}</span>
                            <span>{{header_detail()->email}}</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-xs-12 top-detail">
            <div class="row" style="float:right;">
                    <div class="col-md-2">
                    <i class="fa fa-whatsapp"></i>
                    </div>

                    <div class="col-md-10">
                        <div class="header-detail" style="padding: 10px 24px;">
                            <span class="span1">{{header_detail()->mobile}}</span>
                            <span>{{header_detail()->duration}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <nav class="navbar navbar-expand-lg" role="navigation">


        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            &#9776;
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="container">
            <div class="row">

                <div class="col-md-8">

                <ul class="navbar-nav" style="float:left;">

                    <li class="nav-item active">
                        <a class="nav-link" style="font-size: 18px;" href="{{route('site-index')}}">{{trans('site.home')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="font-size: 18px;" href="{{route('about')}}">{{trans('site.about')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="font-size: 18px;" href="#">{{trans('site.services')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="font-size: 18px;" href="#">{{trans('site.blog')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="font-size: 18px;" href="#">{{trans('site.urls')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="font-size: 18px;" href="{{route('contact')}}">{{trans('site.contact us')}}</a>
                    </li>
                    <li class="nav-item">

                    @if(app()->isLocale('en'))
                        <a class="nav-link last-tab" style="font-size: 18px;color:#FF78E1;" href="{{route('site.change.lang',['lang'=>'ar'])}}">عربي</a>
                    @else 
                    <a class="nav-link last-tab" style="font-size: 18px;color:#FF78E1;" href="{{route('site.change.lang',['lang'=>'en'])}}">English</a>

                    @endif
                  </li>

            </ul>

                </div>
                <div class="col-md-4">
            <ul class="navy">

                <span>{{trans('site.follow us')}}</span>

                <ul class="socials">

                    <li><a href="{{socials()->instagram}}"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="{{socials()->youtube}}"><i class="fa fa-youtube-play"></i></a></li>
                    <li><a href="{{socials()->twitter}}"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="{{socials()->facebook}}"><i class="last fa fa-facebook"></i></a></li>

                </ul>

            </ul>
                </div>            </div>
            </div>
        </div>
    </nav>
</header>
    
@include('errors.errors')



@yield('content')


<!-- start footer Area -->
<footer class="footer-area section-gap">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <ul class="footer-links">
                    <li><a href="{{route('site-index')}}">{{trans('site.home')}}</a></li>
                    <li><a href="#">{{trans('site.services')}}</a></li>
                    <li><a href="#">{{trans('site.blog')}}</a></li>
                    <li><a href="#">{{trans('site.urls')}}</a></li>
                    <li><a href="{{route('contact')}}">{{trans('site.contact us')}}</a></li>

                    <li><a href="#">{{trans('site.terms and conditions')}}</a></li>
                </ul>
            </div>

            <div class="col-md-4 contact-footer">

                <h2>{{trans('site.contact us')}}</h2>
                <ul style="margin-top: 6%;">
                <li>
                <span>{{trans('site.address')}}:</span>
                <p>{{contact()->address}}</p>
                </li>
                <li>
                <span>{{trans('site.phone')}}:</span>
                <p>{{contact()->phone}}</p>
                </li>
                <li>
                <span>{{trans('site.mobile')}}:</span>
                <p>{{contact()->mobile}}</p>
                </li>
                <li>
                <span>{{trans('site.email')}}:</span>
                <p>{{contact()->email}}</p>
                </li>
                </ul>
            </div>

            <div class="col-md-4">
            <ul class="navy" style="float:right;">

<h2>{{trans('site.follow us')}}</h2>

<ul class="footer-socials">

<li><a href="{{socials()->instagram}}"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="{{socials()->youtube}}"><i class="fa fa-youtube-play"></i></a></li>
                    <li><a href="{{socials()->twitter}}"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="{{socials()->facebook}}"><i class="last fa fa-facebook"></i></a></li>

</ul>

</ul>
            </div>
        </div>
    </div>
</footer>

<div class="row">

<div class="second-footer">
    <p style="direction:ltr;">@Medcoures 2019 build with <i class="fa fa-heart"></i> by <a href="https://bedayaweb.com">Bedaya for web solutions</a></p>
</div>

@if(app()->isLocale('en'))

<div class="footer-img">

@else 

<div class="footer-img">

@endif
    <img src="{{asset('site/img/visa.png')}}">
</div>

</div>
<!-- End footer Area -->

<script src="{{asset('site/js/vendor/jquery-2.2.4.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="{{asset('site/js/vendor/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
<script src="{{asset('site/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('site/js/wow.min.js')}}"></script>

<script>
    setTimeout(fade_out, 5000);

    function fade_out() {
        $("#checker").fadeOut().empty();
    }

    $(document).ready(function () {
        var url = window.location;
        $('.navbar .navbar-nav').find('.active').removeClass('active');
        $('.navbar .navbar-nav li a').each(function () {
            if (this.href == url) {
                $(this).parent().addClass('active');
            }
        }); 
    });

</script>

@yield('js')


</body>
</html>