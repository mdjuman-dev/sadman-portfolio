@extends('layouts.backend')
@section('title', 'All Blogs |')
@section('backend')
    <div class="card">
        <div class="card-header">
            <h5 class="card-title"></h5>
        </div>
        <div class="card-body table-responsive table-card">
            <table class="table  table-striped table-hover text-center align-middle shadow-sm">
                <thead class="text-muted table-light">
                    <tr>
                        <th scope="col">Sl</th>
                        <th scope="col">Image</th>
                        <th scope="col">Title</th>
                        <th scope="col">Category</th>
                        <th scope="col">Content</th>
                        <th scope="col">Likes</th>
                        <th scope="col">Dis Likes</th>
                        <th scope="col">Views</th>
                        <th scope="col">Comments</th>
                        <th scope="col">Status</th>
                        <th scope="col" width="150px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($blogs as $key => $blog)
                        <tr>
                            <td class="align-middle">{{ ++$key }}</td>

                            <td class="align-middle text-center">
                                <img src="{{ asset('storage/' . $blog->image) }}" alt="Blog Image" class="img-thumbnail rounded"
                                    width="100" height="80" style="object-fit: cover;">
                            </td>

                            <td class="align-middle">{{ Str::limit($blog->title, 25) }}</td>

                            <td class="align-middle">
                                <span class="badge bg-secondary">{{ $blog->category->name }}</span>
                            </td>

                            <td class="align-middle">
                                {{ Str::limit(strip_tags($blog->content), 30) }}
                            </td>

                            <td class="align-middle">
                                <span class="badge bg-danger">{{ $blog->likes->count() }}</span>
                            </td>
                            <td class="align-middle">
                                <span class="badge bg-warning text-dark">{{ $blog->dislikes->count() }}</span>
                            </td>

                            <td class="align-middle">
                                <span class="badge bg-info text-dark">{{ $blog->views->count() }}</span>
                            </td>

                            <td class="align-middle">
                                <span class="badge bg-success">{{ $blog->comments->count() }}</span>
                            </td>

                            <td class="align-middle">{!! general_status($blog->status) !!}</td>

                            <td class="align-middle">
                                <a wire:navigate class="btn btn-sm btn-outline-info me-1"
                                    href="{{ route('blog.viewBlogPost', $blog->slug) }}" title="View">
                                    <i class="mdi mdi-eye"></i>
                                </a>
                                <a wire:navigate class="btn btn-sm btn-outline-primary me-1"
                                    href="{{ route('blog.index', $blog->id) }}" title="Edit">
                                    <i class="mdi mdi-pencil"></i>
                                </a>
                                <a onclick="return confirm('Are you sure you want to delete this blog post?');"
                                    class="btn btn-sm btn-outline-danger" href="{{ route('blog.delete', $blog->id) }}"
                                    title="Delete">
                                    <i class="mdi mdi-delete"></i>
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="10" class="text-center text-muted py-4">
                                <strong>No Blog Posts Found!</strong>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

        </div>
    </div>
@endsection