@extends('layouts.frontend')
@section('frontend')
<!-- Breadcrumb Area Start -->
<div class="breadcrumb-area breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-inner text-center">
                    <h1 class="title split-collab">Service</h1>
                    <ul class="page-list">
                        <li class="tmp-breadcrumb-item"><a href="https://inversweb.com/">Home</a></li>
                        <li class="icon"><i class="fa-solid fa-angle-right"></i></li>
                        <li class="tmp-breadcrumb-item active">Service</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Area End -->

<!-- Latest Service Area Start -->
<section class="latest-service-area tmp-section-gap">
    <div class="container">
        <div class="row">
            @foreach($services as $index => $service)
            <div class="col-lg-6 col-sm-6">
                <a href="{{ route('service.show', $service->slug) }}" class="service-card-v2 tmponhover tmp-scroll-trigger tmp-fade-in animation-order-{{ $index + 1 }}">
                    <h2 class="service-card-num"><span>{{ $index+1 }}.</span>{{ $service->title }}</h2>
                    <p class="service-para">{!! Str::words($service->content, 40) !!}</p>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Latest Service Area End -->

@endsection