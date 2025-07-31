<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>@yield('title') {{ env('APP_NAME') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc." />
    <meta name="author" content="Zoyothemes" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <link href="{{ asset('backend/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" id="app-style" />
    <link href="{{ asset('backend/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/assets/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/assets/css/notyf.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/assets/css/rte_theme_default.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/assets/css/filepond.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/assets/css/filepond-plugin-image-preview.css') }}" rel="stylesheet" type="text/css" />
    @livewireStyles
    @stack('css')
    <style>
        #nprogress .bar {
            background: linear-gradient(to right, #287f71, #287f71) !important;
            height: 4px !important;
            border-radius: 5px;
        }

        #nprogress .peg {
            box-shadow: 0 0 10px #287f71, 0 0 5px #287f71 !important;
        }
    </style>
</head>

<!-- body start -->

<body data-menu-color="light" data-sidebar="default">
    <div id="app-layout">
        <!-- Topbar Start -->
        <div class="topbar-custom">
            <div class="container-fluid">
                <div class="d-flex justify-content-between">
                    <ul class="list-unstyled topnav-menu mb-0 d-flex align-items-center">
                        <li>
                            <button class="button-toggle-menu nav-link">
                                <i data-feather="menu" class="noti-icon"></i>
                            </button>
                        </li>
                        <li class="d-none d-lg-block">
                            @php
                                $hour = now()->hour;
                                if ($hour >= 5 && $hour < 12) {
                                    $greeting = 'Good Morning';
                                } elseif ($hour >= 12 && $hour < 17) {
                                    $greeting = 'Good Afternoon';
                                } elseif ($hour >= 17 && $hour < 21) {
                                    $greeting = 'Good Evening';
                                } else {
                                    $greeting = 'Good Night';
                                }
                            @endphp
                            <h5 class="mb-0">{{ $greeting }}, {{ Auth::user()->name }} Sir</h5>
                        </li>
                    </ul>

                    <ul class="list-unstyled topnav-menu mb-0 d-flex align-items-center">
                        <li class="d-none d-sm-flex">
                            <a href="{{ route('sitemap.download') }}" class="btn btn-primary btn-sm">
                                <i class="mdi mdi-download"></i> Sitemap
                            </a>
                        </li>
                        <li class="d-none d-sm-flex">
                            <button type="button" class="btn nav-link" data-toggle="fullscreen">
                                <i data-feather="maximize" class="align-middle fullscreen noti-icon"></i>
                            </button>
                        </li>


                        <li class="dropdown notification-list topbar-dropdown">
                            <a class="nav-link dropdown-toggle nav-user me-0" data-bs-toggle="dropdown"
                                href="index.html#" role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="{{ asset('backend/assets/images/users/user-2.jpg') }}" alt="user-image"
                                    class="rounded-circle">
                                <span class="pro-user-name ms-1">
                                    John Smith <i class="mdi mdi-chevron-down"></i>
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end profile-dropdown ">
                                <!-- item-->
                                <div class="dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Welcome !</h6>
                                </div>

                                <!-- item-->
                                <a class='dropdown-item notify-item' href='{{ route('profile.edit') }}'>
                                    <i class="mdi mdi-account-circle-outline fs-16 align-middle"></i>
                                    <span>My Account</span>
                                </a>

                                <div class="dropdown-divider"></div>

                                <!-- item-->
                                <a class="dropdown-item notify-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="mdi mdi-location-exit fs-16 align-middle"></i>
                                    <span>Logout</span>
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>


                            </div>
                        </li>

                    </ul>
                </div>

            </div>

        </div>
        <!-- end Topbar -->

        <!-- Left Sidebar Start -->
        <div class="app-sidebar-menu">
            <div class="h-100" data-simplebar>

                <!--- Sidemenu -->
                <div id="sidebar-menu">

                    <div class="logo-box">
                        <a class='logo logo-light' target="_blank" href='{{route('home')}}'>
                            <span class="logo-sm">
                                <img src="{{ asset('backend/assets/images/logo-sm.png')}}" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="{{ asset('backend/assets/images/logo-light.png')}}" alt="" height="24">
                            </span>
                        </a>
                        <a class='logo logo-dark' target="_blank" href='{{route('home')}}'>
                            <span class="logo-sm">
                                <img src="{{ asset('backend/assets/images/logo-sm.png')}}" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="{{ asset('backend/assets/images/logo-dark.png')}}" alt="" height="24">
                            </span>
                        </a>
                    </div>

                    @include('backend.main_menu')

                </div>
                <!-- End Sidebar -->

                <div class="clearfix"></div>

            </div>
        </div>
        <!-- Left Sidebar End -->
        <div class="content-page">
            @yield('backend')

            <!-- Footer Start -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col fs-13 text-muted text-center">Development
                            by <a target="_blank" href="https://juman.techitnext.com/" class="text-reset fw-semibold">Md
                                Juman</a>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- end Footer -->

        </div>
    </div>
    <!-- END wrapper -->

    <!-- Vendor -->
    <script src="{{ asset('backend/assets/libs/jquery/jquery.min.js') }}"></script>
    <script src="https://apexcharts.com/samples/assets/stock-prices.js"></script>
    <script src="{{ asset('backend/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/waypoints/lib/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/jquery.counterup/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/pages/crm-dashboard.init.js') }}"></script>
    <script src="{{ asset('backend/assets/js/app.js') }}"></script>
    <script src="{{ asset('backend/assets/js/select2.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/rte.js') }}"></script>
    <script src="{{ asset('backend/assets/js/notyf.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/filepond.jquery.js') }}"></script>
    <script src="{{ asset('backend/assets/js/filepond-plugin-image-preview.js') }}"></script>
    <script src="{{ asset('backend/assets/js/filepond.js') }}"></script>
    <script>
        const notyf = new Notyf({
            duration: 5000,
            ripple: true,
            dismissible: true,
            position: {
                x: 'right',
                y: 'top',
            },
            types: [{
                type: 'success',
                background: 'green',
                icon: {
                    className: 'mdi mdi-check-circle-outline',
                    tagName: 'span',
                    color: 'white'
                }
            },
            {
                type: 'error',
                background: '#d32f2f',
                icon: {
                    className: 'mdi mdi-alert-circle-outline',
                    tagName: 'span',
                    color: 'white'
                }
            }
            ]
        });

        @if(session('success'))
            notyf.success({
                message: "{{ session('success') }}",
                icon: {
                    className: 'mdi mdi-check-circle-outline',
                    tagName: 'span',
                    color: 'white'
                }
            });
        @endif

        @if(session('error'))
            notyf.error({
                message: "{{ session('error') }}",
                icon: {
                    className: 'mdi mdi-alert-circle-outline',
                    tagName: 'span',
                    color: 'white'
                }
            });
        @endif
    </script>
    @livewireScripts
    @stack('scripts')
</body>

</html>