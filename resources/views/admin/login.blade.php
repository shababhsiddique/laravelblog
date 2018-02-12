<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <link rel="apple-touch-icon" sizes="76x76" href="{{asset('public/admin_assets/img/apple-icon.png')}}"/>
        <link rel="icon" type="image/png" href="{{asset('public/admin_assets/img/favicon.png')}}" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>Material Dashboard by Creative Tim</title>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <meta name="viewport" content="width=device-width" />
        <!-- Bootstrap core CSS     -->
        <link href="{{asset('public/admin_assets/css/bootstrap.min.css')}}" rel="stylesheet" />
        <!--  Material Dashboard CSS    -->
        <link href="{{asset('public/admin_assets/css/material-dashboard.css?v=1.0.2')}}" rel="stylesheet" />
        <!--  CSS for Demo Purpose, don't include it in your project     -->
        <link href="{{asset('public/admin_assets/css/demo.css')}}" rel="stylesheet" />
        <!--     Fonts and icons     -->
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
    </head>

    <body>
        <div class="wrapper">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                        <div class="card" style='margin-top:20vh'>
                            <div class="card-header" data-background-color="purple">
                                <h4 class="title"><strong>Login</strong> </h4>
                            </div>
                            <div class="card-content form-login">
                                <div class="row">
                                    <div class="col-md-12">
                                        <?php
                                        $msg = Session::get('message');
                                        if (isset($msg) && $msg!="") {
                                            ?>                                            
                                            <div class="alert alert-{{$msg['type']}} alert-with-icon animated fadeInDown">
                                                <div class="alert-icon">
                                                    <i class="material-icons">warning</i>
                                                </div>
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true"><i class="material-icons">clear</i></span>
                                                </button>
                                                <b>{{$msg['title']}}:</b> {{$msg['body']}}
                                            </div>
                                            <?php
                                            Session::put('message', '');
                                        }
                                        ?>

                                    </div>                                    
                                </div>

                                {!! Form::open(['url' => 'adminverify','method' => 'post']) !!}

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Admin Email</label>
                                            <input name="admin_email" type="email" class="form-control" required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Password</label>
                                            <input name="password" type="password" class="form-control" required="">
                                        </div>
                                    </div>
                                </div> 
                                <div class="row">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary pull-right">Login</button>
                                    </div>
                                </div>                                
                                <div class="clearfix"></div>

                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>

                </div>
            </div>


        </div>
    </body>

    <!--   Core JS Files   -->
    <script src="{{asset('public/admin_assets/js/jquery-3.2.1.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/admin_assets/js/bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/admin_assets/js/material.min.js')}}" type="text/javascript"></script>

    <!--  Charts Plugin -->
    <!--<script src="{{asset('public/admin_assets/js/chartist.min.js')}}"></script>-->
    <!--  Dynamic Elements plugin -->
    <script src="{{asset('public/admin_assets/js/arrive.min.js')}}"></script>
    <!--  PerfectScrollbar Library -->
    <script src="{{asset('public/admin_assets/js/perfect-scrollbar.jquery.min.js')}}"></script>
    <!--  Notifications Plugin    -->
    <script src="{{asset('public/admin_assets/js/bootstrap-notify.js')}}"></script>
    <!--  Google Maps Plugin    -->
    <!--<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>-->
    <!-- Material Dashboard javascript methods -->
    <script src="{{asset('public/admin_assets/js/material-dashboard.js?v=1.2.0')}}"></script>
    
    


</html>