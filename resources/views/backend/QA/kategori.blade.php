@extends('backend.layouts.master')

@section('styles')
<link rel="stylesheet" href="{{ asset('assets/backend/js/plugins/jquery-tags-input/jquery.tagsinput.min.css') }}">
@endsection

@section('content')
<div class="content">
    <nav class="breadcrumb bg-white push">
        <a class="breadcrumb-item" href="{{ route('admin.beranda') }}">Beranda</a>
        <a class="breadcrumb-item" href="{{ route('admin.beranda') }}">Tanya Jawab</a>
        <span class="breadcrumb-item active">Kategori</span>
    </nav>
    <div class="row">
        <div class="col-lg-12">
            <!-- Default Elements -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Kelola Kategori Tanya Jawab</h3>
                    <button id="btn_tambah" type="button" class="btn btn-secondary mr-5 mb-5 float-right btn-rounded">
                        <i class="si si-plus mr-5"></i>
                        Tambah Kategori Baru
                    </button>
                </div>
                <div class="block-content">
                    <table class="table table-hover table-striped" id="list-kategori">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Jumlah Pertanyaan</th>
                                <th>Status</th>
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
<div class="modal" id="modal_form"tabindex="-1" role="dialog" aria-labelledby="modal-popout" aria-hidden="true">
    <div class="modal-dialog modal-dialog-popout modal-lg" role="document">
        <div class="modal-content">
            <div class="block mb-0">
                <div class="block-header block-header-default">
                        <h3 class="block-title modal-title">Tambah Kategori Baru</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="si si-close"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <form id="form-kategori">
                        @csrf
                        <input type="hidden" name="kategori_id" value="">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group row">
                                    <div class="col-lg-12">
                                        <label class="col-form-label" for="field-nama">Nama Kategori</label>
                                        <input type="text" class="form-control" id="field-nama" name="nama" placeholder="Masukan Nama Kategori">
                                        <div class="invalid-feedback" id="error-nama">Invalid feedback</div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-12">
                                        <label class="col-form-label" for="field-slug">Slug</label>
                                        <input type="text" class="form-control" id="field-slug" name="slug" placeholder="Slug Album" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12" for="deskripsi">Deksripsi Kategori</label>
                                    <div class="col-12">
                                        <textarea class="form-control" id="field-deskripsi" name="deskripsi" placeholder="Masukan Deskripsi" rows="9"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
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
                                <div class="form-group row">
                                    <div class="col-lg-12">
                                        <label class="col-form-label" for="field-status">Status</label>
                                        <select class="form-control" name="status" id="field-status">
                                            <option value="">Pilih</option>
                                            <option value="1">Publikasi</option>
                                            <option value="0">Tidak Publikasi</option>
                                        </select>
                                        <div class="invalid-feedback" id="error-status">Invalid feedback</div>
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
$(function () {
    $('#list-kategori').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('admin.QA.kategori') }}",
        columns: [{
                data: 'DT_RowIndex',
                name: 'DT_RowIndex'
            },
            {
                data: 'nama',
                name: 'nama'
            },
            {
                data: 'jumlah',
                name: 'jumlah'
            },
            {
                data: 'status',
                name: 'status'
            },
            {
                data: 'action',
                name: 'action',
                orderable: false,
                searchable: false
            },
        ]
    });
});

jQuery(document).ready(function () {

    $(document).on('click', '#btn_tambah', function () {
        save_method = 'tambah';
        $('#form-kategori')[0].reset();
        $('#modal_form').modal({
            backdrop: 'static',
            keyboard: false
        })
    });

    $(document).on('keyup', '#field-nama', function() {
        var Text = $(this).val();
        Text = Text.toLowerCase();
        Text = Text.replace(/[^\w ]+/g, '');
        Text = Text.replace(/ +/g, '-');
        $("#field-slug").val(Text);
    });

    $('#seo_keyword').tagsInput({
        defaultText:'Masukan Keyword!',
        removeWithBackspace: true,
        delimiter: [','],
        height:'34px',
        width: '100%'
    });

    $('#seo_tags').tagsInput({
        defaultText:'Masukan Tags',
        removeWithBackspace: true,
        delimiter: [','],
        height:'34px',
        width: '100%'
    });

    $("#form-kategori").submit(function (e) {
        e.preventDefault();
        var formData = new FormData($('#form-kategori')[0]);

        var link;
        var pesan;
        if (save_method == 'tambah') {
            link = "{{ route('admin.QA.kategori_simpan') }}";
            pesan = "Kategori Baru Berhasil Ditambahkan";
        } else {
            link = "{{ route('admin.QA.kategori_update') }}";
            pesan = "Kategori Berhasil Diperbaharui";
        }

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

function edit(id){
    save_method = 'update';
    $('#form-kategori')[0].reset();
    $('.form-group').removeClass('has-error');
    $('.help-block').empty();

    $.ajax({
        url : laroute.route('admin.QA.kategori_edit', {id : id}),
        type: "GET",
        dataType: "JSON",
        success: function(response)
        {
            $('[name="kategori_id"]').val(response.id);
            $('[name="nama"]').val(response.nama);
            $('[name="slug"]').val(response.slug);
            $('[name="deskripsi"]').val(response.deskripsi);
            $('[name="deskripsi_seo"]').val(response.seo_description);
            $('[name="status"]').val(response.status);
            var keyword = response.seo_keyword;
            if(keyword)
            {
                $('#seo_keyword').importTags(response.seo_keyword);
            }
            var seo_tags = response.seo_tags;
            if(seo_tags)
            {
                $('#seo_tags').importTags(response.seo_tags);
            }
            $('#modal_title').text('Perbaharui Data Kategori');
            $('#modal_form').modal({
                backdrop: 'static',
                keyboard: false
            })
        },
        error: function (jqXHR, textStatus, errorThrown){
            alert('Error get data from ajax');
        }
    });
}

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
            url: laroute.route('admin.QA.kategori_hapus', { id: id }),
            type: "get",
            dataType: "JSON",
            success: function(data) {
                swal({
                    title: "Berhasil",
                    text: "Data Kategori Berhasil Dihapus",
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
