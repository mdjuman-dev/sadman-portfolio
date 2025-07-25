@extends('layouts.backend')
@section('title', 'All Blog Post')
@section('backend')
<div class="card mt-2">
    <div class="card-body">
        <div class="row">
            <div class="col-lg-5">
                <div class="card shadow">
                    <div class="card-header">
                        <h5 class="card-title">Add Category</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('category.storeOrUpdate',$editCategory?->id) }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="" class="form-label">Category Name<span class="text-danger">*</span></label>
                                <input name="name" type="text" class="form-control" value="{{ old('name',$editCategory->name) }}" placeholder="Name">
                                @error('name')
                                <small>{{ $message }}</small>
                                @enderror
                            </div>
                            @if ($editCategory)
                            <div class="form-check form-switch mt-2">
                                <input class="form-check-input" type="checkbox" role="switch"
                                    id="flexSwitchCheckChecked" name="status" {{ $editCategory->status ? 'checked' : '' }}>
                                <label class="form-check-label" for="flexSwitchCheckChecked">Status</label>
                            </div>
                            @endif
                            <button class="btn btn-primary btn-sm mt-2">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="card shadow">
                    <div class="card-header">
                        <h5 class="card-title">All Categories</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped table-hover text-center align-middle shadow-sm">
                            <thead class="table-dark">
                                <tr>
                                    <th scope="col">Sl</th>
                                    <th scope="col">Name</th>
                                    <th scope="col" width="150px">Status</th>
                                    <th scope="col" width="150px">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($categories as $key=>$category)
                                <tr>
                                    <td>{{ ++$key }}</td>
                                    <td>{{$category->name }}</td>
                                    <td>{!! general_status($category->status) !!}</td>
                                    <td>
                                        <a class=" btn btn-sm btn-primary" href="{{ route('category.index',$category->id) }}">
                                            <span class="mdi mdi-pencil "></span>
                                        </a>
                                        <a onclick="return confirm('Are you sure you want to delete this Category?');" class=" btn btn-sm btn-danger" href="{{ route('category.delete',$category->id) }}">
                                            <span class="mdi mdi-delete"></span>
                                        </a>
                                    </td>

                                </tr>
                                @empty
                                <tr>
                                    <td colspan="4">Not Product Found!</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection