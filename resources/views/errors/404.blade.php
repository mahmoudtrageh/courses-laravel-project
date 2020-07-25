@extends('layouts.Site-Layout')

@section('title')

    Page Not Found

@stop

@section('content')

    <!-- start banner Area -->
    <section class="banner-area" id="home">
        <div class="container">
            <div class="row fullscreen d-flex align-items-center">
                <div class="error-area text-center ptb-100" style="width:100% !important;">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="error-content" style="padding: 10px 0;">
                                    <h2>Error 404</h2><br>
                                    <h3>The page you looking for is not found !</h3><br>
                                    <a class="go-home" href="{{route('site-index')}}">go to Home Page</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->

@stop


@section('js')

@stop
