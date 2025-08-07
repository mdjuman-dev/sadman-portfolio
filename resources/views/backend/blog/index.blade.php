@extends('layouts.backend')
@section('title', ($editBlog ? 'Update' : 'Create') . ' Blog |')


@section('backend')
<div class="card">
    <div class="card-header">
        <h5 class="card-title">{{ $editBlog?->id ? 'Edit' : 'Create' }} Blog Post</h5>
    </div>
    <div class="card-body">
        <form action="{{ route('blog.storeOrUpdate', $editBlog?->id) }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Title <span class="text-danger">*</span></label>
                <input name="title" type="text" class="form-control" value="{{ old('title', $editBlog?->title) }}" placeholder="Enter blog title">
                @error('title')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>


            <div class="row">
                <div class="col-lg-6 mb-3">
                    <label for="image" class="form-label">Image <span class="text-danger">*</span></label>
                    <input type="file" name="image" class="file-pond">
                    @error('image')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror

                    @if ($editBlog?->image)
                    <img width="120px" src="{{ asset('storage/'.$editBlog?->image) }}" alt="">
                    @endif

                </div>

                <div class="col-lg-6 mb-3">
                    <label for="category" class="form-label">Category <span class="text-danger">*</span></label>
                    <select name="category_id" class="form-select">
                        <option value="">Select Category</option>
                        @foreach ($categories as $category)
                        <option value="{{ $category->id }}"
                            {{ $editBlog?->category_id == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                        @endforeach
                    </select>
                    @error('category_id')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            <div class="mb-3">
                <label for="content" class="form-label">Blog Content <span class="text-danger">*</span></label>
                <textarea name="content" class="form-control" id="rte-content" rows="6">{{ old('content', $editBlog?->content) }}</textarea>
                @error('content')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="row">
                <div class="col-lg-4 mb-3">
                    <label for="meta_title" class="form-label">Meta Title</label>
                    <input name="meta_title" type="text" class="form-control" placeholder="Meta title" value="{{ old('meta_title', $editBlog?->meta_title) }}">
                </div>
                <div class="col-lg-4 mb-3">
                    <label for="meta_keyword" class="form-label">Meta Keyword</label>
                    <input name="meta_keyword" type="text" class="form-control" placeholder="Meta keyword" value="{{ old('meta_keyword', $editBlog?->meta_keyword) }}">
                </div>
                <div class="col-lg-4 mb-1">
                    <label for="meta_description" class="form-label">Meta Description</label>
                    <textarea name="meta_description" class="form-control" rows="2" placeholder="Meta description">{{ old('meta_description', $editBlog?->meta_description) }}</textarea>
                </div>
            </div>

            @if ($editBlog)
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch"
                    id="flexSwitchCheckChecked" name="status" {{ $editBlog->status ? 'checked' : '' }}>
                <label class="form-check-label" for="flexSwitchCheckChecked">Status</label>
            </div>
            @endif

            <button class="btn btn-primary mt-2"> <i class="mdi mdi-content-save pe-1"></i>{{ $editBlog?->id ? 'Update' : 'Submit' }}</button>
        </form>
    </div>
</div>
@endsection

@push('css')
<link rel="stylesheet" href="{{ asset('backend/assets/css/filepond-plugin-image-preview.css') }}">
<link rel="stylesheet" href="{{ asset('backend/assets/css/filepond.css') }}">
<link rel="stylesheet" href="{{ asset('backend/assets/css/rte_theme_default.css') }}">
@endpush

@push('scripts')
<script src="{{ asset('backend/assets/js/filepond-plugin-image-preview.js') }}"></script>
<script src="{{ asset('backend/assets/js/filepond.jquery.js') }}"></script>
<script src="{{ asset('backend/assets/js/filepond.js') }}"></script>
<script src="{{ asset('backend/assets/js/rte.js') }}"></script>

<script>
    $(document).ready(function() {
        $('#preloader').fadeOut(500);
        // Rich Text Editor Init
        var editor = new RichTextEditor("#rte-content");
        // FilePond Init
        FilePond.registerPlugin(FilePondPluginImagePreview);
        $('.file-pond').filepond({
            storeAsFile: true,
            allowReorder: true,
        });
    });
</script>
@endpush