@extends('layouts.backend')
@section('title', 'Skills |')
@section('backend')
<div class="container-fluid mt-2">
    <div class="row">
        <div class="col-lg-12">
            <form action="{{ route('skill.store') }}" method="POST">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-lg-6">Add Skill</div>
                            <div class="col-lg-6 text-end"><button class="btn btn-primary" type="submit">Submit</button></div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row mb-2">
                            <div class="form-group col-lg-6">
                                <label class="form-label">Skill Name <span class="text-danger">*</span></label>
                                <input type="text" value="{{ old('name') }}" class="form-control" name="name" placeholder="Enter skill name">
                            </div>
                            <div class="form-group col-lg-6">
                                <label class="form-label">Skill Percentage <span class="text-danger">*</span></label>
                                <input type="number" value="{{ old('percentage') }}" class="form-control" name="percentage" placeholder="Enter skill percentage" min="0" max="100">
                            </div>
                        </div>
                        <div class="form-group mb-2">
                            <label class="form-label">Skill Category <span class="text-danger">*</span></label>
                            <select name="category" class="form-select">
                                <option value="design">Design Skills</option>
                                <option value="development">Development Skills</option>
                            </select>
                        </div>
                        <div class="row">
                            <div class="form-group col-lg-6">
                                <label class="form-label">Enter Skill Duration</label>
                                <input type="text" value="{{ old('duration') }}" class="form-control" name="duration" placeholder="Enter skill duration (e.g., 0.5s, 1s)">
                            </div>
                            <div class="form-group col-lg-6">
                                <label class="form-label">Skill Delay</label>
                                <input type="text" value="{{ old('delay') }}" class="form-control" name="delay" placeholder="Enter skill delay in seconds">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection