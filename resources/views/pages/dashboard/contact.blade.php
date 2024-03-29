
@extends('layouts.user.index')
@section('content')
<div class="tp-breadcumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="tp-breadcumb-wrap">
                    <h2>Contact Us</h2>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><span>Contact</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- .tp-breadcumb-area end -->
<!-- start contact-pg-contact-section -->
<section class="contact-pg-contact-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col col-md-6">
                <div class="section-title-s3 section-title-s5">
                    <h2>Our Contacts</h2>
                </div>
                <div class="contact-details">
                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. </p>
                    <ul>
                        <li>
                            <div class="icon">
                                <i class="ti-location-pin"></i>
                            </div>
                            <h5>Our Location</h5>
                            <p>245 King Street, Touterie Victoria 8520 Australia</p>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="ti-mobile"></i>
                            </div>
                            <h5>Phone</h5>
                            <p>0-123-456-7890</p>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="ti-email"></i>
                            </div>
                            <h5>Email</h5>
                            <p>sample@gmail.com</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col col-md-6">
                <div class="contact-form-area">
                    <div class="section-title-s3 section-title-s5">
                        <h2>Quick Contact Form</h2>
                    </div>
                    <div class="contact-form">
                        <form method="post" class="contact-validation-active" id="contact-form">
                            <div>
                                <input type="text" class="form-control"  name="name" id="name" placeholder="Name*">
                            </div>
                            <div>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email*">
                            </div>
                            <div>
                                <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone*">
                            </div>
                            <div>
                                <input type="text" class="form-control"  name="address" id="address" placeholder="Address*">
                            </div>
                            <div class="comment-area">
                                <textarea  name="note"  id="note" placeholder="Case description*"></textarea>
                            </div>
                            <div class="submit-area">
                                <button type="submit" class="theme-btn">Submit Now</button>
                                <div id="loader">
                                    <i class="ti-reload"></i>
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

        <div class="row">
            <div class="col col-xs-12">
                <div class="contact-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.9147703055!2d-74.11976314309273!3d40.69740344223377!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sbd!4v1547528325671" allowfullscreen></iframe>
                </div>                        
            </div>
        </div>
    </div> <!-- end container -->
</section>
<!-- end contact-pg-contact-section -->
<!-- news-letter-section start-->
<section class="news-letter-section s2">
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