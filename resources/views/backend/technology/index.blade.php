@extends('layouts.backend')
@section('title', 'Technologies |')
@section('backend')
<div class="card mt-3">
    <div class="card-body">
        <div class="row">
            <div class="col-lg-5">
                <div class="card shadow">
                    <div class="card-header">
                        <h5 class="catd-title">Add Technology</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('technology.storeOrUpdate', $editTech?->id) }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label class="form-label" for="name">Name <span class="text-danger">*</span></label>
                                <input name="name" class="form-control" type="text" placeholder="Enter Technology name"
                                    value="{{ old('name', $editTech?->name) }}">
                                <x-input-error :messages="$errors->get('name')" class="mt-2 text-danger" />
                            </div>
                            @if ($editTech)
                            <div class="form-check form-switch mt-2">
                                <input class="form-check-input" type="checkbox" role="switch"
                                    id="flexSwitchCheckChecked" name="status" {{ $editTech->status ? 'checked' : '' }}>
                                <label class="form-check-label" for="flexSwitchCheckChecked">Status</label>
                            </div>
                            @endif
                            <button class="btn btn-sm btn-primary mt-3"><i class="mdi mdi-content-save pe-1"></i>Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="card shadow">
                    <div class="card-header">
                        <h5 class="text-center">All </h5>
                    </div>
                    <div class="card-body">
                        <table
                            class="table table-bordered table-striped table-hover text-center align-middle shadow-sm">
                            <thead class="table-dark">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Status</th>
                                    <th scope="col" width="150px">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($technologies as $key => $technology)
                                <tr>
                                    <td>{{ ++$key }}</td>
                                    <td>{{$technology->name }}</td>
                                    <td>{!! general_status($technology->status) !!}</td>
                                    <td>
                                        <a class="btn btn-sm btn-outline-primary"
                                            href="{{ route('technology.index', $technology->id) }}">
                                            <span class="mdi mdi-pencil"></span>
                                        </a>
                                        <a class="btn btn-sm btn-outline-danger"
                                            onclick="return confirm('Are you sure you want to delete this Review?');"
                                            href="{{ route('technology.delete', $technology->id) }}">
                                            <span class="mdi mdi-delete"></span>
                                        </a>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="4">No Found!</td>
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