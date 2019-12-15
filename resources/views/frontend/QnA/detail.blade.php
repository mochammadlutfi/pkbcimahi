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

<div class="container mt-30">
    <div class="row">
        <div class="col-12 col-lg-8 col-xl-9 order-xs-2 order-lg-1">
            <div class="brs-posts-container brs-posts-container_right-divider">
                <div class="mb-5">
                    <h3
                        class="brk-reply__header font__family-montserrat font__size-21 font__weight-bold line__height-60">
                        {{ $tanya->judul }}
                    </h3>
                    <div>
                        <div class="brk-reply-item pb-0" data-brk-library="component__blog_page_css">
                            <a href="#" class="brk-reply-item__user">
                                @if($tanya->user->avatar <> null)
                                    <img class="img-avatar" src="{{ asset($q->user->avatar) }}" alt="">
                                @else
                                    <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                    data-src="{{ Avatar::create($tanya->user->name)->toBase64() }}" alt="alt"
                                    class="lazyload">
                                @endif
                            </a>
                            <div class="brk-reply-item__content">
                                <div class="d-sm-flex justify-content-sm-between">
                                    <div class="brk-reply-item__header">
                                        <a href="#" class="brk-reply-item__header-reply">
                                            <i class="far fa-clock"></i>
                                            <span class="font__weight-bold">10:00. Aug 12, 17</span>
                                        </a>

                                    </div>
                                    <a href="#"
                                        class="font__size-md-17 font__size-15 line-height-1-5 font__weight-bold">
                                        {{ ucwords($tanya->user->name) }}
                                    </a>
                                </div>
                                <div
                                    class="brk-dark-font-color font__family-open-sans font__size-md-14 font__size-13 line-height-1-625 mt-10">
                                    {{ $tanya->deskripsi }}
                                </div>
                                <div class="d-flex align-items-start float-right">
                                    <span class="font-dark-color-2 font__Family-montserrat font__size-10 line-height-1-5 my-2 font__weight-semibold text-uppercase mr-10 brk-post-full__fixed-width">Kategori:</span>
                                    <ul class="brk-tags brk-tags_solid font__family-montserrat" data-brk-library="component__tags">
                                        <li class="font__size-2 mb-40"><a href="#" rel="tag">{{ $tanya->qkategori->nama }}</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @if($jawab <> null)
                        <div class="brk-reply-item" data-brk-library="component__blog_page_css">
                            <a href="#" class="brk-reply-item__user">
                                    <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                    data-src="{{ asset('assets/frontend/img/55x55_1.jpg') }}" alt="alt"
                                    class="lazyload">
                            </a>
                            <div class="brk-reply-item__content">
                                <div class="d-sm-flex justify-content-sm-between">
                                    <div class="brk-reply-item__header">
                                        <a href="#" class="brk-reply-item__header-reply">
                                            <i class="far fa-clock"></i>
                                            <span class="font__weight-bold">10:00. Aug 12, 17</span>
                                        </a>

                                    </div>
                                    <a href="#"
                                        class="font__size-md-17 font__size-15 line-height-1-5 font__weight-bold">
                                        {{ ucwords($jawab->admin->name) }}
                                    </a>
                                </div>
                                <div
                                    class="brk-dark-font-color font__family-open-sans font__size-md-14 font__size-13 line-height-1-625 mt-10">
                                    <?= $jawab->deskripsi ?>
                                </div>
                            </div>
                        </div>
                        @endif
                        <div class="d-flex align-items-start mt-20">
                            <span
                                class="font-dark-color-2 font__Family-montserrat font__size-15 line-height-1-5 font__weight-semibold text-uppercase mr-10 brk-post-full__fixed-width">Bagikan:</span>
                            <div class="brk-social-links brk-social-links_bordered-post brk-dark-font-color font__size-13"
                                data-brk-library="component__social_links">
                                <a href="#" class="brk-social-links__item">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#" class="brk-social-links__item">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#" class="brk-social-links__item">
                                    <i class="fab fa-google-plus-g"></i>
                                </a>
                                <a href="#" class="brk-social-links__item">
                                    <i class="fab fa-pinterest"></i>
                                </a>
                                <a href="#" class="brk-social-links__item">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                                <a href="#" class="brk-social-links__item">
                                    <i class="fab fa-vk"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop
