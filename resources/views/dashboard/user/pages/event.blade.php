@extends('layouts.user.index')
@section('content')

<div class="tp-breadcumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="tp-breadcumb-wrap">
                    <h2>Our Event</h2>
                    <ul>
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li><span>Event</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- .tp-breadcumb-area end -->

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
                            <img src="{{asset('images/pth.avif')}}" alt>
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
                            <img src="{{asset('images/pth.avif')}}" alt>
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
                            <img src="{{asset('images/pth.avif')}}" alt>
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
<!-- .tp-counter-area start -->
<div class="tp-counter-area v2">
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
<!-- news-letter-section start-->
<section class="news-letter-section s2 ds2">
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
    @endsection