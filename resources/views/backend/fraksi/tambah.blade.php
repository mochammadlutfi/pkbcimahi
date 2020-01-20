@extends('backend.layouts.master')

@section('styles')
<link rel="stylesheet" href="{{ asset('assets/backend/js/plugins/jquery-tags-input/jquery.tagsinput.min.css') }}">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.2/croppie.min.css">
<style type="text/css">
    .nounderline, .violet{
        color: #7c4dff !important;
    }
    .btn-dark {
        background-color: #7c4dff !important;
        border-color: #7c4dff !important;
    }
    .btn-dark .file-upload {
        width: 100%;
        padding: 10px 0px;
        position: absolute;
        left: 0;
        opacity: 0;
        cursor: pointer;
    }
    .profile-img img{
        width: 200px;
        height: 200px;
        border-radius: 50%;
    }
</style>
@endsection

@section('content')
<div class="content">
    <nav class="breadcrumb bg-white push">
        <a class="breadcrumb-item" href="{{ route('admin.beranda') }}">Beranda</a>
        <a class="breadcrumb-item" href="{{ route('admin.fraksi') }}">Fraksi</a>
        <span class="breadcrumb-item active">Tambah</span>
    </nav>
    <div class="row">
        <div class="col-lg-12">
            <!-- Default Elements -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Tambah Anggota Fraksi</h3>
                </div>
                <div class="block-content">
                    <form id="form-pengguna" class="form-horizontal">
                        @csrf
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="d-flex justify-content-center p-3">
                                    <div class="card text-center">
                                        <div class="card-body">
                                            <div class="profile-img p-3">
                                                <img src="{{ asset('assets/img/avatars/avatar0.jpg') }}" id="profile-pic">
                                            </div>
                                            <div class="btn btn-dark">
                                                <input type="file" class="file-upload" id="file-upload"
                                                name="profile_picture" accept="image/*">
                                                Pilih Foto
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="form-group">
                                    <label class="col-form-label">Nama Lengkap</label>
                                    <input type="text" class="form-control" name="nama" id="field-nama" placeholder="Masukan Nama Lengkap">
                                    <span id="error-nama" class="invalid-feedback"></span>
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Username</label>
                                    <input type="text" class="form-control" name="username" id="field-username" placeholder="Masukan Username">
                                    <span id="error-username" class="invalid-feedback"></span>
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Alamat Email</label>
                                    <input type="email" class="form-control" name="email" id="field-email" placeholder="Masukan Alamat Email">
                                    <span id="error-email" class="invalid-feedback"></span>
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Password</label>
                                    <input type="password" class="form-control" name="password" id="field-password" placeholder="Masukan Password">
                                    <span id="error-password" class="invalid-feedback"></span>
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Konfirmasi Password</label>
                                    <input type="password" class="form-control" name="konf_password" id="field-konf_password" placeholder="Masukan Konfirmasi Password">
                                    <span id="error-konf_password" class="invalid-feedback"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group row">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-alt-primary btn-block"><i class="si si-check mr-5"></i>Simpan</button>
                                </div>
                            </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END Default Elements -->
        </div>
    </div>
</div>
<div class="modal" id="myModal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Potong dan Sesuaikan Foto</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <div id="resizer"></div>
                <button class="btn rotate float-lef" data-deg="90" >
                <i class="fa fa-undo"></i></button>
                <button class="btn rotate float-right" data-deg="-90" >
                <i class="fa fa-redo"></i></button>
                <hr>
                <button class="btn btn-block btn-dark" id="upload" >
                Potong Dan Simpan</button>
            </div>
        </div>
    </div>
</div>
@stop
@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.2/croppie.min.js"></script>
<script>
$(function() {


});
jQuery(document).ready(function () {
    var formData = new FormData();
    var croppie = null;
    var el = document.getElementById('resizer');

    $.base64ImageToBlob = function(str) {
        // extract content type and base64 payload from original string
        var pos = str.indexOf(';base64,');
        var type = str.substring(5, pos);
        var b64 = str.substr(pos + 8);

        // decode base64
        var imageContent = atob(b64);

        // create an ArrayBuffer and a view (as unsigned 8-bit)
        var buffer = new ArrayBuffer(imageContent.length);
        var view = new Uint8Array(buffer);

        // fill the view, using the decoded base64
        for (var n = 0; n < imageContent.length; n++) {
          view[n] = imageContent.charCodeAt(n);
        }

        // convert ArrayBuffer to Blob
        var blob = new Blob([buffer], { type: type });

        return blob;
    }

    $.getImage = function(input, croppie) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                croppie.bind({
                    url: e.target.result,
                });
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#file-upload").on("change", function(event) {
        $("#myModal").modal();
        // Initailize croppie instance and assign it to global variable
        croppie = new Croppie(el, {
                viewport: {
                    width: 200,
                    height: 200,
                    type: 'circle'
                },
                boundary: {
                    width: 250,
                    height: 250
                },
                enableOrientation: true
            });
        $.getImage(event.target, croppie);
    });

    $("#upload").on("click", function() {
        croppie.result('base64').then(function(base64) {
            $("#myModal").modal("hide");
            $("#profile-pic").attr("src", base64);
            // $('#fotonya').val(base64);
            formData.append("foto", $.base64ImageToBlob(base64));
            // var url = "{{ route('admin.fraksi.simpan') }}";
            // var formData = new FormData();
            // formData.append("profile_picture", $.base64ImageToBlob(base64));
            // $.ajax({
            //     type: 'POST',
            //     url: url,
            //     data: formData,
            //     processData: false,
            //     contentType: false,
            //     success: function(data) {
            //         if (data == "uploaded") {
            //             $("#profile-pic").attr("src", base64);
            //         } else {
            //             $("#profile-pic").attr("src","/images/icon-cam.png");
            //             console.log(data['profile_picture']);
            //         }
            //     },
            //     error: function(error) {
            //         console.log(error);
            //         $("#profile-pic").attr("src","/images/icon-cam.png");
            //     }
            // });
        });
    });

    // To Rotate Image Left or Right
    $(".rotate").on("click", function() {
        croppie.rotate(parseInt($(this).data('deg')));
    });

    $('#myModal').on('hidden.bs.modal', function (e) {
        setTimeout(function() { croppie.destroy(); }, 100);
    })

    $("#form-pengguna").submit(function (e) {
        e.preventDefault();
        // var formData = new FormData($('#form-pengguna')[0]);
        // formData.append('form', $('#form-pengguna')[0]);
        var poData = jQuery(document.forms['form-pengguna']).serializeArray();
        var pesan;
        pesan = "Fraksi Baru Berhasil Ditambahkan";
        for (var i=0; i<poData.length; i++)
        {
            formData.append(poData[i].name, poData[i].value);
        }
        $.ajax({
            url: "{{ route('admin.fraksi.simpan') }}",
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

</script>
@endpush
