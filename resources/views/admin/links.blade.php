@extends('layouts.Admin-Layout')

@section('title')

{{$links->title_en}}

@stop

<style>

.setting {
    margin: 100px 4% 0 0;
}

.admins button {
        float: left;
margin: 13px 0;
padding: 7px 17px;
    }

.about input {
    margin: 15px 0;
}

.setting-about form button {
    margin: 22px 0 100px;
}

.file-ok {
    width: 100px;
height: 100px;
background-size: cover;
display: block;
}

</style>

@section('content')

<div class="col-md-9 float-right admins mt-5" style="padding-bottom:10%;">


<form action="{{route('edit-links')}}" method="post">
@csrf

<h3 class="mb-3 mt-3">Title Arabic</h3>
<input name="title_ar" class="form-control mb-4" placeholder="arabic title" value="{{$links->title_ar}}">

<h3 class="mb-3 mt-3">Title English</h3>

<input name="title_en" class="form-control" placeholder="english title" value="{{$links->title_en}}">

<h2 class="mt-3">Arabic Link</h2>


  <textarea id="summernote" name="name_ar">{{$links->name_ar}}</textarea>


<h2 class="mt-3">English Links</h2>
  <textarea id="summernote_en" name="name_en">{{$links->name_en}}</textarea>

  <button type="submit" class="btn btn-primary mt-3">Update</button>

</form>


</div>
@stop


@section('js')

<script>


$(document).ready(function() {
  $('#summernote').summernote({
    toolbar: [
    // [groupName, [list of button]]
    ['style', ['bold', 'italic', 'underline', 'clear']],
    ['font', ['strikethrough', 'superscript', 'subscript']],
    ['fontsize', ['fontsize']],
    ['color', ['color']],
    ['para', ['ul', 'ol', 'paragraph']],
        ['table', ['table']],
    ['insert', ['link', 'picture', 'video']],
    ['insert',['ltr','rtl']],
    ['height', ['height']]
  ]
  });
})

$(document).ready(function() {
    $('#summernote_en').summernote({
    toolbar: [
    // [groupName, [list of button]]
    ['style', ['bold', 'italic', 'underline', 'clear']],
    ['font', ['strikethrough', 'superscript', 'subscript']],
    ['fontsize', ['fontsize']],
    ['color', ['color']],
    ['para', ['ul', 'ol', 'paragraph']],
        ['table', ['table']],
    ['insert', ['link', 'picture', 'video']],
    ['insert',['ltr','rtl']],
    ['height', ['height']]
  ]
  });
})

</script>

@stop

