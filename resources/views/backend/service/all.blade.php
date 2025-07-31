@extends('layouts.backend')
@section('title', 'All Blogs |')
@section('backend')

    <div class="card border-0 shadow-sm">
        <div class="card-header bg-white d-flex justify-content-between align-items-center">
            <h5 class="mb-0">All Projects</h5>
            <a wire:navigate href="{{ route('project.index') }}" class="btn btn-sm btn-primary">
                <i class="mdi mdi-plus"></i> Add New
            </a>
        </div>

        <div class="card-body table-responsive">
            <table class="table table-hover table-bordered align-middle text-center mb-0">
                <thead class="table-light">
                    <tr>
                        <th>SL</th>
                        <th width="100">Image</th>
                        <th>Title</th>
                        <th width="200">Category</th>
                        <th>Content</th>
                        <th>Status</th>
                        <th width="180">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($services as $key => $items)
                        <tr>
                            <td>{{ ++$key }}</td>

                            <td>
                                <img src="{{ asset('storage/' . $items->image) }}" alt="Image" class="rounded img-fluid"
                                    style="width: 90px; height: 70px; object-fit: cover;">
                            </td>

                            <td>{{ Str::limit($items->title, 30) }}</td>

                            <td>

                                <span class="badge bg-secondary mb-1">{{ $items->serviceCategory->name }}</span>

                            </td>

                            <td>{{ Str::limit(strip_tags($items->content), 40) }}</td>

                            <td>{!! general_status($items->status) !!}</td>

                            <td>
                                <a wire:navigate href="{{ route('service.view', $items->slug) }}"
                                    class="btn btn-sm btn-outline-info" title="View">
                                    <i class="mdi mdi-eye"></i>
                                </a>
                                <a wire:navigate href="{{ route('service.index', $items->id) }}"
                                    class="btn btn-sm btn-outline-primary" title="Edit">
                                    <i class="mdi mdi-pencil"></i>
                                </a>
                                <a href="{{ route('service.delete', $items->id) }}" class="btn btn-sm btn-outline-danger"
                                    onclick="return confirm('Are you sure to delete this Project?')" title="Delete">
                                    <i class="mdi mdi-delete"></i>
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-muted py-4 text-center">No Service Found!</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

@endsection