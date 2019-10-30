<ul class="nav-main">
    <li>
        <a class="{{ Request::is('beranda') ? 'active' : null }}" href="{{ route('beranda') }}"><i class="si si-cup"></i><span class="sidebar-mini-hide">Beranda</span></a>
    </li>
    <li class="{{ Request::is('produk/*', 'order/*', 'order') ? 'open' : null }}">
        <a class="nav-submenu" data-toggle="nav-submenu" href="#">
            <i class="si si-handbag"></i>
            <span class="sidebar-mini-hide">Produk / Layanan</span></a>
        <ul>
            <li>
                <a class="{{ Request::is('order', 'order/*') ? 'active' : null}}"
                    href="{{ route('order') }}">Order Produk / Layanan</a>
            </li>
            <li>
                <a class="{{ Request::is('produk/produk-layanan-saya') ? 'active' : null}}"
                    href="{{ route('my_product') }}">Produk / Layanan Saya</a>
            </li>
            <li>
                <a class="{{ Request::is('produk/lisensi-saya') ? 'active' : null}}"
                    href="{{ route('my_license') }}">Lisensi Saya</a>
            </li>
        </ul>
    </li>
    <li class="{{ Request::is('domain/*', 'domain') ? 'open' : null }}">
        <a class="nav-submenu" data-toggle="nav-submenu" href="#">
            <i class="si si-globe"></i>
            <span class="sidebar-mini-hide">Domain</span></a>
        <ul>
            <li>
                <a class="{{ Request::is('domain/cari') ? 'active' : null}}"
                    href="{{ route('domain.cari') }}">Cari Domain</a>
            </li>
            <li>
                <a class="{{ Request::is('domain') ? 'active' : null}}"
                    href="{{ route('domain') }}">Domain Saya</a>
            </li>
        </ul>
    </li>
    <li class="{{ Request::is('tagihan/*') ? 'open' : null }}">
        <a class="nav-submenu" data-toggle="nav-submenu" href="#">
            <i class="si si-wallet"></i>
            <span class="sidebar-mini-hide">Tagihan</span>
        </a>
        <ul>
            <li>
                <a class="{{ Request::is('product/list') ? 'active' : null}}"
                    href="{{ route('invoice') }}">Invoice Saya</a>
            </li>
            <li>
                <a class="{{ Request::is('product/list') ? 'active' : null}}"
                    href="{{ route('my_product') }}">Konfirmasi Pembayaran</a>
            </li>
        </ul>
    </li>
    <li class="{{ Request::is('product/*') ? 'open' : null }}">
        <a class="nav-submenu" data-toggle="nav-submenu" href="#">
            <i class="si si-support"></i>
            <span class="sidebar-mini-hide">Dukungan</span>
        </a>
        <ul>
            <li>
                <a class="{{ Request::is('product/list') ? 'active' : null}}"
                    href="{{ route('order') }}">Buat Tiket Dukungan</a>
            </li>
            <li>
                <a class="{{ Request::is('product/list') ? 'active' : null}}"
                    href="{{ route('my_product') }}">Tiket Dukungan Saya</a>
            </li>
            <li>
                <a class="{{ Request::is('product/list') ? 'active' : null}}"
                    href="{{ route('my_product') }}">Pengumuman</a>
            </li>
        </ul>
    </li>
</ul>
