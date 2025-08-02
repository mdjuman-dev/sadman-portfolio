@extends('layouts.frontend')
@section('frontend')


<!-- Breadcrumb Area Start -->
<div class="breadcrumb-area breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-inner text-center">
                    <h1 class="title split-collab">Service Details</h1>
                    <ul class="page-list">
                        <li class="tmp-breadcrumb-item"><a href="https://inversweb.com/">Home</a></li>
                        <li class="icon"><i class="fa-solid fa-angle-right"></i></li>
                        <li class="tmp-breadcrumb-item active">Service Details</li>
                    </ul>
                    <!-- <div class="circle-1"></div> -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Area End -->
<div class="service-details-area-wrapper tmp-section-gap">
    <div class="container">
        <div class="row row--40">
            <div class="col-lg-8">
                <div class="service-thumnail-wrap">
                    <img src="{{ asset('storage/' . $service->image)}}" alt="{{ $service->title }}">
                </div>
                <h2 class="title split-collab">{{ $service->title }}</h2>
                {!! $service->content !!}

            </div>
            <div class="col-lg-4">
                <div class="signle-side-bar service-list-area tmponhover">
                    <div class="header">
                        <h3 class="title">Service Category</h3>
                    </div>
                    <div class="body">
                        @foreach ($serviceCategory as $category)
                        <a href="service-details.html#" class="single-service">
                            <p class="service-title">{{ $category->name }}</p>
                            <span class="service-icon"><i class="fa-solid fa-angle-right"></i></span>
                        </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection