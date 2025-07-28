@extends('layouts.backend')
@section('title', 'View Project |')
@section('backend')
    <a wire:navigate href="{{ route('project.allProject') }}"
        class="btn btn-sm btn-outline-primary d-inline-flex align-items-center gap-1 shadow-sm px-3 py-1 mt-2 rounded-pill">
        <i class="mdi mdi-arrow-left"></i>
        <span>Back</span>
    </a>

    <div class="container my-5">
        <div class="card shadow-lg border-0 rounded-4">
            {{-- Project Image --}}
            @if ($project->image)
                <img src="{{ asset('storage/' . $project->image) }}" class="img-fluid rounded-top-4 mb-3" alt="Project Image">
            @endif

            <div class="card-body p-4">
                {{-- Title --}}
                <h2 class="card-title fw-bold text-primary">{{ $project->title }}</h2>

                {{-- Author & Date --}}
                <p class="text-muted mb-3">
                    <strong>Author:</strong> {{ $project->author }}
                    @if($project->project_date)
                        | <strong>Date:</strong> {{ $project->project_date }}
                    @endif
                </p>

                {{-- Live Link --}}
                @if ($project->project_link)
                    <p>
                        <a href="{{ $project->project_link }}" target="_blank" class="btn btn-outline-primary btn-sm">
                            🔗 Visit Live Project
                        </a>
                    </p>
                @endif

                {{-- Technologies --}}
                @if (is_array($project->technology))
                    <div class="mb-3">
                        <h5 class="mb-2">Technologies Used:</h5>
                        @foreach ($project->technology as $tech)
                            <span class="badge bg-secondary me-1 mb-1">{{ $tech }}</span>
                        @endforeach
                    </div>
                @endif

                {{-- Content --}}
                <div class="mt-4">
                    <h5 class="mb-2">Project Details:</h5>
                    <div class="border p-3 rounded-3 bg-light">
                        {!! $project->content !!}
                    </div>
                </div>

                {{-- Meta Info --}}
                <div class="mt-4">
                    <h5 class="mb-2">SEO Meta Info:</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>Meta Title:</strong> {{ $project->meta_title ?? 'N/A' }}</li>
                        <li class="list-group-item"><strong>Meta Keywords:</strong> {{ $project->meta_keyword ?? 'N/A' }}
                        </li>
                        <li class="list-group-item"><strong>Meta Description:</strong>
                            {{ $project->meta_description ?? 'N/A' }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection