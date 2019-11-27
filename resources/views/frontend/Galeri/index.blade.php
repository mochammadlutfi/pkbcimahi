@extends('frontend.layouts.master')
@section('title', $title)

@section('styles')
<link rel="stylesheet" href="{{ asset('assets/frontend/css/components/portfolio-galleries.css') }}">
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
        <div class="container mt-40 mb-80">
            <div class="brk-gallery">
                <div class="row">
                    @foreach($galeri as $g)
                    <div class="col-12 col-md-4">
                        <div class="brk-portfolio-galleries__card">
                            <img class="brk-abs-img lazyload" alt="alt"
                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                data-src="{{ asset('uploads/'.$g->foto) }}">
                            <div class="brk-portfolio-galleries__label pt-60 pl-70 pr-60 pb-50">
                                <h2 class="font__family-roboto font__size-24 font__weight-thin mb-2">{{ $g->nama }}</h2>
                                <h3
                                    class="brk-dark-font-color font__family-montserrat font__size-12 font__weight-normal text-uppercase letter-spacing-100 mb-auto">
                                    {{ $g->fotonya->count() }} Foto</h3>
                                <div class="brk-social-links brk-black-font-color font__size-13 brk-social-links_opacity">
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
                                <a href=" {{ route('galeri.detail', $g->slug) }} "
                                    class="text-uppercase font__family-montserrat font__size-12 font__weight-bold text-underline letter-spacing-100 mt-30"><u>Lihat
                                        Album</u></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </main>
</div>
<section id="portfolio">
</section>
@stop

@push('scripts')

@endpush
