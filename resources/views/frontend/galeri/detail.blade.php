@extends('frontend.layouts.master')
@section('title')

@section('styles')
<link rel="stylesheet" href="{{ asset('assets/frontend/css/components/gallery-cols.css') }}">
@endsection

@section('content')
<div class="breadcrumbs__section breadcrumbs__section-thin brk-bg-center-cover lazyload" data-bg="{{ asset('assets/frontend/img/1920x258_1.jpg') }}">
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
                                <a href="{{ route('galeri') }}">Galeri</a>
                                <i class="fal fa-chevron-right icon"></i>
                            </li>
                            <li>
                                <a href="{{ route('galeri.detail', $album->slug) }}">{{ $album->nama }}</a>
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
        <div class="container mt-50 mb-80">
            <div class="brk-gallery">
                <div class="row">
                    @foreach($foto as $f)
                    <div class="col-sm-3 col-12">
                        <div class="brk-gallery-card brk-gallery-card_shadow">
                            <img src="{{ asset('uploads/'.$f->path) }}" data-src="{{ asset('uploads/'.$f->path) }}" alt="alt" class="brk-gallery-card__img lazyload">
                            <a href="{{ asset('uploads/'.$f->path) }}" data-fancybox="gallery" class="fancybox brk-gallery-card__overlay-full brk-bg-gradient-40deg-85-28 d-flex align-items-center justify-content-center">
                                <i class="fas fa-magnifition font__size-36 brk-white-font-color"></i>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </main>
</div>
@stop
@push('scripts')

@endpush
