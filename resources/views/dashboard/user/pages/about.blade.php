@extends('layouts.index')
@section('content')

<div class="tp-breadcumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="tp-breadcumb-wrap">
                    <h2>About Us</h2>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><span>About</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- .tp-breadcumb-area end -->
<!-- about-area start-->
<div class="about-style-2">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 col-12">
                <div class="about-img">
                   <img src="{{asset('images/vo.jpg')}}" alt=""> 
                    <div class="video-btn">
                        <ul>
                            <li><a href="https://www.youtube.com/embed/uQBL7pSAXR8?autoplay=1" class="video-btn" data-type="iframe">
                                <i class="bi bi-google-play" style="font-size: 50px;color: rgb(114, 70, 4);"></i>
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
                        {{-- <div><a class="theme-btn" href="about.html">More About Us..</a></div> --}}
                    </div>
                    <div class="signature">
                        <img src="{{asset('images/img-1.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- about-area end-->


<!--features start -->
<div class="features-area features-area-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="features-item-2">
                    <div class="features-icon">
                        <i class="fi flaticon-salad"></i>
                    </div>
                    <div class="features-content">
                        <p>Health For</p>
                        <h3>Healthy Food</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="features-item-2">
                    <div class="features-icon">
                        <i class="fi flaticon-school"></i>
                    </div>
                    <div class="features-content">
                        <p>Get Free</p>
                        <h3>Pure Education</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="features-item-2">
                    <div class="features-icon">
                        <i class="fi flaticon-medicine"></i>
                    </div>
                    <div class="features-content">
                        <p>Get Free</p>
                        <h3>Medical Facilities</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--features-features end -->
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
                        <h3><a href="{{route('cause')}}">Financial Help for Poor Families</a></h3>
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
                        <h3><a href="{{route('cause')}}">Education for Poor Children</a></h3>
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
                        <h3><a href="{{route('cause')}}">Send Child to School for a Year</a></h3>
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
                        <h3><a href="{{route('cause')}}">Food And Home for Children</a></h3>
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
<!-- start team-section -->
<section class="team-section v2 section-padding">
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
                            <img src="assets/images/team/team-1.jpg" alt>
                        </div>
                        <div class="details">
                            <h3><a href="{{route('volunteer')}}">Devin Robertson</a></h3>
                            <p>CEO & Founder</p>
                        </div>
                    </div>
                    <div class="grid">
                        <div class="img-holder">
                            <img src="assets/images/team/team-2.jpg" alt>
                        </div>
                        <div class="details">
                            <h3><a href="{{route('volunteer')}}">Rickey Goodman</a></h3>
                            <p>Volunteer</p>
                        </div>
                    </div>
                    <div class="grid">
                        <div class="img-holder">
                            <img src="assets/images/team/team-3.jpg" alt>
                        </div>
                        <div class="details">
                            <h3><a href="{{route('volunteer')}}">Jean Washington</a></h3>
                            <p>Volunteer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end container -->
</section>
<!-- end team-section -->
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



@endsection