@extends('layouts.backend')
@section('title', 'Skills')
@section('backend')
<div class="container-fluid mt-2">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">All Skills</div>
                <div class="card-body">
                    <table class="table table-responsive">
                        <thead class="text-center">
                            <tr>
                                <th>Skill Name</th>
                                <th>Category</th>
                                <th>Percentage</th>
                                <th>Duration</th>
                                <th>Delay</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @foreach($skills as $skill)
                                <tr>
                                    <td>{{ $skill->name }}</td>
                                    <td>{{ ucfirst($skill->category) }}</td>
                                    <td>{{ $skill->percentage }}%</td>
                                    <td>{{ $skill->duration }}s</td>
                                    <td>{{ $skill->delay }}s</td>
                                    <td>
                                        <span class="badge {{ $skill->status ? 'bg-success' : 'bg-secondary' }}">
                                            {{ $skill->status ? 'Active' : 'Inactive' }}
                                        </span>
                                    <td>
                                    <td>
                                        <a href="{{ route('skill.edit', $skill->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                        <form action="{{ route('skill.destroy', $skill->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button onclick="return confirm('Are you sure want to delete this skill?')" type="submit" class="btn btn-danger btn-sm">Delete</button>
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