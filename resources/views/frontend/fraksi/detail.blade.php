@extends('frontend.layouts.master')
@section('title', $title)

@section('styles')
<link rel="stylesheet" href="{{ asset('assets/frontend/css/components/tabbed-contents.css ') }}">
<link rel="stylesheet" href="{{ asset('assets/frontend/css/components/image-frames.css ') }}">
<link rel="stylesheet" href="{{ asset('assets/frontend/css/components/svg-pattern.css') }}">
<link rel="stylesheet" href="{{ asset('assets/frontend/css/components/team.css') }}">

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
                                <a href="{{ route('fraksi') }}">Fraksi</a>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="main-wrapper">
    <main class="main-container pb-35">
        <section>
            <div class="position-relative pb-40 pb-lg-100 pb-xl-240" data-brk-library="component__tabbed_contents">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1920 136" class="brk-fill-white">
                    <path d="M1920,136A3691.84,3691.84,0,0,0,0,136V0H1920Z" />
                </svg>
                <div class="brk-abs-overlay lazyload" data-bg="{{ asset('assets/frontend/img/demo_shop_trendy/bg-patterns/9.png') }}">
                    <span class="brk-abs-overlay brk-base-bg-gradient--30deg-96"></span>
                </div>
                <div class="brk-tabs brk-tabs_tabbed-icons-gradient" data-index="0">
                    <div class="container">
                        <ul class="brk-tabs-nav font__family-montserrat">
                            <li class="brk-tab"><i class="fal fa-list-ul" aria-hidden="true"></i><span>Profile</span></li>
                            <!-- <li class="brk-tab"><i class="far fa-cog" aria-hidden="true"></i><span>Preferences</span></li> -->
                        </ul>
                    </div>
                    <div class="brk-tabs-content">
                        <div class="brk-tab-item">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="text-center text-lg-left">
                                            <img class="brk-base-box-shadow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset('assets/img/fraksi/1.jpg') }}" alt="alt">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 pl-35 pt-40 text-center">
                                        <h4 class="font__family-montserrat font__weight-light font__size-48 text-lg-left text-center brk-white-font-color">Acep Jamaludin</h4>
                                        <h4 class="font__family-montserrat font__weight-bold font__size-48 text-lg-left text-center brk-white-font-color pb-20">Ini mugnkin untuk Jabatan</h4>
                                        <p class="line__height-26 font__size-16 text-lg-left text-center pb-20">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>
                                        <p class="line__height-26 font__size-16 text-lg-left text-center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="brk-tab-item">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-4">
                                        <h4 class="font__family-montserrat font__weight-semibold font__size-28 text-lg-left text-center brk-white-font-color mb-20 mt-10">Foundation of the company</h4>
                                        <p class="font__size-16 line__height-26 text-lg-left text-center">Viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in.</p>
                                    </div>
                                    <div class="col-xl-4">
                                        <h4 class="font__family-montserrat font__weight-semibold font__size-28 text-lg-left text-center brk-white-font-color mb-20 mt-10">Promoting products and services</h4>
                                        <p class="font__size-16 line__height-26 text-lg-left text-center mb-30">Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet.</p>
                                    </div>
                                    <div class="col-xl-4">
                                        <div class="text-center text-xl-left">
                                            <a href="{{ asset('assets/frontend/img/320x320_3.jpg') }}" class="frame-image image-popup img-square shadow fancybox" data-brk-library="fancybox">
                                                <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset('assets/frontend/img/320x320_3.jpg') }}" alt="alt" class="lazyload"><span class="square"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
                <span class="brk-svg-pattern-container brk-svg-pattern-container-4 brk-svg-pattern-container_bottom" data-brk-library="component__svg_pattern">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1920 277" enable-background="new 0 0 1920 277" xml:space="preserve">
                        <g>
                            <linearGradient id="path-id-4-1" gradientUnits="userSpaceOnUse" x1="960.0005" y1="276.999" x2="960.0005" y2="0.7793">
                                <stop offset="0" style="stop-color:var(--brk-base-2)"></stop>
                                <stop offset="1" style="stop-color:var(--brk-base-5)"></stop>
                            </linearGradient>
                            <path fill="url(#path-id-4-1)" d="M1420,170.999c-264.209,81.183-385.061,38.809-895-110C319.539,1.042,140.531-6.536,0,5.783
             v271.216h1920V60.511C1763.375,73.852,1598.687,116.096,1420,170.999z"></path>
                        </g>
                        <g>
                            <path fill="#FFFFFF" d="M1294,149C730.998-17.98,210.142,80.934,0,135.381v141.618h1920v-36.195
             C1810.955,257.711,1621.742,246.204,1294,149z"></path>
                        </g>
                    </svg>
                </span>
            </div>
        </section>
    </main>
</div>
@stop

@push('scripts')
<script src="{{ asset('assets/frontend/vendor/fancybox/js/jquery.fancybox.min.js ') }} "></script>

@endpush
