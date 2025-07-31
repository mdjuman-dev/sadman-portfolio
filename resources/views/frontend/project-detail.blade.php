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
                        <img src="{{ asset('storage/' . $project->image)}}" alt="thumbnail">
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="project-details-content-wrap">
                        <h2 class="title">{{$project->title}}</h2>
                        <p class="docs">{!! $project->content !!}</p>

                        <div class="check-box-wrap">
                            <ul>
                                <li>
                                    <h4 class="check-box-item">
                                        Project Technologies
                                    </h4>
                                </li>
                                @if ($project->technology)
                                    @foreach ($project->technology as $items)
                                        <li>
                                            <h4 class="check-box-item">
                                                <span>
                                                    <i class="fa-solid fa-circle-check"></i>
                                                </span>{{$items}}
                                            </h4>
                                        </li>
                                    @endforeach
                                @endif
                                
                            </ul>
                        </div>

                    </div>
                    <!-- Tpm Get In touch start -->
                    <section class="get-in-touch-area pt--80">
                        <div class="container">
                            <div class="contact-get-in-touch-wrap">
                                <div class="get-in-touch-wrapper tmponhover">
                                    <div class="row g-5 align-items-center">
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
                            <div class="project-details-info">Author: <span>{{$project->author}}</span></div>
                            <div class="project-details-info">Date: <span>{{$project->project_date}}</span></div>
                            <div class="project-details-info">Project Link: <a target="_blank"
                                    href="{{$project->live_link}}"><span class="link">{{$project->live_link}}</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection