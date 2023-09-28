@extends('layouts.index')
@section('content')

<div class="tp-breadcumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="tp-breadcumb-wrap">
                    <h2>Become a Volunteer</h2>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><span>Volunteer</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- .tp-breadcumb-area end -->
<!-- volunteer-area-start -->
<div class="volunteer-area ">
    <div class="volunteer-wrap section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="section-title section-title2 text-center">
                        <div class="thumb-text">
                            <span>Volunteer</span>
                        </div>
                        <h2>Become a Volunteer</h2>
                        <p>It is a long established fact that reader distracted by the the readable content off page looking at its layout point.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="volunteer-item">
                        <div class="volunteer-img-wrap">
                            <div class="volunter-img">
                                <img src="assets/images/volunteer.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="volunteer-contact">
                        <div class="volunteer-contact-form">
                            <form method="post" class="contact-validation-active" id="contact-form">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group">
                                        <input type="text" class="form-control" name="name" id="name" placeholder="First Name">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group clearfix">
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group">
                                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group form-group-in">
                                        <label for="file">Upload Your CV</label>
                                        <input id="file" type="file" class="form-control" name="file">
                                        <i class="ti-cloud-up"></i>
                                    </div>
                                    <div class="col-lg-12 col-12 form-group">
                                        <textarea class="form-control" name="note" id="note" placeholder="Case Description..."></textarea>
                                    </div>
                                    <div class="submit-area col-lg-12 col-12">
                                        <button type="submit" class="theme-btn submit-btn">Send Message</button>
                                        <div id="loader">
                                            <i class="ti-reload"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix error-handling-messages">
                                    <div id="success">Thank you</div>
                                    <div id="error"> Error occurred while sending email. Please try again later. </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- volunteer-area-end -->
<!-- start team-section -->
<section class="team-section v2 section-padding ">
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
                            <h3><a href="volunteer.html">Devin Robertson</a></h3>
                            <p>CEO & Founder</p>
                        </div>
                    </div>
                    <div class="grid">
                        <div class="img-holder">
                            <img src="assets/images/team/team-2.jpg" alt>
                        </div>
                        <div class="details">
                            <h3><a href="volunteer.html">Rickey Goodman</a></h3>
                            <p>Volunteer</p>
                        </div>
                    </div>
                    <div class="grid">
                        <div class="img-holder">
                            <img src="assets/images/team/team-3.jpg" alt>
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