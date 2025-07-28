@extends('layouts.backend')
@section('title', 'Add Client Message |')
@section('backend')
    <div class="card shadow mt-3">
        <div class="card-header">
            <h5 class="text-center">All Clients Message</h5>
        </div>
        <div class="card-body mt-0">
            <div class="table-responsive table-card mt-0">
                <table class="table table-borderless table-centered align-middle table-nowrap mb-0">
                    <thead class="text-muted table-light">
                        <tr>
                            <th scope="col" class="cursor-pointer">Name</th>
                            <th scope="col" class="cursor-pointer">Email</th>
                            <th scope="col" class="cursor-pointer">Phone No</th>
                            <th scope="col" class="cursor-pointer">Subject</th>
                            <th scope="col" class="cursor-pointer">Message</th>
                            <th scope="col" class="cursor-pointer">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($contects as $key => $contect)
                            <tr>
                                <td>
                                    <img src="https://api.dicebear.com/9.x/initials/svg?seed={{$contect->name}}"
                                        class="avatar avatar-sm rounded-circle me-3">
                                    {{$contect->name}}
                                </td>
                                <td>{{$contect->email}}</td>
                                <td>{{$contect->number}}</td>
                                <td>{{$contect->subject}}</td>
                                <td>{{$contect->message}}</td>

                                <td>
                                    <a wire:navigate class="btn btn-sm btn-outline-info me-1"
                                        href="{{ route('contect.view', $contect->id) }}" title="View">
                                        <i class="mdi mdi-eye"></i>
                                    </a>
                                    <a onclick="return confirm('Are you sure you want to delete this blog post?');"
                                        class="btn btn-sm btn-outline-danger" href="{{ route('contect.delete', $contect->id) }}"
                                        title="Delete">
                                        <i class="mdi mdi-delete"></i>
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4">No Found!</td>
                            </tr>
                        @endforelse
                    </tbody><!-- end tbody -->
                </table><!-- end table -->
                <div class="text-end">
                    <div class="text-end d-block">{{$contects->links() }}</div>
                </div>
            </div>
        </div>
    </div>
@endsection