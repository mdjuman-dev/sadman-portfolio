@extends('layouts.frontend')
@section('frontend')
<!-- Breadcrumb Area Start -->
<div class="breadcrumb-area breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-inner text-center">
                    <h1 class="title split-collab">Project Details</h1>
                    <ul class="page-list">
                        <li class="tmp-breadcrumb-item"><a href="https://inversweb.com/">Home</a></li>
                        <li class="icon"><i class="fa-solid fa-angle-right"></i></li>
                        <li class="tmp-breadcrumb-item active">Project Details</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Area End -->


<div class="project-details-area-wrapper tmp-section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="project-details-thumnail-wrap">
                    <img src="{{ asset('frontend/assets/images/projects-details/thumnail-img.png')}}" alt="thumbnail">
                </div>
            </div>
            <div class="col-lg-8">
                <div class="project-details-content-wrap">
                    <h2 class="title">Supporting Health Initiatives</h2>
                    <p class="docs">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                        printer took a galltype and scrambled it to make a type specimen book. It has survived not
                        only five centuries tinto electronic typesetting remaining essentially unchanged</p>
                    <p class="docs">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                        print</p>

                    <div class="check-box-wrap">
                        <ul>
                            <li>
                                <h4 class="check-box-item"><span><i
                                            class="fa-solid fa-circle-check"></i></span>Ui/visual Design</h4>
                            </li>
                            <li>
                                <h4 class="check-box-item"><span><i
                                            class="fa-solid fa-circle-check"></i></span>App Development</h4>
                            </li>
                            <li>
                                <h4 class="check-box-item"><span><i
                                            class="fa-solid fa-circle-check"></i></span>Software Developer</h4>
                            </li>
                        </ul>
                    </div>
                    <h2 class="mini-title">Elevate Your Business with IT Solutions</h2>
                    <p class="docs">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                        printer took a galltype and scrambled it to make a type specimen book. It has survived not
                        only five centuries tinto electronic typesetting remaining essentially unchanged</p>
                    <div class="project-details-swiper-wrapper">
                        <div class="swiper project-details-swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="project-details-img">
                                        <img src="{{ asset('frontend/assets/images/projects-details/project-detials-swiper-img-1.jpg')}}" alt="swiper-img">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="project-details-img">
                                        <img src="{{ asset('frontend/assets/images/projects-details/project-detials-swiper-img-2.png')}}" alt="swiper-img">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="project-details-img">
                                        <img src="{{ asset('frontend/assets/images/projects-details/project-detials-swiper-img-1.jpg')}}" alt="swiper-img">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="project-details-swiper-btn">
                            <div class="project-swiper-button-prev"><span><i
                                        class="fa-solid fa-arrow-left"></i></span>Previous</div>
                            <div class="project-swiper-button-next">Next <span><i
                                        class="fa-solid fa-arrow-right"></i></span></div>
                        </div>
                    </div>
                </div>
                <!-- Tpm Get In touch start -->
                <section class="get-in-touch-area pt--80">
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
                                    <livewire:contact-form />
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Tpm Get In touch End -->
            </div>
            <div class="col-lg-4">
                <div class="signle-side-bar project-details-area tmponhover">
                    <div class="header">
                        <h3 class="title">Project Details</h3>
                    </div>
                    <div class="body">
                        <div class="project-details-info">Name: <span>Hosting vps</span></div>
                        <div class="project-details-info">Author: <span>Nadimul Islam</span></div>
                        <div class="project-details-info">Date: <span>23 January,2024</span></div>
                        <div class="project-details-info">Tags: <span>Host Web Design</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection