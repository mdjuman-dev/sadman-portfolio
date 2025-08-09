@extends('layouts.backend')
@section('title','Create Review')
@push('css')
<link rel="stylesheet" href="{{ asset('backend/assets/css/rte_theme_default.css') }}">
<link href="{{ asset('backend/assets/css/select2.min.css') }}" rel="stylesheet">
<style>
    .rte-modern.rte-desktop.rte-toolbar-default {
        height: 450px;
    }
</style>
@endpush
@section('backend')
<div class="card mt-4">
    <div class="card-body">
        <div class="col-lg-8 m-auto mt-4">
            <div class="card  shadow">
                <form action="{{ route('review.storeOrUpdate',$editreview?->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-header">
                        <div class="row">
                            <div class="col-lg-6">
                                <h5 class="card-title">Add review</h5>
                            </div>
                            <div class="col-lg-6 text-end">
                                <a wire:navigate href="{{ route('review.showReview') }}" class="btn btn-primary btn-sm">All Review</a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="name">Client Name</label>
                                    <input name="name" type="text" class="form-control" value="{{ old('name',$editreview?->name) }}">
                                    @error('name')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="profetion">Client Profetion</label>
                                    <input name="profetion" type="text" class="form-control" value="{{ old('profetion',$editreview?->profetion) }}">
                                    @error('profetion')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="image">Client Image</label>
                                    <input name="image" type="file" class="file-pond1" value="{{ old('image',$editreview?->image) }}">

                                    @error('image')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <label for="image">
                                    <td>
                                        <img width="200px" class="lazy" src="{{ asset('storage/'. $editreview?->image) }}" alt="">
                                    </td>
                                </label>
                            </div>
                        </div>


                        <div class="form-group my-2">
                            <label for="message">Enter Client Message</label>
                            <textarea style="height:300px ; " name=" message" id="" class="form-control">{{ old('message',$editreview?->message) }}</textarea>
                            @error('message')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        @if($editreview)
                        <div class="form-check form-switch my-2">
                            <input class="form-check-input" type="checkbox" name="status" value="1"
                                {{ $editreview?->status ? 'checked' : '' }}>
                            <label class="form-check-label">Status</label>
                        </div>
                        @endif
                        <button class="btn btn-primary ">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script src="{{ asset('backend/assets/js/filepond-plugin-image-preview.js') }}"></script>
<script src="{{ asset('backend/assets/js/filepond.jquery.js') }}"></script>
<script src="{{ asset('backend/assets/js/filepond.js') }}"></script>
<script src="{{ asset('backend/assets/js/rte.js') }}"></script>
<script>
    $(document).ready(function() {
        $('#preloader').fadeOut(500);
        FilePond.registerPlugin(FilePondPluginImagePreview);
        $('.file-pond1,.file-pond2').filepond({
            storeAsFile: true,
            allowReorder: true,
            imageCropAspectRatio: '2:1',
        });

        let editor1 = new RichTextEditor("#descriptionEditor");
        $('#skills').select2();
    });
</script>
@endpush