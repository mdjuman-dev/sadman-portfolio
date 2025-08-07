@extends('layouts.backend')
@section('title', 'Add Education |')
@section('backend')
<div class="container-fluid mt-2">
    <div class="row">
        <div class="col-lg-12">
            <form action="{{ $education?->id ? route('education.update', $education->id) : route('education.store') }}" method="POST">
                @csrf
                @if($education?->id)
                @method('PUT')
                @endif
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-lg-6">Add Education</div>
                            <div class="col-lg-6 text-end">
                                <button class="btn btn-{{ $education?->id ? 'warning' : 'primary' }}" type="submit">
                                    <i class="mdi mdi-content-save pe-1"></i> {{ $education?->id ? 'Update' : 'Submit' }}
                                </button>

                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row mb-2">
                            <div class="col-lg-6">
                                <label class="form-label">Degree <span class="text-danger">*</span></label>
                                <input value="{{ old('degree', $education?->degree) }}" type="text" class="form-control" name="degree" placeholder="Enter Degree">
                            </div>
                            <div class="col-lg-6">
                                <label class="form-label">Institution <span class="text-danger">*</span></label>
                                <input value="{{ old('institution', $education?->institution) }}" type="text" class="form-control" name="institution" placeholder="Enter Institution">
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-lg-6">
                                <label class="form-label">Start Date</label>
                                <input value="{{ old('start_date', $education?->start_date) }}" type="text" class="form-control" name="start_date" placeholder="Enter Start Date">
                            </div>
                            <div class="col-lg-6">
                                <label class="form-label">End Date</label>
                                <input value="{{ old('end_date', $education?->end_date) }}" type="text" class="form-control" name="end_date" placeholder="Enter End Date">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Description</label>
                            <textarea class="form-control" name="description" rows="4" placeholder="Enter Description">{{ old('description', $education?->description) }}</textarea>
                        </div>
                        @if($education?->id)
                        <div class="form-check mt-2">
                            <input class="form-check-input" type="checkbox" name="status" id="status" {{ old('status', $education?->status) ? 'checked' : '' }}>
                            <label class="form-check-label" for="status">Active</label>
                        </div>
                        @endif
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection