<!DOCTYPE html>
<!-- saved from url=(0064)https://webthemez.com/demo/marvel-bootstrap-html-admin-template/ -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('page_title')</title>
    <!-- Bootstrap Styles-->
    <link href="{{ asset('admin/css/bootstrap.css') }}" rel="stylesheet">
    <!-- FontAwesome Styles-->
    {{--<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">--}}

    <link href="{{ asset('admin/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">

    {{--<link href="{{ asset('admin/css/font-awesome.css') }}" rel="stylesheet">--}}
<!-- Morris Chart Styles-->
    {{--<link href="./Marvel Free Bootstrap Admin Template_files/morris-0.4.3.min.css" rel="stylesheet">--}}
    <link href="{{ asset('admin/css/morris-0.4.3.min.css') }}" rel="stylesheet">
    <!-- Custom Styles-->
    {{--<link href="./Marvel Free Bootstrap Admin Template_files/custom-styles.css" rel="stylesheet">--}}
    <link href="{{ asset('admin/css/custom-styles.css') }}" rel="stylesheet">
    <!-- Google Fonts-->
    {{--<link href="./Marvel Free Bootstrap Admin Template_files/css" rel="stylesheet" type="text/css">--}}
    <link href="{{ asset('admin/css/css') }}" rel="stylesheet" type="text/css" >
    {{--<link rel="stylesheet" href="./Marvel Free Bootstrap Admin Template_files/cssCharts.css">--}}
    <link href="{{ asset('admin/css/cssCharts.css') }}" rel="stylesheet"  >

    <script src="{{asset('editor/tinymce/js/tinymce/tinymce.min.js')}}"></script>
    <script>tinymce.init({ selector:'textarea',
            plugins: "link",

            });</script>
</head>

<body>
<div id="wrapper">
    <nav class="navbar navbar-default top-navbar" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="https://webthemez.com/demo/marvel-bootstrap-html-admin-template/index.html"><strong>Pulchowk</strong></a>

            <div id="sideNav" href="" class=""><i class="fa fa-caret-right"></i></div>
        </div>

        <ul class="nav navbar-top-links navbar-right">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="https://webthemez.com/demo/marvel-bootstrap-html-admin-template/#" aria-expanded="false">
                    <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>

                </a>
                <ul class="dropdown-menu dropdown-messages">
                    <li>
                        <a href="https://webthemez.com/demo/marvel-bootstrap-html-admin-template/#">
                            <div>
                                <strong>John Doe</strong>
                                <span class="pull-right text-muted">
                                        <em>Today</em>
                                    </span>
                            </div>
                            <div>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...</div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="https://webthemez.com/demo/marvel-bootstrap-html-admin-template/#">
                            <div>
                                <strong>John Smith</strong>
                                <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                            </div>
                            <div>Lorem Ipsum has been the industry's standard dummy text ever since an kwilnw...</div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="https://webthemez.com/demo/marvel-bootstrap-html-admin-template/#">
                            <div>
                                <strong>John Smith</strong>
                                <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                            </div>
                            <div>Lorem Ipsum has been the industry's standard dummy text ever since the...</div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a class="text-center" href="https://webthemez.com/demo/marvel-bootstrap-html-admin-template/#">
                            <strong>Read All Messages</strong>
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </li>
                </ul>
                <!-- /.dropdown-messages -->
            </li>
            <!-- /.dropdown -->
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="https://webthemez.com/demo/marvel-bootstrap-html-admin-template/#" aria-expanded="false">
                    <i class="fa fa-tasks fa-fw"></i> <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-tasks">
                    <li>
                        <a href="https://webthemez.com/demo/marvel-bootstrap-html-admin-template/#">
                            <div>
                                <p>
                                    <strong>Task 1</strong>
                                    <span class="pull-right text-muted">60% Complete</span>
                                </p>
                                <div class="progress progress-striped active">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                        <span class="sr-only">60% Complete (success)</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="https://webthemez.com/demo/marvel-bootstrap-html-admin-template/#">
                            <div>
                                <p>
                                    <strong>Task 2</strong>
                                    <span class="pull-right text-muted">28% Complete</span>
                                </p>
                                <div class="progress progress-striped active">
                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100" style="width: 28%">
                                        <span class="sr-only">28% Complete</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="https://webthemez.com/demo/marvel-bootstrap-html-admin-template/#">
                            <div>
                                <p>
                                    <strong>Task 3</strong>
                                    <span class="pull-right text-muted">60% Complete</span>
                                </p>
                                <div class="progress progress-striped active">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                        <span class="sr-only">60% Complete (warning)</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="https://webthemez.com/demo/marvel-bootstrap-html-admin-template/#">
                            <div>
                                <p>
                                    <strong>Task 4</strong>
                                    <span class="pull-right text-muted">85% Complete</span>
                                </p>
                                <div class="progress progress-striped active">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%">
                                        <span class="sr-only">85% Complete (danger)</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a class="text-center" href="https://webthemez.com/demo/marvel-bootstrap-html-admin-template/#">
                            <strong>See All Tasks</strong>
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </li>
                </ul>
                <!-- /.dropdown-tasks -->
            </li>
            <!-- /.dropdown -->
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="https://webthemez.com/demo/marvel-bootstrap-html-admin-template/#" aria-expanded="false">
                <span class="badge">{{count(auth()->user()->unreadNotifications)}}</span>    <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-alerts">

                    @foreach(auth()->user()->unreadNotifications as $notification)

                        <li>
                            <a href="https://webthemez.com/demo/marvel-bootstrap-html-admin-template/#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> {{$notification->data['thread']['subject']}}
                                    <span class="pull-right text-muted small"> {{$notification->data['thread']['name']}}</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>

                        @endforeach

                    {{--<li>--}}
                        {{--<a href="https://webthemez.com/demo/marvel-bootstrap-html-admin-template/#">--}}
                            {{--<div>--}}
                                {{--<i class="fa fa-twitter fa-fw"></i> 3 New Followers--}}
                                {{--<span class="pull-right text-muted small">12 min</span>--}}
                            {{--</div>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    {{--<li class="divider"></li>--}}
                    {{--<li>--}}
                        {{--<a href="https://webthemez.com/demo/marvel-bootstrap-html-admin-template/#">--}}
                            {{--<div>--}}
                                {{--<i class="fa fa-envelope fa-fw"></i> Message Sent--}}
                                {{--<span class="pull-right text-muted small">4 min</span>--}}
                            {{--</div>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    {{--<li class="divider"></li>--}}
                    {{--<li>--}}
                        {{--<a href="https://webthemez.com/demo/marvel-bootstrap-html-admin-template/#">--}}
                            {{--<div>--}}
                                {{--<i class="fa fa-tasks fa-fw"></i> New Task--}}
                                {{--<span class="pull-right text-muted small">4 min</span>--}}
                            {{--</div>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    {{--<li class="divider"></li>--}}
                    {{--<li>--}}
                        {{--<a href="https://webthemez.com/demo/marvel-bootstrap-html-admin-template/#">--}}
                            {{--<div>--}}
                                {{--<i class="fa fa-upload fa-fw"></i> Server Rebooted--}}
                                {{--<span class="pull-right text-muted small">4 min</span>--}}
                            {{--</div>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    {{--<li class="divider"></li>--}}
                    {{--<li>--}}
                <li>
                        <a class="text-center" href="https://webthemez.com/demo/marvel-bootstrap-html-admin-template/#">
                            <strong>See All Alerts</strong>
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </li>
                </ul>
                <!-- /.dropdown-alerts -->
            </li>
            <!-- /.dropdown -->
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="https://webthemez.com/demo/marvel-bootstrap-html-admin-template/#" aria-expanded="false">
                    <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="https://webthemez.com/demo/marvel-bootstrap-html-admin-template/#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                    </li>
                    <li><a href="https://webthemez.com/demo/marvel-bootstrap-html-admin-template/#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="{{ route('logout') }}"  onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fa fa-sign-out fa-fw"></i> Logout</a>

                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
    </nav>
    <!--/. NAV TOP  -->
</div>


<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>