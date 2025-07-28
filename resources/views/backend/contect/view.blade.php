@extends('layouts.backend')
@section('title', 'View Client Message |')

@section('backend')
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="card border-0 shadow rounded-4 overflow-hidden">
                    {{-- Profile Section --}}
                    <div class="bg-dark text-white d-flex align-items-center px-4 py-4 position-relative">
                        <img src="https://api.dicebear.com/9.x/initials/svg?seed={{ $viewContect->name }}" alt="Avatar"
                            class="rounded-circle border border-white" width="80" height="80" style="object-fit: cover;">
                        <div class="ms-4">
                            <h4 class="mb-1">{{ $viewContect->name }}</h4>
                            <p class="mb-0 small text-light">{{ $viewContect->email }}</p>
                            <p class="mb-0 small text-light">{{ $viewContect->number }}</p>
                        </div>
                        <a wire:navigate href="{{ route('contect.index') }}"
                            class="btn btn-sm btn-light position-absolute top-0 end-0 m-3">
                            <i class="mdi mdi-arrow-left"></i> Back
                        </a>
                    </div>

                    {{-- Message Section --}}
                    <div class="card-body bg-light p-4">
                        @if($viewContect->subject)
                            <div class="mb-4">
                                <h6 class="text-muted">Subject</h6>
                                <div class="p-3 bg-white rounded shadow-sm border">{{ $viewContect->subject }}</div>
                            </div>
                        @endif

                        <div class="mb-3">
                            <h6 class="text-muted">Message</h6>
                            <div class="p-3 bg-white rounded shadow-sm border" style="min-height: 120px;">
                                {{ $viewContect->message }}
                            </div>
                        </div>
                    </div>

                    {{-- Footer --}}
                    <div class="card-footer text-end bg-white">
                        <small class="text-muted">
                            Received at:
                            <strong>{{ $viewContect->created_at->format('d M, Y') }}</strong>
                            • {{ time_short($viewContect->created_at) }} ago
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection