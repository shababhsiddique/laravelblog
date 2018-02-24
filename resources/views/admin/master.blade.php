<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <link rel="apple-touch-icon" sizes="76x76" href="{{asset('public/admin_assets/img/apple-icon.png')}}" />
        <link rel="icon" type="image/png" href="{{asset('public/admin_assets/img/favicon.png')}}" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>Material Dashboard by Creative Tim</title>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <meta name="viewport" content="width=device-width" />

        <!-- Bootstrap core CSS     -->
        <link href="{{asset('public/admin_assets/css/bootstrap.min.css')}}" rel="stylesheet" />
        <!--  Material Dashboard CSS    -->
        <link href="{{asset('public/admin_assets/css/material-dashboard.css')}}" rel="stylesheet" />
        <!--  CSS for Demo Purpose, don't include it in your project     -->
        <link href="{{asset('public/admin_assets/css/demo.css')}}" rel="stylesheet" />
        <!--     Fonts and icons     -->
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>

        <!--   Core JS Files   -->
        <script src="{{asset('public/admin_assets/js/jquery-3.2.1.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('public/admin_assets/js/bootstrap.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('public/admin_assets/js/bootbox.min.js')}}" type="text/javascript"></script>
        <script src="https://cdn.ckeditor.com/4.8.0/full/ckeditor.js"></script>
        <script src="{{asset('public/admin_assets/js/material.min.js')}}" type="text/javascript"></script>





    </head>

    <body>
        <div class="wrapper">

            <!--sidebar start-->
            @include('admin.common.sidebar')
            <!--sidebar end-->

            <div class="main-panel">

                <!--top navbar start-->
                @include('admin.common.topbar')
                <!--top navbar end--> 

                <div class="content">
                    <div class="container-fluid">

                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Admin</a></li>
                            <!--<li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Dashboard</a></li>-->
                            <li class="breadcrumb-item active"><a href="{{url(Request::path())}}">{{Request::path()}}</a></li>
                        </ol>
                        <!--notification start-->
                        @yield('adminNotification')
                        <!--notification end-->

                        <!--admin content start-->
                        @yield('adminContent')
                        <!--admin content end--> 
                    </div>
                </div>
                <footer class="footer">
                    <div class="container-fluid">
                        <nav class="pull-left">
                            <ul>
                                <li>
                                    <a href="#">
                                        Home
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Company
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Portfolio
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Blog
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <p class="copyright pull-right">
                            &copy;
                            2018
                            <a href="http://www.shababhsiddique.com" target="_blank">shababhsiddique</a>, made with love for a better web
                        </p>
                    </div>
                </footer>
            </div>
        </div>



        <!--  Charts Plugin -->
        <script src="{{asset('public/admin_assets/js/chartist.min.js')}}"></script>
        <!--  Dynamic Elements plugin -->
        <script src="{{asset('public/admin_assets/js/arrive.min.js')}}"></script>

        <!--  PerfectScrollbar Library -->
        <script type="text/javascript" src="{{asset('public/admin_assets/js/perfect-scrollbar.jquery.min.js')}}"></script>
        <!--  Notifications Plugin    -->
        <script type="text/javascript" src="{{asset('public/admin_assets/js/bootstrap-notify.js')}}"></script>
        

        <!-- Material Dashboard javascript methods -->
        <script type="text/javascript" src="{{asset('public/admin_assets/js/material-dashboard.js')}}"></script>

        <!-- Material Dashboard Init Scripts -->
        <script src="{{asset('public/admin_assets/js/script.js')}}"></script>        



    </body>

</html>