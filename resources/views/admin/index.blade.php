@extends('layouts.Admin-Layout')

@section('title')

     Admin Panel

@stop

<style>
     @media only screen and (max-width: 768px) {
        .dashboard {
                margin: 100px 0;
    text-align: center;
        }
    }

    .dashboard {
        margin:100px 0;
    }

    .one-dash {
        background-color: #fff;
        box-shadow: 1px 0px 20px rgba(0,0,0,0.08);
padding: 20px;
margin: 3% 8% 0 0;
    }

</style>

@section('content')

<div class="col-md-9 float-right">
     <div class="dashboard">
            <div class="row">
                <div class="col-md-3 one-dash">
                    <h3>Registers</h3>
                    <span>25</span>
                </div>
                <div class="col-md-3 one-dash">
                    <h3>payments</h3>
                    <span>20</span>
                </div>
                <div class="col-md-3 one-dash">
                    <h3>users</h3>
                    <span>50</span>
                </div>

                <div class="col-md-3 one-dash">
                    <h3>Messages</h3>
                    <span>30</span>
                </div>

                  <div class="col-md-3 one-dash">
                    <h3>Notifications</h3>
                    <span>30</span>
                </div>
            </div>
        </div>
</div>
@stop


@section('js')

@stop