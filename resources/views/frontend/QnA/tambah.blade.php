@extends('frontend.layouts.master')
@section('title', $title)
@section('content')
<div class="breadcrumbs__section breadcrumbs__section-thin brk-bg-center-cover lazyload" data-bg="{{ asset('assets/frontend/img/1920x258_1.jpg') }}" data-brk-library="component__breadcrumbs_css">
    <span class="brk-abs-bg-overlay brk-bg-grad opacity-80"></span>
    <div class="breadcrumbs__wrapper">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6">
                    <div class="d-flex justify-content-lg-end justify-content-start pr-40 pr-xs-0 breadcrumbs__title">
                        <h2 class="brk-white-font-color font__weight-semibold font__size-30 line__height-40 font__family-montserrat">
                            {{ $title }}
                        </h2>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="pt-25 pb-35 position-static position-lg-relative breadcrumbs__subtitle">
                        <h3 class="brk-white-font-color font__family-montserrat font__weight-medium font__size-18 line__height-21 text-uppercase mb-15">
                            You are here
                        </h3>
                        <ol class="breadcrumb font__family-montserrat font__size-15 line__height-16 brk-white-font-color">
                            <li>
                                <a href="{{ url('/') }}">Beranda</a>
                                <i class="fal fa-chevron-right icon"></i>
                            </li>
                            <li>
                                <a href="{{ url('/QnA') }}">QnA</a>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-50">
    <div class="row">
        <div class="col-12 col-lg-8 col-xl-9 order-xs-2 order-lg-1">
            <div class="brs-posts-container brs-posts-container_right-divider">
                <div class="brk-reply mb-20" data-brk-library="component__forum_post">
                    <h3 class="brk-reply__header font__family-montserrat font__size-21 font__weight-bold line__height-60">Silahkan Masukan Pertanyaan Anda</h3>
                    <form action="{{ route('QA.simpan') }}" class="brk-reply__form brk-form-strict" data-brk-library="component__form" method="POST">
                        @csrf
                        <div class="row">
                            <input type="hidden" id="field-slug" name="slug" readonly>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input id="field-judul" name="judul" type="text" placeholder="Judul topik"  value="{{ old('judul') }}">
                                    @if ($errors->has('judul'))
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $errors->first('judul') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <select name="kategori">
                                        <option>Pilih Kategori</option>
                                        @foreach($kategori as $k)
                                            <option value="{{ $k->id }}">{{ $k->nama }}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('judul'))
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $errors->first('judul') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <textarea name="pertanyaan" placeholder="Pertanyaan"></textarea>
                                    @if ($errors->has('pertanyaan'))
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $errors->first('pertanyaan') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <button class="btn btn-inside-out btn-md btn-icon border-radius-25 font__family-open-sans font__weight-semibold btn-icon-right m-0 mt-25" data-brk-library="component__button">
                                <i class="fas fa-check icon-inside"></i>
                                <span class="before">Kirim Pertanyaan</span><span class="text">Kirim Pertanyaan</span><span class="after">Kirim Pertanyaan</span>
                            </button>
                        </div>
                    </form>
                </div>
                <h3 class="brk-reply__header font__family-montserrat font__size-21 font__weight-bold line__height-60 mb-10">Diskusi Dengan Fraksi Terbaru</h3>
                @foreach($pertanyaan as $p)
                    <div>
                        <div class="brk-reply-item pb-20 pt-20 p-0" data-brk-library="component__blog_page_css">
                            <a href="#" class="brk-reply-item__user">
                                @if($p->user->avatar <> null)
                                    <img class="img-avatar" src="{{ asset('uploads/'.$p->user->avatar) }}" alt="">
                                @else
                                    <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                    data-src="{{ Avatar::create($p->user->name)->toBase64() }}" alt="alt"
                                    class="lazyload">
                                @endif
                            </a>
                            <div class="brk-reply-item__content">
                                <a href="{{ route('QA.detail', $p->slug) }}"
                                    class="font__size-md-20 font__size-18 line-height-1-5 font__weight-bold">{{ $p->judul }}</a>
                                <div class="d-sm-flex justify-content-sm-between">
                                    <div class="brk-reply-item__header">
                                        <a class="brk-reply-item__header-like">
                                            <i class="far fa-comments"></i>
                                            <span>{{ $p->jawabannya->count() }}</span>
                                        </a>
                                        <a class="brk-reply-item__header-reply">
                                            <i class="far fa-clock"></i>
                                            <span class="font__weight-bold">{{ $p->created_at->format('d-m-Y') }}</span>
                                        </a>
                                    </div>
                                    <span class="font__size-md-12 line-height-1-5">Oleh: {{ $p->user->name }}</span>
                                </div>
                                <div
                                    class="brk-dark-font-color font__family-open-sans font__size-md-14 font__size-13 line-height-1-625 mt-10">
                                    <?= str_limit($p->deskripsi, 200) ?>
                                </div>
                                <div class="d-flex align-items-start mb-10 float-right">
                                    <span class="font-dark-color-2 font__Family-montserrat font__size-10 line-height-1-5 my-2 font__weight-semibold text-uppercase mr-10 brk-post-full__fixed-width">Kategori:</span>
                                    <ul class="brk-tags brk-tags_solid font__family-montserrat" data-brk-library="component__tags">
                                        <li class="font__size-2"><a href="{{ route('QA.kategori', $p->qkategori->slug) }}"  rel="tag">{{ $p->qkategori->nama }}</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-8 col-xl-9 order-xs-2 order-lg-1">
        <div class="mt-15 mb-80">
            <div class="brk-pagination brk-pagination-large" data-brk-library="component__pagination">
                <a href="{{ url('/QnA') }}" class="text-center"><span class="brk-next-link">Selengkapnya<i class="fa fa-angle-right"></i></span></a>
            </div>
        </div>
    </div>
</div>
@stop

@push('scripts')
<script>
    jQuery(function ($) {
    
    $(document).on('keyup', '#field-judul', function() {
            var Text = $(this).val();
            Text = Text.toLowerCase();
            Text = Text.replace(/[^\w ]+/g, '');
            Text = Text.replace(/ +/g, '-');
            $("#field-slug").val(Text);
        });

        $('#field-judul').change(function(e) {
            console.log('ok');
            $.get("{{ route('QA.check_slug') }}", 
              { 'judul': $(this).val() }, 
              function( data ) {
                $('#field-slug').val(data.slug);
              }
            );
        });
    });



</script>
@endpush

