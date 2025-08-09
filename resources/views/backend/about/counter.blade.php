@extends('layouts.backend')
@section('title','Counter Update')
@section('backend')

<div class="card mt-2">
    <div class="card-body">
        <div class="row">
            <div class="col-lg-8 m-auto mt-2">
                <div class="card  shadow">
                    <div class="card-header">
                        <h5 class="card-title">Update Counter</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('about.store.counter') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="title">Enter Title</label>
                                <input name="title" type="text" class="form-control" value="{{ old('title',$counter?->title) }}">
                            </div>
                            <div class="row mt-2">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="years">Years of Experience</label>
                                        <input name="years" type="number" class="form-control" value="{{ old('years',$counter?->years) }}">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="years">Project Complete</label>
                                        <input name="project_complete" type="number" class="form-control" value="{{ old('project_complete',$counter?->project_complete) }}">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="years"> Natural Products</label>
                                        <input name="natural_product" type="number" class="form-control" value="{{ old('natural_product',$counter?->natural_product) }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="clients-reviews">Clients Reviews</label>
                                        <input name="clients_reviews" type="number" class="form-control" value="{{ old('clients_reviews',$counter?->clients_reviews) }}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="satisfied-clientd">Satisfied Clientd</label>
                                        <input name="satisfied_clientd" type="number" class="form-control" value="{{ old('satisfied_clientd',$counter?->satisfied_clientd) }}">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group my-2">
                                <label for="dec">Enter Description</label>
                                <textarea name="dec" id="dec" class="form-control">{{ old('dec',$counter?->dec) }}</textarea>
                            </div>
                            <div class="form-check form-switch my-1">
                                <input class="form-check-input" type="checkbox" name="status" value="1"
                                    {{ $counter?->status ? 'checked' : '' }}>
                                <label class="form-check-label">Status</label>
                            </div>
                            <button class="btn btn-primary btn-sm">Submit</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection