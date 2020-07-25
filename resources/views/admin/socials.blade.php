@extends('layouts.Admin-Layout')

@section('title')

     Socials

@stop

<style>

.socials{
    margin: 100px 4% 0 0;
}

.socials .social {
    margin: 15px 0;
}

.socials button {
   margin: 15px 0 0 15px;
display: block;
padding: 10px 20px;
}

</style>

@section('content')

<div class="col-md-9 float-right">
<div class="socials">

<form action="{{route('edit-social')}}" method="post" enctype="multipart/form-data">
@csrf

            <input class="form-control social" type="text" placeholder="instagram" name="instagram" value="{{$social->instagram}}">
            <input class="form-control social" type="text" placeholder="facebook" name="facebook" value="{{$social->facebook}}">
            <input class="form-control social" type="text" placeholder="twitter" name="twitter" value="{{$social->twitter}}">
            <input class="form-control social" type="text" placeholder="youtube" name="youtube" value="{{$social->youtube}}">

        <button class="btn btn-primary">Update</button>
          </form>
    </div>
</div>

@stop


@section('js')

@stop