@extends('layouts.Admin-Layout')

@section('title')

     Settings

@stop

<style>

.setting {
    margin: 100px 4% 0 0;
}

.setting-about input {
    margin: 15px 0;
}

.setting-about form button {
    margin: 22px 0 100px;
}

</style>

@section('content')


<div class="col-md-9 float-right" style="margin: 45px 45px 0 0;">
<div class="setting-about">

<h3>Contact Details</h3>

<form action="{{route('edit-contact')}}" method="post" enctype="multipart/form-data">
@csrf

  <div class="row">
            <input class="form-control social" type="number" placeholder="phone" name="phone" value="{{$contact->phone}}">
            <input class="form-control social" type="text" placeholder="mobile" name="mobile" value="{{$contact->mobile}}">
            <input class="form-control social" type="email" placeholder="email" name="email" value="{{$contact->email}}">
            <input class="form-control social" type="text" placeholder="address" name="address" value="{{$contact->address}}">
            <input class="form-control social" type="text" placeholder="map" name="map" value="{{$contact->map}}">

        <button class="btn btn-primary">Update</button>
  </div>
          </form>

    </div>
</div>



@stop


@section('js')

@stop