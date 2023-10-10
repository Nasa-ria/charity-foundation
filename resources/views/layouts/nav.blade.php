  <!-- Start header -->
  <header id="header" class="tp-site-header tp-header-style-2">
    <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col col-md-6 col-sm-7 col-12">
                    <div class="contact-intro">
                    </div>
                </div>
                <div class="col col-md-6 col-sm-5 col-12">
                    <div class="contact-info">
                        <ul>
                            <li><a href="{{route('login')}}">login</a></li>
                            <li><a href="{{route('register')}}">Sign Up</a></li>
                            <li> <a href="{{route('blogform')}}" >blogform</a><li>
                           <li> <a href="{{route('todolist')}}" >todo</a><li>
                            <li><a class="theme-btn" href="{{route('donate')}}">Donate Now</a></li>
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
                        <a href="{{route('home')}}">Home</a>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="{{route('cause')}}">Causes</a>

                    </li>
                    <li class="menu-item-has-children">
                        <a href="{{route('event')}}">Event</a>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="{{route('blog')}}">Blog</a>
                    </li>
                    <li><a href="{{route('contact')}}">Contact</a></li>
                </ul>
            </div><!-- end of nav-collapse -->
            <div class="cart-search-contact">
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