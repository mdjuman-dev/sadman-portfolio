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
</ul>