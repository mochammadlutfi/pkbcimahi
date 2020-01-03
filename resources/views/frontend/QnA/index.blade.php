@extends('frontend.layouts.master')
@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/components/tags.css ') }}">
@endsection
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
<div class="main-wrapper">
    <main class="main-container">
        <div class="container mt-50">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8 col-xl-9 order-xs-2">
                    <div class="row">
                        <div class="col-lg-12 col-md-6">
                            @if(Auth::guard('web')->check())
                            <a href="{{ route('QA.tambah') }}"
                                class="btn btn-inside-out btn-lg btn-icon-abs border-radius-0 font__family-open-sans font__weight-bold btn-min-width-200 brk-library-rendered rendered"
                                data-brk-library="component__button">
                                <i class="fa fa-comments" aria-hidden="true"></i>
                                <span class="before">Buat Pertanyaan</span><span class="text">Buat Pertanyaan</span><span
                                    class="after">Buat Pertanyaan</span>
                            </a>
                            @else
                            <a href="{{ route('login') }}"
                                class="btn btn-inside-out btn-lg btn-icon-abs border-radius-0 font__family-open-sans font__weight-bold btn-min-width-200 brk-library-rendered rendered"
                                data-brk-library="component__button">
                                <i class="fa fa-comments" aria-hidden="true"></i>
                                <span class="before">Buat Pertanyaan</span><span class="text">Buat Pertanyaan</span><span
                                    class="after">Buat Pertanyaan</span>
                            </a>
                            @endif
                        </div>
                    </div>
                    <div class="pb-70 pt-10">
                        @foreach($pertanyaan as $p)
                        <div>
                            <div class="brk-reply-item pb-20 pt-20 p-0" data-brk-library="component__blog_page_css">
                                <a href="#" class="brk-reply-item__user">
                                    @if($p->user->avatar <> null)
                                        <img class="img-avatar" src="{{ asset($p->user->avatar) }}" alt="">
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
                                                <span>0</span>
                                            </a>
                                            <a class="brk-reply-item__header-reply">
                                                <i class="far fa-clock"></i>
                                                <span class="font__weight-bold">{{ $p->created_at }}</span>
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
                                            <li class="font__size-2"><a href="#"  rel="tag">{{ $p->qkategori->nama }}</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
				</div>
				<div class="col-12 col-lg-4 col-xl-3">
                    <div class="mb-60">
                        <div class="brs-sidebar brs-sidebar_right">
                            <div class="list-group">
                                <span class="list-group-item list-group-item-action list-group-item-success active">List Kategori</span>
                                @foreach($kategori as $k)
                                    <a href="{{ route('QA.kategori', $k->slug) }}" class="list-group-item list-group-item-action list-group-item-light"  style="color :black">{{ $k->nama }}</a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop
