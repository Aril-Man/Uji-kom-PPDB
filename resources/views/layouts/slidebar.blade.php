<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
        <a href="#">PPDB</a>
    </div>
    <ul class="sidebar-menu">
        <li class="menu-header">Data</li>
        <li class="nav-item dropdown active">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Data</span></a>
            <ul class="dropdown-menu">
                <li class=""><a class="nav-link" href="{{ route('peserta.index') }}">Data
                        Peserta Registrasi</a></li>
            </ul>
        </li>

        <li class="menu-header">Input Data</li>

        <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown"><i class="far fa-file-alt"></i>
                <span>Forms</span></a>
            <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{ route('peserta.create') }}">Registrasi</a></li>
            </ul>
        </li>

        <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="{{ route('home') }}" class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class="fas fa-sign-out-alt"></i> Kembali Ke Home
            </a>
        </div>
    </ul>
</aside>
