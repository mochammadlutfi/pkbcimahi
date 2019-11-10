<ul class="nav-main">
    <li>
        <a class="{{ Request::is('admin/beranda') ? 'active' : null }}" href="{{ route('admin.beranda') }}"><i class="si si-cup"></i><span class="sidebar-mini-hide">Beranda</span></a>
    </li>
    <li>
        <a class="{{ Request::is('admin/galeri', 'admin/galeri/*') ? 'active' : null }}" href="{{ route('admin.slider') }}"><i class="si si-picture"></i><span class="sidebar-mini-hide">Slider</span></a>
    </li>
    <li class="{{ Request::is('admin/tanya-jawab/*') ? 'open' : null }}">
        <a class="nav-submenu" data-toggle="nav-submenu" href="#">
            <i class="si si-handbag"></i>
            <span class="sidebar-mini-hide">Tanya Jawab</span></a>
        <ul>
            <li>
                <a class="{{ Request::is('admin/tanya-jawab/pertanyaan') ? 'active' : null}}"
                    href="{{ route('admin.QA.pertanyaan') }}">Pertanyaan Baru</a>
            </li>
            <li>
                <a class="{{ Request::is('admin/tanya-jawab/dijawab') ? 'active' : null}}"
                    href="{{ route('admin.QA.dijawab') }}">Sudah Dijawab</a>
            </li>
            <li>
                <a class="{{ Request::is('admin/tanya-jawab/kategori') ? 'active' : null}}"
                    href="{{ route('admin.QA.kategori') }}">Kategori</a>
            </li>
        </ul>
    </li>
    <li>
        <a class="{{ Request::is('admin/galeri', 'admin/galeri/*') ? 'active' : null }}" href="{{ route('admin.galeri') }}"><i class="si si-cup"></i><span class="sidebar-mini-hide">Galeri</span></a>
    </li>
    <li class="{{ Request::is('admin/event/*', 'admin/event') ? 'open' : null }}">
        <a class="nav-submenu" data-toggle="nav-submenu" href="#">
            <i class="si si-handbag"></i>
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
</ul>
