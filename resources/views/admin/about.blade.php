@extends('layouts.Admin-Layout')

@section('title')

     About Us

@stop

<style>

.setting {
    margin: 100px 4% 0 0;
}

.file-ok {
    width: 100px;
height: 100px;
background-size: cover;
display: block;
}

.about input {
    margin: 15px 0;
}

.setting-about form button {
    margin: 22px 0 100px;
}

</style>

@section('content')

<div class="col-md-9 float-right" style="margin: 45px 45px 0 0;">
<div class="setting-about">

<h3>About Details</h3>

<form action="{{route('edit-about')}}" method="post" enctype="multipart/form-data">
@csrf

  <div class="row">
        <div class="col-md-4 about">
            <input class="form-control social" placeholder="title1" name="title1" value="{{$about->title1}}">
            <input class="form-control social" placeholder="title arabic" name="title1_ar" value="{{$about->title1_ar}}">

            <textarea class="form-control social" placeholder="detail1" name="detail1" rows="10">{{$about->detail1}}</textarea>
            <textarea class="form-control social" placeholder="detail arabic" name="detail1_ar" rows="10">{{$about->detail1_ar}}</textarea>

            <div class="wrap-custom-file inline-block mb-10">
                                    <input type="file" name="img1" id="image1{{$about->id}}"
                                    accept=".gif, .jpg, .png"/>
                                     <label for="image1{{$about->id}}" class="file-ok" style="background-image: url({{asset('images/img/'.$about->img1)}});">
                                    </label>
                                </div>
                                        </div>

         <div class="col-md-4 about">
            <input class="form-control social" placeholder="title2" name="title2" value="{{$about->title2}}">
            <input class="form-control social" placeholder="title2 Arabic" name="title2_ar" value="{{$about->title2_ar}}">

            <textarea class="form-control social" placeholder="detail2" name="detail2" rows="10">{{$about->detail2}}</textarea>
            <textarea class="form-control social" placeholder="detail2 arabic" name="detail2_ar" rows="10">{{$about->detail2_ar}}</textarea>
            
            <div class="wrap-custom-file inline-block mb-10">
                                    <input type="file" name="img2" id="image2{{$about->id}}"
                                    accept=".gif, .jpg, .png"/>
                                     <label for="image2{{$about->id}}" class="file-ok" style="background-image: url({{asset('images/img/'.$about->img2)}});">
                                    </label>
                                </div>
                                        </div>

  <div class="col-md-4 about">
           <input class="form-control social" placeholder="title3" name="title3" value="{{$about->title3}}">
           <input class="form-control social" placeholder="title3 arabic" name="title3_ar" value="{{$about->title3_ar}}">

            <textarea class="form-control social" placeholder="detail3" name="detail3" rows="10"> {{$about->detail3}}</textarea>
            <textarea class="form-control social" placeholder="detail3 arabic" name="detail3_ar" rows="10"> {{$about->detail3_ar}}</textarea>

            <div class="wrap-custom-file inline-block mb-10">
                                    <input type="file" name="img3" id="image3{{$about->id}}"
                                    accept=".gif, .jpg, .png"/>
                                     <label for="image3{{$about->id}}" class="file-ok" style="background-image: url({{asset('images/img/'.$about->img3)}});">
                                    </label>
                                </div>
                                        </div>
        <button class="btn btn-primary">Update</button>
  </div>
          </form>
    </div>
</div>


@stop


@section('js')

@stop