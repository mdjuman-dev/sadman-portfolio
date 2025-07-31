@extends('layouts.backend')
@section('title', 'View Project |')
@section('backend')

    <div class="container my-4">
        <a wire:navigate href="{{ route('service.allServices') }}"
            class="btn btn-outline-primary rounded-pill shadow-sm mb-4 px-4 py-2 d-inline-flex align-items-center gap-2">
            <i class="mdi mdi-arrow-left"></i> Back to Service
        </a>

        <div class="card border-0 shadow-lg rounded-5 overflow-hidden">
            {{-- Project Image --}}
            @if ($viewService->image)
                <img src="{{ asset('storage/' . $viewService->image) }}" alt="Project Image" class="img-fluid w-100"
                    style="max-height: 400px; object-fit: cover;">
            @endif

            <div class="p-4 p-lg-5">
                {{-- Title --}}
                <h1 class="fw-bold text-primary mb-3">{{ $viewService->title }}</h1>

                {{-- Category --}}
                <div class="mb-4">
                    <h4>Category:</h4>
                    <span class="badge bg-danger-subtle text-danger fs-6 px-3 py-2 rounded-pill shadow-sm">
                        {{ $viewService->serviceCategory->name }}
                    </span>
                </div>

                {{-- Content --}}
                <div class="mt-4">
                    <h5 class="text-secondary mb-2">Service Details</h5>
                    <div class="bg-light border rounded-4 p-4 shadow-sm fs-6" style="line-height: 1.7">
                        {!! $viewService->content !!}
                    </div>
                </div>

                {{-- Optional: Meta Info Section --}}
                {{--
                <div class="mt-5">
                    <h5 class="text-secondary mb-3">SEO Meta Info</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>Meta Title:</strong> {{ $project->meta_title ?? 'N/A' }}</li>
                        <li class="list-group-item"><strong>Meta Keywords:</strong> {{ $project->meta_keyword ?? 'N/A' }}
                        </li>
                        <li class="list-group-item"><strong>Meta Description:</strong> {{ $project->meta_description ??
                            'N/A' }}</li>
                    </ul>
                </div>
                --}}
            </div>
        </div>
    </div>

@endsection