@extends('layouts.backend')
@section('title', 'All Blogs |')
@section('backend')
    <div class="card border-0 shadow-sm">
        <div class="card-header bg-white border-bottom d-flex justify-content-between align-items-center">
            <h5 class="mb-0">All Blog Posts</h5>
            <a href="{{ route('blog.index') }}" class="btn btn-sm btn-primary">
                <i class="mdi mdi-plus"></i> New Blog
            </a>
        </div>
        <div class="card-body table-responsive">
            <table class="table table-hover align-middle text-center table-bordered">
                <thead class="table-light">
                    <tr>
                        <th>Sl</th>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Content</th>
                        <th>Likes</th>
                        <th>Dislikes</th>
                        <th>Views</th>
                        <th>Comments</th>
                        <th>Status</th>
                        <th width="150px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($blogs as $key => $blog)
                        <tr>
                            <td>{{ ++$key }}</td>

                            <td>
                                <img src="{{ asset('storage/' . $blog->image) }}" alt="Blog Image" class="rounded"
                                    style="width: 80px; height: 60px; object-fit: cover;">
                            </td>

                            <td>{{ Str::limit($blog->title, 25) }}</td>

                            <td>
                                <span class="badge bg-info">{{ $blog->category->name }}</span>
                            </td>

                            <td>{{ Str::limit(strip_tags($blog->content), 30) }}</td>

                            <td><span class="badge bg-success">{{ $blog->likes->count() }}</span></td>
                            <td><span class="badge bg-danger">{{ $blog->dislikes->count() }}</span></td>
                            <td><span class="badge bg-warning text-dark">{{ $blog->views->count() }}</span></td>
                            <td><span class="badge bg-secondary">{{ $blog->comments->count() }}</span></td>

                            <td>{!! general_status($blog->status) !!}</td>

                            <td>
                                <a wire:navigate class="btn btn-sm btn-outline-secondary"
                                    href="{{ route('blog.viewBlogPost', $blog->slug) }}" title="View">
                                    <i class="mdi mdi-eye-outline"></i>
                                </a>
                                <a wire:navigate class="btn btn-sm btn-outline-primary"
                                    href="{{ route('blog.index', $blog->id) }}" title="Edit">
                                    <i class="mdi mdi-pencil-outline"></i>
                                </a>
                                <a onclick="return confirm('Are you sure to delete this post?')"
                                    class="btn btn-sm btn-outline-danger" href="{{ route('blog.delete', $blog->id) }}"
                                    title="Delete">
                                    <i class="mdi mdi-delete-outline"></i>
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="11" class="text-muted text-center py-4">
                                <strong>No Blog Posts Found!</strong>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection