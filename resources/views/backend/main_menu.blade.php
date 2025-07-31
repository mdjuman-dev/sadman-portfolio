<ul id="side-menu" class="nav flex-column">

    <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}" wire:navigate
            href="{{ route('dashboard') }}">
            <i data-feather="home"></i> <span>Dashboard</span>
        </a>
    </li>

    <li class="menu-title mt-3">Pages</li>

    <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('banner.index') ? 'active' : '' }}" wire:navigate
            href="{{ route('banner.index') }}">
            <i data-feather="image"></i> <span>Banner</span>
        </a>
    </li>

    <!-- Skills Section -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#skill" data-bs-toggle="collapse" aria-expanded="false"
            aria-controls="skill">
            <i data-feather="tool"></i> <span>Skills</span> <span class="menu-arrow"></span>
        </a>
        <div class="collapse" id="skill" data-bs-parent="#side-menu">
            <ul class="nav flex-column ms-3">
                <li><a class="nav-link" wire:navigate href="{{ route('skill.create') }}">Add Skill</a></li>
                <li><a class="nav-link" wire:navigate href="{{ route('skill.index') }}">All Skills</a></li>
            </ul>
        </div>
    </li>

    <!-- Education Section -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#education" data-bs-toggle="collapse" aria-expanded="false"
            aria-controls="education">
            <i data-feather="book"></i> <span>Education</span> <span class="menu-arrow"></span>
        </a>
        <div class="collapse" id="education" data-bs-parent="#side-menu">
            <ul class="nav flex-column ms-3">
                <li><a class="nav-link" wire:navigate href="{{ route('education.create') }}">Add Education</a></li>
                <li><a class="nav-link" wire:navigate href="{{ route('education.index') }}">All Education</a></li>
            </ul>
        </div>
    </li>

    <!-- Blog Section -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#blog" data-bs-toggle="collapse" aria-expanded="false" aria-controls="blog">
            <i data-feather="edit-3"></i> <span>Blog</span> <span class="menu-arrow"></span>
        </a>
        <div class="collapse" id="blog" data-bs-parent="#side-menu">
            <ul class="nav flex-column ms-3">
                <li><a class="nav-link" wire:navigate href="{{ route('blog.index') }}">Add Blog</a></li>
                <li><a class="nav-link" wire:navigate href="{{ route('blog.allBlog') }}">All Blogs</a></li>
            </ul>
        </div>
    </li>

    <!-- Project Section -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#project" data-bs-toggle="collapse" aria-expanded="false"
            aria-controls="project">
            <i data-feather="layers"></i> <span>Project</span> <span class="menu-arrow"></span>
        </a>
        <div class="collapse" id="project" data-bs-parent="#side-menu">
            <ul class="nav flex-column ms-3">
                <li><a class="nav-link" wire:navigate href="{{ route('project.index') }}">Add Project</a></li>
                <li><a class="nav-link" wire:navigate href="{{ route('project.allProject') }}">All Projects</a></li>
            </ul>
        </div>
    </li>

    <!-- Category -->
    <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('category.index') ? 'active' : '' }}" wire:navigate
            href="{{ route('category.index') }}">
            <i data-feather="grid"></i> <span>Category</span>
        </a>
    </li>

    <!-- Client Messages -->
    <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('contect.index') ? 'active' : '' }}" wire:navigate
            href="{{ route('contect.index') }}">
            <i data-feather="message-circle"></i> <span>Client Message</span>
        </a>
    </li>

    <!-- Technology -->
    <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('technology.index') ? 'active' : '' }}" wire:navigate
            href="{{ route('technology.index') }}">
            <i data-feather="cpu"></i> <span>Technology</span>
        </a>
    </li>
    <!-- Service -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#services" data-bs-toggle="collapse" aria-expanded="false"
            aria-controls="services">
            <i data-feather="settings"></i> <span>Services</span> <span class="menu-arrow"></span>
        </a>
        <div class="collapse" id="services" data-bs-parent="#side-menu">
            <ul class="nav flex-column ms-3">
                <li><a class="nav-link" wire:navigate href="{{ route('service.category.index') }}">Add Service Category</a></li>
                <li><a class="nav-link" wire:navigate href="{{ route('service.index') }}">Add Service</a></li>
                <li><a class="nav-link" wire:navigate href="{{ route('project.allProject') }}">All Services</a></li>
            </ul>
        </div>
    </li>
</ul>