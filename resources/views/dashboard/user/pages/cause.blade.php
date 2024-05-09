
@extends('layouts.user.index')
@section('content')
<div class="tp-breadcumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="tp-breadcumb-wrap">
                    <h2>Our Causes</h2>
                    <ul>
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li><span>Causes</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- .tp-breadcumb-area end -->
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
                            <img src="{{asset('images/cas1.png')}}" alt="">
                            <div class="case-btn">
                                <a href="{{route('user.donate')}}" class="theme-btn">Donate Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="cause-text">
                        <ul>
                            <li><a href="#">GOAL : $9860</a></li>
                            <li><a href="#">RISED : $768</a></li>
                        </ul>
                        <h3><a href="{{route('user.singleCause')}}">Financial Help for Poor Families</a></h3>
                        <p>It is a long established fact that a reader will be distracted.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="cause-item">
                    <div class="cause-top">
                        <div class="cause-img">
                            <img src="{{asset('images/cas2.jpg')}}" alt="">
                            <div class="case-btn">
                                <a href="{{route('user.donate')}}" class="theme-btn">Donate Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="cause-text">
                        <ul>
                            <li><a href="#">GOAL : $9860</a></li>
                            <li><a href="#">RISED : $768</a></li>
                        </ul>
                        <h3><a href="{{route('user.singleCause')}}">Education for Poor Children</a></h3>
                        <p>It is a long established fact that a reader will be distracted.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="cause-item">
                    <div class="cause-top">
                        <div class="cause-img">
                            <img src="{{asset('images/cas3 (1).jpg')}}" alt="">
                            <div class="case-btn">
                                <a href="{{route('user.donate')}}" class="theme-btn">Donate Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="cause-text">
                        <ul>
                            <li><a href="#">GOAL : $9860</a></li>
                            <li><a href="#">RISED : $768</a></li>
                        </ul>
                        <h3><a href="{{route('user.singleCause')}}">Send Child to School for a Year</a></h3>
                        <p>It is a long established fact that a reader will be distracted.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="cause-item">
                    <div class="cause-top">
                        <div class="cause-img">
                            <img src="{{asset('images/cas4.jpg')}}"alt="">
                            <div class="case-btn">
                                <a href="{{route('user.donate')}}"class="theme-btn">Donate Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="cause-text">
                        <ul>
                            <li><a href="#">GOAL : $9860</a></li>
                            <li><a href="#">RISED : $768</a></li>
                        </ul>
                        <h3><a href="{{route('user.singleCause')}}">Food And Home for Children</a></h3>
                        <p>It is a long established fact that a reader will be distracted.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="cause-item">
                    <div class="cause-top">
                        <div class="cause-img">
                            <img src="{{asset('images/cas5.jpg')}}" alt="">
                            <div class="case-btn">
                                <a href="{{route('user.donate')}}" class="theme-btn">Donate Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="cause-text">
                        <ul>
                            <li><a href="#">GOAL : $9860</a></li>
                            <li><a href="#">RISED : $768</a></li>
                        </ul>
                        <h3><a href="{{route('user.singleCause')}}">Pure Water For The World</a></h3>
                        <p>It is a long established fact that a reader will be distracted.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="cause-item">
                    <div class="cause-top">
                        <div class="cause-img">
                            <img src="{{asset('images/cas6.jpg')}}"alt="">
                            <div class="case-btn">
                                <a href="{{route('user.donate')}}" class="theme-btn">Donate Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="cause-text">
                        <ul>
                            <li><a href="#">GOAL : $9860</a></li>
                            <li><a href="#">RISED : $768</a></li>
                        </ul>
                        <h3><a href="{{route('user.singleCause')}}">Recycling For Charity</a></h3>
                        <p>It is a long established fact that a reader will be distracted.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- case-area-end --> 
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

<!-- news-letter-section end-->

    <!-- end tp-site-footer -->
</div>
</div>
@endsection
