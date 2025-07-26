@extends('layouts.frontend')
@push('css')
<style>
    .disabled-link {
        opacity: 0.5;
        pointer-events: none;
        cursor: default;
    }
</style>
@endpush
@section('frontend')
<!-- Breadcrumb Area Start -->
<div class="breadcrumb-area breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-inner text-center">
                    <h1 class="title split-collab">Blog Details</h1>
                    <ul class="page-list">
                        <li class="tmp-breadcrumb-item"><a href="{{ route('home') }}" wire:navigate>Home</a></li>
                        <li class="icon"><i class="fa-solid fa-angle-right"></i></li>
                        <li class="tmp-breadcrumb-item active">Blog Details</li>
                    </ul>
                    <!-- <div class="circle-1"></div> -->
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
                <div class="blog-details-left-area">
                    <div class="thumbnail-top">
                        <img src="{{ asset('storage/'.$blogDetails->image)}}" alt="Corporate_business">
                    </div>
                    <div class="blog-details-discription" style="padding: 20px 0">
                        <div class="blog-classic-tag">
                            <h4 class="title">By Stanio lainto</h4>
                            <ul style="align-items: baseline;">
                                <li>
                                    <div class="tag-wrap">
                                        <i class="fa-solid fa-tag"></i>
                                        <h4 class="tag-title">{{$blogDetails->category->name}}</h4>
                                    </div>
                                </li>
                                <li>
                                    <div class="tag-wrap">
                                        <i class="fa-solid fa-calendar-day"></i>
                                        <h4 class="tag-title">Comments ({{count($blogDetails->comments)}})</h4>
                                    </div>
                                </li>
                                <li>
                                    <div class="tag-wrap">
                                        <i class="fa-solid fa-calendar-day"></i>
                                        <h4 class="tag-title">Views ({{ $viewCount}})</h4>
                                    </div>
                                </li>
                            </ul>
                            <livewire:blog-like-components :blog="$blogDetails" />
                        </div>
                        <h3 class="title split-collab">{{ $blogDetails->title }}</h3>
                        <p class="disc">
                            {!! $blogDetails->content !!}
                        </p>
                    </div>
                    <div class="blog-details-discription" style="padding: 0">
                        <div class="our-portfolio-swiper">
                            <div class="blog-details-swiper">
                                <div class="our-portfoli-swiper-card">

                                </div>
                            </div>
                            <div class="our-portfolio-swiper-btn-wrap">

                                {{-- Previous Post --}}
                                @if (isset($prevPost->slug))
                                <a wire:navigate href="{{ route('blog.details', $prevPost->slug) }}" class="prev-btn">
                                    <div class="tmp-arrow-btn">
                                        <i class="fa-solid fa-arrow-left"></i>
                                    </div>
                                    <div class="btn-content">
                                        <span class="para">Previous post</span>
                                        <h4 class="title">{{ $prevPost->title }}</h4>
                                    </div>
                                </a>
                                @else
                                <div class="prev-btn disabled-link">
                                    <div class="tmp-arrow-btn">
                                        <i class="fa-solid fa-arrow-left"></i>
                                    </div>
                                    <div class="btn-content">
                                        <span class="para">Previous post</span>
                                        <h4 class="title">No previous post</h4>
                                    </div>
                                </div>
                                @endif

                                {{-- Next Post --}}
                                @if (isset($nextPost->slug))
                                <a wire:navigate href="{{ route('blog.details', $nextPost->slug) }}" class="next-btn">
                                    <div class="btn-content">
                                        <span class="para">Next post</span>
                                        <h4 class="title">{{ $nextPost->title }}</h4>
                                    </div>
                                    <div class="tmp-arrow-btn">
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </div>
                                </a>
                                @else
                                <div class="next-btn disabled-link">
                                    <div class="btn-content">
                                        <span class="para">Next post</span>
                                        <h4 class="title">No next post</h4>
                                    </div>
                                    <div class="tmp-arrow-btn">
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </div>
                                </div>
                                @endif

                            </div>



                        </div>

                        <div class="blog-details-navigation" style="margin-top: 20px;">
                            <div class="navigation-tags">
                                <h3 class="tag-title">Keyword:</h3>
                                <ul>
                                    <li>
                                        <p class="tag"><a wire:navigate href="blog-details.html#">Interiour</a></p>
                                    </li>
                                    <li>
                                        <p class="tag"><a wire:navigate href="blog-details.html#">Ux design</a></p>
                                    </li>
                                    <li>
                                        <p class="tag"><a wire:navigate href="blog-details.html#">Graphics</a></p>
                                    </li>
                                </ul>
                            </div>

                            @php
                            $shareUrl = $nextPost ? urldecode(route('blog.details', $nextPost->slug)) : '';
                            $shareTitle = $blogDetails ? urldecode($blogDetails->title) : '';
                            @endphp
                            <div class="social-link footer">
                                <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ $shareUrl }}&title={{ $shareTitle }}" aria-label="Share on Linkedin">
                                    <i class="fa-brands fa-linkedin-in"></i>
                                </a>
                                <a href="https://twitter.com/intent/tweet?url={{ $shareUrl }}&text={{ $shareTitle }}" aria-label="Share on Twitter">
                                    <i class="fa-brands fa-twitter"></i>
                                </a>
                                <a href="https://www.facebook.com/sharer/sharer.php?u={{ $shareUrl }}" aria-label="Share on Facebook">
                                    <i class=" fa-brands fa-facebook-f"></i>
                                </a>
                            </div>
                        </div>


                        <!-- Comment Area Main Wrapper Start -->
                        <div class="comment-area-main-wrapper mt--30 mb--30">
                            <livewire:comment :blog_id="$blogDetails->id" />
                        </div>
                        <!-- Comment Area Main Wrapper End -->
                    </div>
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
                </div>
            </div>
        </div>
    </div>
</div>
@push('scripts')
<script>
    const notyf = new Notyf({
        duration: 5000,
        ripple: true,
        dismissible: true,
        position: {
            x: 'right',
            y: 'top',
        },
        types: [{
            type: 'success',
            background: 'green',
            icon: {
                className: 'fa-solid fa-check-circle',
                tagName: 'i',
                color: 'white'
            }
        }]
    });

    window.addEventListener('comment-success', () => {
        notyf.success({
            message: "Comment submitted successfully!",
        });
    });
</script>
@endpush

@endsection