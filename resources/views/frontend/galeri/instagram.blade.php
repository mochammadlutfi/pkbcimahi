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
                                <a href="{{ url('/galeri') }}">Galeri</a>
                                <i class="fal fa-chevron-right icon"></i>
                            </li>
                            <li>
                                <a href="#">Instagram</a>
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
        {{-- <div id="instagram-feed-demo" class="instagram_feed"></div> --}}
        <div class="ml-90 mt-30 mb-40">
            <div class="card mb-3" style="max-width: 540px; border: 0ch;">
                <div class="row no-gutters">
                  <div class="col-md-4">
                    <img class="instagram_profile_image mt-3 ml-3" src="https://scontent-sin2-2.cdninstagram.com/v/t51.2885-19/s150x150/68978428_2511035582445114_4294831016687697920_n.jpg?_nc_ht=scontent-sin2-2.cdninstagram.com&amp;_nc_cat=106&amp;oh=4ce834f6741983a0b586b95f8cb09301&amp;oe=5E74F4F4" alt="dpcpkb_cimahi profile pic" style="border-radius:10em;">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">DPC PKB Kota CIMAHI</h5>
                      <p class="card-text">Akun Resmi DPC PKB KOTA CIMAHI</p>
                      <p class="card-text">Facebook : Dpc pkb cimahi</p>
                        <p class="card-text">Halaman : PKB Kota Cimahi</p>
                        <p class="card-text">Twitter : @Dpcpkb_cimahi</p>
                        <p class="card-text">www.pkbcimahi.or.id</p>
                    </div>
                  </div>
                </div>
              </div>

            <div id="instafeed"></div>
        </div>

    </main>
</div>
<section id="portfolio">
</section>
@stop

@push('scripts')
{{-- <script src="https://code.jquery.com/jquery-3.3.1.min.js"integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="crossorigin="anonymous"></script>
<script src="{{ asset('assets/frontend/js/jquery.instagramFeed.min.js') }} "></script>
<script src="{{ asset('assets/frontend/js/jquery.instagramFeed.js') }} "></script>

    <script type="text/javascript">

$(window).on('load',function(){

    $.instagramFeed({
    'username': 'Dpcpkb_cimahi',
    'container': "#instagram-feed-demo",
    'display_profile': true,
    'display_biography': true,
    'display_igtv': false
  });
});
</script> --}}

    <script src="{{ asset('assets/frontend/js/instastory.js') }} "></script>
    <script type="text/javascript">
        (function($) {
            $("#instafeed").instastory({
                get:"@Dpcpkb_cimahi",
                limit: 15,
                imageSize: 240,
            });
        })(jQuery);
    </script>
@endpush
