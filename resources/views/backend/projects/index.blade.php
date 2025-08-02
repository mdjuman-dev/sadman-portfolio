@extends('layouts.backend')
@section('title', 'Projects |')
@section('backend')
<div class="card mt-3">
    <div class="card-body">
        <form action="{{ route('project.storeOrUpdate', $editProject?->id) }}" method="post"
            enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-lg-8">
                    <div class="card shadow">
                        <div class="card-header">
                            <h5 class="card-title text-center">Project Contenet</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-8">
                                    <!-- Title -->
                                    <x-form.input name="title" label="Title" placeholder="Title" value="{{ old('title', $editProject?->category) }}" required />
                                </div>
                                <div class="col-lg-4">
                                    <!-- category -->
                                    <x-form.input name="category" label="Category" placeholder="Project category" value="{{ old('category', $editProject?->category) }}" required />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <!-- Author Name -->
                                <div class="col-lg-4">
                                    <x-form.input name="author" label="Author Name" placeholder="Project project name" value="{{ old('author', $editProject?->author) }}" />
                                </div>
                                <!-- Project Name -->
                                <div class="col-lg-4">
                                    <x-form.input name="project_link" label="Project Link" placeholder="Project project live link" value="{{ old('project_link', $editProject?->live_link) }}" />
                                </div>
                                <!-- Project Date -->
                                <div class="col-lg-4">
                                    <x-form.input name="project_date" label="Project Date" placeholder="e.g. 1 July – 30 August" value="{{ old('project_date', $editProject?->project_date) }}" />
                                </div>
                            </div>
                            <div class="row">
                                <!-- Project Image -->
                                <div class="col-lg-6">
                                    <div class="form-group mt-2">
                                        <label for="image">Project Image <span class="text-danger">*</span></label>
                                        <input type="file" name="image" class="file-pond">
                                        @error('image')
                                        <div class="text-danger"> {{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <!-- Project Technology -->
                                <div class="col-lg-6">
                                    <div class="form-group mt-2">
                                        <label for="technology">Project Technology</label>
                                        @php
                                        $selectedTechs = old('technology', $editProject?->technology ?? []);
                                        @endphp
                                        <select name="technology[]" multiple id="technology" class="form-control">
                                            @foreach ($technologies as $tech)
                                            <option value="{{ $tech->name }}" {{ in_array($tech->name, $selectedTechs) ? 'selected' : '' }}>
                                                {{ $tech->name }}
                                            </option>
                                            @endforeach
                                        </select>
                                        @error('technology')
                                        <small class="text-danger"> {{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <!-- Project Details -->
                            <x-form.textarea class="mt-2" name="content" label="Project Content" placeholder="Project Content" value="{{ old('content', $editProject?->content) }}" />
                            @if ($editProject)
                            <x-form.status name="status" label="Status" status="{{ $editProject->status }}" class="mt-2" />
                            @endif
                            <button class="btn btn-sm btn-primary mt-2">Submit</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card shadow">
                        <div class="card-header">
                            <h5 class="card-title text-center">Meta SEO</h5>
                        </div>
                        <div class="card-body">
                            <x-form.input name="meta_title" label="Meta Title" placeholder="Project Meta Title" value="{{ old('meta_title', $editProject?->meta_title) }}" />
                            <x-form.input class="mt-2" name="meta_keyword" label="Meta keywords" placeholder="Meta keywords" value="{{ old('meta_keyword', $editProject?->meta_keyword) }}" />
                            <x-form.textarea class="mt-2" name="meta_description" label="Meta Description" placeholder="Meta Description" value="{{ old('meta_description', $editProject?->meta_description) }}" />
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

@push('css')
<link rel="stylesheet" href="{{ asset('backend/assets/css/filepond-plugin-image-preview.css') }}">
<link rel="stylesheet" href="{{ asset('backend/assets/css/filepond.css') }}">
<link rel="stylesheet" href="{{ asset('backend/assets/css/rte_theme_default.css') }}">
<link rel="stylesheet" href="{{ asset('backend/assets/css/select2.min.css') }}">
@endpush
@push('scripts')
<script src="{{ asset('backend/assets/js/filepond-plugin-image-preview.js') }}"></script>
<script src="{{ asset('backend/assets/js/filepond.jquery.js') }}"></script>
<script src="{{ asset('backend/assets/js/filepond.js') }}"></script>
<script src="{{ asset('backend/assets/js/rte.js') }}"></script>
<script src="{{ asset('backend/assets/js/select2.min.js') }}"></script>
<script>
    // Rich Text Editor Init
    var editor = new RichTextEditor("#content");
    // FilePond Init
    FilePond.registerPlugin(FilePondPluginImagePreview);
    $('.file-pond').filepond({
        storeAsFile: true,
        allowReorder: true,
    });
    // select 2 
    $('#technology').select2();
</script>
@endpush
@endsection