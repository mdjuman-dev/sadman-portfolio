@extends('layouts.frontend')
@section('frontend')
<!-- Breadcrumb Area Start -->
<div class="breadcrumb-area breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-inner text-center">
                    <h1 class="title split-collab">Contact</h1>
                    <ul class="page-list">
                        <li class="tmp-breadcrumb-item"><a href="https://inversweb.com/">Home</a></li>
                        <li class="icon"><i class="fa-solid fa-angle-right"></i></li>
                        <li class="tmp-breadcrumb-item active">Contact</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Area End -->
<div class="contact-area-wrapper tmp-section-gap">
    <div class="container">
        <div class="contact-info-wrap">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="contact-info tmp-scroll-trigger tmponhover tmp-fade-in animation-order-1">
                        <div class="contact-icon">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <h3 class="title">Address</h3>
                        <p class="para">Dhaka 102, utl 1216, road 45</p>
                        <p class="para">house of street</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="contact-info tmp-scroll-trigger tmponhover tmp-fade-in animation-order-2">
                        <div class="contact-icon">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <h3 class="title">E-mail</h3>
                        <a href="mailto:themespark11@gmail.com">
                            <p class="para">hasan@yourmail.com</p>
                        </a>
                        <a href="mailto:themespark11@gmail.com">
                            <p class="para">themespark11@gmail.com</p>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="contact-info tmp-scroll-trigger tmponhover tmp-fade-in animation-order-3">
                        <div class="contact-icon">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <h3 class="title">Call Me</h3>
                        <p class="para">0000 - 000 - 000 00</p>
                        <p class="para">+1234 - 000</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Tpm Get In touch start -->
    <section class="get-in-touch-area tmp-section-gapTop">
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
    </section>
    <!-- Tpm Get In touch End -->

</div>
<!-- Start Footer Area  -->
@endsection