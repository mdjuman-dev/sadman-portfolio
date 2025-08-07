@extends('layouts.backend')
@section('title', 'Education List |')
@section('backend')
<div class="container-fluid mt-2">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-lg-6">Education List</div>
                        <div class="col-lg-6 text-end"><a href="{{ route('education.create') }}"
                                class="btn btn-primary"><i class="mdi mdi-plus pe-1"></i>Add Education</a></div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-responsive">
                        <thead class="text-center">
                            <tr>
                                <th>#</th>
                                <th>Degree</th>
                                <th>Institution</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Description</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @foreach($educations as $index => $education)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $education->degree }}</td>
                                <td>{{ $education->institution }}</td>
                                <td>{{ $education->start_date }}</td>
                                <td>{{ $education->end_date }}</td>
                                <td>{{ Str::limit($education->description, 30) }}</td>
                                <td>
                                    <span class="badge {{ $education->status ? 'bg-success' : 'bg-secondary' }}">
                                        {{ $education->status ? 'Active' : 'Inactive' }}
                                    </span>
                                <td>
                                    <a wire:navigate href="{{ route('education.edit', $education->id) }}"
                                        class="btn btn-warning btn-sm"><span class="mdi mdi-pencil"></span></a>
                                    <form action="{{ route('education.destroy', $education->id) }}" method="POST"
                                        style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button onclick="return confirm('Are you sure want to delete this education?')"
                                            type="submit" class="btn btn-danger btn-sm"><span
                                                class="mdi mdi-delete"></span></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection