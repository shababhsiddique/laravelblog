<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <title>Material Design Bootstrap</title>

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Bootstrap core CSS -->
        <link href="{{asset('public/css/bootstrap.css')}}" rel="stylesheet">

        <!-- Material Design Bootstrap -->
        <link href="{{asset('public/css/mdb.css')}}" rel="stylesheet">

        <link href="{{asset('public/css/style.css')}}" rel="stylesheet">


    </head>

    <body>


        <header>

            <!--Navbar-->
            <nav class="navbar navbar-expand-lg navbar-light blue-grey lighten-5 fixed-top scrolling-navbar">
                <div class="container">
                    <a class="navbar-brand" href="#">
                        <img src="https://mdbootstrap.com/img/logo/mdb-transparent.png" height="30" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="index.html">Home
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.html">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="ecommerce.html">Ecommerce</a>
                            </li>
                            <li class="nav-item btn-group">
                                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages
                                </a>
                                <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="ecommerce_product.html">Product</a>
                                    <a class="dropdown-item" href="cart.html">Cart</a>
                                    <a class="dropdown-item" href="blog_single.html">Blog Post</a>
                                    <a class="dropdown-item" href="contact.html">Contact</a>
                                    <a class="dropdown-item" href="register.html">Sign in/Sign up</a>
                                </div>
                            </li>
                        </ul>
                        <hr class="visible-md"/>
                        <form class="form-inline">

                            <select class="form-control mr-md-2 ecomheadersel">
                                <option>Category</option>
                                <option>Category</option>
                                <option>Category</option>
                                <option>Category</option>
                            </select>
                            <input class="form-control mr-md-5 ecomheadersearch" type="text" placeholder="Search" aria-label="Search">

                            <button class="btn btn-primary btn-md" type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                </div>
            </nav>
            <!--/.Navbar-->

        </header>

        <main>

            <!--Main layout-->
            <div class="container margintop50">
                <div class="row">

                    <!--Main column-->
                    <div class="col-lg-8">

                        <!--Post-->
                        <div class="post-wrapper wow fadeIn" data-wow-delay="0.2s">
                            <!--Post data-->
                            <h1 class="h1-responsive dark-grey-text font-bold">Post title
                                <small class="text-muted">Secondary text</small>
                            </h1>
                            <h6>Written by
                                <a href="">
                                    <strong>John Doe</strong>
                                </a>, 30.04.2016</h6>

                            <br>

                            <!--Featured image -->
                            <div class="view overlay hm-white-light z-depth-1-half rounded">
                                <img src="https://mdbootstrap.com/img/Photos/Others/images/76.jpg" class="img-fluid" alt="">
                                <div class="mask">
                                </div>
                            </div>

                            <br>

                            <!--Post excerpt-->
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, officia omnis. Vero nihil neque dignissimos
                                hic voluptas quisquam amet porro, similique libero ullam veritatis tempora cumque voluptates
                                harum. Repellendus, impedit.</p>

                            <!--"Read more" button-->
                            <a href="blog_single.html" class="btn btn-blue btn-md">Read more</a>
                        </div>
                        <!--/.Post-->

                        <hr class="mt-5">

                        <!--Post-->
                        <div class="post-wrapper wow fadeIn" data-wow-delay="0.4s">
                            <!--Post data-->
                            <h1 class="h1-responsive dark-grey-text font-bold mt-5">Post title
                                <small class="text-muted">Secondary text</small>
                            </h1>
                            <h6>Written by
                                <a href="">
                                    <strong>John Doe</strong>
                                </a>, 30.04.2016</h6>

                            <br>

                            <!--Featured image -->
                            <div class="view overlay hm-white-light z-depth-1-half rounded">
                                <img src="https://mdbootstrap.com/img/Photos/Others/images/49.jpg" class="img-fluid " alt="">
                                <div class="mask">
                                </div>
                            </div>

                            <br>

                            <!--Post excerpt-->
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, officia omnis. Vero nihil neque dignissimos
                                hic voluptas quisquam amet porro, similique libero ullam veritatis tempora cumque voluptates
                                harum. Repellendus, impedit.</p>

                            <!--"Read more" button-->
                            <a href="blog_single.html" class="btn btn-blue btn-md">Read more</a>
                        </div>
                        <!--/.Post-->

                        <hr class="mt-5">

                        <!--Post-->
                        <div class="post-wrapper wow fadeIn" data-wow-delay="0.6s">
                            <!--Post data-->
                            <h1 class="h1-responsive font-bold dark-grey-text mt-5">Post title
                                <small class="text-muted">Secondary text</small>
                            </h1>
                            <h6>Written by
                                <a href="">
                                    <strong>John Doe</strong>
                                </a>, 30.04.2016</h6>

                            <br>

                            <!--Featured image -->
                            <div class="view overlay hm-white-light z-depth-1-half rounded">
                                <img src="https://mdbootstrap.com/img/Photos/Others/images/77.jpg" class="img-fluid" alt="">
                                <div class="mask">
                                </div>
                            </div>

                            <br>

                            <!--Post excerpt-->
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, officia omnis. Vero nihil neque dignissimos
                                hic voluptas quisquam amet porro, similique libero ullam veritatis tempora cumque voluptates
                                harum. Repellendus, impedit.</p>

                            <!--"Read more" button-->
                            <a href="blog_single.html" class="btn btn-blue btn-md">Read more</a>
                        </div>
                        <!--/.Post-->

                        <hr class="mt-5">

                        <!--Pagination-->
                        <nav>
                            <ul class="pagination flex-center pg-primary  wow fadeIn" data-wow-delay="0.2s">
                                <!--Arrow left-->
                                <li class="page-item">
                                    <a class="page-link" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                </li>

                                <!--Numbers-->
                                <li class="page-item active">
                                    <a class="page-link">1</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link">2</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link">3</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link">4</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link">5</a>
                                </li>

                                <!--Arrow right-->
                                <li class="page-item">
                                    <a class="page-link" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <!--/.Pagination-->

                    </div>

                    <!--Sidebar-->
                    <div class="col-lg-4 z-depth-1" style="padding-top: 20px">

                        <div class="widget-wrapper wow fadeIn" data-wow-delay="0.4s">

                            <h5>Categories</h5>
                            <hr/>
                            <div class="row">
                                <div class="list-group list-group-flush col-md-6">
                                    <a href="#" class="list-group-item border-0 waves-effect waves-classic">Lifestyle  <span class="badge badge-primary badge-pill">10</span></a>
                                    <a href="#" class="list-group-item border-0 waves-effect waves-classic">Music <span class="badge badge-primary badge-pill">14</span></a>
                                    <a href="#" class="list-group-item border-0 waves-effect waves-classic">Travels <span class="badge badge-primary badge-pill">17</span></a>
                                    <a href="#" class="list-group-item border-0 waves-effect waves-classic">Fashion <span class="badge badge-primary badge-pill">8</span></a>
                                    <a href="#" class="list-group-item border-0 waves-effect waves-classic">Parties <span class="badge badge-primary badge-pill">34</span></a>
                                </div>
                                <div class="list-group list-group-flush col-md-6">
                                    <a href="#" class="list-group-item border-0 waves-effect waves-classic">Lifestyle  <span class="badge badge-primary badge-pill">10</span></a>
                                    <a href="#" class="list-group-item border-0 waves-effect waves-classic">Music <span class="badge badge-primary badge-pill">14</span></a>
                                    <a href="#" class="list-group-item border-0 waves-effect waves-classic">Travels <span class="badge badge-primary badge-pill">17</span></a>
                                    <a href="#" class="list-group-item border-0 waves-effect waves-classic">Fashion <span class="badge badge-primary badge-pill">8</span></a>
                                    <a href="#" class="list-group-item border-0 waves-effect waves-classic">Parties <span class="badge badge-primary badge-pill">34</span></a>
                                </div>

                            </div>
                        </div>

                        <div class="widget-wrapper wow fadeIn" data-wow-delay="0.5s">
                            <h5>Tags</h5>
                            <div id="tegcloud">
                                <a href="#" class="badge badge-pill light-blue">Primary</a>
                                <a href="#" class="badge badge-pill green">Primary</a>
                                <a href="#" class="badge badge-pill blue">Primary</a>
                                <a href="#" class="badge badge-pill yellow">Primary</a>
                                <a href="#" class="badge badge-pill red">Primary</a>
                                <a href="#" class="badge badge-pill blue">Primary</a>
                                <a href="#" class="badge badge-pill red">Primary</a>
                                <a href="#" class="badge badge-pill light-blue">Primary</a>
                                <a href="#" class="badge badge-pill green">Primary</a>
                            </div>
                        </div>

                        <div class="widget-wrapper wow fadeIn" data-wow-delay="0.5s">
                            <h5>Recent</h5>
                            <div class="list-group">
                                <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">List group item heading</h5>
                                        <small>3 days ago</small>
                                    </div>
                                    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                                    <small>Donec id elit non mi porta.</small>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">List group item heading</h5>
                                        <small class="text-muted">3 days ago</small>
                                    </div>
                                    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                                    <small class="text-muted">Donec id elit non mi porta.</small>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">List group item heading</h5>
                                        <small class="text-muted">3 days ago</small>
                                    </div>
                                    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                                    <small class="text-muted">Donec id elit non mi porta.</small>
                                </a>
                            </div>

                        </div>

                        <div class="widget-wrapper wow fadeIn" data-wow-delay="0.6s">
                            <div class="card z-depth-0">
                                <div class="card-body">
                                    <h5>Subscribe to our Newsletter</h5>
                                    <p>Once a week we will send you a summary of the most useful news</p>
                                    <div class="md-form">
                                        <i class="fa fa-user prefix grey-text"></i>
                                        <input type="text" id="form1" class="form-control">
                                        <label for="form1">Your name</label>
                                    </div>
                                    <div class="md-form">
                                        <i class="fa fa-envelope prefix grey-text"></i>
                                        <input type="text" id="form2" class="form-control">
                                        <label for="form2">Your email</label>
                                    </div>
                                    <button class="btn btn-blue btn-md">Submit</button>

                                </div>
                            </div>
                        </div>

                        <!-- Archieve -->
                        <section class="wow fadeIn" data-wow-delay="0.4s">
                            <h5>Archive</h5>
                            <!--List-->
                            <ul class="list mt-3">
                                <li>
                                    <h6 class="">
                                        <a href="#!" class="grey-text">August 2016</a>
                                    </h6>
                                </li>
                                <li>
                                    <h6 class="">
                                        <a href="#!" class="grey-text">July 2016</a>
                                    </h6>
                                </li>
                                <li>
                                    <h6 class="">
                                        <a href="#!" class="grey-text">June 2016</a>
                                    </h6>
                                </li>
                                <li>
                                    <h6 class="">
                                        <a href="#!" class="grey-text">May 2016</a>
                                    </h6>
                                </li>
                                <li>
                                    <h6 class="">
                                        <a href="#!" class="grey-text">April 2016</a>
                                    </h6>
                                </li>
                                <li>
                                    <h6 class="">
                                        <a href="#!" class="grey-text">March 2016</a>
                                    </h6>
                                </li>
                                <li>
                                    <h6 class="mb-4">
                                        <a href="#!" class="grey-text">Febuary 2016</a>
                                    </h6>
                                </li>
                            </ul>
                            <!--List-->

                            <hr>

                        </section>
                        <!-- Archieve -->

                    </div>
                    <!--/.Sidebar-->
                </div>
            </div>
            <!--/.Main layout-->

        </main>

        <!--Footer-->
        <footer class="page-footer center-on-small-only light-blue darken-3">

            <!--Footer links-->
            <div class="container-fluid mx-0 px-0">

                <!--Call to action-->
                <div class="call-to-action">
                    <h4 class="mb-5">Material Design for Bootstrap</h4>
                    <ul>
                        <li>
                            <h5>Get our UI KIT for free</h5>
                        </li>
                        <li>
                            <a target="_blank" href="https://mdbootstrap.com/getting-started/" class="btn btn-outline-white" rel="nofollow">Sign up!</a>
                        </li>
                        <li>
                            <a target="_blank" href="https://mdbootstrap.com/material-design-for-bootstrap/" class="btn btn-pink"
                               rel="nofollow">Learn more</a>
                        </li>
                    </ul>
                </div>
                <!--/.Call to action-->

                <!--Copyright-->
                <div class="footer-copyright">
                    <div class="container-fluid">
                        © 2015 Copyright:
                        <a href="https://www.MDBootstrap.com"> MDBootstrap.com </a>

                    </div>
                </div>
                <!--/.Copyright-->

        </footer>
        <!--/.Footer-->


        <!-- SCRIPTS -->

        <!-- JQuery -->
        <script type="text/javascript" src="{{asset('public/js/jquery-3.1.1.min.js')}}"></script>

        <!-- Bootstrap dropdown -->
        <script type="text/javascript" src="{{asset('public/js/popper.min.js')}}"></script>

        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="{{asset('public/js/bootstrap.min.js')}}"></script>

        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="{{asset('public/js/mdb.min.js')}}"></script>

        <script>
            new WOW().init();
        </script>

    </body>

</html>