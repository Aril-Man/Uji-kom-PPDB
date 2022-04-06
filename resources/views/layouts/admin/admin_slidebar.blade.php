<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
        <a href="#">PPDB</a>
    </div>
    <ul class="sidebar-menu">
        <li class="menu-header">Data</li>
        <li class="nav-item dropdown active">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Data</span></a>
            <ul class="dropdown-menu">
                <li class=""><a class="nav-link" href="{{ route('admin.index') }}">Data
                        Peserta Registrasi</a></li>
            </ul>
        </li>


        <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="{{ route('logout') }}" class="btn btn-danger btn-lg btn-block btn-icon-split">
                <i class="fas fa-sign-out-alt"></i> logout
            </a>
        </div>
    </ul>
</aside>
