
    @extends('layouts.index')
@section('content')

    <!-- start page-wrapper -->
     <div class="page-wrapper">
        <!-- start preloader -->
        {{-- <div class="preloader">
            <div class="sk-folding-cube">
                <div class="sk-cube1 sk-cube"></div>
                <div class="sk-cube2 sk-cube"></div>
                <div class="sk-cube4 sk-cube"></div>
                <div class="sk-cube3 sk-cube"></div>
            </div>
        </div>  --}}
        <!-- end preloader -->
      
        <!-- start of hero -->
        <section class="hero hero-style-1">
            <div class="hero-slider">
                <div class="slide">
                    <div class="container">
                        <img src="{{asset('images/pho.avif')}}" alt class="slider-bg">
                        <div class="row">
                            <div class="col col-md-6 slide-caption">
                                <div class="slide-title">
                                    <h2>Let’s be Kind for <span>Children</span></h2>
                                </div>
                                <div class="slide-subtitle">
                                    <p>High Quality Charity Theme in Envato Market.</p>
                                    <p>You Can Satisfied Yourself By Helping.</p>
                                </div>
                                <div class="btns">
                                    <a href="{{route('donate')}}" class="theme-btn">Donate Now</a>
                                    <a href="{{route('about')}}" class="theme-btn-s2">Know More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </section>
       
        <!--features-features end -->
        <!-- about-area start-->
        <div class="about-style-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-12">
                        <div class="about-img">
                            <img src="{{asset('images/photo.avif')}}" alt="">
                            <div class="video-btn">
                                <ul>
                                    <li><a href="https://www.youtube.com/embed/uQBL7pSAXR8?autoplay=1" class="video-btn" data-type="iframe">

                                            <i class="bi bi-play-circle" style="font-size: 30px;color: rgb(12, 4, 114);"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-12">
                        <div class="about-content">
                            <div class="section-title">
                                <h2>About Us</h2>
                            </div>
                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at ,sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum</p>
                            <p> and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum,Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                            <div class="btns">
                                <div><a class="theme-btn" href="{{route('about')}}">More About Us..</a></div>
                            </div>
                            <div class="signature">
                                <img src="{{asset('images/img-1.jpg')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- about-area end-->
        <!-- case-area-start -->
        <div class="case-area section-padding">
            <div class="container">
                <div class="col-md-6 col-md-offset-3">
                    <div class="section-title text-center">
                        <div class="thumb-text">
                            <span>CAUSES</span>
                        </div>
                        <h2>Latest Caused of Sadakat.</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="cause-item">
                            <div class="cause-top">
                                <div class="cause-img">
                                    <img src="{{asset('images/pe.jpeg')}}" alt="">
                                    <div class="case-btn">
                                        <a href="{{route('donate')}}" class="theme-btn">Donate Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="cause-text">
                                <ul>
                                    <li><a href="#">GOAL : $9860</a></li>
                                    <li><a href="#">RISED : $768</a></li>
                                </ul>
                                <h3><a href="causes.html">Financial Help for Poor Families</a></h3>
                                <p>It is a long established fact that a reader will be distracted.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="cause-item">
                            <div class="cause-top">
                                <div class="cause-img">
                                    <img src="{{asset('images/p78.avif')}}" alt="">
                                    <div class="case-btn">
                                        <a href="{{route('donate')}}" class="theme-btn">Donate Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="cause-text">
                                <ul>
                                    <li><a href="#">GOAL : $9860</a></li>
                                    <li><a href="#">RISED : $768</a></li>
                                </ul>
                                <h3><a href="{{route('cause')}}">Education for Poor Children</a></h3>
                                <p>It is a long established fact that a reader will be distracted.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="cause-item">
                            <div class="cause-top">
                                <div class="cause-img">
                                    <img src="{{asset('images/pth.avif')}}" alt="">
                                    <div class="case-btn">
                                        <a href="{{route('donate')}}" class="theme-btn">Donate Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="cause-text">
                                <ul>
                                    <li><a href="#">GOAL : $9860</a></li>
                                    <li><a href="#">RISED : $768</a></li>
                                </ul>
                                <h3><a href="causes.html">Send Child to School for a Year</a></h3>
                                <p>It is a long established fact that a reader will be distracted.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="cause-item">
                            <div class="cause-top">
                                <div class="cause-img">
                                    <img src="{{asset('images/pho.avif')}}" alt="">
                                    <div class="case-btn">
                                        <a href="{{route('donate')}}" class="theme-btn">Donate Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="cause-text">
                                <ul>
                                    <li><a href="#">GOAL : $9860</a></li>
                                    <li><a href="#">RISED : $768</a></li>
                                </ul>
                                <h3><a href="causes.html">Food And Home for Children</a></h3>
                                <p>It is a long established fact that a reader will be distracted.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="cause-item">
                            <div class="cause-top">
                                <div class="cause-img">
                                    <img src="{{asset('images/photo-1.avif')}}" alt="">
                                    <div class="case-btn">
                                        <a href="{{route('donate')}}" class="theme-btn">Donate Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="cause-text">
                                <ul>
                                    <li><a href="#">GOAL : $9860</a></li>
                                    <li><a href="#">RISED : $768</a></li>
                                </ul>
                                <h3><a href="{{route('cause')}}">Pure Water For The World</a></h3>
                                <p>It is a long established fact that a reader will be distracted.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="cause-item">
                            <div class="cause-top">
                                <div class="cause-img">
                                    <img src="{{asset('images/pex.jpeg')}}" alt="">
                                    <div class="case-btn">
                                        <a href="{{route('donate')}}" class="theme-btn">Donate Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="cause-text">
                                <ul>
                                    <li><a href="#">GOAL : $9860</a></li>
                                    <li><a href="#">RISED : $768</a></li>
                                </ul>
                                <h3><a href="{{route('cause')}}">Recycling For Charity</a></h3>
                                <p>It is a long established fact that a reader will be distracted.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- case-area-end -->
        <!-- .tp-counter-area start -->
        <div class="tp-counter-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tp-counter-grids">
                            <div class="grid">
                                <div>
                                    <h2><span class="odometer" data-count="6200">00</span>+</h2>
                                </div>
                                <p>Donation</p>
                            </div>
                            <div class="grid">
                                <div>
                                    <h2><span class="odometer" data-count="80">00</span>+</h2>
                                </div>
                                <p>Fund Raised</p>
                            </div>
                            <div class="grid">
                                <div>
                                    <h2><span class="odometer" data-count="245">00</span>+</h2>
                                </div>
                                <p>Volunteers</p>
                            </div>
                            <div class="grid">
                                <div>
                                    <h2><span class="odometer" data-count="605">00</span>+</h2>
                                </div>
                                <p>Projects</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- .tp-counter-area end -->
        <!--Start project area-->
        <section id="protfolio" class="gallery-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12 sortable-gallery">
                        <div class="gallery-filters">
                            <div class="section-title">
                                <h2>Our Gallery</h2>
                            </div>
                            <ul>
                                <li><a data-filter="*" href="#" class="current">All</a></li>
                                <li><a data-filter=".Child" href="#">Child</a></li>
                                <li><a data-filter=".Charity" href="#">Charity</a></li>
                                <li><a data-filter=".Volunteering" href="#">Volunteering</a></li>
                                <li><a data-filter=".Sponsorship" href="#">Sponsorship</a></li>
                            </ul>
                        </div>
                        <div class="gallery-container gallery-fancybox masonry-gallery">
                            <div class="grid Charity Volunteering Sponsorship">
                                <a href="{{asset('images/homeless.jpg')}}" class="fancybox" data-fancybox-group="gall-1">
                                    <img src="{{asset('images/p.webp')}}" alt class="img img-responsive">
                                    <div class="icon">
                                        <div class="parallax-wrap">
                                            <div class="parallax-element">
                                                <i class="ti-plus"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="grid Child Charity Volunteering">
                                <a href="{{asset('images/p78.avif')}}" class="fancybox" data-fancybox-group="gall-1">
                                    <img src="{{asset('images/pe.jpeg')}}" alt class="img img-responsive">
                                    <div class="icon">
                                        <div class="parallax-wrap">
                                            <div class="parallax-element">
                                                <i class="ti-plus"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="grid Charity Sponsorship">
                                <a href="{{asset('images/pex.jpeg')}}" class="fancybox" data-fancybox-group="gall-1">
                                    <img src="{{asset('images/pexels-ph.webp')}}" alt class="img img-responsive">
                                    <div class="icon">
                                        <div class="parallax-wrap">
                                            <div class="parallax-element">
                                                <i class="ti-plus"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="grid Child Volunteering">
                                <a href="{{asset('images/pexels.jpeg')}}" class="fancybox" data-fancybox-group="gall-1">
                                    <img src="{{asset('images/pho.avif')}}" alt class="img img-responsive">
                                    <div class="icon">
                                        <div class="parallax-wrap">
                                            <div class="parallax-element">
                                                <i class="ti-plus"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="grid Charity Sponsorship">
                                <a href="{{asset('images/phot.avif')}}" class="fancybox" data-fancybox-group="gall-1">
                                    <img src="{{asset('images/photo-15.avif')}}" alt class="img img-responsive">
                                    <div class="icon">
                                        <div class="parallax-wrap">
                                            <div class="parallax-element">
                                                <i class="ti-plus"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="grid Child Charity Sponsorship Volunteering">
                                <a href="{{asset('images/photoe1.avif')}}" class="fancybox" data-fancybox-group="gall-1">
                                    <img src="{{asset('images/pth.avif')}}" alt class="img img-responsive">
                                    <div class="icon">
                                        <div class="parallax-wrap">
                                            <div class="parallax-element">
                                                <i class="ti-plus"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div> <!-- end row -->
            </div>
        </section>
        <!--End project area-->
        <!-- start team-section -->
        <section class="team-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-6 col-lg-offset-3">
                        <div class="section-title text-center">
                            <span>Meet Our Team</span>
                            <h2>Our Expert Volunteer</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="team-grids clearfix">
                            <div class="grid">
                                <div class="img-holder">
                                    <img src="{{asset('images/pexels-photo-6347743.webp')}}" alt>
                                </div>
                                <div class="details">
                                    <h3><a href="volunteer.html">Devin Robertson</a></h3>
                                    <p>CEO & Founder</p>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="img-holder">
                                    <img src="{{asset('images/pexels-photo-6347743.webp')}}" alt>
                                </div>
                                <div class="details">
                                    <h3><a href="volunteer.html">Rickey Goodman</a></h3>
                                    <p>Volunteer</p>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="img-holder">
                                    <img src="{{asset('images/pexels-photo-6347743.webp')}}" alt>
                                </div>
                                <div class="details">
                                    <h3><a href="volunteer.html">Jean Washington</a></h3>
                                    <p>Volunteer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end team-section -->
        <!-- start event-section -->
        <section class="event-section section-padding">
            <div class="container">
                <div class="section-title text-center">
                    <span>Our Events</span>
                    <h2>Upcoming Events</h2>
                </div>
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="event-grids clearfix">
                            <div class="grid">
                                <div class="img-holder">
                                    <img src="{{asset('images/pe2d.avif')}}" alt>
                                </div>
                                <div class="details">
                                    <ul class="entry-meta">
                                        <li><a href="#"><i class="ti-calendar"></i> 20 sep 2018</a></li>
                                        <li><a href="#"><i class="ti-folder"></i> Education</a></li>
                                    </ul>
                                    <h3><a href="{{route('singleEvent')}}">Education for All Children</a></h3>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="img-holder">
                                    <img src="{{asset('images/pe2d.avif')}}" alt>
                                </div>
                                <div class="details">
                                    <ul class="entry-meta">
                                        <li><a href="#"><i class="ti-calendar"></i> 20 sep 2018</a></li>
                                        <li><a href="#"><i class="ti-folder"></i> Food</a></li>
                                    </ul>
                                    <h3><a href="{{route('singleEvent')}}">Food for All Everyone</a></h3>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="img-holder">
                                    <img src="{{asset('images/pe2d.avif')}}" alt>
                                </div>
                                <div class="details">
                                    <ul class="entry-meta">
                                        <li><a href="#"><i class="ti-calendar"></i> 20 sep 2018</a></li>
                                        <li><a href="#"><i class="ti-folder"></i> Treatment</a></li>
                                    </ul>
                                    <h3><a href="{{route('singleEvent')}}">Free Treatment</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end event-section -->
        <!-- tp-cta-area start -->
        <div class="tp-cta-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tp-cta-text">
                            <h2>You Can Help The Poor With Us</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse </p>
                            <div class="btns">
                                <a href="{{route('donate')}}"class="theme-btn">Donate Now</a>
                                <a href="{{route('volunteer')}}" class="theme-btn-s2">Join Us Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- tp-cta-area end -->
        <!-- start blog-section -->
        <section class="blog-section section-padding">
            <div class="container">
                <div class="col-l2">
                    <div class="section-title text-center">
                        <span>From Our Blog</span>
                        <h2>Latest News</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="blog-grids clearfix">
                            <div class="grid">
                                <div class="entry-media">
                                    <img src="{{asset('images/pe2d.avif')}}" alt="">
                                </div>
                                <div class="details">
                                    <h3><a href="{{route('singleCause')}}">Best and less published their supplier lists.</a></h3>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p>
                                    <ul class="entry-meta">
                                        <li>
                                            <img src="{{asset('images/7.jpg')}}" alt="">
                                            By <a href="#">Lily Anne</a>
                                        </li>
                                        <li>Feb 12,2021</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="entry-media">
                                    <img src="{{asset('images/pe2d.avif')}}" alt="">
                                </div>
                                <div class="details">
                                    <h3><a href="{{route('singleCause')}}">Best and less published their supplier lists.</a></h3>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p>
                                    <ul class="entry-meta">
                                        <li>
                                            <img src="{{asset('images/7.jpg')}}" alt="">
                                            By <a href="#">Lily Anne</a>
                                        </li>
                                        <li>Feb 12,2021</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="entry-media">
                                    <img src="{{asset('images/pe2d.avif')}}" alt="">
                                </div>
                                <div class="details">
                                    <h3><a href="{{route('singleCause')}}">Best and less published their supplier lists.</a></h3>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p>
                                    <ul class="entry-meta">
                                        <li>
                                            <img src="{{asset('images/7.jpg')}}" alt="">
                                            By <a href="#">Lily Anne</a>
                                        </li>
                                        <li>Feb 12,2021</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end blog-section -->
        <!-- news-letter-section start-->
        <section class="news-letter-section">
            <div class="container">
                <div class="news-letter-wrap">
                    <div class="row">
                        <div class="col col-lg-10 col-lg-offset-1 col-md-8 col-md-offset-2">
                            <div class="newsletter">
                                <h3>Subscribe our Newsletter</h3>
                                <p>Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas.</p>
                                <div class="newsletter-form">
                                    <form>
                                        <div>
                                            <input type="text" placeholder="Enter Your Email" class="form-control">
                                            <button class="bigCursor" type="submit">Subscribe</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
     </div>
     <div class="theme-change-btn">
        <p id="change-theme-btn">
           {{-- <span class="cng-btn-1">Light <i class="ti-palette"></i></span>
           <span class="cng-btn-2">Dark  <i class="ti-palette"></i></span> --}}
        </p>
   </div>

   {{-- <div id="magic-cursor">
       <div id="ball">
           <div id="ball-drag-x"></div>
           <div id="ball-drag-y"></div>
           <div id="ball-loader"></div>
       </div> --}}
   </div>
   @endsection
       
      