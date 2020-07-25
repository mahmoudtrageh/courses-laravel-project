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

.course-header p {
    margin-bottom:0 !important;
    display: inline;
float: right;
}


.course-header h5 {
    color:#898989;
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

.payment {
    background-color:#f3f3f3;
    padding: 15px 0;
}

.card-pay img {
    margin: 65px 0 100px 100px;
width: 200px;
height: 50px;
}

.bank-pay input[type="text"] {
    margin: 10px 0 0 20px;
}

div label {
    margin-left: 10px;
}

.mt-4 p {
    color:#000;
}

.vertical-border {
    background-color:#c2bebe;
    height:200px;
    width:1px;
    margin-right: 20px;
}

form button {
    float: right;
position: relative;
bottom: 64px;
background-color:#f652e2;
color:#fff;
width: 11%;
padding: 7px;
right: 10px;
}

.form-controls {
        display: block;
    width: 100%;
    margin: 13px 0 0 21px;
    padding: 12px 20px;
    font-size: 1rem;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #6dafef;
    border-radius: 10px;
    transition: border-color 0.15s ease-in-out,box-shadow 0.15s ease-in-out;
}

.select-css {
    font-size: 16px;
font-family: sans-serif;
color: #dedddd;
line-height: 1.3;
padding: 12px 20px;
width: 100%;
max-width: 100%;
box-sizing: border-box;
border: 1px solid #6dafef;
border-radius: .5em;
-moz-appearance: none;
-webkit-appearance: none;
appearance: none;
background-color: #fff;
background-repeat: no-repeat, repeat;
background-position: right .7em top 50%, 0 0;
background-size: .65em auto, 100%;
margin: 13px 0 0 21px;
background-image: url('data:image/svg+xml;charset=US-ASCII,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%22292.4%22%20height%3D%22292.4%22%3E%3Cpath%20fill%3D%22%23007CB2%22%20d%3D%22M287%2069.4a17.6%2017.6%200%200%200-13-5.4H18.4c-5%200-9.3%201.8-12.9%205.4A17.6%2017.6%200%200%200%200%2082.2c0%205%201.8%209.3%205.4%2012.9l128%20127.9c3.6%203.6%207.8%205.4%2012.8%205.4s9.2-1.8%2012.8-5.4L287%2095c3.5-3.5%205.4-7.8%205.4-12.8%200-5-1.9-9.2-5.5-12.8z%22%2F%3E%3C%2Fsvg%3E');
}

.select-css::-ms-expand {
    display: none;
}

.select-css option {
    font-weight:normal;
}

.payment label, .mt-4 p {
    color: #000;
font-weight: 600;
}

.payment {
    padding: 23px 0 6% 0 !important;
}

.pay-btn {
    float: right;
position: absolute;
bottom: -39px;
background-color: #FF78E1 !important;
color: #fff;
padding: 12px 40px !important;
right: -44px;
border-radius: 6px !important;
font-weight: 600 !important;
width:auto !important;
width:145px;
}

</style>

@section('content')

<div class="section" style="background-image: url({{asset('site/img/header-section.jpg')}})">

<!-- <div class="overlay"></div> -->

<h2>{{trans('site.courses categories')}}</h2>
@foreach($payments_page as $payment_page)

@if(app()->isLocale('en'))

     <p>{{$category}} /{{trans('site.all courses')}}/{{$payment_page->c_name}}</p>

@else 

<p>{{$category}} /{{trans('site.all courses')}}/{{$payment_page->cname_ar}}</p>

@endif
@endforeach
</div>

<div class="container">

@foreach($payments_page as $payment_page)

<div class="course-header">
<div class="row">

<div class="col-md-8">

    <div class="row">
    @if(app()->isLocale('en'))

<div class="col-md-4" style="border-right: 1px solid #e9e9e9;">

@else 
<div class="col-md-4" style="border-left: 1px solid #e9e9e9;">

@endif        <div class="row">
                    
                    <div class="col-md-12">
                        <div class="course-detail">

                            <div class="dropdown">
                            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"                                          aria-haspopup="true" aria-expanded="false">
                                <h5 style="display: inline-block;">Instructors</h5>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        @foreach ($payment_page->instructors as $pay_page)
                                                @if(app()->isLocale('en'))

                                                <div class="row">
                                                 <div class="col-sm-4 col-xs-4">
                        <img src="{{asset('images/img/'. $pay_page->ins_img)}}">
                    </div>

                                                 <div class="col-sm-8 col-xs-8">

                                <a class="dropdown-item" href="#">{{$pay_page->name_en}}</a>

                                </div>
                                </div>
                              
                                                                      @else
    
                                     <div class="row">
                                                 <div class="col-sm-4 col-xs-4">
                        <img src="{{asset('images/img/'. $pay_page->ins_img)}}">
                    </div>

                                                 <div class="col-sm-8 col-xs-8">

                                <a class="dropdown-item" href="#">{{$pay_page->name_ar}}</a>

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


@endif        <h5>{{trans('site.duration')}}</h5>
        <span>{{trans('site.start')}}</span><p> {{$payment_page->start}}</p>
        <span>{{trans('site.end')}}</span> <p>{{$payment_page->end}}</p>

        </div>

        <div class="col-md-3 course-value add-padd-left">
        <h5>{{trans('site.value')}}</h5>
        <span>{{$payment_page->value}}</span><h5 style="display:inline-block;">{{trans('site.sar')}}</h5>
        </div>
    </div>

</div>
</div>

</div>

@endforeach
<!-- end of container -->

<div class="mt-4">
    <p>{{trans('site.Dear you are in the final step to register this course, Please choose your preferred payment method.')}}
    <form action="{{route('pay-bank', ['amount' => $payment_page->value])}}" method="post">
@csrf
    <div class="row payment">
        <div class="col-md-4 card-pay">
            <div><input name="method" value="credit" type="radio"><label>{{trans('site.Credit Card')}}</label></div>

            <img width="300" height="100" src="{{asset('site/img/visa.png')}}">
        </div>

        <div class="vertical-border"></div>

        <div class="col-md-4 bank-pay">

                    <input type="hidden" name="email" placeholder="" value="{{$email}}" class="form-controls">

            <div><input name="method" value="bank" type="radio"><label>{{trans('site.Bank Transfer')}}</label></div>
            <input type="text" name="sender" placeholder="{{trans('site.Sender Name')}}" class="form-controls">
            <input type="text" name="account_number" placeholder="{{trans('site.Account Number')}}" class="form-controls">

            <select name="bank_name" class="select-css">
            <option selected disabled>{{trans('site.Bank Name')}}</option>
            @foreach($banks as $bank)
            <option value="{{$bank->name}}">{{$bank->name}}</option>
            @endforeach
            </select>

        </div>

            <div class="col-md-3">

            @if(app()->isLocale('en'))

    <button class="btn pay-btn sim-button button5">{{trans('site.PAY NOW')}}</button>

@else 

<button style="background-color: #FF78E1 !important;right:60px;" class="btn pay-btn sim-button button5">{{trans('site.PAY NOW')}}</button>


@endif

</div>

@if(app()->isLocale('en'))

<p style="text-align:center;font-weight:bold;color:#FF3030;margin:0 auto;">this will take 24 h max to confirm your registeration</p>
@else 
<p style="text-align:center;font-weight:bold;color:#FF3030;margin:0 auto;">سوف يتم تأكيد تسجيلك في غضون 24 ساعة كحد أقصى</p>


@endif

    </div>

 
    </form>


   

</div>

</div>
@stop


@section('js')

<script>


</script>


@stop