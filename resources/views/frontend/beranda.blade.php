@extends('frontend.layouts.master')
@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/components/services.css ') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/components/widgets.css ') }}">
	<link rel="stylesheet" href="{{ asset('assets/frontend/css/components/sliders.css ') }}">
	<link rel="stylesheet" href="{{ asset('assets/frontend/css/components/dividers.css ') }}">
	<link rel="stylesheet" href="{{ asset('assets/frontend/css/components/content-sliders.css ') }}">
	<link rel="stylesheet" href="{{ asset('assets/frontend/css/components/shop-components-cards.css ') }}">
	<link rel="stylesheet" href="{{ asset('assets/frontend/css/components/team.css ') }}">
	<link rel="stylesheet" href="{{ asset('assets/frontend/css/components/portfolio-page.css ') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/components/svg-pattern.css ') }}">

	<!-- vendor -->
	<link rel="stylesheet" id="brk-direction-bootstrap" href="{{ asset('assets/frontend/vendor/swiper/css/swiper.min.css') }}">
	<link rel="stylesheet" id="brk-direction-bootstrap" href="{{ asset('assets/frontend/vendor/slickCarousel/css/slick.css') }}">
	<!-- vendor -->

@endsection

@section('title', $title)
@section('content')
<!------------------------------------------------------------------------ Slider -->
<div class="slider-thumbnailed-full height-100vh">
    <div class="swiper-container slider-thumbnailed-full-for" data-brk-swiper='{"autoplay": {"delay": 4500}}'>
        <div class="swiper-wrapper">
            {{-- @for ($i = 0; $i < 3; $i++)
				<div class="swiper-slide swiper-lazy" data-background="{{ asset('assets/frontend/img/1920x1080_3.jpg') }}"></div>
        <div class="swiper-slide swiper-lazy" data-background="{{ asset('assets/frontend/img/1920x1080_2.jpg') }}">
        </div>
        @endfor --}}
        @foreach($slider as $s)
        <div class="swiper-slide swiper-lazy" data-background="{{ asset('uploads/'.$s->path) }}"></div>
        @endforeach
    </div>
    <div class="slider-thumbnailed-full-prev">Prev</div>
    <div class="slider-thumbnailed-full-next">Next</div>
</div>
<div class="slider-thumbnailed-full-nav">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            @foreach($slider as $s)
            {{-- <div class="swiper-slide" style="background-image:url({{ asset('uploads/'.$s->thumbnail) }})"></div>
        --}}
        @endforeach
    </div>
</div>
</div>
</div>
<!------------------------------------------------------------------------ Slider -->
<section class="position-relative pt-50 pb-150 pt-xs-50 pb-xs-70 brk-bgi-1 brk-bgi-1 brk-bg-pattern brk-mt-minus-280"
    id="about">
    <span class="brk-abs-bg-overlay" style="background-color: rgba(240, 240, 241, 0.96);"></span>
    <span class="brk-svg-pattern-container brk-svg-pattern-container-7-bottom brk-svg-pattern-container_bottom">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1920 144">
            <defs>
                <path id="svg-pattern-id-1-2"
                    d="M1920 1489.12s-316.8 72.16-689 15.96c-256.8-38.77-524.63-105.83-756-116.7-218.56-10.27-420.43 40.37-475 63.95V1531h1920z" />
            </defs>
            <g>
                <g transform="translate(0 -1387)">
                    <use fill="#fff" xlink:href="#svg-pattern-id-1-2" />
                </g>
            </g>
        </svg>
    </span>
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-12 col-md-6">
                <div class="text-center mb-lg-100 mt-20 mt-lg-0 mb-40">
                    <h2 class="font__family-montserrat font__size-56 font__weight-bold line__height-48">
                       Tentang DPC PKB</h2>
                    <h2 class="font__family-playfair font__style-italic font__weight-normal font__size-48 line__height-52">
                    Kota Cimahi</h2>
                </div>
            </div>
        </div>
        <div class="services__wrapper-main services__wrapper-pedestal active__effect-main">
            <div class="row no-gutters align-items-center">
                <div class="col-md-6 col-lg-3">
                    <div class="info-box__wrapper-image wow fadeInLeft text-center" style="background-color:#00652d;">
                        <img src="{{ asset('assets/img/icon/clock.png') }}">
                        <h6 class="font__family-montserrat font__weight-semibold brk-white-font-color font__size-14 text-uppercase line__height-24 letter-spacing-100">
                            Sejarah</h6>
                        <p class="font__family-open-sans font__size-14 brk-white-font-color">Berdirinya partai politik yang bersifat kejuangan, kebangsaan, terbuka dan demokratis yang diberi nama Partai Kebangkitan Bangsa (PKB).</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="info-box__wrapper-image bg__style wow fadeIn text-center" style="background-color:#00652d;">
                        <img src="{{ asset('assets/img/icon/ancient-scroll.png') }}">
                        <h6 class="font__family-montserrat brk-white-font-color font__weight-semibold font__size-14 text-uppercase line__height-24 letter-spacing-100">
                            Naskah Deklarasi</h6>
                        <p class="font__family-open-sans font__size-14 brk-white-font-color">Cita - cita proklamasi kemerdekaan bangsa Indonesia adalah terwujudnya suatu bangsa yang merdeka dan bersatu.<br/><br/></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="info-box__wrapper-image wow fadeInRight text-center" style="background-color:#00652d;">
                        <img src="{{ asset('assets/img/icon/motivation.png') }}">
                        <h6 class="font__family-montserrat font__weight-semibold brk-white-font-color font__size-14 text-uppercase line__height-24 letter-spacing-100">
                            Mabda` Siyasi</h6>
                        <p class="font__family-open-sans font__size-14 brk-white-font-color">Wujud dari bangsa yang dicita-citakan itu adalah masyarakat yang terjamin hak asasi kemanusiaannya.<br/><br/></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="info-box__wrapper-image bg__style wow fadeInLeft text-center" style="background-color:#00652d;">
                        <img src="{{ asset('assets/img/icon/goal.png') }}">
                        <h6 class="font__family-montserrat font__weight-semibold brk-white-font-color font__size-14 text-uppercase line__height-24 letter-spacing-100">
                            Tujuan</h6>
                        <p class="font__family-open-sans font__size-14 brk-white-font-color">Mewujudkan cita-cita kemerdekaan Republik Indonesia sebagaimana dituangkan dalam Pembukaan Undang-Undang Dasar 1945.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!------------------------------------------------------------------------ Team -->

<section class="mb-80">
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
<!-------------------------------------------------------------------End of Team -->

<!------------------------------------------------------------------------ Event -->
<section>
    <div class="position-relative pb-40 pb-lg-100 pb-xl-240">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1920 136" class="brk-fill-white">
            <path d="M1920,136A3691.84,3691.84,0,0,0,0,136V0H1920Z" />
        </svg>
        <div class="brk-abs-overlay lazyload" data-bg="img/demo_shop_trendy/bg-patterns/9.png">
            <span class="brk-abs-overlay brk-base-bg-gradient--30deg-96"></span>
        </div>
        <div class="container">
            <div class="text-center mb-25">
                <h2 class="font__family-playfair font__style-italic font__weight-normal font__size-48 line__height-52 brk-library-rendered"
                     >
                    <span class="brk-white-font-color">Event Terbaru</span>
                </h2>
            </div>
            <div class="row justify-content-center">
                @foreach($event as $e)
                <div class="col-md-4">
                    <div class="brk-sc-bonus text-center pl-50 pr-50 pb-40 pt-50 d-flex flex-column mb-30">
                        <h6
                            class="brk-sc-bonus__subtitle font__family-montserrat brk-white-font-color font__size-14 font__weight-bold line__height-14 brk-bg-primary">
                            Senin, 1 Febuary 2019
                        </h6>
                        <h5
                            class="brk-sc-bonus__title font__family-montserrat font__size-21 font__weight-normal line__height-28 mb-15">
                            <span class="text-uppercase font__weight-medium">{{ $e->judul }}</span>
                        </h5>
                        <p class="font__family-open-sans font__size-16 font__weight-normal line__height-26 brk-dark-font-color" style="word-wrap: break-word;">
                            {{ str_limit($e->deskripsi, 150) }}
                        </p>
                        <a href="{{ route('event.detail', $e->slug) }}"
                            class="brk-base-font-color font__family-open-sans font__size-16 font__weight-normal line__height-26 brk-sc-bonus__link mt-2">Detail
                            Event</a>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="text-center">
                <a href="{{ url('/event') }}"
                    class="btn btn-inside-out btn-lg btn-inside-out-invert border-radius-30 font__weight-light pl-60 pr-60 brk-black-font-color">
                    <span class="before">Event Lainnya</span><span class="text">Event Lainnya</span><span
                        class="after">Event Lainnya</span>
                </a>
            </div>
        </div>

        <span class="brk-svg-pattern-container brk-svg-pattern-container-4 brk-svg-pattern-container_bottom">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1920 277"
                enable-background="new 0 0 1920 277" xml:space="preserve">
                <g>
                    <linearGradient id="path-id-4-1" gradientUnits="userSpaceOnUse" x1="960.0005" y1="276.999"
                        x2="960.0005" y2="0.7793">
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
<!------------------------------------------------------------------ End of Event -->


<!------------------------------------------------------------------------ News -->
<section>
    <div class="container mt-20">
        <div class="text-center mb-25">
            <h2
                class="font__family-playfair font__style-italic font__weight-normal font__size-48 line__height-52 brk-library-rendered">
                <span class="brk-dark-font-color">Post Terbaru</span>
            </h2>
        </div>
        <div class="row">
            @foreach($blog as $b)
            <div class="col-lg-4">
                <div class="post-rounded brk-base-box-shadow">
                    <div class="post-rounded__thumb lazyload"
                        data-bg="{{ $b['_embedded']['wp:featuredmedia']['0']['source_url'] }}">
                        <a href="{{ $b['link'] }}"
                            class="btn btn-inside-out btn-inside-out-invert btn-lg border-radius-30 font__family-open-sans font__weight-bold letter-spacing--100 z-index-1 post-rounded__btn pl-70 pr-70">
                            <span class="before">Selengkapnya</span><span class="text">Klik Disini</span><span
                                class="after">Selengkapnya</span>
                        </a>
                    </div>
                    <div class="post-rounded__text">
                        <a href="#">
                            <h3 class="font__family-montserrat font__weight-bold font__size-19">
                                {{ $b['title']['rendered'] }}
                            </h3>
                        </a>
                        <p class="font__family-open-sans font__size-16 brk-dark-font-color line__height-28">
                            <?= str_limit($b['content']['rendered'], 100) ?>
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="text-center mb-40 mt-25">
            <a href="https://blog.pkbcimahi.or.id/"
                class="btn btn-inside-out btn-lg btn-inside-out-invert border-radius-30 font__weight-light pl-60 pr-60 brk-black-font-color">
                <span class="before">Berita Lainnya</span><span class="text">Berita Lainnya</span><span
                    class="after">Berita
                    Lainnya</span>
            </a>
        </div>
</section>
<!--------------------------------------------------------------------- End of News -->
<section class="mb-30 mt-30">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6"><a href="#" class="logo-set">
                    <img src="{{ asset('assets/frontend/img/footer/2.png') }}" class="brk-logos__img" alt="alt">
                </a>
            </div>
            <div class="col-lg-3 col-sm-6"><a href="#" class="logo-set">
                    <img src="{{ asset('assets/frontend/img/footer/3.png') }}" class="brk-logos__img" alt="alt">
                </a>
            </div>
            <div class="col-lg-3 col-sm-6"><a href="#" class="logo-set">
                    <img src="{{ asset('assets/frontend/img/footer/4.png') }}" class="brk-logos__img" alt="alt">
                </a></div>
            <div class="col-lg-3 col-sm-6"><a href="#" class="logo-set">
                    <img src="{{ asset('assets/frontend/img/footer/5.png') }}" class="brk-logos__img" alt="alt">
                </a></div>
        </div>
    </div>
</section>

@stop
@push('scripts')
    <!-- vendor -->
	<script src="{{ asset('assets/frontend/vendor/swiper/js/swiper.min.js') }} "></script>
    <script src="{{ asset('assets/frontend/js/assets/swiper-skin.js') }} "></script>
    <script src="{{ asset('assets/frontend/js/assets/flexmenu.js') }} "></script>
    <script src="{{ asset('assets/frontend/js/assets/sliders-skin.js') }} "></script>
    <script src="{{ asset('assets/frontend/js/components/widgets.js') }} "></script>
    <script src="{{ asset('assets/frontend/js/components/team.js') }} "></script>
	<script src="{{ asset('assets/frontend/vendor/revslider/js/jquery.themepunch.tools.min.js') }} "></script>
	<script src="{{ asset('assets/frontend/vendor/revslider/js/jquery.themepunch.revolution.min.js') }} "></script>
	<script src="{{ asset('assets/frontend/vendor/revslider/js/extensions/revolution.extension.actions.min.js') }} "></script>
	<script src="{{ asset('assets/frontend/vendor/revslider/js/extensions/revolution.extension.layeranimation.min.js') }} "></script>
	<script src="{{ asset('assets/frontend/vendor/revslider/js/extensions/revolution.extension.navigation.min.js') }} "></script>
	<script src="{{ asset('assets/frontend/vendor/revslider/js/extensions/revolution.extension.parallax.min.js') }} "></script>
	<script src="{{ asset('assets/frontend/vendor/revslider/js/extensions/revolution.extension.slideanims.min.js') }} "></script>
    <script src="{{ asset('assets/frontend/vendor/slickCarousel/js/slick.min.js') }} "></script>

	<!-- vendor -->

	<script>
		var revapi7,
			tpj;
		(function() {
			if (!/loaded|interactive|complete/.test(document.readyState)) document.addEventListener("DOMContentLoaded", onLoad);
			else onLoad();

			function onLoad() {
				if (tpj === undefined) {
					tpj = jQuery;
					if ("on" == "on") tpj.noConflict();
				}
				if (tpj("#rev_slider_7_1").revolution == undefined) {
					revslider_showDoubleJqueryError("#rev_slider_7_1");
				} else {
					revapi7 = tpj("#rev_slider_7_1").show().revolution({
						startDelay: 100,
						sliderType: "standard",
						jsFileLocation: "vendor/revslider/js/",
						sliderLayout: "fullscreen",
						dottedOverlay: "none",
						delay: 6000,
						navigation: {
							keyboardNavigation: "off",
							keyboard_direction: "horizontal",
							mouseScrollNavigation: "off",
							mouseScrollReverse: "default",
							onHoverStop: "off",
							bullets: {
								enable: true,
								hide_onmobile: false,
								style: "brk-classic",
								hide_onleave: false,
								direction: "horizontal",
								h_align: "center",
								v_align: "bottom",
								h_offset: 0,
								v_offset: 20,
								space: 5,
								tmp: ''
							}
						},
						responsiveLevels: [1240, 1024, 778, 480],
						visibilityLevels: [1240, 1024, 778, 480],
						gridwidth: [1700, 1024, 768, 576],
						gridheight: [960, 768, 960, 720],
						lazyType: "none",
						minHeight: "768",
						parallax: {
							type: "mouse+scroll",
							origo: "enterpoint",
							speed: 400,
							speedbg: 0,
							speedls: 0,
							levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 51, 55],
							disable_onmobile: "on"
						},
						shadow: 0,
						spinner: "spinner2",
						stopLoop: "off",
						stopAfterLoops: -1,
						stopAtSlide: -1,
						shuffle: "off",
						autoHeight: "off",
						fullScreenAutoWidth: "on",
						fullScreenAlignForce: "off",
						fullScreenOffsetContainer: "",
						fullScreenOffset: "",
						disableProgressBar: "on",
						hideThumbsOnMobile: "off",
						hideSliderAtLimit: 0,
						hideCaptionAtLimit: 0,
						hideAllCaptionAtLilmit: 0,
						debugMode: false,
						fallbacks: {
							simplifyAll: "off",
							nextSlideOnWindowFocus: "off",
							disableFocusListener: false,
						}
					});
				}; /* END OF revapi call */
			}; /* END OF ON LOAD FUNCTION */
		}());
	</script>

@endpush
