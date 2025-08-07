@extends('layouts.backend')
@section('title','Update Banner |')
@section('backend')

<div class="card mt-4">
    <div class="card-header ">
        <h4 class="mb-0">Update Banner</h4>
    </div>

    <div class="card-body col-lg-8 mx-auto">
        <form action="{{ route('banner.createOrUpdate') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Name <span class="text-danger">*</span></label>
                <input name="name" value="{{ $banner?->name }}" id="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Enter name">
                @error('name')
                <div class="invalid-feedback"> {{ $message }} </div>
                @enderror
            </div>

            @php
            $professionArray = json_decode($banner?->profession ?? '[]');
            $professionString = is_array($professionArray) ? implode(', ', $professionArray) : '';
            @endphp

            <div class="mb-3">
                <label for="profession" class="form-label">
                    Profession
                    <i data-bs-toggle="tooltip" title="Comma-separated (e.g. Laravel Developer, Freelancer)" class="bi bi-info-circle"></i>
                </label>
                <input name="profession[]"
                    value="{{ $professionString }}"
                    id="profession"
                    type="text"
                    class="form-control @error('profession') is-invalid @enderror"
                    placeholder="e.g. Laravel Developer, Freelancer">

                @error('profession')
                <div class="invalid-feedback"> {{ $message }} </div>
                @enderror
            </div>


            <div class="row align-items-center mb-3">
                <div class="col-md-9">
                    <label for="image" class="form-label">Model Image</label>
                    <input name="image" id="file-pond" type="file" class="file-pond" />
                    @error('image')
                    <div class="text-danger"> {{ $message }} </div>
                    @enderror
                </div>
                @if ($banner?->image)
                <div class="col-md-3 text-center">
                    <img src="{{ asset('storage/'.$banner->image) }}" alt="Current Image" class="img-thumbnail mt-4" width="120">
                    <p class="small mt-1">Current Image</p>
                </div>
                @endif
            </div>

            <div class="mb-3">
                <label for="about" class="form-label">About Me</label>
                <textarea name="about" id="about" rows="4" class="form-control @error('about') is-invalid @enderror" placeholder="Write something about yourself...">{{ $banner?->about }}</textarea>
                @error('about')
                <div class="invalid-feedback"> {{ $message }} </div>
                @enderror
            </div>

            <div class="text-end">
                <button class="btn btn-success px-4">
                    <i class="bi bi-check-circle me-1"></i> Update
                </button>
            </div>
        </form>
    </div>
</div>

@push('scripts')
<script>
    $(document).ready(function() {
        $('#preloader').fadeOut(500);
        // Register FilePond plugin
        FilePond.registerPlugin(FilePondPluginImagePreview);
        // Initialize FilePond
        FilePond.create(document.querySelector('.file-pond'), {
            storeAsFile: true,
            allowReorder: true,
            imageCropAspectRatio: '2:1',
        });
        // Enable Bootstrap tooltips
        const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        tooltipTriggerList.forEach(function(tooltipTriggerEl) {
            new bootstrap.Tooltip(tooltipTriggerEl);
        });
    });
</script>

@endpush
@endsection