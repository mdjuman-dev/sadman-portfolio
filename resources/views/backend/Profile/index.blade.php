@extends('layouts.backend')
@section('title', 'Projects |')
@section('backend')

<div class="card mt-3 ">
    <div class="card-header">
        <h5>Profile Update</h5>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-lg-6">
                <div class="card shadow">
                    <div class="card-header">
                        <h5 class="card-title">Update Name Or Email</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('profile.update') }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="name" class="form-label">Name:</label>
                                <input type="text" name="name" value="{{ old('name', Auth::user()->name) }}" class="form-control" required>
                                @error('name')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email:</label>
                                <input type="email" name="email" value="{{ old('email', Auth::user()->email) }}" class="form-control" required>
                                @error('email')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Update Profile</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card shadow ">
                    <div class="card-header">
                        <h5>Change Password</h5>
                    </div>
                    <div class="card-body">
                        <div id="password-section">
                            <label>Enter Current Password:</label>
                            <input type="password" id="current_password" class="form-control mb-2" placeholder="Current Password">
                            <button type="button" id="checkPassword" class="btn btn-sm btn-dark">Check Password</button>
                            <div id="currentPasswordMsg" class="mt-2"></div>
                        </div>
                        <form id="passwordUpdateForm" action="{{ route('profile.updatePassword') }}" method="POST" style="display:none;">
                            @csrf
                            @method('PUT')
                            <div class="mt-3">
                                <label>New Password:</label>
                                <input type="password" name="password" class="form-control" required>
                                @error('password') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                            <div class="mt-3">
                                <label>Confirm New Password:</label>
                                <input type="password" name="password_confirmation" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-primary mt-3">Update Password</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@push('scripts')
<script>
    $(document).ready(function() {
        $('#checkPassword').click(function() {
            let password = $('#current_password').val();
            $('#currentPasswordMsg').html('Checking...');

            $.ajax({
                url: "{{ route('profile.checkPassword') }}",
                type: "POST",
                data: {
                    _token: "{{ csrf_token() }}",
                    password: password
                },
                success: function(response) {
                    if (response.match) {
                        $('#currentPasswordMsg').html('<span class="text-success">Password matched. You can now set a new password.</span>');
                        $('#passwordUpdateForm').show();
                    } else {
                        $('#currentPasswordMsg').html('<span class="text-danger">Incorrect password.</span>');
                        $('#passwordUpdateForm').hide();
                    }
                }
            });
        });

       
    });
</script>
@endpush

@endsection