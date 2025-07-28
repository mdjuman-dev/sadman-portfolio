@extends('layouts.backend')
@section('title', 'View Client Message |')

@section('backend')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow rounded border-0">
                    <div class="card-header bg-primary text-white d-flex align-items-center gap-3">
                        <img width="50px" class="rounded-circle border"
                            src="https://api.dicebear.com/9.x/initials/svg?seed={{ $viewContect->name }}" alt="Avatar">
                        <h5 class="mb-0">Client Message Details</h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <strong>Name:</strong>
                            <p class="mb-0">{{ $viewContect->name }}</p>
                        </div>
                        <div class="mb-3">
                            <strong>Email:</strong>
                            <p class="mb-0 text-primary">{{ $viewContect->email }}</p>
                        </div>
                        <div class="mb-3">
                            <strong>Phone Number:</strong>
                            <p class="mb-0">{{ $viewContect->number }}</p>
                        </div>
                        @if($viewContect->subject)
                            <div class="mb-3">
                                <strong>Subject:</strong>
                                <p class="mb-0">{{ $viewContect->subject }}</p>
                            </div>
                        @endif
                        <div class="mb-3">
                            <strong>Message:</strong>
                            <p class="mb-0">{{ $viewContect->message }}</p>
                        </div>
                    </div>
                    <div class="card-footer text-end">
                        <a wire:navigate href="{{ route('contect.index') }}" class="btn btn-secondary">
                            <span class="mdi mdi-lift"></span>
                            <span class="mdi mdi-arrow-left"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection