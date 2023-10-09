@extends('layouts.index')
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
<!-- .tp-breadcumb-area end -->
<!-- start tp-blog-single-section -->
<section class="tp-blog-single-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col col-md-8">
                <div class="tp-tp-blog-content clearfix">
                    <div class="post">
                        <div class="entry-media">
                            <img src="{{asset('images/pth.avif')}}" alt>
                        </div>
                        <ul class="entry-meta">
                            <li><a href="#"><img src="{{asset('images/admin.jpg')}}"alt> By Admin</a></li>
                            <li><a href="#"><i class="bi bi-calendar3"> Sep 25,2021</i></a></li>
                            <li><a href="#"><i class="bi bi-suit-heart" style="color:red;"> 53</i></a></li>
                        </ul>
                        <h2>Help the helpless who need you.</h2>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now.</p>
                        <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now.</p>
                        <blockquote>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. </blockquote>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now.</p>
                        <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now.</p>
                    </div>
                    <div class="tag-share clearfix">
                        <div class="tag">
                            <ul>
                                <li><a href="#">Business</a></li>
                                <li><a href="#">Marketing</a></li>
                                <li><a href="#">SEO</a></li>
                            </ul>
                        </div>
                        <div class="share">
                            <ul>
                                <li><a href="#"><i class="bi bi-facebook"></i></a></li>
                                <li><a href="#"><i class="bi bi-twitter"></i></a></li>
                                <li><a href="#"><i class="bi bi-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div> <!-- end tag-share -->
                    <div class="author-box">
                        <div class="author-avatar">
                            <a href="#" target="_blank"><img src="{{asset('images/admin.jpg')}}"  alt></a>
                        </div>
                        <div class="author-content">
                            <a href="#" class="author-name">Henry Joyes</a>
                            <p>Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised</p>
                            <div class="author-btn">
                                <a href="#">All Post From Author</a>
                            </div>
                        </div>
                    </div> <!-- end author-box -->
                    <div class="more-posts clearfix">
                        <div class="previous-post">
                            <a href="#">
                                <span class="post-control-link">Previous</span>
                            </a>
                        </div>
                        <div class="next-post">
                            <a href="0">
                                <span class="post-control-link">Next post</span>
                            </a>
                        </div>
                    </div> <!-- end more-posts -->
                </div>
                <div class="tp-blog-single-section wrap-even">
                    <div class="comments-area">
                        <div class="comments-section">
                            <h3 class="comments-title">Comments</h3>
                            <ol class="comments">
                                <li class="comment even thread-even depth-1" id="comment-1">
                                    <div id="div-comment-1">
                                        <div class="comment-theme">
                                            <div class="comment-image"><img src="{{asset('images/img-3.jpg')}}" alt></div>
                                        </div>
                                        <div class="comment-main-area">
                                            <div class="comment-wrapper">
                                                <div class="comments-meta">
                                                    <h4>John Abraham <span class="comments-date">Octobor 28,2018 At 9.00am</span></h4>
                                                </div>
                                                <div class="comment-area">
                                                    <p>I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, </p>
                                                    <div class="comments-reply">
                                                        <a class="comment-reply-link" href="#"><i class="bi bi-reply" aria-hidden="true"></i><span>Reply</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="children">
                                        <li class="comment">
                                            <div>
                                                <div class="comment-theme">
                                                    <div class="comment-image"><img src="{{asset('images/img-3.jpg')}}"  alt></div>
                                                </div>
                                                <div class="comment-main-area">
                                                    <div class="comment-wrapper">
                                                        <div class="comments-meta">
                                                            <h4>Lily Watson <span class="comments-date">Octobor 28,2018 At 9.00am</span></h4>
                                                        </div>
                                                        <div class="comment-area">
                                                            <p>I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, </p>
                                                            <div class="comments-reply">
                                                                <a class="comment-reply-link" href="#"><span><i class="bi bi-reply" aria-hidden="true"></i> Reply</span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul>
                                                <li class="comment">
                                                    <div>
                                                        <div class="comment-theme">
                                                            <div class="comment-image"><img src="{{asset('images/img-3.jpg')}}"  alt></div>
                                                        </div>
                                                        <div class="comment-main-area">
                                                            <div class="comment-wrapper">
                                                                <div class="comments-meta">
                                                                    <h4>John Abraham <span class="comments-date">Octobor 28,2018 At 9.00am</span></h4>
                                                                </div>
                                                                <div class="comment-area">
                                                                    <p>I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, </p>
                                                                    <div class="comments-reply">
                                                                        <a class="comment-reply-link" href="#"><span><i class="bi bi-reply" aria-hidden="true"></i> Reply</span></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ol>
                        </div> <!-- end comments-section -->
                    </div> <!-- end comments-area -->
                    <div class="comment-respond">
                        <h3 class="comment-reply-title">Leave a Comment</h3>
                        <form method="post" id="commentform" class="comment-form">
                            <div class="form-inputs">
                                <input placeholder="Name" type="text">
                          
                            </div>
                            <div class="form-textarea">
                                <textarea id="comment" placeholder="Write Your Comments..."></textarea>
                            </div>
                            <div class="form-submit">
                                <input id="submit" value="Reply" type="submit">
                            </div>
                        </form>
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
                                    <h4><a href="#">Many Children are suffering a lot for food.</a></h4>
                                    <span class="date">22 Sep 2021</span>
                                </div>
                            </div>
                            <div class="post">
                                <div class="img-holder">
                                    <img src="{{asset('images/pth.avif')}}" alt>
                                </div>
                                <div class="details">
                                    <h4><a href="#">Be kind for the poor people and the kids.</a></h4>
                                    <span class="date">22 Sep 2021</span>
                                </div>
                            </div>
                            <div class="post">
                                <div class="img-holder">
                                    <img src="{{asset('images/pth.avif')}}" alt>
                                </div>
                                <div class="details">
                                    <h4><a href="#">Be soft and kind for the poor people.</a></h4>
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
<!-- end tp-blog-single-section -->
<!-- news-letter-section start-->
{{--  --}}

@endsection