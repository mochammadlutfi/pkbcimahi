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
                    <div class="row items-push">
                        @foreach($foto as $f)
                        <div class="col-md-4 animated fadeIn">
                            <div class="options-container fx-item-zoom-in" style="height:200px">
                                <img class="img-fluid options-item" src="{{ asset('uploads/'.$f->path) }}" alt="">
                                <div class="options-overlay bg-black-op">
                                    <div class="options-overlay-content">
                                        <a class="btn btn-sm btn-rounded btn-alt-primary min-width-75" href="javascript:void(0)">
                                            <i class="fa fa-eye"></i> Detail
                                        </a>
                                        <a class="btn btn-sm btn-rounded btn-alt-danger min-width-75" href="javascript:void(0)" onclick="hapus({{ $f->id }})">
                                            <i class="fa fa-times"></i> Hapus
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- END Default Elements -->
        </div>
    </div>
</div>
@stop

@push('scripts')
<script>
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
