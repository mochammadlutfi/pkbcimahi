<ul class="nav-main">
    <li>
        <a class="{{ Request::is('admin/beranda') ? 'active' : null }}" href="{{ route('admin.beranda') }}"><i class="si si-cup"></i><span class="sidebar-mini-hide">Beranda</span></a>
    </li>
    <li>
        <a class="{{ Request::is('admin/member') ? 'active' : null }}" href="{{ route('admin.member') }}"><i class="si si-people"></i><span class="sidebar-mini-hide">Pengguna</span></a>
    </li>
    <li>
        <a class="{{ Request::is('admin/slider', 'admin/slider/*') ? 'active' : null }}" href="{{ route('admin.slider') }}"><i class="si si-picture"></i><span class="sidebar-mini-hide">Slider</span></a>
    </li>
    <li class="{{ Request::is('admin/tanya-jawab/*') ? 'open' : null }}">
        <a class="nav-submenu" data-toggle="nav-submenu" href="#">
            <i class="si si-bubbles"></i>
            <span class="sidebar-mini-hide">Tanya Jawab</span></a>
        <ul>
            <li>
                <a class="{{ Request::is('admin/tanya-jawab/pertanyaan') ? 'active' : null}}"
                    href="{{ route('admin.QA.pertanyaan') }}">Kelola Pertanyaan</a>
            </li>
            <li>
                <a class="{{ Request::is('admin/tanya-jawab/kategori') ? 'active' : null}}"
                    href="{{ route('admin.QA.kategori') }}">Kategori</a>
            </li>
        </ul>
    </li>

    <li class="{{ Request::is('admin/galeri', 'admin/galeri/*', 'admin/video', 'admin/video/*') ? 'open' : null }}">
        <a class="nav-submenu" data-toggle="nav-submenu" href="#">
            <i class="si si-film"></i>
            <span class="sidebar-mini-hide">Galeri</span></a>
        <ul>
            <li>
                <a class="{{ Request::is('admin/galeri', 'admin/galeri/*') ? 'active' : null }}" href="{{ route('admin.galeri') }}">Album</a>
            </li>
            <li>
                <a class="{{ Request::is('admin/video', 'admin/video/*') ? 'active' : null}}"
                    href="{{ route('admin.video') }}">Video</a>
            </li>
        </ul>
    </li>

    <li class="{{ Request::is('admin/event/*', 'admin/event') ? 'open' : null }}">
        <a class="nav-submenu" data-toggle="nav-submenu" href="#">
            <i class="si si-flag"></i>
            <span class="sidebar-mini-hide">Events</span></a>
        <ul>
            <li>
                <a class="{{ Request::is('admin/event/tambah') ? 'active' : null}}"
                    href="{{ route('admin.event.tambah') }}">Tambah Event Baru</a>
            </li>
            <li>
                <a class="{{ Request::is('admin/event') ? 'active' : null}}"
                    href="{{ route('admin.event') }}">Data Event</a>
            </li>
        </ul>
    </li>
    <li class="{{ Request::is('admin/fraksi/*', 'admin/fraksi') ? 'open' : null }}">
        <a class="nav-submenu" data-toggle="nav-submenu" href="#">
            <i class="si si-user"></i>
            <span class="sidebar-mini-hide">Fraksi</span></a>
        <ul>
            <li>
                <a class="{{ Request::is('admin/fraksi/tambah') ? 'active' : null}}"
                    href="{{ route('admin.fraksi.tambah') }}">Tambah Fraksi</a>
            </li>
            <li>
                <a class="{{ Request::is('admin/fraksi') ? 'active' : null}}"
                    href="{{ route('admin.fraksi') }}">Kelola Fraksi</a>
            </li>
        </ul>
    </li>
    <li>
        <a class="{{ Request::is('') ? 'active' : null }}" href="{{ route('admin.pengguna') }}">
            <i class="fa fa-user-secret"></i><span class="sidebar-mini-hide">Admin</span>
        </a>
    </li>
    <li class="{{ Request::is('admin/pengaturan/*', 'admin/pengaturan') ? 'open' : null }}">
        <a class="nav-submenu" data-toggle="nav-submenu" href="#">
            <i class="si si-wrench"></i>
            <span class="sidebar-mini-hide">Pengaturan</span></a>
        <ul>
            <li>
                <a class="{{ Request::is('admin/pengaturan/umum') ? 'active' : null}}"
                    href="{{ route('admin.pengaturan.umum') }}">Umum</a>
            </li>
        </ul>
    </li>
</ul>
