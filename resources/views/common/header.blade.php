<header>

    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light blue-grey lighten-5 fixed-top scrolling-navbar">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{asset('public/img/mdb-transparent.png')}}" height="30" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
                        <a class="nav-link" href="{{URL::to('/')}}">Blog
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item {{ Request::is('about') ? 'active' : '' }}">
                        <a class="nav-link" href="{{URL::to('/about')}}">About</a>
                    </li>
                    <li class="nav-item {{ Request::is('contact') ? 'active' : '' }}">
                        <a class="nav-link" href="{{URL::to('/contact')}}">Contact</a>
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
                <ul class="navbar-nav ml-auto nav-flex-icons">
                    <li class="nav-item">
                        <a class="btn btn-link waves-effect waves-light" href="{{url('login')}}">
                            <i class="fa fa-sign-in"></i> <strong>Login</strong>
                        </a>
                    </li>
                    
<!--                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle waves-effect waves-light" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            <i class="fa fa-user"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-danger" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item waves-effect waves-light" href="#">Action</a>
                            <a class="dropdown-item waves-effect waves-light" href="#">Another action</a>
                            <a class="dropdown-item waves-effect waves-light" href="#">Something else here</a>
                        </div>
                    </li>-->
                </ul>

                
            </div>
        </div>
    </nav>
    <!--/.Navbar-->

</header>