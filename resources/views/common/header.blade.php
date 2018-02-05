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
                        <a class="nav-link" href="{{URL::to('/')}}">Blog
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{URL::to('/about')}}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{URL::to('/contact')}}">Contact</a>
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