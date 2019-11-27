@extends('backend.layouts.master')

@section('styles')
<link href="{{ asset('assets/backend/js/plugins/file-input/css/fileinput.css') }}" media="all" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" crossorigin="anonymous">
<link href="{{ asset('assets/backend/js/plugins/file-input/themes/explorer-fas/theme.css') }}" media="all" rel="stylesheet" type="text/css"/>
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
                    <h3 class="block-title">Tambah Foto Album {{ $album->nama }}</h3>
                </div>
                <div class="block-content">
                    <form enctype="multipart/form-data" id="form-foto">
                        @csrf
                        <input type="hidden" name="album_id" value="{{ $album->id }}">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input id="fotonya" class="file" type="file" name="foto[]" multiple data-theme="fas" accept="image/*">
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center mb-2">
                            <div class="col-lg-12">
                                <button type="submit" class="btn btn-alt-primary btn-block"><i class="si si-check mr-1"></i>Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END Default Elements -->
        </div>
    </div>
</div>
@stop

@push('scripts')
<script src="{{ asset('assets/backend/js/plugins/file-input/js/plugins/piexif.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/backend/js/plugins/file-input/js/plugins/sortable.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/backend/js/plugins/file-input/js/fileinput.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/backend/js/plugins/file-input/js/locales/id.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/backend/js/plugins/file-input/themes/fas/theme.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/backend/js/plugins/file-input/themes/explorer-fas/theme.js') }}" type="text/javascript"></script>
<script>
    $('#fotonya').fileinput({
        theme: 'fas',
        language: 'id',
        showCancel: false,
        allowedFileExtensions: ['jpg', 'png', 'gif', 'jpeg'],
        showUpload: false,
    });

    $("#form-foto").submit(function (e) {
        e.preventDefault();
        var formData = new FormData($('#form-foto')[0]);

        $.ajax({
            url: "{{ route('admin.galeri.foto_simpan') }}",
            type: 'POST',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function (response) {
                $('.is-invalid').removeClass('is-invalid');
                if (response.fail == false) {
                    $('#modal_embed').modal('hide');
                    swal({
                        title: "Berhasil",
                        text: "Foto Berhasil Di Upload",
                        timer: 3000,
                        buttons: false,
                        icon: 'success'
                    });
                    window.setTimeout(function () {
                        location.reload();
                    }, 1500);
                } else {
                    for (control in response.errors) {
                        $('#field-' + control).addClass('is-invalid');
                        $('#error-' + control).html(response.errors[control]);
                    }
                }
            },
            error: function (jqXHR, textStatus, errorThrown) {
                alert('Error adding / update data');
                $('#btnSimpan').text('Simpan');
                $('#btnSimpan').attr('disabled', false);
            }
        });
    });
</script>
@endpush
