@extends('layouts.frontend')
@section('frontend')
<!-- Breadcrumb Area Start -->
<div class="breadcrumb-area breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-inner text-center">
                    <h1 class="title split-collab">About Me</h1>
                    <ul class="page-list">
                        <li class="tmp-breadcrumb-item"><a href="https://inversweb.com/">Home</a></li>
                        <li class="icon"><i class="fa-solid fa-angle-right"></i></li>
                        <li class="tmp-breadcrumb-item active">About Me</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Area End -->

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

<!-- tmp skill area start -->
@if(count($skills) > 0)
<div class="tmp-skill-area tmp-section-gapBottom">
    <div class="container">
        <div class="row">
            <div class="inner">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="progress-wrapper">
                            <div class="content">
                                <h2 class="custom-title mb--30 tmp-scroll-trigger tmp-fade-in animation-order-1">
                                    Design Skill <span><img src="{{ asset('frontend/assets/images/custom-line/custom-line.png')}}" alt="custom-line"></span>
                                </h2>
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
    </div>
</div>
@endif
<!-- tmp skill area end -->

<!-- Tpm Counter Area Start -->
<section class="counter-area tmp-section-gapBottom">
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

<!-- Tpm Education Experience Area Start -->
<section class="education-experience tmp-section-gapBottom">
    <div class="container">
        <h2 class="custom-title mb-32 tmp-scroll-trigger tmp-fade-in animation-order-1">Education <span><img src="{{ asset('frontend/assets/images/custom-line/custom-line.png')}}"
                    alt="custom-line"></span>
        </h2>
        <div class="row g-5">
            <div class="col-lg-6 col-sm-6">
                <div class="education-experience-card tmponhover tmp-scroll-trigger tmp-fade-in animation-order-1">
                    <h4 class="edu-sub-title">Trainer Marketing</h4>
                    <h2 class="edu-title">2005-2009</h2>
                    <p class="edu-para">A personal portfolio is a curated collection of an individual's professional
                        work, showcasing their skills, experience A personal portfolio.</p>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6">
                <div class="education-experience-card tmponhover tmp-scroll-trigger tmp-fade-in animation-order-2">
                    <h4 class="edu-sub-title">Assistant Director</h4>
                    <h2 class="edu-title">2010-2014</h2>
                    <p class="edu-para">Each project here showcases my commitment to excellence and adaptability, tailored to meet each client’s unique needs.</p>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6">
                <div class="education-experience-card tmponhover tmp-scroll-trigger tmp-fade-in animation-order-3">
                    <h4 class="edu-sub-title">Design Assistant</h4>
                    <h2 class="edu-title">2008-2012</h2>
                    <p class="edu-para">I’ve had the privilege of working with various clients, from startups to established companies, helping bring their visions to life.</p>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6">
                <div class="education-experience-card tmponhover tmp-scroll-trigger tmp-fade-in animation-order-4">
                    <h4 class="edu-sub-title">Design Assistant</h4>
                    <h2 class="edu-title">2008-2012</h2>
                    <p class="edu-para">Each project here showcases my commitment to excellence and adaptability, tailored to meet each client’s unique needs a personal.</p>
                </div>
            </div>
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
<!-- Tpm Education Experience Area End -->

<!-- Tpm Get In touch start -->
<section class="get-in-touch-area tmp-section-gapBottom">
    @include('frontend.get-in-touch')
</section>
<!-- Tpm Get In touch End -->
@endsection