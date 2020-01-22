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
                                <a href="{{ route('galeri.video') }}">Video</a>
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
                    
                    @foreach($video as $g)
                    <?php preg_match_all("#(?<=v=|v\/|vi=|vi\/|youtu.be\/)[a-zA-Z0-9_-]{11}#", 
                                                    $g->url, $matches);
                    ?>
                    <div class="col-12 col-md-4">
                        <div class="brk-portfolio-galleries__card">
                            <img id="video_img" class="brk-abs-img lazyload" alt="alt" src="{{ 'http://img.youtube.com/vi/'.$matches[0][0].'/hqdefault.jpg' }}" >


                            <div class="brk-portfolio-galleries__label pt-60 pl-70 pr-60 pb-50">
                                <h3 class="brk-dark-font-color font__family-montserrat font__size-12 font__weight-normal text-uppercase letter-spacing-100 mb-auto">
                                    {{ $g->judul }}
                                </h3>
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
                                <a href=" {{ $g->url }} "
                                    class="text-uppercase font__family-montserrat font__size-12 font__weight-bold text-underline letter-spacing-100 mt-30"><u>Lihat
                                        Video</u></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                {{ $video->links() }}
            </div>
        </div>
    </main>
</div>
<section id="portfolio">
</section>
@stop

@push('scripts')
<!-- <script>
    $("img").on("load", function() {
        // image loaded here
    }).attr("src", url);
    jQuery(document).ready(function () {
        var filename = '{{ $g->url }}';
        VID_REGEX = /(?:youtube(?:-nocookie)?\.com\/(?:[^\/\n\s]+\/\S+\/|(?:v|e(?:mbed)?)\/|\S*?[?&]v=)|youtu\.be\/)([a-zA-Z0-9_-]{11})/
        video_id = filename.match(VID_REGEX)[1];
        console.log(video_id);
        var _img = document.getElementById('video_img');

        var newImg = new Image;
        newImg.onload = function() {
            _img.src = this.src;
        }
        newImg.src = 'http://whatever';
    });
</script> -->
@endpush
