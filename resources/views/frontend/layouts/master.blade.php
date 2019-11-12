<!DOCTYPE html>
<html lang="en" data-brk-skin="brk-blue.css">
<head>
	{{-- <title>@yield('title')</title> --}}

	<link rel="shortcut icon" href="{{ asset('assets/img/favicons/favicon.png') }}">
	<link rel="apple-touch-icon-precomposed" href="{{ asset('assets/img/favicons/apple-touch-icon-180x180.png') }}">
	<link rel="stylesheet" id="brk-direction-bootstrap" href="{{ asset('assets/frontend/css/assets/bootstrap.css') }}">
	<link rel="stylesheet" id="brk-skin-color" href="{{ asset('assets/frontend/css/skins/brk-blue.css') }}">
	<link id="brk-base-color" rel="stylesheet" href="{{ asset('assets/frontend/css/skins/brk-base-color.css') }}">
	<link rel="stylesheet" id="brk-direction-offsets" href="{{ asset('assets/frontend/css/assets/offsets.css') }}">
	<link id="brk-css-min" rel="stylesheet" href="{{ asset('assets/frontend/css/assets/styles.min.css') }}">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

	<!-- component -->
	<!-- beranda -->
	<link rel="stylesheet" id="brk-direction-bootstrap" href="{{ asset('assets/frontend/css/components/widgets.css ') }}">
	<link rel="stylesheet" id="brk-direction-bootstrap" href="{{ asset('assets/frontend/css/components/sliders.css ') }}">
	<link rel="stylesheet" id="brk-direction-bootstrap" href="{{ asset('assets/frontend/css/components/social-links.css ') }}">
	<link rel="stylesheet" id="brk-direction-bootstrap" href="{{ asset('assets/frontend/css/components/dividers.css ') }}">
	<link rel="stylesheet" id="brk-direction-bootstrap" href="{{ asset('assets/frontend/css/components/content-sliders.css ') }}">
	<link rel="stylesheet" id="brk-direction-bootstrap" href="{{ asset('assets/frontend/css/components/shop-components-cards.css ') }}">
	<link rel="stylesheet" id="brk-direction-bootstrap" href="{{ asset('assets/frontend/css/components/team.css ') }}">
	<link rel="stylesheet" id="brk-direction-bootstrap" href="{{ asset('assets/frontend/css/components/google-maps.css') }}">
	<link rel="stylesheet" id="brk-direction-bootstrap" href="{{ asset('assets/frontend/css/components/portfolio-page.css ') }}">
	<!-- galeri -->
	<link rel="stylesheet" id="brk-direction-bootstrap" href="{{ asset('assets/frontend/css/components/pagination.css') }}">
	<link rel="stylesheet" id="brk-direction-bootstrap" href="{{ asset('assets/frontend/css/components/breadcrumbs.css') }}">
	<link rel="stylesheet" id="brk-direction-bootstrap" href="{{ asset('assets/frontend/css/components/portfolio-galleries.css') }}">
	<!-- galeri detail -->
	<link rel="stylesheet" id="brk-direction-bootstrap" href="{{ asset('assets/frontend/css/components/gallery-cols.css') }}">
	<!-- blog -->
	<link rel="stylesheet" id="brk-direction-bootstrap" href="{{ asset('assets/frontend/css/components/blog.css') }}">
	<!-- QnA -->
	<link rel="stylesheet" id="brk-direction-bootstrap" href="{{ asset('assets/frontend/css/components/blog-page.css') }}">
	<!-- tanya fraksi -->
	<link rel="stylesheet" id="brk-direction-bootstrap" href="{{ asset('assets/frontend/css/components/forum-post.css') }}">
	<!-- sejarah -->
	<link rel="stylesheet" id="brk-direction-bootstrap" href="{{ asset('assets/frontend/css/components/lists.css') }}">
	<!-- component -->

	<!-- vendor -->
	<link rel="stylesheet" id="brk-direction-bootstrap" href="{{ asset('assets/frontend/vendor/swiper/css/swiper.min.css') }}">
	<link rel="stylesheet" id="brk-direction-bootstrap" href="{{ asset('assets/frontend/vendor/slickCarousel/css/slick.css') }}">
	<!-- vendor -->

	
</head>
<body>
	{{-- <div class="brk-loader">
		<div class="brk-loader__loader"></div>
	</div> --}}
	<div class="main-page">
			<!-- header -->
				@include('frontend.layouts.header')
			<!-- endofheader -->

			<!-- content -->
				@yield('content')
			<!-- endofcontent -->

			<!-- footer -->
				@include('frontend.layouts.footer')
			<!-- endoffooter -->
		
	</div>
	<!-- js	 -->
	<!-- beranda -->
	<script defer="defer" src="{{ asset('assets/frontend/js/scripts.min.js') }} "></script>
	<script defer="defer" src="{{ asset('assets/frontend/js/assets/swiper-skin.js') }} "></script>	
	<script defer="defer" src="{{ asset('assets/frontend/js/assets/flexmenu.js') }} "></script>
	<script defer="defer" src="{{ asset('assets/frontend/js/assets/sliders-skin.js') }} "></script>
	<script defer="defer" src="{{ asset('assets/frontend/js/components/widgets.js') }} "></script>
	<script defer="defer" src="{{ asset('assets/frontend/js/components/team.js') }} "></script>
	<script defer="defer" src="{{ asset('assets/frontend/js/components/google-maps.js') }} "></script>
	<!-- galeri -->
	<script defer="defer" src="{{ asset('assets/frontend/js/components/pagination.js') }} "></script>
	<!-- blog -->
	<script defer="defer" src="{{ asset('assets/frontend/js/components/blog.js') }} "></script>
	<!-- blog-page -->
	<script defer="defer" src="{{ asset('assets/frontend/js/assets/recaptcha.js') }} "></script>
	<!-- js	 -->

	<!-- vendor -->
	<script defer="defer" src="{{ asset('assets/frontend/vendor/swiper/js/swiper.min.js') }} "></script>
	<script defer="defer" src="{{ asset('assets/frontend/vendor/revslider/js/jquery.themepunch.tools.min.js') }} "></script>
	<script defer="defer" src="{{ asset('assets/frontend/vendor/revslider/js/jquery.themepunch.revolution.min.js') }} "></script>
	<script defer="defer" src="{{ asset('assets/frontend/vendor/revslider/js/extensions/revolution.extension.actions.min.js') }} "></script>
	<script defer="defer" src="{{ asset('assets/frontend/vendor/revslider/js/extensions/revolution.extension.layeranimation.min.js') }} "></script>
	<script defer="defer" src="{{ asset('assets/frontend/vendor/revslider/js/extensions/revolution.extension.navigation.min.js') }} "></script>
	<script defer="defer" src="{{ asset('assets/frontend/vendor/revslider/js/extensions/revolution.extension.parallax.min.js') }} "></script>
	<script defer="defer" src="{{ asset('assets/frontend/vendor/revslider/js/extensions/revolution.extension.slideanims.min.js') }} "></script>
	<script defer="defer" src="{{ asset('assets/frontend/vendor/slickCarousel/js/slick.min.js') }} "></script>
	<!-- galeri detail -->
	<script defer="defer" src="{{ asset('assets/frontend/vendor/fancybox/js/jquery.fancybox.min.js') }} "></script>
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
</body>
</html>
