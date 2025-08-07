@extends('layouts.backend')
@section('title', 'Settings')
@push('css')
<link rel="stylesheet" href="{{ asset('backend/assets/css/filepond.css') }}">
<link rel="stylesheet" href="{{ asset('backend/assets/css/filepond-plugin-image-preview.css') }}">
@endpush
@section('backend')
<div class="card col-lg-11 m-auto mt-5">
    <div class="card-header">
        <h5 class="card-title mb-0">Settings Page</h5>
    </div>

    <div class="card-body">
        <ul class="nav nav-pills nav-justified bg-light" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" data-bs-toggle="tab" href="#general" role="tab">
                    <span class="d-block d-sm-none"><i class="mdi mdi-home-account"></i></span>
                    <span class="d-none d-sm-block">General Settings</span>
                </a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" data-bs-toggle="tab" href="#seo" role="tab">
                    <span class="d-block d-sm-none"><i class="mdi mdi-cog"></i></span>
                    <span class="d-none d-sm-block">SEO Settings</span>
                </a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" data-bs-toggle="tab" href="#tracking" role="tab">
                    <span class="d-block d-sm-none"><i class="mdi mdi-account-outline"></i></span>
                    <span class="d-none d-sm-block">Tracking</span>
                </a>
            </li>
        </ul>
        <div class="tab-content p-3 text-muted">

            {{-- General Settings --}}
            <div class="tab-pane fade show active" id="general" role="tabpanel">
                <form action="{{ route('settings.general.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mt-2">
                        <label for="">Site Name</label>
                        <input type="text" name="name" class="form-control"
                            value="{{ old('name', $settings->name ?? '') }}">
                    </div>
                    <div class="row mt-2">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="email" name="email" class="form-control"
                                    value="{{ old('email', $settings->email ?? '') }}">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">Phone</label>
                                <input type="text" name="phone" class="form-control"
                                    value="{{ old('phone', $settings->phone ?? '') }}">
                            </div>
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">Facebook Link</label>
                                <input type="text" name="facebook" class="form-control"
                                    value="{{ old('facebook', $settings->facebook ?? '') }}">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">Instagram Link</label>
                                <input type="text" name="instagram" class="form-control"
                                    value="{{ old('instagram', $settings->instagram ?? '') }}">
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">Linkedin</label>
                                <input type="text" name="linkedin" class="form-control"
                                    value="{{ old('linkedin', $settings->linkedin ?? '') }}">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">Twitter Link</label>
                                <input type="text" name="twitter" class="form-control"
                                    value="{{ old('twitter', $settings->twitter ?? '') }}">
                            </div>
                        </div>
                    </div>




                    <div class="form-group mt-2">
                        <label for="">Address</label>
                        <textarea type="text" name="address"
                            class="form-control">{{ old('address', $settings->address ?? '') }}</textarea>
                    </div>

                    <div class="row mt-2">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">Site Logo</label>
                                <input type="file" name="logo" id="logo">
                                @error('logo')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <img width="80px" src="{{ asset('storage/' . $settings?->logo) }}" alt="logo">
                            @error('logo')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">Favicon</label>
                                <input type="file" name="favicon" id="favicon">
                            </div>
                            <img width="80px" src="{{ asset('storage/' . $settings?->favicon) }}" alt="Favicon">
                            @error('favicon')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    <div class="text-end mt-3">
                        <button class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>

            {{-- SEO Settings --}}
            <div class="tab-pane fade" id="seo" role="tabpanel">
                <form action="{{ route('settings.seo.update') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="">Meta Title</label>
                        <input type="text" name="meta_title" class="form-control"
                            value="{{ old('meta_title', $settings->meta_title ?? '') }}">
                    </div>
                    <div class="form-group mt-2">
                        <label for="">Meta Description</label>
                        <textarea name="meta_description" rows="4"
                            class="form-control">{{ old('meta_description', $settings->meta_description ?? '') }}</textarea>
                    </div>
                    <div class="form-group mt-2">
                        <label for="">Meta Tags</label>
                        <input type="text" name="meta_tags" class="form-control"
                            value="{{ old('meta_tags', $settings->meta_tags ?? '') }}">
                    </div>
                    <div class="form-group mt-2">
                        <label for="">Meta Keywords</label>
                        <input type="text" name="meta_keywords" class="form-control"
                            value="{{ old('meta_keywords', $settings->meta_keywords ?? '') }}">
                    </div>

                    <div class="text-end mt-3">
                        <button class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>

            {{-- Tracking --}}
            <div class="tab-pane fade" id="tracking" role="tabpanel">
                <form action="{{ route('settings.tracking.update') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="">Facebook Pixel Code</label>
                        <textarea name="pixel_code" rows="6"
                            class="form-control">{{ old('pixel_code', $settings->pixel_code ?? '') }}</textarea>
                    </div>
                    <div class="form-group mt-2">
                        <label for="">Google Tag Manager Code</label>
                        <textarea name="gtm_code" rows="6"
                            class="form-control">{{ old('gtm_code', $settings->gtm_code ?? '') }}</textarea>
                    </div>

                    <div class="text-end mt-3">
                        <button class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
@push('scripts')
<script src="{{ asset('backend/assets/js/filepond-plugin-image-preview.js') }}"></script>
<script src="{{ asset('backend/assets/js/filepond.js') }}"></script>
<script src="{{ asset('backend/assets/js/filepond.jquery.js') }}"></script>
<script>
    $(document).ready(function() {
        $('#preloader').fadeOut(500);

        FilePond.registerPlugin(FilePondPluginImagePreview);
        $('#logo, #favicon').filepond({
            storeAsFile: true,
            allowReorder: true,
        });
    });
</script>
@endpush
@endsection