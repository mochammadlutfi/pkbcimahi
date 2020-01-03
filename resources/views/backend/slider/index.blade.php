@extends('backend.layouts.master')

@section('styles')
<link rel="stylesheet" href="{{ asset('assets/backend/js/plugins/jquery-tags-input/jquery.tagsinput.min.css') }}">
@endsection

@section('content')
<div class="content">
    <nav class="breadcrumb bg-white push">
        <a class="breadcrumb-item" href="{{ route('admin.beranda') }}">Beranda</a>
        <span class="breadcrumb-item active">Slider</span>
    </nav>
    <div class="row">
        <div class="col-lg-12">
            <!-- Default Elements -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Kelola Slider</h3>
                    <button id="btn_tambah" type="button" class="btn btn-secondary mr-5 mb-5 float-right btn-rounded">
                        <i class="si si-plus mr-5"></i>
                        Tambah Slider Baru
                    </button>
                </div>
                <div class="block-content">
                    <div class="row items-push">
                        @foreach($slider as $s)
                        <div class="col-md-4 animated fadeIn">
                            <div class="options-container fx-item-zoom-in" style="height:200px">
                                <img class="img-fluid options-item" src="{{ asset('uploads/'.$s->path) }}" alt="">
                                <div class="options-overlay bg-black-op">
                                    <div class="options-overlay-content">
                                        <a class="btn btn-sm btn-rounded btn-alt-primary min-width-75" href="javascript:void(0)">
                                            <i class="fa fa-eye"></i> Detail
                                        </a>
                                        <a class="btn btn-sm btn-rounded btn-alt-danger min-width-75" href="javascript:void(0)" onclick="hapus({{$s->id}})">
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
<div class="modal" id="modal_form"tabindex="-1" role="dialog" aria-labelledby="modal-popout" aria-hidden="true">
    <div class="modal-dialog modal-dialog-popout modal-lg" role="document">
        <div class="modal-content">
            <div class="block mb-0">
                <div class="block-header block-header-default">
                        <h3 class="block-title modal-title">Tambah Album Baru</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="si si-close"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <form id="form-slider">
                        @csrf
                        <input type="hidden" name="slider_id" value="">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <div class="row justify-content-center mb-10">
                                        <div class="col-12">
                                            <img id="img_preview" src="{{ asset('assets/img/placeholder.png') }}" width="100%"/>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input js-custom-file-input-enabled" id="field-foto" name="foto" data-toggle="custom-file-input">
                                                <label class="custom-file-label" for="field-foto">Pilih File</label>
                                            </div>
                                            <div id="error-foto" class="text-danger"></div>
                                        </div>
                                    </div>
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
        </div>
    </div>
</div>
@stop
@push('scripts')
<script src="{{ asset('assets/backend/js/plugins/jquery-tags-input/jquery.tagsinput.min.js') }}"></script>
<script>
jQuery(document).ready(function () {
    $("#field-foto").change(function (event) {
        RecurFadeIn();
        readURL(this);
    });
    $("#field-foto").on('click', function (event) {
        RecurFadeIn();
    });

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            var filename = $("#field-foto").val();
            filename = filename.substring(filename.lastIndexOf('\\') + 1);
            reader.onload = function (e) {
                // debugger;
                $('#img_preview').attr('src', e.target.result);
                $('#img_preview').hide();
                $('#img_preview').fadeIn(500);
                $('.custom-file-label').text(filename);
            }
            reader.readAsDataURL(input.files[0]);
        }
        $(".alert").removeClass("loading").hide();
    }

    function RecurFadeIn() {
        FadeInAlert("Wait for it...");
    }

    function FadeInAlert(text) {
        $(".alert").show();
        $(".alert").text(text).addClass("loading");
    }

    $(document).on('click', '#btn_tambah', function () {
        save_method = 'tambah';
        $('#form-slider')[0].reset();
        $('#modal_form').modal({
            backdrop: 'static',
            keyboard: false
        })
    });

    $("#form-slider").submit(function (e) {
        e.preventDefault();
        var formData = new FormData($('#form-slider')[0]);

        var link;
        var pesan;
        link = "{{ route('admin.slider.simpan') }}";
        pesan = "Slider Baru Berhasil Ditambahkan";

        $.ajax({
            url: link,
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
                        text: pesan,
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
            url: laroute.route('admin.slider.hapus', { id: id }),
            type: "get",
            dataType: "JSON",
            success: function(data) {
                swal({
                    title: "Berhasil",
                    text: "Slider Berhasil Dihapus",
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
