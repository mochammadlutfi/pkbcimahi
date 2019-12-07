<!DOCTYPE html>
<html lang="en" data-brk-skin="brk-blue.css">
<head>
	<title></title>

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
	<link rel="stylesheet" id="brk-direction-bootstrap" href="{{ asset('assets/frontend/css/components/backgrounds.css ') }}">
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
	<div class="main-wrapper">
		<main class="main-container">
			<!-- header -->
				@include('frontend.layouts.header')
			<!-- endofheader -->
			<div class="breadcrumbs__section breadcrumbs__section-thin brk-bg-center-cover lazyload" data-bg="{{ asset('assets/frontend/img/1920x258_1.jpg') }}" data-brk-library="component__breadcrumbs_css">
				<span class="brk-abs-bg-overlay brk-bg-grad opacity-80"></span>
				<div class="breadcrumbs__wrapper">
					<div class="container">
						<div class="row align-items-center">
							<div class="col-12 col-lg-6">
								<div class="d-flex justify-content-lg-end justify-content-start pr-40 pr-xs-0 breadcrumbs__title">
									<h2 class="brk-white-font-color font__weight-semibold font__size-48 line__height-68 font__family-montserrat">
										
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
											<a href="#"></a>
										</li>
									</ol>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
				<section>
				<div class="row no-gutters">
					<div class="col-12 col-lg-5 d-lg-block d-none">
						<div class="full-screen position-relative d-flex flex-column justify-content-center align-items-center z-index-2">
							<div class="brk-backgrounds brk-base-bg-gradient-15 brk-abs-overlay" data-brk-library="component__backgrounds_css,component__backgrounds_js,assets_particleground">
								<div class="brk-backgrounds__canvas brk-particles-standart"></div>
							</div>
							<div class="z-index-2 mt-25 pl-15 pr-15">
								<img src="{{ asset('uploads/'.auth()->user()->avatar) }}" alt="logo" class="">
								<!-- <a href="index.html" class="btn-backgrounds btn-backgrounds_transparent btn-backgrounds_left-icon font__family-montserrat font__weight-normal text-uppercase font__size-13 text-center" mb-30 style="padding-left:85px; padding-right: 60px;" data-brk-library="component__button">
									<span class="text">Ubah Foto</span>
									<span class="before"><i class="fas fa-arrow-left"></i></span>
								</a> -->
							</div>
							
						</div>
					</div>
					<div class="col-12 col-lg-7">
						<div class="full-screen d-flex align-items-center pt-30 pb-30 pt-lg-0 pb-lg-0">
							<div class="container-fluid">
								<div class="row justify-content-lg-start justify-content-center">
									<div class="col-lg-2 d-none d-lg-block"></div>
									<div class="col-12 col-lg-10">
										<h1 class="font__family-montserrat font__weight-bold font__size-42 line__height-42 mt-0 mb-45 text-center text-lg-left">Ubah Profile</h1>
										<form action="{{ url('/profile/update')  }}" class="brk-form brk-form-strict maxw-570 mx-auto mx-lg-0" data-brk-library="component__form" enctype="multipart/form-data" method="POST">
											
              								@csrf
              								<input type="hidden" name="id" value="{{ auth()->user()->id }}">
              								<div class="form-group">
												<input type="text" name="name" placeholder="Username" value="{{ auth()->user()->name }}" class="form-control @error('name') is-invalid @enderror">
												@error('name')
								                 <span class="text-danger" role="alert">
                                            		<strong>{{ $message }}</strong>
                                        		</span>
								                @enderror
											</div>
											<div class="form-group">
												<input type="text" name="email" placeholder="Alamat Email" value="{{ auth()->user()->email }}" class="form-control @error('email') is-invalid @enderror">
												@error('email')
								                 <span class="text-danger" role="alert">
                                            		<strong>{{ $message }}</strong>
                                        		</span>
								                @enderror
											</div>
											<div class="form-group">
												<input type="password" name="password" placeholder="Kata sandi" class="form-control @error('password') is-invalid @enderror">
												@error('password')
								                 <span class="text-danger" role="alert">
                                            		<strong>{{ $message }}</strong>
                                        		</span>
								                @enderror
											</div>
											<div class="form-group">
												<input type="password" name="password_confirmation" placeholder="Konfirmasi Kata sandi" class="form-control @error('password_confirmation') is-invalid @enderror">
												@error('password_confirmation')
								                 <span class="text-danger" role="alert">
                                            		<strong>{{ $message }}</strong>
                                        		</span>
								                @enderror
											</div>
											<div class="form-group">
												<input type="file" name="avatar" class="custom-file-input" id="validatedCustomFile">
												@error('avatar')
								                 <span class="text-danger" role="alert">
                                            		<strong>{{ $message }}</strong>
                                        		</span>
								                @enderror
											</div>

											<div class="d-flex flex-wrap justify-content-between align-items-center flex-column flex-lg-row">
												<button type="submit" class="btn-backgrounds btn-backgrounds btn-backgrounds_280 btn-backgrounds_white btn-backgrounds_left-icon font__family-montserrat font__weight-bold text-uppercase font__size-13 z-index-2 text-center letter-spacing-20 mt-30" data-brk-library="component__button" >
													<span class="text">Ubah</span>
													<span class="before"><i class="far fa-hand-point-right"></i></span>
												</button>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</main>
	</div>
</body>
<div class="brk-loader">
		<div class="brk-loader__loader"></div>
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
	<script defer="defer" src="{{ asset('assets/frontend/js/assets/jquery.particleground.min.js') }} "></script>
	<script defer="defer" src="{{ asset('assets/frontend/js/components/backgrounds.js') }} "></script>
	
	
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
		}()); /* END OF WRAPPING FUNCTION */
	</script>
</body>
</html>