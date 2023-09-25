  <!-- Start header -->
  <header id="header" class="tp-site-header tp-header-style-2">
    <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col col-md-6 col-sm-7 col-12">
                    <div class="contact-intro">
                        {{-- <ul>
                            <li><i class="bi bi-telephone"></i> +000123456789</li>
                            <li><i class="bi bi-envelope"></i> sadakat@gmail.com</li>
                        </ul> --}}
                    </div>
                </div>
                <div class="col col-md-6 col-sm-5 col-12">
                    <div class="contact-info">
                        <ul>
                            <li><a href="{{route('login')}}">login</a></li>
                            <li><a href="{{route('register')}}">Sign Up</a></li>
                            <li><a class="theme-btn" href="donate.html">Donate Now</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end topbar -->
    <nav class="navigation navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="open-btn">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img src="{{asset('images/logo.png')}}" alt="logo"></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse navbar-right navigation-holder">
                <button class="close-navbar"><i class="ti-close"></i></button>
                <ul class="nav navbar-nav">
                    <li class="menu-item-has-children">
                        <a href="#">Home</a>
                        <ul class="sub-menu">
                            <li><a href="index.html">Home style 1</a></li>
                        
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Causes</a>
                        <ul class="sub-menu">
                            <li><a href="causes.html">Causes</a></li>
                            {{-- <li><a href="causes-single.html">Causes Single</a></li> --}}
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Event</a>
                        <ul class="sub-menu">
                            <li><a href="event.html">Event</a></li>
                            {{-- <li><a href="event-single.html">Event Single</a></li> --}}
                        </ul>
                    </li>
                    <li><a href="event.html">Event</a></li>
                    <li class="menu-item-has-children">
                        <a href="#">Pages</a>
                        <ul class="sub-menu">
                            <li><a href="about.html">About</a></li>
                            <li><a href="donate.html">Donate</a></li>
                            <li><a href="volunteer.html">Volunteer</a></li>
                            <li><a href="error.html">404 Page</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Blog</a>
                        <ul class="sub-menu">
                            <li><a href="blog.html">Blog right sidebar</a></li>
                            <li><a href="blog-left.html">Blog left sidebar</a></li>
                            <li><a href="blog-fulwidth.html">Blog fullwidth</a></li>
                            <li class="menu-item-has-children">
                                <a href="#">Blog details</a>
                                <ul class="sub-menu">
                                    <li><a href="blog-single.html">Blog details right sidebar</a></li>
                                    <li><a href="blog-single-left.html">Blog details left sidebar</a></li>
                                    <li><a href="blog-single-fluid.html">Blog details fullwidth</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </div><!-- end of nav-collapse -->
            <div class="cart-search-contact">
                {{-- <div class="mini-cart">
                    <button class="cart-toggle-btn"> <i class="bi bi-cart3"></i><span class="cart-count">02</span></button>
                    <div class="mini-cart-content">
                        <div class="mini-cart-title">
                            <p>Shopping Cart</p>
                        </div>
                        <div class="mini-cart-items">
                            <div class="mini-cart-item clearfix">
                                <div class="mini-cart-item-image">
                                    <a href="#"><img src="{{asset('images/photo-1.avif')}}" alt="Hoodie with zipper"></a>
                                </div>
                                <div class="mini-cart-item-des">
                                    <a href="#">Hoodie with zipper</a>
                                    <span class="mini-cart-item-price">$25.15</span>
                                    <span class="mini-cart-item-quantity">x 1</span>
                                </div>
                            </div>
                            <div class="mini-cart-item clearfix">
                                <div class="mini-cart-item-image">
                                    <a href="#"><img src="{{asset('images/homeless.jpg')}}" alt="Hoodie with zipper"></a>
                                </div>
                                <div class="mini-cart-item-des">
                                    <a href="#">Hoodie with zipper</a>
                                    <span class="mini-cart-item-price">$12.99</span>
                                    <span class="mini-cart-item-quantity">x 2</span>
                                </div>
                            </div>
                        </div>
                        <div class="mini-cart-action clearfix">
                            <span class="mini-checkout-price">$255.12</span>
                            <a href="" class="theme-btn-s4">View Cart</a>
                        </div>
                    </div>
                </div> --}}
                <div class="header-search-form-wrapper">
                    <button class="search-toggle-btn"><i class="bi bi-search"></i></button>
                    <div class="header-search-form">
                        <form>
                            <div>
                                <input type="text" class="form-control" placeholder="Search here...">
                                <button type="submit"><i class="bi bi-search"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- end of container -->
    </nav>
</header>
<!-- end of header -->