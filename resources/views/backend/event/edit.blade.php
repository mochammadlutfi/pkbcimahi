@extends('backend.layouts.master')

@section('styles')
<link href="{{ asset('assets/backend/js/plugins/file-input/css/fileinput.css') }}" media="all" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" crossorigin="anonymous">
<link href="{{ asset('assets/backend/js/plugins/file-input/themes/explorer-fas/theme.css') }}" media="all" rel="stylesheet" type="text/css"/>

<link rel="stylesheet" href="{{ asset('assets/backend/js/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/backend/js/plugins/summernote/summernote-bs4.css') }}">
@endsection

@section('content')
<div class="content">
    <nav class="breadcrumb bg-white push">
        <a class="breadcrumb-item" href="{{ route('admin.beranda') }}">Beranda</a>
        <a class="breadcrumb-item" href="{{ route('admin.event') }}">Event</a>
        <span class="breadcrumb-item active">Tambah</span>
    </nav>
    <div class="row">
        <div class="col-lg-12">
            <!-- Default Elements -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Tambah Event Baru</h3>
                </div>
                <div class="block-content">
                    <form id="form-event" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="event_id" value="{{ $event->id }}">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="form-group row mb-3">
                                    <div class="col-lg-12">
                                        <div class="content-heading mb-0 pt-0">Informasi Event</div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12" for="field-judul">Nama Event</label>
                                    <div class="col-12">
                                        <input type="text" class="form-control" id="field-judul" name="judul" placeholder="Masukan Nama Event" value="{{ $event->judul }}">
                                        <div class="invalid-feedback" id="error-judul">Invalid feedback</div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12" for="field-slug">Slug</label>
                                    <div class="col-12">
                                        <input type="text" class="form-control" id="field-slug" name="slug" placeholder="Masukan Slug Event" readonly value="{{ $event->slug }}">
                                        <div class="invalid-feedback" id="error-slug">Invalid feedback</div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12">Deskripsi</label>
                                    <div class="col-12">
                                        <textarea class="form-control" id="field-deskripsi" name="deskripsi" placeholder="Masukan Deskripsi Event" rows="8">{{ $event->deskripsi }}</textarea>
                                        <div class="invalid-feedback" id="error-deskripsi">Invalid feedback</div>
                                    </div>
                                </div>
                                <div class="form-group row mb-0">
                                    <label class="col-12" for="field-tgl">Tanggal Event</label>
                                    <div class="col-12">
                                        <div class="form-group row">
                                            <div class="col-lg-12">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="field-tgl" name="tgl" placeholder="Masukan Tanggal Event" value="{{ date('d-m-Y', strtotime($event->tgl)) }}">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">
                                                            <i class="fa fa-calendar"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="invalid-feedback" id="error-tgl">Invalid feedback</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- SEO INFO --}}
                                <div class="form-group row mb-3">
                                    <div class="col-lg-12">
                                        <div class="content-heading mb-0 pt-0">SEO Info</div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12" for="seo_keyword">SEO Keyword</label>
                                    <div class="col-12">
                                        <input type="text" class="form-control" id="seo_keyword" name="seo_keyword" placeholder="Masukan SEO Keyword">
                                        <div class="form-text text-muted font-size-sm text-right">Gunakan tanda koma "," sebagai pemisah!</div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12" for="seo_tags">SEO Tags</label>
                                    <div class="col-12">
                                        <input type="text" class="form-control" id="seo_tags" name="seo_tags" placeholder="Masukan SEO Tags">
                                        <div class="form-text text-muted font-size-sm text-right">Gunakan tanda koma "," sebagai pemisah!</div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12" for="seo_deskripsi">SEO Deksripsi</label>
                                    <div class="col-12">
                                        <textarea class="form-control" id="deskripsi_seo" name="seo_deskripsi" maxlength="115" data-always-show="true" data-placement="top" placeholder="Masukan SEO Deskripsi" rows="2"></textarea>
                                        <div class="form-text text-muted font-size-sm text-right">Maksimal 115 Karakter</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group row mb-3">
                                    <div class="col-lg-12">
                                        <div class="content-heading mb-0 pt-0">Status</div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12">Publikasi</label>
                                    <div class="col-12">
                                        <label class="css-control css-control-primary css-radio">
                                            <input type="radio" class="css-control-input" id="status_publikasi" name="status" value="1" checked>
                                            <span class="css-control-indicator"></span> Publikasikan
                                        </label>
                                        <label class="css-control css-control-secondary css-radio">
                                            <input type="radio" class="css-control-input" id="status_draft" name="status" value="0">
                                            <span class="css-control-indicator"></span> Draft
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group row mb-0">
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-alt-primary btn-block"><i class="si si-check mr-5"></i>Simpan</button>
                                    </div>
                                </div>
                                <div class="form-group row mb-3">
                                    <div class="col-lg-12">
                                        <div class="content-heading mb-0 pt-0">Media Info</div>
                                    </div>
                                </div>
                                <div class="row gutters-tiny items-push">
                                    <label class="col-12">Thumbnail</label>
                                    <div class="col-lg-12">
                                        <div class="text-center mb-15">
                                            @if($event->featured_img == null)
                                            <img id="img_preview" src="{{ asset('assets/img/poster.png') }}" width="100%">
                                            @else
                                            <img id="img_preview" src="{{ asset('uploads/'.$event->featured_img) }}" width="100%">
                                            @endif
                                        </div>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="field-foto" name="foto" data-toggle="custom-file-input" accept="image/*">
                                            <label class="custom-file-label" for="field-foto">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12" id="youtube-trailer">
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
@stop

@push('scripts')
<script src="{{ asset('assets/backend/js/plugins/file-input/js/plugins/piexif.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/backend/js/plugins/file-input/js/plugins/sortable.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/backend/js/plugins/file-input/js/fileinput.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/backend/js/plugins/file-input/js/locales/id.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/backend/js/plugins/file-input/themes/fas/theme.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/backend/js/plugins/file-input/themes/explorer-fas/theme.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/backend/js/plugins/summernote/summernote-bs4.min.js') }}"></script>
<script src="{{ asset('assets/backend/js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
<script>

    $('#field-judul').change(function(e) {
        $.get("{{ route('admin.event.check_slug') }}", 
          { 'judul': $(this).val() }, 
          function( data ) {
            $('#field-slug').val(data.slug);
          }
        );
    });

    $("#field-foto").change(function (event) {
        RecurFadeIn();
        readURL(this);
    });
    $("#field-foto").on('click', function (event) {
        RecurFadeIn();
    });

    $(document).on('keyup', '#field-judul', function() {
        var Text = $(this).val();
        Text = Text.toLowerCase();
        Text = Text.replace(/[^\w ]+/g, '');
        Text = Text.replace(/ +/g, '-');
        $("#field-slug").val(Text);
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

    $('#field-tgl').datepicker({
        format: 'dd-mm-yyyy',
        autoclose: true,
        todayHighlight: true
    });


    $('#field-deskripsi').summernote({
        height: '250px'
    });

    $('#fotonya').fileinput({
        theme: 'fas',
        language: 'id',
        showCancel: false,
        allowedFileExtensions: ['jpg', 'png', 'gif'],
        showUpload: false,
    });

    $("#form-event").submit(function (e) {
        e.preventDefault();
        var formData = new FormData($('#form-event')[0]);

        $.ajax({
            url: "{{ route('admin.event.update') }}",
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
                        text: "Event Berhasil Diperbaharui",
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
