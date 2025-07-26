@extends('layouts.backend')
@section('title', 'All Blog Post')

@section('backend')
<div class="card mt-4 shadow-lg border-0 rounded-4">
    <div class="card-body p-4">
        <div class="row g-4 align-items-center">
            <!-- Blog Image -->
            <div class="col-lg-5 col-md-6 col-sm-12 text-center">
                <img src="{{ asset('storage/' . $blogs->image) }}" alt="Blog Image"
                    class="img-fluid rounded shadow-sm border" style="max-height: 300px; object-fit: cover;">
            </div>

            <!-- Blog Info -->
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2 class="fw-bold mb-3">{{ $blogs->title }}</h2>

                <div class="row text-center">
                    <div class="col-4">
                        <div class="border rounded-3 py-2 shadow-sm bg-white">
                            <h5 class="mb-0 text-primary">{{ $blogs->likes->count() }}</h5>
                            <small class="text-muted">Likes</small>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="border rounded-3 py-2 shadow-sm bg-white">
                            <h5 class="mb-0 text-success">{{ $blogs->views->count() }}</h5>
                            <small class="text-muted">Views</small>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="border rounded-3 py-2 shadow-sm bg-white">
                            <h5 class="mb-0 text-warning">{{ $blogs->comments->count() }}</h5>
                            <small class="text-muted">Comments</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Blog Content -->
        <div class="mt-4">
            <h4 class="mb-3">Content</h4>
            <div class="p-3 border rounded bg-light">
                <p class="mb-0">{!! $blogs->content !!}</p>
            </div>
        </div>

        <!-- Comments -->
        <div class="mt-5">
            <h4 class="mb-3">Comments ({{ $blogs->comments->count() }})</h4>
            <ul class="list-unstyled">
                @forelse ($blogs->comments as $items)
                <li class="p-3 mb-3 bg-light rounded shadow-sm">
                    <div class="d-flex justify-content-between align-items-start">
                        <!-- Avatar + Name + Message -->
                        <div class="d-flex">
                            <img width="50" height="50" class="rounded-circle border shadow-sm"
                                src="https://api.dicebear.com/9.x/initials/svg?seed={{ $items->name }}" alt="Avatar">
                            <div class="ms-3">
                                <h6 class="mb-1 fw-bold">{{ $items->name }}</h6>
                                <p class="mb-1 text-muted small">{{ $items->message }}</p>
                                <small class="text-secondary">{{ time_short($items->created_at) }}</small>
                            </div>
                        </div>

                        <!-- Delete Button -->
                        <a onclick="return confirm('Are you sure you want to delete this Comment?');"
                            href="{{ route('blog.comment.delete', $items->id) }}"
                            class="btn btn-sm btn-outline-danger" title="Delete Comment">
                            <i class="mdi mdi-delete"></i>
                        </a>
                    </div>
                </li>
                @empty
                <li class="text-center text-muted py-4">No comments yet.</li>
                @endforelse
            </ul>
        </div>
    </div>
</div>
@endsection