@extends('frontend.layouts.master')
@section('title', $title)

@section('styles')
<link rel="stylesheet" href="{{ asset('assets/frontend/css/components/team.css') }}">
vendor\swiper\css
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
            <div class="container">
                <div class="text-center mb-25">
                        <h2 class="font__family-montserrat font__weight-bold font__size-48 line__height-52 mt-30 brk-library-rendered"  >FRAKSI PKB</h2>
                    <h2 class="font__family-playfair font__style-italic font__weight-normal font__size-48 line__height-52 brk-library-rendered"
                         >Kota Cimahi
                    </h2>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-3 col-sm-6">
                        <article class="brk-team-persone-circle brk-base-box-shadow text-center"
                             >
                            <div class="brk-team-persone-circle__name-position">
                                <a href="#">
                                    <h4 class="font__family-montserrat font__weight-bold font__size-18">Acep Jamaludin
                                    </h4>
                                </a>
                            </div>
                            <div class="brk-team-persone-circle__bg lazyload" data-bg="{{ asset('assets/img/fraksi/1.jpg') }}">
                                <span class="brk-team-persone-circle__bg-overlay">
                                    <span class="before brk-base-bg-gradient-90deg"></span>
                                    <svg viewBox="0 0 270 37">
                                        <path d="M270,37H0V0A267.6,267.6,0,0,0,135.53,36.5,267.52,267.52,0,0,0,270,0Z"
                                            fill="rgb(255, 255, 255)" />
                                    </svg>
                                </span>
                                <ul class="brk-team-persone-circle__contacts">
                                    <li>
                                        <i class="fas fa-phone" aria-hidden="true"></i>
                                        <a href="tel:88001234567">8 800 123 45 67</a>
                                    </li>
                                    <li>
                                        <i class="far fa-envelope" aria-hidden="true"></i>
                                        <a href="mailto:admin@gmail.com">admin@gmail.com</a>
                                    </li>
                                    <li>
                                        <i class="fab fa-instagram" aria-hidden="true"></i>
                                        <a href="#">bernard.show</a>
                                    </li>
                                    <li>
                                        <i class="fab fa-skype" aria-hidden="true"></i>
                                        <a href="#">skype.show</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="brk-team-persone-circle__social-links">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fab fa-google-plus-g" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </article>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <article class="brk-team-persone-circle brk-base-box-shadow text-center">
                            <div class="brk-team-persone-circle__name-position">
                                <a href="#">
                                    <h4 class="font__family-montserrat font__weight-bold font__size-18">Asep Sutisna
                                    </h4>
                                </a>
                            </div>
                            <div class="brk-team-persone-circle__bg lazyload" data-bg="{{ asset('assets/img/fraksi/2.jpg') }}">
                                <span class="brk-team-persone-circle__bg-overlay">
                                    <span class="before brk-base-bg-gradient-90deg"></span>
                                    <svg viewBox="0 0 270 37">
                                        <path d="M270,37H0V0A267.6,267.6,0,0,0,135.53,36.5,267.52,267.52,0,0,0,270,0Z"
                                            fill="rgb(255, 255, 255)" />
                                    </svg>
                                </span>
                                <ul class="brk-team-persone-circle__contacts">
                                    <li>
                                        <i class="fas fa-phone" aria-hidden="true"></i>
                                        <a href="tel:88001234567">8 800 123 45 67</a>
                                    </li>
                                    <li>
                                        <i class="far fa-envelope" aria-hidden="true"></i>
                                        <a href="mailto:admin@gmail.com">admin@gmail.com</a>
                                    </li>
                                    <li>
                                        <i class="fab fa-instagram" aria-hidden="true"></i>
                                        <a href="#">bernard.show</a>
                                    </li>
                                    <li>
                                        <i class="fab fa-skype" aria-hidden="true"></i>
                                        <a href="#">skype.show</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="brk-team-persone-circle__social-links">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fab fa-google-plus-g" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </article>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <article class="brk-team-persone-circle brk-base-box-shadow text-center"
                             >
                            <div class="brk-team-persone-circle__name-position">
                                <a href="#">
                                    <h4 class="font__family-montserrat font__weight-bold font__size-18">Dede Latif
                                    </h4>
                                </a>
                            </div>
                            <div class="brk-team-persone-circle__bg lazyload" data-bg="{{ asset('assets/img/fraksi/3.jpg') }}">
                                <span class="brk-team-persone-circle__bg-overlay">
                                    <span class="before brk-base-bg-gradient-90deg"></span>
                                    <svg viewBox="0 0 270 37">
                                        <path d="M270,37H0V0A267.6,267.6,0,0,0,135.53,36.5,267.52,267.52,0,0,0,270,0Z"
                                            fill="rgb(255, 255, 255)" />
                                    </svg>
                                </span>
                                <ul class="brk-team-persone-circle__contacts">
                                    <li>
                                        <i class="fas fa-phone" aria-hidden="true"></i>
                                        <a href="tel:88001234567">8 800 123 45 67</a>
                                    </li>
                                    <li>
                                        <i class="far fa-envelope" aria-hidden="true"></i>
                                        <a href="mailto:admin@gmail.com">admin@gmail.com</a>
                                    </li>
                                    <li>
                                        <i class="fab fa-instagram" aria-hidden="true"></i>
                                        <a href="#">bernard.show</a>
                                    </li>
                                    <li>
                                        <i class="fab fa-skype" aria-hidden="true"></i>
                                        <a href="#">skype.show</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="brk-team-persone-circle__social-links">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fab fa-google-plus-g" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>
@stop

@push('scripts')

@endpush
