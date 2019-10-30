{{-- <notifikasi v-bind:permohonan="permohonan"></notifikasi> --}}
@role('admin-dinas|kepala-dinas')
<div class="btn-group" role="group">
    <button type="button" class="btn btn-rounded btn-dual-secondary" id="page-header-notifications" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fa fa-flag"></i>
    <span class="badge badge-primary badge-pill">{{ Auth::user()->unreadNotifications->count() }}</span>
    </button>
    <div class="dropdown-menu dropdown-menu-right min-width-300" aria-labelledby="page-header-notifications">
        <h5 class="h6 text-center py-10 mb-0 border-b text-uppercase">Notifikasi</h5>
        <ul class="list-unstyled my-10">
            @if(Auth::user()->unreadNotifications->count())
            @foreach(Auth::user()->unreadNotifications as $notif)
            <li>
                <a class="text-body-color-dark media mb-5" href="{{ route('permohonan.detail', $notif->data['permohonan']['id']) }}">
                    <div class="media-body pr-10">
                        <p class="mb-0">
                            @if($notif->data['permohonan']['jenis'] == 'kios')
                            Permohonan Izin Penggunaan Kios
                            @else
                            Permohonan Izin Penggunaan Los
                            @endif
                            atas nama
                            <b>{{ $notif->data['permohonan']['penyewa'] }}</b> Di Pasar {{ $notif->data['permohonan']['pasar'] }} - {{ $notif->data['permohonan']['kios'] }} / {{ $notif->data['permohonan']['block'] }}<br>
                        </p>
                        <div class="text-muted font-size-sm font-italic">{{ date('d-m-Y', strtotime($notif->created_at)) }}</div>
                    </div>
                </a>
            </li>
            @endforeach
            @else
            <li>
                <a class="text-body-color-dark media mb-15" href="javascript:void(0)">
                    <div class="media-body pr-10">
                        <p class="mb-0">Tidak Ada Permohonan</p>
                    </div>
                </a>
            </li>
            @endif
        </ul>
        <div class="dropdown-divider"></div>
            <a class="dropdown-item text-center mb-0" href="{{ route('notif.index') }}">
            <i class="fa fa-flag mr-5"></i> Lihat Semua
        </a>
    </div>
</div>
@endrole

@role('admin-uptd')
<div class="btn-group" role="group">
    <button type="button" class="btn btn-rounded btn-dual-secondary" id="page-header-notifications" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fa fa-flag"></i>
    <span class="badge badge-primary badge-pill">{{ Auth::user()->unreadNotifications->count() }}</span>
    </button>
    <div class="dropdown-menu dropdown-menu-right min-width-300" aria-labelledby="page-header-notifications">
        <h5 class="h6 text-center py-10 mb-0 border-b text-uppercase">Notifikasi</h5>
        <ul class="list-unstyled my-10">
            @if(Auth::user()->unreadNotifications->count())
            @foreach(Auth::user()->unreadNotifications as $notif)
            <li>
                <a class="text-body-color-dark media mb-5" href="javascript:void(0)">
                    <div class="media-body pr-10">
                        <p class="mb-0">
                            @if($notif->data['surat']['jenis'] == 'kios')
                            Surat Izin Penggunaan Kios
                            @else
                            Surat Izin Penggunaan Los
                            @endif
                            atas nama
                            <b>{{ $notif->data['surat']['penyewa'] }}</b> Di Pasar {{ $notif->data['surat']['pasar'] }} - {{ $notif->data['surat']['kios'] }} / {{ $notif->data['surat']['block'] }}<br>
                        </p>
                        <div class="text-muted font-size-sm font-italic">{{ date('d-m-Y', strtotime($notif->created_at)) }}</div>
                    </div>
                </a>
            </li>
            @endforeach
            @else
            <li>
                <a class="text-body-color-dark media mb-15" href="javascript:void(0)">
                    <div class="media-body pr-10">
                        <p class="mb-0">Tidak ada surat izin</p>
                    </div>
                </a>
            </li>
            @endif
        </ul>
        <div class="dropdown-divider"></div>
            <a class="dropdown-item text-center mb-0" href="{{ route('notif.index') }}">
            <i class="fa fa-flag mr-5"></i> Lihat Semua
        </a>
    </div>
</div>
@endrole
