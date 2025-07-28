@extends('layouts.frontend')
@section('frontend')
<!-- tmp banner area start -->
<div class="rpp-banner-three-area">
    <div class="container">
        <div class="banner-three-main-wrapper">
            <div class="row">
                <div class="col-lg-4">
                    <div class="inner">
                        <span class="sub-title tmp-scroll-trigger tmp-fade-in animation-order-1">Hello i’m</span>
                        <h1 class="title tmp-scroll-trigger tmp-fade-in animation-order-2">Brooklyn Simmons</h1>
                        <div class="button-area-banner-three tmp-scroll-trigger tmp-fade-in animation-order-3">
                            <a class="tmp-btn hover-icon-reverse radius-round" href="{{ route('project') }}" wire:navigate>
                                <span class="icon-reverse-wrapper">
                                    <span class="btn-text">View Portfolio</span>
                                    <span class="btn-icon"><i class="fa-sharp fa-regular fa-arrow-right"></i></span>
                                    <span class="btn-icon"><i class="fa-sharp fa-regular fa-arrow-right"></i></span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="banner-right-content">
                        <div class="about-me tmp-scroll-trigger tmp-fade-in animation-order-1">
                            <h3 class="title">About Me</h3>
                            <p class="para tmp-title-split">A personal <span>portfolio</span> is a collection of to your work, that
                                is achievements, and a skills that <span>web design</span> highlights in your </p>
                        </div>
                        <div class="find-me-on mt--40 tmp-scroll-trigger tmp-fade-in animation-order-2">
                            <h2 class="find-me-on-title">Find me on</h2>
                            <div class="social-link banner">
                                <a href="index-03.html#"><i class="fa-brands fa-instagram"></i></a>
                                <a href="index-03.html#"><i class="fa-brands fa-linkedin-in"></i></a>
                                <a href="index-03.html#"><i class="fa-brands fa-twitter"></i></a>
                                <a href="index-03.html#"><i class="fa-brands fa-facebook-f"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-benner-img-three">
                <img class="tmp-scroll-trigger tmp-zoom-in animation-order-2" src="{{ asset('frontend/assets/images/banner/banner-user-image-three.png')}}" alt="banner-img-3">
            </div>
        </div>
    </div>
</div>
<!-- tmp banner area end -->

<!-- Tpm Service Area Start -->
<section class="service-area tmp-section-gap">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="service-card-v1 tmp-scroll-trigger tmp-fade-in animation-order-1 tmp-link-animation">
                    <div class="service-card-icon">
                        <i class="fa-light fa-pen-ruler"></i>
                    </div>
                    <h4 class="service-title"><a href="service-details.html">Web Design</a></h4>
                    <p class="service-para">120 Projects</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="service-card-v1 tmp-scroll-trigger tmp-fade-in animation-order-2 tmp-link-animation">
                    <div class="service-card-icon">
                        <i class="fa-light fa-bezier-curve"></i>
                    </div>
                    <h4 class="service-title"><a href="service-details.html">Ui/Ux Design</a></h4>
                    <p class="service-para">241 Projects</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="service-card-v1 tmp-scroll-trigger tmp-fade-in animation-order-3 tmp-link-animation">
                    <div class="service-card-icon">
                        <i class="fa-light fa-lightbulb"></i>
                    </div>
                    <h4 class="service-title"><a href="service-details.html">Web Research</a></h4>
                    <p class="service-para">240 Projects</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="service-card-v1 tmp-scroll-trigger tmp-fade-in animation-order-4 tmp-link-animation">
                    <div class="service-card-icon">
                        <i class="fa-light fa-envelope"></i>
                    </div>
                    <h4 class="service-title"><a href="service-details.html">Marketing</a></h4>
                    <p class="service-para">331 Prodect</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Tpm Service Area End -->

<!-- Tpm Counter Area Start -->
<section class="counter-area">
    <div class="container">
        <div class="row g-5">
            <div class="col-12 col-lg-6 col-xl-6 col-xxl-6">
                <div class="year-of-expariance-wrapper bg-blur-style-one tmp-scroll-trigger tmp-fade-in animation-order-1">
                    <div class="year-expariance-wrap">
                        <!-- <h2 class="year-number"><span class="counter">25 </span> </h2> -->
                        <h2 class="counter year-number"><span class="odometer" data-count="25">00</span>
                        </h2>
                        <h3 class="year-title">Years Of <br> experience</h3>
                    </div>
                    <p class="year-para">Business consulting consultants provide expert advice and guida the a
                        businesses to help theme their performance efficiency</p>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-6 col-xxl-6">
                <div class="counter-area-right-content">
                    <div class="row g-5">
                        <div class="col-lg-6 col-sm-6 col-12">
                            <div class="counter-card tmponhover tmp-scroll-trigger tmp-fade-in animation-order-1">
                                <h3 class="counter counter-title"><span class="odometer" data-count="20">00</span>k+
                                </h3>
                                <p class="counter-para">Our Project Complete</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 col-12">
                            <div class="counter-card tmponhover tmp-scroll-trigger tmp-fade-in animation-order-2">
                                <h3 class="counter counter-title"><span class="odometer" data-count="10">00</span>k+
                                </h3>
                                <p class="counter-para">Our Natural Products</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 col-12">
                            <div class="counter-card tmponhover tmp-scroll-trigger tmp-fade-in animation-order-3">
                                <h3 class="counter counter-title"><span class="odometer" data-count="200">00</span>+
                                </h3>
                                <p class="counter-para">Clients Reviews</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 col-12">
                            <div class="counter-card tmponhover tmp-scroll-trigger tmp-fade-in animation-order-4">
                                <h3 class="counter counter-title"><span class="odometer" data-count="1000">00</span>+
                                </h3>
                                <p class="counter-para">our Satisfied Clientd</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Tpm Counter Area End -->

<!-- Tpm Latest Service Area Start -->
<section class="latest-service-area tmp-section-gapTop">
    <div class="container">
        <div class="section-head mb--60">
            <div class="section-sub-title center-title tmp-scroll-trigger tmp-fade-in animation-order-1">
                <span class="subtitle">Latest Service</span>
            </div>
            <h2 class="title split-collab tmp-scroll-trigger tmp-fade-in animation-order-2">Inspiring The World One Project</h2>
            <p class="description section-sm tmp-scroll-trigger tmp-fade-in animation-order-3"> Business consulting consultants provide expert advice and guida
                businesses to help them improve their performance, efficiency, and organizational </p>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="service-card-v2 tmponhover tmp-scroll-trigger tmp-fade-in animation-order-1">
                    <h2 class="service-card-num"><span>01.</span>A Portfolio of Creativity</h2>
                    <p class="service-para">Business consulting consultants provide expert advice and guida the a
                        businesses to help theme their performance efficiency</p>
                </div>
                <div class="service-card-v2 tmponhover tmp-scroll-trigger tmp-fade-in animation-order-2">
                    <h2 class="service-card-num"><span>02.</span>My Portfolio of Innovation</h2>
                    <p class="service-para">My work is driven by the belief that thoughtful design and strategic planning can empower brands, transform businesses</p>
                </div>
                <div class="service-card-v2 tmponhover tmp-scroll-trigger tmp-fade-in animation-order-3">
                    <h2 class="service-card-num"><span>03.</span>A Showcase of My Projects</h2>
                    <p class="service-para">In this portfolio, you’ll find a curated selection of projects that highlight my skills in [Main Areas, e.g., responsive web design</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="service-card-user-image">
                    <img class="tmp-scroll-trigger tmp-zoom-in animation-order-1" src="{{ asset('frontend/assets/images/services/latest-services-user-image-two.png')}}" alt="latest-user-image">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Tpm Latest Service Area End -->

<!-- tmp skill area start -->
@if(count($skills) > 0)
<div class="tmp-skill-area tmp-section-gapTop">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6">
                <div class="progress-wrapper">
                    <div class="content">
                        <h2 class="custom-title mb--30 tmp-scroll-trigger tmp-fade-in animation-order-1">
                            Design Skill <span><img src="{{ asset('frontend/assets/images/custom-line/custom-line.png')}}" alt="custom-line"></span>
                        </h2>
                        <!-- Start Single Progress Charts -->
                        @foreach ($skills as $skill)
                        @if($skill->category === 'design')
                        <div class="progress-charts">
                            <h6 class="heading heading-h6">{{ $skill->name }}</h6>
                            <div class="progress">
                                <div class="progress-bar wow fadeInLeft"
                                    data-wow-duration="{{ $skill->duration }}s"
                                    data-wow-delay="{{ $skill->delay }}s"
                                    role="progressbar"
                                    style="width: {{ $skill->percentage }}%; visibility: visible; animation-duration: 0.5s; animation-delay: 0.3s; animation-name: fadeInLeft;"
                                    aria-valuenow="{{ $skill->percentage }}"
                                    aria-valuemin="0"
                                    aria-valuemax="100">
                                    <span class="percent-label">{{ $skill->percentage }}%</span>
                                </div>
                            </div>
                        </div>
                        @endif
                        @endforeach
                        <!-- End Single Progress Charts -->

                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="progress-wrapper">
                    <div class="content">
                        <h2 class="custom-title mb--30 tmp-scroll-trigger tmp-fade-in animation-order-1">
                            Development Skill <span><img src="{{ asset('frontend/assets/images/custom-line/custom-line.png')}}" alt="custom-line"></span>
                        </h2>
                        @foreach ($skills as $skill)
                        @if($skill->category === 'development')
                        <div class="progress-charts">
                            <h6 class="heading heading-h6">{{ $skill->name }}</h6>
                            <div class="progress">
                                <div class="progress-bar wow fadeInLeft"
                                    data-wow-duration="{{ $skill->duration }}s"
                                    data-wow-delay="{{ $skill->delay }}s"
                                    role="progressbar"
                                    style="width: {{ $skill->percentage }}%; visibility: visible; animation-duration: 0.5s; animation-delay: 0.3s; animation-name: fadeInLeft;"
                                    aria-valuenow="{{ $skill->percentage }}"
                                    aria-valuemin="0"
                                    aria-valuemax="100">
                                    <span class="percent-label">{{ $skill->percentage }}%</span>
                                </div>
                            </div>
                        </div>
                        @endif
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
<!-- tmp skill area end -->

<!-- Tpm Education Experience Area Start -->
@if(count($educations) > 0)
<section class="education-experience tmp-section-gapTop">
    <div class="container">
        <h2 class="custom-title mb-32 tmp-scroll-trigger tmp-fade-in animation-order-1">Education <span><img src="{{ asset('frontend/assets/images/custom-line/custom-line.png')}}"
                    alt="custom-line"></span>
        </h2>
        <div class="row g-5">
            @foreach ($educations as $education)
            <div class="col-lg-6 col-sm-6">
                <div class="education-experience-card tmponhover tmp-scroll-trigger tmp-fade-in animation-order-1">
                    <h4 class="edu-sub-title">{{ $education->degree }}</h4>
                    <h2 class="edu-title">{{ $education->institution . ' | ' . $education->start_date . '-' . $education->end_date }}</h2>
                    <p class="edu-para">{{ $education->description }}</p>
                </div>
            </div>
            @endforeach
        </div>
        <div class="experiences-wrapper v2">
            <div class="row">
                <div class="col-lg-6">
                    <div class="experiences-wrap-right-content">
                        <img class="tmp-scroll-trigger tmp-zoom-in animation-order-1" src="{{ asset('frontend/assets/images/experiences/expert-img-two.jpg')}}" alt="expert-img">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="experiences-wrap-left-content">

                        <h2 class="custom-title mb-32 tmp-scroll-trigger tmp-fade-in animation-order-1">Experiences <span><img
                                    src="{{ asset('frontend/assets/images/custom-line/custom-line.png')}}" alt="custom-line"></span></h2>
                        <div class="experience-content tmp-scroll-trigger tmp-fade-in animation-order-1">
                            <p class="ex-subtitle">experience</p>
                            <h2 class="ex-name">Fatima Asrafy</h2>
                            <h3 class="ex-title">UI/UX Designer</h3>
                            <p class="ex-para">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                                desi dolore eu fugiat nulla pariatu Duis aute irure</p>
                        </div>

                        <div class="experience-content tmp-scroll-trigger tmp-fade-in animation-order-2">
                            <p class="ex-subtitle">experience</p>
                            <h2 class="ex-name">Fatima Asrafy</h2>
                            <h3 class="ex-title">UI/UX Designer</h3>
                            <p class="ex-para">Interested in working together? Let’s bring your ideas to life! Contact me, and let’s start building something.</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif
<!-- Tpm Education Experience Area End -->

<!-- Tpm Our Supported Company Area Start -->
<div class="our-supported-company-area tmp-section-gap">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                <div class="support-company-logo tmp-scroll-trigger tmp-fade-in animation-order-1">
                    <img src="{{ asset('frontend/assets/images/our-supported-company/company-logo-1.svg')}}" alt="Reeni - Personal Portfolio HTML Template">
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                <div class="support-company-logo tmp-scroll-trigger tmp-fade-in animation-order-2">
                    <img src="{{ asset('frontend/assets/images/our-supported-company/company-logo-2.svg')}}" alt="Reeni - Personal Portfolio HTML Template">
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                <div class="support-company-logo tmp-scroll-trigger tmp-fade-in animation-order-3">
                    <img src="{{ asset('frontend/assets/images/our-supported-company/company-logo-3.svg')}}" alt="Reeni - Personal Portfolio HTML Template">
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                <div class="support-company-logo tmp-scroll-trigger tmp-fade-in animation-order-4">
                    <img src="{{ asset('frontend/assets/images/our-supported-company/company-logo-4.svg')}}" alt="Reeni - Personal Portfolio HTML Template">
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                <div class="support-company-logo tmp-scroll-trigger tmp-fade-in animation-order-5">
                    <img src="{{ asset('frontend/assets/images/our-supported-company/company-logo-5.svg')}}" alt="Reeni - Personal Portfolio HTML Template">
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                <div class="support-company-logo tmp-scroll-trigger tmp-fade-in animation-order-6">
                    <img src="{{ asset('frontend/assets/images/our-supported-company/company-logo-6.svg')}}" alt="Reeni - Personal Portfolio HTML Template">
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                <div class="support-company-logo tmp-scroll-trigger tmp-fade-in animation-order-7">
                    <img src="{{ asset('frontend/assets/images/our-supported-company/company-logo-7.svg')}}" alt="Reeni - Personal Portfolio HTML Template">
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                <div class="support-company-logo tmp-scroll-trigger tmp-fade-in animation-order-8">
                    <img src="{{ asset('frontend/assets/images/our-supported-company/company-logo-8.svg')}}" alt="Reeni - Personal Portfolio HTML Template">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Tpm Our Supported Company Area End -->

<!-- Tpm Testimonial Area Start -->
<section class="testimonial-area tmp-section-gapTop">
    <div class="container">
        <div class="section-head mb--50">
            <div class="section-sub-title center-title tmp-scroll-trigger tmp-fade-in animation-order-1">
                <span class="subtitle">Our Testimonial</span>
            </div>
            <h2 class="title split-collab tmp-scroll-trigger tmp-fade-in animation-order-2">Enhancing Collaboration <br> between Remote</h2>
        </div>
        <div class="row g-5">
            <!-- Start Single Testimonial  -->

            <div class="col-lg-12">
                <div class="swiper-testimonials-area-wrapper-card">
                    <div class="swiper swiper-testimonials-2">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testimonial-card tmponhover style-2 tmp-scroll-trigger animation-order-1">
                                    <div class="content">
                                        <div class="testimonital-icon">
                                            <img src="{{ asset('frontend/assets/images/icons/quote.svg')}}" alt="testimonial-icon">
                                        </div>
                                        <h2 class="text-doc">A personal portfolio is a curated collection of an individual's professional work, showcasing their skilA personal portfolio is a curated collection of an individual's professional work, showcasing their skills, </h2>
                                        <h3 class="card-title">Cameron Williamson</h3>
                                        <p class="card-para">Ui/Ux Designer</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-card tmponhover style-2 tmp-scroll-trigger animation-order-2">
                                    <div class="content">
                                        <div class="testimonital-icon">
                                            <img src="{{ asset('frontend/assets/images/icons/quote.svg')}}" alt="testimonial-icon">
                                        </div>
                                        <h2 class="text-doc">A personal portfolio is a curated collection of an individual's professional work, showcasing their skilA personal portfolio is a curated collection of an individual's professional work, showcasing their skills, </h2>
                                        <h3 class="card-title">Leslie Alexander</h3>
                                        <p class="card-para">Ui/Ux Designer</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-card tmponhover style-2 tmp-scroll-trigger animation-order-1">
                                    <div class="content">
                                        <div class="testimonital-icon">
                                            <img src="{{ asset('frontend/assets/images/icons/quote.svg')}}" alt="testimonial-icon">
                                        </div>
                                        <h2 class="text-doc">A personal portfolio is a curated collection of an individual's professional work, showcasing their skilA personal portfolio is a curated collection of an individual's professional work, showcasing their skills, </h2>
                                        <h3 class="card-title">Cameron Williamson</h3>
                                        <p class="card-para">Ui/Ux Designer</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-card tmponhover style-2 tmp-scroll-trigger animation-order-2">
                                    <div class="content">
                                        <div class="testimonital-icon">
                                            <img src="{{ asset('frontend/assets/images/icons/quote.svg')}}" alt="testimonial-icon">
                                        </div>
                                        <h2 class="text-doc">A personal portfolio is a curated collection of an individual's professional work, showcasing their skilA personal portfolio is a curated collection of an individual's professional work, showcasing their skills, </h2>
                                        <h3 class="card-title">Leslie Alexander</h3>
                                        <p class="card-para">Ui/Ux Designer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- End Single Testimonial  -->

        </div>
    </div>
</section>
<!-- Tpm Testimonial Area End -->

<!-- Tpm Blog and news Area Start -->
<section class="blog-and-news-are tmp-section-gap">
    <div class="container">
        <div class="section-head mb--50">
            <div class="section-sub-title center-title tmp-scroll-trigger tmp-fade-in animation-order-1">
                <span class="subtitle">Blog and news</span>
            </div>
            <h2 class="title split-collab tmp-scroll-trigger tmp-fade-in animation-order-2">Elevating Personal Branding the <br> through Powerful Portfolios</h2>
        </div>
        <div class="row">
            @foreach ($blogs as $key=>$items )
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="blog-card tmp-hover-link tmp-scroll-trigger tmp-fade-in animation-order-{{++$key}}">
                    <div class="img-box">
                        <a wire:navigate href="{{ route('blog.details',$items->slug) }}">
                            <img class="img-primary hidden-on-mobile" src="{{ asset('storage/'.$items->image)}}" alt="Blog Thumbnail">
                            <img class="img-secondary" src="{{ asset('storage/'.$items->image)}}" alt="BLog Thumbnail">
                        </a>
                        <ul class="blog-tags">
                            <li><span class="tag-icon"><i class="fa-regular fa-user"></i></span>Admin</li>
                            <li><span class="tag-icon"><i class="fa-solid fa-calendar-days"></i></span>{{time_short($items->created_at)}}</li>
                        </ul>
                    </div>
                    <div class="blog-content-wrap">
                        <h3 class="blog-title v2">
                            <a class="link" wire:navigate href="{{ route('blog.details',$items->slug) }}">
                                {{Str::words($items->title,8,)}}
                            </a>
                        </h3>
                        <a wire:navigate href="{{ route('blog.details',$items->slug) }}" class="read-more-btn v2">Read More
                            <span class="read-more-icon">
                                <i class="fa-solid fa-angle-right"></i>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Tpm Blog and news Area End -->
<section class="get-in-touch-area tmp-section-gapBottom">
    <div class="container">
        <div class="contact-get-in-touch-wrap">
            <div class="get-in-touch-wrapper tmponhover">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-5">
                        <div class="section-head text-align-left">
                            <div class="section-sub-title tmp-scroll-trigger tmp-fade-in animation-order-1">
                                <span class="subtitle">GET IN TOUCH</span>
                            </div>
                            <h2 class="title split-collab tmp-scroll-trigger tmp-fade-in animation-order-2">Elevate your brand with Me </h2>
                            <p class="description tmp-scroll-trigger tmp-fade-in animation-order-3">ished fact that a reader will be
                                distrol acted bioiiy desig
                                ished fact that a reader will acted ished fact that a reader will be distrol
                                acted </p>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <livewire:contact-form />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection