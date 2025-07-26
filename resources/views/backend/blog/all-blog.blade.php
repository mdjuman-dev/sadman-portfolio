@extends('layouts.backend')
@section('title', 'All Blog Post')
@section('backend')
<div class="card">
    <div class="card-header">
        <h5 class="card-title"></h5>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped table-hover text-center align-middle shadow-sm">
            <thead class="table-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Image</th>
                    <th scope="col">Title</th>
                    <th scope="col">Category</th>
                    <th scope="col">Content</th>
                    <th scope="col">Status</th>
                    <th scope="col" width="150px">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($blogs as $key=>$blog )
                <tr>
                    <td>{{ ++$key }}</td>

                    <td width="150px"><img width="120px" src="{{ asset('storage/'.$blog->image) }}" alt=""></td>
                    <td>{{Str::limit( $blog->title ,25) }}</td>
                    <td>{{$blog->category->name }}</td>
                    <td>{!! Str::limit( $blog->content ,30) !!}</td>
                    <td>{!! general_status($blog->status) !!}</td>
                    <td>
                        <a class=" btn btn-sm btn-primary" href="{{ route('blog.index',$blog->id) }}">
                            <span class="mdi mdi-pencil "></span>
                        </a>
                        <a onclick="return confirm('Are you sure you want to delete this Category?');" class=" btn btn-sm btn-danger" href="{{ route('blog.delete',$blog->id) }}">
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
@endsection