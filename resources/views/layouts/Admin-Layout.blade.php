<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('site/assets/images/favicon.png')}}">
    <!-- Bootstrap Core CSS -->

    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.css" rel="stylesheet">

    <link href="{{asset('site/assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="{{asset('site/assets/plugins/chartist-js/dist/chartist.min.css')}}" rel="stylesheet">
    <link href="{{asset('site/assets/plugins/chartist-js/dist/chartist-init.css')}}" rel="stylesheet">
    <link href="{{asset('site/assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css')}}" rel="stylesheet">
    <link href="{{asset('site/assets/plugins/css-chart/css-chart.css')}}" rel="stylesheet">
    <!-- toast CSS -->
    <link href="{{asset('site/assets/plugins/toast-master/css/jquery.toast.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset('site/css/style.css')}}" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="{{asset('site/css/colors/blue.css')}}" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<script>
    (function(i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function() {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o), m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
    ga('create', 'UA-85622565-1', 'auto');
    ga('send', 'pageview');
    </script>
    
    <title>@yield('title')</title>

    <style>
        .sidebar-nav ul {
    padding: 63px 0;
}

.count {
    position: relative;
left: 12px;
bottom: -24px;
font-size: 13px;
}

.point, .noticlick, .messclick {
margin-top:25px;
line-height:0 !important;
}

.notify .point {
top:-5px;
}

.mail-contnet {
    padding: 20px 20px !important;
box-shadow: 1px 0px 20px rgba(0,0,0,0.08)!important;
}

.sa-content-wrapper {
    width:95% !important;
}
    
.note-editor.note-frame .note-editing-area .note-editable {
    padding: 10px 21px;
}

    </style>
</head>

<body>

<body class="fix-header fix-sidebar card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-toggleable-sm navbar-light">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{route('admin-index')}}">
                        <!-- Logo icon -->
                      <h2>Courses</h2>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto mt-md-0 ">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <li class="nav-item mt-3"> <a class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="icon-arrow-left-circle"></i></a> </li>
                        <!-- ============================================================== -->
                        <!-- Comment -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="noticlick nav-link dropdown-toggle text-muted text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-message"></i>
                                <div class="notify"> <span class="heartbit"></span> <span class="point"></span><span class="count">{{count(notification())}}</span> </div>
                            </a>
                            <div class="dropdown-menu mailbox animated bounceInDown">
                                <ul>
                                    <li>
                                        <div class="drop-title">Notifications</div>
                                    </li>
                                    <li>
                                        <div class="message-center">

                                        
                                        @foreach(auth()->guard('admin')->user()->unreadnotifications as $noti)
                                            <!-- Message -->
                                                <div class="mail-contnet">
                                                    <h5>{{$noti->data['name']}}</h5> <span class="mail-desc">{{$noti->data['message']}}<a style="color:#000;font-size:18px;display: inline;" href="{{route('admin-registers')}}">{{$noti->data['course_name']}}</a><span class="time">{{$noti->created_at}}</span></span> </div>
                                            @endforeach
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link text-center" href="{{route('notifications')}}"> <strong>Check all notifications</strong> <i class="fa fa-angle-right"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Comment -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Messages -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="messclick nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-email"></i>
                                <div class="notify"> <span class="heartbit"></span> <span class="point"></span> <span class="count">{{count(messages())}}</span></div>
                            </a>
                            <div class="dropdown-menu mailbox animated bounceInDown" aria-labelledby="2">
                                <ul>
                                   
                                    <li>
                                        <div class="message-center">
                                            <!-- Message -->
                                            @foreach(messages() as $message)

                                            <a href="#">
                                                <div class="mail-contnet">
                                                    <h5>{{$message->name}}</h5> <span class="mail-desc">{{$message->message}}</span> <span class="time">{{$message->created_at}}</span> </div>
                                           
                                            </a>
                                          @endforeach
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link text-center" href="{{route('get.messages')}}"> <strong>See all e-Mails</strong> <i class="fa fa-angle-right"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Messages -->
                        <!-- ============================================================== -->

                       
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                        <!-- <li class="nav-item hidden-sm-down">
                            <form class="app-search">
                                <input type="text" class="form-control" placeholder="Search for..."> <a class="srh-btn"><i class="ti-search"></i></a> </form>
                        </li> -->
                
                        <!-- <li class="nav-item dropdown mt-3">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="flag-icon flag-icon-us"></i></a>
                            <div class="dropdown-menu  dropdown-menu-right animated bounceInDown"> <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-sa"></i> Arabic</a> </div>
                        </li> -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- User profile -->
                <div class="user-profile">
                    <!-- User profile image -->
                    <div class="profile-img"> <img src="{{asset('site/assets/images/users/5.jpg')}}" alt="user" /> </div>
                    <!-- User profile text-->
                    <div class="profile-text"> <a href="#" class="dropdown-toggle link u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">@if (auth()->guard('admin')->user())  {{auth()->guard('admin')->user()->name}} @endif<span class="caret"></span></a>
                        <div class="dropdown-menu animated flipInY">
                            <div class="dropdown-divider"></div> <a href="{{route('logout')}}" class="dropdown-item"><i class="fa fa-power-off"></i> Logout</a>
                        </div>
                    </div>
                </div>
                <!-- End User profile text-->

                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li>
                            <a href="{{route('admin-index')}}" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard</span></a>

                        </li>
                        @if(adminPermissions(1))
                        <li>
                            <a href="{{route('admins')}}" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Admins</span></a>
                        </li>
                        @endif
                        <li>
                            <a href="{{route('admin-registers')}}" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Registers</span></a>
                           
                        </li>
                        <li>
                            <a href="{{route('admin-courses')}}" aria-expanded="false"><i class="mdi mdi-book-open-variant"></i><span class="hide-menu">Courses</span></a>
                           
                        </li>
                        <li>
                            <a href="{{route('admin-payments')}}" aria-expanded="false"><i class="mdi mdi-book-open-variant"></i><span class="hide-menu">Payments</span></a>
                           
                        </li>
                        <li>
                            <a href="{{route('admin-socials')}}" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Socials</span></a>
                           
                        </li>
                        <li>
                            <a href="{{route('settings')}}" aria-expanded="false"><i class="ti-settings"></i><span class="hide-menu">Settings</span></a>
                        </li>
                        <li>
                            <a href="{{route('admin-about')}}" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">About</span></a>
                        </li>
                        <li>
                            <a href="{{route('sliders')}}" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Sliders</span></a>
                        </li>
                        <li>
                            <a href="{{route('events')}}" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Events</span></a>
                        </li>
                        <li>
                            <a href="{{route('admin-contact')}}" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Contact</span></a>
                        </li>

                        <li>
                            <a href="{{route('admin-conditions')}}" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Conditions</span></a>
                        </li>

                        <li>
                            <a href="{{route('admin-services')}}" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Services</span></a>
                        </li>

                        <li>
                            <a href="{{route('admin-links')}}" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Links</span></a>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->

            </div>
            <!-- End Sidebar scroll-->
        </aside>
        </div>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        @include('errors.errors')

@yield('content')



            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer">
                © 2017 Monster Admin by wrappixel.com
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->

    <script src="{{asset('site/assets/plugins/jquery/jquery.min.js')}}"></script>
    
    <!-- include summernote css/js -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.js"></script>

<script src="{{asset('site/js/summernote-dir.js')}}"></script>

    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{asset('site/assets/plugins/bootstrap/js/tether.min.js')}}"></script>
    <script src="{{asset('site/assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{asset('site/js/jquery.slimscroll.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{asset('site/js/waves.js')}}"></script>
    <!--Menu sidebar -->
    <script src="{{asset('site/js/sidebarmenu.js')}}"></script>
    <!--stickey kit -->
    <script src="{{asset('site/assets/plugins/sticky-kit-master/dist/sticky-kit.min.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{asset('site/js/custom.min.js')}}"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!-- chartist chart -->
    <script src="{{asset('site/assets/plugins/chartist-js/dist/chartist.min.js')}}"></script>
    <script src="{{asset('site/assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js')}}"></script>
    <!-- Chart JS -->
    <script src="{{asset('site/assets/plugins/echarts/echarts-all.js')}}"></script>
    <script src="{{asset('site/assets/plugins/toast-master/js/jquery.toast.js')}}"></script>
    <!-- Chart JS -->
    <script src="{{asset('site/js/dashboard1.js')}}"></script>
        <script src="{{asset('site/js/nicEdit.js')}}"></script>
    <script src="{{asset('site/js/toastr.js')}}"></script>
    <script>
        // $.toast({
        //     heading: 'Welcome to Monster admin',
        //     text: 'Use the predefined ones, or specify a custom position object.',
        //     position: 'top-right',
        //     loaderBg:'#ff6849',
        //     icon: 'info',
        //     hideAfter: 3000, 
        //     stack: 6
        // });

        setTimeout(fade_out, 5000);

function fade_out() {
    $("#checker").fadeOut().empty();
}

$(document).on("click", ".noticlick", function () {
            var token = "{{ csrf_token() }}";

            $.ajax({
                url: "{{ route('read.notifications') }}",
                type: "post",
                dataType: "json",
                data: {_token: token},
                success: function (data) {
                    console.log(data.status);
                    if (data.status !== "ok") {
                        alert("ERROR");
                    }

                },
                error: function () {
                    alert("ERROR");
                }
            })
        })

        $(document).on("click", ".messclick", function () {
            var token = "{{ csrf_token() }}";

            $.ajax({
                url: "{{ route('read.messages') }}",
                type: "post",
                dataType: "json",
                data: {_token: token},
                success: function (data) {
                    console.log(data.status);
                    if (data.status !== "ok") {
                        alert("ERROR");
                    }

                },
                error: function () {
                    alert("ERROR");
                }
            })
        })

    </script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="{{asset('site/assets/plugins/styleswitcher/jQuery.style.switcher.js')}}"></script>


    @yield('js')

</body>

</html>