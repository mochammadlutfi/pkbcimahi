@extends('backend.layouts.master')



@section('content')
<div class="content">
    <nav class="breadcrumb bg-white push">
        <a class="breadcrumb-item" href="{{ route('admin.beranda') }}">Beranda</a>
        <span class="breadcrumb-item active">Galeri</span>
    </nav>
    <div class="row">
        <div class="col-lg-12">
            <!-- Default Elements -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Kelola Foto Album {{ $album->nama }}</h3>
                    <a href="{{ route('admin.galeri.foto_tambah', $album->id) }}" class="btn btn-secondary mr-5 mb-5 float-right btn-rounded">
                        <i class="si si-plus mr-5"></i>
                        Tambah Foto Baru
                    </a>
                </div>
                <div class="block-content">
                    <table class="table table-hover table-striped" id="list-album">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Status</th>
                                <th>Jumlah Foto</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
            <!-- END Default Elements -->
        </div>
    </div>
</div>
@stop

@push('scripts')

@endpush
