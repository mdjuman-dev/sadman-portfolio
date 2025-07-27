@extends('layouts.backend')
@section('title', 'Edit Skill |')
@section('backend')
<div class="container-fluid mt-2">
    <div class="row">
        <div class="col-lg-12">
            <form action="{{ route('skill.update', $skill->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-lg-6">Edit Skill</div>
                            <div class="col-lg-6 text-end"><button class="btn btn-primary" type="submit">Update</button></div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row mb-2">
                            <div class="form-group col-lg-6">
                                <label class="form-label">Skill Name <span class="text-danger">*</span></label>
                                <input type="text" value="{{ old('name', $skill->name) }}" class="form-control" name="name" placeholder="Enter skill name">
                            </div>
                            <div class="form-group col-lg-6">
                                <label class="form-label">Skill Percentage <span class="text-danger">*</span></label>
                                <input type="number" value="{{ old('percentage', $skill->percentage) }}" class="form-control" name="percentage" placeholder="Enter skill percentage" min="0" max="100">
                            </div>
                        </div>
                        <div class="form-group mb-2">
                            <label class="form-label">Skill Category <span class="text-danger">*</span></label>
                            <select name="category" class="form-select">    
                                <option value="design" {{ $skill->category == 'design' ? 'selected' : '' }}>Design Skills</option>
                                <option value="development" {{ $skill->category == 'development' ? 'selected' : '' }}>Development Skills</option>       
                            </select>
                        </div>
                        <div class="row">
                            <div class="form-group col-lg-6">
                                <label class="form-label">Enter Skill Duration</label>
                                <input type="text" value="{{ old('duration', $skill->duration) }}" class="form-control" name="duration" placeholder="Enter skill duration (e.g., 0.5s, 1s)">
                            </div>
                            <div class="form-group col-lg-6">
                                <label class="form-label">Skill Delay</label>
                                <input type="text" value="{{ old('delay', $skill->delay) }}" class="form-control" name="delay" placeholder="Enter skill delay in seconds" min="0">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-lg-6">
                                <label class="form-label">Status</label>
                            <select name="status" class="form-select">
                                <option value="1" {{ $skill->status ? 'selected' : '' }}>Active</option>
                                <option value="0" {{ !$skill->status ? 'selected' : '' }}>Inactive</option>
                            </select>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection