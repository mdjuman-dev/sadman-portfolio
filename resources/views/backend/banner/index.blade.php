@extends('layouts.backend')
@section('title','Update Banner |')
@section('backend')
<div class="card mt-3">
    <div class="card-header">
        <h5 class="card-title">Update Banner</h5>
    </div>
    <div class="card-body">
        <div class="card shadow">
            <div class="card-body">
                <form action="{{ route('banner.createOrUpdate') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input name="name" value="{{ $banner?->name }}" id="name" type="text" class="form-control">
                                @error('name')
                                <span class="text-danger"> {{ $message }} </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="about">About Me</label>
                                <textarea name="about" id="about" type="text" class="form-control">{{ $banner?->about }}</textarea>
                                @error('about')
                                <span class="text-danger"> {{ $message }} </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="text_one">Text One</label>
                                <input name="text_one" id="text_one" type="text" class="form-control">
                                @error('text_one')
                                <span class="text-danger"> {{ $message }} </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="text_tow">Text Tow</label>
                                <input name="text_tow" id="text_tow" type="text" class="form-control">
                                @error('text_tow')
                                <span class="text-danger"> {{ $message }} </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="cta_text">CTA Text</label>
                                <input value="{{ $banner?->cta_text }}" name="cta_text" id="cta_text" type="text" class="form-control">
                                @error('cta_text')
                                <span class="text-danger"> {{ $message }} </span>
                                @enderror   
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="cta_link">CTA Link</label>
                                <input value="{{ $banner?->cta_link }}" name="cta_link" id="cta_link" type="text" class="form-control">
                                @error('cta_link')
                                <span class="text-danger"> {{ $message }} </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="image">Model Image</label>
                                <input name="image" id="file-pond" type="file" class="file-pond">
                                @error('image')
                                <span class="text-danger"> {{ $message }} </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary mt-2">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
@push('scripts')
<script>
    FilePond.registerPlugin(FilePondPluginImagePreview);

    // Wait until the DOM is fully loaded
    document.addEventListener('DOMContentLoaded', function() {
        FilePond.create(document.querySelector('.file-pond'), {
            storeAsFile: true,
            allowReorder: true,
            imageCropAspectRatio: '2:1',
        });
    });
</script>
@endpush
@endsection