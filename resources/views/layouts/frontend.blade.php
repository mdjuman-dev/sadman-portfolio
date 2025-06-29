<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="#">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.svg')}}">

    <title>@yield('title') - {{ env("APP_NAME") }}</title>
    <!-- Bootstrap min css -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/vendor/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/swiper.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/odometer.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/vendor/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
    @livewireStyles
</head>

<body class="color-primary-2nd">

    <!-- tpm-header-area start -->
    <header class="tmp-header-area-start header-one header--sticky header--transparent">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header-content">
                        <div class="logo">
                            <a href="{{ route('home') }}" wire:navigate>
                                <img class="logo-dark" src="{{ asset('frontend/assets/images/logo/white-logo-reeni-2.png')}}" alt="Reeni - Personal Portfolio HTML Template for developers and freelancers">
                                <img class="logo-white" src="{{ asset('frontend/assets/images/logo/logo-white.png')}}" alt="Reeni - Personal Portfolio HTML Template for developers and freelancers">
                            </a>
                        </div>
                        <nav class="tmp-mainmenu-nav d-none d-xl-block">
                            <ul class="tmp-mainmenu">
                                <li>
                                    <a class="{{ Route::is('home') ? 'active' :'' }}" href="{{ route('home') }}" wire:navigate>Home</a>
                                </li>
                                <li>
                                    <a class="{{ Route::is('about') ? 'active' :'' }}" href="{{ route('about') }}" wire:navigate>About</a>
                                </li>
                                <li>
                                    <a class="{{ Route::is('services') ? 'active' :'' }}" href="{{ route('services') }}" wire:navigate>Services</a>
                                </li>
                                <li>
                                    <a class="{{ Route::is('project') ? 'active' :'' }}" href="{{ route('project') }}" wire:navigate>Project</a>
                                </li>
                                <li>
                                    <a class="{{ Route::is('blog') ? 'active' :'' }}" href="{{ route('blog') }}" wire:navigate>Blog</a>
                                </li>

                                <li>
                                    <a class="{{ Route::is('contact') ? 'active' :'' }}" href="{{route("contact")}}" wire:navigate>Contact</a>
                                </li>
                            </ul>

                        </nav>
                        <div class="tmp-header-right">
                            <div class="social-share-wrapper d-none d-md-block">
                                <div class="social-link">
                                    <a href="index-03.html#"><i class="fa-brands fa-instagram"></i></a>
                                    <a href="index-03.html#"><i class="fa-brands fa-linkedin-in"></i></a>
                                    <a href="index-03.html#"><i class="fa-brands fa-twitter"></i></a>
                                    <a href="index-03.html#"><i class="fa-brands fa-facebook-f"></i></a>
                                </div>
                            </div>
                            <div class="actions-area">
                                <div class="tmp-side-collups-area d-none d-xl-block">
                                    <button class="tmp-menu-bars tmp_button_active"><i class="fa-regular fa-bars-staggered"></i></button>
                                </div>
                                <div class="tmp-side-collups-area d-block d-xl-none">
                                    <button class="tmp-menu-bars humberger_menu_active"><i class="fa-regular fa-bars-staggered"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- tpm-header-area end -->

    <div class="d-none d-xl-block">
        <div class="tmp-sidebar-area tmp_side_bar">
            <div class="inner">
                <div class="top-area">
                    <a href="{{ route('home') }}" class="logo">
                        <img class="logo-dark" src="{{ asset('frontend/assets/images/logo/white-logo-reeni.png')}}" alt="Reeni - Personal Portfolio HTML Template for developers and freelancers">
                        <img class="logo-white" src="{{ asset('frontend/assets/images/logo/logo-white.png')}}" alt="Reeni - Personal Portfolio HTML Template for developers and freelancers">
                    </a>
                    <div class="close-icon-area">
                        <button class="tmp-round-action-btn close_side_menu_active">
                            <i class="fa-sharp fa-light fa-xmark"></i>
                        </button>
                    </div>
                </div>
                <div class="content-wrapper">
                    <div class="image-area-feature">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('frontend/assets/images/logo/man.png')}}" alt="personal-logo">
                        </a>
                    </div>
                    <h5 class="title mt--30">Freelancer delivering exceptional Webflow, and Next.js solutions.</h5>
                    <p class="disc">I am a skilled freelancer specializing in Webflow development, Figma design, and Next.js projects. I deliver creative, dynamic, and user-centric web solutions.
                    </p>
                    <div class="short-contact-area">
                        <!-- single contact information -->
                        <div class="single-contact">
                            <i class="fa-solid fa-phone"></i>
                            <div class="information tmp-link-animation">
                                <span>Call Now</span>
                                <a href="index-03.html#" class="number">+92 (8800) - 98670</a>
                            </div>
                        </div>
                        <!-- single contact information end -->

                        <!-- single contact information -->
                        <div class="single-contact">
                            <i class="fa-solid fa-envelope"></i>
                            <div class="information tmp-link-animation">
                                <span>Mail Us</span>
                                <a href="index-03.html#" class="number">example@info.com</a>
                            </div>
                        </div>
                        <!-- single contact information end -->

                        <!-- single contact information -->
                        <div class="single-contact">
                            <i class="fa-solid fa-location-crosshairs"></i>
                            <div class="information tmp-link-animation">
                                <span>My Address</span>
                                <span class="number">66 Broklyant, New York 3269</span>
                            </div>
                        </div>
                        <!-- single contact information end -->
                    </div>
                    <!-- social area start -->
                    <div class="social-wrapper mt--20">
                        <span class="subtitle">find with me</span>
                        <div class="social-link">
                            <a href="index-03.html#"><i class="fa-brands fa-instagram"></i></a>
                            <a href="index-03.html#"><i class="fa-brands fa-linkedin-in"></i></a>
                            <a href="index-03.html#"><i class="fa-brands fa-twitter"></i></a>
                            <a href="index-03.html#"><i class="fa-brands fa-facebook-f"></i></a>
                        </div>
                    </div>
                    <!-- social area end -->
                </div>
            </div>
        </div>
        <a class="overlay_close_side_menu close_side_menu_active" href="javascript:void(0);"></a>
    </div>

    <div class="d-block d-xl-none">
        <div class="tmp-popup-mobile-menu">
            <div class="inner">
                <div class="header-top">
                    <div class="logo">
                        <a href="index.html" class="logo-area">
                            <img class="logo-dark" src="{{ asset('frontend/assets/images/logo/white-logo-reeni.png')}}" alt="Reeni - Personal Portfolio HTML Template for developers and freelancers">
                            <img class="logo-white" src="{{ asset('frontend/assets/images/logo/logo-white.png')}}" alt="Reeni - Personal Portfolio HTML Template for developers and freelancers">
                        </a>

                    </div>
                    <div class="close-menu">
                        <button class="close-button tmp-round-action-btn">
                            <i class="fa-sharp fa-light fa-xmark"></i>
                        </button>
                    </div>
                </div>
                <ul class="tmp-mainmenu">
                    <li>
                        <a class="{{ Route::is('home') ? 'active' :'' }}" href="{{ route('home') }}" wire:navigate>Home</a>
                    </li>
                    <li>
                        <a class="{{ Route::is('about') ? 'active' :'' }}" href="{{ route('about') }}" wire:navigate>About</a>
                    </li>
                    <li>
                        <a class="{{ Route::is('services') ? 'active' :'' }}" href="{{ route('services') }}" wire:navigate>Services</a>
                    </li>
                    <li>
                        <a class="{{ Route::is('project') ? 'active' :'' }}" href="{{ route('project') }}" wire:navigate>Project</a>
                    </li>
                    <li>
                        <a class="{{ Route::is('blog') ? 'active' :'' }}" href="{{ route('blog') }}" wire:navigate>Blog</a>
                    </li>

                    <li>
                        <a class="{{ Route::is('contact') ? 'active' :'' }}" href="{{route("contact")}}" wire:navigate>Contact</a>
                    </li>
                </ul>


                <div class="social-wrapper mt--40">
                    <span class="subtitle">find with me</span>
                    <div class="social-link">
                        <a href="index-03.html#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="index-03.html#"><i class="fa-brands fa-linkedin-in"></i></a>
                        <a href="index-03.html#"><i class="fa-brands fa-twitter"></i></a>
                        <a href="index-03.html#"><i class="fa-brands fa-facebook-f"></i></a>
                    </div>
                </div>
                <!-- social area end -->



            </div>
        </div>
    </div>

    @yield('frontend')

    <!-- Start Footer Area  -->
    <footer class="footer-area footer-style-one-wrapper  tmp-section-gap">
        <div class="container">
            <div class="footer-main footer-style-one">
                <div class="row g-5">
                    <div class="col-lg-5 col-md-6">
                        <div class="single-footer-wrapper border-right mr--20">
                            <div class="logo">
                                <a href="{{route('home')}}" wire:navigate>
                                    <img src="{{ asset('frontend/assets/images/logo/white-logo-reeni-2.png')}}" alt="Reeni - Personal Portfolio HTML Template for developers and freelancers">
                                </a>
                            </div>
                            <p class="description"><span>Get Ready</span> To <br> Create Great</p>
                            <form action="index-03.html#" class="newsletter-form-1 mt--40">
                                <input type="email" placeholder="Email Adress">
                                <span class="form-icon"><i class="fa-regular fa-envelope"></i></span>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-footer-wrapper quick-link-wrap">
                            <h5 class="ft-title">Quick Link</h5>
                            <ul class="ft-link tmp-link-animation">
                                <li>
                                    <a href="{{ route('about') }}" wire:navigate>About Me</a>
                                </li>
                                <li>
                                    <a href="{{ route('services') }}" wire:navigate>Service</a>
                                </li>
                                <li>
                                    <a href="{{ route('contact') }}" wire:navigate>Contact Us</a>
                                </li>
                                <li>
                                    <a href="{{ route('blog') }}" wire:navigate>Blog Post</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single-footer-wrapper contact-wrap">
                            <h5 class="ft-title">Contact </h5>
                            <ul class="ft-link tmp-link-animation">
                                <li><span class="ft-icon"><i class="fa-solid fa-envelope"></i></span><a href="index-03.html#">nafiz125@gmail.com</a></li>
                                <li><span class="ft-icon"><i class="fa-solid fa-location-dot"></i></span>3891
                                    Ranchview Dr. Richardson</li>
                                <li><span class="ft-icon"><i class="fa-solid fa-phone"></i></span><a href="index-03.html#">01245789321</a></li>
                            </ul>
                            <div class="social-link footer">
                                <a href="index-03.html#"><i class="fa-brands fa-instagram"></i></a>
                                <a href="index-03.html#"><i class="fa-brands fa-linkedin-in"></i></a>
                                <a href="index-03.html#"><i class="fa-brands fa-twitter"></i></a>
                                <a href="index-03.html#"><i class="fa-brands fa-facebook-f"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bg-img">
            <img src="{{ asset('frontend/assets/images/footer/footer-bg-img.png')}}" alt="footer-img">
        </div>
    </footer>
    <div class="copyright-area-one">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-wrapper">
                        <p class="copy-right-para">© InversWeb <script>
                            </script> | All Rights Reserved</p>
                        <ul>
                            <li><a href="index-03.html#">Trams & Condition</a></li>
                            <li><a href="index-03.html#">Privacy Policy</a></li>
                            <li><a href="index-03.html#">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer Area  -->

    <!-- ready chatting option via email -->
    <div class="ready-chatting-option tmp-ready-chat">
        <input type="checkbox" id="click">
        <label for="click">
            <i class="fab fa-facebook-messenger"></i>
            <i class="fas fa-times"></i>
        </label>
        <div class="wrapper">
            <div class="head-text">
                Let's chat with me? - Online
            </div>
            <div class="chat-box">
                <div class="desc-text">
                    Please fill out the form below to start chatting with me directly.
                </div>
                <form class="tmp-dynamic-form" action="index-03.html#">
                    <div class="field">
                        <input class="input-field" name="name" placeholder="Your Name" type="text" required>
                    </div>
                    <div class="field">
                        <input class="input-field" name="email" placeholder="Your Email" type="email" required>
                    </div>
                    <div class="field textarea">
                        <textarea class="input-field" placeholder="Your Message" name="message" required></textarea>
                    </div>
                    <div class="field">
                        <button name="submit" type="submit">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- ready chatting option via email end -->
    <!-- progress area start -->
    <div class="scrollToTop" style="display: block;">
        <div class="arrowUp">
            <i class="fa-light fa-arrow-up"></i>
        </div>
        <div class="water" style="transform: translate(0px, 87%);">
            <svg viewBox="0 0 560 20" class="water_wave water_wave_back">
                <use xlink:href="#wave"></use>
            </svg>
            <svg viewBox="0 0 560 20" class="water_wave water_wave_front">
                <use xlink:href="#wave"></use>
            </svg>
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 560 20" style="display: none;">
                <symbol id="wave">
                    <path d="M420,20c21.5-0.4,38.8-2.5,51.1-4.5c13.4-2.2,26.5-5.2,27.3-5.4C514,6.5,518,4.7,528.5,2.7c7.1-1.3,17.9-2.8,31.5-2.7c0,0,0,0,0,0v20H420z" fill="#"></path>
                    <path d="M420,20c-21.5-0.4-38.8-2.5-51.1-4.5c-13.4-2.2-26.5-5.2-27.3-5.4C326,6.5,322,4.7,311.5,2.7C304.3,1.4,293.6-0.1,280,0c0,0,0,0,0,0v20H420z" fill="#"></path>
                    <path d="M140,20c21.5-0.4,38.8-2.5,51.1-4.5c13.4-2.2,26.5-5.2,27.3-5.4C234,6.5,238,4.7,248.5,2.7c7.1-1.3,17.9-2.8,31.5-2.7c0,0,0,0,0,0v20H140z" fill="#"></path>
                    <path d="M140,20c-21.5-0.4-38.8-2.5-51.1-4.5c-13.4-2.2-26.5-5.2-27.3-5.4C46,6.5,42,4.7,31.5,2.7C24.3,1.4,13.6-0.1,0,0c0,0,0,0,0,0l0,20H140z" fill="#"></path>
                </symbol>
            </svg>

        </div>
    </div>

    <script src="{{ asset('frontend/assets/js/vendor/jquery.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/waypoints.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/odometer.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/appear.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/jquery-one-page-nav.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/swiper.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/gsap.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/splittext.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/scrolltigger.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/scrolltoplugins.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/smoothscroll.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/waw.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/isotop.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/animation.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/contact.form.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/backtop.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/text-type.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>
    @livewireScripts
    @stack('scripts')
</body>

</html>