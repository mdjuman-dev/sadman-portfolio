@extends('layouts.frontend')
@section('frontend')
    <!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner text-center">
                        <h1 class="title split-collab">Project</h1>
                        <ul class="page-list">
                            <li class="tmp-breadcrumb-item"><a href="https://inversweb.com/">Home</a></li>
                            <li class="icon"><i class="fa-solid fa-angle-right"></i></li>
                            <li class="tmp-breadcrumb-item active">Project</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->
    <!-- Tpm Our Latest Portfolio  Area Start -->
    <section class="tmp-latest-portfolio tmp-section-gap">
        <div class="container">
            <div class="row">

                @foreach ($projects as $key => $items)
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="latest-portfolio-card v5 tmp-hover-link animation-order-{{++$key}}">
                            <div class="portfoli-card-img">
                                <div class="img-box v2">
                                    <a href="{{ route('project-datails', $items->slug) }}">
                                        <img class="img-primary hidden-on-mobile" src="{{ asset('storage/' . $items->image)}}"
                                            alt="Blog Thumbnail">
                                        <img class="img-secondary" src="{{ asset('storage/' . $items->image)}}"
                                            alt="BLog Thumbnail">
                                    </a>
                                </div>
                                <a href="{{ route('project-datails', $items->slug) }}" class="img-link-icon"><i
                                        class="fa-solid fa-arrow-up-long"></i></a>
                            </div>
                            <div class="portfolio-card-content-wrap">
                                <div class="content-left">
                                    <h3 class="portfolio-card-title"><a class="link"
                                            href="{{ route('project-datails', $items->slug) }}">{{$items->title}}</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </section>
    <!-- Tpm Our Latest Portfolio  Area End -->
@endsection