@extends('layouts.backend')
@section('title','All Reviews')
@section('backend')


<div class="card mt-2">

    <div class="card-body">

    </div>
    <div class="card-body">
        <div class="row">
            <div class="card shadow">
                <div class="card-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <h5 class="card-title">Add review</h5>
                        </div>
                        <div class="col-lg-6 text-end">
                            <a wire:navigate href="{{ route('review.index') }}" class="btn btn-primary btn-sm">Add Review</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped table-hover text-center align-middle shadow-sm">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">Sl.</th>
                                <th scope="col">Image</th>
                                <th scope="col">Name</th>
                                <th scope="col">Profetion</th>
                                <th scope="col">Review</th>
                                <th scope="col">Rating</th>
                                <th scope="col">Status</th>
                                <th scope="col" width="50px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($reviews as $key=>$review )
                            <tr>
                                <td>{{ ++$key }}</td>
                                <td>
                                    <img width="100px" class="lazy" src="{{ asset('storage/'. $review->image) }}" alt="">
                                </td>
                                <td>{{$review->name }}</td>
                                <td>{{$review->profetion }}</td>

                                <td>
                                    <span data-bs-toggle="tooltip" data-bs-placement="left"
                                        title="{{ strip_tags($review->message) }}">
                                        {!! Str::limit(strip_tags($review->message), 100) !!}
                                    </span>
                                </td>
                                <td>{{$review->rating }}</td>
                                <td>{!! general_status($review->status) !!}</td>
                                <td>
                                    <div class="btn-group">
                                        <a wire:navigate class="btn btn-primary btn-sm" href="{{route('review.index',$review->id)}}">
                                            <span class="mdi mdi-pencil"></span>
                                        </a>
                                        <a class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this Review?');" href="{{route('review.delete',$review->id)}}">
                                            <span class="mdi mdi-delete"></span>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="7">No Found!</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                    @if ($reviews->hasPages())
                    <nav class="box-pagination d-flex justify-content-center mt-4" aria-label="Page navigation">
                        <ul class="pagination pagination-sm">
                            {{-- Previous --}}
                            @if ($reviews->onFirstPage())
                            <li class="page-item disabled">
                                <span class="page-link">«</span>
                            </li>
                            @else
                            <li class="page-item">
                                <a class="page-link" href="{{ $reviews->previousPageUrl() }}" rel="prev">«</a>
                            </li>
                            @endif

                            {{-- Page Numbers --}}
                            @foreach ($reviews->links()->elements[0] as $page => $url)
                            @if ($page == $reviews->currentPage())
                            <li class="page-item active">
                                <span class="page-link">{{ $page }}</span>
                            </li>
                            @else
                            <li class="page-item">
                                <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                            </li>
                            @endif
                            @endforeach

                            {{-- Next --}}
                            @if ($reviews->hasMorePages())
                            <li class="page-item">
                                <a class="page-link" href="{{ $reviews->nextPageUrl() }}" rel="next">»</a>
                            </li>
                            @else
                            <li class="page-item disabled">
                                <span class="page-link">»</span>
                            </li>
                            @endif
                        </ul>
                    </nav>

                    {{-- Page Info --}}
                    <p class="text-center text-muted small mb-0">
                        Showing page {{$reviews ->currentPage() }} of {{$reviews ->lastPage() }} —
                        Total Posts: {{$reviews ->total() }}
                    </p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection