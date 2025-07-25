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
    <li>
        <a href="index.html#sidebarExpages" data-bs-toggle="collapse">
            <i data-feather="file-text"></i>
            <span>??</span>
            <span class="menu-arrow"></span>
        </a>
        <div class="collapse" id="sidebarExpages">
            <ul class="nav-second-level">
                <li>
                    <a class='tp-link' href='#'>??</a>
                </li>
            </ul>
        </div>
    </li>
    <!-- //*Skills Section -->
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
</ul>