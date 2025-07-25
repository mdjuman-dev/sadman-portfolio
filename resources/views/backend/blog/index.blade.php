@extends('layouts.backend')
@section('title', 'Blog Post')
@section('backend')
<div class="card">
    <div class="card-header">
        <h5 class="card-title"></h5>
    </div>
    <div class="card-body">
        <form action="" method="post">
            @csrf
            <div class="form-group">
                <label for="" class="form-label">Category Name<span class="text-danger">*</span></label>
                <input name="name" type="text" class="form-control" value="{{ old('name',$editCategory) }}" placeholder="Name">
                @error('name')
                <small>{{ $message }}</small>
                @enderror
            </div>
        </form>

    </div>
</div>
@endsection