<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <title>Laravel Blog</title>

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Bootstrap core CSS -->
        <link href="{{asset('public/css/bootstrap.css')}}" rel="stylesheet">

        <!-- Material Design Bootstrap -->
        <link href="{{asset('public/css/mdb.css')}}" rel="stylesheet">

        <!-- Custom Styles -->
        <link href="{{asset('public/css/style.css')}}" rel="stylesheet">


    </head>


    <body>


        @include('common.header')

        <main>

            <!--Main layout-->
            <div class="container margintop50">
                <div class="row">

                    <!--Main column-->
                    @if(isset($sidebar))
                    <div class="col-lg-8">
                        @endif                        
                        @if(!isset($sidebar))
                        <div class="col-lg-12">
                            @endif   

                            @yield('mainContent')
                        </div>
                        <!--Main column end-->


                        <!--Sidebar-->
                        @if(isset($sidebar))
                        <div class="col-lg-4 z-depth-1" style="padding-top: 20px">
                            @endif


                            @yield('sidebarContent')


                            @if(isset($sidebar))
                        </div>
                        @endif

                        <!--/.Sidebar-->
                    </div>
                </div>
                <!--/.Main layout-->

        </main>

        <!--Footer-->
        @include('common.footer')
        <!--/.Footer-->


        <!-- SCRIPTS -->

        <!-- JQuery -->
        <script type="text/javascript" src="{{asset('public/js/jquery-3.1.1.js')}}"></script>

        <!-- Bootstrap dropdown -->
        <script type="text/javascript" src="{{asset('public/js/popper.min.js')}}"></script>

        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="{{asset('public/js/bootstrap.js')}}"></script>

        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="{{asset('public/js/mdb.js')}}"></script>

        <script>
            new WOW().init();
        </script>

    </body>

</html>