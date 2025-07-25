<ul id="side-menu">
    <li>
        <a href="{{ route('dashboard') }}">
            <i data-feather="home"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <li class="menu-title">Pages</li>
    <li>
        <a href="{{ route('banner.index') }}">
            <i data-feather="image"></i>
            <span>Banner</span>
        </a>
    </li>
    </li>
    <!--//*Skills Section -->
    <li>
        <a href="index.html#skill" data-bs-toggle="collapse">
            <i data-feather="tool"></i>
            <span>Skills</span>
            <span class="menu-arrow"></span>
        </a>
        <div class="collapse" id="skill">
            <ul class="nav-second-level">
                <li>
                    <a class='tp-link' href='{{ route('skill.create') }}'>Add Skill</a>
                </li>
                <li>
                    <a class='tp-link' href='{{ route('skill.index') }}'>All Skills</a>
                </li>
            </ul>
        </div>
    </li>
    <!-- //*Education Section -->
    <li>
        <a href="index.html#education" data-bs-toggle="collapse">
            <i data-feather="book-open"></i>
            <span>Education</span>
            <span class="menu-arrow"></span>
        </a>
        <div class="collapse" id="education">
            <ul class="nav-second-level">
                <li>
                    <a class='tp-link' href='{{ route('education.create') }}'>Add Education</a>
                </li>
                <li>
                    <a class='tp-link' href='{{ route('education.index') }}'>All Education</a>
                </li>
            </ul>
        </div>
    </li>

    <!--//*Blog Menu -->
    <li>
        <a href="index.html#blog" data-bs-toggle="collapse">
            <i data-feather="book-open"></i>
            <span>Blog</span>
            <span class="menu-arrow"></span>
        </a>
        <div class="collapse" id="blog">
            <ul class="nav-second-level">
                <li>
                    <a class='tp-link' href='{{ route('blog.index') }}'>Add Blog</a>
                </li>
                <li>
                    <a class='tp-link' href='{{ route('blog.allBlog') }}'>All Blog</a>
                </li>
            </ul>
        </div>
    </li>

    <!-- Category -->
    <li>
        <a href="{{ route('category.index') }}">
            <i data-feather="layout"></i>
            <span>Category</span>
        </a>
    </li>
</ul>