<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Log In | Silva - Responsive Admin Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc." />
    <meta name="author" content="Zoyothemes" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('backend/assets/images/favicon.ico') }}">

    <!-- App css -->
    <link href="{{ asset('backend/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Icons -->
    <link href="{{ asset('backend/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />

</head>

<body class="bg-primary-subtle">
    <!-- END wrapper -->
    <div class="account-page">
        <div class="container-fluid p-0">
            <div class="row align-items-center g-0">
                <div class="col-xl-5 m-auto">
                    <div class="row">
                        <div class="col-md-8 mx-auto">
                            <div class="card p-3">
                                <div class="card-body">

                                    <div class="mb-0 border-0 p-md-5 p-lg-0 p-4">
                                        <div class="mb-4 p-0 text-center">
                                            <a class='auth-logo' href='index.html'>
                                                <img src="{{ asset('backend/assets/images/logo-dark.png') }}" alt="logo-dark" class="mx-auto" height="28" />
                                            </a>
                                        </div>

                                        <div class="auth-title-section mb-3 text-center">
                                            <h3 class="text-dark fs-20 fw-medium mb-2">Welcome back</h3>
                                            <p class="text-dark text-capitalize fs-14 mb-0">Sign in to continue to silve.</p>
                                        </div>
                                        <div class="pt-0">
                                            <form method="POST" action="{{ route('register') }}" class=" my-4">
                                                @csrf
                                                <div class="form-group mb-3">
                                                    <label for="username" class="form-label">Username</label>
                                                    <input class="form-control" name="name" type="text" id="username" placeholder="Enter your Username">
                                                    @error('name')
                                                    <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>

                                                <div class="form-group mb-3">
                                                    <label for="emailaddress" class="form-label">Email address</label>
                                                    <input name="email" class="form-control" type="email" id="emailaddress" placeholder="Enter your email">
                                                    @error('email')
                                                    <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>

                                                <div class="form-group mb-3">
                                                    <label for="password" class="form-label">Password</label>
                                                    <input name="password" class="form-control" type="password" id="password" placeholder="Enter your password">
                                                    @error('password')
                                                    <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="password_confirmation" class="form-label">Confirm Password</label>
                                                    <input name="password_confirmation" class="form-control" type="password" id="password_confirmation" placeholder="Enter confirm password">
                                                    @error('password_confirmation')
                                                    <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>


                                                <div class="form-group mb-0 row">
                                                    <div class="col-12">
                                                        <div class="d-grid">
                                                            <button class="btn btn-primary" type="submit"> Register</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>



                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor -->
    <script src="{{ asset('backend/assets/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/waypoints/lib/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/jquery.counterup/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/feather-icons/feather.min.js') }}"></script>

    <!-- App js-->
    <script src="{{ asset('backend/assets/js/app.js') }}"></script>

</body>

</html>