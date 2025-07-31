@extends('layouts.backend')
@section('title', 'Service Category')
@section('backend')
<div class="container-fluid mt-2">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="card">
                            <form action="{{ route('service.category.storeOrUpdate', $editCategory?->id) }}" method="post">
                                @csrf
                                <div class="card-header">
                                    <div class="row">
                                        <div class="col-lg-6">Add Category</div>
                                        <div class="col-lg-6 text-end">
                                            <button class="btn btn-{{ $editCategory ? 'warning' : 'primary' }}" type="submit"> {{ $editCategory ? 'Update' : 'Submit' }}</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Category Name</label>
                                        <input type="text" value="{{ old('name', $editCategory?->name) }}" class="form-control" id="name" name="name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="slug" class="form-label">Slug</label>
                                        <input type="text" value="{{ old('slug', $editCategory?->slug) }}" class="form-control" id="slug" name="slug">
                                    </div>
                                    <div class="mb-3 form-check">
                                        <input type="checkbox" class="form-check-input" id="status" name="status"
                                            {{ old('status', $editCategory?->status ?? true) ? 'checked' : '' }}>
                                        <label class="form-check-label" for="status">Active</label>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="card">
                            <div class="card-header">All Categories</div>
                            <div class="card-body">
                                <table class="table table-responsive">
                                    <thead class="text-center">
                                        <tr>
                                            <th>Sl.</th>
                                            <th>Name</th>
                                            <th>Slug</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                        @foreach ($categories as $category)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $category->name }}</td>
                                            <td>{{ $category->slug }}</td>
                                            <td>{{ $category->status ? 'Active' : 'Inactive' }}</td>
                                            <td>
                                                <a href="{{ route('service.category.edit', ['id' => $category->id]) }}" class="btn btn-sm btn-primary">Edit</a>
                                                <a href="{{ route('service.category.delete', ['id' => $category->id]) }}" class="btn btn-sm btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    const nameInput = document.getElementById('name');
    const slugInput = document.getElementById('slug');

    let slugTouched = false;

    // Detect if user manually edits the slug
    slugInput.addEventListener('input', () => {
        slugTouched = true;
    });

    nameInput.addEventListener('input', () => {
        if (!slugTouched) {
            let slug = nameInput.value
                .toLowerCase()
                .trim()
                .replace(/[^a-z0-9\s-]/g, '')
                .replace(/\s+/g, '-')
                .replace(/-+/g, '-');
            slugInput.value = slug;
        }
    });
</script>
@endpush

@endsection