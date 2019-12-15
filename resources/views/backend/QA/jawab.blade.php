@extends('backend.layouts.master')

@section('styles')
<link rel="stylesheet" href="{{ asset('assets/backend/js/plugins/jquery-tags-input/jquery.tagsinput.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/backend/js/plugins/summernote/summernote-bs4.css') }}">

@endsection

@section('content')
<div class="content">
    <nav class="breadcrumb bg-white push">
        <a class="breadcrumb-item" href="be_pages_forum_categories.html">Forum</a>
        <a class="breadcrumb-item" href="be_pages_forum_topics.html">Welcome</a>
        <span class="breadcrumb-item active">Just a small question!</span>
    </nav>
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">{{ $q->judul }}</h3>
            {{-- <div class="block-options">
                <a class="btn-block-option" href="#forum-reply-form" data-toggle="scroll-to">
                    <i class="fa fa-reply"></i> Reply
                </a>
            </div> --}}
        </div>
        <div class="block-content">
            <!-- Pertanyaan -->
            <table class="table table-borderless">
                <tbody>
                    <tr class="table-active">
                        <td class="d-none d-sm-table-cell"></td>
                        <td class="font-size-sm text-muted">
                            <a href="be_pages_generic_profile.html">{{ $q->user->name }}</a> on <em>February 1, 2017 16:15</em>
                        </td>
                    </tr>
                    <tr>
                        <td class="d-none d-sm-table-cell text-center" style="width: 140px;">
                            <div class="mb-10">
                                <a href="#">
                                    @if($q->user->avatar == null)
                                        <img class="img-avatar" src="{{ asset('assets/img/avatars/avatar6.jpg') }}" alt="">
                                    @else
                                        <img class="img-avatar" src="{{ Avatar::create('Joko Widodo')->toBase64() }}" alt="">
                                    @endif
                                </a>
                            </div>
                            <small>313 Pertanyaan</small>
                        </td>
                        <td>
                            <p>{{ $q->deskripsi }}</p>
                        </td>
                    </tr>
                </tbody>
            </table>
            <!-- END Pertanyaan -->
            <hr>
            <form id="form-jawab" onsubmit="return false;">
                @csrf
                <input type="hidden" name="pertanyaan_id" value="{{ $q->id }}">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group row">
                            <div class="col-12">
                                <textarea class="form-control" id="field-deskripsi" name="deskripsi" placeholder="Masukan Deskripsi Event" rows="8"></textarea>
                                <div class="invalid-feedback" id="error-deskripsi">Invalid feedback</div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-alt-primary">
                                    <i class="si si-reply"></i>
                                    Jawab Pertanyaan
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@stop
@push('scripts')
<script src="{{ asset('assets/backend/js/plugins/summernote/summernote-bs4.min.js') }}"></script>

<script>
$('#field-deskripsi').summernote({
    height: '250px'
});

$("#form-jawab").submit(function (e) {
    e.preventDefault();
    var formData = new FormData($('#form-jawab')[0]);

    $.ajax({
        url: "{{ route('admin.QA.simpan') }}",
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
