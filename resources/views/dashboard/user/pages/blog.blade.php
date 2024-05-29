
@extends('layouts.user.index')
@section('content')

<div class="tp-breadcumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="tp-breadcumb-wrap">
                    <h2>Latest News</h2>
                    <ul>
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li><span>Blog</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="tp-blog-pg-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col col-md-8">
                <div class="tp-tp-blog-content">
                    <div class="post format-standard-image">
                        <div class="entry-media">
                            <img src="{{asset('images/pth.avif')}}" alt>
                        </div>
                        <ul class="entry-meta">
                            <li><a href="#"><img src="{{asset('images/admin.jpg')}}" alt> By Admin</a></li>
                            <li><a href="#"><i class="bi bi-calendar3"></i> Sep 25,2021</a></li>
                            <li><a href="#"><i class="bi bi-suit-heart" style="color:red;"></i> 35</a></li>
                        </ul>
                        <h3><a href="#">Help the helpless who need you.</a></h3>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. </p>
                        <a href="{{route('singleBlog')}}" class="read-more">Read More...</a>
                    </div>
                    <div class="post format-video">
                        <div class="entry-media video-holder">
                            <img src="{{asset('images/pth.avif')}}"alt>
                            <a href="https://www.youtube.com/embed/iSbzh0r9IV4?autoplay=1" class="video-btn" data-type="iframe">
                                <i class="fi flaticon-play-button-2"></i>
                            </a>
                        </div>
                        <ul class="entry-meta">
                            <li><a href="#"><img src="{{asset('images/admin.jpg')}}" alt> By Admin</a></li>
                            <li><a href="#"><i class="bi bi-calendar3"></i> Sep 25,2021</a></li>
                            <li><a href="#"><i class="bi bi-suit-heart" style="color:red;"></i> 35</a></li>
                        </ul>
                        <h3><a href="#">They are waiting for your help.</a></h3>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. </p>
                        <a href="{{route('singleBlog')}}"class="read-more">Read More...</a>
                    </div>
                    <div class="post format-gallery">
                        <div class="entry-media post-slider">
                            <img src="{{asset('images/pth.avif')}}" alt>
                            <img src="{{asset('images/pth.avif')}}" alt>
                        </div>
                        <ul class="entry-meta">
                            <li><a href="#"><img src="{{asset('images/admin.jpg')}}" alt> By Admin</a></li>
                            <li><a href="#"><i class="bi bi-calendar3"></i> Sep 25,2021</a></li>
                            <li><a href="#"><i class="bi bi-suit-heart" style="color:red;"></i> 35</a></li>
                        </ul>
                        <h3><a href="#">They are waiting for your help.</a></h3>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. </p>
                        <a href="{{route('singleBlog')}}" class="read-more">Read More...</a>
                    </div>
                    <div class="post format-quote">
                        <ul class="entry-meta">
                            <li><a href="#"><img src="{{asset('images/admin.jpg')}}" alt> By Admin</a></li>
                            <li><a href="#"><i class="bi bi-calendar3"></i> Sep 25,2021</a></li>
                            <li><a href="#"><i class="bi bi-suit-heart" style="color:red;"></i> 35</a></li>
                        </ul>
                        <h3><a href="#">They are waiting for your help.</a></h3>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. </p>
                    </div>
                    <div class="pagination-wrapper pagination-wrapper-left">
                        <ul class="pg-pagination">
                            <li>
                                <a href="#" aria-label="Previous">
                            <i class="bi bi-arrow-left"></i>
                                </a>
                            </li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li>
                                <a href="#" aria-label="Next">
                                    <i class="fi ti-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col col-md-4">
                <div class="tp-blog-sidebar">
                    <div class="widget search-widget">
                        <h3>Search Here</h3>
                        <form>
                            <div>
                                <input type="text" class="form-control" placeholder="Search Post..">
                                <button type="submit"><i class="ti-search"></i></button>
                            </div>
                        </form>
                    </div>
                    <div class="widget category-widget">
                        <h3>Categories</h3>
                        <ul>
                            <li><a href="#">Helping Poor</a></li>
                            <li><a href="#">Water Problem</a></li>
                            <li><a href="#">Charity</a></li>
                            <li><a href="#">Medical Campain</a></li>
                            <li><a href="#">Free Food</a></li>
                        </ul>
                    </div>
                    <div class="widget recent-post-widget">
                        <h3>Recent posts</h3>
                        <div class="posts">
                            <div class="post">
                                <div class="img-holder">
                                    <img src="{{asset('images/pth.avif')}}" alt>
                                </div>
                                <div class="details">
                                    <h4><a href="{{route('singleBlog')}}">Many Children are suffering a lot for food.</a></h4>
                                    <span class="date">22 Sep 2021</span>
                                </div>
                            </div>
                            <div class="post">
                                <div class="img-holder">
                                    <img src="{{asset('images/pth.avif')}}" alt>
                                </div>
                                <div class="details">
                                    <h4><a href="{{route('singleBlog')}}">Be kind for the poor people and the kids.</a></h4>
                                    <span class="date">22 Sep 2021</span>
                                </div>
                            </div>
                            <div class="post">
                                <div class="img-holder">
                                    <img src="{{asset('images/pth.avif')}}" alt>
                                </div>
                                <div class="details">
                                    <h4><a href="{{route('singleBlog')}}">Be soft and kind for the poor people.</a></h4>
                                    <span class="date">22 Sep 2021</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="widget tag-widget">
                        <h3>Tags</h3>
                        <ul>
                            <li><a href="#">Donations</a></li>
                            <li><a href="#">Charity</a></li>
                            <li><a href="#">Help</a></li>
                            <li><a href="#">Non Profit</a></li>
                            <li><a href="#">Poor People</a></li>
                            <li><a href="#">Helping Hand</a></li>
                            <li><a href="#">Video</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end container -->
</section>
<!-- end tp-blog-pg-section -->
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

    @endsection