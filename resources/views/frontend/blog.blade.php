@extends('layouts.frontend')
@section('frontend')
<!-- Breadcrumb Area Start -->
<div class="breadcrumb-area breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-inner text-center">
                    <h1 class="title split-collab">Blog Classic</h1>
                    <ul class="page-list">
                        <li class="tmp-breadcrumb-item"><a href="{{ route('home') }}" wire:navigate>Home</a></li>
                        <li class="icon"><i class="fa-solid fa-angle-right"></i></li>
                        <li class="tmp-breadcrumb-item active">Blog Classic</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Area End -->
<div class="blog-classic-area-wrapper tmp-section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="blog-classic-card tmp-scroll-trigger tmponhover tmp-fade-in animation-order-1">
                    <div class="img-box">
                        <a href="{{ route('blog-datails') }}" wire:navigate>
                            <img class="img-primary hidden-on-mobile" src="{{ asset('frontend/assets/images/blog/blog-classic-card-img-1.jpg')}}" alt="Blog Thumbnail">
                            <img class="img-secondary" src="{{ asset('frontend/assets/images/blog/blog-classic-card-img-1.jpg')}}" alt="BLog Thumbnail">
                        </a>
                    </div>
                    <div class="blog-classic-content">
                        <div class="blog-classic-tag">
                            <ul>
                                <li>
                                    <div class="tag-wrap">
                                        <i class="fa-solid fa-tag"></i>
                                        <h4 class="tag-title">Web design</h4>
                                    </div>
                                </li>
                                <li>
                                    <div class="tag-wrap">
                                        <i class="fa-regular fa-comment"></i>
                                        <h4 class="tag-title">Comments (05)</h4>
                                    </div>
                                </li>
                                <li>
                                    <div class="tag-wrap">
                                        <i class="fa-solid fa-calendar-day"></i>
                                        <h4 class="tag-title">Comments (05)</h4>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <h2 class="title"><a href="blog.html#">Stand out from the crowd with a professional portfolio</a>
                        </h2>
                        <p class="para">Aliquam eros justo, posuere loborti viverra lao ullamcorper posuere viverra
                            .Aliquam eros justo, posuere Aliquam eros justo, posuere loborti viverra laoreet matti
                            ullamcorper</p>


                        <div class="tmp-button-here">
                            <a class="tmp-btn hover-icon-reverse radius-round btn-border btn-md" href="blog-details.html">
                                <span class="icon-reverse-wrapper">
                                    <span class="btn-text">Read More</span>
                                    <span class="btn-icon"><i class="fa-sharp fa-regular fa-arrow-right"></i></span>
                                    <span class="btn-icon"><i class="fa-sharp fa-regular fa-arrow-right"></i></span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="blog-classic-card tmp-scroll-trigger tmponhover tmp-fade-in animation-order-2">
                    <div class="img-box">
                        <a href="blog-details.html">
                            <img class="img-primary hidden-on-mobile" src="{{ asset('frontend/assets/images/blog/blog-classic-card-img-2.jpg')}}" alt="Blog Thumbnail">
                            <img class="img-secondary" src="{{ asset('frontend/assets/images/blog/blog-classic-card-img-2.jpg')}}" alt="BLog Thumbnail">
                        </a>
                    </div>
                    <div class="blog-classic-content">
                        <div class="blog-classic-tag">
                            <ul>
                                <li>
                                    <div class="tag-wrap">
                                        <i class="fa-solid fa-tag"></i>
                                        <h4 class="tag-title">Web design</h4>
                                    </div>
                                </li>
                                <li>
                                    <div class="tag-wrap">
                                        <i class="fa-regular fa-comment"></i>
                                        <h4 class="tag-title">Comments (05)</h4>
                                    </div>
                                </li>
                                <li>
                                    <div class="tag-wrap">
                                        <i class="fa-solid fa-calendar-day"></i>
                                        <h4 class="tag-title">Comments (05)</h4>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <h2 class="title"><a href="blog.html#">Elevate your brand with a the stunning portfolio</a></h2>
                        <p class="para">Aliquam eros justo, posuere loborti viverra lao ullamcorper posuere viverra
                            .Aliquam eros justo, posuere Aliquam eros justo, posuere loborti viverra laoreet matti
                            ullamcorper</p>
                        <div class="tmp-button-here">
                            <a class="tmp-btn hover-icon-reverse radius-round btn-border btn-md" href="blog-details.html">
                                <span class="icon-reverse-wrapper">
                                    <span class="btn-text">Read More</span>
                                    <span class="btn-icon"><i class="fa-sharp fa-regular fa-arrow-right"></i></span>
                                    <span class="btn-icon"><i class="fa-sharp fa-regular fa-arrow-right"></i></span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="blog-classic-card tmp-scroll-trigger tmponhover tmp-fade-in animation-order-3">
                    <div class="img-box">
                        <a href="blog-details.html">
                            <img class="img-primary hidden-on-mobile" src="{{ asset('frontend/assets/images/blog/blog-classic-card-img-3.jpg')}}" alt="Blog Thumbnail">
                            <img class="img-secondary" src="{{ asset('frontend/assets/images/blog/blog-classic-card-img-3.jpg')}}" alt="BLog Thumbnail">
                        </a>
                    </div>
                    <div class="blog-classic-content">
                        <div class="blog-classic-tag">
                            <ul>
                                <li>
                                    <div class="tag-wrap">
                                        <i class="fa-solid fa-tag"></i>
                                        <h4 class="tag-title">Web design</h4>
                                    </div>
                                </li>
                                <li>
                                    <div class="tag-wrap">
                                        <i class="fa-regular fa-comment"></i>
                                        <h4 class="tag-title">Comments (05)</h4>
                                    </div>
                                </li>
                                <li>
                                    <div class="tag-wrap">
                                        <i class="fa-solid fa-calendar-day"></i>
                                        <h4 class="tag-title">Comments (05)</h4>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <h2 class="title"><a href="blog.html#">Elevate your brand with a the stunning portfolio</a></h2>
                        <p class="para">Aliquam eros justo, posuere loborti viverra lao ullamcorper posuere viverra
                            .Aliquam eros justo, posuere Aliquam eros justo, posuere loborti viverra laoreet matti
                            ullamcorper</p>
                        <div class="tmp-button-here">
                            <a class="tmp-btn hover-icon-reverse radius-round btn-border btn-md" href="blog-details.html">
                                <span class="icon-reverse-wrapper">
                                    <span class="btn-text">Read More</span>
                                    <span class="btn-icon"><i class="fa-sharp fa-regular fa-arrow-right"></i></span>
                                    <span class="btn-icon"><i class="fa-sharp fa-regular fa-arrow-right"></i></span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="tmp-pagination-button">
                    <a href="blog.html#" class="pagination-btn"><i class="fa-sharp fa-regular fa-arrow-left"></i></a>
                    <a href="blog.html#" class="pagination-btn active">1</a>
                    <a href="blog.html#" class="pagination-btn">2</a>
                    <a href="blog.html#" class="pagination-btn">3</a>
                    <a href="blog.html#" class="pagination-btn"><i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="tmp-sidebar">
                    <div class="signle-side-bar search-area tmponhover">
                        <div class="body">
                            <div class="search-area">
                                <input type="text" placeholder="Type here" required>
                                <button><i class="fa-solid fa-magnifying-glass"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="signle-side-bar recent-post-area tmponhover">
                        <div class="header">
                            <h3 class="title">Recent Post</h3>
                        </div>
                        <div class="body">
                            <a href="blog.html#" class="single-post">
                                <span class="single-post-left">
                                    <i class="fa-solid fa-arrow-right"></i>
                                    <span class="post-title">Business Solution</span>
                                </span>
                                <span class="post-num">(01)</span>
                            </a>
                            <a href="blog.html#" class="single-post">
                                <span class="single-post-left">
                                    <i class="fa-solid fa-arrow-right"></i>
                                    <span class="post-title">Web Development Wizardry</span>
                                </span>
                                <span class="post-num">(08)</span>
                            </a>
                            <a href="blog.html#" class="single-post">
                                <span class="single-post-left">
                                    <i class="fa-solid fa-arrow-right"></i>
                                    <span class="post-title">Content Creation and Strategy</span>
                                </span>
                                <span class="post-num">(05)</span>
                            </a>
                            <a href="blog.html#" class="single-post">
                                <span class="single-post-left">
                                    <i class="fa-solid fa-arrow-right"></i>
                                    <span class="post-title">UI/UX Design Innovation</span>
                                </span>
                                <span class="post-num">(05)</span>
                            </a>
                        </div>
                    </div>
                    <div class="signle-side-bar recent-post-area tmponhover">
                        <div class="header">
                            <h3 class="title">Recent Post</h3>
                        </div>
                        <div class="body">
                            <div class="single-post-card tmp-hover-link">
                                <div class="single-post-card-img">
                                    <img src="{{ asset('frontend/assets/images/blog/single-post-card-img-1.png')}}" alt="">
                                </div>
                                <div class="single-post-right">
                                    <div class="single-post-top">
                                        <i class="fa-regular fa-folder-open"></i>
                                        <p class="post-title">Category</p>
                                    </div>
                                    <h3 class="post-title"><a class="link" href="blog.html#">Sustainable Solutions: Designing for Tomorrow</a>
                                    </h3>
                                </div>
                            </div>
                            <div class="single-post-card tmp-hover-link">
                                <div class="single-post-card-img">
                                    <img src="{{ asset('frontend/assets/images/blog/single-post-card-img-2.png')}}" alt="">
                                </div>
                                <div class="single-post-right">
                                    <div class="single-post-top">
                                        <i class="fa-regular fa-folder-open"></i>
                                        <p class="post-title">Category</p>
                                    </div>
                                    <h3 class="post-title"><a class="link" href="blog.html#">Technological Innovations: Shaping the Future</a>
                                    </h3>
                                </div>
                            </div>
                            <div class="single-post-card tmp-hover-link">
                                <div class="single-post-card-img">
                                    <img src="{{ asset('frontend/assets/images/blog/single-post-card-img-3.png')}}" alt="">
                                </div>
                                <div class="single-post-right">
                                    <div class="single-post-top">
                                        <i class="fa-regular fa-folder-open"></i>
                                        <p class="post-title">Category</p>
                                    </div>
                                    <h3 class="post-title"><a class="link" href="blog.html#">Adventure Awaits Exploring the Great Outdoors</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="signle-side-bar tmponhover">
                        <div class="header">
                            <h3 class="title">About Me</h3>
                        </div>
                        <div class="body">
                            <div class="about-me-details">
                                <div class="about-me-details-head">
                                    <div class="about-me-img">
                                        <img src="{{ asset('frontend/assets/images/blog/about-me-user-img.png')}}" alt="about-me-user-img">
                                    </div>
                                    <div class="about-me-right-content">
                                        <h3 class="title">Fatima Afrafy</h3>
                                        <p class="para">UI/UX Designer </p>
                                        <div class="social-link">
                                            <a href="blog.html#"><i class="fa-brands fa-instagram"></i></a>
                                            <a href="blog.html#"><i class="fa-brands fa-linkedin-in"></i></a>
                                            <a href="blog.html#"><i class="fa-brands fa-twitter"></i></a>
                                            <a href="blog.html#"><i class="fa-brands fa-facebook-f"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <p class="about-me-para">Aliquam eros justo, posuere loborti viverra ullamcorper posuere
                                    viverra .Aliquam eros justo, posuere justo, posuere.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection