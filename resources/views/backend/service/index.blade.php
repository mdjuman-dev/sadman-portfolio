@extends('layouts.backend')
@section('title', 'Service Management')
@section('backend')
<div class="container-fluid mt-2">
    <div class="row">
        <div class="col-lg-12">
            <form action="{{ route('service.storeOrUpdate') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-lg-6">
                                <h4>Service Management</h4>
                            </div>
                            <div class="col-lg-6 text-end">
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="serviceName" class="form-label">Service Title</label>
                            <input type="text" class="form-control" id="serviceName" name="title" placeholder="Enter service name">
                        </div>
                        <div class="mb-3">
                            <label for="serviceDescription" class="form-label">Service Description</label>
                            <textarea id="serviceDescription" name="description" rows="4" placeholder="Enter service description"></textarea>
                            </div>
                        <div class="row mb-2">
                            <div class="col-lg-6">
                                <label for="serviceImage" class="form-label">Service Image</label>
                                <input type="file" class="file-pond" id="serviceImage" name="image">
                            </div>
                            <div class="col-lg-6">
                                <label for="serviceCategory" class="form-label">Service Category</label>
                                <select class="form-select" id="serviceCategory" name="category_id">
                                    <option value="">Select Category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
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
    // Rich Text Editor Init
    var editor = new RichTextEditor("#serviceDescription");
    
    // FilePond Init
    FilePond.registerPlugin(FilePondPluginImagePreview);

    $('.file-pond').filepond({
        storeAsFile: true,
        allowReorder: true,
    });
</script>
@endpush