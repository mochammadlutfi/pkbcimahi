@extends('backend.layouts.master')

@section('styles')

<link rel="stylesheet" href="{{ asset('assets/backend/js/plugins/file-input/fileinput.min.css') }}">
@endsection

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
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input id="update-berkas" name="files[]" type="file" multiple>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Default Elements -->
        </div>
    </div>
</div>
@stop

@push('scripts')
<script src="{{ asset('assets/backend/js/plugins/file-input/fileinput.min.js') }}"></script>
<script src="{{ asset('assets/backend/js/plugins/file-input/plugins/piexif.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/backend/js/plugins/file-input/plugins/sortable.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/backend/js/plugins/file-input/fileinput.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/backend/js/plugins/file-input/locales/id.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/backend/js/plugins/file-input/locales/es.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/backend/js/plugins/file-input/themes/fa/theme.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/backend/js/plugins/file-input/themes/explorer-fa/theme.js') }}" type="text/javascript"></script>
<script>
$("#update-berkas").fileinput({
    theme: 'fa',
    uploadUrl: "{{ route('admin.galeri.foto_tambah') }}",
    uploadAsync: true,
    language: 'id',
    overwriteInitial: false,
    initialPreviewAsData: true,
    initialPreview: <?= $prev_berk; ?>,
    initialPreviewConfig: <?= $berkas; ?>,
    uploadExtraData: {
        album_id: "{{ $album->id }}",
    }
});
function hapus(id) {
    swal({
        title: "Anda Yakin?",
        text: "Data Yang Dihapus Tidak Akan Bisa Dikembalikan",
        icon: "warning",
        buttons: ["Batal", "Hapus"],
        dangerMode: true,
        closeOnClickOutside: false
    })
    .then((willDelete) => {
        if (willDelete) {
        $.ajax({
            url: laroute.route('admin.galeri.foto_hapus', { id: id }),
            type: "get",
            dataType: "JSON",
            success: function(data) {
                swal({
                    title: "Berhasil",
                    text: "Foto Berhasil Dihapus",
                    timer: 3000,
                    buttons: false,
                    icon: 'success',
                    allowOutsideClick: false
                });
                window.setTimeout(function(){
                    location.reload();
                } ,1500);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Error deleting data');
            }
        });
        } else {
            window.setTimeout(function(){
                location.reload();
            } ,1500);
        }
    });
}
</script>
@endpush
