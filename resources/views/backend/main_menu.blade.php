<ul id="side-menu">
    <li>
        <a wire:navigate href="{{ route('dashboard') }}">
            <i data-feather="home"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <li class="menu-title">Pages</li>
    <li>
        <a wire:navigate href="{{ route('banner.index') }}">
            <i data-feather="image"></i>
            <span>Banner</span>
        </a>
    </li>
    </li>
    <!--//*Skills Section -->
    <li>
        <a href="#skill" data-bs-toggle="collapse">
            <i data-feather="tool"></i>
            <span>Skills</span>
            <span class="menu-arrow"></span>
        </a>
        <div class="collapse" id="skill">
            <ul class="nav-second-level">
                <li>
                    <a wire:navigate class='tp-link' href='{{ route('skill.create') }}'>Add Skill</a>
                </li>
                <li>
                    <a wire:navigate class='tp-link' href='{{ route('skill.index') }}'>All Skills</a>
                </li>
            </ul>
        </div>
    </li>
    <!-- //*Education Section -->
    <li>
        <a href="#education" data-bs-toggle="collapse">
            <i data-feather="book-open"></i>
            <span>Education</span>
            <span class="menu-arrow"></span>
        </a>
        <div class="collapse" id="education">
            <ul class="nav-second-level">
                <li>
                    <a wire:navigate class='tp-link' href='{{ route('education.create') }}'>Add Education</a>
                </li>
                <li>
                    <a wire:navigate class='tp-link' href='{{ route('education.index') }}'>All Education</a>
                </li>
            </ul>
        </div>
    </li>

    <!--//*Blog Menu -->
    <li>
        <a href="#blog" data-bs-toggle="collapse">
            <i data-feather="book-open"></i>
            <span>Blog</span>
            <span class="menu-arrow"></span>
        </a>
        <div class="collapse" id="blog">
            <ul class="nav-second-level">
                <li>
                    <a wire:navigate class='tp-link' href='{{ route('blog.index') }}'>Add Blog</a>
                </li>
                <li>
                    <a wire:navigate class='tp-link' href='{{ route('blog.allBlog') }}'>All Blogs</a>
                </li>
            </ul>
        </div>
    </li>

    <!-- Category -->
    <li>
        <a wire:navigate href="{{ route('category.index') }}">
            <i data-feather="layout"></i>
            <span>Category</span>
        </a>
    </li>

    <!-- Contect -->
    <li>
        <a wire:navigate href="{{ route('contect.index') }}">
            <i data-feather="user"></i>
            <span>Client Message</span>
        </a>
    </li>
    <!-- Technology -->
    <li>
        <a wire:navigate href="{{ route('technology.index') }}">
            <i data-feather="user"></i>
            <span>Technology</span>
        </a>
    </li>
</ul>