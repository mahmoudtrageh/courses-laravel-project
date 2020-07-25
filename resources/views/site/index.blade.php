@extends('layouts.Site-Layout')

@section('title')

     courses

@stop

<style>
     
.section-index button {
background-color: #FF78E1;
color: #fff;
padding: 9px 16px;
border-radius: 5px;
margin:0 auto;
display: block;
position: relative;
top: 48%;
font-weight:400;
}

.section-index {
    height:600px !important;
}

.section-index h2,
.section-index p {
    top: 44% !important;
}

.home-about {
    background-color: #f5f5f5;
    padding: 40px 25px 20px 25px;
position: relative;
bottom: 50px;
z-index:1;
}

.home-about h3 {
    padding: 0 16px 20px;
}

.border-left {
    width: 4px;
background-color: #4D95FD;
height: 54px;
float: left;
position: relative;
bottom: 24px;
border:0 !important;
}

.border-right {
    width: 4px;
background-color: #4D95FD;
height: 54px;
float: right;
position: relative;
bottom: 24px;
border:0 !important;
}

.home-about span {
    float: right;
}

.home-para {
background-color: #4D95FD;
color: #fff;
padding: 6px 24px;
font-size: 16px;
font-weight: 600;
position: relative;
bottom: 50px;
}

.home-para i {
    font-size: 20px;
margin-left: 10px;
}

.customers h2, .customers2 h2 {
        text-align: center;
        margin: 0 auto 40px;
        padding: 8px;
    }

    .customers, .customers2 {
        padding: 20px 0;
    }

    .owl-one .owl-nav button.owl-next {
    float: right;
    position: relative;
    font-size: 45px !important;
    border: 2px solid #F865D7 !important;
    border-radius: 50%;
    padding: 1px 8px !important;
    bottom: 104px;
    left: 38px;
    color: #F865D7 !important;
}

.owl-two .owl-nav button.owl-next {
float: right;
    position: relative;
    border: 2px solid #F865D7 !important;
    border-radius: 50%;
    padding: 1px 8px !important;
    bottom: 290px;
    left: 38px;
    color: #FF78E1 !important;
}

.owl-one .owl-nav button.owl-prev {
    float: left;
    position: relative;
    font-size: 45px !important;
    border: 2px solid #F865D7 !important;
    border-radius: 50%;
    padding: 1px 8px !important;
    bottom: 104px;
    right: 38px;
    color: #F865D7 !important;
}

.owl-one .owl-nav button.owl-prev span, .owl-two .owl-nav button.owl-prev span, .owl-one .owl-nav button.owl-next span, .owl-two .owl-nav button.owl-next span {
    font-size: 40px !important;
    }

.owl-two .owl-nav button.owl-prev {
float: left;
    position: relative;
    border: 2px solid #F865D7 !important;
    border-radius: 50%;
    padding: 1px 8px !important;
    bottom: 290px;
    right: 38px;
    color: #F865D7 !important;
}

  .owl-nav .owl-prev:focus, .owl-nav .owl-next:focus {
        outline: 0 !important;
    }

.owl-carousel {
    padding:0 20px;
}

.customers2 .owl-carousel {
    padding:0 20px;
}

.owl-one .owl-item {
    height: 110px;
        border:2px solid #FF78E1;
    border-radius:5px;
    margin-bottom: 38px;
    background-color: #FF78E1;
} 

.customers2 .owl-two .owl-item {
    margin-bottom:50px;
}

.customers2 .owl-carousel .owl-item p {
    color: #4D95FD;
font-weight: bold;
text-align: center;
padding: 10px 0;
}

.owl-one .owl-item p {
font-weight: 600;
text-align: center;
margin: 17px 0;
font-size: 15px;
}

.owl-one .owl-item p a {
color: #fff !important;
font-weight: 750;
font-size: 17px;
}

.owl-one .owl-item p a:hover {
    background-color:#4D95FD;
    color:#fff;
    padding:10px;
}

.customers2 .owl-carousel .owl-item p {
    color: #4D95FD;
font-weight: bold;
text-align: center;
padding: 10px 0;
}

.owl-carousel .owl-item i {
    border-radius: 50%;
padding: 3px 8px;
color: #fff;
font-size: 48px;    
position: absolute;
    left: 0;
    margin: 0 auto;
    bottom: 0;
    right: 0;
top: 68%;
background-color: #4D95FD;
border: 3px solid #fff;
  -webkit-transition: -webkit-transform .8s ease-in-out;
          transition:         transform .8s ease-in-out;
          width: 70px;
height: 70px;
text-align: center;
}

.owl-carousel .owl-item span {
float: right;
margin: 26px 6px;
color: #fff;
font-size: 21px;
font-weight: 600;
}

.customers2 .owl-carousel .owl-item span {
    float: right;
margin: 2px 6px;
color: #4D95FD;
font-weight: normal;
font-size: 17px;
}

.ad-section {
    margin:10px 0 20px 0;
}

.ad-section img {
    width:100%;
    background-size:cover;
    height:auto;
    max-height:380px;
}

.news-section > img {
    width:100%;
    height:400px;
    object-fit: cover;
}

.customers2 .owl-carousel .owl-item img {
    height:300px;
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

.news-section {
    position: relative;
    z-index: 1;
}

.news-section .overlay {
    width: 100%;
background-color: rgba(31, 122, 239, 0.8);
position: absolute;
top: 0;
left: 0;
opacity: 0.7;
bottom: 0;
z-index: 0;
}

.newsletter {
     width: 30%;
    border-radius: 6px;
    background-color: #fff;
    height: 340px;
    padding: 20px;
    text-align: center;
    -webkit-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);
    -moz-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);
    box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);
        margin: auto;
    top: 0 !important;
    left: 0;
    right: 0;
    bottom: 0;
    position:absolute;
}

.newsletter i {
    font-size: 54px;
color: #989898;
}

.circle-ball {
  width: 5px;
height: 5px;
border-radius: 50%;
background-color: #989898;
display: inline-block;
margin-right: 2px;
}

.circle-balls {
    display: inline;
margin: 0 5px;
position: relative;
top: 12px;
}

.newsletter p {
   color: #4D95FD;
font-size: 20px;
font-weight: 600;
    margin-top: 33px;
margin-bottom: 0;
}

.newsletter span {
        display: block;
    margin: 20px 0;
}

.newsletter input {
      width: 76%;
    display: block;
    margin: 24px auto 24px auto;
    border: 1px solid #4D95FD;
    border-radius: 5px;
    padding: 9px;
}

.events .det {
    border: 1px solid #f3f3f3;
-webkit-box-shadow: 0px 0px 5px 0px rgba(215, 215, 215, 0.75);
-moz-box-shadow: 0px 0px 5px 0px rgba(215, 215, 215, 0.75);
box-shadow: 0px 0px 5px 0px rgba(215, 215, 215, 0.75);
margin:0 auto;
flex: 0 0 28% !important;
max-width: 29% !important;
}

.events {
    padding: 60px 0 50px 0
}

.events h2 {
    text-align:center;
    margin-bottom:80px;
    margin-top:5px;
}

.events span:first-child {
    background-color: #4D95FD !important;
color: #fff;
padding: 3px 5px;
margin: 21px 0 26px;
display: block;
width: 35%;
}

.events h3 {
    font-size: 21px;
margin-bottom: 20px;
}

.events p {
    margin-bottom: 15px;
border-bottom: 2px solid #e1dede;
padding-bottom: 10px;
}

.event-detail img {
    border-radius: 50%;
width: 35px;
height: 35px;
margin: 0 15px 5px 0;
}

.sidebar {
    background-color:#4D95FD;
    padding:20px;
}

.sidebar input {
    margin:10px 0;
}

.sidebar form button {
  background-color: #FF78E1;
color: #fff;
margin: 16px auto;
display: block !important;
padding: 9px 36px !important;
font-weight: 600 !important;
}

.contact li, .sidebar h2 {
    color:#fff;
}

.sidebar h2 {
    margin-bottom: 23px;
}

.sidebar ul, .sidebar form {
    margin: 0 auto;
width: 82%;
}

.contact li p {
        display: inline;
        margin-left: 3px;
    }

.event-detail {
        margin-bottom: 5px;
    }

.contact-map .col-md-8, .contact-map .col-md-4 {
    padding-right:0;
    padding-left:0;
}

.newsletter button {
    color: #fff;
display: block !important;
padding: 9px 40px !important;
font-weight: 600 !important;
background-color: #FF78E1;
margin: 0 auto;
border-radius: 7px;
}

.port-img {
    position: relative;
    overflow: hidden;
}

.port-img img {
    width: 100%;
    height: 100%;
}

.port-img:hover img {
    transform: scale(1.2, 1.2);
    transition: 1s all;
}

.owl-carousel .owl-item:hover i {

  -webkit-transform: rotate(360deg);
          transform: rotate(360deg);
          }

.newsletter {
    width:400px;
}

.map-section, .sidebar {
    height:550px !important;
}


@media only screen and (max-width: 822px) {
 .map-section, .sidebar {
    height:600px !important;
}
}


.carousel-control-prev, .carousel-control-next {
    width:54px !important;
    height:54px !important;
    top:44% !important;
border-radius: 50%;
background-color:#8e8e8e;
color:#000 !important;
}

.carousel-control-prev {
left: 2% !important;

}

.carousel-control-next {
    right: 2% !important;

}

.carousel-control-next i {
    font-size: 31px;
position: relative;
left: 1px;
top: 2px;
}

.carousel-control-prev i {
    font-size: 31px;
position: relative;
right: 1px;
top: 2px;
}


</style>

@section('content')

<div id="carouselExampleControls" class="carousel carousel1 slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">

@foreach($third_sliders as $i => $third_slider)
    <div class="carousel-item @if($i == 0 ) active @endif">
        <div class="section section-index" style="background-image: url({{asset('images/img/' . $third_slider->slider_img)}})">

            @if(app()->isLocale('en'))

            <h2>{{$third_slider->main_name}}</h2>
            <p>{{$third_slider->second_name}}</p>

            @else 

            <h2>{{$third_slider->mainname_ar}}</h2>
            <p>{{$third_slider->secondname_ar}}</p>

            @endif
            <button class="btn sim-button button5">{{trans('site.learn more')}}</button>
        </div>
    </div>   

    @endforeach
    
                @if(app()->isLocale('ar'))

                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev" style="left:2% !important;right:94% !important;">
    <i class="fa fa-chevron-left"></i>
    <span class="sr-only">Previous</span>
  </a>

  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <i class="fa fa-chevron-right"></i>
    <span class="sr-only">Next</span>
  </a>
 

                @else 

  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <i class="fa fa-chevron-left"></i>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <i class="fa fa-chevron-right"></i>
    <span class="sr-only">Next</span>
  </a>

  @endif

</div>
</div>


<div class="container">

    <div class="home-about">
        <div class="row">
            <div class="about col-md-4">
            @if(app()->isLocale('en'))
            <div class="border-left"></div>
            @else 
            <div class="border-right"></div>

            @endif
            @if(app()->isLocale('en'))

                <h3>{{$home_about->title1}}</h3>
                <p>{{$home_about->detail1}}</p>

                @else 
                <h3>{{$home_about->title1_ar}}</h3>
                <p>{{$home_about->detail1_ar}}</p>
                @endif
            </div>
            <div class="about col-md-4">
            @if(app()->isLocale('en'))
            <div class="border-left"></div>
            @else 
            <div class="border-right"></div>

            @endif

            @if(app()->isLocale('en'))

                        <h3>{{$home_about->title2}}</h3>
                <p>{{$home_about->detail2}}</p>

                @else 
                <h3>{{$home_about->title2_ar}}</h3>
                <p>{{$home_about->detail2_ar}}</p>


                @endif
                    <span><a href="#">{{trans('site.read more')}} ..</a></span>
            </div>
            <div class="about col-md-4">
            @if(app()->isLocale('en'))
            <div class="border-left"></div>
            @else 
            <div class="border-right"></div>

            @endif

            @if(app()->isLocale('en'))

                        <h3>{{$home_about->title3}}</h3>
                <p>{{$home_about->detail3}}</p>

                @else 
                <h3>{{$home_about->title3_ar}}</h3>
                <p>{{$home_about->detail3_ar}}</p>
                @endif
                  <span><a href="#">{{trans('site.read more')}} ..</a></span>
            </div>
            <div class="col-md-12">
            </div>
        </div>
    </div>                    
    
                <p href="" class="home-para typewrite" data-period="1000" data-type='[ 
                    @foreach($news as $new)
                    @if(app()->isLocale('en'))

                        "{{$new->new}}",

                        @else 

                        "{{$new->new_ar}}",

                        @endif
                    @endforeach

                    @if(app()->isLocale('en'))

                    "{{$new->new}}"

                    @else 

                    "{{$new->new_ar}}"

                    @endif
                 ]'>
                </p>


    <div class="customers">
        <div class="container">

            <h2>{{trans('site.courses categories')}}</h2>

            <!-- Set up your HTML -->
            <div class="owl-one owl-carousel" style="direction:ltr;">
                @foreach($first_sliders as $first_slider)
                @if(app()->isLocale('en'))

                <div> <p><a href="{{route('courses', ['category'=> $first_slider->title])}}">{{$first_slider->title}}</a></P>
               
               @else

               <div> <p><a href="{{route('courses', ['category'=> $first_slider->title_ar])}}">{{$first_slider->title_ar}}</a></P>

               @endif
               
                <i class="{{$first_slider->icon_link}}" aria-hidden="true"></i>
                <span>>></span>
                </div>
                @endforeach
            </div>

        </div>
    </div>

</div>

<div class="ad-section">
    <div id="carouselExampleControls" class="carousel slide carousel-fade" data-ride="carousel" data-interval="2500">
        <div class="carousel-inner">

@foreach($fourth_sliders as $i => $fourth_slider)

    <div class="carousel-item @if($i == 0 ) active @endif">
       <img src="{{asset('images/img/' . $fourth_slider->slider_img)}}">
    </div>

@endforeach
    
            
        </div>
    </div>
</div>

    <div class="container">
    <div class="customers2">
        <div class="container">

            <h2>{{trans('site.expert doctors')}}</h2>

            <!-- Set up your HTML -->
            <div class="owl-two owl-carousel" style="direction:ltr;">
            @foreach($second_sliders as $second_slider)
                 <div><div class="port-img"><img src="{{asset('images/img/'.$second_slider->slider_img)}}"></div>
                 
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

    <div class="news-section">
    <div class="overlay"></div>

        <img src="{{asset('images/img/'. $images->news_img)}}">

        <div class="newsletter">
        <div class="circle-balls">
        <div class="circle-ball"></div>
        <div class="circle-ball"></div>
        <div class="circle-ball"></div>
        <div class="circle-ball"></div>
        </div>
        <img style="width: 44px;height: 40px !important;position: relative;bottom: 5px;" src="{{asset('site/img/icon.png')}}">
        <div class="circle-balls">
        <div class="circle-ball"></div>
        <div class="circle-ball"></div>
        <div class="circle-ball"></div>
        <div class="circle-ball"></div>
        </div>

        @if(app()->isLocale('en'))

        <p>{{$paragraphs->paragraph1}}</p>
        <span>{{$paragraphs->paragraph2}}</span>

        @else 
        <p>{{$paragraphs->paragraph1_ar}}</p>
        <span>{{$paragraphs->paragraph2_ar}}</span>
        @endif
        <input type="text" placeholder="{{trans('site.email')}}" onfocus="this.placeholder=''" onblur="this.placeholder='{{trans('site.email')}}'">
        <button class="btn sim-button button5">{{trans('site.submit')}}</button>
        </div>
    </div>

<div class="container">

    <div class="events">

    <h2>{{trans('site.news & events')}}</h2>
        <div class="row">
            @foreach($events as $event)
            <div class="col-md-4 det">
            <span>{{$event->date}}</span>
            @if(app()->isLocale('en'))

                <h3>{{$event->title}}</h3>
                <p>{{$event->detail}}</p>
                 <div class="event-detail">
                    <img src="{{asset('images/img/'.$event->img)}}">
                    <span>{{$event->author}}</span>
                 </div>

                 @else 

                <h3>{{$event->title_ar}}</h3>
                <p>{{$event->detail_ar}}</p>
                 <div class="event-detail">
                    <img src="{{asset('images/img/'.$event->img)}}">
                    <span>{{$event->author_ar}}</span>
                 </div>

                 @endif
                 </div>
                 @endforeach
        </div>
    </div>

</div>

<div class="contact-map">
    <div class="row">
        <div class="col-md-8">
        <div class="map-section">
<iframe src="{{$contact->map}}" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
        </div>

        <div class="col-md-4">

        <div class="sidebar">

<h2>{{trans('site.contact us')}}</h2>
        <ul class="contact" style="margin-top: 2%;">
        <li>
                <span>{{trans('site.address')}}:</span>
                <p>{{$contact->address}}</p>
                </li>
        <li>
        <span>{{trans('site.phone')}}:</span>
        <p>{{$contact->phone}}</p>
        </li>
        <li>
        <span>{{trans('site.mobile')}}:</span>
        <p>{{$contact->mobile}}</p>
        </li>
        <li>
        <span>{{trans('site.email')}}:</span>
        <p>{{$contact->email}}</p>
        </li>
        </ul>
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
autoplay:false,
smartSpeed: 1000,
autoplayTimeout:4000,
autoplayHoverPause:false,
            responsive:{
                0:{
                    items:1,
                    nav:true,
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
                    loop:false,
                }
            }
        })

        $(document).ready(function(){
            $(".owl-rwo").owlCarousel();
        });


        $('.owl-two').owlCarousel({
            loop:true,
            margin:14,
            responsiveClass:true,
            autoplay:true,
smartSpeed: 1000,
autoplayTimeout:4000,
autoplayHoverPause:false,
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


          var TxtType = function(el, toRotate, period) {
            this.toRotate = toRotate;
            this.el = el;
            this.loopNum = 0;
            this.period = parseInt(period, 10) || 1000;
            this.txt = '';
            this.tick();
            this.isDeleting = false;
        };

        TxtType.prototype.tick = function() {
            var i = this.loopNum % this.toRotate.length;
            var fullTxt = this.toRotate[i];

            if (this.isDeleting) {
                this.txt = fullTxt.substring(0, this.txt.length - 1);
            } else {
                this.txt = fullTxt.substring(0, this.txt.length + 1);
            }

            this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

            var that = this;
            var delta = 200 - Math.random() * 100;

            if (this.isDeleting) { delta /= 2; }

            if (!this.isDeleting && this.txt === fullTxt) {
                delta = this.period;
                this.isDeleting = true;
            } else if (this.isDeleting && this.txt === '') {
                this.isDeleting = false;
                this.loopNum++;
                delta = 500;
            }

            setTimeout(function() {
                that.tick();
            }, delta);
        };

        window.onload = function() {
            var elements = document.getElementsByClassName('typewrite');
            for (var i=0; i<elements.length; i++) {
                var toRotate = elements[i].getAttribute('data-type');
                var period = elements[i].getAttribute('data-period');
                if (toRotate) {
                    new TxtType(elements[i], JSON.parse(toRotate), period);
                }
            }
            // INJECT CSS
            var css = document.createElement("style");
            css.type = "text/css";
            css.innerHTML = ".typewrite > .wrap {padding:10px !important;}";
            document.body.appendChild(css);
        };


// Carousel Auto-Cycle
  $(document).ready(function() {
    $('.carousel1').carousel({
      interval: 6000
    })
  });

</script>


@stop