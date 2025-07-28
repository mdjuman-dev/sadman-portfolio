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
                                    <h5 class="card-title text-center">Project Conten</h5>
                                </div>
                                <div class="card-body">
                                    <!-- Title -->
                                    <div class="form-group">
                                        <label for="title">Title <span class="text-danger">*</span></label>
                                        <input type="text" name="title" class="form-control" placeholder="Project Title"
                                            value="{{ old('title', $editProject?->title) }}">
                                        @error('title')
                                            <small class="text-danger"> {{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="row">
                                        <!-- Author Name -->
                                        <div class="col-lg-4">
                                            <div class="form-group mt-2">
                                                <label for="author">Author Name</label>
                                                <input type="text" name="author" class="form-control"
                                                    placeholder="Project project name"
                                                    value="{{ old('author', $editProject?->author) }}">
                                                @error('author')
                                                    <small class="text-danger"> {{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                        <!-- Project Name -->
                                        <div class="col-lg-4">
                                            <div class="form-group mt-2">
                                                <label for="project_link">Project Link</label>
                                                <input type="text" name="project_link" class="form-control"
                                                    placeholder="Project project live link"
                                                    value="{{ old('project_link', $editProject?->project_link) }}">
                                                @error('project_link')
                                                    <small class="text-danger"> {{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                        <!-- Project Date -->
                                        <div class="col-lg-4">
                                            <div class="form-group mt-2">
                                                <label for="project_date">Project Date</label>
                                                <input type="text" name="project_date" class="form-control"
                                                    placeholder="e.g. 1 July – 30 August"
                                                    value="{{ old('project_date', $editProject?->project_date) }}">
                                                @error('project_date')
                                                    <small class="text-danger"> {{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <!-- Project Image -->
                                        <div class="col-lg-6">
                                            <div class="form-group mt-2">
                                                <label for="image">Project Image <span class="text-danger">*</span></label>
                                                <input type="file" name="image" class="file-pond">
                                                @if ($editProject?->image)
                                                    <img width="100px" src="{{ asset('storage/' . $editProject->image) }}" alt="">
                                                @endif
                                                @error('image')
                                                    <small class="text-danger"> {{ $message }}</small>
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

                                                <select name="technology[]" multiple id="technology" class="form-control" >
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
                                    <div class="form-group mt-2">
                                        <label for="content">Project Content <span class="text-danger">*</span></label>
                                        <textarea type="text" name="content" id="content" class="form-control"
                                            placeholder="Project Content">{!!  old('content', $editProject?->content) !!}</textarea>
                                        @error('content')
                                            <small class="text-danger"> {{ $message }}</small>
                                        @enderror
                                    </div>
                                    @if ($editProject)

                                        <div class="form-check form-switch mt-2">
                                            <input class="form-check-input" type="checkbox" role="switch"
                                                id="flexSwitchCheckChecked" name="status" {{$editProject->status ? 'checked' : ''}}>
                                            <label class="form-check-label" for="flexSwitchCheckChecked">Status</label>
                                        </div>
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
                                    <div class="form-group">
                                        <label for="meta_title">Meta Title</label>
                                        <input type="text" name="meta_title" class="form-control"
                                            placeholder="Project Meta Title"
                                            value="{{ old('meta_title', $editProject?->meta_title) }}">
                                        @error('meta_title')
                                            <small class="text-danger"> {{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group my-2">
                                        <label for="meta_keyword">Meta keywords</label>
                                        <input type="text" name="meta_keyword" class="form-control"
                                            placeholder="Project Meta Keyword"
                                            value="{{ old('meta_keyword', $editProject?->meta_keyword) }}">
                                        @error('meta_keyword')
                                            <small class="text-danger"> {{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="meta_description">Meta Description</label>
                                        <textarea name="meta_description" class="form-control"
                                            placeholder="Project Meta Description">{{ old('meta_description', $editProject?->meta_description) }}</textarea>
                                        @error('meta_description')
                                            <small class="text-danger"> {{ $message }}</small>
                                        @enderror
                                    </div>
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