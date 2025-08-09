<ul id="side-menu" class="nav flex-column">

    <!-- Dashboard -->
    <li class="nav-item">
        <a class="tp-link" wire:navigate href="{{ route('dashboard') }}">
            <i data-feather="home"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <li class="menu-title mt-3">Pages</li>

    <!-- Banner -->
    <li class="nav-item">
        <a class="tp-link" wire:navigate href="{{ route('banner.index') }}">
            <i data-feather="image"></i>
            <span>Banner</span>
        </a>
    </li>

    <!-- Skills -->
    <li class="nav-item">
        <a href="#skill" data-bs-toggle="collapse">
            <i data-feather="activity"></i>
            <span>Skills</span>
            <span class="menu-arrow ms-auto"></span>
        </a>
        <div class="collapse" id="skill" data-bs-parent="#side-menu">
            <ul class="nav-second-level">
                <li><a class="tp-link" wire:navigate href="{{ route('skill.create') }}">Add Skill</a></li>
                <li><a class="tp-link" wire:navigate href="{{ route('skill.index') }}">All Skills</a></li>
            </ul>
        </div>
    </li>

    <!-- Education -->
    <li class="nav-item">
        <a href="#education" data-bs-toggle="collapse">
            <i data-feather="book"></i>
            <span>Education</span>
            <span class="menu-arrow ms-auto"></span>
        </a>
        <div class="collapse" id="education" data-bs-parent="#side-menu">
            <ul class="nav-second-level">
                <li><a class="tp-link" wire:navigate href="{{ route('education.create') }}">Add Education</a></li>
                <li><a class="tp-link" wire:navigate href="{{ route('education.index') }}">All Education</a></li>
            </ul>
        </div>
    </li>

    <!-- Blog -->
    <li class="nav-item">
        <a href="#blog" data-bs-toggle="collapse">
            <i data-feather="edit-3"></i>
            <span>Blog</span>
            <span class="menu-arrow ms-auto"></span>
        </a>
        <div class="collapse" id="blog" data-bs-parent="#side-menu">
            <ul class="nav-second-level">
                <li><a class="tp-link" wire:navigate href="{{ route('blog.index') }}">Add Blog</a></li>
                <li><a class="tp-link" wire:navigate href="{{ route('blog.allBlog') }}">All Blogs</a></li>
                <li> <a class="tp-link" wire:navigate href="{{ route('category.index') }}">Category</a></li>
            </ul>
        </div>
    </li>

    <!-- Project -->
    <li class="nav-item">
        <a href="#project" data-bs-toggle="collapse">
            <i data-feather="layers"></i>
            <span>Project</span>
            <span class="menu-arrow ms-auto"></span>
        </a>
        <div class="collapse" id="project" data-bs-parent="#side-menu">
            <ul class="nav-second-level">
                <li><a class="tp-link" wire:navigate href="{{ route('project.index') }}">Add Project</a></li>
                <li><a class="tp-link" wire:navigate href="{{ route('project.allProject') }}">All Projects</a></li>
            </ul>
        </div>
    </li>

    <!-- Category -->
    <li class="nav-item">

    </li>

    <!-- Client Messages -->
    <li class="nav-item">
        <a class="tp-link" wire:navigate href="{{ route('contect.index') }}">
            <i data-feather="message-circle"></i>
            <span>Client Message</span>
        </a>
    </li>

    <!-- Technology -->
    <li class="nav-item">
        <a class="tp-link" wire:navigate href="{{ route('technology.index') }}">
            <i data-feather="cpu"></i>
            <span>Technology</span>
        </a>
    </li>

    <!-- Services -->
    <li>
        <a href="#services" data-bs-toggle="collapse">
            <i data-feather="tool"></i>
            <span>Services</span>
            <span class="menu-arrow ms-auto"></span>
        </a>
        <div class="collapse" id="services">
            <ul class="nav-second-level">
                <li><a class="tp-link" wire:navigate href="{{ route('service.category.index') }}">Category</a></li>
                <li><a class="tp-link" wire:navigate href="{{ route('service.index') }}">Add Service</a></li>
                <li><a class="tp-link" wire:navigate href="{{ route('service.allServices') }}">All Services</a></li>
            </ul>
        </div>
    </li>

    <!-- About me-->
    <li>
        <a href="#sidebarError" data-bs-toggle="collapse">
            <i data-feather="file-text"></i>
            <span>About Me</span>
            <span class="menu-arrow"></span>
        </a>
        <div class="collapse" id="sidebarError">
            <ul class="nav-second-level">
                <li>
                    <a wire:navigate class='tp-link' href='{{ route('about.index') }}'>Counter</a>
                </li>
            </ul>
        </div>
    </li>

    <!-- Client Review -->
    <li>
        <a href="index.html#Reviews" data-bs-toggle="collapse">

            <i data-feather="star"></i>
            <span>Client Review </span>
            <span class="menu-arrow"></span>
        </a>
        <div class="collapse" id="Reviews">
            <ul class="nav-second-level">
                <li>
                    <a wire:navigate class='tp-link' href='{{ route('review.index') }}'>Create Review</a>
                </li>
                <li>
                    <a wire:navigate class='tp-link' href='{{ route('review.showReview') }}'>All Review</a>
                </li>
            </ul>
        </div>
    </li>
</ul>