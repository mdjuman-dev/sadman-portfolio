@extends('layouts.frontend')
@section('frontend')
<!-- Breadcrumb Area Start -->
<div class="breadcrumb-area breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-inner text-center">
                    <h1 class="title split-collab">Explore Blogs</h1>
                    <ul class="page-list">
                        <li class="tmp-breadcrumb-item"><a href="{{ route('home') }}" wire:navigate>Home</a></li>
                        <li class="icon"><i class="fa-solid fa-angle-right"></i></li>
                        <li class="tmp-breadcrumb-item active">Explore Blogs</li>
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
                @foreach ($category as $items )
                @foreach ($items->blog as $key => $items )
                <div class="blog-classic-card tmp-scroll-trigger tmponhover tmp-fade-in animation-order-{{++$key}}">
                    <div class="img-box">
                        <a href="{{ route('blog.details', $items->slug) }}" wire:navigate>
                            <img class="img-primary hidden-on-mobile" src="{{ asset('storage/'.$items->image)}}" alt="Blog Thumbnail">
                            <img class="img-secondary" src="{{ asset('storage/'.$items->image)}}" alt="Blog Thumbnail">
                        </a>
                    </div>
                    <div class="blog-classic-content">
                        <div class="blog-classic-tag">
                            <ul>
                                <li>
                                    <div class="tag-wrap">
                                        <i class="fa-solid fa-tag"></i>
                                        <h4 class="tag-title"><a wire:navigate href="{{ route('category.blog',$items->category->slug) }}">{{ $items->category->name }}</a></h4>
                                    </div>
                                </li>
                                <li>
                                    <div class="tag-wrap">
                                        <i class="fa-solid fa-comment"></i>
                                        <h4 class="tag-title">Comments ({{ count($items->comments) }})</h4>
                                    </div>
                                </li>
                                <li>
                                    <div class="tag-wrap">
                                        <i class="fa-solid fa-calendar-day"></i>
                                        <h4 class="tag-title">Publish ({{ time_short($items->created_at) }})</h4>
                                    </div>
                                </li>
                                <li>
                                    <div class="tag-wrap">
                                        <i class=" fa-solid fa-heart"></i>
                                        <h4 class="tag-title">Likes ({{ count($items->likes) }})</h4>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <h2 class="title"><a wire:navigate href="{{ route('blog.details',$items->slug) }}">{{ $items->title }}</a></h2>
                        <p class="para">{!! Str::limit($items->content, 200) !!}</p>
                        <div class="tmp-button-here">
                            <a wire:navigate class="tmp-btn hover-icon-reverse radius-round btn-border btn-md" href="{{ route('blog.details', $items->slug) }}">
                                <span class="icon-reverse-wrapper">
                                    <span class="btn-text">Read More</span>
                                    <span class="btn-icon"><i class="fa-sharp fa-regular fa-arrow-right"></i></span>
                                    <span class="btn-icon"><i class="fa-sharp fa-regular fa-arrow-right"></i></span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
                @endforeach

                <div class="tmp-pagination-button">
                    {{-- Previous Page Link --}}
                    @if ($category->onFirstPage())
                    <span class="pagination-btn disabled">
                        <i class="fa-sharp fa-regular fa-arrow-left"></i>
                    </span>
                    @else
                    <a wire:navigate href="{{ $category->previousPageUrl() }}" class="pagination-btn"><i class="fa-sharp fa-regular fa-arrow-left"></i></a>
                    @endif

                    {{-- Page Number Links --}}
                    @foreach ($category->getUrlRange(1, $category->lastPage()) as $page => $url)
                    @if ($page == $category->currentPage())
                    <span class="pagination-btn active">{{ $page }}</span>
                    @else
                    <a wire:navigate href="{{ $url }}" class="pagination-btn">{{ $page }}</a>
                    @endif
                    @endforeach

                    {{-- Next Page Link --}}
                    @if ($category->hasMorePages())
                    <a wire:navigate href="{{ $category->nextPageUrl() }}" class="pagination-btn"><i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                    @else
                    <span class="pagination-btn disabled"><i class="fa-sharp fa-regular fa-arrow-right"></i></span>
                    @endif
                </div>
            </div>
            <div class="col-lg-4">
                <div class="tmp-sidebar">
                    <div class="signle-side-bar recent-post-area tmponhover">
                        <div class="header">
                            <h3 class="title">Recent Post</h3>
                        </div>
                        <div class="body">
                            @foreach ($categories as $category)
                            <a wire:navigate href="{{route('category.blog',$category->slug)}}" class="single-post">
                                <span class="single-post-left">
                                    <i class="fa-solid fa-arrow-right"></i>
                                    <span class="post-title">{{$category->name}}</span>
                                </span>
                                <span class="post-num">({{count($category->blog)}})</span>
                            </a>
                            @endforeach
                        </div>
                    </div>
                    <div class="signle-side-bar recent-post-area tmponhover">
                        <div class="header">
                            <h3 class="title">Recent Post</h3>
                        </div>
                        <div class="body">
                            @foreach ($blogs as $items)
                            <div class="single-post-card tmp-hover-link">
                                <div class="single-post-card-img">
                                    <img src="{{ asset('storage/'.$items->image)}}" alt="">
                                </div>
                                <div class="single-post-right">
                                    <div class="single-post-top">
                                        <i class="fa-regular fa-folder-open"></i>
                                        <p class="post-title">{{$items->category->name}}</p>
                                    </div>
                                    <h3 class="post-title"><a class="link" href="{{ route('blog.details',$items->slug) }}">{{ Str::limit($items->title,50) }}</a>
                                    </h3>
                                </div>
                            </div>
                            @endforeach
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